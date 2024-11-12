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
    </header>

    <!-- Main Content -->

    <div class="container mx-auto px-4 py-8">
        <header class="flex justify-between items-center">
            <h1 class="text-md font-mono text-zinc-500"><a href="/layananpsda"><span class="text-xl text-white"><-</span></a> PSDA PROVINSI SUMATERA SELATAN</h1>
        </header>

            <!--Sungai-->
            <div class="max-w-6xl mx-auto p-4 rounded-lg shadow-md mt-4 bg-blue-950">
                <!-- Text Section -->
                <div class="mb-6 text-white">
                    <h2 class="text-4xl font-bold italic">“AIR KUMBANG, BANYUASIN“</h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Gambar utama -->
                    <div class="col-span-2 md:col-span-1">
                        <img src="{{ asset('images/sungai/sungai1.png') }}" alt="Main Image" class="w-full h-auto object-cover rounded-md">
                    </div>
                    <!-- Galeri gambar kecil -->
                    <div class="col-span-2 md:col-span-1 grid grid-cols-2 gap-2 p-8">
                        <img src="{{ asset('images/sungai/sungai2.png') }}" alt="Image 1" class="w-full h-full object-cover rounded-md">
                        <img src="{{ asset('images/sungai/sungai3.png') }}" alt="Image 2" class="w-full h-full object-cover rounded-md">
                        <img src="{{ asset('images/sungai/sungai4.png') }}" alt="Image 3" class="w-full h-full object-cover rounded-md">
                        <img src="{{ asset('images/sungai/sungai5.png') }}" alt="Image 4" class="w-full h-full object-cover rounded-md">
                    </div>
                </div>
                <p class="text-white">Normalisasi Sungai di Kecamatan Air Kumbang</p>
            </div>

            <!--Sungai Talang Jambi-->
            <main class="mt-8">
                <section class="p-6 rounded-lg shadow-md bg-blue-950">
                     <!-- Text Section -->
                        <div class="mb-6 text-white">
                            <h2 class="text-4xl font-bold italic">“PENGUATAN TEBING SUNGAI“</h2>
                        </div>
                    <!-- Frame untuk gambar kiri dan kanan -->
                    <div class="flex justify-between mt-6">
                        <!-- Gambar kiri -->
                        <div class="w-1/2 p-2 relative">
                            <img src="{{ asset('images/sungai/sungaitl1.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                        </div>

                        <!-- Gambar kanan -->
                        <div class="w-1/2 p-2 relative">
                            <img src="{{ asset('images/sungai/sungaitl2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                        </div>

                    </div>
                    <p class="mt-2 text-white">
                        Lokasi :Talang Jambe, Palembang
                    </p>
                </section>
            </main>

        </div>

    <footer class="mb-5 text-center">
        <p class="text-white">#PSDA TANGGAP Alamat : Jalan Anwar Sastro, No. 1251 Telefon : 0711 35 2362 Fax : 0711 361381 Instagram : @dinaspsdaprov.sumsel</p>
    </footer>

</body>
</html>
