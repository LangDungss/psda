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
<body class="container mx-auto text-gray-800 bg-blue-900">
  <div>
    <p class=" text-white">PSDA Provinsi Sumatera Selatan</p>
  </div>

    <div class="container grid grid-cols-1 gap-4 mx-auto mt-40 text-white md:grid-cols-2">
      <div class="mx-auto">
        <img src="{{ asset('images/rawalebaktanjungsenai.jpg') }}" alt="nextirigasi">
        <p class="text-xl font-bold">DAERAH RAWA</p>
        <p class="text-xl font-bold">Rawa Lebak, Tanjung Senai</p>
      </div>
      <div class="mx-auto">
        <img src="{{ asset('images/irigasi.jpg') }}" alt="nextirigasi">
        <p>Rehabilitasi Jaringan Irigasi Daerah Irigasi Air Manna I</p>
      </div>
    </div>


    <div class="flex justify-center mt-8">
      <img src="{{ asset('images/irigasi.jpg') }}" alt="nextirigasi">
    </div>
    <div class="flex justify-center"> 
        <p class="text-xl font-bold text-white">EMBUNG TEBAT BESAK</p>
    </div>
   


    <div class="container grid grid-cols-1 gap-4 mx-auto mt-10 text-white md:grid-cols-2">
      <div class="mx-auto">
        <img src="{{ asset('images/irigasi.jpg') }}" alt="nextirigasi">
        <p class="text-xl font-bold">DAERAH IRIGASI</p>
        <p class="text-xl font-bold">AIR DERAS 1, MUSI RAWAS</p>
      </div>
      <div class="mx-auto">
        <img src="{{ asset('images/irigasi.jpg') }}" alt="nextirigasi">
        <p>Rehabilitasi Jaringan Irigasi Daerah Irigasi Air DERAS I</p>
      </div>
    </div>
  

     




    <div class="grid grid-cols-1 gap-2 mt-32 text-white md:grid-cols-5">
      <div>
        <p>PSDATANGGAP</p>
      </div>
      <div>
        <p>PSDATANGGAP</p>
      </div>
      <div>
        <p>PSDATANGGAP</p>
      </div>
      <div>
        <p>PSDATANGGAP</p>
      </div>
      <div>
        <p>PSDATANGGAP</p>
      </div>
    </div>
    
  
  </body>
  </html>
