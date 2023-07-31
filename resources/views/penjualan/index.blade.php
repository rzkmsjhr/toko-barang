<!DOCTYPE html>
<html>
<head>
    <title>Data Penjualan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-3">Data Penjualan</h2>
        <div class="d-flex justify-content-center my-5">
            <div>
                <canvas id="barChart" width="500" height="200"></canvas>
            </div>
            <div>
                <canvas id="pieChart" width="500" height="200"></canvas>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Penjualan</th>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
            // Sample data for the bar chart
            var data = @json($reportSales);

            // Configuration options for the chart
            var options = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            };

            // Create the bar chart
            var ctx = document.getElementById("barChart").getContext("2d");
            var barChart = new Chart(ctx, {
                type: "bar",
                data: data,
                options: options,
            });
    </script>
    <script>
        // Sample data for the pie chart
        var data = @json($reportGoods);
        console.log(data);

        // Configuration options for the chart
        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        // Create the pie chart
        var ctx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options,
        });
    </script>
</html>
