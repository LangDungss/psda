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
                        <th class="px-6 py-4 text-left">Status Sekretaris</th>
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
                                    {{ $pengajuan->status_sekretaris == 'belum_dikonfirmasi' ? 'bg-yellow-200 text-yellow-800' : 
                                       ($pengajuan->status_sekretaris == 'disetujui' ? 'bg-blue-200 text-blue-800' : 'bg-green-200 text-green-800') }}">
                                    {{ ucfirst(str_replace('_', ' ', $pengajuan->status_sekretaris)) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <!-- Tombol Preview Surat -->
                                <!-- Tombol untuk melihat preview surat -->
                            <a href="{{ route('pengajuans.preview', $pengajuan->id) }}" 
                                class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 focus:outline-none mt-2">
                                <i class="fas fa-eye mr-2"></i> Preview Surat
                            </a>
                            
                            

                                <!-- Tombol Set Status -->
                                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none mt-2"
                                    onclick="document.getElementById('statusModal-{{ $pengajuan->id }}').classList.remove('hidden')">
                                    <i class="fas fa-edit mr-2"></i> Set Status
                                </button>

                                <!-- Modal Set Status -->
                                <div id="statusModal-{{ $pengajuan->id }}" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-500 bg-opacity-50">
                                    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <h5 class="text-lg font-semibold">Update Status Pengajuan</h5>
                                            <button type="button" class="text-gray-600" onclick="document.getElementById('statusModal-{{ $pengajuan->id }}').classList.add('hidden')">
                                                &times;
                                            </button>
                                        </div>
                                        <form action="{{ route('proses-sekretaris.updateStatus', $pengajuan->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="status_sekretaris" class="block text-sm font-medium text-gray-700">Status Sekretaris</label>
                                                <select name="status_sekretaris" class="form-select w-full p-2 border border-gray-300 rounded-md" required>
                                                    <option value="belum_dikonfirmasi" {{ $pengajuan->status_sekretaris == 'belum_dikonfirmasi' ? 'selected' : '' }}>Belum Dikonfirmasi</option>
                                                    <option value="disetujui" {{ $pengajuan->status_sekretaris == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                                                    <option value="ditolak" {{ $pengajuan->status_sekretaris == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md w-full hover:bg-blue-600">
                                                Simpan Status
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
