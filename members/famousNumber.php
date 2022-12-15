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
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <h1 class="display-4 text-white mt-3">เลขสำนักดัง</h1>
                <p class="lead text-white">*ใช้เพื่อความบันเทิงเท่านั้น*</p>
            </div>
        </div>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto text-center">
        <div class="card">
          <div class="card-body">
          <h4 class="text-center">*ยังไม่มีเลขสำนักในขณะนี้ค่ะ*</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

    <footer class="card bg-dark text-center py-3 mt-5 text-white">
        © Copyright 2022 <h6>ระบบสแกนหวย พัฒนาโดย<a href="https://amblotto.cc/"> Amblotto</a></h6>
    </footer>

    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function fn(textboxno) {
  var x = getRandomInt(111, 999);
  if(textboxno==1)
  {
    document.getElementById("winnertext1").innerHTML = x;
    document.getElementById("img1").src="assets/images/Logo.png";
  }
  else if(textboxno==2)
  {
    document.getElementById("winnertext2").innerHTML = x;
    document.getElementById("img2").src="assets/images/Logo.png";
  }
  else if(textboxno==3)
  {
    document.getElementById("winnertext3").innerHTML = x;
    document.getElementById("img3").src="assets/images/Logo.png";
  }

}
</script>
</body>
</html>