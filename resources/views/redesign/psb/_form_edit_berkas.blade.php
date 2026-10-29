<form action="javascript:void(0)" enctype="multipart/form-data" method="post" id="form_berkas">
    @csrf
    <input type="hidden" name="id" value="{{$psb_peserta->id}}">

    <div class="space-y-6">

        <div class="bg-emerald-50/70 border border-emerald-200/80 rounded-2xl p-4 text-xs text-emerald-950 flex items-start gap-3">
            <span class="w-7 h-7 rounded-lg bg-emerald-600 text-white flex items-center justify-center text-xs shrink-0 mt-0.5">
                <i class="fa-solid fa-cloud-arrow-up"></i>
            </span>
            <div class="space-y-1">
                <p class="font-bold">Ketentuan Unggah Berkas Persyaratan:</p>
                <p class="text-slate-600">Pastikan scan atau foto dokumen terlihat jelas, tidak buram/terpotong. Format berkas yang didukung adalah <b>JPG, JPEG, PNG, atau PDF</b> dengan ukuran maksimal <b>10 MB</b> per berkas.</p>
            </div>
        </div>

        <!-- Grid Container: 4 Berkas Cards (1 Col Mobile, 2 Cols Tablet/Desktop) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Card 1: File Kartu Keluarga (KK) -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-emerald-300 transition duration-200 shadow-xs flex flex-col justify-between space-y-4">
                <div class="space-y-3">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 text-slate-800 font-bold text-sm">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-sm">
                                <i class="fa-solid fa-people-roof"></i>
                            </span>
                            <span>Kartu Keluarga (KK)</span>
                        </div>
                        <span id="badge_kk">
                            @if(!empty($berkas->file_kk))
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    <i class="fa-solid fa-check"></i> Sudah Diunggah
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-amber-100 text-amber-800">
                                    <i class="fa-solid fa-clock"></i> Belum Diunggah
                                </span>
                            @endif
                        </span>
                    </div>

                    <div id="kk_error"></div>

                    <div>
                        <label for="kk" class="block text-xs font-medium text-slate-600 mb-1.5">
                            Pilih Dokumen KK Baru
                        </label>
                        <input type="file" name="kk" id="kk" accept=".jpg,.jpeg,.png,.pdf" 
                               class="file-input file-input-bordered file-input-sm file-input-success w-full bg-slate-50 text-xs rounded-xl">
                        <p class="text-[11px] text-slate-400 mt-1">Format: JPG, PNG, atau PDF (maks. 10MB)</p>
                    </div>
                </div>

                <div class="pt-2 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" class="btn btn-sm bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border-emerald-200 rounded-xl text-xs font-semibold flex items-center gap-1.5"
                            onclick="openPreviewModal('kkModal')">
                        <i class="fa-regular fa-eye"></i> Pratinjau KK
                    </button>
                    @if(!empty($berkas->file_kk))
                    <a href="{{URL::to('')}}/assets/images/upload/file_kk/{{$berkas->file_kk}}" target="_blank" class="text-xs text-emerald-700 hover:underline flex items-center gap-1 font-medium">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i> Buka Tab Baru
                    </a>
                    @endif
                </div>
            </div>

            <!-- Card 2: File KTP Orang Tua / Wali -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-emerald-300 transition duration-200 shadow-xs flex flex-col justify-between space-y-4">
                <div class="space-y-3">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 text-slate-800 font-bold text-sm">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-sm">
                                <i class="fa-solid fa-id-card"></i>
                            </span>
                            <span>KTP Orang Tua / Wali</span>
                        </div>
                        <span id="badge_ktp">
                            @if(!empty($berkas->file_ktp))
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    <i class="fa-solid fa-check"></i> Sudah Diunggah
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-amber-100 text-amber-800">
                                    <i class="fa-solid fa-clock"></i> Belum Diunggah
                                </span>
                            @endif
                        </span>
                    </div>

                    <div id="ktp_error"></div>

                    <div>
                        <label for="ktp" class="block text-xs font-medium text-slate-600 mb-1.5">
                            Pilih Dokumen KTP Baru
                        </label>
                        <input type="file" name="ktp" id="ktp" accept=".jpg,.jpeg,.png,.pdf" 
                               class="file-input file-input-bordered file-input-sm file-input-success w-full bg-slate-50 text-xs rounded-xl">
                        <p class="text-[11px] text-slate-400 mt-1">Format: JPG, PNG, atau PDF (maks. 10MB)</p>
                    </div>
                </div>

                <div class="pt-2 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" class="btn btn-sm bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border-emerald-200 rounded-xl text-xs font-semibold flex items-center gap-1.5"
                            onclick="openPreviewModal('ktpModal')">
                        <i class="fa-regular fa-eye"></i> Pratinjau KTP
                    </button>
                    @if(!empty($berkas->file_ktp))
                    <a href="{{URL::to('')}}/assets/images/upload/file_ktp/{{$berkas->file_ktp}}" target="_blank" class="text-xs text-emerald-700 hover:underline flex items-center gap-1 font-medium">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i> Buka Tab Baru
                    </a>
                    @endif
                </div>
            </div>

            <!-- Card 3: File Akta Kelahiran -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-emerald-300 transition duration-200 shadow-xs flex flex-col justify-between space-y-4">
                <div class="space-y-3">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 text-slate-800 font-bold text-sm">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-sm">
                                <i class="fa-solid fa-certificate"></i>
                            </span>
                            <span>Akta Kelahiran</span>
                        </div>
                        <span id="badge_akta">
                            @if(!empty($berkas->file_akta))
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    <i class="fa-solid fa-check"></i> Sudah Diunggah
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-amber-100 text-amber-800">
                                    <i class="fa-solid fa-clock"></i> Belum Diunggah
                                </span>
                            @endif
                        </span>
                    </div>

                    <div id="akta_error"></div>

                    <div>
                        <label for="akta" class="block text-xs font-medium text-slate-600 mb-1.5">
                            Pilih Dokumen Akta Baru
                        </label>
                        <input type="file" name="akta" id="akta" accept=".jpg,.jpeg,.png,.pdf" 
                               class="file-input file-input-bordered file-input-sm file-input-success w-full bg-slate-50 text-xs rounded-xl">
                        <p class="text-[11px] text-slate-400 mt-1">Format: JPG, PNG, atau PDF (maks. 10MB)</p>
                    </div>
                </div>

                <div class="pt-2 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" class="btn btn-sm bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border-emerald-200 rounded-xl text-xs font-semibold flex items-center gap-1.5"
                            onclick="openPreviewModal('aktaModal')">
                        <i class="fa-regular fa-eye"></i> Pratinjau Akta
                    </button>
                    @if(!empty($berkas->file_akta))
                    <a href="{{URL::to('')}}/assets/images/upload/file_akta/{{$berkas->file_akta}}" target="_blank" class="text-xs text-emerald-700 hover:underline flex items-center gap-1 font-medium">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i> Buka Tab Baru
                    </a>
                    @endif
                </div>
            </div>

            <!-- Card 4: File Rapor / Ijazah -->
            <div class="p-5 rounded-2xl bg-white border border-slate-200 hover:border-emerald-300 transition duration-200 shadow-xs flex flex-col justify-between space-y-4">
                <div class="space-y-3">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2 text-slate-800 font-bold text-sm">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-sm">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <span>Rapor / Ijazah Terakhir</span>
                        </div>
                        <span id="badge_rapor">
                            @if(!empty($berkas->file_rapor))
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-100 text-emerald-800">
                                    <i class="fa-solid fa-check"></i> Sudah Diunggah
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-amber-100 text-amber-800">
                                    <i class="fa-solid fa-clock"></i> Belum Diunggah
                                </span>
                            @endif
                        </span>
                    </div>

                    <div id="rapor_error"></div>

                    <div>
                        <label for="rapor" class="block text-xs font-medium text-slate-600 mb-1.5">
                            Pilih Dokumen Rapor / Ijazah Baru
                        </label>
                        <input type="file" name="rapor" id="rapor" accept=".jpg,.jpeg,.png,.pdf" 
                               class="file-input file-input-bordered file-input-sm file-input-success w-full bg-slate-50 text-xs rounded-xl">
                        <p class="text-[11px] text-slate-400 mt-1">Format: JPG, PNG, atau PDF (maks. 10MB)</p>
                    </div>
                </div>

                <div class="pt-2 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" class="btn btn-sm bg-emerald-50 hover:bg-emerald-100 text-emerald-800 border-emerald-200 rounded-xl text-xs font-semibold flex items-center gap-1.5"
                            onclick="openPreviewModal('raporModal')">
                        <i class="fa-regular fa-eye"></i> Pratinjau Rapor
                    </button>
                    @if(!empty($berkas->file_rapor))
                    <a href="{{URL::to('')}}/assets/images/upload/file_rapor/{{$berkas->file_rapor}}" target="_blank" class="text-xs text-emerald-700 hover:underline flex items-center gap-1 font-medium">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i> Buka Tab Baru
                    </a>
                    @endif
                </div>
            </div>

        </div>

        <!-- Submit Button Action Area -->
        <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span class="text-xs text-slate-500 flex items-center gap-1">
                <i class="fa-solid fa-info-circle text-emerald-600"></i> Berkas yang berhasil diunggah akan otomatis diperbarui dan disimpan.
            </span>
            <button type="submit" id="btn_submit_berkas" 
                    class="w-full sm:w-auto btn bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-md px-7 py-3 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-solid fa-cloud-arrow-up text-sm"></i>
                <span class="btn-text">Unggah & Simpan Berkas</span>
            </button>
        </div>

    </div>
