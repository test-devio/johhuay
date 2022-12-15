<?php
    require_once('php/connect.php');
    if(!isset($_SESSION['id'])) {
    header('location:index.php');
    }

    $sql = "SELECT * FROM `members` WHERE `id` = '".$_SESSION['id']."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$result->num_rows) {
    header('location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ประวัติส่วนตัว</title>
    <style>
        .img-profile{
            width: 150px;
            height: 150px;
            margin: 0 auto;
            display: block;
        }

        .profile-top{
            margin-top: -100px;
        }

    </style>
</head>
<body>
    <?php include_once('includes/navbar.php') ?>
    <section class="jumbotron jumbotron-fluid">
        <div class="container my-5 my-sm-1">
            <h1 class="text-center">ประวัติส่วนตัว</h1>
        </div>
    </section>

    <section class="container my-3">
        <div class="row">
            <div class="col-12 profile-top">
                <img src="assets/images/<?php echo $row['image'];?>" class="my-3 img-profile rounded-circle img-thumbnail" alt="Image Profile">

                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="username" value="<?php echo $row['username']; ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">ชื่อ - นามสกุล</label>
                                <input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">อีเมล์</label>
                                <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" value="<?php echo $row['phone']; ?>" disabled>
                            </div>
                        </div>

                        <a href="profile-edit.php" class="btn btn-warning float-right">แก้ไขข้อมูล</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <footer class="card bg-dark text-center py-3 text-white">
        © Copyright 2022 <h6>ระบบสแกนหวย พัฒนาโดย<a href="https://amblotto.cc/"> Amblotto</a></h6>
    </footer>

    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>