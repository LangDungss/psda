<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-900 font-poppins ">

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
            <header class="flex justify-between items-center  mx-auto px-4 py-8">
                <h1 class="text-md font-mono text-zinc-500"><a href="/"><span class="text-xl text-white"><-</span></a> PSDA PROVINSI SUMATERA SELATAN</h1>
            </header>

        <!-- Main Content -->
        <!-- Layanan Section -->
        <section id="layanan" class="">
            <div class="container mx-auto text-center">
              <h2 class="text-3xl font-bold mb-16">Layanan Kami</h2>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Irigasi-->
                <article class="flex bg-white transition hover:shadow-xl">
                  <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                    <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                      <span>Dinas</span>
                      <span class="w-px flex-1 bg-gray-900/10"></span>
                      <span>  PSDA</span>
                    </time>
                  </div>
                  <div class="hidden sm:block sm:basis-56">
                    <img src="{{asset('images/irigasi.jpg')}}" alt="Irigasi" class="aspect-square h-full w-full object-cover" />
                  </div>
                  <div class="flex flex-1 flex-col justify-between">
                    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                      <a href="#">
                        <h3 class="font-bold uppercase text-gray-900">Irigasi</h3>
                      </a>
                      <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                        penyediaan air buatan untuk tanaman
                      </p>
                    </div>
                    <div class="sm:flex sm:items-end sm:justify-end">
                      <a href="/nextirigasi" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">Lihat Lebih Lanjut</a>
                    </div>
                  </div>
                </article>

                <!-- Rawa -->
                <article class="flex bg-white transition hover:shadow-xl">
                  <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                    <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                      <span>Dinas</span>
                      <span class="w-px flex-1 bg-gray-900/10"></span>
                      <span>  PSDA</span>
                    </time>
                  </div>
                  <div class="hidden sm:block sm:basis-56">
                    <img src="{{asset('images/rawa.jpg')}}" alt="Rawa" class="aspect-square h-full w-full object-cover" />
                  </div>
                  <div class="flex flex-1 flex-col justify-between">
                    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                      <a href="#">
                        <h3 class="font-bold uppercase text-gray-900">Rawa</h3>
                      </a>
                      <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                        Dataran rendah yang selalu tergenang air
                      </p>
                    </div>
                    <div class="sm:flex sm:items-end sm:justify-end">
                      <a href="/nextrawa" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">Lihat Lebih Lanjut</a>
                    </div>
                  </div>
                </article>

                <!-- Sungai -->
                <article class="flex bg-white transition hover:shadow-xl">
                  <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                    <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                      <span>Dinas</span>
                      <span class="w-px flex-1 bg-gray-900/10"></span>
                      <span>Oct 10</span>
                    </time>
                  </div>
                  <div class="hidden sm:block sm:basis-56">
                    <img src="{{asset('images/sungai.jpg')}}" alt="Sungai" class="aspect-square h-full w-full object-cover" />
                  </div>
                  <div class="flex flex-1 flex-col justify-between">
                    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                      <a href="#">
                        <h3 class="font-bold uppercase text-gray-900">Sungai</h3>
                      </a>
                      <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                        Aliran air alami jernih yang mengalir
                      </p>
                    </div>
                    <div class="sm:flex sm:items-end sm:justify-end">
                      <a href="/nextsungai" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">Lihat Lebih Lanjut</a>
                    </div>
                  </div>
                </article>

                <!-- Sumur Bor -->
                <article class="flex bg-white transition hover:shadow-xl mb-10">
                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                      <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                        <span>Dinas</span>
                        <span class="w-px flex-1 bg-gray-900/10"></span>
                        <span>PSDA</span>
                      </time>
                    </div>
                    <div class="hidden sm:block sm:basis-56">
                      <img src="{{asset('images/sumur bor.jpeg')}}" alt="Sumur" class="aspect-square h-full w-full object-cover" />
                    </div>
                    <div class="flex flex-1 flex-col justify-between">
                      <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                        <a href="#">
                          <h3 class="font-bold uppercase text-gray-900">Sumur Bor</h3>
                        </a>
                        <p class="mt-2  text-sm/relaxed text-gray-700">
                            Layanan pengeboran sumur yang<br>menyediakan akses air bersih
                        </p>
                      </div>
                      <div class="sm:flex sm:items-end sm:justify-end">
                        <a href="/nextsumurbor" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">Lihat Lebih Lanjut</a>
                      </div>
                    </div>
                  </article>

                  <!-- Danau -->
                <article class="flex bg-white transition hover:shadow-xl mb-10">
                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                      <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                        <span>Dinas</span>
                        <span class="w-px flex-1 bg-gray-900/10"></span>
                        <span>PSDA</span>
                      </time>
                    </div>
                    <div class="hidden sm:block sm:basis-56">
                      <img src="{{asset('images/danau.jpg')}}" alt="Danau" class="aspect-square h-full w-full object-cover" />
                    </div>
                    <div class="flex flex-1 flex-col justify-between">
                      <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                        <a href="#">
                          <h3 class="font-bold uppercase text-gray-900">Danau</h3>
                        </a>
                        <p class="mt-2 text-sm/relaxed text-gray-700">
                            Ekosistem perairan tawar yang terbentuk secara alami atau buatan
                        </p>
                      </div>
                      <div class="sm:flex sm:items-end sm:justify-end">
                        <a href="/nextdanau" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">Lihat Lebih Lanjut</a>
                      </div>
                    </div>
                  </article>

                  <!-- Olahan air -->
                <article class="flex bg-white transition hover:shadow-xl mb-10">
                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                      <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                        <span>Dinas</span>
                        <span class="w-px flex-1 bg-gray-900/10"></span>
                        <span>PSDA</span>
                      </time>
                    </div>
                    <div class="hidden sm:block sm:basis-56">
                      <img src="{{asset('images/gedung psda.jpeg')}}" alt="OlahanAir" class="aspect-square h-full w-full object-cover" />
                    </div>
                    <div class="flex flex-1 flex-col justify-between">
                      <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                        <a href="#">
                          <h3 class="font-bold uppercase text-gray-900">Layanan Lain Nya</h3>
                        </a>
                        <p class="mt-2  text-sm/relaxed text-gray-700">
                            Mencakup konservasi, distribusi, dan pemanfaatan air untuk berbagai keperluan
                        </p>
                      </div>
                      <div class="sm:flex sm:items-end sm:justify-end">
                        <a href="/psdalainnya" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">Lihat Lebih Lanjut</a>
                      </div>
                    </div>
                  </article>



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
