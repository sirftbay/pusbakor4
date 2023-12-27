<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PUSBAKOR</title>
</head>
<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      PUSBAKOR
   </nav>
   <div class="container">
    <div class="card shadow p-3 mb-3 mx-auto mt-5" style="width: 50rem;">
        <div class="card-body">
            <div class="text-center mb-4">
                <h3 class="card-title">Edit perusahaan</h3>
                <p class="card-text text-muted">Masukkan informasi perusahaan</p>
            </div>

            <form action="<?php echo base_url('perusahaan/update'); ?>" method="post">
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?php echo $perusahaan['id']; ?>">
                    <label for="nib" class="form-label">NIB:</label>
                    <input type="text" class="form-control" id="" name="nib" placeholder="Perbarui NIB">
                </div>
                <div class="mb-3">
                    <label for="npwp" class="form-label">NPWP:</label>
                    <input type="text" class="form-control" id="" name="npwp" placeholder="Perbarui NPWP">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Perusahaan:</label>
                    <input type="text" class="form-control" id="" name="nama" placeholder="Perbarui Perusahaan">
                </div>
                <div class="mb-3">
                    <label for="jenis_perusahaan_id" class="form-label">Jenis perusahaan:</label>
                    <input type="text" class="form-control" id="" name="jenis_perusahaan_id" placeholder="Perbarui Jenis Perusahaan">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="<?php echo base_url('perusahaan'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>