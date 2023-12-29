<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .fa-red {
        color: red;
    }
    .scrolling-table {
      max-height: 672px; /* Set the maximum height for the table */
      overflow-y: auto; /* Enable vertical scrolling */
      overflow-x: auto;
    }

    .sticky-header th {
      position: sticky;
      top: 0;
      z-index: 1; /* Ensure the header stays on top of the content */
    }
    </style>

  <title>proyek</title>
</head>

<body>
  <div class="container">
    <div class="scrolling-table">
    <a href="<?php echo base_url('proyek/add'); ?>" class="btn btn-success mb-3">+Tambah proyek</a>

    <table class="table table-hover text-left">
      <thead class="table-dark sticky-header">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">No Proyek</th>
          <th scope="col">Longitude</th>
          <th scope="col">Latitude</th>
          <th scope="col">Investasi</th>
          <th scope="col">Alamat</th>
          <th scope="col">Perusahaan</th>
          <th scope="col">Modal</th>
          <th scope="col">Resiko</th>
          <th scope="col">Skala</th>
          <th scope="col">Kecamatan</th>
          <th scope="col">Desa</th>
          <th scope="col">KBLI</th>
          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>
      <?php foreach ($proyek as $row) { ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["noproyek"] ?></td>
            <td><?php echo $row["longitude"] ?></td>
            <td><?php echo $row["latitude"] ?></td>
            <td><?php echo $row["investasi"] ?></td>
            <td><?php echo $row["alamat"] ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["modal"] ?></td>
            <td><?php echo $row["resiko"] ?></td>
            <td><?php echo $row["skala"] ?></td>
            <td><?php echo $row["kecamatan"] ?></td>
            <td><?php echo $row["desa"] ?></td>
            <td><?php echo $row["judul"] ?></td>
            <td>
            <a href="<?php echo base_url('proyek/edit/' . $row['id']); ?>"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
            <a href="<?php echo base_url('proyek/delete/' . $row['id']); ?>" onclick="return confirm('Kamu Yakin Mau Hapus Ini?');">
            <i class="fa-solid fa-red fa-trash fs-5"> </i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>