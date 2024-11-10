<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 font-poppins text-white">

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
                <a href="/nextsungai">lihat lebih lanjut </a>
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

            <!-- Footer Section -->
<footer class="bg-gray-800 text-center py-4 text-gray-400">
    <p>&copy;DINAS PENGELOLAAN SUMBER DAYA AIR PROVINSI SUMATERA SELATAN<br>#PSDADIGITAL #PSDATANGGAP</p>
    <div class="flex justify-center space-x-6 mt-4">
        <!-- Instagram Icon -->
        <a href="https://www.instagram.com/dinaspsdaprov.sumsel/profilecard/?igsh=MWlhZDhpcGJxZWp4eQ==" class="hover:text-white">
            <i data-feather="instagram"></i>
        </a>
        <!-- YouTube Icon -->
        <a href="https://youtu.be/NzO2XbEp968?si=XZfGk-SvbCi0zMQ_" class="hover:text-white">
            <i data-feather="youtube"></i>
        </a>
        <!-- Facebook Icon -->
        <a href="https://www.facebook.com/profile.php?id=100076006817436&mibextid=ZbWKwL" class="hover:text-white">
            <i data-feather="facebook"></i>
        </a>
        <!-- Email Icon -->
        <a href="mailto:dinaspengelolaansdasumsel@gmail.com" class="hover:text-white">
            <i data-feather="mail"></i>
        </a>
        <!-- Phone Icon -->
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
