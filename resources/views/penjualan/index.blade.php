<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Data Penjualan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Penjualan</th>
                    <th>Nama Konsumen</th>
                    <th>Alamat</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $data)
                    <tr>
                        <td>{{ $data->Id_Penjualan }}</td>
                        <td>{{ $data->Tgl_Penjualan }}</td>
                        <td>{{ $data->Nama_Konsumen }}</td>
                        <td>{{ $data->Alamat }}</td>
                        <td><a href="{{ route('penjualan.show', $data->Id_Penjualan) }}" class="btn btn-primary btn-sm">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
