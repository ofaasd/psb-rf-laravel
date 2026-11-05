<div class="space-y-6">

    <!-- Sub-heading Info -->
    <div class="flex items-center gap-2 pb-2 border-b border-emerald-100 text-emerald-900 font-bold text-base">
        <i class="fa-solid fa-id-card text-emerald-600"></i>
        <span>Langkah 1: Identitas & Data Pribadi Calon Santri</span>
    </div>

    <!-- Grid Container: 1 Col Mobile, 2 Cols Tablet/Desktop -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">

        <!-- Kolom Kiri -->
        <div class="space-y-4">
            
            <!-- Gelombang Pendaftaran (Disembunyikan Sesuai Permintaan) -->
            <div class="hidden">
                <select name="gelombang" id="gelombang">
                    @foreach($gelombang as $row)
                    <option value="{{$row->id}}" {{ $loop->first ? 'selected' : '' }}>{{$row->nama_gel}}</option>
                    @endforeach
                </select>
            </div>

            <!-- NIK Santri -->
            <div>
                <label for="nik" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    NIK Calon Santri (16 Digit)
                </label>
                <input type="text" name="nik" id="nik" inputmode="numeric" maxlength="16" placeholder="Contoh: 3318xxxxxxxxxxxx"
                    value="<?=$psb_peserta->nik??''?>"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
            </div>

            <!-- Nama Lengkap -->
            <div>
                <label for="nama" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Nama Lengkap Santri <span class="text-rose-500">*</span>
                </label>
                <input type="text" name="nama" id="nama" required placeholder="Nama lengkap sesuai akta / KK"
                    value="<?=$psb_peserta->nama??''?>"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-semibold" />
            </div>

            <!-- Nama Panggilan -->
            <div>
                <label for="nama_panggilan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Nama Panggilan
                </label>
                <input type="text" name="nama_panggilan" id="nama_panggilan" placeholder="Nama panggilan santri"
                    value="<?=$psb_peserta->nama_panggilan??''?>"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
            </div>

            <!-- Jenis Kelamin (Tap-Friendly Radio Cards) -->
            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                    Jenis Kelamin <span class="text-rose-500">*</span>
                </label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-3 p-3.5 rounded-xl border-2 border-slate-200 bg-slate-50/60 hover:bg-emerald-50/50 hover:border-emerald-400 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50 has-[:checked]:text-emerald-900">
                        <input type="radio" name="jenis_kelamin" value="L" id="laki-laki" required class="radio radio-success radio-sm" />
                        <span class="font-bold text-sm flex items-center gap-1.5">
                            <i class="fa-solid fa-mars text-blue-600"></i> Laki-laki
                        </span>
                    </label>
                    <label class="flex items-center gap-3 p-3.5 rounded-xl border-2 border-slate-200 bg-slate-50/60 hover:bg-emerald-50/50 hover:border-emerald-400 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50 has-[:checked]:text-emerald-900">
                        <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required class="radio radio-success radio-sm" />
                        <span class="font-bold text-sm flex items-center gap-1.5">
                            <i class="fa-solid fa-venus text-pink-600"></i> Perempuan
                        </span>
                    </label>
                </div>
            </div>

            <!-- Tempat & Tanggal Lahir -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label for="tempat_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Tempat Lahir <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" required placeholder="Kota lahir"
                        value="<?=$user->tempat_lahir??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
                <div>
                    <label for="tanggal_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Tanggal Lahir <span class="text-rose-500">*</span>
                    </label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                        value="<?=$user->tanggal_lahir??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
            </div>

            <!-- No. HP Ayah / Kontak WA -->
            <div>
                <label for="no_hp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    No. WhatsApp Ayah / Wali <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-emerald-600">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                    </span>
                    <input type="tel" name="no_hp" id="no_hp" required inputmode="tel" placeholder="Contoh: 081234567890"
                        value="<?=$psb_wali->no_hp??''?>"
                        class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-medium" />
                </div>
                <p class="text-[11px] text-slate-500 mt-1">Username & password akun PSB akan dikirimkan otomatis ke nomor ini.</p>
            </div>

        </div>

        <!-- Kolom Kanan -->
        <div class="space-y-4">

            <!-- Jumlah Saudara & Anak Ke -->
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label for="jumlah_saudara" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Jml. Saudara Kandung
                    </label>
                    <input type="number" min="0" name="jumlah_saudara" id="jumlah_saudara" placeholder="0"
                        value="<?=$psb_peserta->jumlah_saudara??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
                <div>
                    <label for="anak_ke" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Anak Ke
                    </label>
                    <input type="number" min="1" name="anak_ke" id="anak_ke" placeholder="1"
                        value="<?=$psb_peserta->anak_ke??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
            </div>

            <!-- Alamat Lengkap -->
            <div>
                <label for="alamat" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Alamat Lengkap <span class="text-rose-500">*</span>
                </label>
                <textarea name="alamat" id="alamat" required rows="3" placeholder="Nama jalan, RT/RW, Dusun/Perumahan, No. rumah"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800"><?=$psb_peserta->alamat??''?></textarea>
            </div>

            <!-- Wilayah Domisili (Grid) -->
            <div class="p-4 rounded-2xl bg-slate-50/80 border border-slate-200/80 space-y-3">
                <p class="text-xs font-bold text-emerald-800 uppercase tracking-wider flex items-center gap-1.5">
                    <i class="fa-solid fa-map-location-dot"></i> Wilayah Administrasi
                </p>

                <!-- Provinsi & Kota -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label for="provinsi" class="block text-xs font-semibold text-slate-600 mb-1">
                            Provinsi <span class="text-rose-500">*</span>
                        </label>
                        <select name="provinsi" id="provinsi" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                            <option value="0">-- Pilih Provinsi --</option>
                            @foreach($provinsi as $row)
                            <option value="{{$row->id_provinsi}}">{{$row->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="kota" class="block text-xs font-semibold text-slate-600 mb-1">
                            Kota / Kabupaten <span class="text-rose-500">*</span>
                        </label>
                        <select name="kota" id="kota" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                            <option value="0">-- Pilih Kota --</option>
                        </select>
                    </div>
                </div>

                <!-- Kecamatan & Kelurahan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label for="kecamatan" class="block text-xs font-semibold text-slate-600 mb-1">
                            Kecamatan <span class="text-rose-500">*</span>
                        </label>
                        <select name="kecamatan" id="kecamatan" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                            <option value="0">-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                    <div>
                        <label for="kelurahan" class="block text-xs font-semibold text-slate-600 mb-1">
                            Kelurahan / Desa <span class="text-rose-500">*</span>
                        </label>
                        <select name="kelurahan" id="kelurahan" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                            <option value="0">-- Pilih Kelurahan --</option>
                        </select>
                    </div>
                </div>

                <!-- Kode Pos -->
                <div>
                    <label for="kode_pos" class="block text-xs font-semibold text-slate-600 mb-1">
                        Kode Pos <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" name="kode_pos" id="kode_pos" required inputmode="numeric" placeholder="Contoh: 59162"
                        value="<?=$psb_peserta->kelurahan??''?>"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none font-mono" />
                </div>
            </div>

        </div>

    </div>

    <!-- SECTION: Keterkaitan Saudara Kandung -->
    <div class="mt-6 pt-5 border-t border-slate-200/80">
        <div class="flex items-center gap-2 mb-3">
            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-sm">
                <i class="fa-solid fa-people-roof"></i>
            </span>
            <div>
                <h4 class="text-sm font-bold text-slate-800">Keterkaitan Saudara Kandung di PPATQ-RF</h4>
                <p class="text-xs text-slate-500">Pilih jika calon santri memiliki saudara kandung yang aktif atau alumni di pondok.</p>
            </div>
        </div>

        @php
            $keterkaitan = $psb_peserta->keterkaitan_saudara ?? 'tidak_ada';
            $saudaraId = $psb_peserta->saudara_id ?? '';
            $namaSaudara = $psb_peserta->nama_saudara ?? '';
            $kelasSaudara = $psb_peserta->kelas_saudara ?? '';
            $tahunLulusSaudara = $psb_peserta->tahun_lulus_saudara ?? '';
        @endphp

        <!-- Radio Pilihan Keterkaitan -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
            <!-- 1. Tidak Ada -->
            <label class="saudara-option-card flex items-center gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-sm">
                <input type="radio" name="keterkaitan_saudara" value="tidak_ada" {{ $keterkaitan === 'tidak_ada' ? 'checked' : '' }} class="radio radio-success radio-sm" />
                <div>
                    <span class="block text-xs font-bold text-slate-800">Tidak Ada Saudara Kandung</span>
                    <span class="block text-[11px] text-slate-500">Tidak punya saudara di pondok</span>
                </div>
            </label>

            <!-- 2. Ada Saudara Aktif -->
            <label class="saudara-option-card flex items-center gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-sm">
                <input type="radio" name="keterkaitan_saudara" value="aktif" {{ $keterkaitan === 'aktif' ? 'checked' : '' }} class="radio radio-success radio-sm" />
                <div>
                    <span class="block text-xs font-bold text-slate-800">Ada Saudara Aktif</span>
                    <span class="block text-[11px] text-slate-500">Masih belajar di PPATQ-RF</span>
                </div>
            </label>

            <!-- 3. Ada Saudara Alumni -->
            <label class="saudara-option-card flex items-center gap-3 p-3.5 rounded-2xl border-2 border-slate-200 bg-white hover:border-emerald-300 hover:bg-emerald-50/30 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50/70 has-[:checked]:shadow-sm">
                <input type="radio" name="keterkaitan_saudara" value="alumni" {{ $keterkaitan === 'alumni' ? 'checked' : '' }} class="radio radio-success radio-sm" />
                <div>
                    <span class="block text-xs font-bold text-slate-800">Ada Saudara Alumni</span>
                    <span class="block text-[11px] text-slate-500">Sudah lulus dari PPATQ-RF</span>
                </div>
            </label>
        </div>

        <!-- Hidden Inputs yang dikirim ke Backend -->
        <input type="hidden" name="saudara_id" id="saudara_id" value="{{ $saudaraId }}">
        <input type="hidden" name="nama_saudara" id="nama_saudara" value="{{ $namaSaudara }}">
        <input type="hidden" name="kelas_saudara" id="kelas_saudara" value="{{ $kelasSaudara }}">
        <input type="hidden" name="tahun_lulus_saudara" id="tahun_lulus_saudara" value="{{ $tahunLulusSaudara }}">

        <!-- PANEL 1: KONTEN SAUDARA AKTIF -->
        <div id="panel_saudara_aktif" class="{{ $keterkaitan === 'aktif' ? '' : 'hidden' }} p-4 sm:p-5 rounded-2xl bg-emerald-50/50 border border-emerald-200 space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-emerald-900 uppercase tracking-wider flex items-center gap-1.5">
                    <i class="fa-solid fa-magnifying-glass text-emerald-600"></i> Cari Data Saudara Santri Aktif
                </span>
                <span class="text-[11px] text-emerald-700 bg-emerald-100/70 px-2.5 py-0.5 rounded-full font-medium">
                    Ketik nama atau nomor induk
                </span>
            </div>

            <!-- Input Search Autocomplete -->
            <div class="relative">
                <div class="relative flex items-center">
                    <span class="absolute left-3.5 text-slate-400">
                        <i class="fa-solid fa-user-tag"></i>
                    </span>
                    <input type="text" id="search_santri_aktif_input" placeholder="Ketik nama santri aktif atau NIS..." autocomplete="off"
                        class="w-full pl-10 pr-10 py-3 rounded-xl border border-emerald-200 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-medium">
                    <span id="spinner_aktif" class="hidden absolute right-3.5 text-emerald-600 animate-spin">
                        <i class="fa-solid fa-spinner"></i>
                    </span>
                </div>

                <!-- Dropdown Hasil Pencarian Autocomplete -->
                <div id="results_santri_aktif" class="hidden absolute left-0 right-0 top-full mt-1.5 bg-white rounded-2xl shadow-xl border border-emerald-100 max-h-64 overflow-y-auto z-50 divide-y divide-slate-100">
                    <!-- Dynamic items rendered via JS -->
                </div>
            </div>

            <!-- Preview Data Terpilih -->
            <div id="preview_santri_aktif" class="{{ ($keterkaitan === 'aktif' && $namaSaudara) ? '' : 'hidden' }} p-3 sm:p-4 rounded-xl bg-white border border-emerald-300 flex items-center justify-between gap-3 shadow-xs">
                <div class="flex items-center gap-3">
                    <img id="preview_aktif_foto" src="https://manajemen.ppatq-rf.id/assets/img/avatars/1.png" alt="Foto Santri" class="w-12 h-12 rounded-full object-cover border border-emerald-200 bg-slate-100 flex-shrink-0" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                    <div>
                        <div class="text-[11px] text-emerald-700 font-semibold uppercase tracking-wider">Saudara Aktif Terpilih:</div>
                        <div id="preview_aktif_nama" class="text-sm font-bold text-slate-900">{{ $namaSaudara }}</div>
                        <div class="flex items-center gap-2 mt-0.5">
                            <span id="preview_aktif_kelas" class="inline-flex items-center text-[11px] font-semibold px-2 py-0.5 rounded-md bg-emerald-100 text-emerald-800">
                                Kelas: {{ $kelasSaudara ?: '-' }}
                            </span>
                        </div>
                    </div>
                </div>
                <button type="button" id="btn_clear_aktif" class="btn btn-sm btn-ghost text-rose-600 hover:bg-rose-50 rounded-xl" title="Hapus / Cari Ulang">
                    <i class="fa-solid fa-xmark mr-1"></i> Batal
                </button>
            </div>
        </div>

        <!-- PANEL 2: KONTEN SAUDARA ALUMNI -->
        <div id="panel_saudara_alumni" class="{{ $keterkaitan === 'alumni' ? '' : 'hidden' }} p-4 sm:p-5 rounded-2xl bg-amber-50/50 border border-amber-200 space-y-4">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-amber-900 uppercase tracking-wider flex items-center gap-1.5">
                    <i class="fa-solid fa-user-graduate text-amber-600"></i> Cari Data Saudara Alumni
                </span>
                <span class="text-[11px] text-amber-800 bg-amber-100/70 px-2.5 py-0.5 rounded-full font-medium">
                    Ketik nama atau nomor induk
                </span>
            </div>

            <!-- Input Search Autocomplete Alumni -->
            <div class="relative">
                <div class="relative flex items-center">
                    <span class="absolute left-3.5 text-slate-400">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </span>
                    <input type="text" id="search_santri_alumni_input" placeholder="Ketik nama alumni atau NIS..." autocomplete="off"
                        class="w-full pl-10 pr-10 py-3 rounded-xl border border-amber-200 bg-white focus:border-amber-500 focus:ring-2 focus:ring-amber-200 transition text-sm outline-none text-slate-800 font-medium">
                    <span id="spinner_alumni" class="hidden absolute right-3.5 text-amber-600 animate-spin">
                        <i class="fa-solid fa-spinner"></i>
                    </span>
                </div>

                <!-- Dropdown Hasil Pencarian Autocomplete Alumni -->
                <div id="results_santri_alumni" class="hidden absolute left-0 right-0 top-full mt-1.5 bg-white rounded-2xl shadow-xl border border-amber-100 max-h-64 overflow-y-auto z-50 divide-y divide-slate-100">
                    <!-- Dynamic items rendered via JS -->
                </div>
            </div>

            <!-- Preview Data Terpilih Alumni dari Database -->
            <div id="preview_santri_alumni" class="{{ ($keterkaitan === 'alumni' && $saudaraId && $namaSaudara) ? '' : 'hidden' }} p-3 sm:p-4 rounded-xl bg-white border border-amber-300 flex items-center justify-between gap-3 shadow-xs">
                <div class="flex items-center gap-3">
                    <img id="preview_alumni_foto" src="https://manajemen.ppatq-rf.id/assets/img/avatars/1.png" alt="Foto Alumni" class="w-12 h-12 rounded-full object-cover border border-amber-200 bg-slate-100 flex-shrink-0" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                    <div>
                        <div class="text-[11px] text-amber-700 font-semibold uppercase tracking-wider">Saudara Alumni Terpilih:</div>
                        <div id="preview_alumni_nama" class="text-sm font-bold text-slate-900">{{ $namaSaudara }}</div>
                        <div class="flex items-center gap-2 mt-0.5">
                            <span id="preview_alumni_tahun" class="inline-flex items-center text-[11px] font-semibold px-2 py-0.5 rounded-md bg-amber-100 text-amber-900">
                                Tahun Lulus: {{ $tahunLulusSaudara ?: '-' }}
                            </span>
                        </div>
                    </div>
                </div>
                <button type="button" id="btn_clear_alumni" class="btn btn-sm btn-ghost text-rose-600 hover:bg-rose-50 rounded-xl" title="Hapus / Cari Ulang">
                    <i class="fa-solid fa-xmark mr-1"></i> Batal
                </button>
            </div>

            <!-- Fallback Input Manual Jika Tidak Ditemukan -->
            <div class="pt-3 border-t border-amber-200/60">
                <div class="flex items-center justify-between mb-2">
                    <label class="text-xs font-bold text-slate-700 flex items-center gap-1.5">
                        <i class="fa-solid fa-pen-to-square text-amber-600"></i>
                        <span>Jika nama alumni tidak ditemukan di daftar atas, ketik manual di sini:</span>
                    </label>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="sm:col-span-2">
                        <label for="manual_nama_alumni" class="block text-[11px] font-semibold text-slate-600 mb-1">Nama Lengkap Alumni</label>
                        <input type="text" id="manual_nama_alumni" placeholder="Contoh: Muhammad Ihsan"
                            value="{{ ($keterkaitan === 'alumni' && !$saudaraId) ? $namaSaudara : '' }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-amber-500 focus:ring-2 focus:ring-amber-200 transition text-sm outline-none text-slate-800">
                    </div>
                    <div>
                        <label for="manual_tahun_lulus_alumni" class="block text-[11px] font-semibold text-slate-600 mb-1">Tahun Lulus</label>
                        <input type="number" id="manual_tahun_lulus_alumni" placeholder="Contoh: 2022" min="2000" max="2099"
                            value="{{ ($keterkaitan === 'alumni' && !$saudaraId) ? $tahunLulusSaudara : '' }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-amber-500 focus:ring-2 focus:ring-amber-200 transition text-sm outline-none text-slate-800">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
$(document).ready(function(){
    const url = '{{URL::to('psb/get_kota')}}';
    const url2 = '{{URL::to('psb/get_kecamatan')}}';
    const url3 = '{{URL::to('psb/get_kelurahan')}}';

    $("#provinsi").on('change', function(){
        $.ajax({
            url: url,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $(this).val()
            },
            method: "POST",
            success: function(data){
                data = JSON.parse(data);
                $("#kota").html('<option value="0">-- Pilih Kota --</option>');
                data.forEach(function (item){
                    $("#kota").append('<option value="' + item.id_kota_kab + '">' + item.nama_kota_kab + '</option>');
                });
                $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            }
        });
    });

    $("#kota").on('change', function(){
        $.ajax({
            url: url2,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $("#provinsi").val(),
                "kota_id": $(this).val()
            },
            method: "POST",
            success: function(data){
                data = JSON.parse(data);
                $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
                data.forEach(function (item){
                    $("#kecamatan").append('<option value="' + item.id_kecamatan + '">' + item.nama_kecamatan + '</option>');
                });
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            }
        });
    });

    $("#kecamatan").on('change', function(){
        $.ajax({
            url: url3,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $("#provinsi").val(),
                "kota_id": $("#kota").val(),
                "kecamatan_id": $(this).val()
            },
            method: "POST",
            success: function(data){
                data = JSON.parse(data);
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
                data.forEach(function (item){
                    $("#kelurahan").append('<option value="' + item.id_kelurahan + '">' + item.nama_kelurahan + '</option>');
                });
            }
        });
    });

    // ============================================
    // KETERKAITAN SAUDARA HANDLER
    // ============================================
    const searchAktifUrl = '{{ URL::to("psb/search_santri_aktif") }}';
    const searchAlumniUrl = '{{ URL::to("psb/search_santri_alumni") }}';
    let debounceAktifTimer = null;
    let debounceAlumniTimer = null;

    $('input[name="keterkaitan_saudara"]').on('change', function(){
        const val = $(this).val();
        $('.wizard > .content, #example-form .content').css('height', 'auto');
        if(val === 'tidak_ada'){
            $('#panel_saudara_aktif').addClass('hidden');
            $('#panel_saudara_alumni').addClass('hidden');
            $('#saudara_id').val('');
            $('#nama_saudara').val('');
            $('#kelas_saudara').val('');
            $('#tahun_lulus_saudara').val('');
            $('#preview_santri_aktif').addClass('hidden');
            $('#preview_santri_alumni').addClass('hidden');
            $('#manual_nama_alumni').val('');
            $('#manual_tahun_lulus_alumni').val('');
        } else if(val === 'aktif'){
            $('#panel_saudara_aktif').removeClass('hidden');
            $('#panel_saudara_alumni').addClass('hidden');
            $('#tahun_lulus_saudara').val('');
            $('#manual_nama_alumni').val('');
            $('#manual_tahun_lulus_alumni').val('');
            setTimeout(() => { $('#search_santri_aktif_input').focus(); }, 100);
        } else if(val === 'alumni'){
            $('#panel_saudara_aktif').addClass('hidden');
            $('#panel_saudara_alumni').removeClass('hidden');
            $('#kelas_saudara').val('');
            setTimeout(() => { $('#search_santri_alumni_input').focus(); }, 100);
        }
        $('.wizard > .content, #example-form .content').css('height', 'auto');
    });

    // SEARCH SANTRI AKTIF
    $('#search_santri_aktif_input').on('input', function(){
        const query = $(this).val().trim();
        clearTimeout(debounceAktifTimer);
        if(query.length < 2){
            $('#results_santri_aktif').html('').addClass('hidden');
            $('#spinner_aktif').addClass('hidden');
            return;
        }

        $('#spinner_aktif').removeClass('hidden');
        debounceAktifTimer = setTimeout(function(){
            $.ajax({
                url: searchAktifUrl,
                data: { q: query },
                method: 'GET',
                success: function(res){
                    $('#spinner_aktif').addClass('hidden');
                    let list = Array.isArray(res) ? res : JSON.parse(res);
                    if(list.length === 0){
                        $('#results_santri_aktif').html(`
                            <div class="p-3 text-xs text-slate-500 text-center">
                                <i class="fa-solid fa-circle-info mr-1 text-slate-400"></i> Tidak ditemukan santri aktif dengan kata kunci "<strong>${$('<div>').text(query).html()}</strong>"
                            </div>
                        `).removeClass('hidden');
                    } else {
                        let html = '';
                        list.forEach(function(item){
                            const photo = item.photo || 'https://manajemen.ppatq-rf.id/assets/img/avatars/1.png';
                            html += `
                                <div class="item-santri-aktif flex items-center gap-3 p-3 hover:bg-emerald-50 cursor-pointer transition"
                                     data-id="${item.id}"
                                     data-nama="${$('<div>').text(item.nama).html()}"
                                     data-kelas="${item.kelas || '-'}"
                                     data-nis="${item.no_induk || ''}"
                                     data-photo="${photo}">
                                    <img src="${photo}" alt="Foto" class="w-10 h-10 rounded-full object-cover border border-emerald-200 bg-slate-100 flex-shrink-0" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                                    <div class="flex-1 min-w-0">
                                        <div class="text-xs font-bold text-slate-900 truncate">${item.nama}</div>
                                        <div class="text-[11px] text-slate-500 flex items-center gap-2 mt-0.5">
                                            <span class="inline-block px-1.5 py-0.5 rounded bg-emerald-100 text-emerald-800 font-semibold text-[10px]">Kelas: ${item.kelas || '-'}</span>
                                            <span>NIS: ${item.no_induk || '-'}</span>
                                        </div>
                                    </div>
                                    <span class="text-xs text-emerald-600 font-semibold px-2 py-1 rounded-lg bg-emerald-50 hover:bg-emerald-100">Pilih</span>
                                </div>
                            `;
                        });
                        $('#results_santri_aktif').html(html).removeClass('hidden');
                    }
                },
                error: function(){
                    $('#spinner_aktif').addClass('hidden');
                }
            });
        }, 300);
    });

    $(document).on('click', '.item-santri-aktif', function(){
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const kelas = $(this).data('kelas');
        const photo = $(this).data('photo');

        $('#saudara_id').val(id);
        $('#nama_saudara').val(nama);
        $('#kelas_saudara').val(kelas);
        $('#tahun_lulus_saudara').val('');

        $('#preview_aktif_foto').attr('src', photo);
        $('#preview_aktif_nama').text(nama);
        $('#preview_aktif_kelas').text('Kelas: ' + (kelas || '-'));
        $('#preview_santri_aktif').removeClass('hidden');

        $('#results_santri_aktif').addClass('hidden');
        $('#search_santri_aktif_input').val('');
    });

    $('#btn_clear_aktif').on('click', function(){
        $('#saudara_id').val('');
        $('#nama_saudara').val('');
        $('#kelas_saudara').val('');
        $('#preview_santri_aktif').addClass('hidden');
        $('#search_santri_aktif_input').val('').focus();
    });

    // SEARCH SANTRI ALUMNI
    $('#search_santri_alumni_input').on('input', function(){
        const query = $(this).val().trim();
        clearTimeout(debounceAlumniTimer);
        if(query.length < 2){
            $('#results_santri_alumni').html('').addClass('hidden');
            $('#spinner_alumni').addClass('hidden');
            return;
        }

        $('#spinner_alumni').removeClass('hidden');
        debounceAlumniTimer = setTimeout(function(){
            $.ajax({
                url: searchAlumniUrl,
                data: { q: query },
                method: 'GET',
                success: function(res){
                    $('#spinner_alumni').addClass('hidden');
                    let list = Array.isArray(res) ? res : JSON.parse(res);
                    if(list.length === 0){
                        $('#results_santri_alumni').html(`
                            <div class="p-3 text-xs text-slate-500 text-center">
                                <i class="fa-solid fa-circle-info mr-1 text-slate-400"></i> Tidak ditemukan alumni dengan kata kunci "<strong>${$('<div>').text(query).html()}</strong>". Silakan ketik secara manual di bawah.
                            </div>
                        `).removeClass('hidden');
                    } else {
                        let html = '';
                        list.forEach(function(item){
                            const photo = item.photo || 'https://manajemen.ppatq-rf.id/assets/img/avatars/1.png';
                            html += `
                                <div class="item-santri-alumni flex items-center gap-3 p-3 hover:bg-amber-50 cursor-pointer transition"
                                     data-id="${item.id}"
                                     data-nama="${$('<div>').text(item.nama).html()}"
                                     data-tahun="${item.tahun_lulus || ''}"
                                     data-nis="${item.no_induk || ''}"
                                     data-photo="${photo}">
                                    <img src="${photo}" alt="Foto" class="w-10 h-10 rounded-full object-cover border border-amber-200 bg-slate-100 flex-shrink-0" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                                    <div class="flex-1 min-w-0">
                                        <div class="text-xs font-bold text-slate-900 truncate">${item.nama}</div>
                                        <div class="text-[11px] text-slate-500 flex items-center gap-2 mt-0.5">
                                            <span class="inline-block px-1.5 py-0.5 rounded bg-amber-100 text-amber-900 font-semibold text-[10px]">Lulus: ${item.tahun_lulus || '-'}</span>
                                            <span>NIS: ${item.no_induk || '-'}</span>
                                        </div>
                                    </div>
                                    <span class="text-xs text-amber-700 font-semibold px-2 py-1 rounded-lg bg-amber-100 hover:bg-amber-200">Pilih</span>
                                </div>
                            `;
                        });
                        $('#results_santri_alumni').html(html).removeClass('hidden');
                    }
                },
                error: function(){
                    $('#spinner_alumni').addClass('hidden');
                }
            });
        }, 300);
    });

    $(document).on('click', '.item-santri-alumni', function(){
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const tahun = $(this).data('tahun');
        const photo = $(this).data('photo');

        $('#saudara_id').val(id);
        $('#nama_saudara').val(nama);
        $('#tahun_lulus_saudara').val(tahun);
        $('#kelas_saudara').val('');

        $('#manual_nama_alumni').val('');
        $('#manual_tahun_lulus_alumni').val('');

        $('#preview_alumni_foto').attr('src', photo);
        $('#preview_alumni_nama').text(nama);
        $('#preview_alumni_tahun').text('Tahun Lulus: ' + (tahun || '-'));
        $('#preview_santri_alumni').removeClass('hidden');

        $('#results_santri_alumni').addClass('hidden');
        $('#search_santri_alumni_input').val('');
    });

    $('#btn_clear_alumni').on('click', function(){
        $('#saudara_id').val('');
        $('#nama_saudara').val('');
        $('#tahun_lulus_saudara').val('');
        $('#preview_santri_alumni').addClass('hidden');
        $('#manual_nama_alumni').val('');
        $('#manual_tahun_lulus_alumni').val('');
        $('#search_santri_alumni_input').val('').focus();
    });

    // MANUAL ALUMNI INPUT FALLBACK
    $('#manual_nama_alumni, #manual_tahun_lulus_alumni').on('input', function(){
        const manualNama = $('#manual_nama_alumni').val().trim();
        const manualTahun = $('#manual_tahun_lulus_alumni').val().trim();
        if(manualNama.length > 0 || manualTahun.length > 0){
            $('#saudara_id').val(''); // kosongkan ID karena input manual
            $('#nama_saudara').val(manualNama);
            $('#tahun_lulus_saudara').val(manualTahun);
            $('#preview_santri_alumni').addClass('hidden');
        }
    });

    // CLOSE RESULTS ON OUTSIDE CLICK
    $(document).on('click', function(e){
        if (!$(e.target).closest('#search_santri_aktif_input, #results_santri_aktif').length) {
            $('#results_santri_aktif').addClass('hidden');
        }
        if (!$(e.target).closest('#search_santri_alumni_input, #results_santri_alumni').length) {
            $('#results_santri_alumni').addClass('hidden');
        }
    });
});
</script>

