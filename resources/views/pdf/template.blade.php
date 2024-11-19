<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kop Surat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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


        .content {
            font-size: 11px;

        }

        .content h3,
        p.nomor {
            font-size: 12px;
            text-align: center;

        }


        .content .top-right {
            text-align: right;

        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1px;
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
            font-size: 11px;
        }

        .table-title {
            text-align: left;
            font-weight: bold;
            padding: 3px;
        }

        input[type="checkbox"] {
            width: 16px;
            height: 20px;
            margin: 0;
        }

        input {
            width: 100%;
            border: none;
            font-size: 12px;

        }

        input:focus {
            outline: none;
            border-bottom: 1px solid blue;
        }

        .editable {
            border: none;
            font-size: 12px;
            width: 100%;
            text-align: left;

        }

        .editable:focus {
            outline: none;
            border-bottom: 1px solid blue;
        }
    </style>
</head>
<body>
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

    <div class="content">
        <div class="top-right">
            <p style="display: inline-flex; align-items: center;">
                Palembang, <input type="text" placeholder="Isi Tanggal" class="editable" style=""/>
            </p>
            <p style="top: 90px">
                Kepada<br>
                Yth, Kepala Dinas Pengelolaan Sumber<br>
                Daya Air Provinsi Sumatera Selatan<br>
                di Palembang
            </p>
        </div>

        <h3>FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</h3>
        <p class="nomor" style="display: flex; justify-content: center; align-items: center; gap: 10px;">
            Nomor: <input type="text" value="{{$pengajuan->nomor_surat}}" placeholder="Isi Nomor Surat" class="editable" style="width: 200px;" />
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
                <td><input type="text" value="{{$pengajuan->nama}}"/></td>
                <td>NIP</td>
                <td><input type="text" value="{{$pengajuan->nip}}"/></td>
            </tr>
            <!-- Baris 2 -->
            <tr>
                <td>Jabatan</td>
                <td><input type="text" value="{{$pengajuan->jabatan}}"/></td>
                <td>Masa Kerja</td>
                <td><input type="text" value="{{$pengajuan->masa_kerja}}"/></td>
            </tr>
            <!-- Baris 3 -->
            <tr>
                <td>Unit Kerja</td>
                <td colspan="3"><input type="text" value="{{$pengajuan->unit_kerja}}"/></td>
            </tr>
        </table>

        <!--II. JENIS CUTI YANG DIAMBIL-->
         <!--II. JENIS CUTI YANG DIAMBIL-->
         <table>
            <!-- Judul Tabel -->
            <tr>
                <td colspan="4" class="table-title">II. JENIS CUTI YANG DIAMBIL</td>
            </tr>
            <!-- Baris 1 -->
            <tr>
                <td>1. Cuti Tahunan</td>
                <td><input type="checkbox" id="cuti-tahunan"value="Cuti Tahunan" <?php echo ($pengajuan->jenis_cuti == 'Cuti Tahunan') ? 'checked' : ''; ?>></td>
                <td>4. Cuti Melahirkan</td>
                <td><input type="checkbox" id="cuti-melahirkan"></td>
            </tr>
            <!-- Baris 2 -->
            <tr>
                <td>2. Cuti Besar</td>
                <td><input type="checkbox" id="cuti-besar"></td>
                <td>5. Cuti Alasan Penting</td>
                <td><input type="checkbox" id="cuti-alasan-penting" <?php echo ($pengajuan->jenis_cuti == 'Cuti Melahirkan') ? 'checked' : ''; ?>></td>
            </tr>
            <!-- Baris 3 -->
            <tr>
                <td>3. Cuti Sakit</td>
                <td><input type="checkbox" id="cuti-sakit"></td>
                <td>6. Cuti Lain-lain</td>
                <td><input type="checkbox" id="cuti-lain-lain" <?php echo ($pengajuan->jenis_cuti == 'Cuti Alasan Penting') ? 'checked' : ''; ?>></td>
            </tr>
        </table>


        <!--Bagian III. ALASAN CUTI-->
        <table>
            <tr>
                <td colspan="4" class="table-title">III. ALASAN CUTI</td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="text"class="editable" value="{{$pengajuan->alasan_cuti}}"/>
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
                    <input type="text"class="editable" />
                </td>
            </tr>
        </table>

