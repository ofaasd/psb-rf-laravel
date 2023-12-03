@extends('layouts/layout')
@section('content')
    <div class="row">
        <div class="col-md-12" id="bukti_box" style="padding-top:10px;">

            @if(empty($bukti_bayar) || $bukti_bayar==0)
            <div class="alert alert-primary">
                <h3>Upload Bukti Pembayaran</h3>
                <p>Silahkan Upload Bukti pembayaran anda dengan detail di bawah ini</p>
                <table cellpadding="5">
                    <tr>
                        <td>Bank</td>
                        <td>: BCA</td>
                    </tr>
                    <tr>
                        <td>No. Rekening</td>
                        <td>: XXXXXXXXXX</td>
                    </tr>
                    <tr>
                        <td>Atas Nama</td>
                        <td>: Yayasan PPATQ RF</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>: Rp. 150.000</td>
                    </tr>
                </table>
                <p>Jika sudah melakukan pembayaran harap melakukan konfirmasi melalui form di bawah ini</p>
            </div>
            <form class="form" id="bukti_bayar_form" action="javascript:void(0)">
                @csrf
                <div class="row">
                    <div class="col-md-8" style="padding:30px;">
                        <input type="hidden" name="id" value={{$psb_peserta->id}}>
                        <div class="form-group">
                            <label for="bank">Bank Pengirim <span class='text-danger'>*</span></label>
                            <input type="text" name="bank_pengirim" class="form-control" placeholder="EX : BRI" required>
                        </div>
                        <div class="form-group">
                            <label for="no_rekening">No. Rekening Pengirim <span class='text-danger'>*</span></label>
                            <input type="text" name="no_rekening" class="form-control" placeholder="EX : 812391xxx" required>
                        </div>
                        <div class="form-group">
                            <label for="atas_nama">Atas Nama <span class='text-danger'>*</span></label>
                            <input type="text" name="atas_nama" class="form-control" placeholder="EX : Abdul Ghofar" required>
                        </div>
                        <div class="form-group">
                            <label for="atas_nama">Upload Bukti Pembayaran <span class='text-danger'>*</span></label>
                            <input type="file" name="bukti" class="form-control" required>
                            <small id="buktiHelp" class="form-text text-muted">File upload berformat JPG/PNG/PDF. maksimal ukuran file 10MB</small>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>


            @elseif($bukti_bayar == 1)
            <div class="alert alert-primary">
                Pembayaran Sedang kami proses. kami akan mengirimkan informasi melalui whatsapp jika pembayaran telah selesai di proses
            </div>
            @else
            <div class="alert alert-success">
                Pembayaran berhasil.. Silahkan <a href="#" class="btn btn-primary">Klik Disini</a> untuk mencetak formulir pendaftaran
            </div>
            @endif

        </div>
    </div>
    <script>
        $(document).ready(function(){
        //let data = "";
        const url_save = "{{URL::to('psb/simpan_bukti')}}";
        $("#bukti_bayar_form").submit(function(e){
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
                        $("#bukti_box").html(`<div class="alert alert-primary">
                                                Pembayaran Sedang kami proses. kami akan mengirimkan informasi melalui whatsapp jika pembayaran telah selesai di proses
                                            </div>`);
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
@endsection
