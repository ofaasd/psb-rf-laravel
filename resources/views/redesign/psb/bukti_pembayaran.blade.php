@extends('layouts/layout')

@section('content')
<div class="max-w-2xl mx-auto space-y-6" id="bukti_box">

    @if(empty($bukti_bayar) || $bukti_bayar == 0)

    <!-- Bank Information Mary Card -->
    <x-mary-card shadow class="border border-emerald-200 bg-gradient-to-br from-emerald-50/90 to-teal-50/70 rounded-3xl p-4 sm:p-6">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-2xl bg-emerald-600 text-white flex items-center justify-center text-xl shadow-md">
                <i class="fa-solid fa-building-columns"></i>
            </div>
            <div>
                <h3 class="text-xl font-extrabold text-emerald-950">Petunjuk Pembayaran Formulir</h3>
                <p class="text-xs text-emerald-700">Silakan transfer biaya pendaftaran santri baru ke rekening resmi pondok:</p>
            </div>
        </div>

        <!-- Bank Details Card -->
        <div class="bg-white rounded-2xl p-4 border border-emerald-100 shadow-sm space-y-3">
            <div class="flex items-center justify-between pb-2 border-b border-slate-100">
                <span class="text-xs text-slate-500 font-medium">Bank Tujuan</span>
                <span class="font-bold text-sm text-slate-800 flex items-center gap-1.5">
                    <span class="badge badge-success badge-sm text-white">BSI</span> Bank Syariah Indonesia
                </span>
            </div>
            <div class="flex items-center justify-between pb-2 border-b border-slate-100">
                <span class="text-xs text-slate-500 font-medium">Nomor Rekening</span>
                <div class="flex items-center gap-2">
                    <span class="font-mono font-extrabold text-base text-emerald-800" id="rekText">7141299818</span>
                    <button type="button" onclick="copyRek()" class="btn btn-xs btn-ghost text-emerald-700 hover:bg-emerald-50 rounded-lg" title="Salin Nomor Rekening">
                        <i class="fa-regular fa-copy"></i> Salin
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between pb-2 border-b border-slate-100">
                <span class="text-xs text-slate-500 font-medium">Atas Nama Rekening</span>
                <span class="font-semibold text-xs sm:text-sm text-slate-800">PONPES ANAK TAHFIDZUL QUR'AN RF</span>
            </div>
            <div class="flex items-center justify-between pt-1">
                <span class="text-xs text-slate-500 font-medium">Nominal Transfer</span>
                <span class="font-extrabold text-lg text-emerald-700">Rp 300.000</span>
            </div>
        </div>

        <p class="text-xs text-slate-600 mt-3 flex items-center gap-1.5">
            <i class="fa-solid fa-circle-check text-emerald-600"></i>
            Setelah melakukan pembayaran, mohon unggah bukti transfer pada form konfirmasi di bawah ini.
        </p>
    </x-mary-card>

    <!-- Upload Form Mary Card -->
    <x-mary-card title="Konfirmasi & Upload Bukti Pembayaran" shadow class="border border-slate-200 bg-white rounded-3xl p-4 sm:p-6">
        <form class="space-y-4" id="bukti_bayar_form" action="javascript:void(0)" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$psb_peserta->id}}">

            <!-- Bank Pengirim -->
            <div>
                <label for="bank_pengirim" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Bank Pengirim <span class="text-rose-500">*</span>
                </label>
                <input type="text" name="bank_pengirim" required placeholder="Contoh: BRI / BCA / BSI / Mandiri"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
            </div>

            <!-- No. Rekening Pengirim -->
            <div>
                <label for="no_rekening" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    No. Rekening Pengirim <span class="text-rose-500">*</span>
                </label>
                <input type="text" name="no_rekening" required placeholder="Contoh: 1234567890"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
            </div>

            <!-- Atas Nama Pengirim -->
            <div>
                <label for="atas_nama" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Atas Nama Pengirim <span class="text-rose-500">*</span>
                </label>
                <input type="text" name="atas_nama" required placeholder="Nama pemilik rekening pengirim"
                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none bg-slate-50/50" />
            </div>

            <!-- Upload File -->
            <div>
                <label for="bukti" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Upload Bukti Transfer / Struk <span class="text-rose-500">*</span>
                </label>
                <div class="relative border-2 border-dashed border-slate-300 hover:border-emerald-500 rounded-2xl p-6 text-center bg-slate-50/50 transition">
                    <input type="file" name="bukti" required accept=".jpg,.jpeg,.png,.pdf"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="fileInput" onchange="previewFileName(this)" />
                    <div class="space-y-1">
                        <i class="fa-solid fa-cloud-arrow-up text-3xl text-emerald-600"></i>
                        <p class="text-sm font-semibold text-slate-700" id="fileLabel">Pilih file atau seret ke sini</p>
                        <p class="text-xs text-slate-400">Format JPG, PNG, atau PDF (Maksimal 10 MB)</p>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" id="btn-submit-bukti" class="btn w-full bg-gradient-to-r from-emerald-600 to-teal-700 hover:from-emerald-700 hover:to-teal-800 text-white rounded-xl shadow font-bold text-sm py-2.5">
                    <i class="fa-solid fa-paper-plane mr-1.5"></i> Kirim Konfirmasi Pembayaran
                </button>
            </div>
        </form>
    </x-mary-card>

    @elseif($bukti_bayar == 1)
    <div class="p-6 rounded-3xl bg-amber-50 border border-amber-200 text-amber-900 shadow-sm text-center space-y-3">
        <div class="w-14 h-14 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center mx-auto text-2xl">
            <i class="fa-solid fa-hourglass-half animate-spin"></i>
        </div>
        <h3 class="text-lg font-bold">Pembayaran Sedang Dalam Proses Verifikasi</h3>
        <p class="text-xs sm:text-sm text-amber-800 max-w-md mx-auto">
            Bukti transfer Anda telah diterima oleh panitia PSB. Kami akan melakukan verifikasi dan mengirimkan pemberitahuan resmi melalui WhatsApp jika pembayaran telah tervalidasi.
        </p>
    </div>

    @else
    <div class="p-6 rounded-3xl bg-emerald-50 border border-emerald-200 text-emerald-950 shadow-sm text-center space-y-3">
        <div class="w-14 h-14 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto text-2xl">
            <i class="fa-solid fa-circle-check"></i>
        </div>
        <h3 class="text-xl font-bold">Pembayaran Anda Telah Tervalidasi!</h3>
        <p class="text-xs sm:text-sm text-emerald-800 max-w-md mx-auto">
            Terima kasih, pembayaran pendaftaran santri baru Anda sudah diverifikasi oleh panitia. Anda kini dapat mencetak formulir pendaftaran resmi.
        </p>
        <div class="pt-2">
            <a href="{{URL::to('psb/cetak_formulir')}}" class="btn bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl shadow px-6">
                <i class="fa-solid fa-print mr-1.5"></i> Cetak Formulir Pendaftaran (PDF)
            </a>
        </div>
    </div>
    @endif

