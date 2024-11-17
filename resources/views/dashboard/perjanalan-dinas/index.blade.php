@extends('dashboard.layout.main')

@section('title')
    Riwayat Pengajuan
@endsection

@section('dashboard-content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            RIWAYAT PENGAJUAN
        </h2>

        @if (count($pengajuans) > 0)
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Kepada</th>
                            <th class="px-4 py-3">Sifat</th>
                            <th class="px-4 py-3">Urusan</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($pengajuans as $p)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $p->kepada }}</td>
                            <td class="px-4 py-3 text-sm">{{ $p->sifat }}</td>
                            <td class="px-4 py-3 text-sm">{{ $p->urusan }}</td>
                            <td class="px-4 py-3 text-sm">
                                <span class="px-2 py-1 text-xs font-semibold leading-tight 
                                    {{ $p->status == 'proses' ? 'bg-yellow-400 text-yellow-900' :
                                    ($p->status == 'disetujui' ? 'bg-green-400 text-green-900' :
                                    ($p->status == 'ditolak' ? 'bg-red-400 text-red-900' :
                                    ($p->status == 'perbaiki' ? 'bg-blue-400 text-blue-900' : 'bg-gray-200 text-gray-800'))) }} rounded-full">
                                    {{ ucfirst($p->status) }}
                                </span>
                                <button onclick="showKomentarModal(`{{ $p->komentar->first()->komentar ?? 'Belum ada komentar.' }}`)"
                                    class="ml-2 px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                                    Notif Status
                                </button>
                                
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('perjalanan-dinas.edit', $p->id) }}"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
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
                Belum ada pengajuan perjalanan dinas.
            </h3>
            <hr>
        </div>
        @endif
    </div>
</main>

<div id="modalKomentar" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg w-1/3">
        <div class="px-4 py-2 bg-blue-500 text-white rounded-t-lg">
            <h2 class="text-lg font-semibold">Komentar</h2>
        </div>
        <div class="px-4 py-3">
            <p id="komentarContent" class="text-gray-700">Memuat komentar...</p>
        </div>
        <div class="flex justify-end px-4 py-2">
            <button onclick="closeModal()"
                class="px-3 py-1 text-sm font-medium text-white bg-gray-500 rounded-md hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">
                Tutup
            </button>
        </div>
    </div>
</div>

<script>
    function showKomentarModal(komentar) {
        const modal = document.getElementById('modalKomentar');
        const komentarContent = document.getElementById('komentarContent');

        komentarContent.textContent = komentar; // Tampilkan komentar yang diterima
        modal.classList.remove('hidden'); // Tampilkan modal
    }

    function closeModal() {
        const modal = document.getElementById('modalKomentar');
        modal.classList.add('hidden'); // Sembunyikan modal
    }
</script>

@endsection
