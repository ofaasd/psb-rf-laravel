<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor PPATQ RAUDLATUL FALAH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('assets/css/jquery.steps.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/riple.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('assets/js/moment-with-locales.min.js')}}"></script>
	<script src="{{asset('assets/js/materialDateTimePicker.js')}}"></script>
    <script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie-1.3.1.js')}}"></script>
    <script src="{{asset('assets/js/jquery.steps.js')}}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- SweetAlert -->

	  <!-- Datatable -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <style>
        .header{
            padding:20px;
        }
        .header > .detail{
            padding-top:30px;
        }
        nav{
            background:#2dcc70;
        }
        body{
            background:url("{{asset('assets/images/background3.jpg')}}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment:fixed;
        }
		@media (min-width: 1200px) {
			.container{
				max-width: 970px;
			}
		}
		.bg-white-new, .card{
			background:rgba(255, 255, 255, 0.9)
		}
		.card-content{
			padding:20px;
		}
    </style>

</head>
<body>
    <div class="container bg-white-new">
        <div class="row header">
            <div class="col-md-2">
                <img src="https://payment.ppatq-rf.id/assets/images/logo.png" width="100%"/>
            </div>
            <div class="col-md-10 detail">
                <h1>PPATQ RAUDLATUL FALAH </h1>
                <p>PONDOK PESANTREN ANAK-ANAK TAHFIDZUL QUR'AN RAUDLATUL FALAH – PATI</p>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @include('layouts/menu');
            </div>
        </nav>
        <br />
        <div class="card">
            <style>
                .card{
                    padding:0 !important;
                }
            </style>
            <div class="card-content" style="padding:0">
                @yield('content')
            </div>
	    </div>
	    <br />
    </div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
