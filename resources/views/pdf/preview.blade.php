<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NOTA DINAS</title>
    <style>
        @page {
            margin: 2cm;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 11pt;
            line-height: 1.3;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
        }
        .header h2 {
            margin: 0;
            font-size: 13pt;
            text-decoration: underline;
        }
        .content {
            margin-top: 10px;
        }
        .field-row {
            margin: 3px 0;
            display: table;
            width: 100%;
        }
        .field-label, .field-separator, .field-value {
            display: table-cell;
            vertical-align: top;
        }
        .field-label {
            width: 160px;
        }
        .field-separator {
            width: 10px;
        }
        .staff-details {
            margin: 8px 0;
            padding-left: 15%;
            font-size: 10pt;
        }
        .staff-row {
            display: flex;
            justify-content: flex-start;
            margin: 2px 0;
        }
        .staff-label {
            width: 80px;
            font-weight: bold;
            font-size: 11pt;
            margin-left: 20%;
        }
        .signature {
            margin-top: 30px;
            text-align: center;
            float: right;
            width: 200px;
            font-size: 10pt;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>NOTA DINAS</h2>
    </div>
    
    <div class="content">
        <div class="field-row">
            <div class="field-label">Kepada Yth</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->kepada }}</div>
        </div>
        <div class="field-row">
            <div class="field-label">Dari</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->dari }}</div>
        </div>
        <div class="field-row">
            <div class="field-label">Tanggal</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ \Carbon\Carbon::parse($pengajuan->tanggal)->isoFormat('D MMMM Y') }}</div>
        </div>
        <div class="field-row">
            <div class="field-label">Nomor</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->nomor }}</div>
        </div>
        <div class="field-row">
            <div class="field-label">Sifat</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->sifat }}</div>
        </div>
        <div class="field-row">
            <div class="field-label">Hal</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->hal }}</div>
        </div>
        <hr>

        <div class="field-row" style="margin-top: 15px;">
            <div class="field-label">Dasar</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->dasar }}</div>
        </div>

        <div class="field-row">
            <div class="field-label">Urusan</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->urusan }}</div>
        </div>

        <div class="field-row">
            <div class="field-label">Tujuan</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->tujuan }}</div>
        </div>

        <div class="field-row">
            <div class="field-label">Lama Perjalanan Dinas</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->lama_perjalanan }}</div>
        </div>

        <div class="field-row">
            <div class="field-label">Sumber Pembayaran</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->sumber_pembayaran }}</div>
        </div>

        <div class="field-row">
            <div class="field-label">Jumlah yang berpergian</div>
            <div class="field-separator">:</div>
            <div class="field-value">{{ $pengajuan->jumlah_berpergian }} Orang</div>
        </div>

        <div style="margin-top: 15px;">
            <p>1. <strong>Pejabat yang bertugas:</strong></p>
            <div class="staff-details">
                <div class="staff-row">
                    <span class="staff-label">Nama</span>: {{ $pengajuan->pejabat_nama }}
                </div>
                <div class="staff-row">
                    <span class="staff-label">Pangkat/Gol</span>: {{ $pengajuan->pejabat_pangkat }}
                </div>
                <div class="staff-row">
                    <span class="staff-label">NIP</span>: {{ $pengajuan->pejabat_nip }}
                </div>
                <div class="staff-row">
                    <span class="staff-label">Jabatan</span>: {{ $pengajuan->pejabat_jabatan }}
                </div>
            </div>

            @php
                $pnsStaff = array_filter($stafPendamping, fn($s) => isset($s['nip']) && !empty($s['nip']));
                $nonPnsStaff = array_filter($stafPendamping, fn($s) => !isset($s['nip']) || empty($s['nip']));
            @endphp

            @if(!empty($pnsStaff))
                <p>2. <strong>Staf Pendamping (PNS):</strong></p>
                @foreach($pnsStaff as $pendamping)
                    <div class="staff-details">
                        <div class="staff-row">
                            <span class="staff-label">Nama</span>: {{ $pendamping['nama'] }}
                        </div>
                        <div class="staff-row">
                            <span class="staff-label">Pangkat/Gol</span>: {{ $pendamping['pangkat'] ?? '-' }}
                        </div>
                        <div class="staff-row">
                            <span class="staff-label">NIP</span>: {{ $pendamping['nip'] }}
                        </div>
                        <div class="staff-row">
                            <span class="staff-label">Jabatan</span>: {{ $pendamping['jabatan'] }}
                        </div>
                    </div>
                @endforeach
            @endif

            @if(!empty($nonPnsStaff))
                <p>3. <strong>Staf Pendamping (Non PNS):</strong></p>
                @foreach($nonPnsStaff as $pendamping)
                    <div class="staff-details">
                        <div class="staff-row">
                            <span class="staff-label">Nama</span>: {{ $pendamping['nama'] }}
                        </div>
                        <div class="staff-row">
                            <span class="staff-label">Pangkat/Gol</span>: {{ $pendamping['pangkat'] ?? '-' }}
                        </div>
                        <div class="staff-row">
                            <span class="staff-label">Jabatan</span>: {{ $pendamping['jabatan'] }}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="closing">
            <p>Sehubungan hal di atas, kami mohon persetujuan Bapak untuk melakukan perjalanan Dinas.</p>
            <p>Demikian disampaikan, atas perkenan dan izin Bapak diucapkan terima kasih.</p>
        </div>

        <div class="signature">
            <p>Sekretaris Dinas PSDA Prov. Sumsel</p>
            <br><br><br>
            <p><strong>Dr. Hj. MEGAWATY, ST.,MT.</strong></p>
            <p>Pembina Tingkat I (IV/b)</p>
            <p>NIP. 19771204 199703 2 004</p>
        </div>
    </div>
</body>
</html>
