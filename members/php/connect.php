<?php 
    session_start();
    // $conn = new mysqli('localhost', 'scourses_1plus', '48Rv9YKYiu', 'scourses_1plus');
    $conn = new mysqli('206.189.46.156', 'qxubhdwxqw','3fmEXU5Wgt' ,'qxubhdwxqw'); // 'Hostname', 'Username', 'Password', 'Db name';
    $conn->set_charset("utf8");
    if ($conn->connect_errno){
        die("Connection Failed! ".$conn->connect_error);
    }


?>
