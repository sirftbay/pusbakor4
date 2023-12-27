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

   <title>Tambah Proyek</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      PUSBAKOR
   </nav>

   <div class="container">
    <div class="card shadow p-3 mb-3 mx-auto mt-5" style="width: 50rem;">
        <div class="card-body">
            <div class="text-center mb-4">
                <h3 class="card-title">Tambah proyek</h3>
                <p class="card-text text-muted">Masukkan Informasi  proyek</p>
            </div>

            <form action="<?php echo base_url('proyek/insert'); ?>" method="post">
                <div class="mb-3">
                    <label for="noproyek" class="form-label">No Proyek:</label>
                    <input type="text" class="form-control" id="" name="noproyek" placeholder="Masukan No Proyek">
                </div>
                <div class="mb-3">
                    <label for="longitude" class="form-label">Longitude:</label>
                    <input type="text" class="form-control" id="" name="longitude" placeholder="Masukan Longitude">
                </div>
                <div class="mb-3">
                    <label for="latitude" class="form-label">Latitude:</label>
                    <input type="text" class="form-control" id="" name="latitude" placeholder="Masukan Latitude">
                </div>
                <div class="mb-3">
                    <label for="investasi" class="form-label">Investasi:</label>
                    <input type="text" class="form-control" id="" name="investasi" placeholder="Masukan Investasi">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <input type="text" class="form-control" id="" name="alamat" placeholder="Masukan ">
                </div>
                <div class="mb-3">
                    <label for="perusahaan_id" class="form-label">Perusahaan:</label>
                    <input type="text" class="form-control" id="" name="perusahaan_id" placeholder="Masukan Perusahaan ">
                </div>
                <div class="mb-3">
                    <label for="modal_id" class="form-label">Modal:</label>
                    <input type="text" class="form-control" id="" name="modal_id" placeholder="Masukan modal ">
                </div>
                <div class="mb-3">
                    <label for="resiko_id" class="form-label">Resiko:</label>
                    <input type="text" class="form-control" id="" name="resiko_id" placeholder="Masukan Resiko">
                </div>
                <div class="mb-3">
                    <label for="skala_id" class="form-label">Skala:</label>
                    <input type="text" class="form-control" id="" name="skala_id" placeholder="Masukan skala">
                </div>
                <div class="mb-3">
                    <label for="kecamtan_id" class="form-label">kecamatan:</label>
                    <input type="text" class="form-control" id="" name="kecamtan_id" placeholder="Masukan kecamatan">
                </div>
                <div class="mb-3">
                    <label for="desa_id" class="form-label">Desa:</label>
                    <input type="text" class="form-control" id="" name="desa_id" placeholder="Masukan Desa">
                </div>
                <div class="mb-3">
                    <label for="kbli_id" class="form-label">KBLI:</label>
                    <input type="text" class="form-control" id="" name="kbli_id" placeholder="Masukan KBLI">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="<?php echo base_url('proyek'); ?>" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>


   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>