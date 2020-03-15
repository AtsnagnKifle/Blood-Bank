<?php

    session_start();
    if(isset($_POST['submit']))
    {
        include_once 'error.php';
        include_once 'db.php';
        $user = mysqli_real_escape_string($con,$_POST['username']);
        $pass = mysqli_real_escape_string($con,$_POST['password']);

        if(empty($user) || empty($pass))
        {
            $_SESSION['loginerror']="login error";
            if(empty($user)){
                $_SESSION['usernameerror']="Empty User Name";
            }
            if(empty($pass)){
                $_SESSION['passworderror']="Empty Password";
            }
            header("Location: ../login.php?empty");
            exit();
        }
        else{
            $qu = "SELECT * FROM accepter_info WHERE username = '$user'";
            $result = mysqli_query($con,$qu);
            $check = mysqli_num_rows($result);
            $qu2 = "SELECT * FROM donor_info WHERE username = '$user'";
            $result2 = mysqli_query($con,$qu2);
            $check2 = mysqli_num_rows($result2);
            $qu3 = "SELECT * FROM doctor WHERE username = '$user'";
            $result3 = mysqli_query($con,$qu3);
            $check3 = mysqli_num_rows($result3);
            if($check<1 && $check2<1 && $check3 <1)
            {
                $_SESSION['loginerror']="Invalid User Name or Password";    
                header("Location: ../login.php?invalid");
                exit();
            }
            else
            {
                if($check==1){
                    $data = mysqli_fetch_assoc($result);
                    $who = "accepter";    
                }
                else if($check2==1){
                    $data = mysqli_fetch_assoc($result2);
                    $who = "donor";
                }
                else{
                    $data = mysqli_fetch_assoc($result3);
                    $who = "doctor";
                }
                
                if($data['password'] == $pass){
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['firstname'] = $data['first_name'];
                    $_SESSION['lastname'] = $data['last_name'];
                    $_SESSION['midlename'] = $data['midle_name']; 
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['city'] = $data['city'];
                    $_SESSION['street'] = $data['street'];
                    $_SESSION['phone'] = $data['phone'];
                    $_SESSION['telephone'] = $data['telephone']; 
                    $_SESSION['bloodtype'] = $data['blood_type'];
                    $_SESSION['who'] = $who;
                    $_SESSION['now']=true;
                    
                    header("Location: ../index.php?success");
                    exit(); 

                }
                else{
                    $_SESSION['loginerror']="Invalid User Name or Password";
                    header("Location: ../login.php?password");
                    exit();
                }
            }
        }
    
    }
    else{
        header("Location: ../index.php");

    }



?>