</div>

<script>
function copyRek() {
    navigator.clipboard.writeText("7141299818").then(function() {
        Swal.fire({
            title: 'Tersalin!',
            text: 'Nomor rekening 7141299818 berhasil disalin ke clipboard.',
            icon: 'success',
            timer: 2000,
            showConfirmButton: false
        });
    });
}

function previewFileName(input) {
    if (input.files && input.files[0]) {
        document.getElementById('fileLabel').innerText = input.files[0].name;
    }
}

$(document).ready(function(){
    const url_save = "{{URL::to('psb/simpan_bukti')}}";
    $("#bukti_bayar_form").submit(function(e){
        e.preventDefault();
        const btn = $("#btn-submit-bukti");
        btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin mr-1.5"></i> Mengunggah...');

        let data = new FormData(this);
        $.ajax({
            method: "POST",
            url: url_save,
            processData: false,
            contentType: false,
            data: data,
            success: function(response){
                let res = JSON.parse(response);
                if(res[0].code == 1){
                    $("#bukti_box").html(`
                        <div class="p-6 rounded-3xl bg-amber-50 border border-amber-200 text-amber-900 shadow-sm text-center space-y-3">
                            <div class="w-14 h-14 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center mx-auto text-2xl">
                                <i class="fa-solid fa-hourglass-half"></i>
                            </div>
                            <h3 class="text-lg font-bold">Pembayaran Sedang Dalam Proses Verifikasi</h3>
                            <p class="text-xs sm:text-sm text-amber-800 max-w-md mx-auto">
                                Bukti transfer Anda telah berhasil dikirim. Panitia PSB akan memverifikasi dan mengirimkan konfirmasi via WhatsApp.
                            </p>
                        </div>
                    `);
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Bukti pembayaran berhasil disimpan.',
                        icon: 'success',
                        confirmButtonText: 'Tutup',
                        confirmButtonColor: '#059669',
                        timer: 3000
                    });
                } else {
                    btn.prop('disabled', false).html('<i class="fa-solid fa-paper-plane mr-1.5"></i> Kirim Konfirmasi Pembayaran');
                    Swal.fire('Gagal', res[0].msg || 'Gagal menyimpan bukti pembayaran', 'error');
                }
            },
            error: function(){
                btn.prop('disabled', false).html('<i class="fa-solid fa-paper-plane mr-1.5"></i> Kirim Konfirmasi Pembayaran');
                Swal.fire('Error', 'Terjadi kesalahan saat mengunggah file.', 'error');
            }
        });
    });
});
</script>
@endsection

