<section>
    <form action="javascript:void(0)" enctype='multipart/form-data' method="post" id="form_asal_sekolah">
    @csrf
        <input type="hidden" name="psb_asal_sekolah" value="{{$psb_asal->id}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenjang">Dari</label>
                    <select name="jenjang" class="form-control col-md-4" id="jenjang">
                        <option value=1 {{(!empty($psb_asal) && $psb_asal->jenjang == 1)?'selected':''}}>TK</option>
                        <option value=2 {{(!empty($psb_asal) && $psb_asal->jenjang == 2)?'selected':''}}>RA</option>
                        <option value=3 {{(!empty($psb_asal) && $psb_asal->jenjang == 3)?'selected':''}}>SD/MI</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas Terakhir</label>
                    <input type="text" name="kelas" class="form-control col-md-12" value="{{$psb_asal->kelas??''}}" id="kelas" placeholder="Cth: TK B/SD Kelas 3">
                </div>
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control col-md-12" value="{{$psb_asal->nama_sekolah??''}}" id="nama_sekolah" placeholder="Cth: TK Tunas Bakti">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nss">NSM/NSS</label>
                    <input type="text" name="nss" class="form-control col-md-12" id="nss" value="{{$psb_asal->nss??''}}" placeholder="">
                </div>
                <div class="form-group">
                    <label for="npsn">NPSN</label>
                    <input type="text" name="npsn" class="form-control col-md-12" id="npsn" value="{{$psb_asal->npsn??''}}" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" class="form-control col-md-12" id="nisn" value="{{$psb_asal->nisn??''}}" placeholder="">
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </div>
    </form>
</section>
<script>
    $(document).ready(function(){
        //let data = "";
        const url_save = "{{URL::to('psb/update_data_asal_sekolah')}}";
        $("#form_asal_sekolah").submit(function(e){
            e.preventDefault();
            //alert("asdasd");
            let data = new FormData(this);
            //alert(data);
            $.ajax({
                method:"POST",
                url: url_save,
                processData: false,
                contentType: false,
                data : data,
                success : function(data){
                    data = JSON.parse(data);
                    if(data[0].code == 1){
                        Swal.fire({
                            title: 'success!',
                            text: 'Data Berhasil Disimpan',
                            icon: 'success',
                            confirmButtonText: 'Tutup',
                            timer : 2000
                        });

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
    });
</script>
