<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-900 font-poppins text-white">
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
        <div class="container mx-auto px-4 py-8">
            <header class="flex justify-between items-center">
                <h1 class="text-md font-mono text-zinc-500"><a href="/"><span class="text-xl text-white"><-</span></a> PSDA PROVINSI SUMATERA SELATAN</h1>

            </header>


            <section class="px-4">
                <div class="container mx-auto mt-5">
                    <h1 class="text-3xl font-bold text-center mb-5 text-black">STRUKTUR ORGANISASI</h1>
                    <div class="flex flex-col items-center">
                        <!-- Kepala Dinas -->
                        <div class="bg-white shadow-lg rounded-lg p-5 mb-5 mt-5">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/KEPALA DINAS - HERWAN.jfif') }}" alt="Direktur Utama" class="w-24 h-24 rounded-full mx-auto mb-3">
                            <p class="text-lg font-bold text-black text-center">HERWAN</p>
                            <h2 class="text-xl font-bold text-black text-center">KEPALA DINAS</h2>
                        </div>

                        <!-- Second Level -->
                        <div class="flex justify-between w-full mb-5 mt-10">
                            <!-- UPTD Balai PSDA WS Musi -->
                            <div class="bg-white shadow-lg rounded-lg p-5 mx-2 mt-16">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/HENDRA (KEPALA UPTD).jpg') }}" alt="Kepala UPTD Balai PSDA WS Musi" class="w-20 h-20 rounded-full mx-auto mb-3">
                                <p class="text-lg font-bold text-black text-center">HENDRA</p>
                                <h3 class="text-lg font-bold text-black text-center mb-4">KEPALA UPTD BALAI<br>PSDA WS MUSI</h3>
                                <div class="flex flex-row justify-center gap-2">
                                    <div class="bg-white shadow-lg rounded-lg p-3">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/LUHUR BUDI CAHYONO (Plh. KASI).jpg') }}" alt="Bawahan 1" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">LUHUR BUDI CAHYONO</p>
                                        <h5 class="text-sm font-semibold text-black text-center">Bawahan 1</h5>
                                    </div>
                                    <div class="bg-white shadow-lg rounded-lg p-3">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/APRISANDI (KASI).jpg') }}" alt="Bawahan 2" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">APRISANDI</p>
                                        <h5 class="text-sm font-semibold text-black text-center">Bawahan 2</h5>
                                    </div>
                                    <div class="bg-white shadow-lg rounded-lg p-3">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/GHULAMIN HALIM (KASI).jfif') }}" alt="Bawahan 3" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">GHULAMIN</p>
                                        <h5 class="text-sm font-semibold text-black text-center">Bawahan 3</h5>
                                    </div>
                                </div>
                            </div>


                            <!-- Sekretaris -->
                            <div class="bg-white shadow-lg rounded-lg p-5 mx-2 mt-5">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/MEGAWATY (SEKRETARIS).jpg') }}" alt="Sekretaris" class="w-20 h-20 rounded-full mx-auto mb-3">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h3 class="text-lg font-bold text-black text-center mb-4">SEKRETARIS</h3>
                                <div class="flex flex-row justify-center gap-2">
                                    <div class="bg-white shadow-lg rounded-lg p-3 mt-5">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/HENDERI LIHUN (KASUBBAG).jpg') }}" alt="Kasubbag 1" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                        <h5 class="text-sm font-semibold text-black text-center">KASSUBAG</h5>
                                    </div>
                                    <div class="bg-white shadow-lg rounded-lg p-3 mt-5">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/IBNU ROSI (KASUBBAG).jpg') }}" alt="Kasubbag 2" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                        <h5 class="text-sm font-semibold text-black text-center">KASSUBAG</h5>
                                    </div>
                                    <div class="bg-white shadow-lg rounded-lg p-3 mt-5">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/MUKSIN (KASUBBAG).jpg') }}" alt="Kasubbag 3" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                        <h5 class="text-sm font-semibold text-black text-center">KASSUBAG</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- UPTD Balai PSDA WS Sugihan -->
                            <div class="bg-white shadow-lg rounded-lg p-5 mx-2 mt-16">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/YUNIL AZWAN (KEPALA UPTD).jpg') }}" alt="Kepala UPTD Balai PSDA WS Sugihan" class="w-20 h-20 rounded-full mx-auto mb-3">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h3 class="text-lg font-bold text-black text-center mb-4">KEPALA UPTD BALAI<br>PSDA WS SUGIHAN</h3>
                                <div class="flex flex-row justify-center gap-2">
                                    <div class="bg-white shadow-lg rounded-lg p-3">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/HARFANI (KASI).jpg') }}" alt="Bawahan 1" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                        <h5 class="text-sm font-semibold text-black text-center">Bawahan 1</h5>
                                    </div>
                                    <div class="bg-white shadow-lg rounded-lg p-3">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/FIRMANSYAH (KASI).jpg') }}" alt="Bawahan 2" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                        <h5 class="text-sm font-semibold text-black text-center">Bawahan 2</h5>
                                    </div>
                                    <div class="bg-white shadow-lg rounded-lg p-3">
                                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/SUDIYONO (KASI).jpg') }}" alt="Bawahan 3" class="w-16 h-16 rounded-full mx-auto mb-1">
                                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                        <h5 class="text-sm font-semibold text-black text-center">Bawahan 3</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <!-- Third Level -->
                <div class="flex justify-center gap-4 mt-20">
                    <!-- Kepala Bidang Rekayasa Teknik -->
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/NUMERI (KABID).jpg') }}" alt="Kepala Bidang Rekayasa Teknik" class="w-16 h-16 rounded-full mx-auto mb-3">
                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                        <h4 class="text-md font-bold text-black text-center mb-4">KEPALA BIDANG<br>REKAYASA TEKNIK</h4>
                        <div class="flex flex-row justify-center gap-2">
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/MUHAMMAD ROBIE CHEMISTRA (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/MERI MIARDI (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/ABDURRAHMAN (KASI).jpg') }}" alt="Kasi 3" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Kepala Bidang Operasi dan Pemeliharaan -->
                    <div class="bg-white shadow-lg rounded-xl p-5">
                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG OPERASI DAN PEMELIHARAAN/HENDRI JUMERSON (KABID).jpg') }}" alt="Kepala Bidang Operasi dan Pemeliharaan" class="w-16 h-16 rounded-full mx-auto mb-3">
                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                        <h4 class="text-md font-bold text-black text-center mb-4">KEPALA BIDANG<br>OPERASI & PEMELIHARAAN</h4>
                        <div class="flex flex-row justify-center gap-2">
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG OPERASI DAN PEMELIHARAAN/HARIMAN FILINO PASARIBU (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG OPERASI DAN PEMELIHARAAN/ERNI ARMA (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Kepala Bidang Bina Manfaat -->
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/MOCHAMMAD RIO ROZI (KABID).jpg') }}" alt="Kepala Bidang Bina Manfaat" class="w-16 h-16 rounded-full mx-auto mb-3">
                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                        <h4 class="text-md font-bold text-black text-center mb-4">KEPALA BIDANG<br>BINA MANFAAT</h4>
                        <div class="flex flex-row justify-center gap-2">
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/KHOIRUL AZHAR (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/ARVID ARNOLDY (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/ARI MUKHTARIYADI (KASI).jpg') }}" alt="Kasi 3" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Kepala Bidang Rekayasa Teknik (Kotak ke-4) -->
                    <div class="bg-white shadow-lg rounded-lg p-5">
                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/NUMERI (KABID).jpg') }}" alt="Kepala Bidang Rekayasa Teknik" class="w-16 h-16 rounded-full mx-auto mb-3">
                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                        <h4 class="text-md font-bold text-black text-center mb-4">KEPALA BIDANG<br>REKAYASA TEKNIK</h4>
                        <div class="flex flex-row justify-center gap-2">
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/MUHAMMAD ROBIE CHEMISTRA (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/MERI MIARDI (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                            <div class="bg-white shadow-lg rounded-lg p-3">
                                <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/ABDURRAHMAN (KASI).jpg') }}" alt="Kasi 3" class="w-16 h-16 rounded-full mx-auto mb-1">
                                <p class="text-lg font-bold text-black text-center">HERWAN</p>
                                <h5 class="text-sm font-semibold text-black text-center">KASI</h5>
                            </div>
                        </div>
                    </div>
                </div> <!-- Third Level -->

                            </div>
                        </div>
                    </div>
                </section>

            <!-- Footer Section -->
            <footer class="bg-gray-800 text-center py-4 text-gray-400">
                <p>&copy; 2024 Dinas X. All Rights Reserved.</p>
                <div class="flex justify-center space-x-6 mt-4">
                    <a href="#" class="hover:text-white">Facebook</a>
                    <a href="#" class="hover:text-white">Twitter</a>
                    <a href="#" class="hover:text-white">LinkedIn</a>
                </div>
            </footer>

</body>
</html>
