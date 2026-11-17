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

        <div class="card mb-4 border-success">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Materi Didik Santri</h5>
                <span class="badge badge-light text-success font-weight-bold">19 Mata Pelajaran</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 60px;" class="text-center">No</th>
                                <th style="width: 240px;">Mata Pelajaran</th>
                                <th>Kategori</th>
                                <th>Deskripsi Pembelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-weight-bold">1</td>
                                <td class="font-weight-bold text-success">Al-Qur'an Hadist</td>
                                <td><span class="badge badge-success">Keislaman & Al-Qur'an</span></td>
                                <td>Pembelajaran membaca, menghafal, dan memahami intisari ayat-ayat suci Al-Qur'an serta hadis-hadis nabawi pilihan sebagai pedoman utama aqidah, akhlak, dan pedoman hidup santri sejak usia dini.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">2</td>
                                <td class="font-weight-bold text-success">Bahasa Indonesia</td>
                                <td><span class="badge badge-info">Bahasa & Literasi</span></td>
                                <td>Penguasaan kemahiran berbahasa Indonesia yang baik dan benar, melatih kemampuan membaca intensif, menulis kreatif, berbicara santun, serta memperkuat nalar literasi kontekstual.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">3</td>
                                <td class="font-weight-bold text-success">Akhlak Salaf</td>
                                <td><span class="badge badge-warning text-dark">Pesantren Salaf</span></td>
                                <td>Penanaman budi pekerti luhur dan etika penuntut ilmu (adab thalabul ilmi) merujuk pada kitab-kitab ulama salafus sholih, menumbuhkan sikap ta'dzim kepada guru, berbakti kepada orang tua, dan welas asih sesama kawan.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">4</td>
                                <td class="font-weight-bold text-success">Nahwu</td>
                                <td><span class="badge badge-warning text-dark">Pesantren Salaf</span></td>
                                <td>Pembelajaran kaidah tata bahasa Arab dasar (mengenal struktur isim, fi'il, huruf, serta i'rab) sebagai kunci utama pembuka wawasan dalam membaca dan menelaah literatur kitab kuning.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">5</td>
                                <td class="font-weight-bold text-success">Bahasa Arab</td>
                                <td><span class="badge badge-info">Bahasa & Literasi</span></td>
                                <td>Pengembangan keterampilan bahasa Arab komunikatif meliputi penguasaan kosakata tematik (mufrodat), latihan percakapan harian (muhadatsah), istima' (mendengar), serta qira'ah teks sederhana.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">6</td>
                                <td class="font-weight-bold text-success">IPAS</td>
                                <td><span class="badge badge-primary">Sains & Sosial</span></td>
                                <td>Integrasi Ilmu Pengetahuan Alam dan Sosial untuk memupuk daya kritis saintifik, rasa ingin tahu terhadap fenomena ciptaan Allah SWT, kepedulian lingkungan hidup, serta kecakapan sosial kemasyarakatan.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">7</td>
                                <td class="font-weight-bold text-success">Fiqih Salaf</td>
                                <td><span class="badge badge-warning text-dark">Pesantren Salaf</span></td>
                                <td>Pendalaman hukum syariat Islam berlandaskan madzhab Syafi'i dari kitab-kitab rujukan salaf klasik, memastikan santri memiliki fondasi hukum ibadah yang kokoh, runut, dan bersanad keilmuan jelas.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">8</td>
                                <td class="font-weight-bold text-success">Bahasa Inggris</td>
                                <td><span class="badge badge-info">Bahasa & Literasi</span></td>
                                <td>Pengenalan dasar komunikasi internasional yang menyenangkan, mencakup pengayaan kosakata harian, kalimat sapaan, pelafalan tepat, dan keberanian berkomunikasi dalam bahasa global.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">9</td>
                                <td class="font-weight-bold text-success">Akidah Akhlak</td>
                                <td><span class="badge badge-success">Keislaman & Al-Qur'an</span></td>
                                <td>Penguatan rukun iman yang teguh dalam hati sanubari santri, dipadukan pembiasaan akhlak terpuji sehari-hari serta menjauhi akhlak tercela baik di lingkungan asrama maupun madrasah.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">10</td>
                                <td class="font-weight-bold text-success">Seni Rupa</td>
                                <td><span class="badge badge-secondary">Kreativitas & Keterampilan</span></td>
                                <td>Wadah apresiasi dan ekspresi bakat seni santri melalui karya visual, mewarnai, menggambar ornamen, kaligrafi Islam (khat), serta mengasah kepekaan estetika yang positif dan beradab.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">11</td>
                                <td class="font-weight-bold text-success">Tauhid</td>
                                <td><span class="badge badge-success">Keislaman & Al-Qur'an</span></td>
                                <td>Pemurnian keyakinan dan akidah Ahlussunnah wal Jama'ah melalui kajian sifat-sifat wajib, mustahil, dan jaiz bagi Allah SWT dan para Rasul-Nya (Aqidatul Awwam) agar terpatri iman yang murni.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">12</td>
                                <td class="font-weight-bold text-success">Bahasa Jawa</td>
                                <td><span class="badge badge-info">Bahasa & Literasi</span></td>
                                <td>Pelestarian bahasa ibu dan adab luhur kebudayaan daerah melalui pembelajaran unggah-ungguh basa (ngoko dan krama), aksara Jawa, serta etika kesantunan khas tradisi pesantren nusantara.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">13</td>
                                <td class="font-weight-bold text-success">SKI (Sejarah Kebudayaan Islam)</td>
                                <td><span class="badge badge-success">Keislaman & Al-Qur'an</span></td>
                                <td>Penelusuran sejarah dakwah Rasulullah SAW, keteladanan para sahabat Khulafaur Rasyidin, masa keemasan Islam, dan sejarah dakwah Islam di nusantara sebagai cermin keteladanan perjuangan.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">14</td>
                                <td class="font-weight-bold text-success">Matematika</td>
                                <td><span class="badge badge-primary">Sains & Sosial</span></td>
                                <td>Pengembangan kecakapan berhitung, logika komputasi, penalaran deduktif, dan pemecahan masalah numerik secara teliti, terstruktur, dan aplikatif dalam kehidupan nyata.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">15</td>
                                <td class="font-weight-bold text-success">Tajwid</td>
                                <td><span class="badge badge-success">Keislaman & Al-Qur'an</span></td>
                                <td>Pendalaman kaidah tartil tilawah Al-Qur'an meliputi makharijul huruf, shifatul huruf, hukum nun sukun, mim sukun, mad, dan waqaf-ibtida' guna menjaga kesucian dan kebenaran lafaz kalamullah.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">16</td>
                                <td class="font-weight-bold text-success">Fikih</td>
                                <td><span class="badge badge-success">Keislaman & Al-Qur'an</span></td>
                                <td>Pembelajaran hukum Islam praktis kurikulum madrasah formal seputar thaharah (tata cara bersuci), shalat fardhu dan sunnah, puasa, zakat, serta adab ibadah harian.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">17</td>
                                <td class="font-weight-bold text-success">Pendidikan Pancasila</td>
                                <td><span class="badge badge-dark">Kebangsaan & Karakter</span></td>
                                <td>Penanaman wawasan kebangsaan, cinta tanah air (hubbul wathan minal iman), kesadaran hidup berdemokrasi yang santun, kepatuhan norma hukum, serta penghayatan nilai-nilai luhur Pancasila dalam NKRI.</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">18</td>
                                <td class="font-weight-bold text-success">PJOK</td>
                                <td><span class="badge badge-secondary">Kebugaran & Olahraga</span></td>
                                <td>Pendidikan Jasmani, Olahraga, dan Kesehatan untuk memelihara kebugaran fisik santri, sportivitas, daya tahan tubuh, serta pemahaman pola hidup sehat dan bersih (Al-Mu'minul Qawiyyu).</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold">19</td>
                                <td class="font-weight-bold text-success">Ubudiyah</td>
                                <td><span class="badge badge-warning text-dark">Pesantren Salaf</span></td>
                                <td>Praktik amaliah nyata ibadah harian santri di pondok pesantren, meliputi pembiasaan shalat lima waktu berjamaah di masjid, shalat tahajjud dan dhuha, tadarus Al-Qur'an, hafalan doa-doa mustajab, serta dzikir wirid harian.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
