{{--  <!DOCTYPE html>
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
            <a class="text-teal-600 flex items-center" href="#">
                <img src="{{ asset('images/logopsda.png') }}" class="h-14" alt="logo PSDA">
            </a>
            <a href="#">
                <img src="{{ asset('images/logoall2.png') }}" class="h-14" alt="logoall2">
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="mx-auto px-4 py-8">
        <header class="flex justify-between items-center">
            <h1 class="text-md font-mono text-zinc-500"><a href="/"><span class="text-xl text-white"><-</span></a> PSDA PROVINSI SUMATERA SELATAN</h1>
        </header>

        <section class="px-4">
            <div class="container mx-auto mt-5">
                <h1 class="text-3xl font-bold text-center mb-5 text-black">STRUKTUR ORGANISASI DINAS PSDA<br>PROVINSI SUMATERA SELATAN</h1>
                <div class="flex flex-col items-center">
                    <!-- Kepala Dinas -->
                    <div class="bg-white shadow-lg rounded-lg p-5 mb-5 mt-5">
                        <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/KEPALA DINAS - HERWAN.jfif') }}" alt="Direktur Utama" class="w-24 h-24 rounded-full mx-auto mb-3">
                        <p class="text-lg font-bold text-black text-center">KEPALA DINAS PENGELOLAAN SUMBER DAYA AIR PROVINSI SUMATERA SELATAN</p>
                        <h2 class="text-lg text-black text-center">Ir. H. HERWAN, MM</h2>
                        <h2 class="text-lg text-black text-center">PEMBINA UTAMA MADYA (IV/d) NIP. 19660601 199003 1 004</h2>
                    </div>

                    <!-- Second Level -->
                    <div class="flex justify-between w-full mb-5 mt-10">
                        <!-- UPTD Balai PSDA WS Musi -->
                        <div class="bg-white shadow-lg rounded-lg p-5 mx-2 mt-16">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/HENDRA (KEPALA UPTD).jpg') }}" alt="Kepala UPTD Balai PSDA WS Musi" class="w-20 h-20 rounded-full mx-auto mb-3">
                            <p class="text-black text-center font-bold">KEPALA UPTD BALAI PSDA WILAYAH SUNGAI MUSI</p>
                            <h5 class="font-semibold text-sm text-black text-center">HENDRA, ST, M.Si</h5>
                            <h5 class="font-semibold text-sm text-black text-center mb-4">PENATA TK. I (III/d) NIP. 19800321 200901 1 015</h5>
                            <div class="flex flex-col gap-2">
                                <!-- Bawahan 1 -->
                                <!-- Bawahan 2 -->
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/APRISANDI (KASI).jpg') }}" alt="Bawahan 2" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SUB BAGIAN TATA USAHA</p>
                                        <h5 class="text-sm font-semibold text-black">APRISANDI, S.IP</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA (III/c) NIP. 19840422 </h5>
                                    </div>
                                </div>
                                <!-- Bawahan 3 -->
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/GHULAMIN HALIM (KASI).jfif') }}" alt="Bawahan 3" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SEKSI HIDROLOGI</p>
                                        <h5 class="text-sm font-semibold text-black">GHULAMIN HALIM, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA (III/c) NIP.19821015 200903 1 006</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/LUHUR BUDI CAHYONO (Plh. KASI).jpg') }}" alt="Bawahan 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">Plh. KEPALA SEKSI OPERASIONAL</p>
                                        <h5 class="text-sm font-semibold text-black">LUHUR BUDI CAHYONO, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA MUDA TK. I (III/b) NIP. 19900517 201903 1 009 </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sekretaris -->
                        <div class="bg-white shadow-lg rounded-lg p-5 mx-2 mt-5">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/MEGAWATY (SEKRETARIS).jpg') }}" alt="Sekretaris" class="w-20 h-20 rounded-full mx-auto mb-3">
                            <p class="font-bold text-black text-center">SEKRETARIS</p>
                            <h5 class="font-semibold text-sm text-black text-center">Dr. Hj. MEGAWATY, ST, MT</h5>
                            <h5 class="font-semibold text-sm text-black text-center mb-4">PEMBINA TK. I (IV/b) NIP. 19771204 199703 2 004</h5>
                            <div class="flex flex-col gap-2">
                                <!-- Bawahan Sekretaris -->
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/IBNU ROSI (KASUBBAG).jpg') }}" alt="Kasubbag 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SUB BAGIAN PERENCANAAN, EVALUASI & PELAPORAN</p>
                                        <h5 class="text-sm font-semibold text-black">IBNU ROSI, SH, MH</h5>
                                        <h5 class="text-sm font-semibold text-black">PEMBINA (IV/a) NIP. 19781111 199903 1 003</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/MUKSIN (KASUBBAG).jpg') }}" alt="Kasubbag 2" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SUB BAGIAN KEUANGAN</p>
                                        <h5 class="text-sm font-semibold text-black">MUKSIN MB, SE, M.Si</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19780316 200701 1 017</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/SEKRETARIAT/HENDERI LIHUN (KASUBBAG).jpg') }}" alt="Kasubbag 3" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SUB BAGIAN UMUM & KEPEEGAWAIAN</p>
                                        <h5 class="text-sm font-semibold text-black">HENDERI LIHUN, S.Sos, M.Si</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19791015 200701 1 016</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- UPTD Balai PSDA WS Sugihan -->
                        <div class="bg-white shadow-lg rounded-lg p-5 mx-2 mt-16">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/YUNIL AZWAN (KEPALA UPTD).jpg') }}" alt="Kepala UPTD Balai PSDA WS Sugihan" class="w-20 h-20 rounded-full mx-auto mb-3">
                            <p class="font-bold text-black text-center">KEPALA UPTD BALAI PSDA WILAYAH SUNGAI SUGIHAN</p>
                            <h5 class="font-semibold text-sm text-black text-center ">YUNIL AZWAN, ST, MT</h5>
                            <h5 class="font-semibold text-sm text-black text-center mb-4">PEMBINA TK. I (IV/b) NIP. 19670929 199803 1 004</h5>
                            <div class="flex flex-col gap-2">
                                <!-- Bawahan 1 -->
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/SUDIYONO (KASI).jpg') }}" alt="Bawahan 3" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SUB BAGIAN TATA USAHA</p>
                                        <h5 class="text-sm font-semibold text-black">SUDIYONO, S.Sos</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19720930 199803 1 003</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/HARFANI (KASI).jpg') }}" alt="Bawahan 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SEKSI HIDROLOGI</p>
                                        <h5 class="text-sm font-semibold text-black">HARFANI, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19690917 199102 1 001</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS SUGIHAN/FIRMANSYAH (KASI).jpg') }}" alt="Bawahan 2" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="text-black text-sm font-bold">KEPALA SEKSI OPERASIONAL</p>
                                        <h5 class="text-sm font-semibold text-black">FIRMANSYAH, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA (III/c) NIP. 19750630 200901 1 006</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Level -->
                    <div class="flex justify-center gap-4 mt-20">
                        <!-- Kepala Bidang Rekayasa Teknik -->
                        <div class="bg-white shadow-lg rounded-lg p-5">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/NUMERI (KABID).jpg') }}" alt="Kepala Bidang Rekayasa Teknik" class="w-16 h-16 rounded-full mx-auto mb-3">
                            <p class="font-bold text-black text-center">KEPALA BIDANG REKAYASA TEKNIK</p>
                            <h5 class="font-semibold text-sm text-black text-center">NUMERI, ST, MPSDA</h5>
                            <h5 class="font-semibold text-sm text-black text-center mb-4">PEMBINA TK. I (IV/b) NIP. 19750130 199703 1 003</h5>
                            <div class="flex flex-col gap-2">
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/ABDURRAHMAN (KASI).jpg') }}" alt="Kasi 3" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI SURVEY</p>
                                        <h5 class="text-sm font-semibold text-black">ABDURRAHMAN, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA MUDA TK. I (III/b) NIP. 19910302 201903 1 006</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/MUHAMMAD ROBIE CHEMISTRA (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI DESAIN IRIGASI DAN RAWA</p>
                                        <h5 class="text-sm font-semibold text-black">MUHAMMAD ROBIE CHEMISTRA, S.Si, MPWK</h5>
                                        <h5 class="text-sm font-semibold text-black">PEMBINA (IV/a) NIP. 19850629 200803 1 001</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG REKAYASA TEKNIK/MERI MIARDI (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI DESAIN SUNGAI DAN DANAU</p>
                                        <h5 class="text-sm font-semibold text-black">MERI MIARDI, ST, M.Si</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19791106 200801 1 003</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kepala Bidang Operasi dan Pemeliharaan -->
                        <div class="bg-white shadow-lg rounded-lg p-5">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG OPERASI DAN PEMELIHARAAN/HENDRI JUMERSON (KABID).jpg') }}" alt="Kepala Bidang Operasi dan Pemeliharaan" class="w-16 h-16 rounded-full mx-auto mb-3">
                            <p class="font-bold text-black text-center">KEPALA BIDANG OPERASI DAN PEMELIHARAAN</p>
                            <h5 class="font-semibold text-sm text-black text-center">HENDERI JUMERSON, ST</h5>
                            <h5 class="font-semibold text-sm text-black text-center mb-4">PEMBINA (IV/a) NIP. 19730309 200701 1 028 </h5>
                            <div class="flex flex-col gap-2">
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG OPERASI DAN PEMELIHARAAN/ERNI ARMA (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI OPERASI</p>
                                        <h5 class="text-sm font-semibold text-black">ERNI ARMA, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19760502 200701 2 027</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG OPERASI DAN PEMELIHARAAN/HARIMAN FILINO PASARIBU (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">Plt. KEPALA SEKSI PEMELIHARAAN</p>
                                        <h5 class="text-sm font-semibold text-black">H. HERMANSYAH, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19750629 201001 1 006</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG OPERASI DAN PEMELIHARAAN/HARIMAN FILINO PASARIBU (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI PENANGGULANGAN DARURAT</p>
                                        <h5 class="text-sm font-semibold text-black">HARIMAN FILINO PASARIBU, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19801229 200801 1 003</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kepala Bidang Bina Manfaat -->
                        <div class="bg-white shadow-lg rounded-lg p-5">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/MOCHAMMAD RIO ROZI (KABID).jpg') }}" alt="Kepala Bidang Bina Manfaat" class="w-16 h-16 rounded-full mx-auto mb-3">
                            <p class="font-bold text-black text-center">KEPALA BIDANG BINA MANFAAT</p>
                            <h5 class="font-semibold text-sm text-black text-center">MOCHAMMAD RIO ROZI, ST, STP, MM</h5>
                            <h5 class="font-semibold text-sm text-black text-center mb-4">PEMBINA (IV/a) NIP. 19801014 200604 1 005</h5>
                            <div class="flex flex-col gap-2">
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/KHOIRUL AZHAR (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI SARANA TEKNIK</p>
                                        <h5 class="text-sm font-semibold text-black">KHOIRUL AZHAR, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19710513 200604 1 008</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/ARVID ARNOLDY (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI PENGAWASAN DAN PENGENDALIAN</p>
                                        <h5 class="text-sm font-semibold text-black">ARVID ARNOLDY, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19790620 200701 1 014</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG BINA MANFAAT/ARI MUKHTARIYADI (KASI).jpg') }}" alt="Kasi 3" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI KERJASAMA</p>
                                        <h5 class="text-sm font-semibold text-black">ARI MUKHTARIYADI, ST, MT</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19810128 200801 1 002</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kepala Bidang Konstruksi -->
                        <div class="bg-white shadow-lg rounded-lg p-5">
                            <img src="" alt="Kepala Bidang Konstruksi" class="w-16 h-16 rounded-full mx-auto mb-3">
                            <p class="font-bold text-black text-center">KEPALA BIDANG KONSTRUKSI</p>
                            <h5 class="font-semibold text-sm text-black text-center">RIZALDY MAHAPATRA, ST, MT</h5>
                            <h5 class="font-semibold text-sm text-black text-center mb-4">PEMBINA TK. I (IV/b) NIP. 19760815 200312 1 007</h5>
                            <div class="flex flex-col gap-2">
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG KONSTRUKSI/ALI AL QAUTSAR (KASI).jpg') }}" alt="Kasi 1" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI KONSTRUKSI IRIGASI DAN RAWA</p>
                                        <h5 class="text-sm font-semibold text-black">ALI AL QAUTSAR, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA MUDA TK. I (III/b) NIP. 19811111 200701 1 017</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG KONSTRUKSI/WAWAN SULISTIYO (KASI).jpg') }}" alt="Kasi 2" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI KONSTRUKSI SUNGAI DAN DANAU</p>
                                        <h5 class="text-sm font-semibold text-black">WAWAN SULISTIYO, S</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA (III/c) NIP. 19720518 199703 1 004</h5>
                                    </div>
                                </div>
                                <div class="bg-white shadow-lg rounded-lg p-3 flex items-center">
                                    <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/BIDANG KONSTRUKSI/ANIE NURWULAN (KASI).jpg') }}" alt="Kasi 3" class="w-16 h-16 rounded-full mr-3">
                                    <div>
                                        <p class="font-bold text-black text-sm">KEPALA SEKSI TATA TEKNIK</p>
                                        <h5 class="text-sm font-semibold text-black">Hj. ANIE NURWULAN, ST</h5>
                                        <h5 class="text-sm font-semibold text-black">PENATA TK. I (III/d) NIP. 19690602 199703 2 002</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

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

{{--

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

    <style></style>
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
    <title>Landing Page</title>
</head>

<body class="text-gray-800 bg-blue-900">

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





        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <header class="flex justify-between items-center">
            <h1 class="text-md font-mono text-zinc-500"><a href="/layananpsda"><span class="text-xl text-white"><-</span></a> PSDA PROVINSI SUMATERA SELATAN</h1>

        </header>

        <!--Bagian Air manna-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air manna.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “DAERAH IRIGASI <br> AIR MANNA LAHAT“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/rehabilitasi air manna.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Rehabilitasi Jaringan Irigasi Daerah Irigasi Air Manna
                </p>
            </div>

        </div>
    </section>
</main>


<!--Bagian Musi Rawas-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/airderas1.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “DAERAH IRIGASI<br>AIR DERAS I , MUSI RAWAS“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/rehabairderas.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Rehabilitasi Jaringan Irigasi Daerah Irigasi Air Deras
                </p>
            </div>

        </div>
    </section>
</main>

<!--Bagian Oku Selatan-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sumur oku selatan.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “DAERAH IRIGASI<br>AIR SUNUR, OKU SELATAN“
                </p>
            </div>

             <!-- Gambar tengah -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sumur oku selatan2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">

            </div>
             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sumur oku selatan3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Rehabilitasi Jaringan Irigasi Daerah Irigasi Air Deras
                </p>
            </div>

        </div>
    </section>
</main>

<!--Air satan musi rawas-->

<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air satan.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-4xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “PEMELIHARAAN<br>DAERAH IRIGASI“
                </p>
            </div>

             <!-- Gambar tengah -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air satan2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">

            </div>
             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air satan3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Lokasi :Air Satan, Musi Rawas
                </p>
            </div>

        </div>
    </section>
</main>

<!-- Megang Tikip Musi Rawas -->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Baris pertama -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri pertama -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">

            </div>

            <!-- Gambar kanan pertama -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
            </div>
        </div>

        <!-- Baris kedua -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “PEMELIHARAAN DAERAH IRIGASI<br>MEGANG TIKIP, MUSI RAWAS“
                </p>
            </div>

            <!-- Gambar kanan kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/megang tikip4.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic absolute bottom-2 left-2 px-2 py-1">
                I Pemeliharaan Daerah Irigasi Megang Tikip, Musi Rawas
                </p>
            </div>
        </div>
    </section>
</main>

<!--Bagian Tebing Panjang-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/tebing panjang.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “REHABILITASI JARINGAN<br>IRIGASI, DAERAH IRIGASI<br>TEBING PANJANG“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/tebing panjang2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Lokasi :Tebing Panjang, Lahat
                </p>
            </div>

        </div>
    </section>
</main>

<!--Bagian Air Gohong-->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Frame untuk gambar kiri dan kanan -->
        <div class="flex justify-between mt-6">
            <!-- Gambar kiri -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air gohong.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “REHABILITASI<br>JARINGAN IRIGASI“
                </p>
            </div>

             <!-- Gambar kanan -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air gohong2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kanan">
                <p class="text-white text-lg italic bottom-2 ">
                    I Lokasi :Air Gohong, Lahat
                </p>
            </div>

        </div>
    </section>
</main>

<!-- Air Sungkai -->
<main class="mt-8">
    <section class="p-6 rounded-lg shadow-md bg-blue-950">
        <!-- Baris pertama -->
        <div class="flex mt-6 gap-2">
            <!-- Kolom kiri (3 foto kecil di sebelah kiri) -->
            <div class="grid grid-cols-3 gap-2 w-1/2">
                <div class="p-1">
                    <img src="{{ asset('images/air sungkai.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri 1">
                </div>
                <div class="p-1">
                    <img src="{{ asset('images/air sungkai2.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri 2">
                </div>
                <div class="p-1">
                    <img src="{{ asset('images/air sungkai3.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Kiri 3">
                </div>
            </div>

            <!-- Kolom kanan (foto besar di sebelah kanan) -->
            <div class="w-1/2 p-1">
                <img src="{{ asset('images/air sungkai4.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Besar Kanan">
            </div>
        </div>

        <!-- Baris kedua -->
        <div class="flex justify-between mt-6 gap-2">
            <!-- Foto besar pertama di baris kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sungkai5.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Besar Bawah Kiri">
                <p class="font-bold text-white text-3xl italic absolute bottom-2 left-2 px-2 py-1 rounded-lg">
                    “REHABILITASI<br>JARINGAN IRIGASI“
                </p>
            </div>

            <!-- Foto besar kedua di baris kedua -->
            <div class="w-1/2 p-2 relative">
                <img src="{{ asset('images/air sungkai6.png') }}" class="w-full h-auto border border-gray-300 rounded-lg" alt="Gambar Besar Bawah Kanan">
                <p class="text-white text-lg italic absolute bottom-2 left-2 px-2 py-1">
                    I Lokasi :Air Sungkai, Oku Selatan
                </p>
            </div>
        </div>
    </section>
</main>



        <footer class="mt-8 text-center">
            <p class="text-white">#PSDA TANGGAP Alamat : Jalan Anwar Sastro, No. 1251 Telefon : 0711 35 2362 Fax : 0711 361381 Instagram : @dinaspsdaprov.sumsel</p>
        </footer>




</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
    <title>Home</title>
</head>

<body class="bg-gray-100 text-gray-800 font-poppins overflow-x-hidden">

    <!-- Header -->
    <header class="bg-amber-400">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center gap-4">
                    <!-- Sidebar toggle button for mobile -->
                    <button onclick="toggleNavbar()" class="rounded bg-gray-100 p-2 text-gray-600 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <a class="block text-teal-600" href="#">
                        <img src="{{asset('images/logopsda.png')}}" class="h-10 md:h-14">
                    </a>
                </div>

                <!-- Navbar items for desktop -->
                <div class="md:flex md:items-center md:gap-12">
                    <!-- Navbar items, initially hidden on small screens -->
                    <nav aria-label="Global" class="hidden md:block" id="navbarMenu">
                        <ul class="flex items-center gap-6 text-sm">
                            <li><a class="text-black hover:text-gray-500/75" href="/"> Beranda </a></li>
                            <li><a class="text-black hover:text-gray-500/75" href="{{ route('home.layananpsda.layanankami') }}"> Layanan </a></li>
                            <li><a class="text-black hover:text-gray-500/75" href="/tentang"> Tentang Kami </a></li>
                            <li><a class="text-black hover:text-gray-500/75" href="/contact"> Hubungi Kami </a></li>
                        </ul>
                    </nav>

                    <div class="flex items-center gap-4">
                        <a class="rounded-md bg-blue-600 hover:bg-amber-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="{{route('login')}}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar for mobile -->
    <nav id="navbarMenuSidebar" class="fixed top-0 left-0 h-full w-64 bg-amber-300 shadow-lg transform transition-transform -translate-x-full md:hidden z-50">
        <div class="flex justify-end p-4">
            <button onclick="toggleNavbar()" class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-start gap-6 text-sm p-6">
            <li><a class="text-black hover:text-gray-500" href="/">Beranda</a></li>
            <li><a class="text-black hover:text-gray-500" href="{{ route('home.layananpsda.layanankami') }}">Layanan</a></li>
            <li><a class="text-black hover:text-gray-500" href="/tentang">Tentang Kami</a></li>
            <li><a class="text-black hover:text-gray-500" href="/contact">Hubungi Kami</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16 px-4 text-center">
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 lg:items-center">
            <div class="flex justify-center">
                <img src="{{ asset('images/sumsel.png') }}" class="h-40 md:h-60">
            </div>
            <div class="flex flex-col items-center">
                <h1 class="text-2xl md:text-4xl font-bold mb-4">SELAMAT DATANG DI NOTA DINAS DIGITAL</h1>
                <p class="text-lg md:text-2xl font-semibold mb-8">DINAS PSDA PROVINSI <br> SUMATERA SELATAN</p>
                <img src="{{ asset('images/logoall2.png') }}" class="h-14 md:h-20">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/psda1.png') }}" class="h-40 md:h-60">
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="absolute inset-0 bg-gray-900/75 sm:bg-transparent"></div>
        <div class="relative mx-auto max-w-screen-xl px-4 py-20 sm:px-6 lg:flex lg:h-2/4 lg:items-center lg:px-8 text-center">
            <div class="max-w-xl mx-auto text-center">
                <h1 class="font-extrabold text-2xl md:text-4xl text-white">
                    <strong>Layanan Kami</strong>
                </h1>
                <p class="mt-4 max-w-lg text-sm md:text-xl text-white">
                    Kami Dinas Pengelola Sumber Daya Air menyediakan berbagai macam layanan pengelolaan sumber daya air. Berikut berbagai macam layanan yang kami sediakan:
                </p>
                <a href="/layananpsda" class="mt-8 block w-full rounded bg-blue-600 px-8 py-3 text-sm font-medium text-white shadow hover:bg-amber-600 sm:w-auto">
                    SELENGKAPNYA
                </a>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section class="py-16 px-4 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">
            <div class="md:w-1/2">
                <img src="{{asset('images/gedung psda.jpeg')}}" alt="Tentang Kami" class="rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Tentang Dinas PSDA Provinsi Sumatera Selatan</h2>
                <p class="text-sm md:text-lg text-black font-bold">Dinas Pengelolaan Sumber Daya Air (PSDA) Sumatera Selatan adalah lembaga pemerintah daerah yang bertugas mengelola sumber daya air di provinsi Sumatera Selatan.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6 text-center">
        <div class="container mx-auto">
            <p>&copy; 2024 Dinas PSDA Provinsi Sumatera Selatan. All rights reserved.</p>
            <p class="mt-2">Jl. Kapten Anwar Sastro, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30121 | Telp: (021) 12345678 | Email: dinaspengelolaansdasumsel@gmail.com</p>
        </div>
    </footer>

    <script>
        function toggleNavbar() {
            const navbarSidebar = document.getElementById("navbarMenuSidebar");
            const body = document.body;

            navbarSidebar.classList.toggle("-translate-x-full");
            body.classList.toggle("overflow-hidden");
        }
    </script>
</body>
</html>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kop Surat</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center; /* Memusatkan konten secara horizontal */
            align-items: center; /* Memusatkan konten secara vertikal */
            min-height: 100vh; /* Tinggi minimal sesuai viewport */
            background-color: #f9f9f9; /* Background untuk kontras */
        }

        .kop-surat {
            width: 21cm; /* Ukuran A4 */
            height: 29.7cm; /* Ukuran A4 */
            padding: 2cm 2.5cm;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan */
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-right: 15px;
        }

        .header-text {
            text-align: center;
            flex: 1;
        }

        .header-text h1 {
            font-size: 18px;
            margin: 0;
        }

        .header-text h2 {
            font-size: 16px;
            margin: 5px 0;
        }

        .header-text p {
            font-size: 12px;
            margin: 0;
        }

        .line {
            border: none;
            border-top: 2px solid black;
            margin: 10px 0;
        }

        .content {
            font-size: 12px;
            line-height: 1.5;
        }

        .content h3,
        p.nomor {
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
        }

        .content .top-right {
            text-align: right;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }

        .table-header {
            font-weight: bold;
            background-color: #f4f4f4;
        }

        .table-title {
            text-align: left;
            font-weight: bold;
            padding: 5px;
        }

        input[type="checkbox"] {
            width: 20px; /* Sesuaikan ukuran checkbox */
            height: 20px;
            margin: 0; /* Menghapus margin default untuk lebih rapi */
        }

        td:first-child {
            width: 25%;
        }

        td:nth-child(2) {
            width: 30%;
        }

        td:nth-child(3) {
            width: 20%;
        }

        td:nth-child(4) {
            width: 25%;
        }

        input {
            width: 100%; /* Sesuaikan lebar input dengan kolom */
            border: none; /* Hilangkan border bawaan */
            border-bottom: 1px solid black; /* Tambahkan garis bawah */
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            padding: 2px;
            word-wrap: break-word; /* Memungkinkan teks berpindah ke baris baru */
            white-space: normal; /* Memastikan teks tidak dalam satu baris */
            overflow-wrap: break-word; /* Pecah kata panjang */
            overflow: hidden; /* Hilangkan scroll */
            height: 30px; /* Menyesuaikan tinggi input dengan ukuran textarea */
        }

        input:focus {
            outline: none; /* Hilangkan border biru saat fokus */
            border-bottom: 1px solid blue; /* Tambahkan garis bawah biru */
        }

        .editable {
            border: none;
            border-bottom: 1px solid black; /* Garis bawah untuk efek pengisian */
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            width: 150px; /* Lebar input */
            text-align: left; /* Posisi teks di kiri */
            padding: 2px;
            height: 30px; /* Tinggi input agar serupa dengan textarea */
        }

        .editable:focus {
            outline: none; /* Hilangkan garis fokus default */
            border-bottom: 1px solid blue; /* Garis bawah saat fokus */
        }
    </style>
</head>
<body>
    <!--header-->
    <div class="kop-surat">
        <div class="header">
            <img src="{{ asset('images/kopsurat/logoKop.png') }}" alt="Logo" class="logo">
            <div class="header-text">
                <h1>PEMERINTAH PROVINSI SUMATERA SELATAN</h1>
                <h2>DINAS PENGELOLAAN SUMBER DAYA AIR</h2>
                <p>Jalan Kapten Anwar Sastro No. 1251, Ilir Timur I, Palembang Sumatera Selatan</p>
                <p>Telepon (0711) 352362, Faksimile (0711) 361381</p>
            </div>
        </div>

        <hr class="line">

        <!--Main Content-->
        <div class="content">
            <div class="top-right">
                <p>
                    Palembang, <input type="text" placeholder="Isi Tanggal" class="editable" />
                </p>
                <p>
                    Kepada<br>
                    Yth, Kepala Dinas Pengelolaan Sumber<br>
                    Daya Air Provinsi Sumatera Selatan<br>
                    di Palembang
                </p>
            </div>

            <h3>FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</h3>
            <p class="nomor">
                Nomor: <input type="text" placeholder="Isi Nomor Surat" class="editable" />
            </p>

            <!--Bagian I. DATA PEGAWAI-->
            <table>
                <!-- Judul Tabel -->
                <tr>
                    <td colspan="4" class="table-title">I. DATA PEGAWAI</td>
                </tr>
                <!-- Baris 1 -->
                <tr>
                    <td>Nama</td>
                    <td><input type="text" placeholder="Isi Nama" /></td>
                    <td>NIP</td>
                    <td><input type="text" placeholder="Isi NIP" /></td>
                </tr>
                <!-- Baris 2 -->
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" placeholder="Isi Jabatan" /></td>
                    <td>Masa Kerja</td>
                    <td><input type="text" placeholder="Isi Masa Kerja" /></td>
                </tr>
                <!-- Baris 3 -->
                <tr>
                    <td>Unit Kerja</td>
                    <td colspan="3"><input type="text" placeholder="Isi Unit Kerja" /></td>
                </tr>
            </table>

            <!--II. JENIS CUTI YANG DIAMBIL-->
            <table>
                <!-- Judul Tabel -->
                <tr>
                    <td colspan="4" class="table-title">II. JENIS CUTI YANG DIAMBIL</td>
                </tr>
                <!-- Baris 1 -->
                <tr>
                    <td>1. Cuti Tahunan</td>
                    <td><input type="checkbox" id="cuti-tahunan"></td>
                    <td>4. Cuti Melahirkan</td>
                    <td><input type="checkbox" id="cuti-melahirkan"></td>
                </tr>
                <!-- Baris 2 -->
                <tr>
                    <td>2. Cuti Besar</td>
                    <td><input type="checkbox" id="cuti-besar"></td>
                    <td>5. Cuti Alasan Penting</td>
                    <td><input type="checkbox" id="cuti-alasan-penting"></td>
                </tr>
                <!-- Baris 3 -->
                <tr>
                    <td>3. Cuti Sakit</td>
                    <td><input type="checkbox" id="cuti-sakit"></td>
                    <td>6. Cuti Lain-lain</td>
                    <td><input type="checkbox" id="cuti-lain-lain"></td>
                </tr>
            </table>


            <!--Bagian III. ALASAN CUTI-->
            <table>
                <tr>
                    <td colspan="4" class="table-title">III. ALASAN CUTI</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="text" placeholder="Isi Alasan Cuti" class="editable" />
                    </td>
                </tr>
            </table>

            <!--Bagian IV. PERSYARATAN-->
            <table>
                <tr>
                    <td colspan="4" class="table-title">IV. PERSYARATAN</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="text" placeholder="Isi Persyaratan" class="editable" />
                    </td>
                </tr>
            </table>

            <!--Bagian V. TANDA TANGAN-->
            <table>
                <tr>
                    <td colspan="4" class="table-title">V. TANDA TANGAN</td>
                </tr>
                <tr>
                    <td>
                        Mengetahui<br>
                        Atasan Langsung
                    </td>
                    <td colspan="3">
                        <input type="text" placeholder="Isi Nama Atasan Langsung" class="editable" />
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="height: 40px;">&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>



 <!--Bagian IV. LAMANYA CUTI-->
            <table>
                <tr>
                    <td colspan="4" class="table-title">IV. LAMANYA CUTI</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="text" placeholder="Keterangan" class="editable" />
                    </td>
                </tr>
            </table>

             <!--Bagian V. CATATAN CUTI-->
             <table>
                <!-- Judul Tabel -->
                <tr>
                    <td colspan="4" class="table-title">V. CATATAN CUTI</td>
                </tr>

                <!-- Baris 1 -->
                <tr>
                    <td colspan="3">1. CUTI TAHUNAN</td>
                    <td>2. CUTI BESAR</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <!-- Subkolom untuk CUTI TAHUNAN -->
                <tr>
                    <td>Tahun</td>
                    <td>Sisa</td>
                    <td>Keterangan</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td colspan="2"></td>
                </tr>

                <!-- Baris 2 -->
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td>3. CUTI SAKIT</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>

                <!-- Baris 3 -->
                <tr>
                    <td colspan="3"></td>
                    <td>4. CUTI MELAHIRKAN</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>

                <!-- Baris 4 -->
                <tr>
                    <td colspan="3"></td>
                    <td>5. CUTI KARENA ALASAN PENTING</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>

                <!-- Baris 5 -->
                <tr>
                    <td colspan="3"></td>
                    <td>6. CUTI DILUAR TANGGUNGAN NEGARA</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
            </table>



             <!--Bagian I. DATA PEGAWAI-->
            <table>
                <!-- Judul Tabel -->
                <tr>
                    <td colspan="4" class="table-title">I. DATA PEGAWAI</td>
                </tr>
                <!-- Baris 1 -->
                <tr>
                    <td>Nama</td>
                    <td><input type="text" placeholder="Isi Nama" /></td>
                    <td>NIP</td>
                    <td><input type="text" placeholder="Isi NIP" /></td>
                </tr>
                <!-- Baris 2 -->
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" placeholder="Isi Jabatan" /></td>
                    <td>Masa Kerja</td>
                    <td><input type="text" placeholder="Isi Masa Kerja" /></td>
                </tr>
                <!-- Baris 3 -->
                <tr>
                    <td>Unit Kerja</td>
                    <td colspan="3"><input type="text" placeholder="Isi Unit Kerja" /></td>
                </tr>
            </table>

            <!--II. JENIS CUTI YANG DIAMBIL-->
            <table>
                <!-- Judul Tabel -->
                <tr>
                    <td colspan="4" class="table-title">II. JENIS CUTI YANG DIAMBIL</td>
                </tr>
                <!-- Baris 1 -->
                <tr>
                    <td>1. Cuti Tahunan</td>
                    <td><input type="checkbox" id="cuti-tahunan"></td>
                    <td>4. Cuti Melahirkan</td>
                    <td><input type="checkbox" id="cuti-melahirkan"></td>
                </tr>
                <!-- Baris 2 -->
                <tr>
                    <td>2. Cuti Besar</td>
                    <td><input type="checkbox" id="cuti-besar"></td>
                    <td>5. Cuti Alasan Penting</td>
                    <td><input type="checkbox" id="cuti-alasan-penting"></td>
                </tr>
                <!-- Baris 3 -->
                <tr>
                    <td>3. Cuti Sakit</td>
                    <td><input type="checkbox" id="cuti-sakit"></td>
                    <td>6. Cuti Lain-lain</td>
                    <td><input type="checkbox" id="cuti-lain-lain"></td>
                </tr>
            </table>


            <!--Bagian III. ALASAN CUTI-->
            <table>
                <tr>
                    <td colspan="4" class="table-title">III. ALASAN CUTI</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="text" placeholder="Isi Alasan Cuti" class="editable" />
                    </td>
                </tr>
            </table>

            <!--Bagian IV. LAMANYA CUTI-->
            <table>
                <tr>
                    <td colspan="4" class="table-title">IV. LAMANYA CUTI</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="text" placeholder="Keterangan" class="editable" />
                    </td>
                </tr>
            </table>

             <!--Bagian V. CATATAN CUTI-->
             <table>
                <!-- Judul Tabel -->
                <tr>
                    <td colspan="5" class="table-title">V. CATATAN CUTI</td>
                </tr>

                <!-- Baris 1 -->
                <tr>
                    <td colspan="3">1. CUTI TAHUNAN</td>
                    <td>2. CUTI BESAR</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <!-- Subkolom untuk CUTI TAHUNAN -->
                <tr>
                    <td>Tahun</td>
                    <td>Sisa</td>
                    <td>Keterangan</td>

                    <td>3. CUTI SAKIT</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td>4. CUTI MELAHIRKAN</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td>5. CUTI KARENA ALASAN PENTING</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td>6. CUTI DILUAR TANGGUNGAN NEGARA</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>

            </table>


<!--Bagian V. CATATAN CUTI-->
             <table>
                <!-- Judul Tabel -->
                <tr>
                    <td colspan="5" class="table-title">V. CATATAN CUTI</td>
                </tr>

                <!-- Baris 1 -->
                <tr>
                    <td colspan="3">1. CUTI TAHUNAN</td>
                    <td>2. CUTI BESAR</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <!-- Subkolom untuk CUTI TAHUNAN -->
                <tr>
                    <td>Tahun</td>
                    <td>Sisa</td>
                    <td>Keterangan</td>

                    <td>3. CUTI SAKIT</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td>4. CUTI MELAHIRKAN</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td>5. CUTI KARENA ALASAN PENTING</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tahun" /></td>
                    <td><input type="text" placeholder="Sisa" /></td>
                    <td><input type="text" placeholder="Keterangan" /></td>
                    <td>6. CUTI DILUAR TANGGUNGAN NEGARA</td>
                    <td><input type="text" placeholder="" /></td>
                </tr>

            </table>
