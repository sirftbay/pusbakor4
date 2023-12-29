<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PUSBAKOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container-fluid  p-0 d-flex h-100">
        <div id="bdSidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-success text-white offcanvas-md offcanvas-start" style="width: 260px ; ">
            <a href="#" class="navbar-brand">
                <h5><i class="fa-solid fa-building me-2" style="font-size: 28px;"></i> PUSBAKOR</h5>
            </a>
            <hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('dashboard'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>    
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('proyek'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Proyek
                    </a>    
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('perusahaan'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Perusahaan
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('jenisperusahaan'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Jenis Perusahaan
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('kbli'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        KBLI
                    </a>
                </li>
                <li class="nav-item mb-1" >
                    <a href="<?php echo base_url('kecamatan'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Kecamatan
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('desa'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Desa
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('modal'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Modal
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('skala'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Skala
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="<?php echo base_url('resiko'); ?>" class="" style="color: white;">
                        <i class="fa-solid fa-star"></i>
                        Resiko
                    </a>
                </li>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </ul>
            <hr>
            <div class="nav-item mb-1 text-center">
                    <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-danger text-light " style="color: white;">
                        <i class="fa-solid fa-door-open"></i>
                        Logout
                    </a>
            </div>
            
            <hr>
            <div class="d-flex">
                <img src="img/profile_user.jpeg" class="img-fluid rounded me-2" width="50px" alt="">
                <span>
                    <h6 class="mt-1 mb-0">Kelompok 4 </h6>
                    <small>@kelompok42pkja</small>
                </span>
            </div>
        </div>

        <div class="bg-light flex-fill">
            <div class="p-2 d-md-none d-flex text-white bg-success">
                <a href="#" class="text-white" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <span class="ms-3">PUSBAKOR</span>
            </div>    
                <div class="row">
                    <div class="col">
                    <nav class="navbar navbar-light fw-bold justify-content-center fs-3 mb-3" style="background-color: #00ff5573;">
                      <?php echo $judul; ?>
                    </nav>
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
            
        </div>

        
    </div>
</body>
</html>