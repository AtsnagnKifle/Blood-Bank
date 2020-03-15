<?php
    session_start();
    if((!isset($_SESSION['who'])) || $_SESSION['who']!="doctor")
    {
        header("Location: ../inzcdex.php");
        exit();
    }
    else{
   //     header("Location: ../index.php");
        if(isset($_POST['submit']))
        {
            include_once 'db.php';
            $qu = "DELETE FROM bank WHERE donor = '".$_POST['user']."' LIMIT 1";
            mysqli_query($con,$qu);
            header("Location: ../bank.php");
            exit();
    
        }
        else{
            header("Location: ../isdasdndex.php");
            exit();
        }

    }

?>