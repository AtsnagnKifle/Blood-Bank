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
        
        include_once 'back/stat.php';
        
	

	$perA = round(($sumA*100)/$sum,2);
	$perB = round(($sumB*100)/$sum,2);
	$perAB = round(($sumAB*100)/$sum,2);
	$perO = round(($sumO*100)/$sum,2);
 	echo '
	<div style="width:60%;margin:auto;">
		<br><br><br>
	   	<h2>Total Blood In The Bank '.$sum.'</h2>
	     <h2>Total Blood Type <span style="color:red">A</span> In The Bank '.$sumA.'</h2>
            <div class="progress">
    		<div class="progress-bar" role="progressbar" style="width: '.$perA.'%" aria-valuenow="'.$perA.'" aria-valuemin="0" aria-valuemax="100">'.$perA.'%</div>
    	    </div>
		<br><br>
	    <h2>Total Blood Type <span style="color:red">B</span> In The Bank '.$sumB.'</h2>
    	     <div class="progress">
    		<div class="progress-bar" role="progressbar" style="width: '.$perB.'%" aria-valuenow="'.$perB.'" aria-valuemin="0" aria-valuemax="100">'.$perB.'%</div>
    	    </div>
		<br><br>
	    <h2>Total Blood Type <span style="color:red">AB</span> In The Bank '.$sumAB.'</h2>
	    <div class="progress">
    		<div class="progress-bar" role="progressbar" style="width: '.$perAB.'%" aria-valuenow="'.$perAB.'" aria-valuemin="0" aria-valuemax="100">'.$perAB.'%</div>
    	    </div>
		<br><br>
	   <h2>Total Blood Type <span style="color:red">O</span> In The Bank '.$sumO.'</h2>
	    <div class="progress">
    		<div class="progress-bar" role="progressbar" style="width: '.$perO.'%" aria-valuenow="'.$perO.'" aria-valuemin="0" aria-valuemax="100">'.$perO.'%</div>
    	    </div>
	</div>
';


		
	?>


    <br><br><br>
    <?php
        include_once 'head/footer.html';
    ?>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>