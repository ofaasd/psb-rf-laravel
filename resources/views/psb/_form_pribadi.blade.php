<section>
    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="gelombang">Gelombang</label>
                <select name="gelombang" class="form-control" id="gelombang" {{($jumlah_gelombang == 1)?"readonly":""}}>
                    @foreach($gelombang as $row)
                    <option value="{{$row->id}}">{{$row->nama_gel}}</option>
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
                data.forEach(function (item){
                    $("#kelurahan").append('<option value="' + item.id_kelurahan + '">' + item.nama_kelurahan + '</option>');
                });
            }
        });
    });
});
</script>
