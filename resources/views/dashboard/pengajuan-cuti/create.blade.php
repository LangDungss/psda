@extends('dashboard.layout.main')

@section('title')
    Form Pengajuan Cuti
@endsection

@section('dashboard-content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Form Pengajuan Cuti
        </h2>

        <form action="{{ route('pengajuan-cuti.store') }}" method="POST" novalidate>
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                
                <!-- Nomor Surat -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nomor Surat</span>
                    <input type="text" name="nomor_surat" placeholder="Nomor Surat" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- Nama -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nama</span>
                    <input type="text" name="nama" placeholder="Nama" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- NIP -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">NIP</span>
                    <input type="text" name="nip" placeholder="NIP" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- Jabatan -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                    <input type="text" name="jabatan" placeholder="Jabatan" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- Masa Kerja -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Masa Kerja</span>
                    <input type="text" name="masa_kerja" placeholder="Masa Kerja (contoh: 5 Tahun)" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- Unit Kerja -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Unit Kerja</span>
                    <input type="text" name="unit_kerja" placeholder="Unit Kerja" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- Jenis Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jenis Cuti</span>
                    <select name="jenis_cuti" class="block w-full mt-1 text-sm form-select" required>
                        <option value="" disabled selected>Pilih Jenis Cuti</option>
                        <option value="Cuti Tahunan">Cuti Tahunan</option>
                        <option value="Cuti Besar">Cuti Besar</option>
                        <option value="Cuti Sakit">Cuti Sakit</option>
                        <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                        <option value="Cuti Alasan Penting">Cuti Alasan Penting</option>
                        <option value="Cuti Lain-lain">Cuti Lain-lain</option>
                    </select>
                </label>

                <!-- Alasan Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Alasan Cuti</span>
                    <textarea name="alasan_cuti" placeholder="Tuliskan alasan cuti" 
                              class="block w-full mt-1 text-sm form-textarea" rows="3" required></textarea>
                </label>

                <!-- Lama Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Lama Cuti (dalam hari)</span>
                    <input type="number" name="lama_cuti" placeholder="Contoh: 10" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- Alamat Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Alamat Selama Cuti</span>
                    <input type="text" name="alamat_cuti" placeholder="Alamat Selama Cuti" 
                           class="block w-full mt-1 text-sm form-input" required />
                </label>

                <!-- Catatan Cuti -->
                <div class="mb-4">
                    <span class="block text-gray-700 dark:text-gray-400">Catatan Cuti</span>
                    <table class="w-full mt-2 text-sm">
                        <thead>
                            <tr class="text-left border-b dark:border-gray-700">
                                <th class="py-2">Jenis Cuti</th>
                                <th class="py-2">Tahun</th>
                                <th class="py-2">Sisa</th>
                                <th class="py-2">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cuti Tahunan</td>
                                <td><input type="text" name="catatan_cuti[cuti_tahunan][tahun]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_tahunan][sisa]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_tahunan][keterangan]" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Besar</td>
                                <td><input type="text" name="catatan_cuti[cuti_besar][tahun]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_besar][sisa]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_besar][keterangan]" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Sakit</td>
                                <td><input type="text" name="catatan_cuti[cuti_sakit][tahun]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_sakit][sisa]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_sakit][keterangan]" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Melahirkan</td>
                                <td><input type="text" name="catatan_cuti[cuti_melahirkan][tahun]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_melahirkan][sisa]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_melahirkan][keterangan]" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Karena Alasan Penting</td>
                                <td><input type="text" name="catatan_cuti[cuti_alasan_penting][tahun]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_alasan_penting][sisa]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_alasan_penting][keterangan]" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Di Luar Tanggungan Negara</td>
                                <td><input type="text" name="catatan_cuti[cuti_luar_tanggungan][tahun]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_luar_tanggungan][sisa]" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_luar_tanggungan][keterangan]" class="form-input w-full"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Submit Button -->
                <div class="mt-6 text-right">
                    <button id="submit-button" type="button" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700">
                        Ajukan Cuti
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('submit-button').addEventListener('click', function () {
            Swal.fire({
                title: 'Konfirmasi Pengajuan',
                text: 'Apakah Anda yakin ingin mengajukan cuti ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Ajukan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Kirimkan form jika pengguna mengonfirmasi
                    document.querySelector('form').submit();
                }
            });
        });
    </script>
@endsection
