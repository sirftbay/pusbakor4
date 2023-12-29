<!-- dashboardview -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container-fluid {
            margin-top: 20px;
        }

        .data-box {
            background: #ffffff;
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
            color: #007bff;
        }

        .data-box p {
            font-size: 18px;
            color: #6c757d;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Proyek -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('proyek'); ?>" class="btn data-box">
                <h2>Proyek</h2>
                <p>Isi data : <?php echo $proyek; ?></p>
            </a>
        </div>

        <!-- Perusahaan -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('perusahaan'); ?>" class="btn data-box">
                <h2>Perusahaan</h2>
                <p>Isi data : <?php echo $perusahaan; ?></p>
            </a>
        </div>

        <!-- Modal -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('modal'); ?>" class="btn data-box">
                <h2>Modal</h2>
                <p>Isi data : <?php echo $modal; ?></p>
            </a>
        </div>

        <!-- Kecamatan -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('kecamatan'); ?>" class="btn data-box">
                <h2>Kecamatan</h2>
                <p>Isi data : <?php echo $kecamatan; ?></p>
            </a>
        </div>

        <!-- Desa -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('desa'); ?>" class="btn data-box">
                <h2>Desa</h2>
                <p>Isi data : <?php echo $desa; ?></p>
            </a>
        </div>

        <!-- Skala -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('skala'); ?>" class="btn data-box">
                <h2>Skala</h2>
                <p>Isi data : <?php echo $skala; ?></p>
            </a>
        </div>

        <!-- Resiko -->
        <div class="col-lg-4 col-md-6">
            <a href="<?php echo base_url('resiko'); ?>" class="btn data-box">
                <h2>Resiko</h2>
                <p>Isi data : <?php echo $resiko; ?></p>
            </a>
        </div>
    </div>
</div>

<!-- Your other content here -->

</body>
</html>
