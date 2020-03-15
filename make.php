<?php
    session_start();
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
			include_once 'head.html';
		}
		else if($_SESSION['who']=="donor"){
            include_once 'loged/donor/head.php';
            include_once 'back/checklist.php';
            include_once 'loged/donor/make.php';
            
		}
		else if($_SESSION['who']=="accepter"){
            include_once 'loged/need/head.php';
            include_once 'back/checklist.php';
            include_once 'loged/need/make.php';
           
        }
        
    
       
    ?>
    
    <br><br><br>
    <?php
        include_once 'head/footer.html';
    ?>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>