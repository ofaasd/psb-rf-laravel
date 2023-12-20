@extends('layouts/layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lupa Password</div>

                <div class="card-body">

                    @if(!empty(Session::has('message')))

                        <p class="alert alert-primary {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    @if(!empty(Session::has('error')))
                        <p class="alert alert-danger {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                    @endif

                    <form method="POST" id="forgot_form" action="javascript:void(0)">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Nama Lengkap</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="nama" value="" required >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-md-4 col-form-label text-md-end">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">Tanggal Lahir </label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-end">No. HP Wali Santri</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="text" class="form-control" name="no_hp" value="" >
                            </div>
                        </div>

						<div class="row mb-3">
                            <div class="col-md-6 offset-md-4">

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">

								<button class="g-recaptcha btn btn-primary"
									data-sitekey="6LceL90kAAAAAMYJvlgwCqf7GQ0UvgGeqXxQHgFb"
									data-callback='onSubmit'
									data-action='submit'
									>Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <script>
$(document).ready(function(){
    let data = "";
    const url_save = "{{URL::to('forgot')}}";
    $("#forgot_form").submit(function(e){
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
                        text: hasil[0].msg,
                        icon: 'success',
                        confirmButtonText: 'Tutup',
                        timer : 5000
                    });
                }else{
                    Swal.fire({
                        title: 'Gagal!',
                        text: hasil[0].msg,
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
@endsection
