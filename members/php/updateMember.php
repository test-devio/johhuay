<?php
    require_once('connect.php');
    /**
     * ทดค่าไว้ดู
     */ 
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // echo $_SESSION['id'];

    if(isset($_POST['submit']) && isset($_SESSION['id'])){
        $sql = "UPDATE `members` SET 
            `name` = '".$_POST['name']."' ,
            `email` = '".$_POST['email']."' ,
            `phone` = '".$_POST['phone']."' 
            WHERE  id = '".$_SESSION['id']."' ";
        $result = $conn->query($sql);

        if ($result) {
            $_SESSION['name'] = $_POST['name']; 
            echo "<script> alert('แก้ไขข้อมูล สำเร็จแล้ว'); </script>";
            header('Refresh:0; url=../profile.php');
        } else {
            echo "แก้ไขข้อมูล ไม่สำเร็จ \n โปรดติดต่อผู้ดูและระบบ";
            header('Refresh:3; url=../profile.php');
        }
    }else {
        header('location:../index.php');
    }

?>