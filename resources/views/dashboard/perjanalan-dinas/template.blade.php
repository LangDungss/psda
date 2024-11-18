@extends('dashboard.layout.main')

@section('title')
    Form Input Pengajuan Perjalanan Dinas
@endsection

@section('dashboard-content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Form Input Pengajuan Perjalanan Dinas
        </h2>

        <form action="{{ route('perjalanan-dinas.store') }}" method="POST" novalidate>
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                
                <!-- Kepada Yth -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Kepada Yth</span>
                    <input type="text" name="kepada" placeholder="Kepada Yth" 
                           class="block w-full mt-1 text-sm form-input" value="Kepala Sekolah" required />
                </label>

                <!-- Dari -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Dari</span>
                    <input type="text" name="dari" placeholder="Dari" 
                           class="block w-full mt-1 text-sm form-input" value="Guru" required />
                </label>

                <!-- Tanggal -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Tanggal</span>
                    <input type="date" name="tanggal" class="block w-full mt-1 text-sm form-input" 
                           value="2024-11-10" required />
                </label>

                <!-- Nomor Surat -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nomor Surat</span>
                    <input type="text" name="nomor" placeholder="Nomor Surat" 
                           class="block w-full mt-1 text-sm form-input" value="123/ABC/2024" required />
                </label>

                <!-- Sifat -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Sifat</span>
                    <input type="text" name="sifat" placeholder="Sifat" 
                           class="block w-full mt-1 text-sm form-input" value="Penting" required />
                </label>

                <!-- Hal -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Hal</span>
                    <input type="text" name="hal" placeholder="Hal" 
                           class="block w-full mt-1 text-sm form-input" value="Perjalanan Dinas" required />
                </label>

                <!-- Dasar -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Dasar</span>
                    <textarea name="dasar" placeholder="Dasar" class="block w-full mt-1 text-sm form-textarea" rows="3" required>Menindaklanjuti instruksi Kepala Sekolah</textarea>
                </label>

                <!-- Urusan -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Urusan</span>
                    <input type="text" name="urusan" placeholder="Urusan" 
                           class="block w-full mt-1 text-sm form-input" value="Pendidikan" required />
                </label>

                <!-- Tujuan -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Tujuan</span>
                    <input type="text" name="tujuan" placeholder="Tujuan" 
                           class="block w-full mt-1 text-sm form -input" value="Kota Jakarta" required />
                </label>

                <!-- Lama Perjalanan Dinas -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Lama Perjalanan Dinas</span>
                    <input type="text" name="lama_perjalanan" placeholder="Lama Perjalanan Dinas" 
                           class="block w-full mt-1 text-sm form-input" value="5 Hari" required />
                </label>

                <!-- Sumber Pembayaran -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Sumber Pembayaran</span>
                    <input type="text" name="sumber_pembayaran" placeholder="Sumber Pembayaran" 
                           class="block w-full mt-1 text-sm form-input" value="DIPA" required />
                </label>

                <!-- Jumlah yang berpergian -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jumlah yang Berpergian</span>
                    <input type="number" id="jumlah_berpergian" name="jumlah_berpergian" placeholder="Jumlah yang berpergian" 
                           class="block w-full mt-1 text-sm form-input" value="3" required min="1"/>
                </label>

                <!-- Staf Pendamping -->
                <div id="staf_fields"></div>

                <!-- Pejabat yang bertugas -->
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">Pejabat yang Bertugas</h3>
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nama Pejabat</span>
                    <input type="text" name="pejabat_nama" placeholder="Nama Pejabat" 
                           class="block w-full mt-1 text-sm form-input" value="Dr. Joko Widodo" required />
                </label>
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Pangkat</span>
                    <input type="text" name="pejabat_pangkat" placeholder="Pangkat" 
                           class="block w-full mt-1 text-sm form-input" value="PNS" required />
                </label>
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">NIP</span>
                    <input type="text" name="pejabat_nip" placeholder="NIP" 
                           class="block w-full mt-1 text-sm form-input" value="19831205" required />
                </label>
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                    <input type="text" name="pejabat_jabatan" placeholder="Jabatan" 
                           class="block w-full mt-1 text-sm form-input" value="Kepala Sekolah" required />
                </label>

                <!-- Transportasi -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Transportasi</span>
                    <input type="text" name="transportasi" placeholder="Transportasi yang Digunakan" 
                           class="block w-full mt-1 text-sm form-input" value="Kendaraan Dinas" required />
                </label>

                <!-- Submit Button -->
                <div class="mt-6 text-right">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700">
                        Ajukan
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- SweetAlert2 Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('submit-button').addEventListener('click', function () {
            Swal.fire({
                title: 'Konfirmasi Pengajuan',
                text: "Apakah Anda yakin ingin mengajukan perjalanan dinas ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Ajukan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-perjalanan-dinas').submit();
                }
            });
        });

        document.getElementById('jumlah_berpergian').addEventListener('input', function () {
            const jumlah = parseInt(this.value);
            const stafFieldsContainer = document.getElementById('staf_fields');
            stafFieldsContainer.innerHTML = '';

            for (let i = 0; i < jumlah; i++) {
                const newStafField = `
                    <div class="staf-form mb-4">
                        <h4 class="font-semibold text-gray-700 dark:text-gray-200">Staf Pendamping ${i + 1}</h4>
                        <label class="block text-sm mb-2">
                            <span class="text-gray-700 dark:text-gray-400">Nama</span>
                            <input type="text" name="staf_pendamping[${i}][nama]" placeholder="Nama Staf Pendamping" 
                                   class="block w-full mt-1 text-sm form-input" required />
                        </label>
                        <label class="block text-sm mb-2">
                            <span class="text-gray-700 dark:text-gray-400">NIP</span>
                            <input type="text" name="staf_pendamping[${i}][nip]" placeholder="NIP Staf Pendamping" 
                                   class="block w-full mt-1 text-sm form-input" required />
                        </label>
                        <label class="block text-sm mb-2">
                            <span class="text-gray-700 dark:text-gray-400">Pangkat/Gol</span>
                            <input type="text" name="staf_pendamping[${i}][pangkat]" placeholder="Pangkat/Gol Staf Pendamping" 
                                   class="block w-full mt-1 text-sm form-input" required />
                        </label>
                        <label class="block text-sm mb-2">
                            <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                            <input type="text" name="staf_pendamping[${i}][jabatan]" placeholder="Jabatan Staf Pendamping" 
                                   class="block w-full mt-1 text-sm form-input" required />
                        </label>
                    </div>
                `;
                stafFieldsContainer.insertAdjacentHTML('beforeend', newStafField);
            }
        });
    </script>
@endsection
