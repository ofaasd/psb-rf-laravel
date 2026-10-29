<!-- Reusable Menu View for Redesign -->
<div class="flex flex-col lg:flex-row items-center gap-1 w-full">
    <a href="{{URL::to('/')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition {{ Request::is('/') ? 'bg-white/20 text-white' : '' }}">
        <i class="fa-solid fa-house mr-1.5 opacity-80"></i> Home
    </a>
    <a href="{{URL::to('/program_kegiatan')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition {{ Request::is('program_kegiatan') ? 'bg-white/20 text-white' : '' }}">
        <i class="fa-solid fa-images mr-1.5 opacity-80"></i> Program Kegiatan
    </a>
    <a href="{{URL::to('/pesantren')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition {{ Request::is('pesantren') ? 'bg-white/20 text-white' : '' }}">
        <i class="fa-solid fa-mosque mr-1.5 opacity-80"></i> Kepesantrenan
    </a>
    <a href="{{URL::to('psb/create')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition {{ Request::is('psb/create') ? 'bg-white/20 text-white' : '' }}">
        <i class="fa-solid fa-user-plus mr-1.5 opacity-80"></i> Form Pendaftaran
    </a>

    <!-- Dropdown Data Santri -->
    <div class="relative group">
        <button class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 inline-flex items-center gap-1.5 transition">
            <i class="fa-solid fa-users mr-1 opacity-80"></i> Data Santri
            <i class="fa-solid fa-chevron-down text-xs opacity-70 group-hover:rotate-180 transition-transform"></i>
        </button>
        <div class="absolute left-0 mt-1 w-52 rounded-2xl bg-white shadow-2xl border border-emerald-100 py-2 hidden group-hover:block hover:block z-50">
            <a href="{{URL::to('psb')}}" class="flex items-center gap-2.5 px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition">
                <i class="fa-solid fa-user-clock text-emerald-600 w-4"></i> Data Calon Santri
            </a>
            <a href="{{URL::to('santri_aktif')}}" class="flex items-center gap-2.5 px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition">
                <i class="fa-solid fa-user-check text-emerald-600 w-4"></i> Data Santri Aktif
            </a>
        </div>
    </div>

    @if(!empty(session('psb_username')))
    <a href="{{URL::to('psb/data_pribadi')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition {{ Request::is('psb/data_pribadi') ? 'bg-white/20 text-white' : '' }}">
        <i class="fa-solid fa-id-card mr-1.5 opacity-80"></i> Update Data
    </a>
    <a href="{{URL::to('psb/upload_bukti')}}" class="px-3.5 py-2 rounded-xl text-sm font-semibold text-white/90 hover:text-white hover:bg-white/15 transition {{ Request::is('psb/upload_bukti') ? 'bg-white/20 text-white' : '' }}">
        <i class="fa-solid fa-receipt mr-1.5 opacity-80"></i> Bukti Pembayaran
    </a>
    @endif
</div>

