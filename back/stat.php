<?php
	include_once 'db.php';
	$qu = "SELECT COUNT(*) FROM bank";
	$res = mysqli_query($con,$qu);
	$data = mysqli_fetch_assoc($res);
	$sum = $data['COUNT(*)'];
	
	$qu = "SELECT COUNT(*) FROM bank WHERE blood='A'";
	$res = mysqli_query($con,$qu);
	$data = mysqli_fetch_assoc($res);
	$sumA = $data['COUNT(*)'];

	$qu = "SELECT COUNT(*) FROM bank WHERE blood='B'";
	$res = mysqli_query($con,$qu);
	$data = mysqli_fetch_assoc($res);
	$sumB = $data['COUNT(*)'];
	
	$qu = "SELECT COUNT(*) FROM bank WHERE blood='AB'";
	$res = mysqli_query($con,$qu);
	$data = mysqli_fetch_assoc($res);
	$sumAB = $data['COUNT(*)'];

	$qu = "SELECT COUNT(*) FROM bank WHERE blood='O'";
	$res = mysqli_query($con,$qu);
	$data = mysqli_fetch_assoc($res);
	$sumO = $data['COUNT(*)'];

?>





