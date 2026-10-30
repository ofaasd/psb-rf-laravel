@extends('layouts/layout')

@section('content')
<div class="row">
    <div class="col-md-12" style="padding:20px;">
        <div class="alert alert-success">
            <h4><i class="fa fa-calendar"></i> Jadwal Kegiatan Sekolah & Pesantren PPATQ Raudlatul Falah</h4>
        </div>

        <!-- 1. Jadwal Sekolah MI -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">JADWAL KEGIATAN SEKOLAH MI TAHFIDZUL QUR'AN RAUDLATUL FALAH</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th width="80" class="text-center">NO.</th>
                            <th width="200">JAM</th>
                            <th>KEGIATAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>06.50 - 09.20</td>
                            <td>Masuk Pelajaran Formal</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>09.20 - 10.00</td>
                            <td>Istirahat (Sholat Dzuha)</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>10.00 - 12.00</td>
                            <td>Pelajaran Formal</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 2. Jadwal Harian PPATQ RF -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">JADWAL KEGIATAN HARIAN PPATQ RF</h5>
                <span class="badge badge-warning">Hari Senin & Kamis Wajib Puasa Sunah</span>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th width="80" class="text-center">NO.</th>
                            <th width="200">JAM</th>
                            <th>KEGIATAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $harian = [
                            [1, '04.00 - 04.20', 'Bangun tidur langsung mandi'],
                            [2, '04.20 - 04.35', 'Sholat Shubuh berjama\'ah'],
                            [3, '04.35 - 06.15', 'Jam Wajib Tahfidz'],
                            [4, '06.30 - 06.50', 'Istirahat, Makan Pagi, Persiapan Sekolah MI'],
                            [5, '06.50 - 09.20', 'Jam Wajib Sekolah MI'],
                            [6, '09.20 - 10.00', 'Istirahat (Sholat Dzuha)'],
                            [7, '10.00 - 12.00', 'Jam Wajib Sekolah MI'],
                            [8, '12.00 - 12.15', 'Sholat Dzuhur berjama\'ah'],
                            [9, '12.15 - 13.00', 'Istirahat dan Makan Siang'],
                            [10, '13.00 - 14.30', 'Jam Wajib Tidur Siang'],
                            [11, '14.30 - 15.00', 'Bangun tidur langsung mandi'],
                            [12, '15.00 - 15.30', 'Sholat Ashar berjama\'ah'],
                            [13, '15.30 - 17.00', 'Jam Wajib Tahfidz'],
                            [14, '17.00 - 18.00', 'Jam Istirahat, Makan Sore, Bermain'],
                            [15, '18.00 - 18.20', 'Sholat Maghrib berjama\'ah'],
                            [16, '18.20 - 19.00', 'Jam Wajib Tahfidz'],
                            [17, '19.00 - 19.20', 'Sholat Isya\' berjama\'ah'],
                            [18, '19.20 - 20.15', 'Jam Wajib Tahfidz'],
                            [19, '20.15 - 21.10', 'Jam Wajib Belajar dan Ekstra'],
                            [20, '21.10 - 04.00', 'Jam Istirahat, Tidur Malam & Sholat Tahajud']
                        ];
                        @endphp
                        @foreach($harian as $h)
                        <tr>
                            <td class="text-center">{{$h[0]}}</td>
                            <td>{{$h[1]}}</td>
                            <td>{{$h[2]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 3. Jadwal Mingguan -->
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">JADWAL KEGIATAN MINGGUAN PPATQ RF</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th width="80" class="text-center">NO.</th>
                            <th width="200">JAM</th>
                            <th>KEGIATAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>06.50 - 07.35</td>
                            <td>Live Streaming YouTube Ngaji Kitab Abah Shokhib setiap hari Kamis Pagi</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>05.45 - 06.00</td>
                            <td>Live Streaming YouTube Simaan Al-Qur'an Bil-Ghoib setiap hari Jum'at Pagi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Lampiran Jadwal Kegiatan</h5>
            </div>
            <div class="card-body text-center">
                <img src="{{asset('assets/images/infografis_jadwal_kegiatan.jpg')}}" class="img-fluid rounded" alt="Jadwal Kegiatan">
            </div>
        </div>
    </div>
</div>
@endsection

