@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Hero Banner -->
    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-gradient-to-r from-emerald-800 via-teal-800 to-emerald-900 text-white p-6 sm:p-10">
        <div class="relative z-10 max-w-3xl space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/20 backdrop-blur text-white border border-white/20">
                    <i class="fa-solid fa-graduation-cap text-emerald-300"></i> Kurikulum Pendidikan Terpadu
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30">
                    <i class="fa-solid fa-book-quran"></i> Tahfidz & Salafiyah
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-400/20 text-amber-200 border border-amber-400/30">
                    <i class="fa-solid fa-school"></i> MI TQ Raudlatul Falah
                </span>
            </div>
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Materi Didik & Mata Pelajaran</h1>
            <p class="text-sm sm:text-base text-emerald-100/90 leading-relaxed">
                Integrasi komprehensif antara penguatan Al-Qur'an, khazanah keilmuan salaf, kebahasaan, sains modern, dan pembinaan karakter luhur untuk mencetak generasi qur'ani yang cerdas dan beradab.
            </p>
        </div>
        <div class="absolute -right-10 -bottom-10 opacity-10 pointer-events-none text-white text-9xl">
            <i class="fa-solid fa-book-open-reader"></i>
        </div>
    </div>

    <!-- Quick Stats / Category Pillars -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100 text-center space-y-1">
            <span class="text-2xl font-black text-emerald-800">19</span>
            <p class="text-xs font-semibold text-emerald-950">Mata Pelajaran</p>
            <span class="text-[10px] text-emerald-600 block">Kurikulum Lengkap</span>
        </div>
        <div class="p-4 rounded-2xl bg-teal-50 border border-teal-100 text-center space-y-1">
            <span class="text-2xl font-black text-teal-800">6</span>
            <p class="text-xs font-semibold text-teal-950">Al-Qur'an & Keislaman</p>
            <span class="text-[10px] text-teal-600 block">Pondasi Akidah & Syariat</span>
        </div>
        <div class="p-4 rounded-2xl bg-amber-50 border border-amber-100 text-center space-y-1">
            <span class="text-2xl font-black text-amber-800">4</span>
            <p class="text-xs font-semibold text-amber-950">Kepesantrenan Salaf</p>
            <span class="text-[10px] text-amber-600 block">Turats & Adab Ulama</span>
        </div>
        <div class="p-4 rounded-2xl bg-sky-50 border border-sky-100 text-center space-y-1">
            <span class="text-2xl font-black text-sky-800">4</span>
            <p class="text-xs font-semibold text-sky-950">Bahasa & Literasi</p>
            <span class="text-[10px] text-sky-600 block">Arab, Inggris, Indo, Jawa</span>
        </div>
        <div class="col-span-2 sm:col-span-1 p-4 rounded-2xl bg-indigo-50 border border-indigo-100 text-center space-y-1">
            <span class="text-2xl font-black text-indigo-800">5</span>
            <p class="text-xs font-semibold text-indigo-950">Sains & Karakter</p>
            <span class="text-[10px] text-indigo-600 block">IPAS, MTK, Raga & Seni</span>
        </div>
    </div>

    <!-- MAIN GRID MATERI DIDIK (19 Subjects) -->
    <div class="space-y-6">
        <div class="flex items-center justify-between pb-3 border-b border-slate-200">
            <div>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800">Daftar Lengkap 19 Materi Didik</h2>
                <p class="text-xs text-slate-500 mt-0.5">Penjelasan ruang lingkup dan capaian pembelajaran setiap materi didik santri.</p>
            </div>
            <span class="badge badge-emerald badge-outline font-semibold text-xs hidden sm:inline-flex">Tahun Ajaran Aktif</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">

            <!-- 1. ALQURAN HADIST -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-emerald-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        01
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-emerald-950 leading-snug">Al-Qur'an Hadist</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Keislaman
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Membekali santri kemampuan membaca, menghafal, dan memahami intisari ayat-ayat suci Al-Qur'an serta hadis-hadis nabawi pilihan sebagai pedoman utama aqidah, akhlak mulia, dan tuntunan hidup sehari-hari.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 2. BAHASA INDONESIA -->
            <x-mary-card shadow class="border border-sky-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-sky-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-sky-100 text-sky-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        02
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">Bahasa Indonesia</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-sky-50 text-sky-700 border border-sky-200">
                                Bahasa & Literasi
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Mengembangkan kemahiran berbahasa Indonesia secara baik dan benar, mencakup keterampilan membaca intensif, menulis karya kreatif, berbicara santun di muka umum, serta menumbuhkan minat literasi kontekstual.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 3. AKHLAK SALAF -->
            <x-mary-card shadow class="border border-amber-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-amber-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        03
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-amber-950 leading-snug">Akhlak Salaf</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-amber-50 text-amber-800 border border-amber-200">
                                Pesantren Salaf
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Penanaman adab dan tata krama menuntut ilmu merujuk pada keteladanan para ulama salafus shalih, seperti sikap tawadhu' kepada guru, memuliakan orang tua, menjaga kebersihan hati, dan toleran terhadap sesama.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 4. NAHWU -->
            <x-mary-card shadow class="border border-teal-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-teal-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-teal-100 text-teal-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        04
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-teal-950 leading-snug">Nahwu</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-teal-50 text-teal-800 border border-teal-200">
                                Pesantren Salaf
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Kaidah tata bahasa Arab dasar untuk memahami struktur kalimat (isim, fi'il, huruf, jabatan kata, dan harakat i'rab) sebagai kunci utama membuka kemampuan membaca dan memahami literatur kitab kuning klasik.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 5. BAHASA ARAB -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-emerald-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        05
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-emerald-950 leading-snug">Bahasa Arab</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Bahasa & Literasi
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pembelajaran bahasa Arab komunikatif aktif dan pasif melalui pengayaan kosakata tematik (mufrodat), latihan percakapan harian (muhadatsah), menyimak (istima'), dan membaca naskah sederhana (qira'ah).
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 6. IPAS -->
            <x-mary-card shadow class="border border-indigo-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-indigo-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-indigo-100 text-indigo-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        06
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">IPAS (Alam & Sosial)</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-indigo-50 text-indigo-700 border border-indigo-200">
                                Sains & Sosial
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Integrasi sains alam dan interaksi sosial yang menumbuhkan rasa syukur dan kekaguman atas ciptaan Allah SWT, melatih nalar observasi ilmiah, serta mendidik kepedulian terhadap kelestarian lingkungan dan masyarakat.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 7. FIQIH SALAF -->
            <x-mary-card shadow class="border border-amber-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-amber-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        07
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-amber-950 leading-snug">Fiqih Salaf</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-amber-50 text-amber-800 border border-amber-200">
                                Pesantren Salaf
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Kajian hukum syariat Islam madzhab Syafi'i dari kitab-kitab turats salaf guna memberikan pemahaman hukum ibadah yang kokoh, terperinci, dan tersambung dengan sanad keilmuan para ulama terpercaya.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 8. BAHASA INGGRIS -->
            <x-mary-card shadow class="border border-sky-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-sky-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-sky-100 text-sky-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        08
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">Bahasa Inggris</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-sky-50 text-sky-700 border border-sky-200">
                                Bahasa & Literasi
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pengenalan dasar keterampilan bahasa internasional secara komunikatif dan interaktif, mencakup penguasaan kosakata esensial, percakapan sehari-hari, pelafalan benar, serta pemahaman bacaan ringkas.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 9. AKIDAH AKHLAK -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-emerald-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        09
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-emerald-950 leading-snug">Akidah Akhlak</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Keislaman
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Penguatan fondasi keimanan kepada Rukun Iman yang kokoh terbebas dari keraguan, dipadukan pembiasaan akhlak mahmudah (terpuji) serta kemampuan membentengi diri dari akhlak madzmumah (tercela).
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 10. SENI RUPA -->
            <x-mary-card shadow class="border border-purple-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-purple-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-purple-100 text-purple-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        10
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">Seni Rupa</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-purple-50 text-purple-700 border border-purple-200">
                                Kreativitas
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Wadah ekspresi bakat dan kreativitas visual santri melalui pengenalan unsur seni, teknik menggambar, mewarnai ornamen, kerajinan tangan, serta dasar kaligrafi Arab (seni khat) yang bernilai estetika tinggi.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 11. TAUHID -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-emerald-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        11
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-emerald-950 leading-snug">Tauhid</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Keislaman
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Penegasan akidah Ahlussunnah wal Jama'ah melalui pembelajaran sifat-sifat wajib, mustahil, dan jaiz bagi Allah SWT serta para Rasul-Nya (kajian Aqidatul Awwam) agar tertanam keyakinan tauhid yang lurus dan murni.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 12. BAHASA JAWA -->
            <x-mary-card shadow class="border border-sky-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-sky-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-sky-100 text-sky-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        12
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">Bahasa Jawa</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-sky-50 text-sky-700 border border-sky-200">
                                Muatan Lokal
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pelestarian bahasa daerah dan kearifan lokal melalui pengajaran unggah-ungguh basa (krama inggil dan ngoko), tata krama kesantunan khas tradisi pesantren Jawa, dan pengenalan aksara Jawa dasar.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 13. SKI -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-emerald-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        13
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-emerald-950 leading-snug">SKI (Sejarah Kebudayaan Islam)</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Keislaman
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Mempelajari rekam jejak perjuangan dakwah Nabi Muhammad SAW, kepemimpinan Khulafaur Rasyidin, masa keemasan peradaban Islam, hingga sejarah syiar para wali di nusantara sebagai teladan juang dan inspirasi santri.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 14. MATEMATIKA -->
            <x-mary-card shadow class="border border-indigo-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-indigo-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-indigo-100 text-indigo-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        14
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">Matematika</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-indigo-50 text-indigo-700 border border-indigo-200">
                                Sains & Numerasi
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Mengasah kemampuan numerik, logika berhitung cepat, pola berpikir kritis, serta daya analitis dalam menyelesaikan permasalahan kuantitatif secara sistematis, terstruktur, dan presisi.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 15. TAJWID -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-emerald-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        15
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-emerald-950 leading-snug">Tajwid</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Al-Qur'an Intensif
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Kaidah ilmu membaca Al-Qur'an secara tartil dan fasih, mencakup makharijul huruf (tempat keluar huruf), shifatul huruf, hukum nun sukun & tanwin, mim sukun, ragam mad, serta waqaf wal ibtida'.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 16. FIKIH -->
            <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-emerald-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        16
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-emerald-950 leading-snug">Fikih</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Kurikulum Madrasah
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pembelajaran syariat Islam praktis kurikulum madrasah formal mengenai thaharah (bersuci), tata cara shalat fardhu dan sunnah, puasa, adab masjid, serta pembiasaan ibadah formal yang benar dan tertib.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 17. PENDIDIKAN PANCASILA -->
            <x-mary-card shadow class="border border-rose-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-rose-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-rose-100 text-rose-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        17
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">Pendidikan Pancasila</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-rose-50 text-rose-700 border border-rose-200">
                                Kebangsaan & Moral
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Penanaman wawasan kebangsaan, cinta tanah air (hubbul wathan minal iman), kesadaran hukum, toleransi kemajemukan, serta penghayatan nilai-nilai luhur Pancasila dan UUD 1945 dalam kehidupan bernegara.
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 18. PJOK -->
            <x-mary-card shadow class="border border-amber-100 bg-white rounded-3xl p-5 sm:p-6 hover:border-amber-300 hover:shadow-md transition duration-200">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-extrabold text-base shrink-0 shadow-xs">
                        18
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-bold text-slate-900 leading-snug">PJOK (Olahraga & Jasmani)</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-amber-50 text-amber-800 border border-amber-200">
                                Kesehatan & Raga
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pendidikan Jasmani, Olahraga, dan Kesehatan untuk memelihara kebugaran fisik, kelincahan motorik, sportivitas, daya tahan tubuh, dan kebiasaan pola hidup bersih sehat santri (Al-Mu'minul Qawiyyu).
                        </p>
                    </div>
                </div>
            </x-mary-card>

            <!-- 19. UBUDIYAH -->
            <x-mary-card shadow class="border-2 border-emerald-300 bg-gradient-to-br from-emerald-50/70 via-teal-50/30 to-white rounded-3xl p-5 sm:p-6 hover:border-emerald-400 hover:shadow-md transition duration-200 md:col-span-2">
                <div class="flex items-start gap-3.5">
                    <span class="w-11 h-11 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-extrabold text-base shrink-0 shadow-sm">
                        19
                    </span>
                    <div class="space-y-1.5 flex-1 min-w-0">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-base sm:text-lg font-extrabold text-emerald-950 leading-snug">Ubudiyah (Praktik Amaliah Ibadah Harian)</h3>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-600 text-white shadow-xs">
                                Amaliah Pesantren
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Praktik langsung (amaliah) ibadah santri 24 jam di pondok pesantren, meliputi pembiasaan disiplin shalat fardhu lima waktu berjamaah di masjid, qiyamul lail (tahajjud), shalat dhuha, tadarus Al-Qur'an berhalaqah, hafalan doa-doa harian mustajab, serta wirid dan dzikir rotibul haddad.
                        </p>
                    </div>
                </div>
            </x-mary-card>

        </div>
    </div>

    <!-- Bottom Notice & Info -->
    <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div class="space-y-1">
            <h4 class="font-bold text-sm sm:text-base text-slate-800">Tertarik Mendaftarkan Putra-Putri Anda?</h4>
            <p class="text-xs sm:text-sm text-slate-500">Pendaftaran santri baru dibuka secara online. Konsultasikan info kurikulum bersama panitia PSB kami.</p>
        </div>
        <div class="flex items-center gap-2.5 shrink-0 w-full sm:w-auto">
            <a href="{{URL::to('psb/create')}}" class="btn btn-sm sm:btn-md bg-emerald-700 hover:bg-emerald-800 text-white border-0 rounded-xl px-4 font-bold shadow-xs flex-1 sm:flex-initial">
                <i class="fa-solid fa-file-pen mr-1"></i> Daftar Sekarang
            </a>
            <a href="{{URL::to('/pesantren/kurikulum')}}" class="btn btn-sm sm:btn-md bg-white hover:bg-slate-100 text-slate-700 border border-slate-300 rounded-xl px-4 text-xs font-semibold shadow-xs flex-1 sm:flex-initial">
                <i class="fa-solid fa-book mr-1"></i> Info Kurikulum
            </a>
        </div>
    </div>

</div>
@endsection
