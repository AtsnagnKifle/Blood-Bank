<nav role="navigation" class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Lets Save</a>
                <button type="button" class="navbar-toggle" data-target="#navbarcollapse" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarcollapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" style="font-size:20px;">Home</a></li>
					<li><a href="stat.php" style="font-size:20px;">Statistics</a></li>
					<li><a href="about.php" style="font-size:20px;">About Blood</a></li>
					<li><a href="list.php" style="font-size:20px;">Donors List</a></li>
					<li><a href="make.php" style="font-size:20px;">Make Request</a></li>
                    <li><a href="bank.php" style="font-size:20px;">Bank</a></li>
				</ul> 
				<div class="navbar-right">	
                    <form action="back/logout.php" method="POST">
                       <span class='btn btn-sm btn-warning'> Accepter </span>
                       <button class="btn btn-success" type="submit" name="submit">Logout</button>	
                    </form>	
				</div>
            </div>     
		</div>
 </nav>