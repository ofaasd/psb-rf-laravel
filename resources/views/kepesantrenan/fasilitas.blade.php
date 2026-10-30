@extends('layouts/layout')

@section('content')
<div class="row">
    <div class="col-md-12" style="padding:20px;">
        <div class="alert alert-success">
            <h4><i class="fa fa-building"></i> Fasilitas & Layanan PPATQ Raudlatul Falah</h4>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Fasilitas Utama Santri</h5>
            </div>
            <div class="card-body">
                <p>Makan 3x sehari, cuci pakaian, asrama, kegiatan kemadrasahan, dan kegiatan keagamaan.</p>
                <div class="alert alert-warning mb-0">
                    <strong>Kebutuhan Santri Awal Tahun:</strong><br>
                    Santri baru datang ke pondok tidak perlu membawa baju muslim, baju bermain, perlengkapan & seragam sekolah, peralatan tidur & mandi.<br>
                    <em>(Semua sudah include Kebutuhan Santri Awal Tahun)</em>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Buku-Buku Laporan PPATQ Raudlatul Falah</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @php
                    $buku = [
                        "Buku KBM Tahfidz", "Buku Grafik Perkembangan Tahfidz", "Buku Laporan Uang Saku Santri",
                        "Buku Perkembangan Tahfidz Santri", "Buku Laporan Penilaian Perilaku Santri", "Buku Laporan Keamanan",
                        "Buku Ulangan Harian", "Buku Laporan Perlengkapan & Ketertiban", "Buku Laporan Bulanan Pendidikan Kemadrasahan",
                        "Buku Laporan Kesehatan", "Kartu Ijin Sambangan", "Kartu Setor Murojaah Hafalan Sambangan",
                        "Buku Laporan Deskripsi Extra Malam", "Buku Laporan Bimbingan Konseling", "Buku Hasil Tasmi' Hafalan Santri",
                        "Buku Kumpulan Do'a Harian", "Buku Praktek Ubudiyah", "Buku Ikhtiyar Calon Khotimin/Khotimat",
                        "Buku Laporan Hasil Tahfidzul Qur'an Santri", "Buku Raport Kasyfu Darojat", "Buku Perkembangan Tahfidz Bin Nadhor"
                    ];
                    @endphp
                    @foreach($buku as $idx => $item)
                    <div class="col-md-4 mb-2">
                        <div class="p-2 border rounded bg-light">
                            <strong>{{$idx + 1}}.</strong> {{$item}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Lampiran Lembar Buku Laporan</h5>
            </div>
            <div class="card-body text-center">
                <img src="{{asset('assets/images/infografis_buku_laporan.jpg')}}" class="img-fluid rounded" alt="Buku-buku laporan">
            </div>
        </div>
    </div>
</div>
@endsection

