<section>
    <div class="row">

        <div class="col-md-6">
            <div class="form-group" style="display:none;">
                <label for="gelombang">Gelombang</label>
                <select name="gelombang" class="form-control" id="gelombang">
                    @foreach($gelombang as $row)
                    <option value="{{$row->id}}" {{ $loop->first ? 'selected' : '' }}>{{$row->nama_gel}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nik">NIK calon santri PPATQ RF </label>
                <input type="text" name="nik" class="form-control " id="nik" value="<?=$psb_peserta->nik??''?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap <span class='text-danger'>*</span></label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?=$psb_peserta->nama??''?>" required>
            </div>
            <div class="form-group">
                <label for="nama_panggilan">Nama Panggilan</label>
                <input type="text" name="nama_panggilan" class="form-control" value="<?=$psb_peserta->nama_panggilan??''?>" id="nama_panggilan">
            </div>
            <div class="form-group">
                <label for="nama_panggilan">Jenis Kelamin <span class='text-danger'>*</span></label>
                <div class="row" style="margin-top:10px;">
                    <div class="form-check col-md-4" style="padding-left:35px;">
                        <input type="radio" name="jenis_kelamin" class="form-check-input"  value='L' id="laki-laki" required>
                        <label class="" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check col-md-6" style="padding-left:35px;">
                        <input type="radio" name="jenis_kelamin" class="form-check-input" value='P' id="perempuan" required>
                        <label class="" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir <span class='text-danger'>*</span></label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?=$user->tempat_lahir??''?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir <span class='text-danger'>*</span></label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?=$user->tanggal_lahir??''?>" required>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="no_hp">No. HP Ayah <span class='text-danger'>*</span></label>
                <input type="text" name="no_hp" class="form-control" value="<?=$psb_wali->no_hp??''?>" id="no_hp" required />
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jumlah_saudara">Jumlah Saudara Kandung</label>
                        <input type="number" min=0 name="jumlah_saudara" class="form-control" id="jumlah_saudara" value="<?=$psb_peserta->jumlah_saudara??''?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="anak_ke">Anak ke</label>
                        <input type="number" min=1 name="anak_ke" class="form-control" id="anak_ke" value="<?=$psb_peserta->anak_ke??''?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat <span class='text-danger'>*</span></label>
                <textarea class="form-control" name="alamat" id="alamat" required><?=$psb_peserta->alamat??''?></textarea>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="provinsi">Provinsi <span class='text-danger'>*</span></label>
                        <select class="form-control" name="provinsi" id="provinsi" required>
                            <option value=0>--Pilih Provinsi--</option>
                            <?php foreach($provinsi as $row){?>
                                <option value="<?= $row->id_provinsi?>" ><?=$row->nama_provinsi?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kota">Kota <span class='text-danger'>*</span></label>
                        <select class="form-control" name="kota" id="kota" required>
                            <option value=0>--Pilih Kota--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan <span class='text-danger'>*</span></label>
                        <select class="form-control" name="kecamatan" id="kecamatan" required>
                            <option value=0>--Pilih Kecamatan--</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan/Desa <span class='text-danger'>*</span></label>
                        <select class="form-control" name="kelurahan" id="kelurahan" required>
                            <option value=0>--Pilih Kelurahan--</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kode_pos">Kode Pos <span class='text-danger'>*</span></label>
                        <input type="text" name="kode_pos" class="form-control" value="<?=$psb_peserta->kelurahan??''?>" id="kode_pos" required>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Keterkaitan Saudara (Klasik) -->
    <div class="card mt-4 p-3" style="background:#fdfdfd; border:1px solid #dcdcdc; border-radius:8px;">
        <h5 style="color:#1b5e20; font-size:15px; font-weight:bold; margin-bottom:12px;">
            <i class="fa fa-users"></i> Keterkaitan Saudara Kandung di PPATQ-RF
        </h5>

        @php
            $keterkaitan = $psb_peserta->keterkaitan_saudara ?? 'tidak_ada';
            $saudaraId = $psb_peserta->saudara_id ?? '';
            $namaSaudara = $psb_peserta->nama_saudara ?? '';
            $kelasSaudara = $psb_peserta->kelas_saudara ?? '';
            $tahunLulusSaudara = $psb_peserta->tahun_lulus_saudara ?? '';
        @endphp

        <div class="form-group">
            <div class="form-check form-check-inline mr-4">
                <input class="form-check-input" type="radio" name="keterkaitan_saudara" id="saudara_tidak_ada" value="tidak_ada" {{ $keterkaitan === 'tidak_ada' ? 'checked' : '' }}>
                <label class="form-check-label font-weight-bold" for="saudara_tidak_ada">1. Tidak ada saudara kandung</label>
            </div>
            <div class="form-check form-check-inline mr-4">
                <input class="form-check-input" type="radio" name="keterkaitan_saudara" id="saudara_aktif" value="aktif" {{ $keterkaitan === 'aktif' ? 'checked' : '' }}>
                <label class="form-check-label font-weight-bold" for="saudara_aktif">2. Ada saudara kandung yang aktif</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="keterkaitan_saudara" id="saudara_alumni" value="alumni" {{ $keterkaitan === 'alumni' ? 'checked' : '' }}>
                <label class="form-check-label font-weight-bold" for="saudara_alumni">3. Ada saudara kandung alumni</label>
            </div>
        </div>

        <input type="hidden" name="saudara_id" id="saudara_id" value="{{ $saudaraId }}">
        <input type="hidden" name="nama_saudara" id="nama_saudara" value="{{ $namaSaudara }}">
        <input type="hidden" name="kelas_saudara" id="kelas_saudara" value="{{ $kelasSaudara }}">
        <input type="hidden" name="tahun_lulus_saudara" id="tahun_lulus_saudara" value="{{ $tahunLulusSaudara }}">

        <!-- Panel Saudara Aktif -->
        <div id="panel_saudara_aktif" style="{{ $keterkaitan === 'aktif' ? '' : 'display:none;' }} margin-top:10px; background:#e8f5e9; padding:15px; border-radius:6px; border:1px solid #c8e6c9;">
            <label class="font-weight-bold text-success">Cari Nama Santri Aktif PPATQ-RF:</label>
            <div style="position:relative;">
                <input type="text" id="search_santri_aktif_input" class="form-control" placeholder="Ketik minimal 2 huruf nama atau NIS santri aktif..." autocomplete="off">
                <div id="results_santri_aktif" style="display:none; position:absolute; top:100%; left:0; right:0; background:#fff; border:1px solid #ccc; max-height:220px; overflow-y:auto; z-index:9999; box-shadow:0 4px 8px rgba(0,0,0,0.1); border-radius:4px;"></div>
            </div>

            <div id="preview_santri_aktif" style="{{ ($keterkaitan === 'aktif' && $namaSaudara) ? '' : 'display:none;' }} margin-top:10px; background:#fff; padding:10px; border-radius:4px; border:1px solid #4caf50;">
                <div style="display:flex; align-items:center; justify-content:space-between;">
                    <div style="display:flex; align-items:center;">
                        <img id="preview_aktif_foto" src="https://manajemen.ppatq-rf.id/assets/img/avatars/1.png" style="width:45px; height:45px; border-radius:50%; object-fit:cover; margin-right:12px; border:1px solid #ddd;" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                        <div>
                            <div style="font-size:11px; color:#2e7d32; font-weight:bold;">SAUDARA AKTIF TERPILIH:</div>
                            <strong id="preview_aktif_nama">{{ $namaSaudara }}</strong>
                            <div id="preview_aktif_kelas" style="font-size:12px; color:#666;">Kelas: {{ $kelasSaudara ?: '-' }}</div>
                        </div>
                    </div>
                    <button type="button" id="btn_clear_aktif" class="btn btn-sm btn-outline-danger">Batal / Cari Ulang</button>
                </div>
            </div>
        </div>

        <!-- Panel Saudara Alumni -->
        <div id="panel_saudara_alumni" style="{{ $keterkaitan === 'alumni' ? '' : 'display:none;' }} margin-top:10px; background:#fff8e1; padding:15px; border-radius:6px; border:1px solid #ffe082;">
            <label class="font-weight-bold text-warning" style="color:#b26a00 !important;">Cari Data Santri Alumni PPATQ-RF:</label>
            <div style="position:relative;">
                <input type="text" id="search_santri_alumni_input" class="form-control" placeholder="Ketik minimal 2 huruf nama atau NIS alumni..." autocomplete="off">
                <div id="results_santri_alumni" style="display:none; position:absolute; top:100%; left:0; right:0; background:#fff; border:1px solid #ccc; max-height:220px; overflow-y:auto; z-index:9999; box-shadow:0 4px 8px rgba(0,0,0,0.1); border-radius:4px;"></div>
            </div>

            <div id="preview_santri_alumni" style="{{ ($keterkaitan === 'alumni' && $saudaraId && $namaSaudara) ? '' : 'display:none;' }} margin-top:10px; background:#fff; padding:10px; border-radius:4px; border:1px solid #ffa000;">
                <div style="display:flex; align-items:center; justify-content:space-between;">
                    <div style="display:flex; align-items:center;">
                        <img id="preview_alumni_foto" src="https://manajemen.ppatq-rf.id/assets/img/avatars/1.png" style="width:45px; height:45px; border-radius:50%; object-fit:cover; margin-right:12px; border:1px solid #ddd;" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                        <div>
                            <div style="font-size:11px; color:#b26a00; font-weight:bold;">SAUDARA ALUMNI TERPILIH:</div>
                            <strong id="preview_alumni_nama">{{ $namaSaudara }}</strong>
                            <div id="preview_alumni_tahun" style="font-size:12px; color:#666;">Tahun Lulus: {{ $tahunLulusSaudara ?: '-' }}</div>
                        </div>
                    </div>
                    <button type="button" id="btn_clear_alumni" class="btn btn-sm btn-outline-danger">Batal / Cari Ulang</button>
                </div>
            </div>

            <!-- Fallback input manual alumni -->
            <div style="margin-top:15px; padding-top:10px; border-top:1px dashed #d7ccc8;">
                <label style="font-size:12px; font-weight:bold; color:#5d4037;">Jika data alumni tidak ditemukan di pencarian atas, silakan isi manual:</label>
                <div class="form-row">
                    <div class="col-md-8">
                        <input type="text" id="manual_nama_alumni" class="form-control" placeholder="Nama Lengkap Saudara Alumni" value="{{ ($keterkaitan === 'alumni' && !$saudaraId) ? $namaSaudara : '' }}">
                    </div>
                    <div class="col-md-4">
                        <input type="number" id="manual_tahun_lulus_alumni" class="form-control" placeholder="Tahun Lulus" min="2000" max="2099" value="{{ ($keterkaitan === 'alumni' && !$saudaraId) ? $tahunLulusSaudara : '' }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){
    const url = '{{URL::to('psb/get_kota')}}';
    const url2 = '{{URL::to('psb/get_kecamatan')}}';
    const url3 = '{{URL::to('psb/get_kelurahan')}}';
    $("#provinsi").on('change',function(){
        $.ajax({
            url : url,
            data : {
                    "_token": "{{ csrf_token() }}",
                    "prov_id" : $(this).val()
                    },
            method : "POST",
            success : function(data){
                data = JSON.parse(data);
                $("#kota").html('');
                $("#kota").append('<option value=0>--Pilih Kota--</option>');
                data.forEach(function (item){
                    $("#kota").append('<option value="' + item.id_kota_kab + '">' + item.nama_kota_kab + '</option>');
                });
            }
        });
    });
    $("#kota").on('change',function(){
        $.ajax({
            url : url2,
            data : {
                    "_token": "{{ csrf_token() }}",
                    "prov_id" : $("#provinsi").val(),
                    "kota_id" : $(this).val()
                    },
            method : "POST",
            success : function(data){
                data = JSON.parse(data);
                $("#kecamatan").html('');
                $("#kecamatan").append('<option value=0>--Pilih Kecamatan--</option>');
                data.forEach(function (item){
                    $("#kecamatan").append('<option value="' + item.id_kecamatan + '">' + item.nama_kecamatan + '</option>');
                });
            }
        });
    });
    $("#kecamatan").on('change',function(){
        $.ajax({
            url : url3,
            data : {
                    "_token": "{{ csrf_token() }}",
                    "prov_id" : $("#provinsi").val(),
                    "kota_id" : $("#kota").val(),
                    "kecamatan_id" : $(this).val()
                    },
            method : "POST",
            success : function(data){
                data = JSON.parse(data);
                $("#kelurahan").html('');
                $("#kelurahan").append('<option value=0>--Pilih Kelurahan--</option>');
                data.forEach(function (item){
                    $("#kelurahan").append('<option value="' + item.id_kelurahan + '">' + item.nama_kelurahan + '</option>');
                });
            }
        });
    });

    // ============================================
    // KETERKAITAN SAUDARA HANDLER (KLASIK)
    // ============================================
    const searchAktifUrl = '{{ URL::to("psb/search_santri_aktif") }}';
    const searchAlumniUrl = '{{ URL::to("psb/search_santri_alumni") }}';
    let debounceAktifTimer = null;
    let debounceAlumniTimer = null;

    $('input[name="keterkaitan_saudara"]').on('change', function(){
        const val = $(this).val();
        if(val === 'tidak_ada'){
            $('#panel_saudara_aktif').hide();
            $('#panel_saudara_alumni').hide();
            $('#saudara_id').val('');
            $('#nama_saudara').val('');
            $('#kelas_saudara').val('');
            $('#tahun_lulus_saudara').val('');
            $('#preview_santri_aktif').hide();
            $('#preview_santri_alumni').hide();
            $('#manual_nama_alumni').val('');
            $('#manual_tahun_lulus_alumni').val('');
        } else if(val === 'aktif'){
            $('#panel_saudara_aktif').slideDown(200);
            $('#panel_saudara_alumni').hide();
            $('#tahun_lulus_saudara').val('');
            $('#manual_nama_alumni').val('');
            $('#manual_tahun_lulus_alumni').val('');
            $('#search_santri_aktif_input').focus();
        } else if(val === 'alumni'){
            $('#panel_saudara_aktif').hide();
            $('#panel_saudara_alumni').slideDown(200);
            $('#kelas_saudara').val('');
            $('#search_santri_alumni_input').focus();
        }
    });

    // Search Aktif
    $('#search_santri_aktif_input').on('input', function(){
        const query = $(this).val().trim();
        clearTimeout(debounceAktifTimer);
        if(query.length < 2){
            $('#results_santri_aktif').html('').hide();
            return;
        }

        debounceAktifTimer = setTimeout(function(){
            $.ajax({
                url: searchAktifUrl,
                data: { q: query },
                method: 'GET',
                success: function(res){
                    let list = Array.isArray(res) ? res : JSON.parse(res);
                    if(list.length === 0){
                        $('#results_santri_aktif').html('<div style="padding:10px; font-size:12px; color:#777; text-align:center;">Tidak ditemukan santri aktif dengan nama atau NIS tersebut.</div>').show();
                    } else {
                        let html = '';
                        list.forEach(function(item){
                            const photo = item.photo || 'https://manajemen.ppatq-rf.id/assets/img/avatars/1.png';
                            html += `
                                <div class="item-santri-aktif" data-id="${item.id}" data-nama="${$('<div>').text(item.nama).html()}" data-kelas="${item.kelas || '-'}" data-photo="${photo}" style="display:flex; align-items:center; padding:8px 12px; cursor:pointer; border-bottom:1px solid #eee;">
                                    <img src="${photo}" style="width:36px; height:36px; border-radius:50%; object-fit:cover; margin-right:10px; border:1px solid #ddd;" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                                    <div style="flex:1;">
                                        <div style="font-weight:bold; font-size:13px; color:#333;">${item.nama}</div>
                                        <div style="font-size:11px; color:#666;">Kelas: ${item.kelas || '-'} | NIS: ${item.no_induk || '-'}</div>
                                    </div>
                                    <span class="badge badge-success">Pilih</span>
                                </div>
                            `;
                        });
                        $('#results_santri_aktif').html(html).show();
                    }
                }
            });
        }, 300);
    });

    $(document).on('click', '.item-santri-aktif', function(){
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const kelas = $(this).data('kelas');
        const photo = $(this).data('photo');

        $('#saudara_id').val(id);
        $('#nama_saudara').val(nama);
        $('#kelas_saudara').val(kelas);
        $('#tahun_lulus_saudara').val('');

        $('#preview_aktif_foto').attr('src', photo);
        $('#preview_aktif_nama').text(nama);
        $('#preview_aktif_kelas').text('Kelas: ' + (kelas || '-'));
        $('#preview_santri_aktif').show();

        $('#results_santri_aktif').hide();
        $('#search_santri_aktif_input').val('');
    });

    $('#btn_clear_aktif').on('click', function(){
        $('#saudara_id').val('');
        $('#nama_saudara').val('');
        $('#kelas_saudara').val('');
        $('#preview_santri_aktif').hide();
        $('#search_santri_aktif_input').val('').focus();
    });

    // Search Alumni
    $('#search_santri_alumni_input').on('input', function(){
        const query = $(this).val().trim();
        clearTimeout(debounceAlumniTimer);
        if(query.length < 2){
            $('#results_santri_alumni').html('').hide();
            return;
        }

        debounceAlumniTimer = setTimeout(function(){
            $.ajax({
                url: searchAlumniUrl,
                data: { q: query },
                method: 'GET',
                success: function(res){
                    let list = Array.isArray(res) ? res : JSON.parse(res);
                    if(list.length === 0){
                        $('#results_santri_alumni').html('<div style="padding:10px; font-size:12px; color:#777; text-align:center;">Data tidak ditemukan di database. Anda dapat mengisi form manual di bawah.</div>').show();
                    } else {
                        let html = '';
                        list.forEach(function(item){
                            const photo = item.photo || 'https://manajemen.ppatq-rf.id/assets/img/avatars/1.png';
                            html += `
                                <div class="item-santri-alumni" data-id="${item.id}" data-nama="${$('<div>').text(item.nama).html()}" data-tahun="${item.tahun_lulus || ''}" data-photo="${photo}" style="display:flex; align-items:center; padding:8px 12px; cursor:pointer; border-bottom:1px solid #eee;">
                                    <img src="${photo}" style="width:36px; height:36px; border-radius:50%; object-fit:cover; margin-right:10px; border:1px solid #ddd;" onerror="this.src='https://manajemen.ppatq-rf.id/assets/img/avatars/1.png'">
                                    <div style="flex:1;">
                                        <div style="font-weight:bold; font-size:13px; color:#333;">${item.nama}</div>
                                        <div style="font-size:11px; color:#666;">Lulus: ${item.tahun_lulus || '-'} | NIS: ${item.no_induk || '-'}</div>
                                    </div>
                                    <span class="badge badge-warning">Pilih</span>
                                </div>
                            `;
                        });
                        $('#results_santri_alumni').html(html).show();
                    }
                }
            });
        }, 300);
    });

    $(document).on('click', '.item-santri-alumni', function(){
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const tahun = $(this).data('tahun');
        const photo = $(this).data('photo');

        $('#saudara_id').val(id);
        $('#nama_saudara').val(nama);
        $('#tahun_lulus_saudara').val(tahun);
        $('#kelas_saudara').val('');

        $('#manual_nama_alumni').val('');
        $('#manual_tahun_lulus_alumni').val('');

        $('#preview_alumni_foto').attr('src', photo);
        $('#preview_alumni_nama').text(nama);
        $('#preview_alumni_tahun').text('Tahun Lulus: ' + (tahun || '-'));
        $('#preview_santri_alumni').show();

        $('#results_santri_alumni').hide();
        $('#search_santri_alumni_input').val('');
    });

    $('#btn_clear_alumni').on('click', function(){
        $('#saudara_id').val('');
        $('#nama_saudara').val('');
        $('#tahun_lulus_saudara').val('');
        $('#preview_santri_alumni').hide();
        $('#manual_nama_alumni').val('');
        $('#manual_tahun_lulus_alumni').val('');
        $('#search_santri_alumni_input').val('').focus();
    });

    // Manual alumni input
    $('#manual_nama_alumni, #manual_tahun_lulus_alumni').on('input', function(){
        const manualNama = $('#manual_nama_alumni').val().trim();
        const manualTahun = $('#manual_tahun_lulus_alumni').val().trim();
        if(manualNama.length > 0 || manualTahun.length > 0){
            $('#saudara_id').val('');
            $('#nama_saudara').val(manualNama);
            $('#tahun_lulus_saudara').val(manualTahun);
            $('#preview_santri_alumni').hide();
        }
    });

    // Close on outside click
    $(document).on('click', function(e){
        if (!$(e.target).closest('#search_santri_aktif_input, #results_santri_aktif').length) {
            $('#results_santri_aktif').hide();
        }
        if (!$(e.target).closest('#search_santri_alumni_input, #results_santri_alumni').length) {
            $('#results_santri_alumni').hide();
        }
    });
});
</script>
