@extends('layouts/layout')

@section('content')
<div class="space-y-6">

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-4 border-b border-amber-100">
        <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-900 mb-1">
                <i class="fa-solid fa-award text-amber-600"></i> Prestasi Khotmil Qur'an & Kitab
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Data Alumni Khotimin</h2>
            <p class="text-sm text-slate-500 mt-0.5">Daftar santri dan alumni yang telah menyelesaikan hafalan 30 Juz Al-Qur'an maupun khataman kitab di PPATQ Raudlatul Falah.</p>
        </div>
        <div>
            <span class="badge badge-warning text-slate-900 font-bold p-3 gap-1 shadow-sm">
                <i class="fa-solid fa-medal"></i> Total Khotimin: {{ count($khotimin) }}
            </span>
        </div>
    </div>

    <!-- Data Table Card -->
    <x-mary-card shadow class="border border-amber-200 bg-white rounded-2xl p-4 sm:p-6">
        <div class="overflow-x-auto w-full">
            <table class="table table-hover w-full text-left" id="dataTableKhotimin">
                <thead>
                    <tr>
                        <th class="text-center w-14">Foto</th>
                        <th>Nama Santri / Alumni</th>
                        <th class="text-center w-28">Status</th>
                        <th>Capaian Khataman</th>
                        <th>Waktu Khatam</th>
                        <th class="text-center w-20">Kelas</th>
                        <th>Asal Daerah</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($khotimin as $row)
                    <tr class="hover:bg-amber-50/40 transition duration-150">
                        <td class="text-center">
                            <div class="avatar inline-block">
                                <div class="w-10 h-10 rounded-xl ring-2 ring-amber-300 overflow-hidden bg-slate-100 shadow-sm">
                                    <img src="{{ helper::get_photo($row->photo_location, $row->photo) }}" alt="{{ $row->nama }}" class="object-cover w-full h-full" onerror="this.src='https://payment.ppatq-rf.id/assets/images/user.png'" />
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="font-bold text-slate-900 leading-snug">{{ $row->nama }}</div>
                            @if(!empty($row->no_induk))
                                <span class="text-[11px] text-slate-400 font-normal">NIS: {{ $row->no_induk }}</span>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($row->status_tipe === 'Santri Aktif')
                                <span class="badge badge-success text-white text-xs font-semibold px-2.5 py-1">
                                    <i class="fa-solid fa-circle-check text-[10px] mr-1"></i> Santri Aktif
                                </span>
                            @else
                                <span class="badge badge-primary text-white text-xs font-semibold px-2.5 py-1">
                                    <i class="fa-solid fa-graduation-cap text-[10px] mr-1"></i> Alumni
                                </span>
                            @endif
                        </td>
                        <td>
                            <div class="space-y-1">
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-900 border border-amber-300">
                                    <i class="fa-solid fa-award text-amber-600"></i> Khatam
                                </span>
                                @if(!empty($row->keterangan))
                                    <div class="text-xs font-semibold text-slate-800 leading-tight">{{ $row->keterangan }}</div>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="text-xs text-slate-700 font-medium">
                                @if(!empty($row->tanggal_khatam_formatted))
                                    <div><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> {{ $row->tanggal_khatam_formatted }}</div>
                                @elseif(!empty($row->tahun_info))
                                    <div><i class="fa-regular fa-calendar text-emerald-600 mr-1"></i> Tahun {{ $row->tahun_info }}</div>
                                @else
                                    <span class="text-slate-400">-</span>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">
                            @if(!empty($row->kelas))
                                <span class="badge badge-outline badge-secondary font-bold text-xs px-2 py-0.5">
                                    {{ strtoupper($row->kelas) }}
                                </span>
                            @else
                                <span class="text-slate-400 text-xs">-</span>
                            @endif
                        </td>
                        <td class="text-slate-600 font-medium text-xs sm:text-sm">
                            {{ $row->kecamatan ?? '-' }}
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
            new DataTable('#dataTableKhotimin', {
                pageLength: 15,
                language: {
                    search: "Cari Khotimin:",
                    searchPlaceholder: "Nama, status, keterangan...",
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan <b>_START_</b> s/d <b>_END_</b> dari <b>_TOTAL_</b> santri khotimin",
                    infoEmpty: "Menampilkan 0 khotimin",
                    infoFiltered: "(disaring dari _MAX_ total)",
                    zeroRecords: "Tidak ada data khotimin yang cocok",
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
