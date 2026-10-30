@extends('layouts/layout')

@section('content')
<div class="row">
    <div class="col-md-12" style="padding:20px;">
        <div class="alert alert-success">
            <h4><i class="fa fa-money"></i> Biaya Administrasi Santri Baru PPATQ Raudlatul Falah</h4>
        </div>

        <!-- Rekapitulasi -->
        <div class="card mb-4 border-success">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Rekapitulasi Biaya yang Harus Dipenuhi</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <td>1. Kebutuhan Santri Awal Tahun</td>
                            <td class="text-right font-weight-bold">Rp 7.025.000</td>
                        </tr>
                        <tr>
                            <td>2. Infaq Pondok</td>
                            <td class="text-right font-weight-bold">Rp 6.000.000</td>
                        </tr>
                        <tr>
                            <td>3. Bulanan Santri</td>
                            <td class="text-right font-weight-bold">Rp 1.325.000</td>
                        </tr>
                        <tr class="table-success font-weight-bold">
                            <th>Jumlah yang harus dipenuhi</th>
                            <th class="text-right text-success" style="font-size: 1.25rem;">Rp 14.350.000</th>
                        </tr>
                    </tbody>
                </table>
                <div class="alert alert-info mt-3 mb-0">
                    <strong>Ket:</strong> Biaya sudah termasuk baju muslim, bermain, tidur, seragam sekolah, peralatan tidur, kotak sabun dll <em>(santri tidak perlu membawa baju dari rumah)</em>.
                </div>
            </div>
        </div>

        <!-- 1. Kebutuhan Santri Awal Tahun -->
        <div class="card mb-4">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">1. Kebutuhan Santri Awal Tahun</h5>
                <span class="badge badge-success font-weight-bold">Subtotal: Rp 7.025.000</span>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-bordered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th width="60" class="text-center">NO.</th>
                            <th>KOMPONEN BIAYA</th>
                            <th width="180" class="text-right">BIAYA (RP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $kebutuhan = [
                            [1, 'Pengadaan Buku', '350.000'],
                            [2, 'Peralatan', '225.000'],
                            [3, 'Almari', '180.000'],
                            [4, 'Al Qur\'an', '70.000'],
                            [5, 'Yanbu\'a', '25.000'],
                            [6, 'Biaya Pengembangan Pendidikan', '1.000.000'],
                            [7, 'Seragam MITQ-RF', '900.000'],
                            [8, 'Seragam Pondok', '1.200.000'],
                            [9, 'Seragam Khusus', '150.000'],
                            [10, 'Perlengkapan Tidur', '560.000'],
                            [11, 'Kalender', '35.000'],
                            [12, 'Majalah TIBYANA', '45.000'],
                            [13, 'Milad', '310.000'],
                            [14, 'Peralatan Sekolah', '200.000'],
                            [15, 'Buku Pegangan', '450.000'],
                            [16, 'Pengembangan Lab', '300.000'],
                            [17, 'Karantina & Iktibar Tahfid', '200.000'],
                            [18, 'PAS, PTS Ganjil/Genap', '250.000'],
                            [19, 'Kepramukaan & kemah', '200.000'],
                            [20, 'Pengembangan Yayasan', '375.000']
                        ];
                        @endphp
                        @foreach($kebutuhan as $k)
                        <tr>
                            <td class="text-center">{{$k[0]}}</td>
                            <td>{{$k[1]}}</td>
                            <td class="text-right font-weight-bold">{{$k[2]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="table-active font-weight-bold">
                            <th colspan="2" class="text-right">Jumlah :</th>
                            <th class="text-right">Rp 7.025.000</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="row">
            <!-- 2. Infaq Pondok -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">2. Infaq Pondok</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-bordered mb-0">
                            <tbody>
                                <tr>
                                    <td>1. Pengembangan Pondok</td>
                                    <td class="text-right font-weight-bold">Rp 2.500.000</td>
                                </tr>
                                <tr>
                                    <td>2. Pembangunan</td>
                                    <td class="text-right font-weight-bold">Rp 3.500.000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="table-info font-weight-bold">
                                    <th>Jumlah :</th>
                                    <th class="text-right">Rp 6.000.000</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- 3. Bulanan Santri -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">3. Bulanan Santri</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-bordered mb-0">
                            <tbody>
                                <tr>
                                    <td>1. Syahriah</td>
                                    <td class="text-right font-weight-bold">Rp 1.175.000</td>
                                </tr>
                                <tr>
                                    <td>2. Tabungan Zarkasi</td>
                                    <td class="text-right font-weight-bold">Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>3. Tabungan daftar ulang TP. 2027/2028</td>
                                    <td class="text-right font-weight-bold">Rp 100.000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="table-warning font-weight-bold">
                                    <th>Jumlah :</th>
                                    <th class="text-right">Rp 1.325.000</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rekening Pembayaran -->
        <div class="card mb-4 border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Informasi Pembayaran</h5>
            </div>
            <div class="card-body">
                <p class="mb-1">Pembayaran biaya formulir & administrasi ditransfer ke:</p>
                <h4>Bank Syariah Indonesia (BSI)</h4>
                <p class="mb-0">
                    No. Rekening: <strong>7141299818</strong><br>
                    Atas Nama: <strong>PONPES ANAK TAHFIDZUL QUR'AN RF</strong><br>
                    Cabang: BSI Gembong Pati
                </p>
            </div>
        </div>

        <!-- Lampiran Brosur -->
        <div class="card">
            <div class="card-header">
                <h5>Lampiran Brosur Biaya Administrasi</h5>
            </div>
            <div class="card-body text-center">
                <img src="{{asset('assets/images/infografis_biaya_administrasi.jpg')}}" class="img-fluid rounded" alt="Biaya Administrasi">
            </div>
        </div>
    </div>
</div>
@endsection

