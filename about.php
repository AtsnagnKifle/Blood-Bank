<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">    
    <title>Login</title>
</head>
<body>
    <?php
		if(!isset($_SESSION['username'])){
			include_once 'head/head.html';
		}
		else if($_SESSION['who']=="donor"){
			include_once 'loged/donor/head.php';
		}
		else if($_SESSION['who']=="accepter"){
			include_once 'loged/need/head.php';
        }
        else{
            include_once 'loged/doctor/head.php';
        }
		
	
		
	?>  

    <br>
   
    <div class="container-fluid">
        <div class="jumbotron">
        <h4 class="" style="text-align:center;"><a href="donorsignup.php">Register</a> Today Become a blood donor or 
        <a href="needsignup.php">Register</a> Today Become need</h4>
        <h2>What Are The Most Common Blood Types?</h2>
        <p>There are four main blood types but some are more common than others.The list below shows types of blood group</p>
        <ul>
            <li>O </li>
            
            <li>A </li>
            
            <li>B </li>
            
            <li>AB </li>
           
        </ul>
        </div>

        <div>
            <img src="img/4.jpg" alt="" class="img-responsive">
        </div>


    </div>
    <br><br><br>
    <?php
        include_once 'head/footer.html';
    ?>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>