<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Stok Opname - {{ $tanggal }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
        }
        .header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #000;
            margin-bottom: 10px;
            padding-bottom: 5px;
        }
        .header img {
            width: 70px;
            height: auto;
            margin-right: 10px;
        }
        .header h2 {
            flex-grow: 1;
            text-align: center;
            margin: 0;
            font-size: 18px;
        }
        .info {
            margin-top: 5px;
            font-size: 13px;
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px;
            text-align: center;
        }
        th {
            background-color: #e9e9e9;
            font-weight: bold;
        }
        .text-left {
            text-align: left;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: right;
        }
    </style>
</head>
<body>

    {{-- HEADER --}}
    <div class="header">
        <img src="{{ public_path('img/logo.svg') }}" alt="Logo">
        <h2>FORM STOCK OPNAME</h2>
    </div>

    <div class="info">
        <strong>BULAN :</strong> {{ \Carbon\Carbon::parse($tanggal)->locale('id')->translatedFormat('d F Y') }}
    </div>

    {{-- TABEL DATA --}}
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Item</th>
                <th>Satuan</th>
                <th>Stock Sistem</th>
                <th>Fisik Pack</th>
                <th>Fisik Pcs</th>
                <th>Total Fisik</th>
                <th>Selisih</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stokHarian as $stok)
                @foreach($stok->detailStokOpname as $detail)
                
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-left">{{ $detail->produk->nama_produk }}</td>
                    <td>{{ $detail->produk->satuan_kecil }}</td>
                    <td>{{ $detail->stok_sistem_pcs }}</td>
                    <td>{{ $detail->fisik_pack_sisa }}</td>
                    <td>{{ $detail->fisik_pcs_sisa }}</td>
                    <td>{{ $detail->total_fisik_pcs }}</td>
                    <td>{{ $detail->selisih_pcs }}</td>
                </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak pada: {{ now()->format('d/m/Y H:i') }}
    </div>

</body>
</html>
