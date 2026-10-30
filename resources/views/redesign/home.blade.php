@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- HERO SLIDER SECTION -->
    <div class="relative rounded-2xl overflow-hidden shadow-lg border border-emerald-100 bg-slate-900">
        <div class="splide" id="homeSplide" aria-label="Slide Informasi PSB">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($slide as $row)
                    <li class="splide__slide relative aspect-[21/9] sm:aspect-[21/8] max-h-[440px]">
                        <img src="https://manajemen.ppatq-rf.id/assets/img/upload/photo/slide_{{$row->gambar}}" alt="{{$row->caption}}" class="w-full h-full object-cover">
                        @if(!empty($row->caption))
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6 md:p-8">
                            <div class="max-w-2xl text-white">
                                <h3 class="text-lg md:text-2xl font-bold drop-shadow">{{$row->caption}}</h3>
                            </div>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="splide__progress">
                <div class="splide__progress__bar bg-emerald-500"></div>
            </div>
        </div>
    </div>

    <!-- QUICK CTA BANNER -->
    <div class="p-5 md:p-6 rounded-2xl bg-gradient-to-r from-emerald-600 to-teal-700 text-white shadow-md flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center shrink-0 text-2xl">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div>
                <h4 class="font-bold text-lg leading-tight">Pendaftaran Santri Baru Telah Dibuka!</h4>
                <p class="text-xs sm:text-sm text-emerald-100">Daftarkan putra-putri Anda secara online dengan mudah dan cepat.</p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2.5">
            <a href="{{URL::to('psb/create')}}" class="btn bg-white text-emerald-800 hover:bg-emerald-50 border-0 rounded-xl px-5 font-bold shadow">
                <i class="fa-solid fa-file-pen mr-1.5"></i> Daftar Sekarang
            </a>
            <a target="_blank" href="{{asset('assets/files/Brosur 2027-2028.pdf')}}" class="btn bg-emerald-800/80 text-white hover:bg-emerald-900 border-0 rounded-xl px-4 text-xs">
                <i class="fa-solid fa-download mr-1"></i> Brosur
            </a>
        </div>
    </div>

    <!-- 1. MEKANISME PENDAFTARAN (Identical Sequence & Table Layout As Classic) -->
    <x-mary-card title="Mekanisme Pendaftaran" separator shadow class="border border-emerald-100 bg-white rounded-2xl">
        <x-slot:menu>
            <span class="badge badge-success badge-sm text-white font-semibold">Jadwal Resmi</span>
        </x-slot:menu>

        <div class="overflow-x-auto">
            <table class="table w-full border-t border-slate-100">
                <tbody>
                    <tr class="hover:bg-emerald-50/30 transition">
                        <td class="w-1/4 sm:w-1/5 font-bold text-slate-800 text-sm align-top py-4 px-4 bg-slate-50/70 border-r border-slate-100">
                            <div class="flex items-center gap-2 text-emerald-800">
                                <i class="fa-solid fa-calendar-days text-emerald-600"></i>
                                <span>Hari / Tanggal</span>
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="html-render text-slate-700">
                                {!! $detail->hari !!}
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-emerald-50/30 transition border-t border-slate-100">
                        <td class="w-1/4 sm:w-1/5 font-bold text-slate-800 text-sm align-top py-4 px-4 bg-slate-50/70 border-r border-slate-100">
                            <div class="flex items-center gap-2 text-emerald-800">
                                <i class="fa-solid fa-clock text-emerald-600"></i>
                                <span>Waktu Jam Kerja</span>
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="html-render text-slate-700">
                                {!! $detail->jam !!}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-mary-card>

    <!-- 2. MENYIAPKAN (Full Width, Formatted As In Classic) -->
    <x-mary-card title="Menyiapkan" separator shadow class="border border-emerald-100 bg-white rounded-2xl">
        <x-slot:menu>
            <span class="badge badge-ghost badge-sm text-emerald-800 font-medium">
                <i class="fa-solid fa-clipboard-check mr-1 text-emerald-600"></i> Berkas Persyaratan
            </span>
        </x-slot:menu>

        <div class="html-render p-4 rounded-xl bg-slate-50/70 border border-slate-100">
            {!! $detail->syarat !!}
        </div>
    </x-mary-card>

    <!-- 3. PROSEDUR / ALUR PENDAFTARAN ONLINE (Full Width, Clean HTML Render) -->
    <x-mary-card title="Prosedur / Alur Pendaftaran Online" separator shadow class="border border-emerald-100 bg-white rounded-2xl">
        <x-slot:menu>
            <span class="badge badge-primary badge-sm text-white">
                <i class="fa-solid fa-globe mr-1"></i> Online
            </span>
        </x-slot:menu>

        <div class="html-render p-4 rounded-xl bg-emerald-50/40 border border-emerald-100/60">
            {!! $detail->prosedur_online !!}
        </div>
    </x-mary-card>

    <!-- 4. PROSEDUR / ALUR PENDAFTARAN OFFLINE (Full Width, Clean HTML Render) -->
    <x-mary-card title="Prosedur / Alur Pendaftaran Offline" separator shadow class="border border-slate-200 bg-white rounded-2xl">
        <x-slot:menu>
            <span class="badge badge-neutral badge-sm text-white">
                <i class="fa-solid fa-building-columns mr-1"></i> Langsung / Offline
            </span>
        </x-slot:menu>

        <div class="html-render p-4 rounded-xl bg-slate-50/70 border border-slate-100">
            {!! $detail->prosedur_offline !!}
        </div>
    </x-mary-card>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (document.getElementById('homeSplide')) {
            new Splide('#homeSplide', {
                type: 'loop',
                autoplay: true,
                interval: 3500,
                pauseOnHover: true,
                arrows: true,
                pagination: true,
            }).mount();
        }
    });
</script>
@endsection
