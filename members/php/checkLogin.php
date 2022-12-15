<?php 
    require_once('connect.php');
    if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM members WHERE username = ?");
    $stmt->bind_param('s', $username); // s - string, b - blob, i - int
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if(!empty($row)){

        if(password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];  // $_SESSION = ดึงค่าข้อมูลผู้ใช้ไปหน้าอื่น
            $_SESSION['image'] = $row['image'];

            header('location:../index.php');
            // echo '<script type="text/javascript">';
            // echo 'alertSuccess("เข้าสู่ระบบ", "index.php")';
            // echo '</script>';

        } else {         
            echo '<script> alert("รหัสผ่านไม่ถูกต้อง!!"); </script>';
            header('Refresh:0; url=../login.php'); // Refresh:0; url= - ใช้เพื่อขั้นระหว่างกลาง
        }

    } else {
        echo '<script> alert("ชื่อผู้ใช้นี้ไม่มีอยู่จริง!!"); </script>';
        header('Refresh:0; url=../login.php'); // Refresh:0; url= - ใช้เพื่อขั้นระหว่างกลาง
    }

    } else {
        header('location:../index.php'); 
    }




?>