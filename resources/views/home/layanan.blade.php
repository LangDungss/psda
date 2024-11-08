<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <style>
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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
  <body class=" bg-blue-900">
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

   <!-- Kontainer utama untuk memusatkan artikel di tengah layar -->
   <!-- Main content -->
   <div class="container mx-auto px-4 py-8">
    <header class="flex justify-between items-center">
        <h1 class="text-md font-mono text-gray-400"><a href="/"><span class="text-xl text-white"><-</span></a> LAYANAN</h1>

    </header>
   <div class="flex justify-center items-center my-18">
    <article class="mt-5 border-2 border-gray-100 bg-white mx-auto max-w-2xl shadow-lg rounded-lg p-6">
        <div class="flex items-start gap-6">
            <!-- Gambar di sebelah kiri -->
            <a href="#" class="block shrink-0 text-center">
                <img alt="Gambar" src="{{ asset('images/kak rahman 2.jpg') }}" class="w-48 h-48 rounded-lg object-cover mx-auto" />
                <p class="mt-2 font-mono text-lg font-bold text-center ">Abdurrahman</p>
            </a>

            <!-- Keterangan di sebelah kanan -->
            <div class="flex-1">
                <h3 class="font-medium text-lg">
                    <a href="#" class="hover:underline">Kepala Seksi Survey Dinas PSDA Sumatera Selatan</a>
                </h3>
                <p class="text-sm text-gray-700 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, accusantium temporibus iure
                    delectus ut totam natus nesciunt ex? Ducimus, enim.
                </p>


            </div>
        </div>

        <!-- Status Solved -->
        <div class="flex justify-end mt-4">
            <div class="mt-4 md:mt-8">
                <a
                  href="/"
                  class="inline-block rounded bg-emerald-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-emerald-700 focus:outline-none focus:ring focus:ring-yellow-400"
                >
                  Hubungi Kami
                </a>
              </div>
            </div>
          </div>
        </div>
    </article>
</div>


  </body>
