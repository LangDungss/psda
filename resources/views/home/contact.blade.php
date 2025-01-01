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

    <style>
        /* Additional responsive styling */
        .contact-image {
            width: 100%;
            height: auto;
            max-width: 200px;
        }
    </style>
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
    <title>Contact</title>
</head>
<body class="bg-blue-900">

    <!-- Header -->
    <header class="bg-amber-400 w-full">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 h-16">
            <a class="text-teal-600 flex items-center" href="#">
                <span class="sr-only">Home</span>
                <img src="{{ asset('images/logopsda.png') }}" class="h-14" alt="logo PSDA">
            </a>
            <a href="#">
                <img src="{{ asset('images/logoall2.png') }}" class="h-14" alt="logoall2">
            </a>
        </div>
    </header>

    <header class="flex justify-between items-center px-4 py-4">
        <h1 class="text-md font-mono text-zinc-500">
            <a href="/" class="text-xl text-white"><-</a> CONTACT
        </h1>
    </header>

    <!-- Main content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row items-center md:justify-center md:space-x-8 mb-10">
            <h1 class="text-3xl font-bold text-center mb-5 text-black md:mb-0 md:text-left">DINAS PSDA<br>PROVINSI SUMATERA SELATAN</h1>
            <article class="w-full md:w-auto mt-5 border-2 border-gray-100 bg-white mx-auto max-w-2xl shadow-lg rounded-lg p-6">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                    <a href="#" class="block text-center">
                        <img alt="Gambar" src="{{ asset('images/kak rahman 2.jpg') }}" class="contact-image rounded-lg object-cover mx-auto" />
                        <p class="mt-2 font-mono text-lg font-bold text-center">Abdurrahman</p>
                    </a>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="font-medium text-lg">
                            <a href="#" class="hover:underline">Kepala Seksi Survey Dinas PSDA Sumatera Selatan</a>
                        </h3>
                        <p class="text-sm text-gray-700 mt-2">
                            Terimakasih telah mengunjungi Website Nota Dinas PSDA Sumatera Selatan 
                            Terimakasih
                        </p>
                    </div>
                </div>
                <div class="flex justify-center md:justify-end mt-4">
                    <a href="tel:+6281229778791"
                        class="inline-block rounded bg-emerald-600 px-6 md:px-12 py-3 text-sm font-medium text-white transition hover:bg-emerald-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Hubungi Kami
                    </a>
                </div>
            </article>
        </div>
    </div>


    <div class="bg-gradient-to-r from-gray-800 to-gray-700 p-8 rounded-lg shadow-lg max-w-4xl mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left">
            <img alt="Foto profil Galang AryaDipa" class="rounded-lg shadow-lg mx-auto md:mx-0" height="400" src="{{ asset('images/foto.jpg') }}" width="600"/>
            <h1 class="text-2xl text-center font-bold text-white mt-4">Galang AryaDipa</h1>
            <p class="text-lg text-center text-green-400">0812-6352-5599</p>
        </div>
        <div class="md:w-1/2 md:pl-8 mt-8 md:mt-0 text-white">
            <h2 class="text-3xl font-bold mb-4">
                Kontak IT Developer
            </h2>
            <p class="mb-6">
                Kami siap membantu kebutuhan teknologi Anda! Hubungi kami untuk layanan pembuatan website, aplikasi, atau solusi IT lainnya.
            </p>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    Harga kompetitif
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    Jadwal kerja fleksibel
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    Pelayanan profesional
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    Dukungan teknis 24/7
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    Solusi inovatif
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                    Tim yang berpengalaman
                </li>
            </ul>
        </div>
    </div>
    
    
     

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-center py-4 text-gray-400 mt-16">
        <p>&copy;DINAS PENGELOLAAN SUMBER DAYA AIR PROVINSI SUMATERA SELATAN<br>#PSDADIGITAL #PSDATANGGAP</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="https://www.instagram.com/dinaspsdaprov.sumsel/profilecard/?igsh=MWlhZDhpcGJxZWp4eQ==" class="hover:text-white">
                <i data-feather="instagram"></i>
            </a>
            <a href="https://youtu.be/NzO2XbEp968?si=XZfGk-SvbCi0zMQ_" class="hover:text-white">
                <i data-feather="youtube"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100076006817436&mibextid=ZbWKwL" class="hover:text-white">
                <i data-feather="facebook"></i>
            </a>
            <a href="mailto:dinaspengelolaansdasumsel@gmail.com" class="hover:text-white">
                <i data-feather="mail"></i>
            </a>
            <a href="tel:+62711352362" class="hover:text-white">
                <i data-feather="phone"></i>
            </a>
        </div>
    </footer>

    <!-- Feather Icons Script -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

</body>
</html>
