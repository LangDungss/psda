@extends('dashboard.layout.main')
@section('title')
    daftar pengajuan
@endsection
@section('dashboard-content')
    <h1>Selamat datang semua</h1>
@endsection
{{-- @section('dashboard-content')
    {{-- <table class="table-fixed w-full border-collapse border border-slate-500 text-center mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>No Pengajuan</th>
                <th>Nama Pengajuan</th>
                <th>Kepada</th>
                <th>Perihal</th>
                <th>Tanggal Berangkat</th>
                <th>Tanggal Kembali</th>
                <th>Trasnportasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajuans as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->no_pengajuan }}</td>
                    <td>{{ Auth::guard('pegawai')->user()->nama }}</td>
                    <td>{{ $p->kepada }}</td>
                    <td>{{ $p->perihal }}</td>
                    <td>{{ $p->tgl_berangkat }}</td>
                    <td>{{ $p->tgl_kembali }}</td>
                    <td>{{ $p->transportasi }}</td>
                    <td>
                        <a href="/pengajuan/{{ $p->id }}" class="badge bg-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
{{-- @endsection --}}
