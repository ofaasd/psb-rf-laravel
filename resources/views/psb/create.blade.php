@extends('layouts/layout')
@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-top:10px;">
            <div class="row">
                <div class="col-md-12" id='alert-show'></div>
            </div>
            <div class="riple-frame"><div class="lds-ripple"><div></div><div></div></div></div>
            <form id="example-form" action="#" enctype="multipart/form-data">

                @csrf
                <div>
                    <h3>Data Pribadi</h3>
                    @include('psb/_form_pribadi')

                    <h3>Data Wali Santri</h3>
                    @include('psb/_form_walsan')

                    <h3>Sekolah Asal</h3>
                    @include('psb/_form_asal')

                    <h3>Berkas Pnedukung</h3>
                    @include('psb/_form_berkas')
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            var form = $("#example-form");
            form.validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
            let validatedStepOne = false;
            form.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    if(currentIndex == 0 && !validatedStepOne){
                        const myForm = form.serialize();
                        const url = "{{URL::to('psb/validation')}}";
                        form.validate().settings.ignore = ":disabled,:hidden";

                        if(form.valid()){
                            $.ajax({
                                url : url,
                                data : myForm,
                                method : "POST",
                                success : function(data){
                                    data = JSON.parse(data);
                                    //alert(data.msg);
                                    if(parseInt(data[0].code)==0){
                                        //alert("masuk sini");
                                        $("#alert-show").html('');
                                        validatedStepOne = true;
                                        form.children("div").steps('next');
                                    }else{
                                        //alert(data.msg);
                                        $("#alert-show").html('');
                                        data.forEach(function(item){
                                            $("#alert-show").prepend("<div class='alert alert-danger'>" + item.msg +"</div>");
                                        });

                                    }
                                }
                            });
                            return false;
                        }
                    }else{
                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    const myForm = form.serialize();
                    const url = "{{URL::to('psb/validation')}}";
                    $(".riple-frame").show();
                    $.ajax({
                        url : url,
                        data : myForm,
                        method : "POST",
                        success : function(data){
                            data = JSON.parse(data);
                            //alert(data.msg);
                            if(parseInt(data[0].code)==0){
                                //alert("masuk sini");
                                $("#alert-show").html('');
                                validatedStepOne = true;
                                const urlSend = "{{URL::to('psb')}}";
                                const formData = new FormData(document.getElementById("example-form"));

                                $.ajax({
                                    url : urlSend,
                                    data : formData,
                                    processData: false,
                                    contentType: false,
                                    method : "POST",
                                    success : function(data){
                                        data = JSON.parse(data);
                                        $("#example-form").html(`
                                        <div class="row">
                                            <div class="col-md-12" style="padding:30px">
                                                <p>Selamat anda sudah terdaftar pada web Penerimaan Peserta Didik Baru PPATQ Radlatul Falah Pati</p>
                                                <p>Silahkan catat username dan password di bawah ini untuk dapat mengubah dan melengkapi data</p>
                                                <p><b>username : ${data[0].username} </b></p>
                                                <p><b>password : ${data[0].password} </b></p>
                                                <p>Selanjutnya anda dapat melakukan pengkinian data dan mengupload berkas pendukung calon santri baru di menu PSB setelah login melalui sistem
                                                https://psb.ppatq-rf.id melalui menu update data / upload berkas pendukung</p>
                                            </div>
                                        </div>
                                        `);
                                        $(".riple-frame").hide();
                                        $.ajax({
                                            url : urlSend + '/send_wa_file',
                                            data : {"_token": "{{ csrf_token() }}",no_wa : data[0].no_wa,pesan : data[0].pesan,file : data[0].url_file},
                                            method : "POST",
                                            success : function(data){
                                                console.log(data)
                                            }
                                        })
                                    }
                                });
                            }else{
                                //alert(data.msg);
                                $("#alert-show").html('');
                                data.forEach(function(item){
                                    $("#alert-show").prepend("<div class='alert alert-danger'>" + item.msg +"</div>");
                                });
                                $(".riple-frame").hide();

                            }
                        }
                    });



                    //alert("Submitted!");
                }
            });
            $("#provinsi").select2();
            $("#kota").select2();
            $("#kecamatan").select2();
            $("#kelurahan").select2();
        });

    </script>
@endsection