<!--Bagian V. CATATAN CUTI-->
<table>
<!-- Judul Tabel -->
<tr>
    <td colspan="5" class="table-title">V. CATATAN CUTI</td>
</tr>

<!-- Header Kolom -->
<tr>
    <td colspan="2">Jenis Cuti</td>
    <td>Tahun</td>
    <td>Sisa</td>
    <td>Keterangan</td>
</tr>

<!-- Data CUTI TAHUNAN -->
<tr>
    <td colspan="2">1. CUTI TAHUNAN</td>
    <td><input type="text"/></td>
    <td><input type="text"/></td>
    <td><input type="text"/></td>
</tr>

<!-- Data CUTI BESAR -->
<tr>
    <td colspan="2">2. CUTI BESAR</td>
    <td><input type="text"/></td>
    <td><input type="text"/></td>
    <td><input type="text"/></td>
</tr>

<!-- Data CUTI SAKIT -->
<tr>
    <td colspan="2">3. CUTI SAKIT</td>
    <td><input type="text"/></td>
    <td><input type="text"/></td>
    <td><input type="text"/></td>
</tr>

<!-- Data CUTI MELAHIRKAN -->
<tr>
    <td colspan="2">4. CUTI MELAHIRKAN</td>
    <td><input type="text" /></td>
    <td><input type="text"/></td>
    <td><input type="text"/></td>
</tr>

<!-- Data CUTI ALASAN PENTING -->
<tr>
    <td colspan="2">5. CUTI KARENA ALASAN PENTING</td>
    <td><input type="text"/></td>
    <td><input type="text" /></td>
    <td><input type="text"/></td>
</tr>

<!-- Data CUTI DI LUAR TANGGUNGAN NEGARA -->
<tr>
    <td colspan="2">6. CUTI DI LUAR TANGGUNGAN NEGARA</td>
    <td><input type="text"/></td>
    <td><input type="text" /></td>
    <td><input type="text"/></td>
</tr>
</table>

<!-- Bagian VI. BAGIAN ALAMAT SELAMA MENJALANKAN CUTI -->
<table>
<!-- Judul Tabel -->
<tr>
    <td colspan="3" class="table-title">VI. BAGIAN ALAMAT SELAMA MENJALANKAN CUTI</td>
</tr>

<!-- Baris 1 (2 kolom) -->
<tr>
    <td colspan="2" style="width: 10%; height:10%; vertical-align: top;"> <!-- Membuat kolom ini lebih besar dan rata atas -->
        <div contenteditable="true" style="width: 100%; padding: 10px; box-sizing:  border-radius: 4px; border-bottom: none; min-height: 100px; resize: vertical; white-space: pre-wrap;">
            <p>{{$pengajuan->alamat_cuti}}</p>>
        </div>
    </td>

    <td style="width: 30%;"> <!-- Kolom "Hormat saya" lebih kecil -->
        <div style="text-align: center;;">
            <p style="margin-top: 0%"><strong>Hormat saya</strong></p>
            <div style="margin-top: 30px;">
                <input type="text"  placeholder=":" value="{{$pengajuan->nama}}" style="width: 100%; box-sizing: border-box; border-bottom: none;">
                <input type="text" placeholder=":" value="{{$pengajuan->nip}}" style="width: 100%; box-sizing: border-box; border-bottom: none;">
            </div>
        </div>
    </td>
</tr>
</table>


<!-- Bagian VII. PERTIMBANGAN ATASAN LANGSUNG -->
<table style="width: 100%; border-collapse: collapse; border: 1px solid #000;">
<!-- Judul Tabel -->
<tr>
    <td colspan="3" class="table-title" style="font-weight: bold; border: 1px solid #000;">VII. PERTIMBANGAN ATASAN LANGSUNG</td>
