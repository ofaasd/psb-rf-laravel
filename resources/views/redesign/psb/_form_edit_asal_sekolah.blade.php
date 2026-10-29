<form action="javascript:void(0)" enctype="multipart/form-data" method="post" id="form_asal_sekolah">
    @csrf
    <input type="hidden" name="psb_asal_sekolah" value="{{$psb_asal->id}}">
    <input type="hidden" name="psb_seragam" value="{{$psb_seragam->id}}">

    <div class="space-y-6">

        <!-- Grid Container: Asal Sekolah & Ukuran Seragam (2 Cols on Large Screens) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Card 1: Informasi Sekolah Asal -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-50/50 to-teal-50/20 border border-emerald-100/90 space-y-4">
                <div class="flex items-center gap-2 pb-3 border-b border-emerald-100 text-emerald-950 font-bold text-base">
                    <span class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center text-sm shadow-xs">
                        <i class="fa-solid fa-school"></i>
                    </span>
                    <span>Informasi Sekolah Asal</span>
                </div>

                <!-- Dari Jenjang & Kelas Terakhir (2 Cols) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label for="jenjang" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Jenjang Asal
                        </label>
                        <select name="jenjang" id="jenjang"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none font-medium text-slate-800">
                            <option value="1" {{(!empty($psb_asal) && $psb_asal->jenjang == 1) ? 'selected' : ''}}>TK (Taman Kanak-Kanak)</option>
                            <option value="2" {{(!empty($psb_asal) && $psb_asal->jenjang == 2) ? 'selected' : ''}}>RA (Raudhatul Athfal)</option>
                            <option value="3" {{(!empty($psb_asal) && $psb_asal->jenjang == 3) ? 'selected' : ''}}>SD / MI</option>
                        </select>
                    </div>

                    <div>
                        <label for="kelas" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Kelas Terakhir
                        </label>
                        <input type="text" name="kelas" id="kelas" placeholder="Cth: TK B / SD Kelas 3"
                            value="{{$psb_asal->kelas??''}}"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                    </div>
                </div>

                <!-- Nama Sekolah Asal -->
                <div>
                    <label for="nama_sekolah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Nama Sekolah Asal
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </span>
                        <input type="text" name="nama_sekolah" id="nama_sekolah" placeholder="Cth: RA Al-Hidayah / TK Pembina"
                            value="{{$psb_asal->nama_sekolah??''}}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-semibold" />
                    </div>
                </div>

                <!-- Nomor Legalitas Sekolah (NSS / NPSN / NISN) -->
                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/80 space-y-3">
                    <p class="text-[11px] font-bold text-slate-600 uppercase tracking-wider">
                        Nomor Identitas Sekolah & Santri (Jika Ada)
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                        <div>
                            <label for="nss" class="block text-[11px] font-semibold text-slate-600 mb-1">
                                NSM / NSS
                            </label>
                            <input type="text" name="nss" id="nss" placeholder="NSM/NSS"
                                value="{{$psb_asal->nss??''}}"
                                class="w-full px-3 py-2 rounded-lg border border-slate-300 bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200 transition text-xs outline-none font-mono" />
                        </div>
                        <div>
                            <label for="npsn" class="block text-[11px] font-semibold text-slate-600 mb-1">
                                NPSN
                            </label>
                            <input type="text" name="npsn" id="npsn" placeholder="NPSN"
                                value="{{$psb_asal->npsn??''}}"
                                class="w-full px-3 py-2 rounded-lg border border-slate-300 bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200 transition text-xs outline-none font-mono" />
                        </div>
                        <div>
                            <label for="nisn" class="block text-[11px] font-semibold text-slate-600 mb-1">
                                NISN
                            </label>
                            <input type="text" name="nisn" id="nisn" placeholder="NISN Santri"
                                value="{{$psb_asal->nisn??''}}"
                                class="w-full px-3 py-2 rounded-lg border border-slate-300 bg-white focus:border-emerald-500 focus:ring-1 focus:ring-emerald-200 transition text-xs outline-none font-mono" />
                        </div>
                    </div>
                </div>

            </div>

            <!-- Card 2: Ukuran Badan (Untuk Seragam Santri) -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-indigo-50/50 to-blue-50/20 border border-indigo-100/90 space-y-4">
                <div class="flex items-center gap-2 pb-3 border-b border-indigo-100 text-slate-900 font-bold text-base">
                    <span class="w-8 h-8 rounded-lg bg-indigo-600 text-white flex items-center justify-center text-sm shadow-xs">
                        <i class="fa-solid fa-shirt"></i>
                    </span>
                    <span>Ukuran Seragam Santri</span>
                </div>

                <p class="text-xs text-slate-600">
                    Data ukuran badan digunakan untuk penjahitan seragam pesantren dan madrasah agar pas saat dikenakan.
                </p>

                <!-- Grid 2x2 Ukuran -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
                    
                    <!-- Tinggi Badan -->
                    <div>
                        <label for="tinggi_badan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Tinggi Badan
                        </label>
                        <div class="relative">
                            <input type="number" name="tinggi_badan" id="tinggi_badan" min="50" max="220" placeholder="Cth: 125"
                                value="{{$psb_seragam->tinggi_badan??''}}"
                                class="w-full pl-4 pr-12 py-3 rounded-xl border border-slate-300 bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition text-sm outline-none text-slate-800 font-semibold" />
                            <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-xs font-bold text-slate-400">
                                CM
                            </span>
                        </div>
                    </div>

                    <!-- Berat Badan -->
                    <div>
                        <label for="berat_badan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Berat Badan
                        </label>
                        <div class="relative">
                            <input type="number" name="berat_badan" id="berat_badan" min="10" max="150" placeholder="Cth: 28"
                                value="{{$psb_seragam->berat_badan??''}}"
                                class="w-full pl-4 pr-12 py-3 rounded-xl border border-slate-300 bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition text-sm outline-none text-slate-800 font-semibold" />
                            <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-xs font-bold text-slate-400">
                                KG
                            </span>
                        </div>
                    </div>

                    <!-- Lingkar Dada -->
                    <div>
                        <label for="lingkar_dada" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Lingkar Dada
                        </label>
                        <div class="relative">
                            <input type="number" name="lingkar_dada" id="lingkar_dada" min="30" max="150" placeholder="Cth: 65"
                                value="{{$psb_seragam->lingkar_dada??''}}"
                                class="w-full pl-4 pr-12 py-3 rounded-xl border border-slate-300 bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition text-sm outline-none text-slate-800 font-semibold" />
                            <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-xs font-bold text-slate-400">
                                CM
                            </span>
                        </div>
                    </div>

                    <!-- Lingkar Pinggul -->
                    <div>
                        <label for="lingkar_pinggul" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Lingkar Pinggul
                        </label>
                        <div class="relative">
                            <input type="number" name="lingkar_pinggul" id="lingkar_pinggul" min="30" max="150" placeholder="Cth: 68"
                                value="{{$psb_seragam->lingkar_pinggul??''}}"
                                class="w-full pl-4 pr-12 py-3 rounded-xl border border-slate-300 bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition text-sm outline-none text-slate-800 font-semibold" />
                            <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-xs font-bold text-slate-400">
                                CM
                            </span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Submit Button Action Area -->
        <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span class="text-xs text-slate-500 flex items-center gap-1">
                <i class="fa-solid fa-circle-check text-emerald-600"></i> Pastikan data ukuran dicatat akurat demi kenyamanan santri.
            </span>
            <button type="submit" id="btn_submit_asal_sekolah" 
                    class="w-full sm:w-auto btn bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-md px-7 py-3 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-solid fa-floppy-disk text-sm"></i>
                <span class="btn-text">Simpan Asal Sekolah & Ukuran</span>
            </button>
        </div>

    </div>
