@extends('layouts/layout')

@section('content')
<style>
table.table td, table.table th {
  font-size: 10pt;
}
</style>
<div class="row">
    <div class="col-md-12" style="padding:25px;">
        <div class="alert alert-warning d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-1 text-dark"><i class="fa fa-trophy text-warning"></i> Data Alumni Khotimin</h4>
                <span class="text-dark">Santri & Alumni Khotmil Qur'an 30 Juz & Kitab PPATQ Raudlatul Falah</span>
            </div>
            <span class="badge badge-dark font-weight-bold" style="font-size: 13px; padding: 8px 14px;">
                Total: {{ count($khotimin) }} Khotimin
            </span>
        </div>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="dataTableKhotiminClassic">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 50px;">Foto</th>
                                <th>Nama Santri / Alumni</th>
                                <th class="text-center" style="width: 120px;">Status</th>
                                <th>Capaian Khataman</th>
                                <th>Waktu Khatam</th>
                                <th class="text-center" style="width: 80px;">Kelas</th>
                                <th>Asal Daerah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($khotimin as $row)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ helper::get_photo($row->photo_location, $row->photo) }}" alt="" width="40" height="40" style="object-fit:cover; border-radius: 6px;" onerror="this.src='https://payment.ppatq-rf.id/assets/images/user.png'">
                                </td>
                                <td>
                                    <strong class="text-dark">{{ $row->nama }}</strong>
                                    @if(!empty($row->no_induk))
                                        <br><small class="text-muted">NIS: {{ $row->no_induk }}</small>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($row->status_tipe === 'Santri Aktif')
                                        <span class="badge badge-success">Santri Aktif</span>
                                    @else
                                        <span class="badge badge-primary">Alumni</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge badge-warning text-dark font-weight-bold">
                                        <i class="fa fa-star"></i> Khatam
                                    </span>
                                    @if(!empty($row->keterangan))
                                        <div class="font-weight-bold mt-1 text-dark" style="font-size: 11px;">{{ $row->keterangan }}</div>
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($row->tanggal_khatam_formatted))
                                        <div><i class="fa fa-calendar-check-o text-success"></i> {{ $row->tanggal_khatam_formatted }}</div>
                                    @elseif(!empty($row->tahun_info))
                                        <div><i class="fa fa-calendar text-muted"></i> Tahun {{ $row->tahun_info }}</div>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(!empty($row->kelas))
                                        <span class="badge badge-light border">{{ strtoupper($row->kelas) }}</span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    {{ $row->kecamatan ?? '-' }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        if (typeof DataTable !== 'undefined') {
            new DataTable('#dataTableKhotiminClassic', {
                pageLength: 15
            });
        }
    });
</script>
