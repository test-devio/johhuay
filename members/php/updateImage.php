<meta charset="UTF-8">
<?php

    require_once('connect.php');
    if (isset($_POST['submit'])){
        $temp = explode('.', $_FILES['file']['name']);
        $new_name = round(microtime(true)*9999) . '.' . end($temp) ;
        $url = '../assets/images/'.$new_name;
        
        if ( move_uploaded_file($_FILES['file']['tmp_name'], $url )) {
            $sql = "UPDATE `members` SET `image` = '".$new_name."' WHERE `id` = '".$_SESSION['id']."' ";
            $result = $conn->query($sql) or die($conn->$error);
            if($result){
                $_SESSION['image'] = $new_name;
                echo '<script> alert("อัพเดทรูปภาพสำเร็จ") </script>';
                header('Refresh:0; url=../profile.php');
            }
        }






    } else {
        header('location:../index.php');
    } 


?>