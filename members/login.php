<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
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
                        <form class="form" method="post" action="php/checkLogin.php">

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

                            <button type="submit" name="submit" class="btn btn-primary btn-block mb-2">เข้าสู่ระบบ</button>
                            <span class="float-right">สมัครสมาชิก<a href="register.php"> คลิกที่นี่</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>