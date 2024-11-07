
@extends('layout.irigasi.temp_irigasi')

@section('content')
   <!--Bagian Air manna-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air manna.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “DAERAH IRIGASI <br> AIR MANNA LAHAT“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/rehabilitasi air manna.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Rehabilitasi Jaringan Irigasi Daerah Irigasi Air Manna
                </p>
            </div>

        </div>
    </section>
</main>


<!--Bagian Musi Rawas-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/airderas1.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “DAERAH IRIGASI<br>AIR DERAS I , MUSI RAWAS“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/rehabairderas.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Rehabilitasi Jaringan Irigasi Daerah Irigasi Air Deras
                </p>
            </div>

        </div>
    </section>
</main>

<!--Bagian Oku Selatan-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sumur oku selatan.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “DAERAH IRIGASI<br>AIR SUNUR, OKU SELATAN“
                </p>
            </div>

             <!-- Gambar tengah -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sumur oku selatan2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">

            </div>
             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sumur oku selatan3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Rehabilitasi Jaringan Irigasi Daerah Irigasi Air Deras
                </p>
            </div>

        </div>
    </section>
</main>

<!--Air satan musi rawas-->

<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air satan.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “PEMELIHARAAN<br>DAERAH IRIGASI“
                </p>
            </div>

             <!-- Gambar tengah -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air satan2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">

            </div>
             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air satan3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Lokasi :Air Satan, Musi Rawas
                </p>
            </div>

        </div>
    </section>
</main>

<!-- Megang Tikip Musi Rawas -->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Baris pertama -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri pertama -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">

            </div>

            <!-- Gambar kanan pertama -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
            </div>
        </div>

        <!-- Baris kedua -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “PEMELIHARAAN DAERAH IRIGASI<br>MEGANG TIKIP, MUSI RAWAS“
                </p>
            </div>

            <!-- Gambar kanan kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip4.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic absolute bottom-2 left-2 px-2 py-1">
                I Pemeliharaan Daerah Irigasi Megang Tikip, Musi Rawas
                </p>
            </div>
        </div>
    </section>
</main>

<!--Bagian Tebing Panjang-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/tebing panjang.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “REHABILITASI JARINGAN<br>IRIGASI, DAERAH IRIGASI<br>TEBING PANJANG“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/tebing panjang2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Lokasi :Tebing Panjang, Lahat
                </p>
            </div>

        </div>
    </section>
</main>

<!--Bagian Air Gohong-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air gohong.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “REHABILITASI<br>JARINGAN IRIGASI“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air gohong2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Lokasi :Air Gohong, Lahat
                </p>
            </div>

        </div>
    </section>
</main>

<!-- Air Sungkai -->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Baris pertama -->
        <div class="flex mt-6 gap-2">
            <!-- Kolom kiri (3 foto kecil di sebelah kiri) -->
            <div class="grid grid-cols-3 gap-2 w-1/2">
                <div class="p-1">
                    <img src="{{ asset('images/air sungkai.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri 1">
                </div>
                <div class="p-1">
                    <img src="{{ asset('images/air sungkai2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri 2">
                </div>
                <div class="p-1">
                    <img src="{{ asset('images/air sungkai3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri 3">
                </div>
            </div>

            <!-- Kolom kanan (foto besar di sebelah kanan) -->
            <div class="w-1/2 p-1">
                <img src="{{ asset('images/air sungkai4.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Besar Kanan">
            </div>
        </div>

        <!-- Baris kedua -->
        <div class="flex justify-between mt-6 gap-2">
            <!-- Foto besar pertama di baris kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sungkai5.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Besar Bawah Kiri">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “REHABILITASI<br>JARINGAN IRIGASI“
                </p>
            </div>

            <!-- Foto besar kedua di baris kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sungkai6.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Besar Bawah Kanan">
                <p class="text-white text-lg italic absolute bottom-2 left-2 px-2 py-1">
                    I Lokasi :Air Sungkai, Oku Selatan
                </p>
            </div>
        </div>
    </section>
</main>
@endsection
