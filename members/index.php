<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>    
    <?php include_once('includes/navbar.php') ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">ยินดีต้อนรับ</h1>
            <p class="lead">เลือกเว็บไซต์ที่ต้องการ</p>
        </div>
    </div>

    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">ยินดีต้อนรับ</h1>
            <p class="lead">เลือกเว็บไซต์ที่ต้องการ</p>
        </div>
    </div>

    <footer class="card bg-dark text-center py-3 text-white">
        © Copyright 2022 <h6>ระบบสแกนหวย พัฒนาโดย<a href="https://amblotto.cc/"> Amblotto</a></h6>
    </footer>



    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>