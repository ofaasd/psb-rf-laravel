@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Banner -->
    <!-- <div class="relative rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-slate-100">
        <img src="{{asset('assets/images/banner3.jpeg')}}" alt="Kepesantrenan PPATQ Raudlatul Falah" class="w-full h-auto object-cover max-h-[380px]" />
    </div> -->

    <!-- Page Title & Overview Card -->
    <x-mary-card shadow class="border border-emerald-100 bg-gradient-to-br from-emerald-50/70 via-teal-50/30 to-white rounded-3xl p-6 sm:p-8 space-y-4">
        

        <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-950">
            Kurikulum & Metode Pembelajaran Tahfidzul Qur'an
        </h2>
        <br/>
        <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
            Pondok Pesantren Anak-Anak Tahfidzul Qur'an (PPATQ) Raudlatul Falah menggunakan <b>kurikulum berbasis pondok pesantren</b> yang berciri khusus hafalan Al-Qur'an 30 juz, serta mengintegrasikan secara harmonis dengan <b>kurikulum KEMENDIKBUD dan KEMENAG Republik Indonesia</b> untuk jenjang Madrasah Ibtidaiyyah (MI).
        </p>
        <br />
        <div class="flex flex-wrap items-center gap-2">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-700 text-white shadow-2xs">
                <i class="fa-solid fa-book-quran"></i> Kurikulum Terpadu
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
                <i class="fa-solid fa-award text-emerald-600"></i> MI TQ RF Terakreditasi A
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800 border border-amber-200">
                <i class="fa-solid fa-leaf text-amber-600"></i> Sekolah Adiwiyata Kab. Pati 2025
            </span>
        </div>
    </x-mary-card>

    <!-- Section Heading: 4 Metode Pembelajaran -->
    <div class="text-center max-w-2xl mx-auto pt-2">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-2">
            <i class="fa-solid fa-graduation-cap text-emerald-600"></i> 4 Metode Utama
        </span>
        <h3 class="text-xl sm:text-2xl font-extrabold text-emerald-950">Metode Unggulan Menghafal Al-Qur'an</h3>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">
            Dirancang khusus untuk usia anak-anak (golden age) dengan pendekatan talaqqi langsung, pengulangan berkesinambungan, dan evaluasi mutqin.
        </p>
    </div>

    <!-- Grid of 4 Learning Methods -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Method A -->
        <x-mary-card title="A. Metode Musafahah" shadow class="border border-emerald-100 bg-white rounded-3xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-extrabold text-sm shadow-2xs">A</div>
            </x-slot:menu>
            <p class="text-xs sm:text-sm text-slate-600 mb-3">Metode interaksi langsung (face-to-face) antara ustadz/ustadzah dan santri dengan pola:</p>
            <ol class="space-y-2 text-xs sm:text-sm text-slate-700">
                <li class="flex items-start gap-2.5 p-2.5 rounded-xl bg-emerald-50/60 border border-emerald-100/60">
                    <span class="badge badge-emerald badge-sm font-bold mt-0.5">1</span>
                    <span>Ustadz/Ustadzah membaca, santri mendengarkan dan sebaliknya</span>
                </li>
                <li class="flex items-start gap-2.5 p-2.5 rounded-xl bg-emerald-50/60 border border-emerald-100/60">
                    <span class="badge badge-emerald badge-sm font-bold mt-0.5">2</span>
                    <span>Ustadz/Ustadzah membaca, santri menyimak dan mendengarkan dengan seksama</span>
                </li>
                <li class="flex items-start gap-2.5 p-2.5 rounded-xl bg-emerald-50/60 border border-emerald-100/60">
                    <span class="badge badge-emerald badge-sm font-bold mt-0.5">3</span>
                    <span>Santri membaca hafalan, Ustadz/Ustadzah mendengarkan dan mengoreksi makhraj serta tajwid</span>
                </li>
            </ol>
        </x-mary-card>

        <!-- Method B -->
        <x-mary-card title="B. Metode Resitasi" shadow class="border border-emerald-100 bg-white rounded-3xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-teal-100 text-teal-700 flex items-center justify-center font-extrabold text-sm shadow-2xs">B</div>
            </x-slot:menu>
            <div class="p-4 rounded-2xl bg-teal-50/60 border border-teal-100/60 text-xs sm:text-sm text-slate-700 leading-relaxed space-y-2">
                <p>Ustadz/Ustadzah memberikan tugas terukur kepada santri untuk menghafal beberapa ayat tertentu hingga lancar dan hafal di luar kepala.</p>
                <p class="text-xs text-teal-900 font-semibold bg-white/80 p-2.5 rounded-xl border border-teal-200/50">
                    <i class="fa-solid fa-circle-check text-teal-600 mr-1"></i> Setelah hafal, santri menyetorkan secara mandiri kepada ustadz/ustadzah pengampu halaqah.
                </p>
            </div>
        </x-mary-card>

        <!-- Method C -->
        <x-mary-card title="C. Metode Takror" shadow class="border border-emerald-100 bg-white rounded-3xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-extrabold text-sm shadow-2xs">C</div>
            </x-slot:menu>
            <div class="p-4 rounded-2xl bg-amber-50/60 border border-amber-100/60 text-xs sm:text-sm text-slate-700 leading-relaxed space-y-2">
                <p>Santri mengulang kembali hafalan yang telah disetorkan secara kontinu (muraja'ah intensif), kemudian santri membacanya di hadapan ustadz/ustadzah.</p>
                <p class="text-xs text-amber-900 font-semibold bg-white/80 p-2.5 rounded-xl border border-amber-200/50">
                    <i class="fa-solid fa-rotate text-amber-600 mr-1"></i> Takror bertujuan mengunci hafalan lama agar tetap mutqin dan tidak mudah terlupakan.
                </p>
            </div>
        </x-mary-card>

        <!-- Method D -->
        <x-mary-card title="D. Metode Mudarosah" shadow class="border border-emerald-100 bg-white rounded-3xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-extrabold text-sm shadow-2xs">D</div>
            </x-slot:menu>
            <p class="text-xs sm:text-sm text-slate-600 mb-3">Santri membaca hafalan secara bergiliran dan santri lain mendengarkan serta menyimak. Dalam pelaksanaannya dibagi menjadi 3 variasi:</p>
            <div class="space-y-2 text-xs sm:text-sm text-slate-700">
                <div class="p-3 rounded-2xl bg-blue-50/60 border border-blue-100/60">
                    <span class="font-bold text-blue-900 block mb-0.5">1. Mudarosah Ayatan</span>
                    <span class="text-xs text-slate-600">Santri membaca satu ayat, kemudian ayat berikutnya diteruskan oleh santri lain secara bergiliran.</span>
                </div>
                <div class="p-3 rounded-2xl bg-blue-50/60 border border-blue-100/60">
                    <span class="font-bold text-blue-900 block mb-0.5">2. Mudarosah Perhalaman</span>
                    <span class="text-xs text-slate-600">Santri membaca satu halaman mushaf, kemudian diteruskan oleh santri lain per halaman.</span>
                </div>
                <div class="p-3 rounded-2xl bg-blue-50/60 border border-blue-100/60">
                    <span class="font-bold text-blue-900 block mb-0.5">3. Mudarosah Per-empat (1/4 Juz)</span>
                    <span class="text-xs text-slate-600">Santri membaca seperempat juz secara bergantian untuk melatih nafas dan daya tahan hafalan.</span>
                </div>
            </div>
        </x-mary-card>

    </div>

</div>
@endsection
