<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disposisi Surat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            width: 90%;
            max-width: 800px;
            background-color: white;
            padding: 20px;
            border: 1px solid #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            border-bottom: 3px solid black;
            padding-bottom: 10px;
            margin-bottom: 20px;
            position: relative; /* Membuat elemen anak dapat diatur posisinya */
        }

        .logo {
            position: absolute;
            top: 0;
            left: 0;
            width: 80px; /* Ukuran logo */
            height: auto;
        }

        .header-text {
            text-align: center;
            margin-left: 100px; /* Memberikan ruang untuk logo */
        }

        .header-text h2 {
            font-size: 18px;
            font-weight: normal;
            margin: 0;
            line-height: 1.5; /* Jarak antar teks */
        }

        .header-text h1 {
            font-size: 22px;
            font-weight: bold;
            margin: 5px 0;
        }

        .header-text p {
            font-size: 14px;
            margin: 2px 0;
        }
        .section {
            margin-bottom: 20px;
        }
        .section table {
            width: 100%;
            border-collapse: collapse;
        }
        .section table, .section th, .section td {
            border: 1px solid black;
        }
        .section th, .section td {
            padding: 5px;
            text-align: left;
            font-size: 14px;
        }
        .section th {
            background-color: #f0f0f0;
        }
        .notes, .signature {
            font-size: 14px;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th{
            border: 1px solid black;
            padding: 3px;
            text-align: left;
        }
        td {
            border: 2px solid black;
            padding: 3px;
            text-align: left;
            font-size: 9px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Logo -->
            <img src="logo.png" alt="Logo" class="logo">
            
            <!-- Teks Kop -->
            <div class="header-text">
                <h2>PEMERINTAH PROVINSI SUMATERA SELATAN</h2>
                <h1>DINAS PENGELOLAAN SUMBER DAYA AIR</h1>
                <p>Jalan Kapten Anwar Sastro No. 1251, Ilir Timur I, Palembang Sumatera Selatan</p>
                <p>Telepon (0711) 352362, Faksimile (0711) 361381</p>
            </div>
        </div>
        <div class="section">
            <table>
                <tr>
                    <th>SURAT DARI</th>
                    <td>{{ $disposisi->surat_dari }}</td>
                    <th>DITERIMA</th>
                    <td>{{ \Carbon\Carbon::parse($disposisi->diterima)->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th>TANGGAL SURAT</th>
                    <td>{{ \Carbon\Carbon::parse($disposisi->tanggal_surat)->format('d-m-Y') }}</td>
                    <th>NOMOR AGENDA</th>
                    <td>{{ $disposisi->nomor_agenda }}</td>
                </tr>
                <tr>
                    <th>NOMOR SURAT</th>
                    <td>{{ $disposisi->nomor_surat }}</td>
                    <th>HAL</th>
                    <td>{{ $disposisi->hal }}</td>
                </tr>
            </table>
        </div>
        <div class="section">
            <table>
                <tr>
                    <th>DITERUSKAN KEPADA</th>
                    <th>Tindak Lanjut</th>
                </tr>
                <tr>
                    <td>{{ $disposisi->diteruskan_kepada }}</td>
                    <td rowspan="1">
                        <!-- Display tindak lanjut if available -->
                        @if($disposisi->tindak_lanjut)
                           {{ $disposisi->tindak_lanjut }}<br/>
                        @else
                            No tindak lanjut provided.
                        @endif
                    </td>
                </tr>
            </table>
        </div>
        <div class="section">
            <table>
                <tr>
                    <th>CATATAN</th>
                    <td>{{ $disposisi->catatan_sekretaris }}</td>
                </tr>
            </table>
        </div>
        <div class="section">
            <table>
                <tr>
                    <th>DISPOSISI</th>
                    <td>{{ $disposisi->catatan_kepaladinas }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
