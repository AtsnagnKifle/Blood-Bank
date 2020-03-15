<?php
    session_start();
    if($_SESSION['who']=="doctor"){
        $_SESSION['drwant']="donor";
        header("Location: list.php");
        exit();
    }
    else{
        header("Location: index.php");
        exit();
    }
?>