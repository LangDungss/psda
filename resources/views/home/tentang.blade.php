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
                        <p class="text-lg font-bold text-black text-center">HERWAN</p>
                        <h2 class="text-xl font-bold text-black text-center">KEPALA DINAS</h2>
                    </div>

                    <!-- Second Level -->
                    <div class="flex justify-between w-full mb-5 mt-10">
                        <!-- UPTD Balai PSDA WS Musi -->
                        <div class="bg-white shadow-lg rounded-lg p-5 mx-2 mt-16">
                            <img src="{{ asset('images/FOTO KEPALA DINAS, SEKRETARIS, KABID, KASI DINAS PSDA/UPTD BALAI PSDA WS MUSI/HENDRA (KEPALA UPTD).jpg') }}" alt="Kepala UPTD Balai PSDA WS Musi" class="w-20 h-20 rounded-full mx-auto mb-3">
                            <p class="text-black text-center font-bold">KEPALA SUB BAGIAN TATA USAHA</p>
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

        <!-- Footer Section -->
        <footer class="bg-gray-800 text-center py-4 text-gray-400">
            <p>&copy;DINAS PENGELOLAAN SUMBER DAYA AIR PROVINSI SUMATERA SELATAN<br>#PSDADIGITAL #PSDATANGGAP</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="https://www.instagram.com/dinaspsdaprov.sumsel/profilecard/?igsh=MWlhZDhpcGJxZWp4eQ==" class="hover:text-white">
                    <i data-feather="instagram"></i>
                </a>
                <a href="https://youtu.be/NzO2XbEp968?si=XZfGk-SvbCi0zMQ_" class="hover:text-white">
                    <i data-feather="youtube"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100076006817436&mibextid=ZbWKwL" class="hover:text-white">
                    <i data-feather="facebook"></i>
                </a>
                <a href="mailto:dinaspengelolaansdasumsel@gmail.com" class="hover:text-white">
                    <i data-feather="mail"></i>
                </a>
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
