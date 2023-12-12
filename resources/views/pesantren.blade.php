@extends('layouts/layout')
@section('content')
    <div class="row">
        <div class="col-md-12" style="padding:20px;">
            <img src="{{asset('assets/images/banner3.jpeg')}}" width="100%" >
            <br /><br />
            <h2 class="text-center">Metode Pembelajaran</h2>
            <h5>A. Metode Musafahah</h5>
            <ol start="1">
                <li>Ustadz/Ustadzah membaca, santri mendengarkan dan sebaliknya</li>
                <li>Ustadz/Ustadzah membaca, santri hanya mendengarkan</li>
                <li>santri membaca, Ustadz/Ustadzah mendengarkan</li>
            </ol>
            <h5>B. Metode Resitasi</h5>
            <p>Ustadz/Ustadzah memberikan tugas pada santri untuk menghafal beberapa ayat sampai hafal kemudian santri menyetorkan hafalanya kepada ustadz/ustadzah</p>
            <h5>C. Metode Takror</h5>
            <p>Santri mengulang hafalannya kemudian santri membaca hafalannya di muka ustadz/ustadzah</p>
            <h5>D. Metode Mudarosah</h5>
            <p>Adalah santri menghafal secara bergantian dan yang lain mendengarkan atau menyimak, dalam prakteknya ada 3 macam</p>
                <ol>
                    <li>Mudarosah Ayatan</li>
                    <p>Yaitu santri membaca satu ayat, kemudian diteruskan oleh santri lain</p>
                    <li>Mudarosah Perhalaman</li>
                    <p>Yaitu santri membaca satu halaman, kemudian diteruskan oleh santri lain</p>
                    <li>Mudarosah Per-empat (1/4 Juz)</li>
                    <p>Yaitu santri membaca 1 juz, kemudian diteruskan oleh santri lain</p>
                </ol>
        </div>
    </div>
@endsection
