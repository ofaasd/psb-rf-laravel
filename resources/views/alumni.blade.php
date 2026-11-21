@extends('layouts/layout')

@section('content')
<style>
table.table td, table.table th {
  font-size: 10pt;
}
</style>
<div class="row">
    <div class="col-md-12" style="padding:25px;">
        <div class="alert alert-success d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-1"><i class="fa fa-graduation-cap"></i> Data Alumni Santri</h4>
                <span>Pondok Pesantren Anak-Anak Tahfidzul Qur'an (PPATQ) Raudlatul Falah</span>
            </div>
            <span class="badge badge-light text-success font-weight-bold" style="font-size: 13px; padding: 8px 14px;">
                Total: {{ count($alumni) }} Alumni
            </span>
        </div>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="dataTableAlumniClassic">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 50px;">Foto</th>
                                <th>Nama Alumni</th>
                                <th class="text-center" style="width: 120px;">Tahun Lulus</th>
                                <th>Asal Daerah</th>
                                <th>Lanjutan / Profesi</th>
                                <th>Wali Kelas & Murroby</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumni as $row)
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
                                    @if(!empty($row->tahun_lulus))
                                        <span class="badge badge-primary">Lulus {{ $row->tahun_lulus }}</span>
                                    @endif
                                    @if(!empty($row->angkatan))
                                        <br><span class="badge badge-secondary mt-1">Angkatan {{ $row->angkatan }}</span>
                                    @endif
                                    @if(empty($row->tahun_lulus) && empty($row->angkatan))
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    {{ !empty($row->kecamatan) ? $row->kecamatan : (!empty($row->alamat) ? Str::limit($row->alamat, 25) : '-') }}
                                </td>
                                <td>
                                    @if(!empty($row->nama_sekolah_menengah_pertama) && $row->nama_sekolah_menengah_pertama !== '-')
                                        <div><i class="fa fa-building-o text-success"></i> {{ $row->nama_sekolah_menengah_pertama }}</div>
                                    @elseif(!empty($row->nama_pondok_menengah_pertama) && $row->nama_pondok_menengah_pertama !== '-')
                                        <div><i class="fa fa-university text-success"></i> {{ $row->nama_pondok_menengah_pertama }}</div>
                                    @elseif(!empty($row->nama_menengah_atas) && $row->nama_menengah_atas !== '-')
                                        <div><i class="fa fa-graduation-cap text-success"></i> {{ $row->nama_menengah_atas }}</div>
                                    @elseif(!empty($row->nama_pt) && $row->nama_pt !== '-')
                                        <div><i class="fa fa-graduation-cap text-success"></i> {{ $row->nama_pt }}</div>
                                    @elseif(!empty($row->nama_perusahaan) && $row->nama_perusahaan !== '-')
                                        <div><i class="fa fa-briefcase text-success"></i> {{ $row->nama_perusahaan }}</div>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($row->wali_kelas))
                                        <div><small class="text-muted">Wali:</small> {{ $row->wali_kelas }}</div>
                                    @endif
                                    @if(!empty($row->guru_murroby))
                                        <div><small class="text-muted">Murroby:</small> {{ $row->guru_murroby }}</div>
                                    @endif
                                    @if(empty($row->wali_kelas) && empty($row->guru_murroby))
                                        <span class="text-muted">-</span>
                                    @endif
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
            new DataTable('#dataTableAlumniClassic', {
                pageLength: 15
            });
        }
    });
</script>
