<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NOTA DINAS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            font-weight: bold;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin: 5px 0;
        }
        .content .sub-header {
            margin-top: 20px;
            font-weight: bold;
        }
        .content .indent {
            text-indent: 30px;
        }
        .signature {
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>NOTA DINAS</h2>
    </div>
    
    <div class="content">
        <p><strong>Kepada Yth:</strong> {{ $pengajuan->kepada }}</p>
        <p><strong>Dari:</strong> {{ $pengajuan->dari }}</p>
        <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($pengajuan->tanggal)->format('d M Y') }}</p>
        <p><strong>Nomor:</strong> {{ $pengajuan->nomor }}</p>
        <p><strong>Sifat:</strong> {{ $pengajuan->sifat }}</p>
        <p><strong>Hal:</strong> {{ $pengajuan->hal }}</p>

        <div class="sub-header">Dasar:</div>
        <p class="indent">{{ $pengajuan->dasar }}</p>

        <div class="sub-header">Urusan:</div>
        <p class="indent">{{ $pengajuan->urusan }}</p>

        <div class="sub-header">Tujuan:</div>
        <p class="indent">{{ $pengajuan->tujuan }}</p>

        <div class="sub-header">Lama Perjalanan Dinas:</div>
        <p class="indent">{{ $pengajuan->lama_perjalanan }}</p>

        <div class="sub-header">Sumber Pembayaran:</div>
        <p class="indent">{{ $pengajuan->sumber_pembayaran }}</p>

        <div class="sub-header">Jumlah yang berpergian:</div>
        <p class="indent">{{ $pengajuan->jumlah_berpergian }} Orang</p>

        <div class="sub-header">Petugas yang bertugas:</div>
@if(is_array($stafPendamping) && count($stafPendamping) > 0)
    @foreach($stafPendamping as $pendamping)
        <p class="indent"><strong>Nama:</strong> {{ $pendamping['nama'] }}</p>
        <p class="indent"><strong>NIP:</strong> {{ $pendamping['nip'] }}</p>
        <p class="indent"><strong>Pangkat:</strong> {{ $pendamping['pangkat'] }}</p>
        <p class="indent"><strong>Jabatan:</strong> {{ $pendamping['jabatan'] }}</p>
    @endforeach
@else
    <p class="indent">Tidak ada petugas pendamping yang ditentukan.</p>
@endif




        <p class="indent">Sehubungan hal di atas, kami mohon persetujuan Bapak untuk melakukan perjalanan Dinas.</p>
        <p class="indent">Demikian disampaikan, atas perkenan dan izin Bapak diucapkan terima kasih.</p>
    </div>

    <div class="signature">
        <p>Sekretaris Dinas PSDA Prov. Sumsel</p>
        <p><strong>Dr. Hj. MEGAWATY, ST.,MT.</strong></p>
        <p>Pembina Tingkat I (IV/b)</p>
        <p>NIP. 19771204 199703 2 004</p>
    </div>
</body>
</html>
