<?php
    session_start();
    if(isset($_POST['submit'])){
        include_once 'db.php';
        $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
        $midlename = mysqli_real_escape_string($con,$_POST['midlename']);
        $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
        $city = mysqli_real_escape_string($con,$_POST['city']);
        $street = mysqli_real_escape_string($con,$_POST['street']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone = mysqli_real_escape_string($con,$_POST['mobilephone']);
        $telephone = mysqli_real_escape_string($con,$_POST['telephone']);
        $blood = mysqli_real_escape_string($con,$_POST['blood']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $confirmpassword = mysqli_real_escape_string($con,$_POST['confirmpassword']);
        $username = mysqli_real_escape_string($con,$_POST['username']);
        if(empty($email) || empty($firstname) || empty($midlename) || empty($lastname) || empty($city) || empty($street) || empty($phone) || empty($telephone) || empty($blood)){
            //echo '<script>alert("invalid input");</script>';exit();
            $_SESSION['loginerror']="sign up error";  
            if(empty($firstname)){
                $_SESSION['firstnameerror']="First Name Empty";
            }
            if(empty($midlename)){
                $_SESSION['midlenameerror']="Midle Name Empty";
            }
            if(empty($lastname)){
                $_SESSION['lastnameerror']="last Name Empty";
            }
            if(empty($city)){
                $_SESSION['cityerror']="City Name Empty";
            }
            if(empty($street)){
                $_SESSION['streeterror']="Street Name Empty";
            }
            if(empty($email)){
                $_SESSION['emailerror']="Email Empty";
            }
            if(empty($password)){
                $_SESSION['passworderror']="Passsword Empty";
            }
            if(empty($confirmpassword)){
                $_SESSION['confirmpassworderror']="Confirm Password Empty";
            }
            if(empty($username)){
                $_SESSION['usernameerror']="User Name Empty";
            }
            if(empty($phone)){
                $_SESSION['mobilephoneerror']="Mobile Phone Empty";
            }
            if(empty($telephone)){
                $_SESSION['telephoneerror']="Telephone Empty";
            }
            header("Location: ../needsignup.php?empty");
            exit();
            
        }
        else{
            if (!preg_match("/^[a-zA-Z ]*$/",$firstname) || !preg_match("/^[a-zA-Z ]*$/",$midlename) || !preg_match("/^[a-zA-Z ]*$/",$lastname) || !preg_match("/^[a-zA-Z ]*$/",$city)) {
                
                $_SESSION['loginerror']="invalid input";  
                header("Location: ../needsignup.php?invalid");
                //echo '<script>alert("invalid input")</script>';
                exit();
            }
            else{
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['loginerror']="invalid email"; 
                    $_SESSION['emailerror']="invalid"; 
                    header("Location: ../needsignup.php?invalid email");
                    exit();
                }
                else{
                    if ($password != $confirmpassword){
                        $_SESSION['loginerror']="password didn't match";
                        $_SESSION['passworderror']="not match";
                        $_SESSION['confirmpassworderror']="not match";
                        header("Location: ../donorsignup.php?match");
                        exit();
                    }
                    else{
                        $qu = "SELECT * FROM accepter_info WHERE username='$username'";
                        $result = mysqli_query($con,$qu);
                        $check = mysqli_num_rows($result);
                        $qu2 = "SELECT * FROM donor_info WHERE username='$username'";
                        $result2 = mysqli_query($con,$qu2);
                        $check2 = mysqli_num_rows($result2);
                        $qu3 = "SELECT * FROM doctor WHERE username='$username'";
                        $result3 = mysqli_query($con,$qu3);
                        $check3 = mysqli_num_rows($result3);
                        if($check  > 0 || $check2 > 0 || $check3 >0){
                            $_SESSION['usernameerror']="User Name Taken";
                            header("Location: ../needsignup.php?username");
                            exit();
                        }
                        else{
                            $qu="INSERT INTO accepter_info(first_name,midle_name,last_name,city,street,phone,telephone,blood_type,username,email,password) VALUES ('$firstname','$midlename','$lastname','$city','$street','$phone','$telephone','$blood','$username','$email','$password')";
                            mysqli_query($con,$qu);
                            header("Location: ../login.php?success");
                            exit();

                        }
                    }


                }

            }


        }
        //echo $firstname;
        //echo $midlename;
        //echo $lastname;
        //echo $city;
        //echo $street;
        //echo $phone;
        //echo $telephone;
        //echo $blood;       

    }   
    else{
        header("Location: ../needsignup.php?error");
        exit();

    } 

?>