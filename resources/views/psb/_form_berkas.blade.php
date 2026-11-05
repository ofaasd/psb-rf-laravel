<section>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="File Photo">File Photo</label>
                <div id='photo_error'></div>
                <div class="row">
                    <input type="file" name="photo" class="form-control col-md-6">
                </div>
                <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 10MB</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="File KK">File KK</label>
                <div id='kk_error'></div>
                <div class="row">
                    <input type="file" name="kk" class="form-control col-md-6">
                </div>
                <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 10MB</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="File KK">File KTP</label>
                <div id='ktp_error'></div>
                <div class="row">
                    <input type="file" name="ktp" class="form-control col-md-6">

                </div>
                <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 10MB</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="File Akta">File Akta</label>
                <div id='akta_error'></div>
                <div class="row">
                    <input type="file" name="akta" class="form-control col-md-6">

                </div>
                <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 10MB</small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="File KK">File Rapor / Ijazah</label>
                <div id='rapor_error'></div>
                <div class="row">
                    <input type="file" name="rapor" class="form-control col-md-6">
                </div>
                <small id="emailHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 10MB</small>
            </div>
        </div>

        <!-- Sumber Informasi PPATQ-RF -->
        <div class="col-md-12 mt-4 pt-3" style="border-top:1px solid #ddd;">
            @php
                $currentSumber = $psb_peserta->sumber_informasi ?? '';
                $currentKet = $psb_peserta->sumber_informasi_keterangan ?? '';
            @endphp
            <div class="form-group">
                <label style="font-weight:bold; font-size:14px; color:#2e7d32;">
                    Mendapatkan Info PPATQ-RF Dari Mana? <span class="text-danger">*</span>
                </label>
                <div class="mt-2">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="sumber_informasi" id="sumber_saudara_klasik" value="saudara_keluarga_alumni" {{ $currentSumber === 'saudara_keluarga_alumni' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="sumber_saudara_klasik">
                            1. Saudara - family menjadi bagian keluarga besar - alumni PPATQRF
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="sumber_informasi" id="sumber_sosmed_klasik" value="sosial_media" {{ $currentSumber === 'sosial_media' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="sumber_sosmed_klasik">
                            2. Sosial Media
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="sumber_informasi" id="sumber_web_klasik" value="website_resmi" {{ $currentSumber === 'website_resmi' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="sumber_web_klasik">
                            3. Website Resmi
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="sumber_informasi" id="sumber_media_klasik" value="media_massa" {{ $currentSumber === 'media_massa' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="sumber_media_klasik">
                            4. Media Massa
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="sumber_informasi" id="sumber_lainnya_klasik" value="lainnya" {{ $currentSumber === 'lainnya' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="sumber_lainnya_klasik">
                            5. Lainnya...
                        </label>
                    </div>
                </div>

                <div id="wrapper_sumber_lainnya_klasik" class="mt-2" style="{{ $currentSumber === 'lainnya' ? '' : 'display:none;' }}">
                    <input type="text" name="sumber_informasi_keterangan" id="sumber_informasi_keterangan_klasik" class="form-control col-md-8" placeholder="Sebutkan sumber informasi lainnya..." value="{{ $currentKet }}">
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('input[name="sumber_informasi"]').on('change', function() {
            if ($(this).val() === 'lainnya') {
                $('#wrapper_sumber_lainnya_klasik').show();
                $('#sumber_informasi_keterangan_klasik').focus();
            } else {
                $('#wrapper_sumber_lainnya_klasik').hide();
                $('#sumber_informasi_keterangan_klasik').val('');
            }
        });
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