</tr>

<!-- Baris untuk Status -->
<tr>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">DISETUJUI</td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">PERUBAHAN</td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">DITANGGUHKAN</td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">TIDAK DISETEJUI</td>
</tr>

<!-- Baris untuk Checkbox -->
<tr>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="DISETUJUI" 
               {{ $pengajuan->status == 'Disetujui' ? 'checked' : '' }} />
    </td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="PERUBAHAN" 
               {{ $pengajuan->status == 'PERUBAHAN' ? 'checked' : '' }} />
    </td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="DITANGGUHKAN" 
               {{ $pengajuan->status == 'DITANGGUHKAN' ? 'checked' : '' }} />
    </td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="TIDAK DISETEJUI" 
               {{ $pengajuan->status == 'TIDAK DISETEJUI' ? 'checked' : '' }} />
    </td>
</tr>
</table>

<!-- Tabel Kolom Alamat dan "ttd" -->
<table>
<tr>
    <!-- Kolom Alamat -->
    <td style="; vertical-align: top; padding: 10px;">
        <div contenteditable="true" style=" padding: 10px; box-sizing: border-box; border-radius: 4px; border-bottom: none; min-height: 100px; border: 1px solid #ccc; resize: vertical; white-space: pre-wrap;">
            <!-- Isi alamat bisa diketik di sini -->
        </div>
    </td>

    <!-- Kolom ttd -->
    <td style="width: 40%; vertical-align: top; padding: 10px;">
        <div style="">

            <div contenteditable="true" style="width: 100%; padding: 10px; box-sizing: border-box; border-radius: 4px; border-bottom: none; min-height: 100px; border: 1px solid #ccc; resize: vertical; white-space: pre-wrap;">

            </div>
        </div>
    </td>
</tr>
</table>


<!-- Bagian VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI -->
<table style="width: 100%; border-collapse: collapse; border: 1px solid #000;">
<!-- Judul Tabel -->
<tr>
    <td colspan="4" class="table-title" style="font-weight: bold; border: 1px solid #000;">VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI</td>
</tr>

<!-- Baris untuk Status -->
<tr>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">DISETUJUI</td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">PERUBAHAN</td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">DITANGGUHKAN</td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">TIDAK DISETEJUI</td>
</tr>

<!-- Baris untuk Checkbox -->
<tr>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="DISETUJUI" 
               {{ $pengajuan->status == 'Disetujui' ? 'checked' : '' }} />
    </td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="PERUBAHAN" 
               {{ $pengajuan->status == 'PERUBAHAN' ? 'checked' : '' }} />
    </td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="DITANGGUHKAN" 
               {{ $pengajuan->status == 'DITANGGUHKAN' ? 'checked' : '' }} />
    </td>
    <td style="padding: 2px; text-align: center; border: 1px solid #000;">
        <input type="checkbox" name="status" value="TIDAK DISETEJUI" 
               {{ $pengajuan->status == 'TIDAK DISETEJUI' ? 'checked' : '' }} />
    </td>
</tr>
</tr>
</table> 

<!-- Tabel ttd kepala dinas" -->
<table style=" border-collapse: collapse; border: 1px solid #000;">
<tr>
    <!-- -->
    <td style="width: 60%; vertical-align: top; padding: 10px;">
    </td>

    <!--  -->
    <td style="width: 40%; vertical-align: top; padding: 10px;">

        <div style="padding-bottom: 10px; font-weight: bold; text-align: center;">
            KEPALA DINAS<br>PENGELOLAAN SUMBER DAYA AIR<br>PROVINSI SUMATERA SELATAN
        </div>
        <div style="">
            <div contenteditable="true" style="width: 100%; padding: 10px; box-sizing: border-box; border-radius: 4px; border-bottom: none; min-height: 100px; border: 1px solid #ccc; resize: vertical; white-space: pre-wrap;">

            </div>
        </div>
    </td>
</tr>
</table>








    </div>
</body>
</html>
