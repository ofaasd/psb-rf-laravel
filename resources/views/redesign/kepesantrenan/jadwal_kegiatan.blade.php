@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Hero Banner -->
    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-gradient-to-r from-emerald-800 via-teal-800 to-emerald-900 text-white p-6 sm:p-10">
        <div class="relative z-10 max-w-2xl space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/20 backdrop-blur text-white border border-white/20">
                    <i class="fa-solid fa-clock text-emerald-300"></i> Rutinitas & Kedisiplinan Santri
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30">
                    <i class="fa-solid fa-school"></i> MI Tahfidzul Qur'an
                </span>
            </div>
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Jadwal Kegiatan Sekolah & Pesantren</h1>
            <p class="text-sm sm:text-base text-emerald-100/90 leading-relaxed">
                Agenda terstruktur 24 jam yang menyeimbangkan antara pendidikan madrasah formal, hafalan Al-Qur'an intensif, ibadah berjama'ah, istirahat cukup, dan waktu bermain anak.
            </p>
        </div>
        <div class="absolute -right-10 -bottom-10 opacity-10 pointer-events-none text-white text-9xl">
            <i class="fa-solid fa-calendar-check"></i>
        </div>
    </div>

    <!-- 1. JADWAL KEGIATAN SEKOLAH (MI TAHFIDZUL QUR'AN RAUDLATUL FALAH) -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-4">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pb-3 border-b border-slate-100">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-1">
                    <i class="fa-solid fa-school text-emerald-600"></i> Pendidikan Formal
                </span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800">
                    Jadwal Kegiatan Sekolah (MI TQ Raudlatul Falah)
                </h2>
                <p class="text-xs text-slate-500">Pendidikan kurikulum madrasah formal setiap hari aktif belajar.</p>
            </div>
            <span class="badge badge-emerald badge-outline font-semibold text-xs">Pukul 06.50 - 12.00 WIB</span>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left text-sm border-collapse">
                <thead class="bg-gradient-to-r from-emerald-700 to-emerald-800 text-white text-xs uppercase font-extrabold tracking-wider">
                    <tr>
                        <th class="px-4 py-3.5 text-center w-16">NO.</th>
                        <th class="px-4 py-3.5 w-44">JAM</th>
                        <th class="px-4 py-3.5">KEGIATAN</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    <tr class="hover:bg-emerald-50/50 transition">
                        <td class="px-4 py-3 text-center font-bold text-emerald-800">1</td>
                        <td class="px-4 py-3 font-mono font-semibold text-slate-700">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 text-xs">
                                <i class="fa-regular fa-clock"></i> 06.50 - 09.20
                            </span>
                        </td>
                        <td class="px-4 py-3 font-medium text-slate-800">Masuk Pelajaran Formal</td>
                    </tr>
                    <tr class="hover:bg-emerald-50/50 transition bg-slate-50/50">
                        <td class="px-4 py-3 text-center font-bold text-emerald-800">2</td>
                        <td class="px-4 py-3 font-mono font-semibold text-slate-700">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-50 text-amber-800 text-xs">
                                <i class="fa-regular fa-clock"></i> 09.20 - 10.00
                            </span>
                        </td>
                        <td class="px-4 py-3 font-medium text-slate-800">
                            <span class="inline-flex items-center gap-1 text-amber-800 font-bold">
                                <i class="fa-solid fa-mosque"></i> Istirahat (Sholat Dzuha Berjama'ah)
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-emerald-50/50 transition">
                        <td class="px-4 py-3 text-center font-bold text-emerald-800">3</td>
                        <td class="px-4 py-3 font-mono font-semibold text-slate-700">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-50 text-emerald-800 text-xs">
                                <i class="fa-regular fa-clock"></i> 10.00 - 12.00
                            </span>
                        </td>
                        <td class="px-4 py-3 font-medium text-slate-800">Pelajaran Formal</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-mary-card>

    <!-- 2. JADWAL KEGIATAN HARIAN PPATQ RF (24 JAM) -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-4">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pb-3 border-b border-slate-100">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-teal-100 text-teal-800 mb-1">
                    <i class="fa-solid fa-moon text-teal-600"></i> Rutinitas 24 Jam
                </span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800">
                    Jadwal Kegiatan Harian PPATQ RF
                </h2>
                <p class="text-xs text-slate-500">Jadwal disiplin harian santri tahfidz mulai bangun pagi hingga istirahat malam.</p>
            </div>
            <div class="p-2.5 rounded-2xl bg-amber-50 border border-amber-200 text-amber-900 text-xs font-semibold flex items-center gap-2">
                <i class="fa-solid fa-star-and-crescent text-amber-600 text-sm"></i>
                <span>Hari Senin & Kamis Wajib Puasa Sunah</span>
            </div>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left text-sm border-collapse">
                <thead class="bg-gradient-to-r from-emerald-700 to-teal-800 text-white text-xs uppercase font-extrabold tracking-wider">
                    <tr>
                        <th class="px-4 py-3.5 text-center w-16">NO.</th>
                        <th class="px-4 py-3.5 w-48">JAM</th>
                        <th class="px-4 py-3.5">KEGIATAN SANTRI</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @php
                    $harian = [
                        [1, '04.00 - 04.20', 'Bangun tidur langsung mandi', 'fa-shower', 'text-teal-600'],
                        [2, '04.20 - 04.35', 'Sholat Shubuh berjama\'ah', 'fa-mosque', 'text-emerald-700 font-bold'],
                        [3, '04.35 - 06.15', 'Jam Wajib Tahfidz', 'fa-book-quran', 'text-emerald-800 font-bold bg-emerald-50/50'],
                        [4, '06.30 - 06.50', 'Istirahat, Makan Pagi, Persiapan Sekolah MI', 'fa-utensils', 'text-slate-700'],
                        [5, '06.50 - 09.20', 'Jam Wajib Sekolah MI', 'fa-school', 'text-indigo-800 font-bold'],
                        [6, '09.20 - 10.00', 'Istirahat (Sholat Dzuha)', 'fa-mosque', 'text-amber-800 font-semibold'],
                        [7, '10.00 - 12.00', 'Jam Wajib Sekolah MI', 'fa-school', 'text-indigo-800 font-bold'],
                        [8, '12.00 - 12.15', 'Sholat Dzuhur berjama\'ah', 'fa-mosque', 'text-emerald-700 font-bold'],
                        [9, '12.15 - 13.00', 'Istirahat dan Makan Siang', 'fa-utensils', 'text-slate-700'],
                        [10, '13.00 - 14.30', 'Jam Wajib Tidur Siang', 'fa-bed', 'text-blue-800 font-semibold bg-blue-50/30'],
                        [11, '14.30 - 15.00', 'Bangun tidur langsung mandi', 'fa-shower', 'text-teal-600'],
                        [12, '15.00 - 15.30', 'Sholat Ashar berjama\'ah', 'fa-mosque', 'text-emerald-700 font-bold'],
                        [13, '15.30 - 17.00', 'Jam Wajib Tahfidz', 'fa-book-quran', 'text-emerald-800 font-bold bg-emerald-50/50'],
                        [14, '17.00 - 18.00', 'Jam Istirahat, Makan Sore, Bermain', 'fa-volleyball', 'text-slate-700'],
                        [15, '18.00 - 18.20', 'Sholat Maghrib berjama\'ah', 'fa-mosque', 'text-emerald-700 font-bold'],
                        [16, '18.20 - 19.00', 'Jam Wajib Tahfidz', 'fa-book-quran', 'text-emerald-800 font-bold bg-emerald-50/50'],
                        [17, '19.00 - 19.20', 'Sholat Isya\' berjama\'ah', 'fa-mosque', 'text-emerald-700 font-bold'],
                        [18, '19.20 - 20.15', 'Jam Wajib Tahfidz', 'fa-book-quran', 'text-emerald-800 font-bold bg-emerald-50/50'],
                        [19, '20.15 - 21.10', 'Jam Wajib Belajar dan Ekstra', 'fa-pencil', 'text-purple-800 font-semibold'],
                        [20, '21.10 - 04.00', 'Jam Istirahat, Tidur Malam & Sholat Tahajud', 'fa-moon', 'text-blue-900 font-bold bg-blue-50/40']
                    ];
                    @endphp

                    @foreach($harian as $item)
                    <tr class="hover:bg-emerald-50/40 transition">
                        <td class="px-4 py-2.5 text-center font-bold text-slate-500">{{$item[0]}}</td>
                        <td class="px-4 py-2.5 font-mono text-xs font-semibold text-slate-700 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700">
                                <i class="fa-regular fa-clock text-[10px]"></i> {{$item[1]}}
                            </span>
                        </td>
                        <td class="px-4 py-2.5 {{$item[4]}}">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid {{$item[3]}} w-4 text-center opacity-80"></i>
                                <span>{{$item[2]}}</span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-mary-card>

    <!-- 3. JADWAL KEGIATAN MINGGUAN PPATQ RF (LIVE STREAMING) -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-6 sm:p-8 space-y-4">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pb-3 border-b border-slate-100">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-rose-100 text-rose-800 mb-1">
                    <i class="fa-brands fa-youtube text-rose-600"></i> Siaran Langsung YouTube
                </span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800">
                    Jadwal Kegiatan Mingguan PPATQ RF
                </h2>
                <p class="text-xs text-slate-500">Kajian kitab dan simaan Al-Qur'an rutin yang disiarkan langsung di kanal YouTube.</p>
            </div>
            <a href="https://www.youtube.com/@PPATQTV" target="_blank" class="btn btn-sm bg-rose-600 hover:bg-rose-700 text-white rounded-xl text-xs font-bold">
                <i class="fa-brands fa-youtube mr-1"></i> Buka YouTube PPATQ RF
            </a>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left text-sm border-collapse">
                <thead class="bg-gradient-to-r from-emerald-800 to-teal-900 text-white text-xs uppercase font-extrabold tracking-wider">
                    <tr>
                        <th class="px-4 py-3.5 text-center w-16">NO.</th>
                        <th class="px-4 py-3.5 w-48">JAM</th>
                        <th class="px-4 py-3.5">AGENDA KEGIATAN MINGGUAN</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    <tr class="hover:bg-emerald-50/50 transition">
                        <td class="px-4 py-4 text-center font-bold text-emerald-800">1</td>
                        <td class="px-4 py-4 font-mono font-semibold text-slate-700">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-rose-50 text-rose-800 text-xs font-bold">
                                <i class="fa-regular fa-clock"></i> 06.50 - 07.35 WIB
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            <div class="space-y-1">
                                <div class="font-bold text-slate-800 flex items-center gap-2">
                                    <span class="badge badge-sm badge-success text-white font-bold">Kamis Pagi</span>
                                    <span>Ngaji Kitab Abah Shokhib</span>
                                </div>
                                <p class="text-xs text-slate-600">
                                    Live Streaming YouTube Ngaji Kitab Abah Shokhib setiap hari Kamis Pagi bersama seluruh santri dan asatidz.
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-emerald-50/50 transition bg-slate-50/50">
                        <td class="px-4 py-4 text-center font-bold text-emerald-800">2</td>
                        <td class="px-4 py-4 font-mono font-semibold text-slate-700">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-rose-50 text-rose-800 text-xs font-bold">
                                <i class="fa-regular fa-clock"></i> 05.45 - 06.00 WIB
                            </span>
                        </td>
                        <td class="px-4 py-4">
                            <div class="space-y-1">
                                <div class="font-bold text-slate-800 flex items-center gap-2">
                                    <span class="badge badge-sm badge-info text-white font-bold">Jum'at Pagi</span>
                                    <span>Simaan Al-Qur'an Bil-Ghoib</span>
                                </div>
                                <p class="text-xs text-slate-600">
                                    Live Streaming YouTube Simaan Al-Qur'an Bil-Ghoib setiap hari Jum'at Pagi menyimak kelancaran hafalan santri.
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

       
    </x-mary-card>

</div>
@endsection

