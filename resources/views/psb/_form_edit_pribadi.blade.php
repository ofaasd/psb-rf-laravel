<section>
    <form action="javascript:void(0)" method="post" id="form_data_diri">
        @csrf
        <input type="hidden" name="id" value="{{$psb_peserta->id}}">
        <input type="hidden" name="psb_wali_id" value="{{$psb_wali->id}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <img src="{{$foto}}" alt="" width="100%" class='user-profile-img'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nik">Upload Foto</label>
                    <input type="file" name="photos" class="form-control " id="photos" >
                </div>
                <div class="form-group ">
                    <label for="nik">NIK</label>
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
                            <input type="radio" name="jenis_kelamin" class="form-check-input"  value='L' id="laki-laki" <?=($psb_peserta->jenis_kelamin=='L')?'checked':''?> required>
                            <label class="" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check col-md-6" style="padding-left:35px;">
                            <input type="radio" name="jenis_kelamin" class="form-check-input" value='P' id="perempuan" <?=($psb_peserta->jenis_kelamin=='P')?'checked':''?> required>
                            <label class="" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir <span class='text-danger'>*</span></label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?=$psb_peserta->tempat_lahir??''?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir <span class='text-danger'>*</span></label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?=date('Y-m-d', strtotime($psb_peserta->tanggal_lahir))??''?>" required>
                        </div>
                    </div>
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
                            <input type="number" min=1 name="anak_ke" class="form-control" id="anak_ke" value="{{$psb_peserta->anak_ke??''}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Lengkap <span class='text-danger'>*</span></label>
                    <textarea class="form-control" name="alamat" id="alamat" required>{{$psb_peserta->alamat??''}}</textarea>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="provinsi">Provinsi <span class='text-danger'>*</span></label>
                            <select class="form-control" name="provinsi" id="provinsi" required>
                                <option value=0>--Pilih Provinsi--</option>
                                @foreach($provinsi as $row)
                                    <option value="{{$row->prov_id}}" {{($row->prov_id == $psb_peserta->prov_id)?"selected":""}}>{{$row->prov_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kota">Kota <span class='text-danger'>*</span></label>
                            <select class="form-control" name="kota" id="kota" required>
                                <option value=0>--Pilih Kota--</option>
                                @if(!empty($kota))
                                    @foreach($kota as $row)
                                        <option value="{{$row->city_id}}" {{($row->city_id == $psb_peserta->kota_id)?"selected":""}}>{{$row->city_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan <span class='text-danger'>*</span></label>
                            <input type="text" name="kecamatan" class="form-control" value="<?=$psb_peserta->kecamatan??''?>" id="kecamatan" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kelurahan">Keluarahan/Desa <span class='text-danger'>*</span></label>
                            <input type="text" name="kelurahan" class="form-control" value="<?=$psb_peserta->kelurahan??''?>" id="kelurahan" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kode_pos">Kode Pos <span class='text-danger'>*</span></label>
                            <input type="text" name="kode_pos" class="form-control" value="<?=$psb_peserta->kode_pos??''?>" id="kode_pos" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="no_hp">No. Handphone (WA) <span class='text-danger'>*</span></label>
                            <input type="text" name="no_hp" class="form-control" value="<?=$psb_wali->no_hp??''?>" id="no_hp" required />
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-12">
                <input type="submit" class='btn btn-primary' value="Simpan">
            </div>
        </div>
    </form>
</section>
<script>
$(document).ready(function(){
    let data = "";
    const url_save = "{{URL::to('psb/update_data_pribadi')}}";
    $("#form_data_diri").submit(function(e){
        e.preventDefault();
        //alert("asdasd");
        data = new FormData(this);
        //alert(data);
        $.ajax({
            method:"POST",
            url: url_save,
            processData: false,
            contentType: false,
            data : data,
            success : function(data){
                const hasil = JSON.parse(data);
                if(hasil[0].code == 1){
                    Swal.fire({
                        title: 'success!',
                        text: 'Data Berhasil Disimpan',
                        icon: 'success',
                        confirmButtonText: 'Tutup',
                        timer : 2000
                    });
                    if(hasil[0].photo){
                        $(".user-profile-img").attr('src', ''.concat('{{URL::to('/')}}').concat('/assets/images/upload/foto_casan/').concat(hasil[0].photo));
                    }
                }else{
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Data Gagal Disimpan',
                        icon: 'error',
                        confirmButtonText: 'Tutup',
                        timer : 2000
                    })
                }
            }
        });

    })
    const url = '{{URL::to('psb/get_kota')}}';
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
                    $("#kota").append('<option value="' + item.city_id + '">' + item.city_name + '</option>');
                });
            }
        });
    });
});
</script>
