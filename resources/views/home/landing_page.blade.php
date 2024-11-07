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
    <header class="bg-amber-400">
      <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex-1 md:flex md:items-center md:gap-12">
            <a class="block text-teal-600" href="#">
              <span class="sr-only">Home</span>
              <img src="{{asset('images/logopsda.png')}}" class="h-14">
                
              </img>
            </a>
          </div>
    
          <div class="md:flex md:items-center md:gap-12">
            <nav aria-label="Global" class="hidden md:block">
              <ul class="flex items-center gap-6 text-sm">
                <li>
                  <a class="text-black transition hover:text-gray-500/75" href="#"> About </a>
                </li>
                <li>
                  <a class="text-black transition hover:text-gray-500/75" href="#"> About </a>
                </li>
                <li>
                  <a class="text-black transition hover:text-gray-500/75" href="#"> About </a>
                </li>
                <li>
                  <a class="text-black transition hover:text-gray-500/75" href="#"> About </a>
                </li>
              </ul>
            </nav>
    
            <div class="flex items-center gap-4">
              <div class="sm:flex sm:gap-4">
                <a
                  class="rounded-md bg-blue-600 hover:bg-amber-600 px-5 py-2.5 text-sm font-medium text-white shadow"
                  href="{{route('login')}}"
                >
                  Login
                </a>
              </div>
    
              <div class="block md:hidden">
                <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  
    <!-- Hero Section -->
    
    <section class="bg-blue-600 text-white">
      <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-2/6 lg:items-center">
        <div class="mx-auto text-center w-full">
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:gap-8">
            <!-- Left image -->
            <div class="flex justify-center items-center">
              <img src="{{ asset('images/sumsel.png') }}" class="h-60 object-contain">
            </div>
    
            <!-- Center text and logo -->
            <div class="flex flex-col justify-center items-center">
              <h1 class="text-4xl font-bold mb-4">SELAMAT DATANG DI NOTA DINAS DIGITAL</h1>
              <p class="text-2xl font-semibold mb-8">DINAS PSDA PROVINSI <br> SUMATERA SELATAN</p>
              <img src="{{ asset('images/logoall2.png') }}" class="h-20 object-contain">
            </div>
    
            <!-- Right image -->
            <div class="flex justify-center items-center">
              <img src="{{ asset('images/psda1.png') }}" class="h-60 object-contain">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  
    <!-- Layanan Section -->
    <section id="layanan" class="py-16 bg-gray-100 ">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">Layanan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 shadow-lg rounded-3xl">
            <img src="{{asset('images/irigasi.jpg')}}" alt="Layanan 1" class="mb-4 mx-auto">
            <h3 class="text-xl text-black font-bold mb-2">Irigasi</h3>
            <h3 class="text-black">sistem atau metode penyediaan air secara buatan untuk tanaman di lahan pertanian guna mendukung pertumbuhan tanaman, terutama di daerah yang kekurangan air atau pada musim kering..</h3>
            <div class="flex justify-end gap-6">
              <Button type="" class="rounded-full bg-black py-1 px-4 text-white">
              <a href="/nextirigasi">lihat lebih lanjut </a>
              </Button>
            </div>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-3xl">
            <img src="{{asset('images/rawa.jpg')}}" alt="Layanan 2" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Rawa</h3>
            <p>dataran rendah yang selalu tergenang air, baik secara permanen maupun musiman, dengan kedalaman air yang bervariasi. Rawa terbentuk karena air yang menggenang, baik itu air hujan, air sungai, atau air tanah, tidak dapat mengalir keluar dengan mudah akibat topografi atau kondisi geologis daerah tersebut.</p>
            <div class="flex justify-end gap-6">
              <Button type="" class="rounded-full bg-black py-1 px-4 text-white">
              <a href="/nextrawa">lihat lebih lanjut </a>
              </Button>
            </div>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-3xl">
            <img src="{{asset('images/sungai.jpg')}}" alt="Layanan 3" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Sungai</h3>
            <p>aliran air alami yang mengalir dari tempat yang lebih tinggi ke tempat yang lebih rendah, biasanya menuju laut, danau, atau sungai yang lebih besar.</p>
            <div class="flex justify-end gap-6">
              <Button type="" class="rounded-full bg-black py-1 px-4 text-white">
              <a href="/nextirigasi">lihat lebih lanjut </a>
              </Button>
          </div>
        </div>
      </div>
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10"></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 shadow-lg rounded-3xl">
            <img src="{{asset('images/danau.jpg')}}" alt="Layanan 1" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Danau</h3>
            <p>sistem atau metode penyediaan air secara buatan untuk tanaman di lahan pertanian guna mendukung pertumbuhan tanaman, terutama di daerah yang kekurangan air atau pada musim kering..</p>
            <div class="flex justify-end gap-6">
              <Button type="" class="rounded-full bg-black py-1 px-4 text-white">
              <a href="/nextirigasi">lihat lebih lanjut </a>
              </Button>
          </div>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-3xl">
            <img src="{{asset('images/sumur bor.jpeg')}}" alt="Layanan 2" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Sumur Bor</h3>
            <p>dataran rendah yang selalu tergenang air, baik secara permanen maupun musiman, dengan kedalaman air yang bervariasi. Rawa terbentuk karena air yang menggenang, baik itu air hujan, air sungai, atau air tanah, tidak dapat mengalir keluar dengan mudah akibat topografi atau kondisi geologis daerah tersebut.</p>
            <div class="flex justify-end gap-6">
              <Button type="" class="rounded-full bg-black py-1 px-4 text-white">
              <a href="/nextirigasi">lihat lebih lanjut </a>
              </Button>
          </div>
          </div>
          <div class="bg-white p-6 shadow-lg rounded-3xl">
            <img src="{{asset('images/gedung psda.jpeg')}}" alt="Layanan 3" class="mb-4 mx-auto">
            <h3 class="text-xl font-bold mb-2">Pengelolaan Sumber Daya Air Lainnya</h3>
            <p>aliran air alami yang mengalir dari tempat yang lebih tinggi ke tempat yang lebih rendah, biasanya menuju laut, danau, atau sungai yang lebih besar.</p>
            <div class="flex justify-end gap-6">
              <Button type="" class="rounded-full bg-black py-1 px-4 text-white">
              <a href="/nextirigasi">lihat lebih lanjut </a>
              </Button>
          </div>
          </div>
        </div>
      </div>
    </section>
      
  
    <!-- Tentang Kami Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">
        <div class="md:w-1/2">
          <img src="{{asset('images/gedung psda.jpeg')}}" alt="Tentang Kami" class="rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2">
          <h2 class="text-3xl font-bold mb-4">Tentang Dinas PSDA Provinsi Sumatera Selatan</h2>
          <p class="text-lg">Dinas Pengelolaan Sumber Daya Air (PSDA) Sumatera Selatan adalah lembaga pemerintah daerah yang bertugas mengelola sumber daya air di provinsi Sumatera Selatan. Tujuannya adalah mengoptimalkan pemanfaatan sumber daya air untuk kepentingan masyarakat dan lingkungan, termasuk aspek pemanfaatan, pengendalian daya rusak air, dan konservasi.</p>
        </div>
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