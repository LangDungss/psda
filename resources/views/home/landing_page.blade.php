<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
    <title>Home</title>
</head>

<body class="bg-gray-100 text-gray-800 font-poppins overflow-x-hidden">

    <!-- Header -->
    <header class="bg-amber-400">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center gap-4">
                    <!-- Sidebar toggle button for mobile -->
                    <button onclick="toggleNavbar()" class="rounded bg-gray-100 p-2 text-gray-600 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <a class="block text-teal-600" href="#">
                        <img src="{{asset('images/logopsda.png')}}" class="h-10 md:h-14">
                    </a>
                </div>

                <!-- Navbar items for desktop -->
                <div class="md:flex md:items-center md:gap-12">
                    <!-- Navbar items, initially hidden on small screens -->
                    <nav aria-label="Global" class="hidden md:block" id="navbarMenu">
                        <ul class="flex items-center gap-6 text-sm">
                            <li><a class="text-black hover:text-gray-500/75" href="/"> Beranda </a></li>
                            <li><a class="text-black hover:text-gray-500/75" href="{{ route('home.layananpsda.layanankami') }}"> Layanan </a></li>
                            <li><a class="text-black hover:text-gray-500/75" href="/tentang"> Tentang Kami </a></li>
                            <li><a class="text-black hover:text-gray-500/75" href="/contact"> Hubungi Kami </a></li>
                        </ul>
                    </nav>

                    <div class="flex items-center gap-4">
                        <a class="rounded-md bg-blue-600 hover:bg-amber-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="{{route('login')}}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar for mobile -->
    <nav id="navbarMenuSidebar" class="fixed top-0 left-0 h-full w-64 bg-amber-300 shadow-lg transform transition-transform -translate-x-full md:hidden z-50">
        <div class="flex justify-end p-4">
            <button onclick="toggleNavbar()" class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-start gap-6 text-sm p-6">
            <li><a class="text-black hover:text-gray-500" href="/">Beranda</a></li>
            <li><a class="text-black hover:text-gray-500" href="{{ route('home.layananpsda.layanankami') }}">Layanan</a></li>
            <li><a class="text-black hover:text-gray-500" href="/tentang">Tentang Kami</a></li>
            <li><a class="text-black hover:text-gray-500" href="/contact">Hubungi Kami</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16 px-4 text-center">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 lg:items-center">
            <div class="flex justify-center">
                <img src="{{ asset('images/sumsel.png') }}" class="h-40 md:h-60">
            </div>
            <div class="flex flex-col items-center">
                <h1 class="text-2xl md:text-4xl font-bold mb-4">SELAMAT DATANG DI NOTA DINAS DIGITAL</h1>
                <p class="text-lg md:text-2xl font-semibold mb-8">DINAS PSDA PROVINSI <br> SUMATERA SELATAN</p>
                <img src="{{ asset('images/logoall2.png') }}" class="h-14 md:h-20">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/psda1.png') }}" class="h-40 md:h-60">
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="absolute inset-0 bg-gray-900/75 sm:bg-transparent"></div>
        <div class="relative mx-auto max-w-screen-xl px-4 py-20 sm:px-6 lg:flex lg:h-2/4 lg:items-center lg:px-8 text-center">
            <div class="max-w-xl mx-auto text-center">
                <h1 class="font-extrabold text-2xl md:text-4xl text-white">
                    <strong>Layanan Kami</strong>
                </h1>
                <p class="mt-4 max-w-lg text-sm md:text-xl text-white">
                    Kami Dinas Pengelola Sumber Daya Air menyediakan berbagai macam layanan pengelolaan sumber daya air. Berikut berbagai macam layanan yang kami sediakan:
                </p>
                <a href="/layananpsda" class="mt-8 block w-full rounded bg-blue-600 px-8 py-3 text-sm font-medium text-white shadow hover:bg-amber-600 sm:w-auto">
                    SELENGKAPNYA
                </a>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">
            <div class="md:w-1/2">
                <img src="{{asset('images/gedung psda.jpeg')}}" alt="Tentang Kami" class="rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Tentang Dinas PSDA Provinsi Sumatera Selatan</h2>
                <p class="text-sm md:text-lg text-black font-bold">Dinas Pengelolaan Sumber Daya Air (PSDA) Sumatera Selatan adalah lembaga pemerintah daerah yang bertugas mengelola sumber daya air di provinsi Sumatera Selatan.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6 text-center">
        <div class="container mx-auto">
            <p>&copy; 2024 Dinas PSDA Provinsi Sumatera Selatan. All rights reserved.</p>
            <p class="mt-2">Jl. Kapten Anwar Sastro, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30121 | Telp: (021) 12345678 | Email: dinaspengelolaansdasumsel@gmail.com</p>
        </div>
    </footer>

    <script>
        function toggleNavbar() {
            const navbarSidebar = document.getElementById("navbarMenuSidebar");
            const body = document.body;

            navbarSidebar.classList.toggle("-translate-x-full");
            body.classList.toggle("overflow-hidden");
        }
    </script>
</body>
</html>
