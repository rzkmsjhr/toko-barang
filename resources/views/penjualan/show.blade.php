<!DOCTYPE html>
<html>
<head>
    <title>Detail Penjualan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Detail Penjualan #{{ $penjualan->Id_Penjualan }}</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Harga Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan->detailPenjualan as $detail)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $detail->Kode_Barang }}</td>
                        <td>{{ $detail->barang->Nama_Barang }}</td>
                        <td>{{ $detail->Harga_Satuan }}</td>
                        <td>{{ $detail->Jumlah }}</td>
                        <td>{{ $detail->Harga_Total }}</td>
                    </tr>
                @endforeach
                @if ($penjualan->detailPenjualan->count() > 1)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th>Grand Total</th>
                        <td>{{ $penjualan->detailPenjualan->sum('Jumlah') }}</td>
                        <td>{{ $penjualan->detailPenjualan->sum('Harga_Total') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>