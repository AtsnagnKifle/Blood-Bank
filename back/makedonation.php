<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }

    else if($_SESSION['who']=="accepter"){
        header("Location: ../index.php");
    }
    else{
        if(isset($_POST['submit'])){
            include_once 'db.php';
            $qu="INSERT INTO donor_list(username,date) VALUES ('".$_SESSION['username']."','".date("Y/m/d")."')";
            mysqli_query($con,$qu);
            $_SESSION['now']=true;
            header("Location: ../make.php?success");
            exit();
        }
        else
        {
            header("Location: ../index.php");
            exit();
        }
    }



?>
