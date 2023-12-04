@extends('layouts/layout')
@section('content')
    <div class="row">
        @for($i=1;$i<=23;$i++)
        <div class="col-md-4">
            <a href="{{asset('assets/images/gallery/ (' . $i . ').jpg')}}" data-lightbox=" (' . $i . ')" data-title="Gallery{{$i}}"><img src="{{asset('assets/images/gallery/ (' . $i . ').jpg')}}" class="img-thumbnail" alt="Gallery{{$i}}"></a>
        </div>
        @endfor
    </div>
@endsection
