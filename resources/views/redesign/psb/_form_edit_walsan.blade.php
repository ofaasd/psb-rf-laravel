<form action="javascript:void(0)" enctype="multipart/form-data" method="post" id="form_edit_walsan">
    @csrf
    <input type="hidden" name="id" value="{{$psb_peserta->id}}">
    <input type="hidden" name="psb_wali_id" value="{{$psb_wali->id}}">

    <div class="space-y-6">

        <!-- Grid Container: Data Ayah & Data Ibu (2 Cols on Large Screens) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Card 1: Data Ayah Kandung -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-50/50 to-teal-50/20 border border-emerald-100/90 space-y-4">
                <div class="flex items-center gap-2 pb-3 border-b border-emerald-100 text-emerald-950 font-bold text-base">
                    <span class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center text-sm shadow-xs">
                        <i class="fa-solid fa-user-tie"></i>
                    </span>
                    <span>Data Ayah Kandung</span>
                </div>

                <!-- Nama Ayah -->
                <div>
                    <label for="nama_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Nama Lengkap Ayah
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" name="nama_ayah" id="nama_ayah" placeholder="Nama ayah kandung"
                            value="{{$psb_wali->nama_ayah??''}}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-semibold" />
                    </div>
                </div>

                <!-- Pendidikan Ayah -->
                <div>
                    <label for="pendidikan_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Pendidikan Terakhir Ayah
                    </label>
                    <select name="pendidikan_ayah" id="pendidikan_ayah"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none font-medium text-slate-800">
                        <option value="1" {{(!empty($psb_wali) && $psb_wali->pendidikan_ayah == 1) ? 'selected' : ''}}>S2 / S3</option>
                        <option value="2" {{(!empty($psb_wali) && $psb_wali->pendidikan_ayah == 2) ? 'selected' : ''}}>S1 / Sarjana</option>
                        <option value="3" {{(!empty($psb_wali) && $psb_wali->pendidikan_ayah == 3) ? 'selected' : ''}}>Diploma (D1 - D4)</option>
                        <option value="4" {{(!empty($psb_wali) && $psb_wali->pendidikan_ayah == 4) ? 'selected' : ''}}>SMA / MA / SMK</option>
                        <option value="5" {{(!empty($psb_wali) && $psb_wali->pendidikan_ayah == 5) ? 'selected' : ''}}>SMP / MTs</option>
                        <option value="6" {{(!empty($psb_wali) && $psb_wali->pendidikan_ayah == 6) ? 'selected' : ''}}>SD / MI</option>
                    </select>
                </div>

                <!-- Pekerjaan Ayah -->
                <div>
                    <label for="pekerjaan_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Pekerjaan Ayah
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                        </span>
                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="PNS, Wiraswasta, Petani, dll"
                            value="{{$psb_wali->pekerjaan_ayah??''}}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                    </div>
                </div>

                <!-- No Handphone Ayah (WhatsApp) -->
                <div>
                    <label for="no_hp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        No. Handphone / WhatsApp Ayah <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-emerald-600 font-bold text-sm">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                        </span>
                        <input type="tel" name="no_hp" id="no_hp" required placeholder="08xxxxxxxxxx"
                            value="<?=$psb_wali->no_hp??''?>"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono font-medium" />
                    </div>
                    <p class="text-[11px] text-slate-500 mt-1">Nomor aktif untuk pengiriman notifikasi & informasi PSB.</p>
                </div>
            </div>

            <!-- Card 2: Data Ibu Kandung -->
            <div class="p-5 rounded-2xl bg-gradient-to-br from-pink-50/40 to-rose-50/20 border border-pink-100/90 space-y-4">
                <div class="flex items-center gap-2 pb-3 border-b border-pink-100 text-slate-900 font-bold text-base">
                    <span class="w-8 h-8 rounded-lg bg-pink-600 text-white flex items-center justify-center text-sm shadow-xs">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span>Data Ibu Kandung</span>
                </div>

                <!-- Nama Ibu -->
                <div>
                    <label for="nama_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Nama Lengkap Ibu
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama ibu kandung"
                            value="{{$psb_wali->nama_ibu??''}}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition text-sm outline-none text-slate-800 font-semibold" />
                    </div>
                </div>

                <!-- Pendidikan Ibu -->
                <div>
                    <label for="pendidikan_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Pendidikan Terakhir Ibu
                    </label>
                    <select name="pendidikan_ibu" id="pendidikan_ibu"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition text-sm outline-none font-medium text-slate-800">
                        <option value="1" {{(!empty($psb_wali) && $psb_wali->pendidikan_ibu == 1) ? 'selected' : ''}}>S2 / S3</option>
                        <option value="2" {{(!empty($psb_wali) && $psb_wali->pendidikan_ibu == 2) ? 'selected' : ''}}>S1 / Sarjana</option>
                        <option value="3" {{(!empty($psb_wali) && $psb_wali->pendidikan_ibu == 3) ? 'selected' : ''}}>Diploma (D1 - D4)</option>
                        <option value="4" {{(!empty($psb_wali) && $psb_wali->pendidikan_ibu == 4) ? 'selected' : ''}}>SMA / MA / SMK</option>
                        <option value="5" {{(!empty($psb_wali) && $psb_wali->pendidikan_ibu == 5) ? 'selected' : ''}}>SMP / MTs</option>
                        <option value="6" {{(!empty($psb_wali) && $psb_wali->pendidikan_ibu == 6) ? 'selected' : ''}}>SD / MI</option>
                    </select>
                </div>

                <!-- Pekerjaan Ibu -->
                <div>
                    <label for="pekerjaan_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Pekerjaan Ibu
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                        </span>
                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Ibu Rumah Tangga, Guru, PNS, dll"
                            value="{{$psb_wali->pekerjaan_ibu??''}}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition text-sm outline-none text-slate-800" />
                    </div>
                </div>

                <!-- No Handphone Ibu -->
                <div>
                    <label for="no_telp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        No. Handphone / WhatsApp Ibu
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <input type="tel" name="no_telp" id="no_telp" placeholder="08xxxxxxxxxx"
                            value="{{$psb_wali->no_telp??''}}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition text-sm outline-none text-slate-800 font-mono" />
                    </div>
                </div>
            </div>

        </div>

        <!-- Submit Button Action Area -->
        <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span class="text-xs text-slate-500 flex items-center gap-1">
                <i class="fa-solid fa-shield-halved text-emerald-600"></i> Data wali santri dijaga kerahasiaannya untuk keperluan administrasi santri.
            </span>
            <button type="submit" id="btn_submit_walsan" 
                    class="w-full sm:w-auto btn bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-md px-7 py-3 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-solid fa-floppy-disk text-sm"></i>
                <span class="btn-text">Simpan Data Wali Santri</span>
            </button>
        </div>

    </div>
</form>

<script>
$(document).ready(function(){
    const url_save_walsan = "{{URL::to('psb/update_data_walsan')}}";

    $("#form_edit_walsan").submit(function(e){
        e.preventDefault();
        const $btn = $("#btn_submit_walsan");
        const originalContent = $btn.html();

        // Loading animation & disabled state
        $btn.prop('disabled', true)
            .addClass('opacity-75 cursor-not-allowed')
            .html('<i class="fa-solid fa-spinner fa-spin text-white"></i> <span>Menyimpan Data Wali...</span>');

        const formData = new FormData(this);

        $.ajax({
            method: "POST",
            url: url_save_walsan,
            processData: false,
            contentType: false,
            data: formData,
            success: function(data){
                try {
                    const hasil = typeof data === 'object' ? data : JSON.parse(data);
                    if(hasil[0].code == 1){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Data Wali Santri Berhasil Disimpan',
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
                    text: 'Gagal menyimpan data wali: ' + (xhr.responseJSON?.message || error || 'Silakan periksa koneksi Anda'),
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

