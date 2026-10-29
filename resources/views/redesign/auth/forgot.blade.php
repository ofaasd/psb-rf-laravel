@extends('layouts/layout')

@section('content')
<div class="max-w-md mx-auto my-8">

    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-4 sm:p-6">
        <!-- Header -->
        <div class="text-center mb-6">
            <div class="w-16 h-16 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center mx-auto mb-3 shadow-inner text-2xl">
                <i class="fa-solid fa-key"></i>
            </div>
            <h3 class="text-2xl font-extrabold text-emerald-950">Lupa Password Akun</h3>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Masukkan data santri yang valid. Password baru akan dikirimkan otomatis ke WhatsApp Wali Santri.</p>
        </div>

        <form method="POST" id="forgot_form" action="javascript:void(0)" class="space-y-4">
            @csrf

            <!-- Nama Lengkap -->
            <div>
                <label for="nama" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Nama Lengkap Santri <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-regular fa-user"></i>
                    </span>
                    <input id="nama" type="text" name="nama" required placeholder="Nama lengkap sesuai pendaftaran"
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
                </div>
            </div>

            <!-- Tempat Lahir -->
            <div>
                <label for="tempat_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Tempat Lahir <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <input id="tempat_lahir" type="text" name="tempat_lahir" required placeholder="Kota tempat lahir"
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
                </div>
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <label for="tanggal_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Tanggal Lahir <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-regular fa-calendar"></i>
                    </span>
                    <input id="tanggal_lahir" type="date" name="tanggal_lahir" required
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
                </div>
            </div>

            <!-- No HP Wali -->
            <div>
                <label for="no_hp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    No. WhatsApp Wali Santri <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-brands fa-whatsapp"></i>
                    </span>
                    <input id="no_hp" type="text" name="no_hp" required placeholder="08xxxxxxxxxx"
                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" id="btn-submit-forgot" class="btn w-full bg-gradient-to-r from-emerald-600 to-teal-700 hover:from-emerald-700 hover:to-teal-800 text-white rounded-xl shadow-md font-bold text-sm py-2.5">
                    <i class="fa-solid fa-paper-plane mr-1.5"></i> Kirim Kode Password ke WA
                </button>
            </div>

            <div class="text-center pt-2 text-xs text-slate-500">
                Sudah ingat password?
                <a href="{{URL::to('login')}}" class="font-bold text-emerald-700 hover:underline ml-1">
                    Kembali ke Login
                </a>
            </div>
        </form>
    </x-mary-card>

</div>

<script>
$(document).ready(function(){
    const url_save = "{{URL::to('forgot')}}";
    $("#forgot_form").submit(function(e){
        e.preventDefault();
        const btn = $("#btn-submit-forgot");
        btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin mr-1.5"></i> Memproses...');

        let data = new FormData(this);
        $.ajax({
            method: "POST",
            url: url_save,
            processData: false,
            contentType: false,
            data: data,
            success: function(response){
                btn.prop('disabled', false).html('<i class="fa-solid fa-paper-plane mr-1.5"></i> Kirim Kode Password ke WA');
                try {
                    const hasil = JSON.parse(response);
                    if(hasil[0].code == 1){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: hasil[0].msg,
                            icon: 'success',
                            confirmButtonText: 'Ke Halaman Login',
                            confirmButtonColor: '#059669'
                        }).then((result) => {
                            window.location.href = "{{URL::to('login')}}";
                        });
                    } else {
                        Swal.fire({
                            title: 'Gagal',
                            text: hasil[0].msg,
                            icon: 'error',
                            confirmButtonText: 'Coba Lagi',
                            confirmButtonColor: '#dc2626'
                        });
                    }
                } catch(e) {
                    Swal.fire('Error', 'Terjadi kesalahan sistem, silakan coba lagi.', 'error');
                }
            },
            error: function(){
                btn.prop('disabled', false).html('<i class="fa-solid fa-paper-plane mr-1.5"></i> Kirim Kode Password ke WA');
                Swal.fire('Error', 'Gagal menghubungi server.', 'error');
            }
        });
    });
});
</script>
@endsection

