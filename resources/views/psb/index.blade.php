@extends('layouts/layout')
@section('content')
    <style>
        table.dataTable td {
            font-size: 0.9em;
        }
    </style>
    <div class="row">
        <div class="col-md-12" style="padding:30px; ">
            <table class="table table-hover" id='psb_table'>
                <thead>
                    <tr>
                        <td>No</td>
                        <td></td>
                        <td>No Pendaftaran</td>
                        <td>Nama</td>
                        <td>Asal Sekolah</td>
                        <td>Asal Kota</td>
                        <td>Asal Provinsi</td>
                        <td>Daftar</td>
                        <td>Verifikasi</td>
                        <td>Ujian</td>
                        <td>Diterima</td>
                        <td>Pembayaran</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($psb as $row)
                        <tr>
                            <td>{{$i}}</td>
                            <td><img src="{{$photo[$row->id]}}" alt="" width="50"></td>
                            <td>{{$row->no_pendaftaran}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->asal_sekolah->nama_sekolah ?? ''}}</td>
                            <td>{{$kota[$row->id] ?? ''}}</td>
                            <td>{{$provinsi[$row->id] ?? ''}}</td>
                            <td>{{date('d-m-Y',strtotime($row->created_at)) ?? ''}}</td>
                            <td>
                                @if($row->status == 1)
                                    <small class='btn btn-success btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status[$row->status]}}'><i class='fa fa-check'></i></small>
                                @else
                                    <small class='btn btn-danger btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status[$row->status]}}'><i class='fa fa-ban'></i></small>
                                @endif
                            </td>
                            <td>
                                @if($row->status_ujian == 1)
                                    <small class='btn btn-success btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status_ujian[$row->status]}}'><i class='fa fa-check'></i></small>
                                @else
                                    <small class='btn btn-danger btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status_ujian[$row->status]}}'><i class='fa fa-ban'></i></small>
                                @endif
                            </td>
                            <td>
                                @if($row->status_diterima == 1)
                                    <small class='btn btn-success btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status_diterima[$row->status]}}'><i class='fa fa-check'></i></small>
                                @else
                                    <small class='btn btn-danger btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status_diterima[$row->status]}}'><i class='fa fa-ban'></i></small>
                                @endif
                            </td>
                            <td>
                                @if($bukti_bayar[$row->id] == 2)
                                    <small class='btn btn-success btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status_diterima[$row->status]}}'><i class='fa fa-check'></i></small>
                                @else
                                    <small class='btn btn-danger btn-sm' data-toggle="tooltip" data-placement="top" title='{{$status_diterima[$row->status]}}'><i class='fa fa-ban'></i></small>
                                @endif
                            </td>
                            <td><a href='{{URL::to("psb/data_pribadi")}}' class='btn btn-primary'><i class='fa fa-pencil'></i></a></td>
                        </tr>
                    @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
<script>
document.addEventListener("DOMContentLoaded", function(event) {
        let table = new DataTable('#psb_table');
    });
</script>
