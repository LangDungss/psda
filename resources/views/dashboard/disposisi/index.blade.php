@extends('dashboard.layout.main')

@section('title')
    Disposisi
@endsection

@section('dashboard-content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Disposisi
        </h2>

        <div class="mb-4">
            <a href="{{ route('disposisi.create') }}" class="px-4 py-2 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                Tambah Disposisi
            </a>
        </div>

        @if (count($disposisis) > 0)
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Surat Dari</th>
                            <th class="px-4 py-3">Nomor Surat</th>
                            <th class="px-4 py-3">Diteruskan Kepada</th>
                            <th class="px-4 py-3">Tindak Lanjut</th>
                            <th class="px-4 py-3">Aksi</th>
                            <th class="px-4 py-3">Surat Undangan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($disposisis as $disposisi)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $disposisi->surat_dari }}</td>
                            <td class="px-4 py-3 text-sm">{{ $disposisi->nomor_surat }}</td>
                            <td class="px-4 py-3 text-sm">{{ $disposisi->diteruskan_kepada }}</td>
                            <td class="px-4 py-3 text-sm">{{ $disposisi->tindak_lanjut }}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('disposisi.edit', $disposisi->id) }}" class="px-3 py-2 text-sm text-yellow-600 bg-yellow-100 rounded-lg hover:bg-yellow-200">
                                        Edit
                                    </a>
                                    <form action="{{ route('disposisi.destroy', $disposisi->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus disposisi ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-2 text-sm text-red-600 bg-red-100 rounded-lg hover:bg-red-200">
                                            Hapus
                                        </button>
                                    </form>
                                    <!-- Tombol Generate Surat -->
                                    <a href="{{ route('disposisi.exportPdf', $disposisi->id) }}" class="px-3 py-2 text-sm text-green-600 bg-green-100 rounded-lg hover:bg-green-200">
                                        Generate Surat
                                    </a>
                                    <!-- Tombol Preview PDF -->
                                    <a href="{{ route('disposisi.previewPdf', $disposisi->id) }}" class="px-3 py-2 text-sm text-blue-600 bg-blue-100 rounded-lg hover:bg-blue-200">
                                        Preview Surat
                                    </a>

                                </div>
                            </td>
                            <td class="px-4 py-3">
                                @if ($disposisi->file_surat)
                                    <a href="{{ Storage::url($disposisi->file_surat) }}" target="_blank" class="text-blue-500">
                                        Lihat Surat
                                    </a>
                                @else
                                    <span class="text-gray-500">Tidak ada file</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="px-4 py-3">
            <hr>
            <h3 class="text-lg text-center font-semibold text-gray-500 dark:text-gray-200 py-2">
                Belum ada disposisi.
            </h3>
            <hr>
        </div>
        @endif
    </div>
</main>
@endsection
