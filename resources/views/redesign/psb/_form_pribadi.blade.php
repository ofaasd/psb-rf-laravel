<div class="space-y-6">

    <!-- Sub-heading Info -->
    <div class="flex items-center gap-2 pb-2 border-b border-emerald-100 text-emerald-900 font-bold text-base">
        <i class="fa-solid fa-id-card text-emerald-600"></i>
        <span>Langkah 1: Identitas & Data Pribadi Calon Santri</span>
    </div>

    <!-- Grid Container: 1 Col Mobile, 2 Cols Tablet/Desktop -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">

        <!-- Kolom Kiri -->
        <div class="space-y-4">
            
            <!-- Gelombang -->
            <div>
                <label for="gelombang" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Gelombang Pendaftaran <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <select name="gelombang" id="gelombang" {{($jumlah_gelombang == 1)?"readonly":""}}
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none font-medium text-slate-800">
                        @foreach($gelombang as $row)
                        <option value="{{$row->id}}">{{$row->nama_gel}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- NIK Santri -->
            <div>
                <label for="nik" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    NIK Calon Santri (16 Digit)
                </label>
                <input type="text" name="nik" id="nik" inputmode="numeric" maxlength="16" placeholder="Contoh: 3318xxxxxxxxxxxx"
                    value="<?=$psb_peserta->nik??''?>"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-mono" />
            </div>

            <!-- Nama Lengkap -->
            <div>
                <label for="nama" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Nama Lengkap Santri <span class="text-rose-500">*</span>
                </label>
                <input type="text" name="nama" id="nama" required placeholder="Nama lengkap sesuai akta / KK"
                    value="<?=$psb_peserta->nama??''?>"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-semibold" />
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
                        <input type="radio" name="jenis_kelamin" value="L" id="laki-laki" required class="radio radio-success radio-sm" />
                        <span class="font-bold text-sm flex items-center gap-1.5">
                            <i class="fa-solid fa-mars text-blue-600"></i> Laki-laki
                        </span>
                    </label>
                    <label class="flex items-center gap-3 p-3.5 rounded-xl border-2 border-slate-200 bg-slate-50/60 hover:bg-emerald-50/50 hover:border-emerald-400 cursor-pointer transition select-none has-[:checked]:border-emerald-600 has-[:checked]:bg-emerald-50 has-[:checked]:text-emerald-900">
                        <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required class="radio radio-success radio-sm" />
                        <span class="font-bold text-sm flex items-center gap-1.5">
                            <i class="fa-solid fa-venus text-pink-600"></i> Perempuan
                        </span>
                    </label>
                </div>
            </div>

            <!-- Tempat & Tanggal Lahir -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label for="tempat_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Tempat Lahir <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" required placeholder="Kota lahir"
                        value="<?=$user->tempat_lahir??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
                <div>
                    <label for="tanggal_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Tanggal Lahir <span class="text-rose-500">*</span>
                    </label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                        value="<?=$user->tanggal_lahir??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
            </div>

            <!-- No. HP Ayah / Kontak WA -->
            <div>
                <label for="no_hp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    No. WhatsApp Ayah / Wali <span class="text-rose-500">*</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-emerald-600">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                    </span>
                    <input type="tel" name="no_hp" id="no_hp" required inputmode="tel" placeholder="Contoh: 081234567890"
                        value="<?=$psb_wali->no_hp??''?>"
                        class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800 font-medium" />
                </div>
                <p class="text-[11px] text-slate-500 mt-1">Username & password akun PSB akan dikirimkan otomatis ke nomor ini.</p>
            </div>

        </div>

        <!-- Kolom Kanan -->
        <div class="space-y-4">

            <!-- Jumlah Saudara & Anak Ke -->
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label for="jumlah_saudara" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Jml. Saudara Kandung
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
                        value="<?=$psb_peserta->anak_ke??''?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800" />
                </div>
            </div>

            <!-- Alamat Lengkap -->
            <div>
                <label for="alamat" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                    Alamat Lengkap <span class="text-rose-500">*</span>
                </label>
                <textarea name="alamat" id="alamat" required rows="3" placeholder="Nama jalan, RT/RW, Dusun/Perumahan, No. rumah"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 bg-slate-50/70 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none text-slate-800"><?=$psb_peserta->alamat??''?></textarea>
            </div>

            <!-- Wilayah Domisili (Grid) -->
            <div class="p-4 rounded-2xl bg-slate-50/80 border border-slate-200/80 space-y-3">
                <p class="text-xs font-bold text-emerald-800 uppercase tracking-wider flex items-center gap-1.5">
                    <i class="fa-solid fa-map-location-dot"></i> Wilayah Administrasi
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
                            <option value="{{$row->id_provinsi}}">{{$row->nama_provinsi}}</option>
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
                        </select>
                    </div>
                    <div>
                        <label for="kelurahan" class="block text-xs font-semibold text-slate-600 mb-1">
                            Kelurahan / Desa <span class="text-rose-500">*</span>
                        </label>
                        <select name="kelurahan" id="kelurahan" required
                            class="w-full px-3 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none">
                            <option value="0">-- Pilih Kelurahan --</option>
                        </select>
                    </div>
                </div>

                <!-- Kode Pos -->
                <div>
                    <label for="kode_pos" class="block text-xs font-semibold text-slate-600 mb-1">
                        Kode Pos <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" name="kode_pos" id="kode_pos" required inputmode="numeric" placeholder="Contoh: 59162"
                        value="<?=$psb_peserta->kelurahan??''?>"
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300 bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition text-sm outline-none font-mono" />
                </div>
            </div>

        </div>

    </div>

</div>

<script>
$(document).ready(function(){
    const url = '{{URL::to('psb/get_kota')}}';
    const url2 = '{{URL::to('psb/get_kecamatan')}}';
    const url3 = '{{URL::to('psb/get_kelurahan')}}';

    $("#provinsi").on('change', function(){
        $.ajax({
            url: url,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $(this).val()
            },
            method: "POST",
            success: function(data){
                data = JSON.parse(data);
                $("#kota").html('<option value="0">-- Pilih Kota --</option>');
                data.forEach(function (item){
                    $("#kota").append('<option value="' + item.id_kota_kab + '">' + item.nama_kota_kab + '</option>');
                });
                $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            }
        });
    });

    $("#kota").on('change', function(){
        $.ajax({
            url: url2,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $("#provinsi").val(),
                "kota_id": $(this).val()
            },
            method: "POST",
            success: function(data){
                data = JSON.parse(data);
                $("#kecamatan").html('<option value="0">-- Pilih Kecamatan --</option>');
                data.forEach(function (item){
                    $("#kecamatan").append('<option value="' + item.id_kecamatan + '">' + item.nama_kecamatan + '</option>');
                });
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
            }
        });
    });

    $("#kecamatan").on('change', function(){
        $.ajax({
            url: url3,
            data: {
                "_token": "{{ csrf_token() }}",
                "prov_id": $("#provinsi").val(),
                "kota_id": $("#kota").val(),
                "kecamatan_id": $(this).val()
            },
            method: "POST",
            success: function(data){
                data = JSON.parse(data);
                $("#kelurahan").html('<option value="0">-- Pilih Kelurahan --</option>');
                data.forEach(function (item){
                    $("#kelurahan").append('<option value="' + item.id_kelurahan + '">' + item.nama_kelurahan + '</option>');
                });
            }
        });
    });
});
</script>