</form>

<script>
$(document).ready(function(){
    const url_save_asal = "{{URL::to('psb/update_data_asal_sekolah')}}";

    $("#form_asal_sekolah").submit(function(e){
        e.preventDefault();
        const $btn = $("#btn_submit_asal_sekolah");
        const originalContent = $btn.html();

        // Loading state
        $btn.prop('disabled', true)
            .addClass('opacity-75 cursor-not-allowed')
            .html('<i class="fa-solid fa-spinner fa-spin text-white"></i> <span>Menyimpan Data Sekolah...</span>');

        const formData = new FormData(this);

        $.ajax({
            method: "POST",
            url: url_save_asal,
            processData: false,
            contentType: false,
            data: formData,
            success: function(data){
                try {
                    const hasil = typeof data === 'object' ? data : JSON.parse(data);
                    if(hasil[0].code == 1){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Data Sekolah Asal & Ukuran Seragam Berhasil Disimpan',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#047857',
                            timer: 2000
                        });
                    } else {
                        Swal.fire({
                            title: 'Gagal!',
                            text: hasil[0].msg || 'Data Gagal Disimpan',
                            icon: 'error',
                            confirmButtonText: 'Tutup',
                            confirmButtonColor: '#e11d48'
                        });
                    }
                } catch(err) {
                    Swal.fire({
                        title: 'Tersimpan',
                        text: 'Data telah diproses oleh server.',
                        icon: 'info',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#047857'
                    });
                }
            },
            error: function(xhr, status, error){
                Swal.fire({
                    title: 'Terjadi Kesalahan!',
                    text: 'Gagal menyimpan data asal sekolah: ' + (xhr.responseJSON?.message || error || 'Silakan coba lagi'),
                    icon: 'error',
                    confirmButtonText: 'Tutup',
                    confirmButtonColor: '#e11d48'
                });
            },
            complete: function(){
                // Restore button
                $btn.prop('disabled', false)
                    .removeClass('opacity-75 cursor-not-allowed')
                    .html(originalContent);
            }
        });
    });
});
</script>

