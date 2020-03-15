<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
        exit();
    }

    else if($_SESSION['who']=="donor"){
        header("Location: ../index.php");
        exit();
    }
    else{
        if(isset($_POST['submit'])){
            include_once 'db.php';
            $des = mysqli_real_escape_string($con,$_POST['description']);
            $qu="INSERT INTO request_list(username,date,description) VALUES ('".$_SESSION['username']."','".date("Y/m/d")."','".$des."')";
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
