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
			header("Location: index.php");
			exit();
		}
		else if($_SESSION['who']=="donor"){
            include_once 'loged/donor/head.php';
        }
		else if($_SESSION['who']=="accepter"){
            include_once 'loged/need/head.php';
        }
        if($_SESSION['who']=="doctor"){
            include_once 'loged/doctor/head.php';
        }

        echo '<div class="container-fluid" style="width:60%;margin:auto;">
                <form action="" method="POST" class="form-inline">
                    <h4>Filter By </h4>
                    <div class="form-group">
                        <label for="city" style="padding-right:20px;">City</label>
                        <input type="text" name="city" id="city" class="form-control" >
                        <span style="padding-right:35px;"></span>
                    </div>
                    <div class="form-group">
                        <label for="blood" style="padding-right:20px;">Blood Type</label>
                        <select name="blood" class="form-control" >
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                            <option value="ALL">ALL</option>
                            
                        </select>
                        <span style="padding-right:35px;"></span>
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">Filter</button>
                </form>
            </div><br><br>';
            if($_SESSION['who']=="accepter"){
                include_once 'loged/need/donorslist.php';
            }
            else if($_SESSION['who']=="donor")
            {
                include_once 'loged/donor/wantlist.php';
            }
            else{

                if($_SESSION['drwant']=="accepter"){
                    include_once 'loged/donor/wantlist.php';
                }
                else if($_SESSION['drwant']=="donor"){
                    include_once 'loged/need/donorslist.php';
                }
            
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