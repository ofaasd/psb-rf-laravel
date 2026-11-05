<div class="space-y-6">

    <!-- Sub-heading Info -->
    <div class="flex items-center gap-2 pb-2 border-b border-emerald-100 text-emerald-900 font-bold text-base">
        <i class="fa-solid fa-folder-open text-emerald-600"></i>
        <span>Langkah 4: Upload Berkas & Dokumen Pendukung</span>
    </div>

    <!-- Info Banner -->
    <div class="p-3.5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-xs flex items-start gap-2.5">
        <i class="fa-solid fa-circle-info text-emerald-600 mt-0.5 text-sm"></i>
        <div class="space-y-0.5">
            <p class="font-bold">Format Dokumen yang Didukung:</p>
            <p class="text-slate-600">File upload dapat berformat <b>JPG, JPEG, PNG, atau PDF</b> dengan ukuran maksimal <b>10 MB</b> per dokumen. Berkas dapat dilengkapi kemudian setelah login.</p>
        </div>
    </div>

    <!-- Upload Grid: 1 Col Mobile, 2 Cols Desktop -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- 1. Pas Foto -->
        <div class="p-4 rounded-2xl bg-slate-50/70 border border-slate-200/80 hover:border-emerald-400 transition space-y-2">
            <div class="flex items-center justify-between">
                <label class="block text-xs font-bold text-slate-800 uppercase tracking-wide flex items-center gap-1.5">
                    <i class="fa-solid fa-camera text-emerald-600"></i> Pas Foto Calon Santri
                </label>
                <span class="badge badge-ghost badge-xs font-mono">JPG/PNG</span>
            </div>
            <div id='photo_error'></div>
            <div class="relative border-2 border-dashed border-slate-300 hover:border-emerald-500 rounded-xl p-4 text-center bg-white cursor-pointer transition">
                <input type="file" name="photo" accept=".jpg,.jpeg,.png,.pdf" onchange="updateFileName(this, 'label_photo')"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                <div class="space-y-1">
                    <i class="fa-solid fa-cloud-arrow-up text-2xl text-emerald-600"></i>
                    <p class="text-xs font-bold text-slate-700" id="label_photo">Ketuk untuk pilih foto santri</p>
                    <p class="text-[11px] text-slate-400">Foto resmi berpakaian sopan</p>
                </div>
            </div>
        </div>

        <!-- 2. Kartu Keluarga (KK) -->
        <div class="p-4 rounded-2xl bg-slate-50/70 border border-slate-200/80 hover:border-emerald-400 transition space-y-2">
            <div class="flex items-center justify-between">
                <label class="block text-xs font-bold text-slate-800 uppercase tracking-wide flex items-center gap-1.5">
                    <i class="fa-solid fa-file-invoice text-emerald-600"></i> Kartu Keluarga (KK)
                </label>
                <span class="badge badge-ghost badge-xs font-mono">PDF/JPG</span>
            </div>
            <div id='kk_error'></div>
            <div class="relative border-2 border-dashed border-slate-300 hover:border-emerald-500 rounded-xl p-4 text-center bg-white cursor-pointer transition">
                <input type="file" name="kk" accept=".jpg,.jpeg,.png,.pdf" onchange="updateFileName(this, 'label_kk')"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                <div class="space-y-1">
                    <i class="fa-solid fa-cloud-arrow-up text-2xl text-emerald-600"></i>
                    <p class="text-xs font-bold text-slate-700" id="label_kk">Ketuk untuk upload file KK</p>
                    <p class="text-[11px] text-slate-400">Scan / Foto Kartu Keluarga</p>
                </div>
            </div>
        </div>

        <!-- 3. KTP Orang Tua -->
        <div class="p-4 rounded-2xl bg-slate-50/70 border border-slate-200/80 hover:border-emerald-400 transition space-y-2">
            <div class="flex items-center justify-between">
                <label class="block text-xs font-bold text-slate-800 uppercase tracking-wide flex items-center gap-1.5">
                    <i class="fa-solid fa-id-card text-emerald-600"></i> KTP Orang Tua / Wali
                </label>
                <span class="badge badge-ghost badge-xs font-mono">PDF/JPG</span>
            </div>
            <div id='ktp_error'></div>
            <div class="relative border-2 border-dashed border-slate-300 hover:border-emerald-500 rounded-xl p-4 text-center bg-white cursor-pointer transition">
                <input type="file" name="ktp" accept=".jpg,.jpeg,.png,.pdf" onchange="updateFileName(this, 'label_ktp')"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                <div class="space-y-1">
                    <i class="fa-solid fa-cloud-arrow-up text-2xl text-emerald-600"></i>
                    <p class="text-xs font-bold text-slate-700" id="label_ktp">Ketuk untuk upload file KTP</p>
                    <p class="text-[11px] text-slate-400">KTP Ayah atau Ibu</p>
                </div>
            </div>
        </div>

        <!-- 4. Akta Kelahiran -->
        <div class="p-4 rounded-2xl bg-slate-50/70 border border-slate-200/80 hover:border-emerald-400 transition space-y-2">
            <div class="flex items-center justify-between">
                <label class="block text-xs font-bold text-slate-800 uppercase tracking-wide flex items-center gap-1.5">
                    <i class="fa-solid fa-certificate text-emerald-600"></i> Akta Kelahiran Santri
                </label>
                <span class="badge badge-ghost badge-xs font-mono">PDF/JPG</span>
            </div>
            <div id='akta_error'></div>
            <div class="relative border-2 border-dashed border-slate-300 hover:border-emerald-500 rounded-xl p-4 text-center bg-white cursor-pointer transition">
                <input type="file" name="akta" accept=".jpg,.jpeg,.png,.pdf" onchange="updateFileName(this, 'label_akta')"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                <div class="space-y-1">
                    <i class="fa-solid fa-cloud-arrow-up text-2xl text-emerald-600"></i>
                    <p class="text-xs font-bold text-slate-700" id="label_akta">Ketuk untuk upload Akta Lahir</p>
                    <p class="text-[11px] text-slate-400">Scan / Foto Akta Kelahiran</p>
                </div>
            </div>
        </div>

        <!-- 5. Rapor / Ijazah (Full width or 2nd column) -->
        <div class="p-4 rounded-2xl bg-slate-50/70 border border-slate-200/80 hover:border-emerald-400 transition space-y-2 md:col-span-2">
            <div class="flex items-center justify-between">
                <label class="block text-xs font-bold text-slate-800 uppercase tracking-wide flex items-center gap-1.5">
                    <i class="fa-solid fa-file-lines text-emerald-600"></i> Rapor / Ijazah / Surat Keterangan Lulus
                </label>
                <span class="badge badge-ghost badge-xs font-mono">PDF/JPG</span>
            </div>
            <div id='rapor_error'></div>
            <div class="relative border-2 border-dashed border-slate-300 hover:border-emerald-500 rounded-xl p-4 text-center bg-white cursor-pointer transition">
                <input type="file" name="rapor" accept=".jpg,.jpeg,.png,.pdf" onchange="updateFileName(this, 'label_rapor')"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                <div class="space-y-1">
                    <i class="fa-solid fa-cloud-arrow-up text-2xl text-emerald-600"></i>
                    <p class="text-xs font-bold text-slate-700" id="label_rapor">Ketuk untuk upload Rapor / Ijazah</p>
                    <p class="text-[11px] text-slate-400">Rapor terakhir atau Ijazah TK / RA / SD</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Kuesioner Sumber Informasi -->
    <div class="mt-8 pt-6 border-t border-slate-200/80 space-y-4">
        <div class="flex items-center gap-2.5 pb-2">
            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-sm shadow-xs">
                <i class="fa-solid fa-bullhorn"></i>
            </span>
            <div>
                <h4 class="text-sm font-bold text-slate-800">
                    Mendapatkan Info PPATQ-RF Dari Mana? <span class="text-rose-500">*</span>
                </h4>
                <p class="text-xs text-slate-500">Pilih salah satu sumber informasi utama yang mengenalkan Anda pada PPATQ-RF.</p>
            </div>
        </div>

        @php
            $currentSumber = $psb_peserta->sumber_informasi ?? '';
            $currentKet = $psb_peserta->sumber_informasi_keterangan ?? '';
        @endphp

        <!-- Radio Options Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            
            <!-- 1. Saudara - Family / Alumni -->
            <label class="flex items-start gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-xs">
                <input type="radio" name="sumber_informasi" value="saudara_keluarga_alumni" {{ $currentSumber === 'saudara_keluarga_alumni' ? 'checked' : '' }} required class="radio radio-success radio-sm mt-0.5" />
                <div class="space-y-0.5">
                    <span class="block text-xs font-bold text-slate-800">Saudara / Keluarga Besar / Alumni</span>
                    <span class="block text-[11px] text-slate-500">Saudara, family, atau alumni PPATQ-RF</span>
                </div>
            </label>

            <!-- 2. Sosial Media -->
            <label class="flex items-start gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-xs">
                <input type="radio" name="sumber_informasi" value="sosial_media" {{ $currentSumber === 'sosial_media' ? 'checked' : '' }} required class="radio radio-success radio-sm mt-0.5" />
                <div class="space-y-0.5">
                    <span class="block text-xs font-bold text-slate-800">Sosial Media</span>
                    <span class="block text-[11px] text-slate-500">Instagram, Facebook, YouTube, TikTok</span>
                </div>
            </label>

            <!-- 3. Website Resmi -->
            <label class="flex items-start gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-xs">
                <input type="radio" name="sumber_informasi" value="website_resmi" {{ $currentSumber === 'website_resmi' ? 'checked' : '' }} required class="radio radio-success radio-sm mt-0.5" />
                <div class="space-y-0.5">
                    <span class="block text-xs font-bold text-slate-800">Website Resmi</span>
                    <span class="block text-[11px] text-slate-500">Website resmi ppatq-rf.id</span>
                </div>
            </label>

            <!-- 4. Media Massa -->
            <label class="flex items-start gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-xs">
                <input type="radio" name="sumber_informasi" value="media_massa" {{ $currentSumber === 'media_massa' ? 'checked' : '' }} required class="radio radio-success radio-sm mt-0.5" />
                <div class="space-y-0.5">
                    <span class="block text-xs font-bold text-slate-800">Media Massa</span>
                    <span class="block text-[11px] text-slate-500">Koran, majalah, radio, atau berita online</span>
                </div>
            </label>

            <!-- 5. Lainnya (Full width on sm) -->
            <label class="sm:col-span-2 flex items-start gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-xs">
                <input type="radio" name="sumber_informasi" id="sumber_lainnya_radio" value="lainnya" {{ $currentSumber === 'lainnya' ? 'checked' : '' }} required class="radio radio-success radio-sm mt-0.5" />
                <div class="space-y-0.5 flex-1">
                    <span class="block text-xs font-bold text-slate-800">Lainnya...</span>
                    <span class="block text-[11px] text-slate-500">Teman, brosur, acara, atau sumber informasi lain</span>
                </div>
            </label>

        </div>

        <!-- Input Text Khusus Opsi Lainnya -->
        <div id="wrapper_sumber_lainnya" class="{{ $currentSumber === 'lainnya' ? '' : 'hidden' }} p-4 rounded-2xl bg-emerald-50/60 border border-emerald-200 space-y-1.5 transition">
            <label for="sumber_informasi_keterangan" class="block text-xs font-bold text-emerald-950 uppercase tracking-wider">
                Sebutkan Sumber Informasi Lainnya: <span class="text-rose-500">*</span>
            </label>
            <input type="text" name="sumber_informasi_keterangan" id="sumber_informasi_keterangan"
                value="{{ $currentKet }}"
                placeholder="Contoh: Brosur di sekolah, rekomendasi ustadz, pameran pendidikan, dll."
                class="w-full px-4 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800">
        </div>
    </div>

</div>

<script>
function updateFileName(input, targetId) {
    if (input.files && input.files[0]) {
        const file = input.files[0];
        const sizeMb = (file.size / (1024 * 1024)).toFixed(2);
        document.getElementById(targetId).innerHTML = `
            <span class="text-emerald-700 font-bold flex items-center justify-center gap-1">
                <i class="fa-solid fa-check-circle text-emerald-600"></i> ${file.name} (${sizeMb} MB)
            </span>
        `;
    }
}

$(document).ready(function() {
    $('input[name="sumber_informasi"]').on('change', function() {
        if ($(this).val() === 'lainnya') {
            $('#wrapper_sumber_lainnya').removeClass('hidden');
            $('#sumber_informasi_keterangan').attr('required', true).focus();
        } else {
            $('#wrapper_sumber_lainnya').addClass('hidden');
            $('#sumber_informasi_keterangan').removeAttr('required').val('');
        }
        $('.wizard > .content, #example-form .content').css('height', 'auto');
    });
});
</script>

