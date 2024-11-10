@extends('dashboard.layout.main')
@section('title')
    Edit Pengajuan
@endsection

@section('dashboard-content')
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Pengajuan
            </h2>
            <form id="edit-form" action="{{ route('perjalanan-dinas.update', $pengajuan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                
                    <!-- Kepada Yth -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Kepada Yth</span>
                        <input type="text" name="kepada" placeholder="Kepada Yth" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->kepada }}" required />
                    </label>

                    <!-- Dari -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Dari</span>
                        <input type="text" name="dari" placeholder="Dari" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->dari }}" required />
                    </label>

                    <!-- Tanggal -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Tanggal</span>
                        <input type="date" name="tanggal" class="block w-full mt-1 text-sm form-input" 
                               value="{{ $pengajuan->tanggal->format('Y-m-d') }}" required />
                    </label>

                    <!-- Nomor Surat -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Nomor Surat</span>
                        <input type="text" name="nomor" placeholder="Nomor Surat" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->nomor }}" required />
                    </label>

                    <!-- Sifat -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Sifat</span>
                        <input type="text" name="sifat" placeholder="Sifat" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->sifat }}" required />
                    </label>

                    <!-- Hal -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Hal</span>
                        <input type="text" name="hal" placeholder="Hal" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->hal }}" required />
                    </label>

                    <!-- Dasar -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Dasar</span>
                        <textarea name="dasar" placeholder="Dasar" class="block w-full mt-1 text-sm form-textarea" rows="3" required>{{ $pengajuan->dasar }}</textarea>
                    </label>

                    <!-- Urusan -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Urusan</span>
                        <input type="text" name="urusan" placeholder="Urusan" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->urusan }}" required />
                    </label>

                    <!-- Tujuan -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Tujuan</span>
                        <input type="text" name="tujuan" placeholder="Tujuan" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->tujuan }}" required />
                    </label>

                    <!-- Lama Perjalanan Dinas -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Lama Perjalanan Dinas</span>
                        <input type="text" name="lama_perjalanan" placeholder="Lama Perjalanan Dinas" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->lama_perjalanan }}" required />
                    </label>

                    <!-- Sumber Pembayaran -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Sumber Pembayaran</span>
                        <input type="text" name="sumber_pembayaran" placeholder="Sumber Pembayaran" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->sumber_pembayaran }}" required />
                    </label>

                    <!-- Jumlah yang berpergian -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Jumlah yang Berpergian</span>
                        <input type="number" id="jumlah_berpergian" name="jumlah_berpergian" placeholder="Jumlah yang berpergian" 
                               class="block w-full mt-1 text-sm form-input" value="{{ old('jumlah_berpergian', $pengajuan->jumlah_berpergian) }}" required min="1"/>
                        @error('jumlah_berpergian')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>

                    <!-- Staf Pendamping -->
                    <div id="staf_fields" class="mb-4">
                        @php
                            $stafPendamping = is_array($pengajuan->staf_pendamping) ? $pengajuan->staf_pendamping : json_decode($pengajuan->staf_pendamping, true) ?? [];
                        @endphp
                        @foreach($stafPendamping as $index => $staf)
                            <div class="staf-form mb-4">
                                <h4 class="font-semibold text-gray-700 dark:text-gray-200">Staf Pendamping {{ $index + 1 }}</h4>
                                <label class="block text-sm mb-2">
                                    <span class="text-gray-700 dark:text-gray-400">Nama</span>
                                    <input type="text" name="staf_pendamping[{{ $index }}][nama]" placeholder="Nama Staf Pendamping" 
                                           class="block w-full mt-1 text-sm form-input" value="{{ old("staf_pendamping.{$index}.nama", $staf['nama']) }}" required />
                                    @error("staf_pendamping.{$index}.nama")
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block text-sm mb-2">
                                    <span class="text-gray-700 dark:text-gray-400">NIP</span>
                                    <input type="text" name="staf_pendamping[{{ $index }}][nip]" placeholder="NIP Staf Pendamping" 
                                           class="block w-full mt-1 text-sm form-input" value="{{ old("staf_pendamping.{$index}.nip", $staf['nip']) }}" required />
                                    @error("staf_pendamping.{$index}.nip")
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block text-sm mb-2">
                                    <span class="text-gray-700 dark:text-gray-400">Pangkat/Gol</span>
                                    <input type="text" name="staf_pendamping[{{ $index }}][pangkat]" placeholder="Pangkat/Gol Staf Pendamping" 
                                           class="block w-full mt-1 text-sm form-input" value="{{ old("staf_pendamping.{$index}.pangkat", $staf['pangkat']) }}" required />
                                    @error("staf_pendamping.{$index}.pangkat")
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </label>
                                <label class="block text-sm mb-2">
                                    <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                                    <input type="text" name="staf_pendamping[{{ $index }}][jabatan]" placeholder="Jabatan Staf Pendamping" 
                                           class="block w-full mt-1 text-sm form-input" value="{{ old("staf_pendamping.{$index}.jabatan", $staf['jabatan']) }}" required />
                                    @error("staf_pendamping.{$index}.jabatan")
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pejabat yang bertugas -->
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">Pejabat yang Bertugas</h3>
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Nama Pejabat</span>
                        <input type="text" name="pejabat_nama" placeholder="Nama Pejabat" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->pejabat_nama }}" required />
                    </label>
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Pangkat</span>
                        <input type="text" name="pejabat_pangkat" placeholder="Pangkat" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->pejabat_pangkat }}" required />
                    </label>
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">NIP</span>
                        <input type="text" name="pejabat_nip" placeholder="NIP" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->pejabat_nip }}" required />
                    </label>
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                        <input type="text" name="pejabat_jabatan" placeholder="Jabatan" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->pejabat_jabatan }}" required />
                    </label>

                    <!-- Transportasi -->
                    <label class="block text-sm mb-4">
                        <span class="text-gray-700 dark:text-gray-400">Transportasi</span>
                        <input type="text" name="transportasi" placeholder="Transportasi yang Digunakan" 
                               class="block w-full mt-1 text-sm form-input" value="{{ $pengajuan->transportasi }}" required />
                    </label>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="button" onclick="confirmSubmit()"
                            class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script>
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
                            <p class="text-red-500 text-xs mt-1" id="error-staf_pendamping-${i}-nama"></p>
                        </label>
                        <label class="block text-sm mb-2">
                            <span class="text-gray-700 dark:text-gray-400">NIP</span>
                            <input type="text" name="staf_pendamping[${i}][nip]" placeholder="NIP Staf Pendamping" 
                                   class="block w-full mt-1 text-sm form-input" required />
                            <p class="text-red-500 text-xs mt-1" id="error-staf_pendamping-${i}-nip"></p>
                        </label>
                        <label class="block text-sm mb-2">
                            <span class="text-gray-700 dark:text-gray-400">Pangkat/Gol</span>
                            <input type="text" name="staf_pendamping[${i}][pangkat]" placeholder="Pangkat/Gol Staf Pendamping" 
                                   class="block w-full mt-1 text-sm form-input" required />
                            <p class="text-red-500 text-xs mt-1" id="error-staf_pendamping-${i}-pangkat"></p>
                        </label>
                        <label class="block text-sm mb-2">
                            <span class="text-gray-700 dark:text-gray-400">Jabatan</span>
                            <input type="text" name="staf_pendamping[${i}][jabatan]" placeholder="Jabatan Staf Pendamping" 
                                   class="block w-full mt-1 text-sm form-input" required />
                            <p class="text-red-500 text-xs mt-1" id="error-staf_pendamping-${i}-jabatan"></p>
                        </label>
                    </div>
                `;
                stafFieldsContainer.insertAdjacentHTML('beforeend', newStafField);
            }

            // Add error messages if they exist
            @if($errors->has('staf_pendamping'))
                @foreach($errors->get('staf_pendamping') as $index => $error)
                    document.getElementById(`error-staf_pendamping-${index}-nama`).innerText = "{{ $error['nama'] }}";
                    document.getElementById(`error-staf_pendamping-${index}-nip`).innerText = "{{ $error['nip'] }}";
                    document.getElementById(`error-staf_pendamping-${index}-pangkat`).innerText = "{{ $error['pangkat'] }}";
                    document.getElementById(`error-staf_pendamping-${index}-jabatan`).innerText = "{{ $error['jabatan'] }}";
                @endforeach
            @endif
        });

        function confirmSubmit() {
            const form = document.getElementById('edit-form');
            let valid = true;
            const inputs = form.querySelectorAll('input[required], select[required]');
            
            inputs.forEach(input => {
                if (!input.value) {
                    valid = false;
                    input.classList.add('border-red-500');
                } else {
                    input.classList.remove('border-red-500');
                }
            });

            if (valid) {
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Pastikan semua data sudah benar sebelum mengirim!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, kirim!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Harap lengkapi semua kolom yang diperlukan.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        }

        // Trigger the input event to populate the fields if there are old inputs
        document.getElementById('jumlah_berpergian').dispatchEvent(new Event('input'));
    </script>
@endsection