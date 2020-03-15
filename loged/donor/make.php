<?php
		if(!isset($_SESSION['username'])){
			header("Loacation: index.php");
            exit();
		}
	
		else if($_SESSION['who']=="accepter"){
			header("Loacation: index.php");
            exit();
		}
        if(isset($_SESSION['now']) && $_SESSION['now']!=false){
            
                echo "<div class='container-fluid' style='width:60%;margin:auto;'><div class='alert alert-success' role='alert'>
                <h4 class='alert-heading'>Well done!</h4>
                <p>well done you have been added successfully to the donors list</p>
                <hr>
                <P>#EVERY BLOOD DONER IS A LIFE SAVER</p></div></div>";
                $_SESSION['now']=false;
            

        }
        else if($_SESSION['inlist']==true){
            echo "
           <div class='container-fluid' style='width:60%;margin:auto;'>
            <div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>you are allready in the list</h4>
                <hr>
            <P>#EVERY BLOOD DONER IS A LIFE SAVER</p>
            </div>
            <div>
                <h2>Do You Want To Delete Donation Informaion Post</h2>
                <form action='back/delete.php' method='POST'>
                    <button class='btn btn-danger' type='submit' name='submit' id='submit'>Delete</button>
                </form>
            </div>
           </div>";
        }
		else{

            echo "
<center>
        <div class='container-fluid' style='margin:auto;width:60%;'>
            
            
                <h2>Make Donation Available</h2>
                <h4>Full Name : ". $_SESSION['firstname']." ".$_SESSION['midlename']." ".$_SESSION['lastname']."</h4>"
                ."<h4>BLOOD TYPE : ".$_SESSION['bloodtype']."</h4>"
                ."<h4>CITY : ".$_SESSION['city']."</h4>"
                ."<h4>STREET :".$_SESSION['street']."</h4>"
                ."<h4>PHONE : ".$_SESSION['phone']."</h4>"
                ."<h4>TELEPHONE : ".$_SESSION['telephone']."</h4>"
                ."<h4>DATE : ".date('Y/m/d')."</h4>"."
            
            <br><br>
            <form action='back/makedonation.php' method='POST'>
                <button class='btn btn-info' name='submit' type='submit'>Make Donation</button>
            </form>

        </div>
    </center>";
        }

?>
    