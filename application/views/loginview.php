<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login </title>
    <style>
    .login-wrp{
    max-width: 400px;
    width: 100%;
    margin: 50px auto;
    }
    .top{
    background-size: 300px ;
    height: 300px;
    position: relative
    }
    .logo{
    position: absolute;
    max-width: 100px;
    top: 28%;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    }
    .bottom{
    background: #eee;
    height: 300px;
    position:relative;
    }
    .bottom .login-form{
    background: #fff;
    position: absolute;
    box-shadow: 1px 1px 10px #999;
    width: 90%;
    top:-38%;
    left: 5%;
    border-radius: 5px;
    padding: 50px 40px;
    }
    .btn{
    border-radius: 30px
    }
    .btn-primary{
    background: #F8C407;
    border-color: #F8C407;
    }
    .btn-primary:hover,.btn-primary:focus{
    background: #F8C407;
    border-color: #F8C407
    }
    .checkbox-inline{
    cursor: pointer;
    }
    .btn-link{
    color: #999;
    margin-top: 10px;
    display: block
    }
    .btn-link:hover,.btn-link:focus{
    color: #777;
    }
    </style>
</head>
<body>
    <div class="login-wrp">
        <div class="top">
            <img src="https://images.pexels.com/photos/547125/pexels-photo-547125.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="100%" height="100%">
            <div class="logo">
                <img src="" alt="" width="100px">
            </div>
        </div>
        <div class="bottom">
            <form action="<?php echo site_url('login/process_login'); ?>" method="post" class="login-form">
                <div class="mb-3 form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="mb-3 form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn text-center btn-primary btn-block">Login</button>
                <p class="text-center"><small><a href="#" class="btn-link">Forgot password</a></small></p>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
