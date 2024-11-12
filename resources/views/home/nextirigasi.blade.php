

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

    <style></style>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['"Poppins"', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <title>Landing Page</title>
</head>

<body class="text-gray-800 bg-blue-900">

    <!-- Header -->
    <header class="bg-amber-400 w-full">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 h-16">
            <!-- Logo di kiri -->
            <a class="text-teal-600 flex items-center" href="#">
                <span class="sr-only">Home</span>
                <img src="{{ asset('images/logopsda.png') }}" class="h-14" alt="logo PSDA">
            </a>

            <!-- Logo di kanan -->
            <a href="#">
                <img src="{{ asset('images/logoall2.png') }}" class="h-14" alt="logoall2">
            </a>
        </div>





        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <header class="flex justify-between items-center">
            <h1 class="text-md font-mono text-zinc-500"><a href="/layananpsda"><span class="text-xl text-white"><-</span></a> PSDA PROVINSI SUMATERA SELATAN</h1>

        </header>

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



        <footer class="mt-8 text-center">
            <p class="text-white">#PSDA TANGGAP Alamat : Jalan Anwar Sastro, No. 1251 Telefon : 0711 35 2362 Fax : 0711 361381 Instagram : @dinaspsdaprov.sumsel</p>
        </footer>




</div>

</body>
</html>
