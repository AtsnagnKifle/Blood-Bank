<?php
    include_once 'db.php';
    if(!isset($_SESSION['username'])){
        header("Loacation: ../index.php");
        exit();
    }

    else if($_SESSION['who']=="donor"){
        $qu = "SELECT * FROM donor_list WHERE username = '".$_SESSION['username']."'";
        $result = mysqli_query($con,$qu);
        $check = mysqli_num_rows($result);
        if($check  > 0){
            $_SESSION['inlist']=true;
        }
        else{
            $_SESSION['inlist']=false;

        }
    }
    else if($_SESSION['who']=="accepter"){
        $qu = "SELECT * FROM request_list WHERE username = '".$_SESSION['username']."'";
        $result = mysqli_query($con,$qu);
        
        $check = mysqli_num_rows($result);
        if($check  > 0){
            $_SESSION['inlist']=true;
        }
        else{
            $_SESSION['inlist']=false;

        }
    }


?>