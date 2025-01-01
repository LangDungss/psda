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
                    <input type="text" name="nomor_surat" value="12345/CUTI/2025" placeholder="Nomor Surat" 
                           class="block w-full mt-1 text-sm form-input @error('nomor_surat') border-red-500 @enderror" required />
                    @error('nomor_surat')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Nama -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nama</span>
                    <input type="text" name="nama" value="John Doe" placeholder="Nama" 
                           class="block w-full mt-1 text-sm form-input @error('nama') border-red-500 @enderror" required />
                    @error('nama')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- NIP -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">NIP</span>
                    <input type="text" name="nip" value="1234567890" placeholder="NIP" 
                           class="block w-full mt-1 text-sm form-input @error('nip') border-red-500 @enderror" required />
                    @error('nip')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Jabatan -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                    <input type="text" name="jabatan" value="Manager" placeholder="Jabatan" 
                           class="block w-full mt-1 text-sm form-input @error('jabatan') border-red-500 @enderror" required />
                    @error('jabatan')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Masa Kerja -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Masa Kerja</span>
                    <input type="text" name="masa_kerja" value="6 Tahun" placeholder="Masa Kerja (contoh: 5 Tahun)" 
                           class="block w-full mt-1 text-sm form-input @error('masa_kerja') border-red-500 @enderror" required />
                    @error('masa_kerja')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Unit Kerja -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Unit Kerja</span>
                    <input type="text" name="unit_kerja" value="HRD" placeholder="Unit Kerja" 
                           class="block w-full mt-1 text-sm form-input @error('unit_kerja') border-red-500 @enderror" required />
                    @error('unit_kerja')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Jenis Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jenis Cuti</span>
                    <select name="jenis_cuti" class="block w-full mt-1 text-sm form-select @error('jenis_cuti') border-red-500 @enderror" required>
                        <option value="" disabled>Pilih Jenis Cuti</option>
                        <option value="Cuti Tahunan" selected>Cuti Tahunan</option>
                        <option value="Cuti Besar">Cuti Besar</option>
                        <option value="Cuti Sakit">Cuti Sakit</option>
                        <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                        <option value="Cuti Alasan Penting">Cuti Alasan Penting</option>
                        <option value="Cuti Lain-lain">Cuti Lain-lain</option>
                    </select>
                    @error('jenis_cuti')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Alasan Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Alasan Cuti</span>
                    <textarea name="alasan_cuti" placeholder="Tuliskan alasan cuti" 
                              class="block w-full mt-1 text-sm form-textarea @error('alasan_cuti') border-red-500 @enderror" rows="3" required>Cuti Tahunan untuk istirahat</textarea>
                    @error('alasan_cuti')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Lama Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Lama Cuti (dalam hari)</span>
                    <input type="number" name="lama_cuti" value="10" placeholder="Contoh: 10" 
                           class="block w-full mt-1 text-sm form-input @error('lama_cuti') border-red-500 @enderror" required />
                    @error('lama_cuti')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </label>
        
                <!-- Alamat Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Alamat Selama Cuti</span>
                    <input type="text" name="alamat_cuti" value="Jl. Merdeka No. 10, Jakarta" placeholder="Alamat Selama Cuti" 
                           class="block w-full mt-1 text-sm form-input @error('alamat_cuti') border-red-500 @enderror" required />
                    @error('alamat_cuti')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
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
                                <td><input type="text" name="catatan_cuti[cuti_tahunan][tahun]" value="2025" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_tahunan][sisa]" value="10" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_tahunan][keterangan]" value="Cuti reguler tahunan" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Besar</td>
                                <td><input type="text" name="catatan_cuti[cuti_besar][tahun]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_besar][sisa]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_besar][keterangan]" value="" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Sakit</td>
                                <td><input type="text" name="catatan_cuti[cuti_sakit][tahun]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_sakit][sisa]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_sakit][keterangan]" value="" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Melahirkan</td>
                                <td><input type="text" name="catatan_cuti[cuti_melahirkan][tahun]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_melahirkan][sisa]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_melahirkan][keterangan]" value="" class="form-input w-full"></td>
                            </tr>
                            <tr>
                                <td>Cuti Alasan Penting</td>
                                <td><input type="text" name="catatan_cuti[cuti_alasan_penting][tahun]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_alasan_penting][sisa]" value="" class="form-input w-full"></td>
                                <td><input type="text" name="catatan_cuti[cuti_alasan_penting][keterangan]" value="" class="form-input w-full"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


        
                <!-- Button Submit -->
                <div class="text-right">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg">
                        Kirim Pengajuan
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
