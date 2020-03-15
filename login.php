<?php
    session_start();
    include_once 'back/error.php';
    if(isset($_SESSION['username'])){
        header("Location: index.php");
        exit();
    }
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
        include_once 'head/head.html';
    ?>
    <br><br>
    
    <center>
        <div class="container-fluid">
            <?php echo '<center><h3 style="color:red;">'.$_SESSION['loginerror'].'</h3></center>';?>  
            <form action="back/login.php" method="POST" style="width:40%;margin:auto;">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" placeholder="user name" class="form-control">
                </div>
                <?php echo '<span style="color:red">'.$_SESSION['usernameerror'].'</span>';?>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" class="form-control">
                </div>
                <?php echo '<span style="color:red">'.$_SESSION['passworderror'].'</span>';?>
                <br>
                <button class="btn btn-success" name="submit" type="submit">Login</button>
            </form>

        </div>
    </center>

    <br><br><br>
    <?php
        include_once 'back/errorF.php';
        include_once 'head/footer.html';
    ?>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>