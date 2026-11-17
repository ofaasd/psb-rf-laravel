@extends('layouts/layout')

@section('content')
<div class="row">
    <div class="col-md-12" style="padding:20px;">
        <div class="alert alert-success">
            <h4><i class="fa fa-book"></i> Materi Didik & Kurikulum Pembelajaran</h4>
            <span>Pondok Pesantren Anak-Anak Tahfidzul Qur'an (PPATQ) Raudlatul Falah Pati</span>
        </div>

        <p class="text-muted" style="line-height: 1.8;">
            Kurikulum pendidikan di PPATQ Raudlatul Falah mengintegrasikan kurikulum pesantren salaf, tahfidzul qur'an intensif, dan kurikulum madrasah formal (MI TQ Raudlatul Falah). Berikut adalah daftar 19 mata pelajaran / materi didik yang diajarkan kepada santri:
        </p>

        <div class="card mb-4 border-success shadow-sm">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center" style="padding: 14px 20px;">
                <h5 class="mb-0 font-weight-bold">Daftar Materi Didik Santri</h5>
                <span class="badge badge-light text-success font-weight-bold px-3 py-2" style="font-size: 13px;">19 Mata Pelajaran</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 85px; text-align: center; padding: 15px 12px;">No</th>
                                <th style="width: 250px; padding: 15px 25px;">Mata Pelajaran</th>
                                <th style="width: 190px; padding: 15px 20px;">Kategori</th>
                                <th style="padding: 15px 25px;">Deskripsi Pembelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-success text-success font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">01</span>
                                </td>
                                <td class="font-weight-bold text-success" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Al-Qur'an Hadist</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-success px-2 py-1">Keislaman & Al-Qur'an</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pembelajaran membaca, menghafal, dan memahami intisari ayat-ayat suci Al-Qur'an serta hadis-hadis nabawi pilihan sebagai pedoman utama aqidah, akhlak, dan pedoman hidup santri sejak usia dini.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-info text-info font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">02</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Bahasa Indonesia</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-info px-2 py-1">Bahasa & Literasi</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Penguasaan kemahiran berbahasa Indonesia yang baik dan benar, melatih kemampuan membaca intensif, menulis kreatif, berbicara santun, serta memperkuat nalar literasi kontekstual.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-warning text-warning font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">03</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Akhlak Salaf</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-warning text-dark px-2 py-1">Pesantren Salaf</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Penanaman budi pekerti luhur dan etika penuntut ilmu (adab thalabul ilmi) merujuk pada kitab-kitab ulama salafus sholih, menumbuhkan sikap ta'dzim kepada guru, berbakti kepada orang tua, dan welas asih sesama kawan.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-warning text-warning font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">04</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Nahwu</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-warning text-dark px-2 py-1">Pesantren Salaf</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pembelajaran kaidah tata bahasa Arab dasar (mengenal struktur isim, fi'il, huruf, serta i'rab) sebagai kunci utama pembuka wawasan dalam membaca dan menelaah literatur kitab kuning.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-info text-info font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">05</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Bahasa Arab</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-info px-2 py-1">Bahasa & Literasi</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pengembangan keterampilan bahasa Arab komunikatif meliputi penguasaan kosakata tematik (mufrodat), latihan percakapan harian (muhadatsah), istima' (mendengar), serta qira'ah teks sederhana.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-primary text-primary font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">06</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">IPAS</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-primary px-2 py-1">Sains & Sosial</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Integrasi Ilmu Pengetahuan Alam dan Sosial untuk memupuk daya kritis saintifik, rasa ingin tahu terhadap fenomena ciptaan Allah SWT, kepedulian lingkungan hidup, serta kecakapan sosial kemasyarakatan.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-warning text-warning font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">07</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Fiqih Salaf</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-warning text-dark px-2 py-1">Pesantren Salaf</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pendalaman hukum syariat Islam berlandaskan madzhab Syafi'i dari kitab-kitab rujukan salaf klasik, memastikan santri memiliki fondasi hukum ibadah yang kokoh, runut, dan bersanad keilmuan jelas.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-info text-info font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">08</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Bahasa Inggris</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-info px-2 py-1">Bahasa & Literasi</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pengenalan dasar komunikasi internasional yang menyenangkan, mencakup pengayaan kosakata harian, kalimat sapaan, pelafalan tepat, dan keberanian berkomunikasi dalam bahasa global.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-success text-success font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">09</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Akidah Akhlak</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-success px-2 py-1">Keislaman & Al-Qur'an</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Penguatan rukun iman yang teguh dalam hati sanubari santri, dipadukan pembiasaan akhlak terpuji sehari-hari serta menjauhi akhlak tercela baik di lingkungan asrama maupun madrasah.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-secondary text-secondary font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">10</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Seni Rupa</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-secondary px-2 py-1">Kreativitas & Keterampilan</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Wadah apresiasi dan ekspresi bakat seni santri melalui karya visual, mewarnai, menggambar ornamen, kaligrafi Islam (khat), serta mengasah kepekaan estetika yang positif dan beradab.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-success text-success font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">11</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Tauhid</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-success px-2 py-1">Keislaman & Al-Qur'an</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pemurnian keyakinan dan akidah Ahlussunnah wal Jama'ah melalui kajian sifat-sifat wajib, mustahil, dan jaiz bagi Allah SWT dan para Rasul-Nya (Aqidatul Awwam) agar terpatri iman yang murni.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-info text-info font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">12</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Bahasa Jawa</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-info px-2 py-1">Bahasa & Literasi</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pelestarian bahasa ibu dan adab luhur kebudayaan daerah melalui pembelajaran unggah-ungguh basa (ngoko dan krama), aksara Jawa, serta etika kesantunan khas tradisi pesantren nusantara.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-success text-success font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">13</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">SKI (Sejarah Kebudayaan Islam)</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-success px-2 py-1">Keislaman & Al-Qur'an</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Penelusuran sejarah dakwah Rasulullah SAW, keteladanan para sahabat Khulafaur Rasyidin, masa keemasan Islam, dan sejarah dakwah Islam di nusantara sebagai cermin keteladanan perjuangan.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-primary text-primary font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">14</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Matematika</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-primary px-2 py-1">Sains & Sosial</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pengembangan kecakapan berhitung, logika komputasi, penalaran deduktif, dan pemecahan masalah numerik secara teliti, terstruktur, dan aplikatif dalam kehidupan nyata.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-success text-success font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">15</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Tajwid</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-success px-2 py-1">Keislaman & Al-Qur'an</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pendalaman kaidah tartil tilawah Al-Qur'an meliputi makharijul huruf, shifatul huruf, hukum nun sukun, mim sukun, mad, dan waqaf-ibtida' guna menjaga kesucian dan kebenaran lafaz kalamullah.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-success text-success font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">16</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Fikih</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-success px-2 py-1">Keislaman & Al-Qur'an</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pembelajaran hukum Islam praktis kurikulum madrasah formal seputar thaharah (tata cara bersuci), shalat fardhu dan sunnah, puasa, zakat, serta adab ibadah harian.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-dark text-dark font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">17</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Pendidikan Pancasila</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-dark px-2 py-1">Kebangsaan & Karakter</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Penanaman wawasan kebangsaan, cinta tanah air (hubbul wathan minal iman), kesadaran hidup berdemokrasi yang santun, kepatuhan norma hukum, serta penghayatan nilai-nilai luhur Pancasila dalam NKRI.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-secondary text-secondary font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">18</span>
                                </td>
                                <td class="font-weight-bold text-dark" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">PJOK</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-secondary px-2 py-1">Kebugaran & Olahraga</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Pendidikan Jasmani, Olahraga, dan Kesehatan untuk memelihara kebugaran fisik santri, sportivitas, daya tahan tubuh, serta pemahaman pola hidup sehat dan bersih (Al-Mu'minul Qawiyyu).</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold" style="padding: 15px 12px; vertical-align: middle;">
                                    <span class="badge badge-light border border-success text-success font-weight-bold" style="font-size: 13px; padding: 6px 12px; border-radius: 8px;">19</span>
                                </td>
                                <td class="font-weight-bold text-success" style="padding: 15px 25px; vertical-align: middle; font-size: 15px;">Ubudiyah</td>
                                <td style="padding: 15px 20px; vertical-align: middle;"><span class="badge badge-warning text-dark px-2 py-1">Pesantren Salaf</span></td>
                                <td style="padding: 15px 25px; vertical-align: middle; line-height: 1.7;">Praktik amaliah nyata ibadah harian santri di pondok pesantren, meliputi pembiasaan shalat lima waktu berjamaah di masjid, shalat tahajjud dan dhuha, tadarus Al-Qur'an, hafalan doa-doa mustajab, serta dzikir wirid harian.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card border-0 bg-light p-4 text-center">
            <h5 class="font-weight-bold text-dark mb-2">Tertarik Mendaftarkan Putra/Putri Anda?</h5>
            <p class="text-muted mb-3">Penerimaan Santri Baru (PSB) PPATQ Raudlatul Falah dibuka secara online.</p>
            <div>
                <a href="{{ URL::to('/psb/daftar') }}" class="btn btn-success px-4 py-2 font-weight-bold">
                    <i class="fa fa-pencil-square-o"></i> Daftar Santri Baru
                </a>
                <a href="{{ URL::to('/kontak') }}" class="btn btn-outline-secondary px-4 py-2 ml-2">
                    <i class="fa fa-phone"></i> Hubungi Kami
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