</form>

<!-- Modals for Document Previews -->
<div class="modal-containers">

    <!-- Modal KK -->
    <dialog id="kkModal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box max-w-3xl rounded-3xl p-6 bg-white border border-slate-200 shadow-2xl">
            <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-4">
                <h3 class="font-bold text-base text-slate-800 flex items-center gap-2">
                    <i class="fa-solid fa-people-roof text-emerald-600"></i> Pratinjau Berkas Kartu Keluarga (KK)
                </h3>
                <button type="button" class="btn btn-sm btn-circle btn-ghost text-slate-400 hover:text-slate-700" onclick="closePreviewModal('kkModal')">✕</button>
            </div>
            <div class="text-center overflow-auto max-h-[60vh] flex items-center justify-center bg-slate-50 rounded-2xl p-3 border border-slate-100" id='contentkk'>
                @if(!empty($berkas->file_kk))
                    @php
                        $pecah = explode(".", $berkas->file_kk);
                        $ekstensi = end($pecah);
                    @endphp
                    @if(strtolower($ekstensi) == "pdf")
                        <object data="{{URL::to('')}}/assets/images/upload/file_kk/{{$berkas->file_kk}}" type="application/pdf" width="100%" height="450px" class="rounded-xl">
                            <p class="p-4 text-xs">Browser tidak dapat memuat pratinjau PDF langsung: <a href="{{URL::to('')}}/assets/images/upload/file_kk/{{$berkas->file_kk}}" target="_blank" class="text-emerald-700 font-bold underline">Buka Berkas PDF</a></p>
                        </object>
                    @else
                        <img src="{{URL::to('')}}/assets/images/upload/file_kk/{{$berkas->file_kk}}" class="max-h-[450px] object-contain rounded-xl shadow-xs" alt="Kartu Keluarga">
                    @endif
                @else
                    <div class="py-10 text-slate-400 space-y-2">
                        <i class="fa-solid fa-file-circle-xmark text-4xl text-slate-300"></i>
                        <p class="text-sm font-medium">Belum ada file Kartu Keluarga yang diunggah.</p>
                    </div>
                @endif
            </div>
            <div class="modal-action pt-4 border-t border-slate-100 flex justify-end">
                <button type="button" class="btn btn-sm btn-ghost text-slate-600 rounded-xl" onclick="closePreviewModal('kkModal')">Tutup</button>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button onclick="closePreviewModal('kkModal')">close</button>
        </form>
    </dialog>

    <!-- Modal KTP -->
    <dialog id="ktpModal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box max-w-3xl rounded-3xl p-6 bg-white border border-slate-200 shadow-2xl">
            <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-4">
                <h3 class="font-bold text-base text-slate-800 flex items-center gap-2">
                    <i class="fa-solid fa-id-card text-emerald-600"></i> Pratinjau Berkas KTP Orang Tua / Wali
                </h3>
                <button type="button" class="btn btn-sm btn-circle btn-ghost text-slate-400 hover:text-slate-700" onclick="closePreviewModal('ktpModal')">✕</button>
            </div>
            <div class="text-center overflow-auto max-h-[60vh] flex items-center justify-center bg-slate-50 rounded-2xl p-3 border border-slate-100" id='contentktp'>
                @if(!empty($berkas->file_ktp))
                    @php
                        $pecah = explode(".", $berkas->file_ktp);
                        $ekstensi = end($pecah);
                    @endphp
                    @if(strtolower($ekstensi) == "pdf")
                        <object data="{{URL::to('')}}/assets/images/upload/file_ktp/{{$berkas->file_ktp}}" type="application/pdf" width="100%" height="450px" class="rounded-xl">
                            <p class="p-4 text-xs">Browser tidak dapat memuat pratinjau PDF langsung: <a href="{{URL::to('')}}/assets/images/upload/file_ktp/{{$berkas->file_ktp}}" target="_blank" class="text-emerald-700 font-bold underline">Buka Berkas PDF</a></p>
                        </object>
                    @else
                        <img src="{{URL::to('')}}/assets/images/upload/file_ktp/{{$berkas->file_ktp}}" class="max-h-[450px] object-contain rounded-xl shadow-xs" alt="KTP">
                    @endif
                @else
                    <div class="py-10 text-slate-400 space-y-2">
                        <i class="fa-solid fa-file-circle-xmark text-4xl text-slate-300"></i>
                        <p class="text-sm font-medium">Belum ada file KTP yang diunggah.</p>
                    </div>
                @endif
            </div>
            <div class="modal-action pt-4 border-t border-slate-100 flex justify-end">
                <button type="button" class="btn btn-sm btn-ghost text-slate-600 rounded-xl" onclick="closePreviewModal('ktpModal')">Tutup</button>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button onclick="closePreviewModal('ktpModal')">close</button>
        </form>
    </dialog>

    <!-- Modal Akta -->
    <dialog id="aktaModal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box max-w-3xl rounded-3xl p-6 bg-white border border-slate-200 shadow-2xl">
            <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-4">
                <h3 class="font-bold text-base text-slate-800 flex items-center gap-2">
                    <i class="fa-solid fa-certificate text-emerald-600"></i> Pratinjau Berkas Akta Kelahiran
                </h3>
                <button type="button" class="btn btn-sm btn-circle btn-ghost text-slate-400 hover:text-slate-700" onclick="closePreviewModal('aktaModal')">✕</button>
            </div>
            <div class="text-center overflow-auto max-h-[60vh] flex items-center justify-center bg-slate-50 rounded-2xl p-3 border border-slate-100" id='contentakta'>
                @if(!empty($berkas->file_akta))
                    @php
                        $pecah = explode(".", $berkas->file_akta);
                        $ekstensi = end($pecah);
                    @endphp
                    @if(strtolower($ekstensi) == "pdf")
                        <object data="{{URL::to('')}}/assets/images/upload/file_akta/{{$berkas->file_akta}}" type="application/pdf" width="100%" height="450px" class="rounded-xl">
                            <p class="p-4 text-xs">Browser tidak dapat memuat pratinjau PDF langsung: <a href="{{URL::to('')}}/assets/images/upload/file_akta/{{$berkas->file_akta}}" target="_blank" class="text-emerald-700 font-bold underline">Buka Berkas PDF</a></p>
                        </object>
                    @else
                        <img src="{{URL::to('')}}/assets/images/upload/file_akta/{{$berkas->file_akta}}" class="max-h-[450px] object-contain rounded-xl shadow-xs" alt="Akta Kelahiran">
                    @endif
                @else
                    <div class="py-10 text-slate-400 space-y-2">
                        <i class="fa-solid fa-file-circle-xmark text-4xl text-slate-300"></i>
                        <p class="text-sm font-medium">Belum ada file Akta yang diunggah.</p>
                    </div>
                @endif
            </div>
            <div class="modal-action pt-4 border-t border-slate-100 flex justify-end">
                <button type="button" class="btn btn-sm btn-ghost text-slate-600 rounded-xl" onclick="closePreviewModal('aktaModal')">Tutup</button>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button onclick="closePreviewModal('aktaModal')">close</button>
        </form>
    </dialog>

    <!-- Modal Rapor -->
    <dialog id="raporModal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box max-w-3xl rounded-3xl p-6 bg-white border border-slate-200 shadow-2xl">
            <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-4">
                <h3 class="font-bold text-base text-slate-800 flex items-center gap-2">
                    <i class="fa-solid fa-graduation-cap text-emerald-600"></i> Pratinjau Berkas Rapor / Ijazah
                </h3>
                <button type="button" class="btn btn-sm btn-circle btn-ghost text-slate-400 hover:text-slate-700" onclick="closePreviewModal('raporModal')">✕</button>
            </div>
            <div class="text-center overflow-auto max-h-[60vh] flex items-center justify-center bg-slate-50 rounded-2xl p-3 border border-slate-100" id='contentrapor'>
                @if(!empty($berkas->file_rapor))
                    @php
                        $pecah = explode(".", $berkas->file_rapor);
                        $ekstensi = end($pecah);
                    @endphp
                    @if(strtolower($ekstensi) == "pdf")
                        <object data="{{URL::to('')}}/assets/images/upload/file_rapor/{{$berkas->file_rapor}}" type="application/pdf" width="100%" height="450px" class="rounded-xl">
                            <p class="p-4 text-xs">Browser tidak dapat memuat pratinjau PDF langsung: <a href="{{URL::to('')}}/assets/images/upload/file_rapor/{{$berkas->file_rapor}}" target="_blank" class="text-emerald-700 font-bold underline">Buka Berkas PDF</a></p>
                        </object>
                    @else
                        <img src="{{URL::to('')}}/assets/images/upload/file_rapor/{{$berkas->file_rapor}}" class="max-h-[450px] object-contain rounded-xl shadow-xs" alt="Rapor/Ijazah">
                    @endif
                @else
                    <div class="py-10 text-slate-400 space-y-2">
                        <i class="fa-solid fa-file-circle-xmark text-4xl text-slate-300"></i>
                        <p class="text-sm font-medium">Belum ada file Rapor/Ijazah yang diunggah.</p>
                    </div>
                @endif
            </div>
            <div class="modal-action pt-4 border-t border-slate-100 flex justify-end">
                <button type="button" class="btn btn-sm btn-ghost text-slate-600 rounded-xl" onclick="closePreviewModal('raporModal')">Tutup</button>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button onclick="closePreviewModal('raporModal')">close</button>
        </form>
    </dialog>

