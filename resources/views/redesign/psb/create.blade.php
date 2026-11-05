@extends('layouts/layout')

@section('content')
<div class="space-y-6">

    @if($jumlah_gelombang < 1)
    <div class="p-8 rounded-3xl bg-rose-50 border border-rose-200 text-center max-w-lg mx-auto space-y-3">
        <div class="w-16 h-16 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center mx-auto text-2xl">
            <i class="fa-solid fa-lock"></i>
        </div>
        <h3 class="text-xl font-bold text-rose-900">Pendaftaran Santri Baru Telah Ditutup</h3>
        <p class="text-xs sm:text-sm text-rose-700">
            Mohon maaf, saat ini periode gelombang pendaftaran online belum dibuka atau sudah berakhir. Silakan pantau pengumuman di website resmi.
        </p>
        <div class="pt-2">
            <a href="{{URL::to('/')}}" class="btn btn-sm bg-rose-700 hover:bg-rose-800 text-white rounded-xl">
                <i class="fa-solid fa-house mr-1"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
    @else

    <!-- Title Section -->
    <div class="pb-4 border-b border-emerald-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
        <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-1">
                <i class="fa-solid fa-file-pen text-emerald-600"></i> Formulir Online
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-950">Form Pendaftaran Calon Santri Baru</h2>
            <p class="text-xs sm:text-sm text-slate-500 mt-0.5">Isi seluruh data calon santri dan wali secara lengkap dan benar.</p>
        </div>
        <div class="text-xs font-semibold px-3 py-1.5 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-200">
            <i class="fa-solid fa-circle-check text-emerald-600 mr-1"></i> Gelombang Pendaftaran Aktif
        </div>
    </div>

    <div id='alert-show' class="space-y-2"></div>
    <div class="riple-frame" style="display:none;"><div class="lds-ripple"><div></div><div></div></div></div>

    <!-- Wizard Form Card -->
    <style>
        /* Pastikan content wizard fleksibel mengikuti tinggi dinamis dan tombol actions tidak bertabrakan */
        #example-form .content {
            height: auto !important;
            min-height: auto !important;
            overflow: visible !important;
        }
        #example-form .content > .body {
            position: relative !important;
            height: auto !important;
            float: none !important;
            overflow: visible !important;
        }
        #example-form .actions {
            position: relative !important;
            clear: both !important;
            display: block !important;
            margin-top: 2.5rem !important;
            padding-top: 1.5rem !important;
            z-index: 10 !important;
        }
    </style>
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-4 sm:p-6 overflow-hidden">
        <form id="example-form" action="#" enctype="multipart/form-data">
            @csrf
            <div>
                <h3>Data Pribadi</h3>
                <section class="py-4">
                    @include('psb/_form_pribadi')
                </section>

                <h3>Data Wali Santri</h3>
                <section class="py-4">
                    @include('psb/_form_walsan')
                </section>

                <h3>Sekolah Asal</h3>
                <section class="py-4">
                    @include('psb/_form_asal')
                </section>

                <h3>Berkas Pendukung</h3>
                <section class="py-4">
                    @include('psb/_form_berkas')
                </section>
            </div>
        </form>
    </x-mary-card>

    <script>
        $(document).ready(function(){
            var form = $("#example-form");
            form.validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });

            let validatedStepOne = false;
            form.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "fade",
                labels: {
                    next: "Lanjut <i class='fa-solid fa-arrow-right ml-1'></i>",
                    previous: "<i class='fa-solid fa-arrow-left mr-1'></i> Kembali",
                    finish: "<i class='fa-solid fa-paper-plane mr-1'></i> Kirim Pendaftaran",
                    current: "Langkah Saat Ini:"
                },
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    if (currentIndex > newIndex) {
                        return true;
                    }
                    if(currentIndex == 0 && !validatedStepOne){
                        const myForm = form.serialize();
                        const url = "{{URL::to('psb/validation')}}";
                        form.validate().settings.ignore = ":disabled,:hidden";

                        if(form.valid()){
                            $.ajax({
                                url : url,
                                data : myForm,
                                method : "POST",
                                success : function(data){
                                    data = JSON.parse(data);
                                    if(parseInt(data[0].code)==0){
                                        $("#alert-show").html('');
                                        validatedStepOne = true;
                                        form.children("div").steps('next');
                                    }else{
                                        $("#alert-show").html('');
                                        data.forEach(function(item){
                                            $("#alert-show").prepend("<div class='p-3 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-xs font-semibold'>" + item.msg +"</div>");
                                        });
                                    }
                                }
                            });
                            return false;
                        }
                    }else{
                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    const myForm = form.serialize();
                    const url = "{{URL::to('psb/validation')}}";
                    $(".riple-frame").show();
                    $.ajax({
                        url : url,
                        data : myForm,
                        method : "POST",
                        success : function(data){
                            data = JSON.parse(data);
                            if(parseInt(data[0].code)==0){
                                $("#alert-show").html('');
                                validatedStepOne = true;
                                const urlSend = "{{URL::to('psb')}}";
                                const formData = new FormData(document.getElementById("example-form"));

                                $.ajax({
                                    url : urlSend,
                                    data : formData,
                                    processData: false,
                                    contentType: false,
                                    method : "POST",
                                    success : function(data){
                                        data = JSON.parse(data);
                                        $("#example-form").html(`
                                        <div class="p-8 rounded-3xl bg-emerald-50 border border-emerald-200 text-center space-y-4">
                                            <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto text-3xl">
                                                <i class="fa-solid fa-circle-check"></i>
                                            </div>
                                            <h3 class="text-2xl font-extrabold text-emerald-950">Pendaftaran Berhasil!</h3>
                                            <p class="text-sm text-emerald-800 max-w-lg mx-auto">
                                                Selamat, data calon santri telah terdaftar pada sistem Penerimaan Peserta Didik Baru PPATQ Raudlatul Falah Pati.
                                            </p>
                                            <div class="p-4 bg-white rounded-2xl border border-emerald-200 max-w-sm mx-auto text-left shadow-sm space-y-2">
                                                <p class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Simpan Akun Anda:</p>
                                                <div class="flex justify-between items-center text-sm">
                                                    <span class="text-slate-600">Username:</span>
                                                    <span class="font-mono font-bold text-emerald-800">${data[0].username}</span>
                                                </div>
                                                <div class="flex justify-between items-center text-sm">
                                                    <span class="text-slate-600">Password:</span>
                                                    <span class="font-mono font-bold text-emerald-800">${data[0].password}</span>
                                                </div>
                                            </div>
                                            <p class="text-xs text-slate-600 max-w-md mx-auto">
                                                Informasi akun juga telah dikirimkan via WhatsApp. Silakan masuk melalui menu Login untuk melengkapi berkas dan mengunggah bukti pembayaran.
                                            </p>
                                            <div class="pt-2">
                                                <a href="{{URL::to('login')}}" class="btn bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl px-6">
                                                    <i class="fa-solid fa-right-to-bracket mr-1.5"></i> Menuju Halaman Login
                                                </a>
                                            </div>
                                        </div>
                                        `);
                                        $(".riple-frame").hide();
                                        $.ajax({
                                            url : urlSend + '/send_wa_file',
                                            data : {"_token": "{{ csrf_token() }}",username:data[0].username,no_wa : data[0].no_wa,pesan : data[0].pesan,file : data[0].url_file},
                                            method : "POST",
                                            success : function(data){
                                                console.log(data);
                                            }
                                        });
                                    }
                                });
                            }else{
                                $("#alert-show").html('');
                                data.forEach(function(item){
                                    $("#alert-show").prepend("<div class='p-3 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-xs font-semibold'>" + item.msg +"</div>");
                                });
                                $(".riple-frame").hide();
                            }
                        }
                    });
                }
            });

            if (typeof $.fn.select2 !== 'undefined') {
                $("#provinsi, #kota, #kecamatan, #kelurahan").select2({
                    width: '100%',
                    dropdownAutoWidth: true
                });
            }
        });
    </script>
    @endif

</div>
@endsection

