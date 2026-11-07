@extends('layouts/layout')

@section('content')
<style>
    /* Hero Slideshow Optimization */
    #homeSplide {
        position: relative;
        width: 100%;
        overflow: hidden;
    }
    #homeSplide .splide__track {
        overflow: hidden;
        width: 100%;
    }
    #homeSplide .splide__list {
        display: flex;
        align-items: center;
    }
    #homeSplide .splide__slide {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        flex-shrink: 0;
    }
    #homeSplide .splide__slide img {
        width: 100% !important;
        height: auto !important;
        max-height: 520px !important;
        object-fit: contain !important;
        display: block !important;
        margin: 0 auto !important;
    }
    @media (max-width: 640px) {
        #homeSplide .splide__slide img {
            max-height: 360px !important;
        }
    }
</style>

<div class="space-y-5 sm:space-y-7">

    <!-- HERO SLIDER SECTION (Clean Auto Height, No Dead Space) -->
    <div class="-mx-4 sm:-mx-6 md:-mx-8 -mt-4 sm:-mt-6 md:-mt-8 mb-2 sm:mb-4 relative overflow-hidden bg-slate-950 border-b border-emerald-100/60 shadow-xs">
        <div class="splide w-full" id="homeSplide" aria-label="Slide Informasi PSB">
            <div class="splide__track w-full">
                <ul class="splide__list w-full">
                    @foreach($slide as $row)
                    <li class="splide__slide relative w-full overflow-hidden">
                        <img src="https://manajemen.ppatq-rf.id/assets/img/upload/photo/slide_{{$row->gambar}}" 
                             alt="{{$row->caption}}" 
                             class="w-full h-auto block object-contain">
                        @if(!empty($row->caption))
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/85 via-black/40 to-transparent flex items-end p-3.5 sm:p-6 md:p-8 pointer-events-none">
                            <div class="max-w-2xl text-white">
                                <h3 class="text-xs sm:text-base md:text-xl font-bold drop-shadow leading-snug">{{$row->caption}}</h3>
                            </div>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            @if(count($slide) > 1)
            <div class="splide__progress">
                <div class="splide__progress__bar bg-emerald-500"></div>
            </div>
            @endif
        </div>
    </div>

    <!-- QUICK CTA BANNER (Mobile-Friendly Responsive Flex) -->
    <div class="p-4 sm:p-5 md:p-6 rounded-2xl bg-gradient-to-r from-emerald-600 via-emerald-700 to-teal-700 text-white shadow-md flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
        <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-2xl bg-white/20 flex items-center justify-center shrink-0 text-xl sm:text-2xl shadow-xs">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div>
                <h4 class="font-bold text-base sm:text-lg leading-tight">Pendaftaran Santri Baru Telah Dibuka!</h4>
                <p class="text-xs sm:text-sm text-emerald-100 mt-0.5">Daftarkan putra-putri Anda secara online dengan mudah dan cepat.</p>
            </div>
        </div>
        <div class="shrink-0 flex items-center gap-2.5 w-full sm:w-auto">
            <a href="{{URL::to('psb/create')}}" class="btn btn-sm sm:btn-md bg-white text-emerald-800 hover:bg-emerald-50 border-0 rounded-xl px-4 sm:px-5 font-bold shadow-xs flex-1 sm:flex-initial">
                <i class="fa-solid fa-file-pen mr-1"></i> Daftar Sekarang
            </a>
            <a target="_blank" href="{{asset('assets/files/Brosur 2027-2028.pdf')}}" class="btn btn-sm sm:btn-md bg-emerald-850/80 text-white hover:bg-emerald-900 border-0 rounded-xl px-3.5 sm:px-4 text-xs font-semibold shadow-xs flex-1 sm:flex-initial">
                <i class="fa-solid fa-download mr-1"></i> Unduh Brosur
            </a>
        </div>
    </div>

    <!-- 1. MEKANISME PENDAFTARAN (Mobile-Friendly Card & Layout) -->
    <div class="rounded-3xl bg-white border border-emerald-100 shadow-sm overflow-hidden">
        <!-- Header Card: Flex-wrap agar "Jadwal Resmi" selalu terlihat jelas di HP -->
        <div class="p-4 sm:p-5 md:p-6 border-b border-emerald-100/80 bg-gradient-to-r from-emerald-50/50 via-white to-transparent flex flex-wrap items-center justify-between gap-2.5">
            <div class="flex items-center gap-3">
                <span class="w-9 h-9 sm:w-10 sm:h-10 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-base sm:text-lg shadow-xs shrink-0">
                    <i class="fa-solid fa-calendar-check"></i>
                </span>
                <div>
                    <h3 class="text-base sm:text-xl font-bold text-emerald-950 leading-tight">Mekanisme Pendaftaran</h3>
                    <p class="text-[11px] sm:text-xs text-slate-500 mt-0.5 hidden xs:block">Jadwal resmi dan waktu pelaksanaan pendaftaran santri baru.</p>
                </div>
            </div>
            <!-- Badge Jadwal Resmi: Tetap Terlihat di Layar Ponsel Manapun -->
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-600 text-white shadow-xs">
                <span class="w-2 h-2 rounded-full bg-emerald-300 animate-pulse"></span>
                Jadwal Resmi
            </span>
        </div>

        <!-- Body: 2 Kolom Card Responsif (Jelas Terbaca di HP dan Desktop) -->
        <div class="p-4 sm:p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Card Hari / Tanggal -->
                <div class="rounded-2xl border border-emerald-200/80 bg-gradient-to-br from-emerald-50/70 via-emerald-50/30 to-white p-4 sm:p-5 space-y-2 shadow-xs">
                    <div class="flex items-center gap-2.5 pb-2 border-b border-emerald-200/60">
                        <span class="w-8 h-8 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-sm shadow-xs shrink-0">
                            <i class="fa-solid fa-calendar-days"></i>
                        </span>
                        <div>
                            <span class="block text-[10px] font-extrabold uppercase tracking-wider text-emerald-700">Periode Waktu</span>
                            <h4 class="text-sm font-bold text-slate-900">Hari / Tanggal</h4>
                        </div>
                    </div>
                    <div class="html-render text-slate-700 text-xs sm:text-sm leading-relaxed pl-0.5 pt-1">
                        {!! $detail->hari !!}
                    </div>
                </div>

                <!-- Card Waktu Jam Kerja -->
                <div class="rounded-2xl border border-teal-200/80 bg-gradient-to-br from-teal-50/70 via-teal-50/30 to-white p-4 sm:p-5 space-y-2 shadow-xs">
                    <div class="flex items-center gap-2.5 pb-2 border-b border-teal-200/60">
                        <span class="w-8 h-8 rounded-xl bg-teal-600 text-white flex items-center justify-center text-sm shadow-xs shrink-0">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                        <div>
                            <span class="block text-[10px] font-extrabold uppercase tracking-wider text-teal-700">Jam Layanan</span>
                            <h4 class="text-sm font-bold text-slate-900">Waktu Jam Kerja</h4>
                        </div>
                    </div>
                    <div class="html-render text-slate-700 text-xs sm:text-sm leading-relaxed pl-0.5 pt-1">
                        {!! $detail->jam !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 2. MENYIAPKAN (Full Width, Formatted As In Classic) -->
    <div class="rounded-3xl bg-white border border-emerald-100 shadow-sm overflow-hidden">
        <div class="p-4 sm:p-5 md:p-6 border-b border-emerald-100/80 bg-gradient-to-r from-emerald-50/50 via-white to-transparent flex flex-wrap items-center justify-between gap-2.5">
            <div class="flex items-center gap-3">
                <span class="w-9 h-9 sm:w-10 sm:h-10 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-base sm:text-lg shadow-xs shrink-0">
                    <i class="fa-solid fa-list-check"></i>
                </span>
                <h3 class="text-base sm:text-xl font-bold text-emerald-950 leading-tight">Menyiapkan</h3>
            </div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800 border border-emerald-200 shadow-xs">
                <i class="fa-solid fa-clipboard-check text-emerald-600"></i> Berkas Persyaratan
            </span>
        </div>
        <div class="p-4 sm:p-6">
            <div class="html-render p-4 sm:p-5 rounded-2xl bg-slate-50/80 border border-slate-100 text-slate-700 text-xs sm:text-sm leading-relaxed">
                {!! $detail->syarat !!}
            </div>
        </div>
    </div>

    <!-- 3. PROSEDUR / ALUR PENDAFTARAN ONLINE -->
    <div class="rounded-3xl bg-white border border-emerald-100 shadow-sm overflow-hidden">
        <div class="p-4 sm:p-5 md:p-6 border-b border-emerald-100/80 bg-gradient-to-r from-emerald-50/50 via-white to-transparent flex flex-wrap items-center justify-between gap-2.5">
            <div class="flex items-center gap-3">
                <span class="w-9 h-9 sm:w-10 sm:h-10 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-base sm:text-lg shadow-xs shrink-0">
                    <i class="fa-solid fa-laptop"></i>
                </span>
                <h3 class="text-base sm:text-xl font-bold text-emerald-950 leading-tight">Prosedur / Alur Pendaftaran Online</h3>
            </div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-600 text-white shadow-xs">
                <i class="fa-solid fa-globe"></i> Online
            </span>
        </div>
        <div class="p-4 sm:p-6">
            <div class="html-render p-4 sm:p-5 rounded-2xl bg-emerald-50/40 border border-emerald-100/60 text-slate-700 text-xs sm:text-sm leading-relaxed">
                {!! $detail->prosedur_online !!}
            </div>
        </div>
    </div>

    <!-- 4. PROSEDUR / ALUR PENDAFTARAN OFFLINE -->
    <div class="rounded-3xl bg-white border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-4 sm:p-5 md:p-6 border-b border-slate-100 bg-gradient-to-r from-slate-50 via-white to-transparent flex flex-wrap items-center justify-between gap-2.5">
            <div class="flex items-center gap-3">
                <span class="w-9 h-9 sm:w-10 sm:h-10 rounded-2xl bg-slate-100 text-slate-700 flex items-center justify-center text-base sm:text-lg shadow-xs shrink-0">
                    <i class="fa-solid fa-building-columns"></i>
                </span>
                <h3 class="text-base sm:text-xl font-bold text-slate-900 leading-tight">Prosedur / Alur Pendaftaran Offline</h3>
            </div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-slate-200 text-slate-800 shadow-xs">
                <i class="fa-solid fa-school"></i> Langsung / Offline
            </span>
        </div>
        <div class="p-4 sm:p-6">
            <div class="html-render p-4 sm:p-5 rounded-2xl bg-slate-50/80 border border-slate-100 text-slate-700 text-xs sm:text-sm leading-relaxed">
                {!! $detail->prosedur_offline !!}
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const splideEl = document.getElementById('homeSplide');
        if (splideEl) {
            const slideCount = splideEl.querySelectorAll('.splide__slide').length;
            const splide = new Splide('#homeSplide', {
                type: slideCount > 1 ? 'loop' : 'slide',
                autoplay: slideCount > 1,
                interval: 4000,
                pauseOnHover: true,
                arrows: slideCount > 1,
                pagination: slideCount > 1,
                speed: 600,
            });
            splide.mount();
        }
    });
</script>
@endsection
