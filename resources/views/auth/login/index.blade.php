@extends('layout.main')
@section('title', 'Login')

@section('container')

    <body class="bg-background-color font-poppins">
        <div class="my-16 mx-20 flex justify-between">
            <!-- Gambar kiri -->
            <div class="rounded-lg mr-5">
                <img src="{{ asset('images/bangunan psda.jpeg') }}" alt=""
                    class="rounded-lg w-[1400px] h-[521px] object-cover ">
            </div>

            <!-- Form Login -->
            <div class="container rounded-lg w-[510px] h-[520px] bg-gray-300 shadow-xl">

                <div class="flex mx-auto justify-center">
                    <div class="mt-6">
                        <img src="{{ asset('images/Logo DPSDA-01 2.png') }}" class="w-[225px] -ml-3 " alt="">
                    </div>
                    <div class="mt-6">
                        <img src="{{ asset('images/logo sumsel.png') }}" alt="" class="w-[45px] ml-2 mt-1">
                    </div>
                </div>
                <h1 class="text-[25px] font-bold text-center mt-14"> SILAHKAN LOGIN</h1>

                <div class="container mt-20 mx-12">
                    <form action="{{ route('authanticate') }}" method="POST">
                        @csrf

                        <div class="mb-2">
                            <label class="block text-base font-medium text-gray-700" for="email">Masukkan email</label>
                            <input type="text" name="email" id="email" placeholder="cth.admin@gmail.com"
                                class="block px-4 py-2 border border-gray-300 rounded-md shadow-sm w-[250px]"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-base font-medium text-gray-700" for="password">Kata sandi</label>
                            <input type="password" name="password" id="password" placeholder="masukkan kata sandi"
                                class="block px-4 py-2 border border-gray-300 rounded-md shadow-sm w-[250px]">
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <button type="submit"
                                class="w-[144px] px-4 py-2 bg-yellow-500 text-white font-medium rounded-lg hover:bg-yellow-700 ">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Form Login -->
        </div>
    </body>



    {{-- <div class="flex justify-center pt-10">
        <div
            class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
            <div class="w-full">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold text-gray-900">Masuk</h1>
                    <p class="mt-2 text-gray-500">Sign in below to access your account</p>
                </div>
                <div class="mt-5">

                    <form action"{{ route('authanticate') }}" method="POST">
                        @csrf

                        <div class="relative mt-6">
                            <input type="email" name="email" id="email" placeholder="Email Address"
                                class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                                autocomplete="NA" />
                            @error('email')
                                <p class="text-red-">{{ $message }}</p>
                            @enderror
                            <label for="email"
                                class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Email
                                Address</label>
                        </div>
                        <div class="relative mt-6">
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" />
                            <label for="password"
                                class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Password</label>
                            @error('password')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-6">
                            <button type="submit"
                                class="w-full rounded-md bg-black px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Sign
                                in</button>
                        </div>
                        <p class="text-center text-sm text-gray-500">Don&#x27;t have an account yet?
                            <a href="#!"
                                class="font-semibold text-gray-600 hover:underline focus:text-gray-800 focus:outline-none">Sign
                                up
                            </a>.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- error session --}}
    @if (session()->has('error'))
        <div role="alert" class="flex justify-center pt-3">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Gagal
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-white-700">
                <p>Something not ideal might be happening.</p>
            </div>
        </div>
        <script>
            setTimeout(function() {
                document.querySelector('[role="alert"]').remove();
            }, 5000);
        </script>
    @endif
@endsection
