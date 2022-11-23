<?php 

    require_once('connect.php');

    if (isset($_POST['submit'])) {
        echo 'Yes';
    } else {
        echo 'No';
    }

?>