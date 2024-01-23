@extends('layouts/layout')
<style>
    .splide__slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }
</style>
@section('content')
        <div class="row">
            <div class="col-md-12 splide" aria-labelledby="carousel-heading">
                <div class="splide__slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide" data-splide-interval="3000">
                                <img src="{{asset('assets/images/banner.jpeg')}}" alt="Banner" >
                            </li>
                            <li class="splide__slide" data-splide-interval="3000">
                                <img src="{{asset('assets/images/banner2.jpeg')}}" alt="Banner" >
                            </li>
                            <li class="splide__slide" data-splide-interval="3000">
                                <img src="{{asset('assets/images/banner3.jpeg')}}" alt="Banner" >
                            </li>
                        </ul>
                    </div>
                    <div class="splide__progress">
                        <div class="splide__progress__bar">
                        </div>
                    </div>
                </div>
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
                <h3 class="text-left">Prosedur/Alur Pendaftaran Online</h3> <br />
                <ol start=1>
                    <li>Mendaftarkan diri dengan mengakses <a href='https://psb.ppatq-rf.id/psb/create' class='btn btn-danger btn-lg'> DAFTAR SEKARANG DISINI </a></li>
                    <li>Usia 6 - 7 tahun saat mendaftar</li>
                    <li>Membayar infaq pendaftaran sebesar Rp. 300.000 ke metode transfer ke Bank BRI dengan No.Rekening 5936-01-005247-53-0 a/n Pondok Anak Tahfidhul Qur’an Unit/Cabang BRI Gembong kemudian</li>
                    <li>Mengunggah bukti bayar ke sistem pendaftaran.</li>
                    <li>Sistem akan mengirimkan informasi bukti daftar ke pendaftar berupa pesan WhatsApp ke nomor yang diinput pada saat mendaftar.</li>
                    <li>Sistem juga akan mengirim kuesioner Orangtua, pengisian tes potensi akademik dan dokumen syarat pendaftaran.</li>
                    <li>Pendaftar akan mendapatkan informasi jadwal proses wawancara orangtua beserta calon siswa dengan kepala sekolah atau yang mewakili.</li>
                    <li>Pendaftar yang dinyatakan diterima dan mendapatkan surat lolos dari Panitia Penerimaan Santri Baru dan selanjutnya melakukan daftar ulang dengan membayar uang pangkal.</li>
                </ol>
                <h3 class="text-left">Prosedur/Alur Pendaftaran Online</h3> <br />
                <p>Jika berkeinginan daftar secara langsung,
                    Silakan datang ke pondok pesantren dengan persyaratan sebagai berikut : </p>
                <ol start=1>
                    <li>Usia 6 - 7 tahun saat mendaftar (dengan dipandu oleh Panitia Penerimaan Santri Baru), membuka aplikasi <a href='http://psb.ppatq-rf.id'>http://psb.ppatq-rf.id</a></li>
                    <li>Mengisi formulir pendaftaran</li>
                    <li>Mengisi surat pernyataan</li>
                    <li>Menyerahkan foto copy akta kelahiran 2 lembar & pdf</li>
                    <li>Menyerahkan foto copy kartu keluarga 2 lembar & pdf</li>
                    <li>Menyerahkan Foto copy KTP (ayah dan ibu) 2 lembar & pdf</li>
                    <li>Menyerahkan foto berwarna ukuran 3×4 4 lembar & jpeg</li>
                    <li>Membayar infaq pendaftaran sebesar Rp. 300.000 ke metode transfer ke Bank BRI dengan No.Rekening 5936-01-005247-53-0 a/n Pondok Anak Tahfidhul Qur’an Unit/Cabang BRI Gembong</li>
                    <li>Sistem akan mengirimkan informasi bukti daftar ke pendaftar berupa pesan WhatsApp ke nomor yang disertakan pada saat mendaftar.</li>
                    <li>Semua berkas di masukan stopmap Merah untuk laki laki & Hijau untuk perempuan</li>
                    <li>Pendaftar akan mendapatkan informasi jadwal proses wawancara orangtua beserta calon siswa dengan kepala sekolah atau yang mewakili.</li>
                    <li>Pendaftar yang dinyatakan diterima dan mendapatkan surat lolos dari Panitia Penerimaan Santri Baru dan selanjutnya melakukan daftar ulang dengan membayar uang pangkal.</li>
                    <li style="list-style: none"> <span style="font-weight:bold;font-size:16pt;color:red">CP : 0896-0108-7437 (Pak MUslim) / 0822-9857-6026 (Pak Aris)</span></li>
                </ol>
                <hr>
            </div>
        </div>
@endsection
<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '.splide', {
            type    : 'loop',
            autoplay: 'play',
        } ).mount();
    } );
  </script>
