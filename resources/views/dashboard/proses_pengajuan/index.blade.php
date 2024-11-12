@extends('dashboard.layout.main')

@section('title')
    Proses Pengajuan
@endsection

@section('dashboard-content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-6">Daftar Pengajuan yang Perlu Diproses</h1>
    
    @if($pengajuans->isEmpty())
        <div class="bg-blue-100 text-blue-800 p-4 rounded-md">
            Tidak ada pengajuan yang perlu diproses saat ini.
        </div>
    @else
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left">No Surat</th>
                        <th class="px-6 py-4 text-left">Kepada</th>
                        <th class="px-6 py-4 text-left">Dari</th>
                        <th class="px-6 py-4 text-left">Tanggal</th>
                        <th class="px-6 py-4 text-left">Hal</th>
                        <th class="px-6 py-4 text-left">Status</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($pengajuans as $pengajuan)
                        <tr class="border-t border-gray-300 hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $pengajuan->nomor }}</td>
                            <td class="px-6 py-4">{{ $pengajuan->kepada }}</td>
                            <td class="px-6 py-4">{{ $pengajuan->dari }}</td>
                            <td class="px-6 py-4">{{ $pengajuan->tanggal->format('d-m-Y') }}</td>
                            <td class="px-6 py-4">{{ $pengajuan->hal }}</td>
                            <td class="px-6 py-4">
                                <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full 
                                    {{ $pengajuan->status == 'proses' ? 'bg-yellow-200 text-yellow-800' : 'bg-gray-200 text-gray-800' }}">
                                    {{ ucfirst($pengajuan->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('pengajuan.updateStatus', $pengajuan->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-full focus:outline-none">
                                        <option value="proses" {{ $pengajuan->status == 'proses' ? 'selected' : '' }}>Proses</option>
                                        <option value="disetujui" {{ $pengajuan->status == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                                        <option value="ditolak" {{ $pengajuan->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                        <option value="perbaiki" {{ $pengajuan->status == 'perbaiki' ? 'selected' : '' }}>Perbaiki</option>
                                    </select>
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none mt-2">
                                        <i class="fas fa-save mr-2"></i> Simpan Status
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
