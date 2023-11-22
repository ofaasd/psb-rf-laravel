@extends('layouts/layout')
@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-top:10px;">
            <div class="row">
                <div class="col-md-12" id='alert-show'></div>
            </div>
            <div class="row">
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-primary col-md-12" id='data-diri'>
                        Data Diri
                    </a>
                </div>
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-secondary col-md-12" id='walsan'>
                        Data Wali Santri
                    </a>
                </div>
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-secondary col-md-12" id='asal-sekolah'>
                        Data Asal Sekolah
                    </a>
                </div>
                <div class="col-md-3 button-menu">
                    <a href='#' class="btn btn-secondary col-md-12" id='berkas'>
                        Berkas Pendukung
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-form" style="padding:30px" id="edit_pribadi">
                        @include('psb/_form_edit_pribadi')
                </div>
                <div class="col-md-12 my-form" style="padding:30px" id="edit_walsan">
                        @include('psb/_form_edit_walsan')
                </div>
                <div class="col-md-12 my-form" style="padding:30px" id="edit_asal_sekolah">
                        @include('psb/_form_edit_asal_sekolah')
                </div>
                <div class="col-md-12 my-form" style="padding:30px" id="edit_berkas">
                        @include('psb/_form_edit_berkas')
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".my-form").hide();
            $("#edit_pribadi").show();

            $("#data-diri").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_pribadi").fadeIn(500);
            });
            $("#walsan").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_walsan").fadeIn();
            });
            $("#asal-sekolah").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_asal_sekolah").fadeIn();
            });
            $("#berkas").click(function(){
                $(".my-form").hide();
                $(".button-menu a").attr('class','btn btn-secondary col-md-12');
                $(this).attr('class','btn btn-primary col-md-12');
                $("#edit_berkas").fadeIn();
            });


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
                                $.ajax({
                                    url : urlSend,
                                    data : myForm,
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
        });

    </script>
@endsection
