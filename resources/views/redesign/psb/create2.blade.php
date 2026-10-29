@extends('layouts/layout')

@section('content')
<div class="space-y-6">

    <!-- Notice / Alert Card -->
    <x-mary-card shadow class="border border-emerald-200 bg-gradient-to-br from-emerald-50/90 via-teal-50/50 to-white rounded-3xl p-5 sm:p-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div class="space-y-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 shadow-2xs">
                    <i class="fa-solid fa-circle-info text-emerald-600"></i> Informasi Calon Santri & Berkas
                </span>
                <ul class="text-xs sm:text-sm text-slate-700 space-y-1 list-disc list-inside">
                    <li>Biaya pendaftaran ditransfer ke <b>BSI 7141299818</b> a/n <b>PONPES ANAK TAHFIDZUL QUR'AN RF</b>.</li>
                    <li>Setelah transfer, silakan unggah bukti di menu <a href="{{URL::to('psb/upload_bukti')}}" class="text-emerald-700 font-bold underline hover:text-emerald-800">Upload Bukti Bayar</a>.</li>
                    <li>Pastikan semua data pada setiap tab di bawah ini telah terisi lengkap dan valid.</li>
                </ul>
            </div>
            <div class="shrink-0 w-full sm:w-auto">
                <a href="{{URL::to('psb/cetak_formulir')}}" target="_blank" class="w-full sm:w-auto btn bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl shadow-md font-semibold text-xs sm:text-sm flex items-center justify-center gap-2">
                    <i class="fa-solid fa-print"></i> Cetak Formulir (PDF)
                </a>
            </div>
        </div>
    </x-mary-card>

    <div id='alert-show'></div>

    <!-- Navigation Tabs Card -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-3xl p-4 sm:p-6">
        
        <!-- Modern Tab Navigation Buttons -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-2.5 pb-5 border-b border-slate-100" role="tablist">
            <button type="button" id='data-diri' data-target="#edit_pribadi" 
                    class="btn-nav-tab px-4 py-3 rounded-2xl font-bold text-xs sm:text-sm flex items-center justify-center gap-2 transition duration-200 bg-emerald-700 text-white shadow-md">
                <span class="w-5 h-5 rounded-full bg-white/20 text-white flex items-center justify-center text-[11px] font-mono">1</span>
                <i class="fa-solid fa-user"></i>
                <span>Data Diri</span>
            </button>
            <button type="button" id='walsan' data-target="#edit_walsan" 
                    class="btn-nav-tab px-4 py-3 rounded-2xl font-medium text-xs sm:text-sm flex items-center justify-center gap-2 transition duration-200 bg-slate-50 text-slate-600 hover:bg-emerald-50 hover:text-emerald-800 border border-slate-200/70">
                <span class="w-5 h-5 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center text-[11px] font-mono">2</span>
                <i class="fa-solid fa-users"></i>
                <span>Wali Santri</span>
            </button>
            <button type="button" id='asal-sekolah' data-target="#edit_asal_sekolah" 
                    class="btn-nav-tab px-4 py-3 rounded-2xl font-medium text-xs sm:text-sm flex items-center justify-center gap-2 transition duration-200 bg-slate-50 text-slate-600 hover:bg-emerald-50 hover:text-emerald-800 border border-slate-200/70">
                <span class="w-5 h-5 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center text-[11px] font-mono">3</span>
                <i class="fa-solid fa-school"></i>
                <span>Asal Sekolah</span>
            </button>
            <button type="button" id='berkas' data-target="#edit_berkas" 
                    class="btn-nav-tab px-4 py-3 rounded-2xl font-medium text-xs sm:text-sm flex items-center justify-center gap-2 transition duration-200 bg-slate-50 text-slate-600 hover:bg-emerald-50 hover:text-emerald-800 border border-slate-200/70">
                <span class="w-5 h-5 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center text-[11px] font-mono">4</span>
                <i class="fa-solid fa-folder-open"></i>
                <span>Berkas Pendukung</span>
            </button>
        </div>

        <!-- Form Sections Content -->
        <div class="pt-6">
            <div class="my-form" id="edit_pribadi">
                @include('psb/_form_edit_pribadi')
            </div>
            <div class="my-form hidden" id="edit_walsan">
                @include('psb/_form_edit_walsan')
            </div>
            <div class="my-form hidden" id="edit_asal_sekolah">
                @include('psb/_form_edit_asal_sekolah')
            </div>
            <div class="my-form hidden" id="edit_berkas">
                @include('psb/_form_edit_berkas')
            </div>
        </div>
    </x-mary-card>

</div>

<script>
    $(document).ready(function(){
        function setActiveTab(btnId, formId) {
            $(".my-form").hide();
            $(formId).fadeIn(200);

            // Inactive tabs styling
            $(".btn-nav-tab")
                .removeClass("bg-emerald-700 text-white shadow-md font-bold")
                .addClass("bg-slate-50 text-slate-600 hover:bg-emerald-50 hover:text-emerald-800 border border-slate-200/70 font-medium");
            
            $(".btn-nav-tab span:first-child")
                .removeClass("bg-white/20 text-white")
                .addClass("bg-slate-200 text-slate-700");

            // Active tab styling
            $(btnId)
                .removeClass("bg-slate-50 text-slate-600 hover:bg-emerald-50 hover:text-emerald-800 border border-slate-200/70 font-medium")
                .addClass("bg-emerald-700 text-white shadow-md font-bold");
            
            $(btnId + " span:first-child")
                .removeClass("bg-slate-200 text-slate-700")
                .addClass("bg-white/20 text-white");
        }

        $("#data-diri").click(function(){
            window.location.hash = "data-diri";
            setActiveTab("#data-diri", "#edit_pribadi");
        });
        $("#walsan").click(function(){
            window.location.hash = "walsan";
            setActiveTab("#walsan", "#edit_walsan");
        });
        $("#asal-sekolah").click(function(){
            window.location.hash = "asal-sekolah";
            setActiveTab("#asal-sekolah", "#edit_asal_sekolah");
        });
        $("#berkas").click(function(){
            window.location.hash = "berkas";
            setActiveTab("#berkas", "#edit_berkas");
        });

        // Check if hash exists on load
        const hash = window.location.hash;
        if(hash === "#walsan") {
            setActiveTab("#walsan", "#edit_walsan");
        } else if(hash === "#asal-sekolah") {
            setActiveTab("#asal-sekolah", "#edit_asal_sekolah");
        } else if(hash === "#berkas") {
            setActiveTab("#berkas", "#edit_berkas");
        }
    });
</script>
@endsection
