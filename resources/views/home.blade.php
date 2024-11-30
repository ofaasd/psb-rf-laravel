@extends('layouts/layout')
<style>
    .splide__slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }
</style>
@section('content')
        <div class="row">
            <div class="col-md-12 splide" aria-labelledby="carousel-heading">
                <div class="splide__slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide" data-splide-interval="3000">
                                <img src="{!!asset('assets/images/banner.jpeg')!!}" alt="Banner" >
                            </li>
                            <li class="splide__slide" data-splide-interval="3000">
                                <img src="{!!asset('assets/images/banner2.jpeg')!!}" alt="Banner" >
                            </li>
                            <li class="splide__slide" data-splide-interval="3000">
                                <img src="{!!asset('assets/images/banner3.jpeg')!!}" alt="Banner" >
                            </li>
                        </ul>
                    </div>
                    <div class="splide__progress">
                        <div class="splide__progress__bar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin:10px">
            <div class="col-md-12">
                <h3 class="text-left">Mekanisme Pendaftaran</h3> <br />
                <table class="table table-hover">
                    <tr>
                        <td>Hari / Tanggal </td>
                        <td>{!!$detail->hari!!}</td>
                    </tr>
                    <tr>
                        <td>Waktu Jam Kerja  </td>
                        <td>{!!$detail->jam!!}</td>
                    </tr>

                </table>
                <h3 class='text-left'>Menyiapkan</h3>
                {!!$detail->syarat!!}
                <h3 class="text-left">Prosedur/Alur Pendaftaran Online</h3> <br />
                {!!$detail->prosedur_online!!}
                <h3 class="text-left">Prosedur/Alur Pendaftaran Offline</h3> <br />
                {!!$detail->prosedur_offline!!}
                <hr>
            </div>
        </div>
@endsection
<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '.splide', {
            type    : 'loop',
            autoplay: 'play',
        } ).mount();
    } );
  </script>
