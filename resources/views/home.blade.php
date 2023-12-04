@extends('layouts/layout')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <img src="{{asset('assets/images/banner.jpeg')}}" alt="Banner" width="100%">
            </div>
        </div>
        <div class="row" style="margin:10px">
            <div class="col-md-12">
                <h3 class="text-left">Mekanisme Pendaftaran</h3> <br />
                <table class="table table-hover">
                    <tr>
                        <td>Hari / Tanggal </td>
                        <td><p>: 14 Januari 2024 – Rabu, 21 Februari 2024</p>
                            <p>2 Rajab - 11 Sya’ban 1445 H</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Waktu Jam Kerja  </td>
                        <td><p>: Dapat melakukan pendaftaran selama 24 jam
                            dengan mengakses http://psb.ppatq-rf.id </p>
                            <p>atau dapat mendaftar langsung dengan datang ke Pondok Pesantren Anak-Anak Tahfidzul Qur’an Raudlatul Falah
                                di Waktu Jam Kerja : Pagi : 08.00 - 12.00 WIB & Siang : 14.00 - 17.00 WIB</p>
                        </td>
                    </tr>

                </table>
                <h3 class='text-left'>Menyiapkan</h3>
                <ol start=1>
                    <li>pdf Kartu Keluarga,</li>
                    <li>pdf Akte Calon Wali Santri</li>
                    <li>pdf Ijazah TK/RA</li>
                    <li>jpg Foto Calon Wali Santri</li>
                    <li>pdf/jpg bukti transfer Biaya pendaftaran</li>
                </ol>
                <h3 class="text-left">Prosedur/Alur Pendaftaran</h3> <br />
                <ol start=1>
                    <li>Mendaftarkan diri melalui formulir </li>
                    <li>Setelah Login silahkan mengisi formulir pendaftaran secara online yang ada di dalam sistem</li>
                    <li>Membayar infaq pendaftaran sebesar Rp. 300.000 ke metode transfer ke Bank BRI dengan No.Rekening 5936-01-005247-53-0 a/n Pondok Anak Tahfidhul Qur’an Unit/Cabang BRI Gembong kemudian</li>
                    <li>mengunggah bukti bayar ke sistem pendaftaran.</li>
                </ol>
                <div class="col-md-12 text-center">
                    <a href='https://psb.ppatq-rf.id/psb/create' class='btn btn-primary btn-lg'>Daftar Sekarang</a>
                </div>
            </div>
        </div>
@endsection
