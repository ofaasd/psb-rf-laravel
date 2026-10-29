@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Banner -->
    <div class="rounded-2xl overflow-hidden shadow-lg border border-emerald-100 bg-slate-100">
        <img src="{{asset('assets/images/banner3.jpeg')}}" alt="Kepesantrenan PPATQ Raudlatul Falah" class="w-full h-auto object-cover max-h-[380px]" />
    </div>

    <!-- Page Title & Intro -->
    <div class="text-center max-w-2xl mx-auto">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-2">
            <i class="fa-solid fa-book-quran text-emerald-600"></i> Kurikulum & Metode Tahfidz
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-950">Metode Pembelajaran Tahfidzul Qur'an</h2>
        <p class="text-sm text-slate-500 mt-1">Pondok Pesantren Anak-Anak Tahfidzul Qur'an Raudlatul Falah Pati mengadaptasi metode-metode terbaik guna mencetak generasi hafidz cilik yang mutqin.</p>
    </div>

    <!-- Grid of 4 Learning Methods -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Method A -->
        <x-mary-card title="A. Metode Musafahah" shadow class="border border-emerald-100 bg-white rounded-2xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm">A</div>
            </x-slot:menu>
            <p class="text-sm text-slate-600 mb-3">Metode interaksi langsung antara ustadz/ustadzah dan santri dengan pola:</p>
            <ol class="space-y-2 text-sm text-slate-700">
                <li class="flex items-start gap-2.5 p-2 rounded-xl bg-emerald-50/50">
                    <span class="badge badge-emerald badge-sm font-bold mt-0.5">1</span>
                    <span>Ustadz/Ustadzah membaca, santri mendengarkan dan sebaliknya</span>
                </li>
                <li class="flex items-start gap-2.5 p-2 rounded-xl bg-emerald-50/50">
                    <span class="badge badge-emerald badge-sm font-bold mt-0.5">2</span>
                    <span>Ustadz/Ustadzah membaca, santri hanya mendengarkan</span>
                </li>
                <li class="flex items-start gap-2.5 p-2 rounded-xl bg-emerald-50/50">
                    <span class="badge badge-emerald badge-sm font-bold mt-0.5">3</span>
                    <span>Santri membaca, Ustadz/Ustadzah mendengarkan</span>
                </li>
            </ol>
        </x-mary-card>

        <!-- Method B -->
        <x-mary-card title="B. Metode Resitasi" shadow class="border border-emerald-100 bg-white rounded-2xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-teal-100 text-teal-700 flex items-center justify-center font-bold text-sm">B</div>
            </x-slot:menu>
            <div class="p-4 rounded-xl bg-teal-50/60 border border-teal-100/60 text-sm text-slate-700 leading-relaxed">
                <p>Ustadz/Ustadzah memberikan tugas pada santri untuk menghafal beberapa ayat sampai hafal, kemudian santri menyetorkan hafalannya kepada ustadz/ustadzah secara terstruktur.</p>
            </div>
        </x-mary-card>

        <!-- Method C -->
        <x-mary-card title="C. Metode Takror" shadow class="border border-emerald-100 bg-white rounded-2xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-sm">C</div>
            </x-slot:menu>
            <div class="p-4 rounded-xl bg-amber-50/60 border border-amber-100/60 text-sm text-slate-700 leading-relaxed">
                <p>Santri mengulang hafalannya (muraja'ah berkala), kemudian santri membaca hafalannya di hadapan ustadz/ustadzah untuk menjaga kelancaran dan ketepatan tajwid.</p>
            </div>
        </x-mary-card>

        <!-- Method D -->
        <x-mary-card title="D. Metode Mudarosah" shadow class="border border-emerald-100 bg-white rounded-2xl hover:shadow-md transition">
            <x-slot:menu>
                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-sm">D</div>
            </x-slot:menu>
            <p class="text-sm text-slate-600 mb-3">Santri menghafal secara bergantian dan yang lain mendengarkan atau menyimak. Dalam prakteknya terdapat 3 macam variasi:</p>
            <div class="space-y-2 text-sm text-slate-700">
                <div class="p-2.5 rounded-xl bg-blue-50/50 border border-blue-100/60">
                    <span class="font-bold text-blue-900 block mb-0.5">1. Mudarosah Ayatan</span>
                    <span class="text-xs text-slate-600">Santri membaca satu ayat, kemudian diteruskan oleh santri lain secara bergiliran.</span>
                </div>
                <div class="p-2.5 rounded-xl bg-blue-50/50 border border-blue-100/60">
                    <span class="font-bold text-blue-900 block mb-0.5">2. Mudarosah Perhalaman</span>
                    <span class="text-xs text-slate-600">Santri membaca satu halaman penuh, kemudian diteruskan oleh santri lain.</span>
                </div>
                <div class="p-2.5 rounded-xl bg-blue-50/50 border border-blue-100/60">
                    <span class="font-bold text-blue-900 block mb-0.5">3. Mudarosah Per-empat (1/4 Juz)</span>
                    <span class="text-xs text-slate-600">Santri membaca bergantian setiap bagian juz Al-Qur'an untuk melatih ketahanan hafalan.</span>
                </div>
            </div>
        </x-mary-card>

    </div>

</div>
@endsection

