@extends('layouts/layout')

@section('content')
<div class="space-y-6">

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-4 border-b border-emerald-100">
        <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-1">
                <i class="fa-solid fa-user-graduate text-emerald-600"></i> Direktori Alumni
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-950">Data Alumni Santri</h2>
            <p class="text-sm text-slate-500 mt-0.5">Daftar alumni santri PPATQ Raudlatul Falah beserta riwayat kelulusan dan pendidikan lanjutan.</p>
        </div>
        <div>
            <span class="badge badge-success text-white font-bold p-3 gap-1 shadow-sm">
                <i class="fa-solid fa-graduation-cap"></i> Total Alumni: {{ count($alumni) }}
            </span>
        </div>
    </div>

    <!-- Data Table Card -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-2xl p-4 sm:p-6">
        <div class="overflow-x-auto w-full">
            <table class="table table-hover w-full text-left" id="dataTableAlumni">
                <thead>
                    <tr>
                        <th class="text-center w-14">Foto</th>
                        <th>Nama Alumni</th>
                        <th class="text-center w-28">Tahun Lulus</th>
                        <th>Asal Daerah</th>
                        <th>Lanjutan / Profesi</th>
                        <th>Wali Kelas & Murroby</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($alumni as $row)
                    <tr class="hover:bg-emerald-50/40 transition duration-150">
                        <td class="text-center">
                            <div class="avatar inline-block">
                                <div class="w-10 h-10 rounded-xl ring-1 ring-emerald-200 overflow-hidden bg-slate-100 shadow-sm">
                                    <img src="{{ helper::get_photo($row->photo_location, $row->photo) }}" alt="{{ $row->nama }}" class="object-cover w-full h-full" onerror="this.src='https://payment.ppatq-rf.id/assets/images/user.png'" />
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="font-bold text-slate-800 leading-snug">{{ $row->nama }}</div>
                            @if(!empty($row->no_induk))
                                <span class="text-[11px] text-slate-400 font-normal">NIS: {{ $row->no_induk }}</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="flex flex-col gap-1 items-center">
                                @if(!empty($row->tahun_lulus))
                                    <span class="badge badge-outline badge-primary font-bold text-xs px-2.5 py-1">
                                        Lulus {{ $row->tahun_lulus }}
                                    </span>
                                @endif
                                @if(!empty($row->angkatan))
                                    <span class="badge badge-outline badge-secondary text-[11px] px-2 py-0.5">
                                        Angkatan {{ $row->angkatan }}
                                    </span>
                                @endif
                                @if(empty($row->tahun_lulus) && empty($row->angkatan))
                                    <span class="text-slate-400 text-xs">-</span>
                                @endif
                            </div>
                        </td>
                        <td class="text-slate-600 font-medium text-xs sm:text-sm">
                            {{ !empty($row->kecamatan) ? $row->kecamatan : (!empty($row->alamat) ? Str::limit($row->alamat, 25) : '-') }}
                        </td>
                        <td>
                            <div class="space-y-0.5 text-xs text-slate-700">
                                @if(!empty($row->nama_sekolah_menengah_pertama) && $row->nama_sekolah_menengah_pertama !== '-')
                                    <div class="font-medium text-slate-800"><i class="fa-solid fa-school text-emerald-600 mr-1"></i> {{ $row->nama_sekolah_menengah_pertama }}</div>
                                @elseif(!empty($row->nama_pondok_menengah_pertama) && $row->nama_pondok_menengah_pertama !== '-')
                                    <div class="font-medium text-slate-800"><i class="fa-solid fa-mosque text-emerald-600 mr-1"></i> {{ $row->nama_pondok_menengah_pertama }}</div>
                                @elseif(!empty($row->nama_menengah_atas) && $row->nama_menengah_atas !== '-')
                                    <div class="font-medium text-slate-800"><i class="fa-solid fa-building-columns text-emerald-600 mr-1"></i> {{ $row->nama_menengah_atas }}</div>
                                @elseif(!empty($row->nama_pt) && $row->nama_pt !== '-')
                                    <div class="font-medium text-slate-800"><i class="fa-solid fa-graduation-cap text-emerald-600 mr-1"></i> {{ $row->nama_pt }}</div>
                                @elseif(!empty($row->nama_perusahaan) && $row->nama_perusahaan !== '-')
                                    <div class="font-medium text-slate-800"><i class="fa-solid fa-briefcase text-emerald-600 mr-1"></i> {{ $row->nama_perusahaan }}</div>
                                @else
                                    <span class="text-slate-400">-</span>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="text-xs text-slate-600 space-y-0.5">
                                @if(!empty($row->wali_kelas))
                                    <div><span class="text-slate-400">Wali:</span> {{ $row->wali_kelas }}</div>
                                @endif
                                @if(!empty($row->guru_murroby))
                                    <div><span class="text-slate-400">Murroby:</span> {{ $row->guru_murroby }}</div>
                                @endif
                                @if(empty($row->wali_kelas) && empty($row->guru_murroby))
                                    <span class="text-slate-400">-</span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-mary-card>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        if (typeof DataTable !== 'undefined') {
            new DataTable('#dataTableAlumni', {
                pageLength: 15,
                language: {
                    search: "Cari Alumni:",
                    searchPlaceholder: "Nama, tahun lulus, asal...",
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan <b>_START_</b> s/d <b>_END_</b> dari <b>_TOTAL_</b> alumni",
                    infoEmpty: "Menampilkan 0 alumni",
                    infoFiltered: "(disaring dari _MAX_ total alumni)",
                    zeroRecords: "Tidak ada data alumni yang cocok",
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
