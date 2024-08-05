@extends('dashboard.layout.main')
@section('title')
    Buat Pengajuan
@endsection

@section('dashboard-content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            BUAT PENGAJUAN PERJALAN DINAS
        </h2>
        <!-- Form mulai -->
        <form action="{{ route('perjalanan-dinas.store') }}" method="POST">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <label class="block text-sm" for="kepada" id="kepada">
                    <span class="text-gray-700 dark:text-gray-400">Kepada YTH</span>
                    <input type="text"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="kepada" placeholder="kepada" />
                </label>
                <label class="block mt-4 text-sm" for="perihal" id="perihal">
                    <span class="text-gray-700 dark:text-gray-400">Tujuan keberangkatan</span>
                    <textarea name="perihal"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" placeholder="masukkan tujuan dari keberangkatan."></textarea>
                </label>

                {{-- tanggal --}}
                <label class="block mt-4 text-sm" for="tgl_berangkat" id="tgl_berangkat">
                    <span class="text-gray-700 dark:text-gray-400">Tanggal Berangkat</span>
                    <input type="date"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="tgl_berangkat" placeholder="Tanggal berangkat." />
                </label>
                <label class="block mt-4 text-sm" for="tgl_kembali" id="tgl_kembali">
                    <span class="text-gray-700 dark:text-gray-400">Tanggal Kembali</span>
                    <input type="date"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="tgl_kembali" placeholder="Tanggal kembali." />
                </label>

                <label class="block text-sm mt-4" for="jml_hari" id="jml_hari">
                    <span class="text-gray-700 dark:text-gray-400">Jumlah hari</span>
                    <input type="text" disabled
                        class="block w-2/3 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="jml_hari" placeholder="jumlah hari." />
                </label>

                <label class="block text-sm mt-4" for="sumber_anggaran" id="sumber_anggaran">
                    <span class="text-gray-700 dark:text-gray-400">Sumber Anggaran</span>
                    <input type="text"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="sumber_anggaran" placeholder="Sumber anggaran." />
                </label>

                <label class="block text-sm mt-4" for="anggota" id="anggota">
                    <span class="text-gray-700 dark:text-gray-400">Anggota</span>
                    <input type="text"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="anggota" placeholder="Masukkan anggota." />
                </label>

                <label class="block text-sm mt-4" for="transportasi" id="transportasi">
                    <span class="text-gray-700 dark:text-gray-400">Transportasi</span>
                    <input type="text"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="transportasi" placeholder="transportasi." />
                </label>

                {{-- Button --}}
                <div class="flex justify-end mt-4">
                    <button
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                        type="submit">
                        Kirim
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the date inputs and the result input
        const tglBerangkatInput = document.querySelector('input[name="tgl_berangkat"]');
        const tglKembaliInput = document.querySelector('input[name="tgl_kembali"]');
        const jmlHariInput = document.querySelector('input[name="jml_hari"]');

        // Function to calculate and display the number of days
        function calculateDays() {
            const tglBerangkat = new Date(tglBerangkatInput.value);
            const tglKembali = new Date(tglKembaliInput.value);
            const diffTime = Math.abs(tglKembali - tglBerangkat);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            jmlHariInput.value = diffDays +' hari';
        }

        // Add event listeners to the date inputs
        tglBerangkatInput.addEventListener('change', calculateDays);
        tglKembaliInput.addEventListener('change', calculateDays);
    </script>
@endsection
