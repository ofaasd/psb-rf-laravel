@extends('layouts/layout')

@section('content')
<div class="space-y-6">

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-4 border-b border-emerald-100">
        <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-1">
                <i class="fa-solid fa-address-card text-emerald-600"></i> Calon Santri Baru
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-950">Data Calon Santri Baru (PSB)</h2>
            <p class="text-sm text-slate-500 mt-0.5">Daftar pendaftar calon santri baru yang telah mengisi formulir online.</p>
        </div>
        <div>
            <a target="_blank" href="https://manajemen.ppatq-rf.id/assets/file/pengumuman-2026.pdf" class="btn bg-gradient-to-r from-emerald-600 to-teal-700 hover:from-emerald-700 hover:to-teal-800 text-white rounded-xl shadow font-semibold text-xs md:text-sm">
                <i class="fa-solid fa-file-pdf mr-1.5"></i> Info & Materi Tes (PDF)
            </a>
        </div>
    </div>

    <!-- Status Legend -->
    <div class="flex flex-wrap items-center gap-4 p-3 bg-slate-50 rounded-xl border border-slate-200 text-xs text-slate-600">
        <span class="font-bold text-slate-700"><i class="fa-solid fa-circle-info mr-1 text-emerald-600"></i> Keterangan Status:</span>
        <span class="inline-flex items-center gap-1.5"><span class="badge badge-success badge-xs"></span> Terverifikasi / Lunas</span>
        <span class="inline-flex items-center gap-1.5"><span class="badge badge-warning badge-xs"></span> Menunggu Konfirmasi</span>
        <span class="inline-flex items-center gap-1.5"><span class="badge badge-error badge-xs"></span> Belum / Tidak Valid</span>
    </div>

    <!-- Table Card -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-2xl overflow-hidden p-0">
        <div class="overflow-x-auto p-4">
            <table class="table table-hover w-full text-left" id="psb_table">
                <thead class="bg-emerald-50 text-emerald-950 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="py-3 px-2 rounded-l-xl text-center">No</th>
                        <th class="py-3 px-2">Foto</th>
                        <th class="py-3 px-3">No. Pendaftaran</th>
                        <th class="py-3 px-3">Nama Santri</th>
                        <th class="py-3 px-3">Asal Sekolah</th>
                        <th class="py-3 px-3">Kota / Asal</th>
                        <th class="py-3 px-2 text-center">Tgl Daftar</th>
                        <th class="py-3 px-2 text-center">Bayar</th>
                        <th class="py-3 px-2 text-center">Verifikasi</th>
                        <th class="py-3 px-2 text-center">Ujian</th>
                        <th class="py-3 px-2 rounded-r-xl text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                    @php $i = 1; @endphp
                    @foreach($psb as $row)
                    <tr class="hover:bg-emerald-50/40 transition duration-150">
                        <td class="py-2.5 px-2 text-center font-bold text-xs text-slate-400">{{$i}}</td>
                        <td class="py-2.5 px-2">
                            <div class="avatar">
                                <div class="w-10 h-10 rounded-xl ring-1 ring-emerald-200 overflow-hidden bg-slate-100">
                                    <img src="{{$photo[$row->id]}}" alt="{{$row->nama}}" class="object-cover" onerror="this.src='https://payment.ppatq-rf.id/assets/images/user.png'" />
                                </div>
                            </div>
                        </td>
                        <td class="py-2.5 px-3">
                            <span class="font-mono font-bold text-xs px-2 py-1 bg-slate-100 rounded-lg text-slate-700 border border-slate-200">
                                {{$row->no_pendaftaran}}
                            </span>
                        </td>
                        <td class="py-2.5 px-3 font-semibold text-emerald-950">
                            {{$row->nama}}
                        </td>
                        <td class="py-2.5 px-3 text-xs text-slate-600">
                            {{$row->asal_sekolah->nama_sekolah ?? '-'}}
                        </td>
                        <td class="py-2.5 px-3 text-xs text-slate-600">
                            {{$kota[$row->id] ?? '-'}}
                        </td>
                        <td class="py-2.5 px-2 text-center text-xs text-slate-500 font-mono">
                            {{date('d/m/Y', strtotime($row->created_at))}}
                        </td>

                        <!-- Status Bayar -->
                        <td class="py-2.5 px-2 text-center">
                            @if($bukti_bayar[$row->id] == 2)
                                <div class="tooltip tooltip-top" data-tip="Pembayaran Tervalidasi">
                                    <span class="badge badge-success text-white badge-sm"><i class="fa-solid fa-check"></i></span>
                                </div>
                            @elseif($bukti_bayar[$row->id] == 1)
                                <div class="tooltip tooltip-top" data-tip="Menunggu Verifikasi">
                                    <span class="badge badge-warning text-white badge-sm"><i class="fa-solid fa-clock"></i></span>
                                </div>
                            @else
                                <div class="tooltip tooltip-top" data-tip="Belum Bayar">
                                    <span class="badge badge-error text-white badge-sm"><i class="fa-solid fa-xmark"></i></span>
                                </div>
                            @endif
                        </td>

                        <!-- Status Verifikasi -->
                        <td class="py-2.5 px-2 text-center">
                            @if($row->status == 1)
                                <div class="tooltip tooltip-top" data-tip="Data Terverifikasi">
                                    <span class="badge badge-success text-white badge-sm"><i class="fa-solid fa-check"></i></span>
                                </div>
                            @else
                                <div class="tooltip tooltip-top" data-tip="Belum Diverifikasi">
                                    <span class="badge badge-error text-white badge-sm"><i class="fa-solid fa-xmark"></i></span>
                                </div>
                            @endif
                        </td>

                        <!-- Status Ujian -->
                        <td class="py-2.5 px-2 text-center">
                            @if($row->status_ujian == 1)
                                <div class="tooltip tooltip-top" data-tip="Lulus Seleksi">
                                    <span class="badge badge-success text-white badge-sm"><i class="fa-solid fa-graduation-cap"></i></span>
                                </div>
                            @else
                                <div class="tooltip tooltip-top" data-tip="Belum Ujian">
                                    <span class="badge badge-ghost badge-sm text-slate-400"><i class="fa-solid fa-minus"></i></span>
                                </div>
                            @endif
                        </td>

                        <!-- Aksi -->
                        <td class="py-2.5 px-2 text-center">
                            <a href="{{URL::to('psb/data_pribadi')}}" class="btn btn-sm btn-ghost text-emerald-700 hover:bg-emerald-100 rounded-lg" title="Edit Data">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-mary-card>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        if (typeof DataTable !== 'undefined') {
            new DataTable('#psb_table', {
                pageLength: 15,
                language: {
                    search: "Cari:",
                    searchPlaceholder: "Nama, no. pendaftaran, kota...",
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan <b>_START_</b> s/d <b>_END_</b> dari <b>_TOTAL_</b> calon santri",
                    infoEmpty: "Menampilkan 0 calon santri",
                    infoFiltered: "(disaring dari _MAX_ total calon santri)",
                    zeroRecords: "Tidak ada data calon santri yang cocok",
                    paginate: {
                        first: '<i class="fa-solid fa-angles-left"></i>',
                        last: '<i class="fa-solid fa-angles-right"></i>',
                        next: '<i class="fa-solid fa-chevron-right text-xs"></i>',
                        previous: '<i class="fa-solid fa-chevron-left text-xs"></i>'
                    }
                }
            });
        }
    });
</script>
@endsection

