@extends('dashboard.layout.main')

@section('title')
    Tambah Disposisi
@endsection

@section('dashboard-content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Tambah Disposisi
        </h2>

        <div class="w-full max-w-3xl p-6 bg-white rounded-lg shadow-md">
            
            <!-- Error Alert -->
            @if($errors->any())
                <div class="mb-4">
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                        <p class="font-bold">Ada Kesalahan pada Formulir:</p>
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form action="{{ route('disposisi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="surat_dari" class="block text-sm font-medium text-gray-700">Surat Dari</label>
                    <input type="text" name="surat_dari" id="surat_dari" value="{{ old('surat_dari', 'Kepala Dinas Pendidikan') }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    @error('surat_dari')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="diterima" class="block text-sm font-medium text-gray-700">Diterima</label>
                    <input type="date" name="diterima" id="diterima" value="{{ old('diterima', '2024-12-05') }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    @error('diterima')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tanggal_surat" class="block text-sm font-medium text-gray-700">Tanggal Surat</label>
                    <input type="date" name="tanggal_surat" id="tanggal_surat" value="{{ old('tanggal_surat', '2024-12-03') }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    @error('tanggal_surat')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nomor_surat" class="block text-sm font-medium text-gray-700">Nomor Surat</label>
                    <input type="text" name="nomor_surat" id="nomor_surat" value="{{ old('nomor_surat', '123/SD/2024') }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    @error('nomor_surat')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nomor_agenda" class="block text-sm font-medium text-gray-700">Nomor Agenda</label>
                    <input type="text" name="nomor_agenda" id="nomor_agenda" value="{{ old('nomor_agenda', '456/AG/2024') }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    @error('nomor_agenda')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="hal" class="block text-sm font-medium text-gray-700">Hal</label>
                    <input type="text" name="hal" id="hal" value="{{ old('hal', 'Permohonan Dana Kegiatan') }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    @error('hal')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="catatan_sekretaris" class="block text-sm font-medium text-gray-700">Catatan Sekretaris</label>
                    <textarea name="catatan_sekretaris" id="catatan_sekretaris" rows="4" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('catatan_sekretaris', 'Segera diproses dan ditindaklanjuti.') }}</textarea>
                    @error('catatan_sekretaris')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Upload File Surat Undangan -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Upload File Surat (PDF)</span>
                    <input type="file" name="file_surat" accept=".pdf" 
                           class="block w-full mt-1 text-sm form-input @error('file_surat') border-red-500 @enderror" required />
                    @error('file_surat')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
                
               
                <div class="mb-4 hidden">
                    <label for="diteruskan_kepada" class="block text-sm font-medium text-gray-700">Diteruskan Kepada</label>
                    <input type="text" name="diteruskan_kepada" id="diteruskan_kepada" value="{{ old('diteruskan_kepada', '-') }}" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('diteruskan_kepada')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-4 hidden">
                    <label for="tindak_lanjut" class="block text-sm font-medium text-gray-700">Tindak Lanjut</label>
                    <textarea name="tindak_lanjut" id="tindak_lanjut" rows="4" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('tindak_lanjut', '-') }}</textarea>
                    @error('tindak_lanjut')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-4 hidden">
                    <label for="catatan_kepaladinas" class="block text-sm font-medium text-gray-700">Catatan Kepala Dinas</label>
                    <textarea name="catatan_kepaladinas" id="catatan_kepaladinas" rows="4" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('catatan_kepaladinas', '-') }}</textarea>
                    @error('catatan_kepaladinas')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                

                <div class="mb-4 text-right">
                    <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Simpan Disposisi
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
