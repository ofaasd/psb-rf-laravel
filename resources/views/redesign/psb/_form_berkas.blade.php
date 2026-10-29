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
</script>

