@extends('dashboard.layout.main')
@section('title')
    Dashboard
@endsection

@section('dashboard-content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            SURAT MASUK YANG PERLU DI PROSES
        </h2>
        {{-- <h1 class="mb-6 text-4xl font-semibold text-blue-400">SURAT MASUK YANG PERLU DI PROSES</h1> --}}
        <!-- Cards -->
        <!-- Cards -->
        <br>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            @if(Auth::guard('pegawai')->user()->divisi_id == 4)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <i data-feather="mail" class="w-5 h-5"></i>
                </div>
                <div>
                    <a href="{{ route('proses-sekretaris.index') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Perjalanan Dinas</a>
                </div>
            </div>
            @endif

            @if(Auth::guard('pegawai')->user()->divisi_id == 1)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <i data-feather="mail" class="w-5 h-5"></i>
                </div>
                <div>
                    <a href="{{ route('perjalanan-dinas.create') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Perjalanan Dinas</a>
                </div>
            </div>
            @endif

            @if(Auth::guard('pegawai')->user()->divisi_id == 5)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <i data-feather="mail" class="w-5 h-5"></i>
                </div>
                <div>
                    <a href="{{ route('perjalanan-dinas.create') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Perjalanan Dinas</a>
                </div>
            </div>
            @endif
            <!-- Card -->
            @if(Auth::guard('pegawai')->user()->divisi_id == 1)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i data-feather="archive" class="w-5 h-5"></i>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <a href="{{ route('pengajuan-cuti.create') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Pengajuan Cuti</a>
                    </p>
                </div>
            </div>
            @endif

            @if(Auth::guard('pegawai')->user()->divisi_id == 5)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i data-feather="archive" class="w-5 h-5"></i>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <a href="{{ route('pengajuan-cuti.create') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Pengajuan Cuti</a>
                    </p>
                </div>
            </div>
            @endif

            @if(Auth::guard('pegawai')->user()->divisi_id == 4)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i data-feather="archive" class="w-5 h-5"></i>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <a href="{{ route('pengajuan-cutiproses.index') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Pengajuan Cuti</a>
                    </p>
                </div>
            </div>
            @endif
            {{-- @if(Auth::guard('pegawai')->user()->divisi_id == 4 || Auth::guard('pegawai')->user()->divisi_id == 1)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-400 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i data-feather="archive" class="w-5 h-5"></i>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <a href="{{ route('disposisi.create') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                         Disposisi</a>
                    </p>
                </div>
            </div>
            @endif --}}
            @if(Auth::guard('pegawai')->user()->divisi_id == 5 || Auth::guard('pegawai')->user()->divisi_id == 1)
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-400 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i data-feather="archive" class="w-5 h-5"></i>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <a href="{{ route('disposisi.create') }}"
                        class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Disposisi </a>
                    </p>
                </div>
            </div>
            @endif
        </div>
    </div>
</main>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
@endsection
