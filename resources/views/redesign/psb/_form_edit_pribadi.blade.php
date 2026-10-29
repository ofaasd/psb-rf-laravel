<form action="javascript:void(0)" method="post" id="form_data_diri" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$psb_peserta->id}}">
    <input type="hidden" name="psb_wali_id" value="{{$psb_wali->id}}">

    <div class="space-y-6">

        <!-- Grid Container: 1 Col Mobile, 2 Cols Tablet/Desktop -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Kolom Kiri: Foto & Identitas Calon Santri -->
            <div class="space-y-4">
                
                <!-- Card Foto Profil -->
                <div class="p-4 rounded-2xl bg-gradient-to-br from-emerald-50/70 to-teal-50/40 border border-emerald-100 flex flex-col sm:flex-row items-center gap-4">
                    <div class="relative shrink-0 group">
                        <img src="{{$foto}}" alt="Foto Calon Santri" 
                             class="user-profile-img w-28 h-32 object-cover rounded-xl border-2 border-emerald-500 shadow-sm bg-white transition duration-300 group-hover:scale-[1.02]">
                        <span class="absolute bottom-1 right-1 bg-emerald-600 text-white rounded-full p-1 text-[10px] shadow" title="Pas Foto Santri">
                            <i class="fa-solid fa-camera"></i>
                        </span>
                    </div>
                    <div class="space-y-2 text-center sm:text-left flex-1 w-full">
                        <div>
                            <label for="photos" class="block text-xs font-bold text-emerald-950 uppercase tracking-wider mb-1">
                                Pas Foto Calon Santri
                            </label>
                            <p class="text-xs text-slate-500 mb-2">Unggah foto terbaru berseragam/rapi dengan latar polos (JPG/PNG).</p>
                        </div>
                        <input type="file" name="photos" id="photos" accept="image/*" 
                               class="file-input file-input-bordered file-input-sm file-input-success w-full bg-white text-xs rounded-xl shadow-xs">
                    </div>
                </div>

                <!-- NIK Santri -->
                <div>
                    <label for="nik" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        NIK Calon Santri (16 Digit)
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-address-card"></i>
                        </span>
                        <input type="text" name="nik" id="nik" inputmode="numeric" maxlength="16" placeholder="Contoh: 3318xxxxxxxxxxxx"
                            value="<?=$psb_peserta->nik??''?>"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
                    </div>
                </div>

                <!-- Nama Lengkap -->
                <div>
                    <label for="nama" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Nama Lengkap Santri <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" name="nama" id="nama" required placeholder="Nama lengkap sesuai akta / KK"
                            value="<?=$psb_peserta->nama??''?>"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-semibold" />
                    </div>
                </div>

                <!-- Nama Panggilan -->
                <div>
                    <label for="nama_panggilan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Nama Panggilan
                    </label>
                    <input type="text" name="nama_panggilan" id="nama_panggilan" placeholder="Nama panggilan santri"
                        value="<?=$psb_peserta->nama_panggilan??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>

                <!-- Jenis Kelamin (Tap-Friendly Radio Cards) -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                        Jenis Kelamin <span class="text-rose-500">*</span>
                    </label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="flex items-center gap-3 p-3.5 rounded-xl border-2 border-slate-200 bg-slate-50/60 hover:bg-emerald-50/50 hover:border-emerald-400 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50 has-[:checked]:text-emerald-900">
                            <input type="radio" name="jenis_kelamin" value="L" id="laki-laki" required 
                                   <?=($psb_peserta->jenis_kelamin=='L')?'checked':''?> class="radio radio-success radio-sm" />
                            <span class="font-bold text-sm flex items-center gap-1.5">
                                <i class="fa-solid fa-mars text-blue-600"></i> Laki-laki
                            </span>
                        </label>
                        <label class="flex items-center gap-3 p-3.5 rounded-xl border-2 border-slate-200 bg-slate-50/60 hover:bg-emerald-50/50 hover:border-emerald-400 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50 has-[:checked]:text-emerald-900">
                            <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required 
                                   <?=($psb_peserta->jenis_kelamin=='P')?'checked':''?> class="radio radio-success radio-sm" />
                            <span class="font-bold text-sm flex items-center gap-1.5">
                                <i class="fa-solid fa-venus text-pink-600"></i> Perempuan
                            </span>
                        </label>
                    </div>
                </div>

            </div>

            <!-- Kolom Kanan: Kelahiran, Saudara & Alamat -->
            <div class="space-y-4">

                <!-- Tempat & Tanggal Lahir -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label for="tempat_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Tempat Lahir <span class="text-rose-500">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <i class="fa-solid fa-city"></i>
                            </span>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" required placeholder="Kota kelahiran"
                                value="<?=$psb_peserta->tempat_lahir??''?>"
                                class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                        </div>
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Tanggal Lahir <span class="text-rose-500">*</span>
                        </label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                            value="<?=!empty($psb_peserta->tanggal_lahir) ? date('Y-m-d', strtotime($psb_peserta->tanggal_lahir)) : ''?>"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                    </div>
                </div>

                <!-- Jumlah Saudara & Anak Ke -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label for="jumlah_saudara" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Jml. Saudara
                        </label>
                        <input type="number" min="0" name="jumlah_saudara" id="jumlah_saudara" placeholder="0"
                            value="<?=$psb_peserta->jumlah_saudara??''?>"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                    </div>
                    <div>
                        <label for="anak_ke" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Anak Ke
                        </label>
                        <input type="number" min="1" name="anak_ke" id="anak_ke" placeholder="1"
                            value="{{$psb_peserta->anak_ke??''}}"
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                    </div>
                </div>

                <!-- Alamat Lengkap -->
                <div>
                    <label for="alamat" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Alamat Lengkap <span class="text-rose-500">*</span>
                    </label>
                    <textarea name="alamat" id="alamat" required rows="2" placeholder="Nama jalan, RT/RW, Dusun/Perumahan, No. rumah"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800">{{$psb_peserta->alamat??''}}</textarea>
                </div>

                <!-- Wilayah Domisili (Box Grid) -->
                <div class="p-4 rounded-2xl bg-slate-50/80 border border-slate-200/80 space-y-3">
                    <p class="text-xs font-bold text-emerald-800 uppercase tracking-wider flex items-center gap-1.5">
                        <i class="fa-solid fa-map-location-dot"></i> Wilayah Administrasi Domisili
                    </p>

                    <!-- Provinsi & Kota -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label for="provinsi" class="block text-xs font-semibold text-slate-600 mb-1">
                                Provinsi <span class="text-rose-500">*</span>
                            </label>
                            <select name="provinsi" id="provinsi" required
                                class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                                <option value="0">-- Pilih Provinsi --</option>
                                @foreach($provinsi as $row)
                                <option value="{{$row->id_provinsi}}" {{($row->id_provinsi == $psb_peserta->prov_id) ? "selected" : ""}}>
                                    {{$row->nama_provinsi}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="kota" class="block text-xs font-semibold text-slate-600 mb-1">
                                Kota / Kabupaten <span class="text-rose-500">*</span>
                            </label>
                            <select name="kota" id="kota" required
                                class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                                <option value="0">-- Pilih Kota --</option>
                                @if(!empty($kota))
                                    @foreach($kota as $row)
                                    <option value="{{$row->id_kota_kab}}" {{($row->id_kota_kab == $psb_peserta->kota_id) ? "selected" : ""}}>
                                        {{$row->nama_kota_kab}}
                                    </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <!-- Kecamatan & Kelurahan -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label for="kecamatan" class="block text-xs font-semibold text-slate-600 mb-1">
                                Kecamatan <span class="text-rose-500">*</span>
                            </label>
                            <select name="kecamatan" id="kecamatan" required
                                class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                                <option value="0">-- Pilih Kecamatan --</option>
                                @if(!empty($kecamatan))
                                    @foreach($kecamatan as $row)
                                    <option value="{{$row->id_kecamatan}}" {{($row->id_kecamatan == $psb_peserta->kecamatan) ? "selected" : ""}}>
                                        {{$row->nama_kecamatan}}
                                    </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div>
                            <label for="kelurahan" class="block text-xs font-semibold text-slate-600 mb-1">
                                Kelurahan / Desa <span class="text-rose-500">*</span>
                            </label>
                            <select name="kelurahan" id="kelurahan" required
                                class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                                <option value="0">-- Pilih Kelurahan --</option>
                                @if(!empty($kelurahan))
                                    @foreach($kelurahan as $row)
                                    <option value="{{$row->id_kelurahan}}" {{($row->id_kelurahan == $psb_peserta->kelurahan) ? "selected" : ""}}>
                                        {{$row->nama_kelurahan}}
                                    </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <!-- Kode Pos -->
                    <div>
                        <label for="kode_pos" class="block text-xs font-semibold text-slate-600 mb-1">
                            Kode Pos <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" name="kode_pos" id="kode_pos" required inputmode="numeric" placeholder="Contoh: 59162"
                            value="<?=$psb_peserta->kode_pos??''?>"
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none font-mono" />
                    </div>
                </div>

            </div>

        </div>

        <!-- Submit Button Action Area -->
        <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span class="text-xs text-slate-500 flex items-center gap-1">
                <i class="fa-solid fa-circle-exclamation text-amber-500"></i> Pastikan identitas santri sesuai dokumen kependudukan resmi.
            </span>
            <button type="submit" id="btn_submit_data_diri" 
                    class="w-full sm:w-auto btn bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-md px-7 py-3 transition duration-200 flex items-center justify-center gap-2">
                <i class="fa-solid fa-floppy-disk text-sm"></i>
                <span class="btn-text">Simpan Data Diri</span>
            </button>
        </div>

    </div>
</form>

<script>
$(document).ready(function(){
    // Instant image preview when user selects a new photo
    $("#photos").on('change', function(){
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('.user-profile-img').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    const url_save = "{{URL::to('psb/update_data_pribadi')}}";

    $("#form_data_diri").submit(function(e){
        e.preventDefault();
        const $btn = $("#btn_submit_data_diri");
        const originalContent = $btn.html();

        // Enable loading state on submit button
        $btn.prop('disabled', true)
            .addClass('opacity-75 cursor-not-allowed')
            .html('<i class="fa-solid fa-spinner fa-spin text-white"></i> <span>Menyimpan Data...</span>');

        const formData = new FormData(this);

        $.ajax({
            method: "POST",
            url: url_save,
            processData: false,
            contentType: false,
            data: formData,
            success: function(data){
                try {
                    const hasil = typeof data === 'object' ? data : JSON.parse(data);
                    if(hasil[0].code == 1){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Data Diri Calon Santri Berhasil Disimpan',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#047857',
                            timer: 2000
                        });
                        if(hasil[0].photo){
                            $(".user-profile-img").attr('src', '{{URL::to('/')}}/assets/images/upload/foto_casan/' + hasil[0].photo);
                        }
                    } else {
                        Swal.fire({
                            title: 'Gagal!',
                            text: hasil[0].msg || 'Data Gagal Disimpan',
                            icon: 'error',
                            confirmButtonText: 'Tutup',
                            confirmButtonColor: '#e11d48'
                        });
                    }
                } catch(err) {
                    Swal.fire({
                        title: 'Tersimpan',
                        text: 'Data telah diproses oleh server.',
                        icon: 'info',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#047857'
                    });
                }
            },
            error: function(xhr, status, error){
                Swal.fire({
                    title: 'Terjadi Kesalahan!',
                    text: 'Gagal menyimpan data: ' + (xhr.responseJSON?.message || error || 'Silakan coba lagi'),
                    icon: 'error',
                    confirmButtonText: 'Tutup',
                    confirmButtonColor: '#e11d48'
                });
            },
            complete: function(){
                // Restore button state
                $btn.prop('disabled', false)
                    .removeClass('opacity-75 cursor-not-allowed')
                    .html(originalContent);
            }
        });
    });

    // Dependent Dropdowns for Region
    const url_kota = '{{URL::to('psb/get_kota')}}';
    const url_kecamatan = '{{URL::to('psb/get_kecamatan')}}';
    const url_kelurahan = '{{URL::to('psb/get_kelurahan')}}';

    $("#provinsi").on('change', function(){
        const prov_id = $(this).val();
        if(prov_id == 0) {
            $("#kota").html('<option value="0">-- Pilih Kota --</option>');
            $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
            $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            return;
        }

        $.ajax({
            url: url_kota,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": prov_id
            },
            method: "POST",
            success: function(data){
                const res = typeof data === 'object' ? data : JSON.parse(data);
                $("#kota").html('<option value="0">-- Pilih Kota --</option>');
                res.forEach(function (item){
                    $("#kota").append('<option value="' + item.id_kota_kab + '">' + item.nama_kota_kab + '</option>');
                });
                $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            }
        });
    });

    $("#kota").on('change', function(){
        const kota_id = $(this).val();
        if(kota_id == 0) {
            $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
            $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            return;
        }

        $.ajax({
            url: url_kecamatan,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $("#provinsi").val(),
                "kota_id": kota_id
            },
            method: "POST",
            success: function(data){
                const res = typeof data === 'object' ? data : JSON.parse(data);
                $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
                res.forEach(function (item){
                    $("#kecamatan").append('<option value="' + item.id_kecamatan + '">' + item.nama_kecamatan + '</option>');
                });
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            }
        });
    });

    $("#kecamatan").on('change', function(){
        const kec_id = $(this).val();
        if(kec_id == 0) {
            $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            return;
        }

        $.ajax({
            url: url_kelurahan,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $("#provinsi").val(),
                "kota_id": $("#kota").val(),
                "kecamatan_id": kec_id
            },
            method: "POST",
            success: function(data){
                const res = typeof data === 'object' ? data : JSON.parse(data);
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
                res.forEach(function (item){
                    $("#kelurahan").append('<option value="' + item.id_kelurahan + '">' + item.nama_kelurahan + '</option>');
                });
            }
        });
    });
});
</script>

