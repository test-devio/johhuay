<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <title>สมัครสมาชิก</title>
</head>
<body>
    <?php include_once('includes/navbar.php') ?>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6 mt-5">
                <div class="card">
                    <h5 class="card-header text-center">สมัครสมาชิก</h5>
                    <div class="card-body">
                        <form class="form" id="formRegister" method="post" action="php/createMember.php">

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ - นามสกุล">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                                </div>
                                <input type="text" class="form-control" id="email" name="email" placeholder="example@domain.com">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                </div>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์โทรศัพท์">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="password">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirmpassword">
                            </div>

                            <div class="form-group mb-2 mr-sm-2">
                                <div class="g-recaptcha" data-callback="recaptchaCallbank" data-sitekey="6Ld83QMjAAAAAByxEnDTa_B579L_bAreItMqhTyv"></div>
                            </div>
                            
                            <button type="submit" name="submit" id="submit" disabled class="btn btn-primary btn-block mb-2">สมัครสมาชิก</button>
                            <span class="float-right">เข้าสู่ระบบ<a href="login.php"> คลิกที่นี่</a></span>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        //formregister
        $( document ).ready(function(){
            $('#formRegister').validate({
                rules:{
                    name: 'required',
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        number: true,
                        maxlength: 20
                    },
                    username: {
                        required: true,
                        minlength: 4
                    },
                    password: {
                        required: true,
                        minlength: 4
                    },
                    confirm_password: {
                        required: true,
                        minlength: 4,
                        equalTo: '#password'
                    }
                },
                messages:{
                    name: 'โปรดกรอกข้อมูล ชื่อ - นามสกุล',
                    email: {
                        required: 'โปรดกรอกข้อมูล Email',
                        email: 'โปรดกรอก Email ให้ถูกต้อง'
                    },
                    phone: {
                        required: 'โปรดกรอกข้อมูล เบอร์โทร',
                        number: 'โปรดกรอกตัวเลขเท่านั้น',
                        maxlength: 'โปรดกรอกตัวเลขไม่เกิน 20 ตัวอักษร'
                    },
                    username: {
                        required: 'โปรดกรอกข้อมูล ชื่อผู้ใช้',
                        minlength: 'โปรดกรอกข้อมูล ไม่น้อยกว่า 4 ตัวอักษร'
                    },
                    password: {
                        required: 'โปรดกรอกข้อมูล รหัสผ่าน',
                        minlength: 'โปรดกรอกข้อมูล ไม่น้อยกว่า 4 ตัวอักษร'
                    },
                    confirm_password: {
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

        function recaptchaCallbank(){
            $('#submit').removeAttr('disabled');
        }
    </script>
</body>
</html>