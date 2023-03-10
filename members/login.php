<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <title>เข้าสู่ระบบ</title>
</head>
<body>
    <?php include_once('includes/navbar.php') ?>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6 mt-5">
                <div class="card">
                    <h5 class="card-header text-center">เข้าสู่ระบบ</h5>
                    <div class="card-body">
                        <form class="form" method="POST" action="php/checkLogin.php">

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                            </div>

                            <button type="submit" id="login" name="submit" class="btn btn-primary btn-block mb-2">เข้าสู่ระบบ</button>
                            <span class="float-right">สมัครสมาชิก<a href="register.php"> คลิกที่นี่</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
</body>
</html>