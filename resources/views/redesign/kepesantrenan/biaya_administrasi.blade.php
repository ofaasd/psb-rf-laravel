@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Hero Banner with Warm Orange & Emerald Gradient Accent -->
    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-gradient-to-r from-emerald-900 via-teal-800 to-amber-900 text-white p-6 sm:p-10">
        <div class="relative z-10 max-w-3xl space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-500 text-white shadow-xs">
                    <i class="fa-solid fa-receipt"></i> Biaya Administrasi
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/20 backdrop-blur text-white border border-white/20">
                    <i class="fa-solid fa-user-check text-emerald-300"></i> Santri Baru
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30">
                    <i class="fa-solid fa-shield-halved"></i> Transparan & All-Inclusive
                </span>
            </div>
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Biaya Administrasi Santri Baru</h1>
            <p class="text-sm sm:text-base text-emerald-100/90 leading-relaxed">
                Rincian transparan seluruh biaya penerimaan santri baru, kebutuhan awal tahun, infaq pondok, dan iuran bulanan santri PPATQ Raudlatul Falah.
            </p>
        </div>
        <div class="absolute -right-10 -bottom-10 opacity-10 pointer-events-none text-white text-9xl">
            <i class="fa-solid fa-file-invoice-dollar"></i>
        </div>
    </div>

    <!-- Ringkasan Grand Total Rekapitulasi (Card Highlight) -->
    <x-mary-card shadow class="border-2 border-emerald-300 bg-gradient-to-br from-emerald-50 via-teal-50/40 to-white rounded-3xl p-6 sm:p-8 space-y-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 pb-4 border-b border-emerald-100">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-700 text-white mb-1 shadow-2xs">
                    <i class="fa-solid fa-calculator"></i> Rekapitulasi Biaya
                </span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-emerald-950">
                    Total Jumlah yang Harus Dipenuhi
                </h2>
                <p class="text-xs sm:text-sm text-slate-600">
                    Akumulasi biaya kebutuhan awal tahun, infaq pondok, dan biaya operasional bulan pertama.
                </p>
            </div>
            <div class="text-left md:text-right">
                <span class="text-xs font-bold text-slate-500 uppercase tracking-wider block">Grand Total</span>
                <span class="text-2xl sm:text-3xl font-extrabold text-emerald-800 font-mono">
                    Rp 14.350.000
                </span>
            </div>
        </div>

        <!-- 3 Breakdown Columns Summary -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-4 rounded-2xl bg-white border border-emerald-100 shadow-2xs space-y-1">
                <div class="flex items-center justify-between text-xs text-slate-500 font-bold uppercase">
                    <span>1. Kebutuhan Awal Tahun</span>
                    <i class="fa-solid fa-suitcase text-emerald-600"></i>
                </div>
                <div class="text-xl font-extrabold text-slate-800 font-mono">Rp 7.025.000</div>
                <p class="text-[11px] text-slate-500">Mencakup 20 item kebutuhan & perlengkapan awal.</p>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-emerald-100 shadow-2xs space-y-1">
                <div class="flex items-center justify-between text-xs text-slate-500 font-bold uppercase">
                    <span>2. Infaq Pondok</span>
                    <i class="fa-solid fa-mosque text-teal-600"></i>
                </div>
                <div class="text-xl font-extrabold text-slate-800 font-mono">Rp 6.000.000</div>
                <p class="text-[11px] text-slate-500">Pengembangan pesantren & pembangunan sarana.</p>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-emerald-100 shadow-2xs space-y-1">
                <div class="flex items-center justify-between text-xs text-slate-500 font-bold uppercase">
                    <span>3. Bulanan Santri</span>
                    <i class="fa-solid fa-calendar-check text-amber-600"></i>
                </div>
                <div class="text-xl font-extrabold text-slate-800 font-mono">Rp 1.325.000</div>
                <p class="text-[11px] text-slate-500">Syahriah, Tabungan Zarkasi & Tabungan daftar ulang.</p>
            </div>
        </div>

        <!-- Keterangan Bebas Bawa Baju -->
        <div class="p-4 rounded-2xl bg-emerald-100/70 border border-emerald-200 text-xs sm:text-sm text-emerald-950 flex items-start gap-3">
            <span class="w-7 h-7 rounded-lg bg-emerald-700 text-white flex items-center justify-center text-xs shrink-0 mt-0.5 shadow-2xs">
                <i class="fa-solid fa-circle-info"></i>
            </span>
            <div class="space-y-0.5">
                <span class="font-bold">Ketentuan Praktis untuk Wali Santri:</span>
                <p class="text-emerald-900 leading-relaxed">
                    Biaya kebutuhan santri awal tahun <b>sudah mencakup</b>: baju muslim, baju bermain, baju tidur, seragam sekolah, peralatan tidur lengkap, kotak sabun, dll. <b>Santri baru tidak perlu membawa pakaian dari rumah</b> sehingga seragam, rapi, dan memudahkan masa adaptasi santri.
                </p>
            </div>
        </div>
    </x-mary-card>

    <!-- SECTION 1: Kebutuhan Santri Awal Tahun (20 Items Table) -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-4">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pb-3 border-b border-slate-100">
            <div class="flex items-center gap-3">
                <span class="w-8 h-8 rounded-xl bg-emerald-700 text-white flex items-center justify-center text-sm font-bold shadow-xs">
                    1
                </span>
                <div>
                    <h2 class="text-lg sm:text-xl font-extrabold text-slate-800">
                        Kebutuhan Santri Awal Tahun
                    </h2>
                    <p class="text-xs text-slate-500">Daftar lengkap 20 item kebutuhan santri baru saat awal masuk pondok.</p>
                </div>
            </div>
            <span class="badge badge-emerald badge-lg font-bold font-mono text-xs sm:text-sm">
                Subtotal: Rp 7.025.000
            </span>
        </div>

        @php
        $kebutuhan_awal = [
            [1, 'Pengadaan Buku', '350.000', 'Buku referensi & cetak kurikulum'],
            [2, 'Peralatan', '225.000', 'Peralatan kebersihan & asrama'],
            [3, 'Almari', '180.000', 'Loker/almari pribadi santri di asrama'],
            [4, 'Al Qur\'an', '70.000', 'Mushaf standar tahfidz santri'],
            [5, 'Yanbu\'a', '25.000', 'Kitab panduan makharijul huruf & tajwid'],
            [6, 'Biaya Pengembangan Pendidikan', '1.000.000', 'Pengembangan akademik & sistem belajar'],
            [7, 'Seragam MITQ-RF', '900.000', 'Seragam formal Madrasah Ibtidaiyyah'],
            [8, 'Seragam Pondok', '1.200.000', 'Baju muslim harian & gamis/koko pesantren'],
            [9, 'Seragam Khusus', '150.000', 'Seragam kegiatan khusus & olahraga'],
            [10, 'Perlengkapan Tidur', '560.000', 'Kasur, bantal, guling, dan sprei'],
            [11, 'Kalender', '35.000', 'Kalender resmi PPATQ Raudlatul Falah'],
            [12, 'Majalah TIBYANA', '45.000', 'Majalah buletin edukatif santri'],
            [13, 'Milad', '310.000', 'Partisipasi perayaan milad pesantren'],
            [14, 'Peralatan Sekolah', '200.000', 'Tas sekolah & alat tulis santri'],
            [15, 'Buku Pegangan', '450.000', 'Buku pegangan materi kepesantrenan'],
            [16, 'Pengembangan Lab', '300.000', 'Fasilitas lab komputer & multimedia'],
            [17, 'Karantina & Iktibar Tahfid', '200.000', 'Kegiatan karantina intensif ujian tahfidz'],
            [18, 'PAS, PTS Ganjil/Genap', '250.000', 'Penilaian Tengah & Akhir Semester'],
            [19, 'Kepramukaan & Kemah', '200.000', 'Kegiatan pramuka & perkemahan santri'],
            [20, 'Pengembangan Yayasan', '375.000', 'Dukungan pembinaan yayasan pesantren']
        ];
        @endphp

        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left text-sm border-collapse">
                <thead class="bg-gradient-to-r from-emerald-800 to-teal-900 text-white text-xs uppercase font-extrabold tracking-wider">
                    <tr>
                        <th class="px-4 py-3.5 text-center w-14">NO.</th>
                        <th class="px-4 py-3.5">KOMPONEN KEBUTUHAN</th>
                        <th class="px-4 py-3.5 hidden sm:table-cell">KETERANGAN</th>
                        <th class="px-4 py-3.5 text-right w-36">BIAYA (RP)</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($kebutuhan_awal as $item)
                    <tr class="hover:bg-emerald-50/40 transition">
                        <td class="px-4 py-2.5 text-center font-bold text-slate-500">{{$item[0]}}</td>
                        <td class="px-4 py-2.5 font-semibold text-slate-800">
                            {{$item[1]}}
                            <span class="block sm:hidden text-[11px] text-slate-500 font-normal">{{$item[3]}}</span>
                        </td>
                        <td class="px-4 py-2.5 text-xs text-slate-500 hidden sm:table-cell">{{$item[3]}}</td>
                        <td class="px-4 py-2.5 text-right font-mono font-bold text-emerald-800">{{$item[2]}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-emerald-50 border-t-2 border-emerald-300">
                    <tr>
                        <td colspan="3" class="px-4 py-3 text-right font-extrabold text-emerald-950 uppercase text-xs">
                            Total Kebutuhan Santri Awal Tahun :
                        </td>
                        <td class="px-4 py-3 text-right font-mono font-extrabold text-emerald-900 text-base">
                            Rp 7.025.000
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </x-mary-card>

    <!-- SECTION 2 & 3: Infaq Pondok & Bulanan Santri (2 Columns Grid) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card Infaq Pondok -->
        <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-4 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="flex items-center justify-between gap-3 pb-3 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-teal-700 text-white flex items-center justify-center text-sm font-bold shadow-xs">
                            2
                        </span>
                        <div>
                            <h2 class="text-lg font-extrabold text-slate-800">Infaq Pondok</h2>
                            <p class="text-xs text-slate-500">Infaq investasi sarana & fasilitas.</p>
                        </div>
                    </div>
                    <span class="badge badge-teal badge-sm font-bold font-mono">Rp 6.000.000</span>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-teal-50/60 border border-teal-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-lg bg-teal-600 text-white flex items-center justify-center text-xs font-bold">1</span>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs sm:text-sm">Pengembangan Pondok</h4>
                                <p class="text-[11px] text-slate-500">Pengadaan sarana & penunjang santri</p>
                            </div>
                        </div>
                        <span class="font-mono font-bold text-teal-900 text-sm">Rp 2.500.000</span>
                    </div>

                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-teal-50/60 border border-teal-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-lg bg-teal-600 text-white flex items-center justify-center text-xs font-bold">2</span>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs sm:text-sm">Pembangunan</h4>
                                <p class="text-[11px] text-slate-500">Pembangunan gedung & ruang belajar</p>
                            </div>
                        </div>
                        <span class="font-mono font-bold text-teal-900 text-sm">Rp 3.500.000</span>
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                <span class="font-bold text-xs uppercase text-slate-600">Jumlah Infaq Pondok :</span>
                <span class="font-mono font-extrabold text-base text-teal-900">Rp 6.000.000</span>
            </div>
        </x-mary-card>

        <!-- Card Bulanan Santri -->
        <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-4 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="flex items-center justify-between gap-3 pb-3 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-amber-600 text-white flex items-center justify-center text-sm font-bold shadow-xs">
                            3
                        </span>
                        <div>
                            <h2 class="text-lg font-extrabold text-slate-800">Bulanan Santri</h2>
                            <p class="text-xs text-slate-500">Iuran operasional bulanan pertama.</p>
                        </div>
                    </div>
                    <span class="badge badge-warning badge-sm font-bold font-mono">Rp 1.325.000</span>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-amber-50/60 border border-amber-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-lg bg-amber-600 text-white flex items-center justify-center text-xs font-bold">1</span>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs sm:text-sm">Syahriah</h4>
                                <p class="text-[11px] text-slate-500">Makan 3x, laundry, listrik & pendidikan</p>
                            </div>
                        </div>
                        <span class="font-mono font-bold text-amber-900 text-sm">Rp 1.175.000</span>
                    </div>

                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-amber-50/60 border border-amber-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-lg bg-amber-600 text-white flex items-center justify-center text-xs font-bold">2</span>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs sm:text-sm">Tabungan Zarkasi</h4>
                                <p class="text-[11px] text-slate-500">Tabungan santri terkelola</p>
                            </div>
                        </div>
                        <span class="font-mono font-bold text-amber-900 text-sm">Rp 50.000</span>
                    </div>

                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-amber-50/60 border border-amber-100">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-lg bg-amber-600 text-white flex items-center justify-center text-xs font-bold">3</span>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs sm:text-sm">Tabungan Daftar Ulang</h4>
                                <p class="text-[11px] text-slate-500">Cicilan daftar ulang TP. 2027/2028</p>
                            </div>
                        </div>
                        <span class="font-mono font-bold text-amber-900 text-sm">Rp 100.000</span>
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                <span class="font-bold text-xs uppercase text-slate-600">Jumlah Bulanan Santri :</span>
                <span class="font-mono font-extrabold text-base text-amber-900">Rp 1.325.000</span>
            </div>
        </x-mary-card>

    </div>

    <!-- Info Rekening Pembayaran Resmi & Tombol Aksi -->
    <x-mary-card shadow class="border-2 border-emerald-200 bg-gradient-to-br from-emerald-50/90 via-teal-50/50 to-white rounded-3xl p-6 sm:p-8 space-y-6">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
            <div class="space-y-3 max-w-xl">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                    <i class="fa-solid fa-building-columns text-emerald-600"></i> Rekening Resmi Pembayaran
                </span>
                <h3 class="text-xl sm:text-2xl font-extrabold text-emerald-950">
                    Bank Syariah Indonesia (BSI)
                </h3>
                <div class="space-y-1 text-sm text-slate-700">
                    <p class="flex items-center gap-2">
                        <span class="font-semibold text-slate-500 w-28">No. Rekening :</span>
                        <span class="font-mono font-extrabold text-emerald-900 text-base sm:text-lg bg-white px-3 py-1 rounded-xl border border-emerald-200 shadow-2xs">
                            7141299818
                        </span>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="font-semibold text-slate-500 w-28">Atas Nama :</span>
                        <span class="font-bold text-slate-800">PONPES ANAK TAHFIDZUL QUR'AN RF</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="font-semibold text-slate-500 w-28">Kantor/Cabang :</span>
                        <span class="font-medium text-slate-700">BSI Unit Gembong - Pati</span>
                    </p>
                </div>
                <p class="text-xs text-slate-500 pt-1">
                    * Harap simpan bukti transfer untuk diunggah pada formulir konfirmasi pembayaran PSB.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row lg:flex-col gap-3 w-full lg:w-auto shrink-0">
                <a href="{{URL::to('psb/create')}}" class="btn bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl shadow-md font-bold text-sm px-6 py-3 flex items-center justify-center gap-2">
                    <i class="fa-solid fa-user-plus"></i>
                    <span>Daftar Santri Baru Sekarang</span>
                </a>
                <a href="{{URL::to('psb/upload_bukti')}}" class="btn bg-white hover:bg-emerald-50 text-emerald-800 border-2 border-emerald-300 rounded-xl font-bold text-sm px-6 py-3 flex items-center justify-center gap-2 shadow-2xs">
                    <i class="fa-solid fa-receipt text-emerald-600"></i>
                    <span>Unggah Bukti Transfer</span>
                </a>
            </div>
        </div>
    </x-mary-card>
</div>
@endsection

