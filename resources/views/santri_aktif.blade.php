@extends('layouts/layout')
@section('content')
<style>
table.table td, table.table th {
  font-size: 10pt;
}
</style>
    <div class="row">
        <div class="col-md-12" style="padding:30px;">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Asal Kota</th>
                        <th>Wali Kelas</th>
                        <th>Guru Murroby</th>
                        <th>Guru Tahfidz</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($var['santri'] as $santri)
                    <tr>
                        @php

                        @endphp
                        <td><img src="{{helper::get_photo($santri->photo,$santri->location)}}" alt="" width="40"></td>
                        <td>{{$santri->nama}}</td>
                        <td>{{$santri->kelas}}</td>
                        <td>{{$santri->kota->city_name ?? " "}}</td>
                        <td>{{$santri->ref_kelas->pegawai->nama ?? " "}}</td>
                        <td>{{$santri->ref_kamar->pegawai->nama ?? " "}}</td>
                        <td>{{$santri->ref_tahfidz->pegawai->nama ?? " "}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let table = new DataTable('#dataTable');
    });
</script>
