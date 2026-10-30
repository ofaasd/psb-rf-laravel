@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Hero Banner -->
    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-gradient-to-r from-emerald-800 via-teal-800 to-emerald-900 text-white p-6 sm:p-10">
        <div class="relative z-10 max-w-2xl space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/20 backdrop-blur text-white border border-white/20">
                    <i class="fa-solid fa-building-columns text-emerald-300"></i> Fasilitas & Layanan Santri
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30">
                    <i class="fa-solid fa-circle-check"></i> All-Inclusive Awal Tahun
                </span>
            </div>
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Fasilitas Pesantren</h1>
            <p class="text-sm sm:text-base text-emerald-100/90 leading-relaxed">
                PPATQ Raudlatul Falah menyediakan fasilitas lengkap, lingkungan asri dan aman, serta sistem pemantauan berkala guna menunjang kenyamanan dan fokus santri dalam menghafal Al-Qur'an.
            </p>
        </div>
        <div class="absolute -right-10 -bottom-10 opacity-10 pointer-events-none text-white text-9xl">
            <i class="fa-solid fa-hotel"></i>
        </div>
    </div>

    <!-- 1. Fasilitas Utama (Grid 5 Cards) -->
    <div class="space-y-4">
        <div class="flex items-center gap-2">
            <span class="w-8 h-8 rounded-xl bg-emerald-700 text-white flex items-center justify-center text-sm shadow-xs font-bold">1</span>
            <div>
                <h2 class="text-lg sm:text-xl font-extrabold text-slate-800">Fasilitas & Layanan Keseharian</h2>
                <p class="text-xs text-slate-500">Layanan penuh 24 jam untuk menjamin gizi, kebersihan, dan kesehatan santri.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Makan 3x Sehari -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 hover:border-emerald-300 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center text-xl mb-3 shadow-2xs">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base mb-1">Makan 3x Sehari</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Dapur pesantren menyediakan makanan bergizi seimbang sebanyak 3 kali sehari dengan menu variatif, halal, dan higienis.
                </p>
            </x-mary-card>

            <!-- Cuci Pakaian (Laundry) -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 hover:border-emerald-300 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-teal-100 text-teal-800 flex items-center justify-center text-xl mb-3 shadow-2xs">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base mb-1">Cuci Pakaian (Laundry)</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Fasilitas pencucian dan perawatan pakaian santri dikelola oleh petugas asrama sehingga kebersihan pakaian selalu terjaga rapi.
                </p>
            </x-mary-card>

            <!-- Asrama Representatif -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 hover:border-emerald-300 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-800 flex items-center justify-center text-xl mb-3 shadow-2xs">
                    <i class="fa-solid fa-bed"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base mb-1">Gedung Asrama Nyaman</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Kamar asrama yang bersih, sirkulasi udara baik, dan didampingi wali asrama/musyrif yang mendampingi santri sepanjang waktu.
                </p>
            </x-mary-card>

            <!-- Kegiatan Kemadrasahan -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 hover:border-emerald-300 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-800 flex items-center justify-center text-xl mb-3 shadow-2xs">
                    <i class="fa-solid fa-school"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base mb-1">Kegiatan Kemadrasahan</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Gedung madrasah ber-AC/representatif, ruang kelas interaktif, perpustakaan, sarana olahraga, dan lingkungan Adiwiyata yang asri.
                </p>
            </x-mary-card>

            <!-- Kegiatan Keagamaan -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 hover:border-emerald-300 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl mb-3 shadow-2xs">
                    <i class="fa-solid fa-mosque"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base mb-1">Kegiatan Keagamaan 24 Jam</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Masjid pesantren untuk sholat lima waktu berjama'ah, halaqah tahfidz, sholat dhuha, tahajud, dan pembiasaan puasa sunnah Senin-Kamis.
                </p>
            </x-mary-card>
        </div>
    </div>

    <!-- 2. Banner Kebutuhan Awal Santri (All Included) -->
    <x-mary-card shadow class="border-2 border-emerald-300 bg-gradient-to-br from-emerald-50 via-teal-50/50 to-white rounded-3xl p-6 sm:p-8 space-y-4">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 pb-4 border-b border-emerald-100">
            <div class="space-y-1">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-700 text-white shadow-2xs">
                    <i class="fa-solid fa-suitcase"></i> Kebutuhan Santri Baru
                </span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-emerald-950">
                    Semua Sudah Termasuk (Include Kebutuhan Santri Awal Tahun)
                </h2>
                <p class="text-xs sm:text-sm text-slate-600">
                    Santri baru yang datang ke pondok <b>tidak perlu membawa</b> perlengkapan dari rumah secara berlebih:
                </p>
            </div>
            <span class="shrink-0 px-4 py-2 rounded-2xl bg-emerald-100 text-emerald-800 font-bold text-xs uppercase tracking-wider border border-emerald-200">
                <i class="fa-solid fa-circle-check text-emerald-600 mr-1"></i> Praktis & Siap Pakai
            </span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 pt-2">
            <div class="p-3.5 rounded-2xl bg-white border border-emerald-100 text-center space-y-1.5 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto text-base">
                    <i class="fa-solid fa-vest"></i>
                </div>
                <h4 class="font-bold text-slate-800 text-xs">Baju Muslim</h4>
                <p class="text-[11px] text-slate-500">Disediakan seragam</p>
            </div>

            <div class="p-3.5 rounded-2xl bg-white border border-emerald-100 text-center space-y-1.5 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center mx-auto text-base">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <h4 class="font-bold text-slate-800 text-xs">Baju Bermain</h4>
                <p class="text-[11px] text-slate-500">Kaos & celana santri</p>
            </div>

            <div class="p-3.5 rounded-2xl bg-white border border-emerald-100 text-center space-y-1.5 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center mx-auto text-base">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h4 class="font-bold text-slate-800 text-xs">Seragam & Sekolah</h4>
                <p class="text-[11px] text-slate-500">Perlengkapan madrasah</p>
            </div>

            <div class="p-3.5 rounded-2xl bg-white border border-emerald-100 text-center space-y-1.5 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center mx-auto text-base">
                    <i class="fa-solid fa-bed"></i>
                </div>
                <h4 class="font-bold text-slate-800 text-xs">Peralatan Tidur</h4>
                <p class="text-[11px] text-slate-500">Kasur, sprei & bantal</p>
            </div>

            <div class="p-3.5 rounded-2xl bg-white border border-emerald-100 text-center space-y-1.5 shadow-2xs col-span-2 sm:col-span-1">
                <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center mx-auto text-base">
                    <i class="fa-solid fa-shower"></i>
                </div>
                <h4 class="font-bold text-slate-800 text-xs">Peralatan Mandi</h4>
                <p class="text-[11px] text-slate-500">Handuk & perlengkapan</p>
            </div>
        </div>
    </x-mary-card>

    <!-- 3. Buku-Buku Laporan PPATQ Raudlatul Falah (from Image 2) -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-6">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pb-4 border-b border-slate-100">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-teal-100 text-teal-800 mb-1">
                    <i class="fa-solid fa-book text-teal-600"></i> Sistem Monitoring Terpadu
                </span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800">
                    Buku-Buku Laporan PPATQ Raudlatul Falah
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                    Pesantren menerapkan 21 buku kontrol dan laporan berkala untuk memantau kemajuan tahfidz, adab, akademik, dan kesehatan setiap santri.
                </p>
            </div>
        </div>

        <!-- 21 Buku Laporan Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            @php
            $buku_laporan = [
                1 => "Buku KBM Tahfidz",
                2 => "Buku Grafik Perkembangan Tahfidz",
                3 => "Buku Laporan Uang Saku Santri",
                4 => "Buku Perkembangan Tahfidz Santri",
                5 => "Buku Laporan Penilaian Perilaku Santri",
                6 => "Buku Laporan Keamanan",
                7 => "Buku Ulangan Harian",
                8 => "Buku Laporan Perlengkapan & Ketertiban",
                9 => "Buku Laporan Bulanan Pendidikan Kemadrasahan",
                10 => "Buku Laporan Kesehatan",
                11 => "Kartu Ijin Sambangan",
                12 => "Kartu Setor Murojaah Hafalan Sambangan",
                13 => "Buku Laporan Deskripsi Extra Malam",
                14 => "Buku Laporan Bimbingan Konseling",
                15 => "Buku Hasil Tasmi' Hafalan Santri",
                16 => "Buku Kumpulan Do'a Harian",
                17 => "Buku Praktek Ubudiyah",
                18 => "Buku Ikhtiyar Calon Khotimin/Khotimat",
                19 => "Buku Laporan Hasil Tahfidzul Qur'an Santri",
                20 => "Buku Raport Kasyfu Darojat",
                21 => "Buku Perkembangan Tahfidz Bin Nadhor"
            ];
            @endphp

            @foreach($buku_laporan as $no => $judul)
            <div class="flex items-center gap-3 p-3 rounded-2xl bg-slate-50/80 hover:bg-emerald-50/60 border border-slate-200/80 hover:border-emerald-300 transition duration-150 group">
                <span class="w-8 h-8 rounded-xl bg-white border border-slate-200 group-hover:bg-emerald-600 group-hover:text-white group-hover:border-emerald-600 text-slate-700 font-extrabold text-xs flex items-center justify-center shrink-0 shadow-2xs transition">
                    {{$no}}
                </span>
                <span class="text-xs sm:text-sm font-semibold text-slate-700 group-hover:text-emerald-950 transition">
                    {{$judul}}
                </span>
            </div>
            @endforeach
        </div>

        <!-- Detail Banner Card Preview -->
        
    </x-mary-card>

</div>
@endsection