</div>

<script>
function openPreviewModal(id) {
    const el = document.getElementById(id);
    if(el && typeof el.showModal === 'function') {
        el.showModal();
    } else {
        $("#" + id).modal('show');
    }
}

function closePreviewModal(id) {
    const el = document.getElementById(id);
    if(el && typeof el.close === 'function') {
        el.close();
    } else {
        $("#" + id).modal('hide');
    }
}

$(document).ready(function(){
    const url_save_berkas = "{{URL::to('psb/update_data_berkas')}}";

    $("#form_berkas").submit(function(e){
        e.preventDefault();
        const $btn = $("#btn_submit_berkas");
        const originalContent = $btn.html();

        // Clear previous error messages
        $("#kk_error, #ktp_error, #akta_error, #rapor_error").html('');

        // Loading state
        $btn.prop('disabled', true)
            .addClass('opacity-75 cursor-not-allowed')
            .html('<i class="fa-solid fa-spinner fa-spin text-white"></i> <span>Mengunggah Berkas...</span>');

        const formData = new FormData(this);

        $.ajax({
            method: "POST",
            url: url_save_berkas,
            processData: false,
            contentType: false,
            data: formData,
            success: function(data){
                try {
                    const hasil = typeof data === 'object' ? data : JSON.parse(data);
                    
                    if(Array.isArray(hasil)) {
                        const base_url = '{{URL::to('')}}';
                        hasil.forEach(function(value){
                            if(value.location) {
                                // Update status badge to "Sudah Diunggah"
                                $("#badge_" + value.location).html(
                                    '<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-emerald-100 text-emerald-800"><i class="fa-solid fa-check"></i> Sudah Diunggah</span>'
                                );

                                // Update modal preview content
                                if(value.ekstensi == 'pdf'){
                                    $("#content" + value.location).html(
                                        `<object data="${base_url}/assets/images/upload/file_${value.location}/${value.photo}" type="application/pdf" width="100%" height="450px" class="rounded-xl">
                                            <p class="p-4 text-xs">PDF: <a href="${base_url}/assets/images/upload/file_${value.location}/${value.photo}" target="_blank" class="text-emerald-700 underline font-bold">Buka PDF</a></p>
                                        </object>`
                                    );
                                } else {
                                    $("#content" + value.location).html(
                                        `<img src="${base_url}/assets/images/upload/file_${value.location}/${value.photo}" class="max-h-[450px] object-contain rounded-xl shadow-xs" alt="${value.location}">`
                                    );
                                }
                            }
                        });
                    }

                    if(hasil[0] && hasil[0].code == 1){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Berkas Persyaratan Berhasil Diunggah & Disimpan',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#047857',
                            timer: 2000
                        });
                        // Reset file input selections
                        $("#form_berkas input[type='file']").val('');
                    } else {
                        Swal.fire({
                            title: 'Gagal!',
                            text: (hasil[0] && hasil[0].msg) ? hasil[0].msg : 'Berkas Gagal Disimpan',
                            icon: 'error',
                            confirmButtonText: 'Tutup',
                            confirmButtonColor: '#e11d48'
                        });
                    }
                } catch(err) {
                    Swal.fire({
                        title: 'Tersimpan',
                        text: 'Berkas telah diproses oleh server.',
                        icon: 'info',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#047857'
                    });
                }
            },
            error: function(reject){
                if(reject.status === 422) {
                    const errors = reject.responseJSON ? reject.responseJSON.errors : $.parseJSON(reject.responseText).errors;
                    $.each(errors, function (key, val) {
                        let htmlMsg = '<div class="p-2.5 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs mt-1.5 space-y-0.5"><div class="font-bold flex items-center gap-1"><i class="fa-solid fa-triangle-exclamation"></i> Gagal Unggah:</div>';
                        $.each(val, function(key2, val2){
                            htmlMsg += '<p>• ' + val2 + '</p>';
                        });
                        htmlMsg += '</div>';
                        $("#" + key + "_error").html(htmlMsg);
                    });
                    Swal.fire({
                        title: 'Validasi Gagal!',
                        text: 'Terdapat format atau ukuran berkas yang tidak sesuai.',
                        icon: 'warning',
                        confirmButtonText: 'Periksa Formulir',
                        confirmButtonColor: '#f59e0b'
                    });
                } else {
                    Swal.fire({
                        title: 'Terjadi Kesalahan!',
                        text: 'Gagal mengunggah berkas: ' + (reject.responseJSON?.message || 'Silakan coba lagi beberapa saat lagi'),
                        icon: 'error',
                        confirmButtonText: 'Tutup',
                        confirmButtonColor: '#e11d48'
                    });
                }
            },
            complete: function(){
                // Restore button state
                $btn.prop('disabled', false)
                    .removeClass('opacity-75 cursor-not-allowed')
                    .html(originalContent);
            }
        });
    });
});
</script>

