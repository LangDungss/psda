@extends('dashboard.layout.main')

@section('title')
    Buat Pengajuan
@endsection

@section('dashboard-content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            BUAT PENGAJUAN PERJALANAN DINAS
        </h2>
        
        <!-- Form mulai -->
        <form action="{{ route('perjalanan-dinas.store') }}" method="POST">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                
                <!-- Kepada -->
                <label class="block text-sm" for="kepada">
                    <span class="text-gray-700 dark:text-gray-400">Kepada YTH</span>
                    <input type="text" id="kepada" name="kepada" placeholder="Kepada"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        value="{{ old('kepada') }}" />
                    @error('kepada')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Tujuan keberangkatan -->
                <label class="block mt-4 text-sm" for="perihal">
                    <span class="text-gray-700 dark:text-gray-400">Tujuan keberangkatan</span>
                    <textarea id="perihal" name="perihal" rows="3" placeholder="Masukkan tujuan dari keberangkatan."
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">{{ old('perihal') }}</textarea>
                    @error('perihal')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Tanggal Berangkat -->
                <label class="block mt-4 text-sm" for="tgl_berangkat">
                    <span class="text-gray-700 dark:text-gray-400">Tanggal Berangkat</span>
                    <input type="date" id="tgl_berangkat" name="tgl_berangkat" placeholder="Tanggal berangkat."
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        value="{{ old('tgl_berangkat') }}" />
                    @error('tgl_berangkat')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Tanggal Kembali -->
                <label class="block mt-4 text-sm" for="tgl_kembali">
                    <span class="text-gray-700 dark:text-gray-400">Tanggal Kembali</span>
                    <input type="date" id="tgl_kembali" name="tgl_kembali" placeholder="Tanggal kembali."
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        value="{{ old('tgl_kembali') }}" />
                    @error('tgl_kembali')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Jumlah Hari -->
                <label class="block text-sm mt-4" for="jml_hari">
                    <span class="text-gray-700 dark:text-gray-400">Jumlah Hari</span>
                    <input type="text" readonly id="jml_hari" name="jml_hari" placeholder="Jumlah hari."
                        class="block w-2/3 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        value="{{ old('jml_hari') }}" />
                </label>

                <!-- Sumber Anggaran -->
                <label class="block text-sm mt-4" for="sumber_anggaran">
                    <span class="text-gray-700 dark:text-gray-400">Sumber Anggaran</span>
                    <input type="text" id="sumber_anggaran" name="sumber_anggaran" placeholder="Sumber anggaran."
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        value="{{ old('sumber_anggaran') }}" />
                    @error('sumber_anggaran')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Anggota -->
                <label class="block text-sm mt-4" for="anggota">
                    <span class="text-gray-700 dark:text-gray-400">Anggota</span>
                    <input type="number" id="anggota" name="anggota" placeholder="Masukkan jumlah anggota."
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        value="{{ old('anggota') }}" />
                    @error('anggota')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Transportasi -->
                <label class="block text-sm mt-4" for="transportasi">
                    <span class="text-gray-700 dark:text-gray-400">Transportasi</span>
                    <input type="text" id="transportasi" name="transportasi" placeholder="Transportasi."
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                        value="{{ old('transportasi') }}" />
                    @error('transportasi')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Submit Button -->
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                        Kirim
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Script untuk menghitung jumlah hari
        const tglBerangkatInput = document.querySelector('#tgl_berangkat');
        const tglKembaliInput = document.querySelector('#tgl_kembali');
        const jmlHariInput = document.querySelector('#jml_hari');

        function calculateDays() {
            const tglBerangkat = new Date(tglBerangkatInput.value);
            const tglKembali = new Date(tglKembaliInput.value);

            if (tglBerangkat && tglKembali && tglKembali >= tglBerangkat) {
                const diffTime = tglKembali - tglBerangkat;
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                jmlHariInput.value = `${diffDays} hari`;
            } else {
                jmlHariInput.value = '';
            }
        }

        tglBerangkatInput.addEventListener('change', calculateDays);
        tglKembaliInput.addEventListener('change', calculateDays);
    </script>
@endsection
