@extends('layouts/layout')

@section('content')
<div class="row">
    <div class="col-md-12" style="padding:20px;">
        <div class="alert alert-success">
            <h4><i class="fa fa-file-text"></i> Materi Test & Ujian Seleksi PPATQ Raudlatul Falah</h4>
            <span>Penerimaan Santri Baru (PSB) Online</span>
        </div>

        <div class="card mb-4 border-success">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Materi Ujian Masuk Calon Santri Baru</h5>
                @if(!empty($gelombang->nama_gel))
                <span class="badge badge-light text-success font-weight-bold">{{ $gelombang->nama_gel }}</span>
                @endif
            </div>
            <div class="card-body">
                @if(!empty($materi_test))
                    <div class="materi-test-content" style="font-size: 1rem; line-height: 1.8;">
                        {!! $materi_test !!}
                    </div>
                @else
                    <div class="alert alert-warning mb-0">
                        <i class="fa fa-info-circle"></i> Informasi materi test saat ini belum diperbarui atau sedang dalam proses penyusunan oleh panitia PSB. Silakan hubungi panitia untuk informasi lebih lanjut.
                    </div>
                @endif
            </div>
        </div>

        @if(!empty($gelombang->ujian) || !empty($gelombang->jam_ujian) || !empty($gelombang->hari_ujian))
        <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Jadwal Pelaksanaan Ujian</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0">
                    <tbody>
                        @if(!empty($gelombang->hari_ujian))
                        <tr>
                            <td width="30%"><strong>Hari Ujian</strong></td>
                            <td>{{ $gelombang->hari_ujian }}</td>
                        </tr>
                        @endif
                        @if(!empty($gelombang->ujian))
                        <tr>
                            <td><strong>Tanggal Ujian</strong></td>
                            <td>{{ date('d-m-Y', strtotime($gelombang->ujian)) }}</td>
                        </tr>
                        @endif
                        @if(!empty($gelombang->jam_ujian))
                        <tr>
                            <td><strong>Waktu / Jam</strong></td>
                            <td>{{ $gelombang->jam_ujian }}</td>
                        </tr>
                        @endif
                        @if(!empty($gelombang->pengumuman))
                        <tr>
                            <td><strong>Pengumuman Hasil</strong></td>
                            <td>{{ date('d-m-Y', strtotime($gelombang->pengumuman)) }}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
