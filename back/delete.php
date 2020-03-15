<?php
    include_once 'db.php';
    session_start();
    if(!isset($_SESSION['username'])){
        header("Loacation: index.php");
        exit();
    }
    if(isset($_POST['submit'])){
        if($_SESSION['who']=="donor"){
            $qu = "DELETE FROM donor_list WHERE username = '".$_SESSION['username']."'";
            mysqli_query($con,$qu);
            $_SESSION['inlist']=false;
            header("Location: ../make.php");
            exit();
    
        }
        
        else if($_SESSION['who']=="accepter"){
            $qu = "DELETE FROM request_list WHERE username = '".$_SESSION['username']."'";
            mysqli_query($con,$qu);
            $_SESSION['inlist']=false;
            header("Location: ../make.php?su");
            exit();
           
        }
    

    }
    
    else{
        header("Location: ../make.php");
        exit();
    }
    

?>