 <section>
    <form action="javascript:void(0)" enctype='multipart/form-data' method="post" id="form_berkas">
    @csrf
        <input type="hidden" name="id" value="{{$psb_peserta->id}}" enctype="multipart/form-data">
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="File KK">File KK</label>
                    <div id='kk_error'></div>
                    <div class="row g-3">
                        <input type="file" name="kk" class="form-control col-md-6">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#kkModal">Lihat File KK</a>
                        </div>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 50MB</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="File KK">File KTP</label>
                    <div id='ktp_error'></div>
                    <div class="row g-3">
                        <input type="file" name="ktp" class="form-control col-md-6">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ktpModal">Lihat File KTP</a>
                        </div>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 50MB</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="File KK">File Rapor / Ijazah</label>
                    <div id='rapor_error'></div>
                    <div class="row g-3">
                        <input type="file" name="rapor" class="form-control col-md-6">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#raporModal">Lihat File Rapor</a>
                        </div>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 50MB</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </div>
         </div>
    </form>
    <div class="modal fade" id="kkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">File KK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" id='contentkk'>
                @if(!empty($berkas->file_kk))
                    @php
                        $pecah = explode(".",$berkas->file_kk);
                        $ekstensi = $pecah[1];
                    @endphp
                    @if($ekstensi == "pdf")
                        <object data="{{URL::to('')}}/assets/images/upload/file_kk/{{$berkas->file_kk}}" type="application/pdf" width="100%" height="400">
                            <p>PDF Link : <a href="{{URL::to('')}}/assets/images/upload/file_kk/{{$berkas->file_kk}}">to the PDF!</a></p>
                        </object>
                    @else
                        <img src="{{URL::to('')}}/assets/images/upload/file_kk/{{$berkas->file_kk}}" width="80%">
                    @endif
                @else
                    <div class="alert alert-danger">Belum Ada File Di Upload</div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ktpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">File KTP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" id='contentktp'>
                @if(!empty($berkas->file_ktp))
                    @php
                        $pecah = explode(".",$berkas->file_ktp);
                        $ekstensi = $pecah[1];
                    @endphp
                    @if($ekstensi == "pdf")
                        <object data="{{URL::to('')}}/assets/images/upload/file_ktp/{{$berkas->file_ktp}}" type="application/pdf" width="100%" height="400">
                            <p>PDF Link : <a href="{{URL::to('')}}/assets/images/upload/file_ktp/{{$berkas->file_ktp}}">to the PDF!</a></p>
                        </object>
                    @else
                        <img src="{{URL::to('')}}/assets/images/upload/file_ktp/{{$berkas->file_ktp}}" width="80%">
                    @endif
                @else
                    <div class="alert alert-danger">Belum Ada File Di Upload</div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="raporModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">File Rapor/Ijazah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" id='contentrapor'>
                @if(!empty($berkas->file_rapor))
                    @php
                        $pecah = explode(".",$berkas->file_rapor);
                        $ekstensi = $pecah[1];
                    @endphp
                    @if($ekstensi == "pdf")
                        <object data="{{URL::to('')}}/assets/images/upload/file_rapor/{{$berkas->file_rapor}}" type="application/pdf" width="100%" height="400">
                            <p>PDF Link : <a href="{{URL::to('')}}/assets/images/upload/file_rapor/{{$berkas->file_rapor}}">to the PDF!</a></p>
                        </object>
                    @else
                        <img src="{{URL::to('')}}/assets/images/upload/file_rapor/{{$berkas->file_rapor}}" width="80%">
                    @endif
                @else
                    <div class="alert alert-danger">Belum Ada File Di Upload</div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        //let data = "";
        const url_save = "{{URL::to('psb/update_data_berkas')}}";
        $("#form_berkas").submit(function(e){
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
                    data.forEach(function(value){
                        if(value.ekstensi == 'pdf'){
                            const base_url = '{{URL::to('')}}';
                            $("#content"+value.location).html(`<object data="${base_url}/assets/images/upload/file_${value.location}/${value.photo}" type="application/pdf" width="100%" height="400">
                                                                <p>PDF Link : <a href="${base_url}/assets/images/upload/file_${value.location}/${value.photo}">to the PDF!</a></p>
                                                                </object>`);
                        }else{
                            $("#content"+value.location).html('<img src="{{URL::to('')}}/assets/images/upload/file_'+value.location+'/'+value.photo+'" width="80%" align="center">')
                        }
                    });
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
                },
                error: function (reject) {
                    if( reject.status === 422 ) {
                        var errors = $.parseJSON(reject.responseText);
                        $.each(errors.errors, function (key, val) {
                            $("#" + key + "_error").html('<div class="alert alert-danger col-md-6"></div>');
                            $.each(val,function(key2,val2){
                                $("#" + key + "_error > .alert").append(val2 + "<br />");
                            });
                        });
                    }
                }
            });

        })
    });
</script>
