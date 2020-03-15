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
	<title>Lets Save</title>
</head>
<body>

	<?php
		
		if(!isset($_SESSION['username'])){
			include_once 'head/head.html';
		}
		else{
			if($_SESSION['who']=="donor"){
				include_once 'loged/donor/head.php';
			}
			else if($_SESSION['who']=="accepter"){
				include_once 'loged/need/head.php';
			}
			else{
				include_once 'loged/doctor/head.php';
			}
			if($_SESSION['now']){
				echo '<div class="alert alert-success">login success</div>';
				$_SESSION['now']=false;
			}

		}
		
		
	?>

	<center>
	<div class="container-fluid">
        <h4 class="" style="text-align:center;"><a href="donorsignup.php">Register</a> Today Become a blood donor or 
		<a href="needsignup.php">Register</a> Today Become need</h4>
		
		<div class="jumbotron">
			<h2 style="text-align:center;">When You Give Blood</h2> 
			<h3>You Give Another Birthday another anniversary another day at the beach another night
			under the stars ,another talk with friend another laugh another hug another chance.
			</h3>
		</div>
		<img src="img/1.png" alt="" class="img-responsive">
        
    </div>
	</center>	
	
	<br><br><br>
	<?php
		include_once 'head/footer.html';
	?>


	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>