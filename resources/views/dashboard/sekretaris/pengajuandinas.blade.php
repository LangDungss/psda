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
                                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none mt-2"
                                    onclick="document.getElementById('statusModal-{{ $pengajuan->id }}').classList.remove('hidden')">
                                    <i class="fas fa-edit mr-2"></i> Set Status
                                </button>

                                <!-- Modal for setting status and comment -->
                                <div id="statusModal-{{ $pengajuan->id }}" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-500 bg-opacity-50">
                                    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3 p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <h5 class="text-lg font-semibold">Update Status Pengajuan</h5>
                                            <button type="button" class="text-gray-600" onclick="document.getElementById('statusModal-{{ $pengajuan->id }}').classList.add('hidden')">
                                                &times;
                                            </button>
                                        </div>
                                        <form action="{{ route('pengajuan.updateStatus', $pengajuan->id) }}" method="POST">
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
                                                <label for="comment" class="block text-sm font-medium text-gray-700">Komentar</label>
                                                <textarea name="comment" class="form-control w-full p-2 border border-gray-300 rounded-md" rows="4" placeholder="Masukkan komentar..." required></textarea>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

<script>
    
    function showStatusModal(id, currentStatus) {
        Swal.fire({
            title: 'Konfirmasi',
            text: "Apakah Anda yakin ingin mengubah status pengajuan ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Ubah Status',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`statusModal-${id}`).classList.remove('hidden');
            }
        });
    }
</script>
@endsection