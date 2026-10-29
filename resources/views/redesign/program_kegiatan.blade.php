@extends('layouts/layout')

@section('content')
<div class="space-y-6">

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-4 border-b border-emerald-100">
        <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-1">
                <i class="fa-solid fa-camera text-emerald-600"></i> Dokumentasi & Galeri
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-950">Galeri Program & Kegiatan Santri</h2>
            <p class="text-sm text-slate-500 mt-0.5">Potret aktivitas keseharian santri, pembelajaran tahfidz, dan ragam kegiatan positif di pondok.</p>
        </div>
        <div class="text-xs text-slate-400 bg-slate-100 px-3 py-1.5 rounded-xl font-medium">
            <i class="fa-regular fa-images mr-1"></i> 23 Foto Dokumentasi
        </div>
    </div>

    <!-- Gallery Grid with Lightbox -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
        @for($i=1; $i<=23; $i++)
        <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200/80 bg-slate-100 aspect-square transition duration-300">
            <a href="{{asset('assets/images/gallery/ (' . $i . ').jpg')}}" data-lightbox="gallery-ppatq" data-title="Dokumentasi Kegiatan Santri #{{$i}}">
                <img src="{{asset('assets/images/gallery/ (' . $i . ').jpg')}}" alt="Dokumentasi Kegiatan {{$i}}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" loading="lazy" />
                <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-between p-3">
                    <span class="text-white text-xs font-bold drop-shadow">Foto #{{$i}}</span>
                    <span class="w-7 h-7 rounded-full bg-white/30 backdrop-blur text-white flex items-center justify-center text-xs">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </span>
                </div>
            </a>
        </div>
        @endfor
    </div>

</div>
@endsection

