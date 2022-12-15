<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Page </title>
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <?php  include_once('includes/navbar.php') ?>
    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">ยินดีต้อนรับ</h1>
            <p class="lead">เลือกเว็บไซต์ที่ต้องการ</p>
        </div>
    </div> -->


        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
            <div class="container text-center">
            <h1 class="display-4 text-white mt-3">ยินดีต้อนรับ</h1>
            <p class="lead text-white">เลือกเว็บไซต์ที่ต้องการ</p>
        </div>
                <div class="row mt-5">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info shadow">
                            <div class="inner text-center">
                                <h1 class="py-3">&nbsp;เลข 3 ตัว&nbsp;</h1>
                            </div>
                            <a href="lastNumber3.php" class="small-box-footer py-3"> คลิกเพื่อทำรายการ <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary shadow">
                            <div class="inner text-center">
                                <h1 class="py-3">เลขท้าย 2 ตัว</h1>
                            </div>
                            <a href="lastNumber2.php" class="small-box-footer py-3"> คลิกเพื่อทำรายการ <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success shadow">
                            <div class="inner text-center">
                                <h1 class="py-3">เลขสำนักดัง</h1>
                            </div>
                            <a href="famousNumber.php" class="small-box-footer py-3"> คลิกเพื่อทำรายการ <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger shadow">
                            <div class="inner text-center">
                                <h1 class="py-3">เสี่ยงเลข</h1>
                            </div>
                            <a href="riskNumber.php" class="small-box-footer py-3"> คลิกเพื่อทำรายการ <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="small-box py-3 bg-white shadow">
                            <div class="inner">
                                <h3>3,500 คน</h3>
                                <p class="text-danger">ยอดผู้เข้าใช้บริการ</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="small-box py-3 bg-white shadow">
                            <div class="inner">
                                <h3>25,000 คน</h3>
                                <p class="text-danger">ยอดผู้เข้าใช้บริการ</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="small-box py-3 bg-white shadow">
                            <div class="inner">
                                <h3>11,500 คน</h3>
                                <p class="text-danger">ยอดผู้เข้าใช้บริการ</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="small-box py-3 bg-white shadow">
                            <div class="inner">
                                <h3>7,500 คน</h3>
                                <p class="text-danger">ยอดผู้เข้าใช้บริการ</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-xl" id="salesReport"></span>
                                        <span class="text-danger" id="salesTextReport"></span>
                                    </p>
                                    <p class="ml-auto flex-row" id="salesbtn">
                                        <button class="btn btn-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-month.php', this, 'line')">ยอดขายเดือนนี้</button>
                                        <button class="btn btn-outline-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-sixmonths.php', this, 'bar')">6 เดือน</button>
                                        <button class="btn btn-outline-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-twelvemonths.php', this, 'bar')">12 เดือน</button>
                                        <button class="btn btn-outline-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-year.php', this, 'bar')">2021</button>
                                    </p>
                                </div>
                                <div class="position-relative">
                                    <canvas id="visitors-chart" height="350"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    

    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">ยินดีต้อนรับ</h1>
            <p class="lead">เลือกเว็บไซต์ที่ต้องการ</p>
        </div>
    </div> -->

    <footer class="card bg-dark text-center py-3 mt-5 text-white">
        © Copyright 2022 <h6>ระบบสแกนหวย พัฒนาโดย<a href="https://amblotto.cc/"> Amblotto</a></h6>
    </footer>



    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>