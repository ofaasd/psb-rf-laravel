@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Hero Banner -->
    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-gradient-to-r from-emerald-800 via-teal-800 to-emerald-900 text-white p-6 sm:p-10">
        <div class="relative z-10 max-w-2xl space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/20 backdrop-blur text-white border border-white/20">
                    <i class="fa-solid fa-moon text-emerald-300"></i> PPATQ Raudlatul Falah Pati
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30">
                    <i class="fa-solid fa-award"></i> MI TQ RF Terakreditasi A
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-400/20 text-amber-200 border border-amber-400/30">
                    <i class="fa-solid fa-leaf"></i> Sekolah Adiwiyata Kab. Pati 2025
                </span>
            </div>
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Visi & Misi Pesantren</h1>
            <p class="text-sm sm:text-base text-emerald-100/90 leading-relaxed">
                Landasan filosofis, cita-cita luhur, dan komitmen PPATQ Raudlatul Falah dalam mencetak generasi penghafal Al-Qur'an sejak usia dini yang berkarakter mulia.
            </p>
        </div>
        <div class="absolute -right-10 -bottom-10 opacity-10 pointer-events-none text-white text-9xl">
            <i class="fa-solid fa-mosque"></i>
        </div>
    </div>

    <!-- VISI SECTION -->
    <x-mary-card shadow class="border-2 border-emerald-200 bg-gradient-to-br from-emerald-50/80 via-teal-50/40 to-white rounded-3xl p-6 sm:p-8">
        <div class="flex flex-col items-center text-center space-y-4 max-w-3xl mx-auto">
            <span class="px-5 py-1.5 rounded-full text-sm font-extrabold uppercase tracking-widest bg-emerald-700 text-white shadow-md">
                VISI
            </span>
            <blockquote class="text-xl sm:text-3xl font-extrabold text-emerald-950 leading-snug tracking-tight">
                "Terwujudnya generasi yang bertaqwa, santun, maju dan qur'ani"
            </blockquote>
            <p class="text-xs sm:text-sm text-slate-500">
                Pondok Pesantren Anak-Anak Tahfidzul Qur'an (PPATQ) Raudlatul Falah Bermi Gembong Pati
            </p>
        </div>

        <!-- 4 Pillars of Vision Grid -->
        <!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8 pt-6 border-t border-emerald-100">
            <div class="p-4 rounded-2xl bg-white border border-emerald-100 shadow-2xs text-center space-y-2 hover:-translate-y-1 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center mx-auto text-xl shadow-2xs">
                    <i class="fa-solid fa-kaaba"></i>
                </div>
                <h3 class="font-bold text-emerald-900 text-base">Bertaqwa</h3>
                <p class="text-xs text-slate-600 leading-relaxed">Menanamkan ketakwaan kokoh kepada Allah SWT dan kecintaan pada syariat Islam sejak dini.</p>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-emerald-100 shadow-2xs text-center space-y-2 hover:-translate-y-1 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-teal-100 text-teal-800 flex items-center justify-center mx-auto text-xl shadow-2xs">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>
                <h3 class="font-bold text-teal-900 text-base">Santun</h3>
                <p class="text-xs text-slate-600 leading-relaxed">Membentuk pribadi santri yang beradab luhur, tawadhu', hormat guru & orang tua, serta welas asih.</p>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-emerald-100 shadow-2xs text-center space-y-2 hover:-translate-y-1 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-800 flex items-center justify-center mx-auto text-xl shadow-2xs">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <h3 class="font-bold text-blue-900 text-base">Maju</h3>
                <p class="text-xs text-slate-600 leading-relaxed">Berprestasi dalam akademik madrasah, berwawasan luas, mandiri, dan tanggap teknologi.</p>
            </div>

            <div class="p-4 rounded-2xl bg-white border border-emerald-100 shadow-2xs text-center space-y-2 hover:-translate-y-1 transition duration-200">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center mx-auto text-xl shadow-2xs">
                    <i class="fa-solid fa-book-quran"></i>
                </div>
                <h3 class="font-bold text-amber-900 text-base">Qur'ani</h3>
                <p class="text-xs text-slate-600 leading-relaxed">Mencetak hafidz/hafidzah 30 Juz mutqin, tartil, dan mengamalkan nilai Al-Qur'an dalam kehidupan.</p>
            </div>
        </div> -->
    </x-mary-card>

    <!-- MISI SECTION -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-6">
        <div class="flex items-center gap-3 pb-3 border-b border-slate-100">
            <span class="px-5 py-1.5 rounded-full text-sm font-extrabold uppercase tracking-widest bg-emerald-700 text-white shadow-md">
                MISI
            </span>
            <span class="text-sm font-bold text-slate-700">Misi Utama PPATQ Raudlatul Falah</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Misi 1 -->
            <div class="flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-br from-emerald-50/60 to-white border border-emerald-100 hover:border-emerald-300 transition duration-200 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-emerald-700 text-white font-extrabold flex items-center justify-center shrink-0 shadow-xs">
                    1
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-slate-800 text-base">Mencetak Generasi Hafal Al-Qur'an</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Membimbing santri menghafal Al-Qur'an 30 Juz secara bertahap dengan metode bimbingan intensif yang menyenangkan dan ramah anak.
                    </p>
                </div>
            </div>

            <!-- Misi 2 -->
            <div class="flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-br from-emerald-50/60 to-white border border-emerald-100 hover:border-emerald-300 transition duration-200 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-emerald-700 text-white font-extrabold flex items-center justify-center shrink-0 shadow-xs">
                    2
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-slate-800 text-base">Menumbuhkan Pengalaman & Pengetahuan Islam</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Menumbuhkan pengalaman dan pengetahuan terhadap ajaran Islam untuk mengantarkan santri menjadi insan kamil yang berpengetahuan luas.
                    </p>
                </div>
            </div>

            <!-- Misi 3 -->
            <div class="flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-br from-emerald-50/60 to-white border border-emerald-100 hover:border-emerald-300 transition duration-200 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-emerald-700 text-white font-extrabold flex items-center justify-center shrink-0 shadow-xs">
                    3
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-slate-800 text-base">Keteladanan Berakhlakul Karimah</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Memberikan keteladanan nyata dalam berakhlakul karimah sesuai dengan nilai-nilai luhur yang terkandung dalam Al-Qur'an dan As-Sunnah.
                    </p>
                </div>
            </div>

            <!-- Misi 4 -->
            <div class="flex items-start gap-4 p-5 rounded-2xl bg-gradient-to-br from-emerald-50/60 to-white border border-emerald-100 hover:border-emerald-300 transition duration-200 shadow-2xs">
                <div class="w-10 h-10 rounded-xl bg-emerald-700 text-white font-extrabold flex items-center justify-center shrink-0 shadow-xs">
                    4
                </div>
                <div class="space-y-1">
                    <h3 class="font-bold text-slate-800 text-base">Peningkatan Iman, Taqwa & IPTEK</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Membekali dan meningkatkan kualitas keimanan & ketakwaan santri serta penguasaan ilmu pengetahuan dan teknologi modern.
                    </p>
                </div>
            </div>
        </div>
    </x-mary-card>

</div>
@endsection

