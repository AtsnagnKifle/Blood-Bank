<?php
		if(!isset($_SESSION['username'])){
            header("Loacation: index.php");
            exit();
		}
		else if($_SESSION['who']=="accepter"){
			header("Loacation: index.php");
            exit();
		}
		else if(isset($_POST['submit'])){
			$city=$_POST['city'];
			$blood=$_POST['blood'];
			
			//echo similar_text("ALL",$blood);
		

			include_once 'back/db.php';
			$qu="SELECT * FROM request_list ORDER BY date DESC";
			$result = mysqli_query($con,$qu);
			$check = mysqli_num_rows($result);
			if ($check >= 1){
				$bool = true;
				while( $row = mysqli_fetch_assoc($result))
				{
					$user = $row['username'];
					
					if(empty($city) && empty($blood)){
						$qu2 = "SELECT * FROM accepter_info WHERE username='$user'";
					}
					else if(empty($city)){
						if($blood=="ALL"){
							$qu2 = "SELECT * FROM accepter_info WHERE username='$user'";
						}
						else{
							$qu2 = "SELECT * FROM accepter_info WHERE username='$user' AND blood_type='$blood'";
						}
					}
					else if(empty($blood)){		
							$qu2 = "SELECT * FROM accepter_info WHERE username='$user' AND city='$city'";	
					}
					else{
						if($blood=='ALL'){
							$qu2 = "SELECT * FROM accepter_info WHERE username='$user' AND city='$city'";
						}
						else{
							$qu2 = "SELECT * FROM accepter_info WHERE username='$user' AND city='$city' AND blood_type='$blood'";
						}
					}	
					
					$result2 = mysqli_query($con,$qu2);
					$num = mysqli_num_rows($result2);
					$row2 = mysqli_fetch_assoc($result2);
					if($num>=1){
						$bool=false;
					echo "
						
						<div class='alert alert-success' role='alert' style='width:60%;margin:auto;'>
							<h4>Full Name : ". $row2['first_name']." ".$row2['midle_name']."</h4>"
							."<h4>BLOOD TYPE : ".$row2['blood_type']."</h4>"
							."<h4>CITY : ".$row2['city']."</h4>"
							."<h4>STREET :".$row2['street']."</h4>"
							."<h4>PHONE : ".$row2['phone']."</h4>"
							."<h4>TELEPHONE : ".$row2['telephone']."</h4>"
							."<h4>DATE : ".$row['date']."</h4>"."
						</div>
						<br><br>
						
					";
					}
					
				}
				if($bool){
					echo '<center><div class="alert alert-danger" role="alert" style="width:60%;margin:auto;">
						<h4>NOT FOUND</h4>
					</div></center>';
	
				}

			}
			else{
				echo '<center><div class="alert alert-danger" role="alert" sytle="width:60%;margin:auto;">
					<h4>NOT FOUND</h4>
				</div></center>';

			}

		}
		else{
			include_once 'back/db.php';
			$qu="SELECT * FROM request_list ORDER BY date DESC";
			$result = mysqli_query($con,$qu);
			$check = mysqli_num_rows($result);
			if ($check >= 1){
				while( $row = mysqli_fetch_assoc($result))
				{
					$user = $row['username'];
					$qu2 = "SELECT * FROM accepter_info WHERE username='$user'";
					$result2 = mysqli_query($con,$qu2);
					$row2 = mysqli_fetch_assoc($result2);
					echo "
						
						<div class='alert alert-success' role='alert' style='width:60%;margin:auto;'>
							<div class=form-group style='text-align:center; color:red;'>
								<h3>Situation</h3>
								<h4>".$row['description']."</h4>
							</div>	


							<h4>Full Name : ". $row2['first_name']." ".$row2['midle_name']."</h4>"
							."<h4>BLOOD TYPE: ".$row2['blood_type']."</h4>"
							."<h4>CITY : ".$row2['city']."</h4>"
							."<h4>STREET :".$row2['street']."</h4>"
							."<h4>PHONE : ".$row2['phone']."</h4>"
							."<h4>TELEPHONE : ".$row2['telephone']."</h4>"
							."<h4>DATE : ".$row['date']."</h4>"."
				
						</div>
						
						<br><br>
						
					";
				}

			}
			
		}

?>		
