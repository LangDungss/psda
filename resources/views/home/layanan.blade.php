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
  <body class="flex w-full justify-center py-11 bg-blue-900">  
    <div class="rounded-2xl w-[400px] overflow-hidden shadow-xl">
        <img src="{{asset('images/kak rahman 2.jpg')}}"/> 

        <div class="p-7 text-xl">
            <h1 class="text-center font-extrabold text-white mb-5">Abdurrahman</h1>
          <p class="text-white mb-5"> 
            Kepala Seksi Survey Dinas PSDA Sumatera Selatan
          </p>  
          <div class="flex justify-center gap-6">
            <Button type="" class="rounded-full bg-white py-1 px-4 text-gray-800">
                <a href="landing page.html">Hubungi Kami</a> 
            </Button>
          </div>
        </div>
    </div>
  </body>