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
    <title>เปลี่ยนรหัสผ่าน</title>
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
            <h1 class="text-center">เปลี่ยนรหัสผ่าน</h1>
        </div>
    </section>

    <section class="container my-3">
        <div class="row justify-content-center">
            <div class="col-6 profile-top">
                <img src="assets/images/<?php echo $row['image'];?>" class="my-3 img-profile rounded-circle img-thumbnail" alt="Image Profile">

                <div class="card">
                    <div class="card-body">
                        <form action="php/changePassword.php" method="post" id="formPassword">
                            <div class="form-group col-md-12">
                                <label for="oldpassword">รหัสผ่านเดิม</label>
                                <input type="password" class="form-control" name="oldpassword" id="oldpassword">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="password">รหัสผ่านใหม่</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="repassword">ยืนยันรหัสผ่านใหม่</label>
                                <input type="password" class="form-control" name="repassword" id="repassword">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="บันทึกข้อมูล">
                        </form>
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
    <script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>

    <script>

        $( document ).ready(function(){
            $('#formPassword').validate({
                rules:{
                    oldpassword: {
                        required: true,
                        minlength: 4
                    },
                    password: {
                        required: true,
                        minlength: 4
                    },
                    repassword: {
                        required: true,
                        minlength: 4,
                        equalTo: '#password'
                    }
                },
                messages:{
                    oldpassword: {
                        required: 'โปรดกรอกข้อมูล รหัสผ่าน',
                        minlength: 'โปรดกรอกข้อมูล ไม่น้อยกว่า 4 ตัวอักษร'
                    },
                    password: {
                        required: 'โปรดกรอกข้อมูล รหัสผ่าน',
                        minlength: 'โปรดกรอกข้อมูล ไม่น้อยกว่า 4 ตัวอักษร'
                    },
                   repassword: {
                        required: 'โปรดกรอกข้อมูล รหัสผ่าน',
                        minlength: 'โปรดกรอกข้อมูล ไม่น้อยกว่า 4 ตัวอักษร',
                        equalTo: 'โปรดกรอกข้อมูลรหัสผ่านให้ตรงกัน'
                    }
                },
                errorElement: 'div',
                errorPlacement: function ( error, element ){
                    error.addClass( 'invalid-feedback' )
                    error.insertAfter( element )
                },
                highlight: function( element, errorClass, validClass ){
                    $( element ).addClass( 'is-invalid' ).removeClass( 'is-valid' )
                },
                unhighlight: function ( element, errorClass, validClas ){
                    $( element ).addClass( 'is-valid' ).removeClass( 'is-invalid' )
                }
            });
        })
    </script>

</body>
</html>