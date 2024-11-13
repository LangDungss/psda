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
    <title>Layanan Lainnya</title>
</head>
 
<body class="text-gray-800 bg-blue-900">

    <!-- Header -->
    <header class="bg-amber-400 w-full">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 h-16">
            <!-- Logo di kiri -->
            <a class="text-teal-600 flex items-center" href="#">

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


        <!--Embung-->
        <main class="mt-8">
            <section class="p-6 rounded-lg shadow-md bg-blue-950">
                <div class="mb-6 text-white">
                    <h2 class="text-xl font-bold italic">“EMBUNG TEBAT BESAK, EMPAT LAWANG“</h2>
                </div>

                <div class="grid grid-cols-1 gap-2">
                    <div class="p-1">
                        <img src="{{ asset('images/danau/embung1.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Atas">
                    </div>

                    <div class="p-1">
                        <img src="{{ asset('images/danau/embung2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Bawah">
                    </div>
                    <p class="mt-2 text-white">
                        Rehabilitasi Embung Tebat Besak, Desa Batu Lintang
                    </p>
                </div>
            </section>
        </main>

        <!--Embung lubuk linggau-->
        <main class="mt-8">
            <section class="p-6 rounded-lg shadow-md bg-blue-950">
                <div class="mb-6 text-white">
                    <h2 class="text-xl font-bold italic">“NORMALISASI EMBUNG“</h2>
                </div>

                <div class="grid grid-cols-1 gap-2">
                    <div class="p-1">
                        <img src="{{ asset('images/danau/embung lubuk linggau1.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Atas">
                    </div>

                    <div class="p-1">
                        <img src="{{ asset('images/danau/embung lubuk linggau2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Bawah">
                    </div>
                    <p class="mt-2 text-white">
                        Lokasi :Nikan Jaya, Lubuk Linggau
                    </p>
                </div>
            </section>
        </main>



    </div>

</body>

</html>
