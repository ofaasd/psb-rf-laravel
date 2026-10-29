@extends('layouts/layout')

@section('content')
<div class="space-y-6">

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-4 border-b border-emerald-100">
        <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-1">
                <i class="fa-solid fa-users text-emerald-600"></i> Direktori Santri
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-emerald-950">Data Santri Aktif</h2>
            <p class="text-sm text-slate-500 mt-0.5">Daftar santri aktif yang sedang menempuh pendidikan di PPATQ Raudlatul Falah.</p>
        </div>
        <div>
            <span class="badge badge-success text-white font-bold p-3 gap-1 shadow-sm">
                <i class="fa-solid fa-graduation-cap"></i> Total Santri: {{ count($var['santri']) }}
            </span>
        </div>
    </div>

    <!-- Data Table Card -->
    <x-mary-card shadow class="border border-emerald-100 bg-white rounded-2xl p-4 sm:p-6">
        <div class="overflow-x-auto w-full">
            <table class="table table-hover w-full text-left" id="dataTable">
                <thead>
                    <tr>
                        <th class="text-center w-14">Foto</th>
                        <th>Nama Santri</th>
                        <th class="text-center w-20">Kelas</th>
                        <th>Asal Kota</th>
                        <th>Wali Kelas</th>
                        <th>Guru Murroby</th>
                        <th>Guru Tahfidz</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($var['santri'] as $santri)
                    <tr class="hover:bg-emerald-50/40 transition duration-150">
                        <td class="text-center">
                            <div class="avatar inline-block">
                                <div class="w-10 h-10 rounded-xl ring-1 ring-emerald-200 overflow-hidden bg-slate-100 shadow-sm">
                                    <img src="{{helper::get_photo($santri->photo_location,$santri->photo)}}" alt="{{$santri->nama}}" class="object-cover w-full h-full" onerror="this.src='https://payment.ppatq-rf.id/assets/images/user.png'" />
                                </div>
                            </div>
                        </td>
                        <td class="font-bold text-slate-800">
                            {{$santri->nama}}
                        </td>
                        <td class="text-center">
                            <span class="badge badge-outline badge-primary font-bold text-xs px-2.5 py-1">
                                {{$santri->kelas}}
                            </span>
                        </td>
                        <td class="text-slate-600 font-medium">
                            {{$santri->kota->city_name ?? "-"}}
                        </td>
                        <td class="text-xs text-slate-600">
                            {{$santri->ref_kelas->pegawai->nama ?? "-"}}
                        </td>
                        <td class="text-xs text-slate-600">
                            {{$santri->ref_kamar->pegawai->nama ?? "-"}}
                        </td>
                        <td class="text-xs text-emerald-800 font-semibold">
                            {{$santri->ref_tahfidz->pegawai->nama ?? "-"}}
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
            new DataTable('#dataTable', {
                pageLength: 15,
                language: {
                    search: "Cari:",
                    searchPlaceholder: "Nama, kelas, kota...",
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan <b>_START_</b> s/d <b>_END_</b> dari <b>_TOTAL_</b> santri",
                    infoEmpty: "Menampilkan 0 santri",
                    infoFiltered: "(disaring dari _MAX_ total santri)",
                    zeroRecords: "Tidak ada data santri yang cocok",
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
