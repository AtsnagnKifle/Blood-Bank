<?php
        session_start();
        if(!isset($_SESSION['username'])){
			header("Location: index.php");
            exit();
		}
		else if($_SESSION['who']=="donor"){
            header("Location: index.php");
            exit();     
		}
		else if($_SESSION['who']=="accepter"){
            header("Location: index.php");
            exit();      
        }
        else{
            include_once '../../back/db.php';
            if(isset($_POST['submit']))
            {
                $username = mysqli_real_escape_string($con,$_POST['username']);
                
                if( empty($username)){
                    //echo $username;
                    //echo '<script>alert("invalid input");</script>';exit();
                    include_once '../../back/error.php';

                    $_SESSION['insertusernameerror']="User Name Empty";
                    header("Location: ../../insert.php?empty");
                    exit();
                    
                }
                else{

                        $qu = "SELECT * FROM donor_info WHERE username='$username'";
                        $result = mysqli_query($con,$qu);
                        $check = mysqli_num_rows($result);
                        if($check  < 1){
                            //echo $username;
                            $_SESSION['insertusernameerror']="Invalid User Name";
                            header("Location: ../../insert.php?invalid user");
                            exit(); 
                        }
                        else{
                            $data = mysqli_fetch_assoc($result);
                            $blood=$data['blood_type'];
                            $qu2="INSERT INTO bank(donor,accepter,date,blood) VALUES ('$username',"."'bank'".",'".date("Y/m/d")."','".$blood."')";
                            mysqli_query($con,$qu2);
                            $_SESSION['insert']=true;
                            $_SESSION['insertusernameerror']="";
                            header("Location: ../../insert.php?success");
                            exit();
                        }
                }
                
            }
        }
?>