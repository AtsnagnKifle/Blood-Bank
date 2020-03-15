<?php
    session_start();
    if(!$_SESSION['who']=="doctor"){
        $_SESSION['drinsert']="yes";
        header("Location: index.php");
        exit();
    }
    
    $_SESSION['drinsert']="yes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donor List</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">    

</head>
<body>

<?php
        
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
            include_once 'loged/doctor/head.php';
        }
        
         echo '<div class="container-fluid" style="margin:auto;width:60%;">
            <form action="back/donorsignup.php" method="POST">

                <h2>Doctor Registration</h2>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="first name">
                </div>
                <span style="color:red">'.$_SESSION['firstnameerror'].'</span>
                <div class="form-group">
                    <label for="midlename">Midle Name</label>
                    <input type="text" name="midlename" id="midlename" class="form-control" placeholder="midle name">
                </div>
                <span style="color:red">'.$_SESSION['midlenameerror'].'</span>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="last name">
                </div>
                <span style="color:red">'.$_SESSION['lastnameerror'].'</span>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="city">
                </div>
                <span style="color:red">'.$_SESSION['cityerror'].'</span>
                <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" name="street" id="street" class="form-control" placeholder="street">
                </div>
                <span style="color:red">'.$_SESSION['streeterror'].'</span>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                </div>
                <span style="color:red">'.$_SESSION['emailerror'].'</span>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password" class="form-control">
                </div>
                <span style="color:red">'.$_SESSION['passworderror'].'</span>
                <div class="form-group">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="text" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password">
                </div>
                <span style="color:red">'.$_SESSION['confirmpassworderror'].'</span>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="User Name">
                </div>
                <span style="color:red">'.$_SESSION['usernameerror'].'</span>
                <div class="form-group">
                    <label for="phone">Mobile Phone</label>
                    <input type="text" name="mobilephone" id="mobilephone" class="form-control" placeholder="mobile phone">
                </div>
                <span style="color:red">'.$_SESSION['mobilephoneerror'].'</span>
                <div class="form-group">
                    <label for="telephone">Telephone/work</label>
                    <input type="text" name="telephone" id="telephone" class="form-control" placeholder="telephone">
                </div>
                <span style="color:red">'.$_SESSION['telephoneerror'].'</span>
                <div class="form-group">
                    <label for="blood">Blood Type</label>
                    <select name="blood" id="blood" class="form-control">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                        
                    </select>
                </div>

                <button class="btn btn-info" type="submit" name="submit">ADD DR</button>    
                </form></div>';
        
    
    
    ?>
    <br><br><br>
    <?php
        include_once 'back/errorF.php';
        include_once 'head/footer.html';
    ?>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>