
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
            <h1 class="text-md font-mono text-zinc-500"><a href="/"><span class="text-xl text-white"><-</span></a> PSDA PROVINSI SUMATERA SELATAN</h1>

        </header>

           @yield('content')



        <footer class="mt-8 text-center">
            <p class="text-white">#PSDA TANGGAP Alamat : Jalan Anwar Sastro, No. 1251 Telefon : 0711 35 2362 Fax : 0711 361381 Instagram : @dinaspsdaprov.sumsel</p>
        </footer>




</div>

</body>
</html>
