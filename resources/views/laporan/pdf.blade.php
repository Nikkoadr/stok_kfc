<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Stok Opname - {{ $tanggal }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 25px;
        }

        /* HEADER */
        .header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .header img {
            width: 60px;
            height: auto;
            margin-right: 15px;
        }
        .header h2 {
            flex-grow: 1;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            letter-spacing: 0.5px;
        }

        /* INFO */
        .info {
            margin-top: 8px;
            font-size: 13px;
            text-align: left;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px 4px;
            text-align: center;
            vertical-align: middle;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .text-left {
            text-align: left;
        }

        /* FOOTER */
        .footer {
            margin-top: 25px;
            font-size: 11px;
            text-align: right;
            color: #555;
        }
    </style>
</head>
<body>

    {{-- HEADER --}}
    <div class="header">
        <img src="{{ public_path('img/logo.svg') }}" alt="Logo">
        <h2>FORM STOCK OPNAME</h2>
    </div>

    {{-- INFO --}}
    <div class="info">
        <strong>TANGGAL :</strong>
        {{ \Carbon\Carbon::parse($tanggal)->locale('id')->translatedFormat('d F Y') }}
    </div>

    {{-- TABEL --}}
    <table>
        <thead>
            <tr>
                <th style="width: 30px;">No</th>
                <th style="width: 160px;">Nama Item</th>
                <th style="width: 60px;">Satuan</th>
                <th style="width: 80px;">Stok Sistem</th>
                <th style="width: 80px;">Total Fisik</th>
                <th style="width: 80px;">Selisih</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @forelse($stokHarian as $stok)
                @foreach($stok->detailStokOpname as $detail)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td class="text-left">{{ $detail->produk->nama_produk }}</td>
                    <td>{{ $detail->produk->satuan_kecil }}</td>
                    <td>{{ number_format($detail->stok_sistem_pcs, 0, ',', '.') }}</td>
                    <td>{{ number_format($detail->total_fisik_pcs, 0, ',', '.') }}</td>
                    <td>{{ number_format($detail->selisih_pcs, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Tidak ada data stok opname untuk tanggal ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- FOOTER --}}
    <div class="footer">
        Dicetak pada: {{ now()->locale('id')->translatedFormat('d F Y H:i') }}
    </div>

</body>
</html>
