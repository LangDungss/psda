@extends('dashboard.layout.main')

@section('title')
    Form Edit Pengajuan Cuti
@endsection

@section('dashboard-content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Edit Pengajuan Cuti
        </h2>

        <!-- Form Edit Pengajuan Cuti -->
        <form action="{{ route('pengajuan-cuti.update', $pengajuanCuti->id) }}" method="POST" novalidate>
            @csrf
            @method('PUT') <!-- Use PUT method for update -->
            
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                
                <!-- Nomor Surat -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nomor Surat</span>
                    <input type="text" name="nomor_surat" placeholder="Nomor Surat" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('nomor_surat', $pengajuanCuti->nomor_surat) }}" />
                </label>

                <!-- Nama -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nama</span>
                    <input type="text" name="nama" placeholder="Nama" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('nama', $pengajuanCuti->nama) }}" required />
                </label>

                <!-- NIP -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">NIP</span>
                    <input type="text" name="nip" placeholder="NIP" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('nip', $pengajuanCuti->nip) }}" required />
                </label>

                <!-- Jabatan -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                    <input type="text" name="jabatan" placeholder="Jabatan" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('jabatan', $pengajuanCuti->jabatan) }}" required />
                </label>

                <!-- Masa Kerja -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Masa Kerja</span>
                    <input type="text" name="masa_kerja" placeholder="Masa Kerja (contoh: 5 Tahun)" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('masa_kerja', $pengajuanCuti->masa_kerja) }}" required />
                </label>

                <!-- Unit Kerja -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Unit Kerja</span>
                    <input type="text" name="unit_kerja" placeholder="Unit Kerja" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('unit_kerja', $pengajuanCuti->unit_kerja) }}" required />
                </label>

                <!-- Jenis Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Jenis Cuti</span>
                    <select name="jenis_cuti" class="block w-full mt-1 text-sm form-select" required>
                        <option value="" disabled>Pilih Jenis Cuti</option>
                        <option value="Cuti Tahunan" {{ old('jenis_cuti', $pengajuanCuti->jenis_cuti) == 'Cuti Tahunan' ? 'selected' : '' }}>Cuti Tahunan</option>
                        <option value="Cuti Besar" {{ old('jenis_cuti', $pengajuanCuti->jenis_cuti) == 'Cuti Besar' ? 'selected' : '' }}>Cuti Besar</option>
                        <option value="Cuti Sakit" {{ old('jenis_cuti', $pengajuanCuti->jenis_cuti) == 'Cuti Sakit' ? 'selected' : '' }}>Cuti Sakit</option>
                        <option value="Cuti Melahirkan" {{ old('jenis_cuti', $pengajuanCuti->jenis_cuti) == 'Cuti Melahirkan' ? 'selected' : '' }}>Cuti Melahirkan</option>
                        <option value="Cuti Alasan Penting" {{ old('jenis_cuti', $pengajuanCuti->jenis_cuti) == 'Cuti Alasan Penting' ? 'selected' : '' }}>Cuti Alasan Penting</option>
                        <option value="Cuti Lain-lain" {{ old('jenis_cuti', $pengajuanCuti->jenis_cuti) == 'Cuti Lain-lain' ? 'selected' : '' }}>Cuti Lain-lain</option>
                    </select>
                </label>

                <!-- Alasan Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Alasan Cuti</span>
                    <textarea name="alasan_cuti" placeholder="Tuliskan alasan cuti" 
                              class="block w-full mt-1 text-sm form-textarea" rows="3" required>{{ old('alasan_cuti', $pengajuanCuti->alasan_cuti) }}</textarea>
                </label>

                <!-- Lama Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Lama Cuti (dalam hari)</span>
                    <input type="number" name="lama_cuti" placeholder="Contoh: 10" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('lama_cuti', $pengajuanCuti->lama_cuti) }}" required />
                </label>

                <!-- Alamat Cuti -->
                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Alamat Selama Cuti</span>
                    <input type="text" name="alamat_cuti" placeholder="Alamat Selama Cuti" 
                           class="block w-full mt-1 text-sm form-input" value="{{ old('alamat_cuti', $pengajuanCuti->alamat_cuti) }}" required />
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
                            <!-- Loop over existing catatan_cuti and pre-fill the data -->
                            @foreach(json_decode($pengajuanCuti->catatan_cuti, true) as $key => $catatan)
                                <tr>
                                    <td>{{ ucfirst(str_replace('_', ' ', $key)) }}</td>
                                    <td><input type="text" name="catatan_cuti[{{ $key }}][tahun]" class="form-input w-full" value="{{ $catatan['tahun'] }}"></td>
                                    <td><input type="text" name="catatan_cuti[{{ $key }}][sisa]" class="form-input w-full" value="{{ $catatan['sisa'] }}"></td>
                                    <td><input type="text" name="catatan_cuti[{{ $key }}][keterangan]" class="form-input w-full" value="{{ $catatan['keterangan'] }}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Submit Button -->
                <div class="mt-6 text-right">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
