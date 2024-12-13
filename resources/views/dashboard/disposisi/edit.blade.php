@extends('dashboard.layout.main')

@section('title')
    Edit Disposisi
@endsection

@section('dashboard-content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Disposisi
        </h2>

        <div class="w-full max-w-3xl p-6 bg-white rounded-lg shadow-md">
            @if ($errors->any())
                <div class="mb-4">
                    <div class="p-4 text-sm text-red-600 bg-red-100 border border-red-400 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form action="{{ route('disposisi.update', $disposisi->id) }}" method="POST" id="editForm">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="surat_dari" class="block text-sm font-medium text-gray-700">Surat Dari</label>
                    <input type="text" name="surat_dari" id="surat_dari" value="{{ old('surat_dari', $disposisi->surat_dari) }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="diterima" class="block text-sm font-medium text-gray-700">Diterima</label>
                    <input type="date" name="diterima" id="diterima" value="{{ old('diterima', $disposisi->diterima) }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="tanggal_surat" class="block text-sm font-medium text-gray-700">Tanggal Surat</label>
                    <input type="date" name="tanggal_surat" id="tanggal_surat" value="{{ old('tanggal_surat', $disposisi->tanggal_surat) }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="nomor_surat" class="block text-sm font-medium text-gray-700">Nomor Surat</label>
                    <input type="text" name="nomor_surat" id="nomor_surat" value="{{ old('nomor_surat', $disposisi->nomor_surat) }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="nomor_agenda" class="block text-sm font-medium text-gray-700">Nomor Agenda</label>
                    <input type="text" name="nomor_agenda" id="nomor_agenda" value="{{ old('nomor_agenda', $disposisi->nomor_agenda) }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- New "Hal" Field -->
                <div class="mb-4">
                    <label for="hal" class="block text-sm font-medium text-gray-700">Hal</label>
                    <input type="text" name="hal" id="hal" value="{{ old('hal', $disposisi->hal) }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="catatan_sekretaris" class="block text-sm font-medium text-gray-700">Catatan Sekretaris</label>
                    <textarea name="catatan_sekretaris" id="catatan_sekretaris" rows="4" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('catatan_sekretaris', $disposisi->catatan_sekretaris) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="diteruskan_kepada" class="block text-sm font-medium text-gray-700">Diteruskan Kepada</label>
                    <input type="text" name="diteruskan_kepada" id="diteruskan_kepada" value="{{ old('diteruskan_kepada', $disposisi->diteruskan_kepada) }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="tindak_lanjut" class="block text-sm font-medium text-gray-700">Tindak Lanjut</label>
                    <textarea name="tindak_lanjut" id="tindak_lanjut" rows="4" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('tindak_lanjut', $disposisi->tindak_lanjut) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="catatan_kepaladinas" class="block text-sm font-medium text-gray-700">Catatan Kepala Dinas</label>
                    <textarea name="catatan_kepaladinas" id="catatan_kepaladinas" rows="4" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('catatan_kepaladinas', $disposisi->catatan_kepaladinas) }}</textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                        Update Disposisi
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('editForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        Swal.fire({
            title: 'Konfirmasi',
            text: "Apakah Anda yakin ingin mengupdate disposisi?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Update!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); // Submit the form if confirmed
            }
        });
    });
</script>
@endsection
