@extends('layouts/layout')
@section('content')
    <div class="alert alert-primary">
        <ul>
            <li>Untuk Dapat Mencetak Formulir Pendaftaran Silahkan melakukan pembayaran formulir pendaftaran melalui no rekening xxxxxxxxxx atas nama Yayasan PPATQ Raudlatul Falah Pati.</li>
            <li>Jika sudah melakukan pembayaran silahkan mengupload bukti pembayaran dengan mengklik menu upload bukti pembayaran.</li>
            <li>Tunggu beberapa saat, admin kami akan memberikan informasi melalui Whatsapp apabila pembayaran telah di validasi. Pastikan No whatsapp yang terdaftar adalah nomor yang valid</li>
        </ul>


    </div>
    <div class="row">
        <div class="col-md-12" style="padding-top:10px;">
            <div class="row">
                <div class="col-md-12" id='alert-show'></div>
            </div>
            <div class="row">
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-primary col-md-12" id='data-diri'>
                        Data Diri
                    </a>
                </div>
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-secondary col-md-12" id='walsan'>
                        Data Wali Santri
                    </a>
                </div>
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-secondary col-md-12" id='asal-sekolah'>
                        Data Asal Sekolah
                    </a>
                </div>
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-secondary col-md-12" id='berkas'>
                        Berkas Pendukung
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-form" style="padding:30px" id="edit_pribadi">
                        @include('psb/_form_edit_pribadi')
                </div>
                <div class="col-md-12 my-form" style="padding:30px" id="edit_walsan">
                        @include('psb/_form_edit_walsan')
                </div>
                <div class="col-md-12 my-form" style="padding:30px" id="edit_asal_sekolah">
                        @include('psb/_form_edit_asal_sekolah')
                </div>
                <div class="col-md-12 my-form" style="padding:30px" id="edit_berkas">
                        @include('psb/_form_edit_berkas')
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".my-form").hide();
            $("#edit_pribadi").show();

            $("#data-diri").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_pribadi").fadeIn(500);
            });
            $("#walsan").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_walsan").fadeIn();
            });
            $("#asal-sekolah").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_asal_sekolah").fadeIn();
            });
            $("#berkas").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_berkas").fadeIn();
            });


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
            $("#provinsi").select2();
            $("#kota").select2();
        });

    </script>
@endsection
