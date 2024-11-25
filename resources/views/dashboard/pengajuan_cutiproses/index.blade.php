@extends('dashboard.layout.main')

@section('title', 'Proses Pengajuan Cuti')

@section('dashboard-content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-6">Daftar Pengajuan Cuti yang Perlu Diproses</h1>

    @if($pengajuans->isEmpty())
        <div class="bg-blue-100 text-blue-800 p-4 rounded-md">
            Tidak ada pengajuan cuti yang perlu diproses saat ini.
        </div>
    @else
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-gray-800 text-white">
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">No Surat</th>
                        <th class="px-4 py-3">Jenis Cuti</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($pengajuans as $pengajuan)
                        <tr class="border-t border-gray-300 hover:bg-gray-50">
                            <td class="px-4 py-3 text-sm">{{ $pengajuan->nomor_surat }}</td>
                            <td class="px-4 py-3 text-sm">{{ $pengajuan->jenis_cuti }}</td>
                            <td class="px-4 py-3 text-sm">{{ $pengajuan->nama }}</td>
                            <td class="px-6 py-4">
                                <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full 
                                    {{ $pengajuan->status == 'proses' ? 'bg-yellow-200 text-yellow-800' : ($pengajuan->status == 'disetujui' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800') }}">
                                    {{ ucfirst($pengajuan->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none mt-2"
                                    onclick="document.getElementById('statusModal-{{ $pengajuan->id }}').classList.remove('hidden')">
                                    <i class="fas fa-edit mr-2"></i> Set Status
                                </button>

                                <!-- Modal untuk update status dan komentar -->
                                <div id="statusModal-{{ $pengajuan->id }}" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-500 bg-opacity-50">
                                    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <h5 class="text-lg font-semibold">Update Status Pengajuan</h5>
                                            <button type="button" class="text-gray-600" onclick="document.getElementById('statusModal-{{ $pengajuan->id }}').classList.add('hidden')">
                                                &times;
                                            </button>
                                        </div>
                                        <form action="{{ route('pengajuan-cutiproses.updateStatus', $pengajuan->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                                <select name="status" class="form-select w-full p-2 border border-gray-300 rounded-md" required>
                                                    <option value="proses" {{ $pengajuan->status == 'proses' ? 'selected' : '' }}>Proses</option>
                                                    <option value="disetujui" {{ $pengajuan->status == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                                                    <option value="ditolak" {{ $pengajuan->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                                    <option value="perbaiki" {{ $pengajuan->status == 'perbaiki' ? 'selected' : '' }}>Perbaiki</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="komentar" class="block text-sm font-medium text-gray-700">Komentar</label>
                                                <textarea name="komentar" class="form-control w-full p-2 border border-gray-300 rounded-md" rows="4" placeholder="Masukkan komentar..." required></textarea>
                                            </div>
                                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md w-full hover:bg-blue-600">
                                                Simpan Status dan Komentar
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

<script>
    // SweetAlert untuk notifikasi sukses
    @if (session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
    });
    @endif
</script>
@endsection
