@extends('layouts/layout')

@section('content')
<div class="row">
    <div class="col-md-12" style="padding:20px;">
        <div class="alert alert-success">
            <h4><i class="fa fa-info-circle"></i> Visi & Misi PPATQ Raudlatul Falah</h4>
            <span class="badge badge-primary">MI TQ RF TERAKREDITASI A</span>
            <span class="badge badge-info">Sekolah Adiwiyata Kabupaten Pati Tahun 2025</span>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0 text-center">VISI</h4>
            </div>
            <div class="card-body text-center">
                <h3 class="card-title text-success font-italic">"Terwujudnya generasi yang bertaqwa, santun, maju dan qur'ani"</h3>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">MISI</h4>
            </div>
            <div class="card-body">
                <ol style="font-size: 1.1rem; line-height: 2rem;">
                    <li>Mencetak generasi hafal Al Qur'an</li>
                    <li>Menumbuhkan pengalaman dan pengetahuan terhadap ajaran Islam untuk menjadi insan yang Kamil</li>
                    <li>Memberikan keteladanan dalam berakhlakul karimah sesuai dengan nilai-nilai yang terkandung dalam Al Qur'an dan As Sunnah</li>
                    <li>Membekali dan meningkatkan kualitas iman & taqwa serta ilmu pengetahuan & teknologi</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Brosur / Dokumen Profil</h5>
            </div>
            <div class="card-body text-center">
                <img src="{{asset('assets/images/infografis_visi_misi.jpg')}}" class="img-fluid rounded" alt="Visi Misi">
            </div>
        </div>
    </div>
</div>
@endsection

