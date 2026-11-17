@extends('layouts/layout')

@section('content')
<div class="space-y-8">

    <!-- Header Hero Banner -->
    <div class="relative rounded-3xl overflow-hidden shadow-lg border border-emerald-100 bg-gradient-to-r from-emerald-800 via-teal-800 to-emerald-900 text-white p-6 sm:p-10">
        <div class="relative z-10 max-w-2xl space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/20 backdrop-blur text-white border border-white/20">
                    <i class="fa-solid fa-file-signature text-emerald-300"></i> Ujian Seleksi Masuk
                </span>
                @if(!empty($gelombang->nama_gel))
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30">
                    <i class="fa-solid fa-layer-group"></i> {{ $gelombang->nama_gel }}
                </span>
                @endif
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-400/20 text-amber-200 border border-amber-400/30">
                    <i class="fa-solid fa-circle-check"></i> PSB Online
                </span>
            </div>
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Materi Test & Seleksi Calon Santri</h1>
            <p class="text-sm sm:text-base text-emerald-100/90 leading-relaxed">
                Informasi materi tes seleksi, cakupan uji kemampuan dasar, dan pedoman persiapan tes masuk calon santri baru PPATQ Raudlatul Falah.
            </p>
        </div>
        <div class="absolute -right-10 -bottom-10 opacity-10 pointer-events-none text-white text-9xl">
            <i class="fa-solid fa-book-open-reader"></i>
        </div>
    </div>

    <!-- MATERI TEST CONTENT CARD -->
    <x-mary-card shadow class="border-2 border-emerald-200 bg-white rounded-3xl p-6 sm:p-8 space-y-6">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pb-4 border-b border-slate-100">
            <div class="flex items-center gap-3">
                <span class="w-10 h-10 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-lg shadow-xs shrink-0">
                    <i class="fa-solid fa-list-check"></i>
                </span>
                <div>
                    <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800">
                        Cakupan Materi Ujian Seleksi
                    </h2>
                    <p class="text-xs text-slate-500">Materi yang akan diujikan pada pelaksanaan seleksi masuk calon santri.</p>
                </div>
            </div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-600 text-white shadow-xs">
                <i class="fa-solid fa-clipboard-check"></i> Ketentuan Resmi
            </span>
        </div>

        @if(!empty($materi_test))
            <div class="html-render p-5 sm:p-6 rounded-2xl bg-emerald-50/40 border border-emerald-100/80 text-slate-700 text-sm sm:text-base leading-relaxed break-words [overflow-wrap:anywhere] max-w-full overflow-x-auto shadow-xs">
                {!! $materi_test !!}
            </div>
        @else
            <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-amber-900 flex items-start gap-3">
                <i class="fa-solid fa-circle-exclamation text-amber-600 text-xl mt-0.5 shrink-0"></i>
                <div class="space-y-1">
                    <h4 class="font-bold text-sm">Informasi Materi Belum Diperbarui</h4>
                    <p class="text-xs text-amber-800 leading-relaxed">
                        Materi tes saat ini sedang dalam proses pembaruan oleh panitia PSB. Silakan pantau halaman ini secara berkala atau hubungi layanan informasi PSB PPATQ Raudlatul Falah.
                    </p>
                </div>
            </div>
        @endif
    </x-mary-card>

    @if(!empty($gelombang->ujian) || !empty($gelombang->jam_ujian) || !empty($gelombang->hari_ujian))
    <!-- JADWAL PELAKSANAAN UJIAN CARD -->
    <x-mary-card shadow class="border border-slate-200 bg-white rounded-3xl p-6 sm:p-8 space-y-4">
        <div class="flex items-center gap-3 pb-3 border-b border-slate-100">
            <span class="w-10 h-10 rounded-2xl bg-teal-100 text-teal-700 flex items-center justify-center text-lg shadow-xs shrink-0">
                <i class="fa-solid fa-calendar-day"></i>
            </span>
            <div>
                <h3 class="text-lg sm:text-xl font-bold text-slate-800">
                    Jadwal & Waktu Pelaksanaan Ujian
                </h3>
                <p class="text-xs text-slate-500">Waktu dan tanggal seleksi untuk gelombang pendaftaran yang sedang berlangsung.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-2">
            @if(!empty($gelombang->hari_ujian))
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Hari Ujian</span>
                <span class="text-sm sm:text-base font-bold text-slate-800 block">{{ $gelombang->hari_ujian }}</span>
            </div>
            @endif

            @if(!empty($gelombang->ujian))
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Tanggal Ujian</span>
                <span class="text-sm sm:text-base font-bold text-slate-800 block">{{ date('d-m-Y', strtotime($gelombang->ujian)) }}</span>
            </div>
            @endif

            @if(!empty($gelombang->jam_ujian))
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Waktu Ujian</span>
                <span class="text-sm sm:text-base font-bold text-slate-800 block">{{ $gelombang->jam_ujian }}</span>
            </div>
            @endif

            @if(!empty($gelombang->pengumuman))
            <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Pengumuman Hasil</span>
                <span class="text-sm sm:text-base font-bold text-emerald-700 block">{{ date('d-m-Y', strtotime($gelombang->pengumuman)) }}</span>
            </div>
            @endif
        </div>
    </x-mary-card>
    @endif

    <!-- CTA BANTUAN & INFORMASI -->
    <div class="p-5 sm:p-6 rounded-2xl bg-gradient-to-r from-emerald-600 via-teal-700 to-emerald-800 text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-md">
        <div class="space-y-1">
            <h4 class="font-bold text-base sm:text-lg">Ada Pertanyaan Seputar Ujian Seleksi?</h4>
            <p class="text-xs sm:text-sm text-emerald-100">Hubungi panitia pendaftaran melalui nomor layanan WhatsApp resmi kami.</p>
        </div>
        <a href="https://wa.me/6282298576026" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-white text-emerald-800 font-bold text-xs sm:text-sm shadow-sm hover:bg-emerald-50 transition shrink-0">
            <i class="fa-brands fa-whatsapp text-emerald-600 text-base"></i> Hubungi Panitia
        </a>
    </div>

</div>
@endsection
