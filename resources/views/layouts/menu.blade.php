<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link text-white  active" aria-current="page" href="{{URL::to('/')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white  active" aria-current="page" href="{{URL::to('psb/create')}}">Form Pendaftaran</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white  active" aria-current="page" href="{{URL::to('psb')}}">Data Pendaftaran</a>
    </li>
    @if(!empty(session('psb_username')))
    <li class="nav-item">
        <a class="nav-link text-white  active" aria-current="page" href="{{URL::to('psb/data_pribadi')}}">Update Data</a>
    </li>
    @endif
    <!-- <li class="nav-item">
        <a class="nav-link text-white  active" aria-current="page" href="{{URL::to('psb_new/upload')}}">Upload Berkas</a>
    </li> -->
</ul>

<ul class="navbar-nav ml-auto">
                        <!--<li class="nav-item">
        <a class="nav-link text-white" href="https://payment.ppatq-rf.id/index.php/auth/register">Register</a>
    </li>-->
    @if(empty(session('psb_username')))
    <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('login')}}">Login</a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('logout')}}">Logout</a>
    </li>
    @endif
</ul>
