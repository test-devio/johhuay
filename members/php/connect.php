<?php 
    session_start();
    $conn = new mysqli('localhost', 'root','' ,'minicourse1');
    $conn->set_charset("utf8");
    if ($conn->connect_errno){
        die("Connection Failed! ".$conn->connect_error);
    }


?>