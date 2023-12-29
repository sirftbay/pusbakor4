<!-- dashboardview -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Data contoh trafik (ganti dengan data yang sesuai)
            var trafficData = {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Total Visitors",
                    data: [150, 200, 180, 220, 250, 300, 280, 320, 310, 350, 370, 400],
                    borderColor: "#007bff",
                    fill: false
                }]
            };

            // Konfigurasi Chart
            var trafficConfig = {
                type: 'line',
                data: trafficData,
                options: {
                    scales: {
                        x: {
                            type: 'category',
                            labels: trafficData.labels
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // Inisialisasi Chart
            var trafficChart = new Chart(document.getElementById('trafficChart'), trafficConfig);
        });
    </script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container-fluid {
            margin-top: 20px;
        }

        .data-box {
            width: 300px;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .data-box:hover {
            transform: scale(1.05);
        }

        .data-box h2 {
            font-size: 24px;
            color: ##0f0f0f;
        }

        .data-box p {
            font-size: 18px;
            color: ##fcf228 ;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Proyek -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('proyek'); ?>" class="btn data-box bg-info bg-gradient">
                <h2>Proyek</h2>
                <p>Isi data : <?php echo $proyek; ?></p>
            </a>
        </div>

        <!-- Perusahaan -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('perusahaan'); ?>" class="btn data-box bg-secondary bg-gradient">
                <h2>Perusahaan</h2>
                <p>Isi data : <?php echo $perusahaan; ?></p>
            </a>
        </div>

        <!-- Modal -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('modal'); ?>" class="btn data-box bg-success bg-gradient">
                <h2>Modal</h2>
                <p>Isi data : <?php echo $modal; ?></p>
            </a>
        </div>

        <!-- Kecamatan -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('kecamatan'); ?>" class="btn data-box bg-warning bg-gradient">
                <h2>Kecamatan</h2>
                <p>Isi data : <?php echo $kecamatan; ?></p>
            </a>
        </div>

        <!-- Desa -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('desa'); ?>" class="btn data-box bg-danger bg-gradien">
                <h2>Desa</h2>
                <p>Isi data : <?php echo $desa; ?></p>
            </a>
        </div>

        <!-- Skala -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('skala'); ?>" class="btn data-box bg-primary bg-gradient">
                <h2>Skala</h2>
                <p>Isi data : <?php echo $skala; ?></p>
            </a>
        </div>

        <!-- Resiko -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('resiko'); ?>" class="btn data-box bg-info bg-gradient">
                <h2>Resiko</h2>
                <p>Isi data : <?php echo $resiko; ?></p>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Traffic Overview
                </div>
                <div class="card-body">
                    <canvas id="trafficChart" width="400" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Your other content here -->

</body>
</html>
