<div class="space-y-6">

    <!-- Sub-heading Info -->
    <div class="flex items-center gap-2 pb-2 border-b border-emerald-100 text-emerald-900 font-bold text-base">
        <i class="fa-solid fa-users text-emerald-600"></i>
        <span>Langkah 2: Data Orang Tua / Wali Santri</span>
    </div>

    <!-- 2 Cards Grid: 1 Col Mobile, 2 Cols Tablet/Desktop -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">

        <!-- CARD 1: DATA AYAH -->
        <div class="p-4 sm:p-5 rounded-2xl bg-slate-50/70 border border-slate-200/80 space-y-4">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200 text-slate-800 font-bold text-sm">
                <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xs">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <span>Data Ayah Kandung</span>
            </div>

            <!-- Nama Ayah -->
            <div>
                <label for="nama_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Nama Lengkap Ayah
                </label>
                <input type="text" name="nama_ayah" id="nama_ayah" value="" placeholder="Nama lengkap ayah kandung"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
            </div>

            <!-- Pendidikan Ayah -->
            <div>
                <label for="pendidikan_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Pendidikan Terakhir Ayah
                </label>
                <select name="pendidikan_ayah" id="pendidikan_ayah"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-medium">
                    <option value="1">S2 / S3</option>
                    <option value="2">S1 / Sarjana</option>
                    <option value="3">Diploma (D1 - D4)</option>
                    <option value="4" selected>SMA / MA / Sederajat</option>
                    <option value="5">SMP / MTs</option>
                    <option value="6">SD / MI</option>
                </select>
            </div>

            <!-- Pekerjaan Ayah -->
            <div>
                <label for="pekerjaan_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Pekerjaan Ayah
                </label>
                <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" value="" placeholder="Contoh: Wiraswasta / PNS / Guru / Petani"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
            </div>
        </div>

        <!-- CARD 2: DATA IBU -->
        <div class="p-4 sm:p-5 rounded-2xl bg-slate-50/70 border border-slate-200/80 space-y-4">
            <div class="flex items-center gap-2 pb-2 border-b border-slate-200 text-slate-800 font-bold text-sm">
                <div class="w-7 h-7 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center text-xs">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span>Data Ibu Kandung</span>
            </div>

            <!-- Nama Ibu -->
            <div>
                <label for="nama_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Nama Lengkap Ibu
                </label>
                <input type="text" name="nama_ibu" id="nama_ibu" value="" placeholder="Nama lengkap ibu kandung"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
            </div>

            <!-- Pendidikan Ibu -->
            <div>
                <label for="pendidikan_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Pendidikan Terakhir Ibu
                </label>
                <select name="pendidikan_ibu" id="pendidikan_ibu"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-medium">
                    <option value="1">S2 / S3</option>
                    <option value="2">S1 / Sarjana</option>
                    <option value="3">Diploma (D1 - D4)</option>
                    <option value="4" selected>SMA / MA / Sederajat</option>
                    <option value="5">SMP / MTs</option>
                    <option value="6">SD / MI</option>
                </select>
            </div>

            <!-- Pekerjaan Ibu -->
            <div>
                <label for="pekerjaan_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Pekerjaan Ibu
                </label>
                <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" value="" placeholder="Contoh: Ibu Rumah Tangga / Guru / PNS / Karyawan"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
            </div>

            <!-- No. HP Ibu -->
            <div>
                <label for="no_telp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    No. Handphone / WhatsApp Ibu
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <input type="tel" name="no_telp" id="no_telp" value="" inputmode="tel" placeholder="Contoh: 081234567890"
                        class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
            </div>
        </div>

    </div>

</div>

