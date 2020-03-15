<?php
    session_start();
    if($_SESSION['who']=="doctor"){
        $_SESSION['drwant']="accepter";
        header("Location: list.php");
        exit();
    }
    else{
        header("Location: index.php");
        exit();
    }
?>