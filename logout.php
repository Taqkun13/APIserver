<?php
    session_start();
    session_destroy();
    session_start();
    $_SESSION['auth'] = "selamat tinggal";
    header("location:login.php");
?>