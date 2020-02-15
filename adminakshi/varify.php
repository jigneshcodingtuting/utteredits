<?php session_start();
	
	if(isset($_SESSION['rem']) && ($_SESSION['rem']=='upadhyayakshi24@gmail.com'))
	{
?>		
<html>

	<head>
		<link rel="icon" href="img/logo.png">
		<title>Forgot Password | Admin</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		<script src="js/login.js"></script>
	</head>
	
	<body onload="varify()">	
		<script>AOS.init();</script>
		
		<div class="container">
			<br>
			<center><img src = "img/UTTEREDITS LOGO.png" class="img-fluid" alt="logo"></center>
			
			<br><br>
			
			<div class="card card-outline-info">
				<div class="card-header">
					<table>
						<tr>
							<td>	
								<img src="img/varification.png" height="58px" width="60px">
							</td>
							<td>
								<h3>&nbsp; Varification</h3>
							</td>
						</tr>
					</table>
				</div>
				
				<div class="card-block">
					
				<?php
					if(isset($_SESSION["alert"]) && $_SESSION["alert"]==2)
					{
						echo 	"<div class='alert alert-danger' role='alert'>
									<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
									<strong>Wrong input!</strong> You entered wrong Varification Code. Please enter correct Varification Code.
								</div>";
					}
				?>
					<form action="varify_data" method="post" name="varify_frm">
						<p>
							We sent a Varification Code on your registered E-Mail Id. Please check it and insert that Varification Code below for reset your Password.
						</p>
						
						<div class="form-group">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label class="lbl" for="ivc"> <b>Enter Varification Code</b> </label>
									</div>	
								</div>
								
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" class="form-control" id="ivc" name="vc" required placeholder="Enter Varification Code here">
									</div>	
								</div>
								
								<div class="col-sm-4">
									<div class="form-group">
										<input type="submit" class="btn btn-outline-primary" name="login" value=" Next -> ">
									</div>	
								</div>
							</div>
							
						</div>
					</form>
					<a href="forgotps"> Didn't receive Varification Code ? Click here to proceed again. </a>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
	</body>

</html>

<?php		
	}
	
	else
	{
		header("location:login_admin");
	}
	
	$_SESSION["alert"]="";
?>