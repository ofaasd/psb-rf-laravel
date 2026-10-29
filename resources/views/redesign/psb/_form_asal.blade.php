<div class="space-y-6">

    <!-- Sub-heading Info -->
    <div class="flex items-center gap-2 pb-2 border-b border-emerald-100 text-emerald-900 font-bold text-base">
        <i class="fa-solid fa-school text-emerald-600"></i>
        <span>Langkah 3: Asal Sekolah & Ukuran Seragam</span>
    </div>

    <!-- 1. DATA ASAL SEKOLAH -->
    <div class="p-4 sm:p-5 rounded-2xl bg-slate-50/70 border border-slate-200/80 space-y-4">
        <div class="flex items-center gap-2 pb-2 border-b border-slate-200 text-slate-800 font-bold text-sm">
            <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-xs">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <span>Informasi Sekolah Sebelumnya</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Jenjang -->
            <div>
                <label for="jenjang" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Jenjang Sebelumnya
                </label>
                <select name="jenjang" id="jenjang"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-medium">
                    <option value="1">TK</option>
                    <option value="2">RA</option>
                    <option value="3">SD / MI</option>
                </select>
            </div>

            <!-- Kelas Terakhir -->
            <div>
                <label for="kelas" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Kelas Terakhir
                </label>
                <input type="text" name="kelas" id="kelas" value="" placeholder="Contoh: TK B / SD Kelas 3"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
            </div>

            <!-- Nama Sekolah -->
            <div>
                <label for="nama_sekolah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Nama Sekolah Asal
                </label>
                <input type="text" name="nama_sekolah" id="nama_sekolah" value="" placeholder="Contoh: TK Tunas Bakti"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-medium" />
            </div>
        </div>

        <!-- Nomor Induk / Registrasi Sekolah -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
            <div>
                <label for="nss" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    NSM / NSS
                </label>
                <input type="text" name="nss" id="nss" value="" placeholder="Nomor NSM / NSS"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
            </div>
            <div>
                <label for="npsn" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    NPSN
                </label>
                <input type="text" name="npsn" id="npsn" value="" placeholder="Nomor Pokok Sekolah Nasional"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
            </div>
            <div>
                <label for="nisn" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    NISN Santri
                </label>
                <input type="text" name="nisn" id="nisn" value="" placeholder="Nomor Induk Siswa Nasional"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
            </div>
        </div>
    </div>

    <!-- 2. UKURAN BADAN (UNTUK SERAGAM) -->
    <div class="p-4 sm:p-5 rounded-2xl bg-slate-50/70 border border-slate-200/80 space-y-4">
        <div class="flex items-center gap-2 pb-2 border-b border-slate-200 text-slate-800 font-bold text-sm">
            <div class="w-7 h-7 rounded-lg bg-teal-100 text-teal-700 flex items-center justify-center text-xs">
                <i class="fa-solid fa-shirt"></i>
            </div>
            <span>Ukuran Badan (Untuk Keperluan Seragam Pondok)</span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4">
            <!-- Tinggi Badan -->
            <div>
                <label for="tinggi_badan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Tinggi Badan
                </label>
                <div class="relative">
                    <input type="number" name="tinggi_badan" id="tinggi_badan" value="" placeholder="Contoh: 125"
                        class="w-full pr-10 pl-3 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-xs font-bold text-slate-400">CM</span>
                </div>
            </div>

            <!-- Berat Badan -->
            <div>
                <label for="berat_badan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Berat Badan
                </label>
                <div class="relative">
                    <input type="number" name="berat_badan" id="berat_badan" value="" placeholder="Contoh: 26"
                        class="w-full pr-10 pl-3 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-xs font-bold text-slate-400">KG</span>
                </div>
            </div>

            <!-- Lingkar Dada -->
            <div>
                <label for="lingkar_dada" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Lingkar Dada
                </label>
                <div class="relative">
                    <input type="number" name="lingkar_dada" id="lingkar_dada" value="" placeholder="Contoh: 60"
                        class="w-full pr-10 pl-3 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-xs font-bold text-slate-400">CM</span>
                </div>
            </div>

            <!-- Lingkar Pinggul -->
            <div>
                <label for="lingkar_pinggul" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Lingkar Pinggul
                </label>
                <div class="relative">
                    <input type="number" name="lingkar_pinggul" id="lingkar_pinggul" value="" placeholder="Contoh: 65"
                        class="w-full pr-10 pl-3 py-3 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-xs font-bold text-slate-400">CM</span>
                </div>
            </div>
        </div>
    </div>

</div>

