<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * { font-family: DejaVu Sans, sans-serif; font-size:9pt}
    </style>
</head>
<body>
    <table width="100%" border=0>
        {{-- <tr>
            <td></td>
            <td width="10"></td>
            <td width="10%"></td>
            <td width="30%">Nomor Registrasi</td>
            <td >0123123123</td>
        </tr> --}}
        <tr>
            <td rowspan="5" width="25%"><img src="https://payment.ppatq-rf.id/assets/images/logo.png" alt=""></td>
            <td width="10"></td>
            <td width="10%"></td>
            <td width="30%"></td>
            <td></td>
            {{-- <td width="30%">Tahun Pelajaran</td> --}}
            {{-- <td>2025</td> --}}
        </tr>
        {{-- <tr>
            <td colspan="4">Jl. KH. Abdullah Km. 2 Bermi-Gembong -Pati 59162</td>
        </tr>
        <tr>
            <td>Website</td>
            <td colspan="3">www.ppatq-rf.sch.id</td>
        </tr>
        <tr>
            <td>Email</td>
            <td colspan="3">ppatqrf@gmail.com</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3">&nbsp;</td>
        </tr> --}}
        {{-- <tr>
            <td colspan="5" align="center">المؤسسة روضة الفلاح</td>
        </tr>
        <tr>
            <td colspan="5" align="center"><img src="{{asset('assets/images/')}}/Gambar1.png" alt="" height="30" align="center"></td>
        </tr>--}}
        <tr>
            <td colspan="5" align="center"><b>FORMULIR PENDAFTARAN SANTRI BARU PERIODE 2025</b></td>
        </tr>
        <tr>
            <td colspan="5" align="center"><b>PONDOK PESANTREN ANAK TAHFIDZUL QUR'AN RAUDLATUL  FALAH</b></td>
        </tr>
        <tr>
            <td colspan="5" align="center">Jl. KH. Abdullah Km. 2 Bermi-Gembong -Pati 59162</td>
        </tr>
        <tr>
            <td colspan="5" align="center">www.ppatq-rf.sch.id  ||  www.ppatq-rf.id</td>
        </tr>
        <tr>
            <td colspan="5"><b>Data Santri Baru</b></td>
        </tr>
        {{-- <tr>
            <td valign="top">Username</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td valign="top">Password</td>
            <td colspan="4">{{$password}}</td>
        </tr> --}}
        <tr>
            <td valign="top" >Nama Lengkap</td>
            <td colspan="3">{{$psb_peserta->nama}}</td>
            <td rowspan="8">
                @if(!empty($berkas->file_photo))
                    <img src="{{URL::to('')}}/assets/images/upload/foto_casan/{{$berkas->file_photo}}" width="150">
                @endif
                <br /><br />
                Pendaftaran : <br />
                Username : {{$user->username}}<br />
                Password : {{$password}}<br />
            </td>
        </tr>
        <tr>
            <td valign="top">Nama Panggilan</td>
            <td colspan="3">{{$psb_peserta->nama_panggilan ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">Jenis Kelamin</td>
            <td colspan="3">{{($psb_peserta->jenis_kelamin=='L')?'Laki-laki':'Perempuan'}}</td>
        </tr>
        <tr>
            <td valign="top" width="15%">Tempat Tanggal Lahir</td>
            <td width="15%">{{$psb_peserta->tempat_lahir}}, {{date('d-m-Y', strtotime($psb_peserta->tanggal_lahir))}}</td>
            <td width="15%">Usia</td>
            <td width="15%">{{$psb_peserta->usia_tahun ?? '<Kosong>'}} Tahun, {{$psb_peserta->usia_bulan ?? '<Kosong>'}} Bulan</td>
        </tr>
        <tr>
            <td valign="top">Anak Ke</td>
            <td colspan="3">{{$psb_peserta->anak_ke ?? '<Kosong>'}} dari {{$psb_peserta->jumlah_saudara ?? '<Kosong>'}}  bersaudara</td>
        </tr>
        <tr>
            <td valign="top">Alamat Lengkap</td>
            <td colspan="3">{{$psb_peserta->alamat ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">Kelurahan</td>
            <td>{{$kelurahan->nama_kelurahan ?? '<Kosong>'}}</td>
            <td valign="top">Kecamatan</td>
            <td >{{$kecamatan->nama_kecamatan ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">Kota</td>
            <td>{{$kota->nama_kota_kab ?? '<Kosong>'}}</td>
            <td valign="top">Provinsi</td>
            <td>{{$provinsi->nama_provinsi ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td colspan="5" ><b>Data Wali Santri</b></td>
        </tr>
        <tr>
            <td valign="top">Nama Ayah</td>
            <td>{{$psb_wali->nama_ayah ?? '<Kosong>'}}</td>
            <td valign="top">Nama Ibu</td>
            <td colspan="2">{{$psb_wali->nama_ibu ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">Pendidikan Ayah</td>
            <td>{{$psb_wali->pendidikan_ayah ?? '<Kosong>'}}</td>
            <td valign="top">Pendidikan Ibu</td>
            <td colspan="2">{{$psb_wali->pendidikan_ibu ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">Pekerjaan Ayah</td>
            <td>{{$psb_wali->pekerjaan_ayah ?? '<Kosong>'}}</td>
            <td valign="top">Pekerjaan Ibu</td>
            <td colspan="2">{{$psb_wali->pekerjaan_ibu ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">No. HP</td>
            <td>{{$psb_wali->no_hp}}</td>
            <td valign="top">Nomor Telpon Rumah</td>
            <td colspan="4">{{$psb_wali->no_telp ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td colspan="5" ><b>Sekolah Asal / Pindahan</b></td>
        </tr>
        <tr>
            <td valign="top">Dari</td>
            <td colspan="4">{{$jenjang[$psb_asal->jenjang] ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">Nama Sekolah</td>
            <td colspan="4">{{$psb_asal->nama_sekolah ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">NSM/NSS</td>
            <td colspan="4">{{$psb_asal->nss ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">NPSN</td>
            <td colspan="4">{{$psb_asal->npsn ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">NISN</td>
            <td colspan="4">{{$psb_asal->nisn ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td colspan="5" ><b>Ukuran Seragam</b></td>
        </tr>
        <tr>
            <td valign="top">Berat Badan</td>
            <td colspan="4">{{$psb_seragam->berat_badan ?? '<Kosong>'}} KG</td>
        </tr>
        <tr>
            <td valign="top">Tinggi Badan</td>
            <td colspan="4">{{$psb_seragam->tinggi_badan ?? '<Kosong>'}} CM</td>
        </tr>
        <tr>
            <td valign="top">Lingkar Dada</td>
            <td colspan="4">{{$psb_seragam->lingkar_dada ?? '<Kosong>'}} CM</td>
        </tr>
        <tr>
            <td valign="top">Lingkar Pinggul</td>
            <td colspan="4">{{$psb_seragam->lingkar_pinggul ?? '<Kosong>'}} CM</td>
        </tr>
        <tr>
            <td colspan="5" ><b>Berkas Pendukung</b></td>
        </tr>
        <tr>
            <td valign="top">Photo Calon Santri</td>
            <td colspan="4">{{(!empty($berkas->file_photo))? 'Ada (Terakhir Diperbaharui ' . date('d-m-Y',strtotime($berkas->updated_at)) . ')' : '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">File KK</td>
            <td colspan="4">{{(!empty($berkas->file_kk))? 'Ada (Terakhir Diperbaharui ' . date('d-m-Y',strtotime($berkas->updated_at)) . ')' : '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">File KTP</td>
            <td colspan="4">{{(!empty($berkas->file_ktp))? 'Ada (Terakhir Diperbaharui ' . date('d-m-Y',strtotime($berkas->updated_at)) . ')' : '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">File Rapor/Ijazah</td>
            <td colspan="4">{{(!empty($berkas->file_rapor))? 'Ada (Terakhir Diperbaharui ' . date('d-m-Y',strtotime($berkas->updated_at)) . ')' : '<Kosong>'}}</td>
        </tr>
        <tr>
            <td colspan="5" ><b>Status Pembayaran</b></td>
        </tr>
        <tr>
            <td valign="top">Nama Bank</td>
            <td colspan="0">{{$bukti->bank ?? '<Kosong>'}}</td>
            <td valign="top">Bukti Pembayaran</td>
            <td colspan="2">{{(!empty($bukti->bukti))? 'Ada' : '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">Atas Nama</td>
            <td colspan="0">{{$bukti->atas_nama ?? '<Kosong>'}}</td>
            <td valign="top">Status Pembayaran</td>
            @php $stats = 0; if(!empty($bukti->status)) $stats = $bukti->status @endphp
            <td colspan="2">{{$status_pembayaran[$stats] ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td valign="top">No. Rekening</td>
            <td colspan="4">{{$bukti->no_rekening ?? '<Kosong>'}}</td>
        </tr>
        <tr>
            <td colspan="5" style="background:red;color:white; padding:10px;">Digenerate Oleh Sistem PPATQ-RF.ID | Terakhir Di update {{date('Y-m-d H:i:s',strtotime($psb_peserta->updated_at))}}</td>
        </tr>
    </table>
</body>
</html>
