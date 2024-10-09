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
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-yellow-400 text-black">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="text-2xl font-bold">Dinas PSDA Sumsel</div>
        <nav>
          <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-yellow-400">Beranda</a></li>
            <li><a href="/tentang" class="hover:text-yellow-400">Tentang Kami</a></li>
            <li><a href="/layanan" class="hover:text-yellow-400">Layanan</a></li>
            <li><a href="/login" class="hover:text-yellow-400">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
  
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
      <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang di Nota Dinas Digital</h1>
        <p class="text-4xl mb-8">Dinas PSDA Provinsi Sumatera Selatan</p>
        <a href="#layanan" class="bg-yellow-400 text-blue-800 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500"></a>
      </div>
    </section>
  
    <!-- Layanan Section -->
    <section id="layanan" class="py-16 bg-gray-100">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">Layanan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 shadow-lg rounded-lg">
            <img src="{{asset('images/irigasi.jpg')}}" alt="Layanan 1" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Irigasi</h3>
            <p>sistem atau metode penyediaan air secara buatan untuk tanaman di lahan pertanian guna mendukung pertumbuhan tanaman, terutama di daerah yang kekurangan air atau pada musim kering..</p>
            <div class="flex justify-end gap-6">
              <Button type="" class="rounded-full bg-blue-500 py-1 px-4 text-gray-800">
              <a href="/nextirigasi">lihat lebih lanjut </a>
              </Button>
            </div>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-lg">
            <img src="{{asset('images/rawa.jpg')}}" alt="Layanan 2" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Rawa</h3>
            <p>dataran rendah yang selalu tergenang air, baik secara permanen maupun musiman, dengan kedalaman air yang bervariasi. Rawa terbentuk karena air yang menggenang, baik itu air hujan, air sungai, atau air tanah, tidak dapat mengalir keluar dengan mudah akibat topografi atau kondisi geologis daerah tersebut.</p>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-lg">
            <img src="{{asset('images/sungai.jpg')}}" alt="Layanan 3" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Sungai</h3>
            <p>aliran air alami yang mengalir dari tempat yang lebih tinggi ke tempat yang lebih rendah, biasanya menuju laut, danau, atau sungai yang lebih besar.</p>
          </div>
        </div>
      </div>
    </section>
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10"></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 shadow-lg rounded-lg">
            <img src="{{asset('images/danau.jpg')}}" alt="Layanan 1" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Danau</h3>
            <p>sistem atau metode penyediaan air secara buatan untuk tanaman di lahan pertanian guna mendukung pertumbuhan tanaman, terutama di daerah yang kekurangan air atau pada musim kering..</p>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-lg">
            <img src="{{asset('images/danau.jpg')}}" alt="Layanan 2" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Sumur Bor</h3>
            <p>dataran rendah yang selalu tergenang air, baik secara permanen maupun musiman, dengan kedalaman air yang bervariasi. Rawa terbentuk karena air yang menggenang, baik itu air hujan, air sungai, atau air tanah, tidak dapat mengalir keluar dengan mudah akibat topografi atau kondisi geologis daerah tersebut.</p>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-lg">
            <img src="/img/sungai.jpg" alt="Layanan 3" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Pengelolaan Sumber Daya Air Lainnya</h3>
            <p>aliran air alami yang mengalir dari tempat yang lebih tinggi ke tempat yang lebih rendah, biasanya menuju laut, danau, atau sungai yang lebih besar.</p>
          </div>
        </div>
      </div>
  
    <!-- Tentang Kami Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">
        <div class="md:w-1/2">
          <img src="{{asset('images/gedung psda.jpeg')}}" alt="Tentang Kami" class="rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2">
          <h2 class="text-3xl font-bold mb-4">Tentang Pemerintah Kota XYZ</h2>
          <p class="text-lg">Pemerintah Kota XYZ berkomitmen untuk memberikan pelayanan terbaik bagi seluruh masyarakat dengan prinsip keterbukaan, keadilan, dan inovasi. Kami terus berusaha meningkatkan kualitas pelayanan dan pembangunan untuk kesejahteraan bersama.</p>
        </div>
      </div>
    </section>
  
    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6">
      <div class="container mx-auto text-center">
        <p>&copy; 2024 Dinas PSDA Provinsi Sumatera Selatan. All rights reserved.</p>
        <p class="mt-2">Jl. Kapten Anwar Sastro, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30121 | Telp: (021) 12345678 | Email: dinaspengelolaansdasumsel@gmail.com</p>
      </div>
    </footer>
  
  </body>
  </html>