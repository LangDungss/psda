

@extends('layout.irigasi.temp_navbarlayanan')

@section('content')
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
</main>
@endsection
