<?php session_start();
	
	if(empty ($_SESSION["id"]))
	{
		header("location:login_admin");
	}
	
?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<title> Change Portfolio Images Admin Panel </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		
	</head>
	
	<body style="margin-top:100px">
		
		<nav class="navbar navbar-fixed-top navbar-light" style="background-color: #e3f2fd;">
			
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#ex">&#9776;</button>
			
			<div class="collapse navbar-toggleable-xs" id="ex">
				
				<div class="nav navbar-nav">
					<ul class="nav navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="home_admin">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="inq_view" title="Inquires">Inquires</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="qr_view" title="Quotation Request">Quotation Requests</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" title="Try Us Out Requests">TUO Requests</a>
						</li>
						<li class="nav-item">
							<div class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Click for More">Portfolio Manager</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="uploadpic" title="Upload Images"> Upload Images </a>
									<a class="dropdown-item" href="port_view" title="Operations (Change / Delete Images)"> Operations </a>
								</div>
							</div>
						</li>	
						
						<div class="pull-xs-right">
							<li class="nav-item">
								<div class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Click for More">Akshi</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="changeps" title="Change Password"> Change Password </a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="logout" title="Logout"> Logout </a>
									</div>
								</div>	
							</li>	
						</div>
					</ul>	
				</div>
			</div>
			
		</nav>
		
		<div class="container">
			
			<form action="port_change_data" method="post" enctype="multipart/form-data">
				
				<?php
					if(isset($_GET["id"]))
					{
						include("db.php");
						
						$id=$_GET["id"];
						
						$sql = "select * from portfolio where id = '$id'";
						
						$rs = mysql_query($sql);
						
						$row=mysql_fetch_array($rs);
					}
				?>
				
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				
				<div class="form-group">
					<label class="lbl" for="iit"> <b>Image Title</b> *</label>
					<input type="text" class="form-control" id="iit" name="it" value="<?php echo $row[1]; ?>">
				</div>
				
				<div class="form-group">
					<label class="lbl" for="icat"> <b>Select Category</b> * </label>
					<select class="form-control" id="icat" name="cat">
						<option value="<?php echo $row[2]; ?>"> <?php echo $row[2]; ?> </option>
						<option value="Wedding Eidt"> Wedding Edit </option>
						<option value="Architectures Photoshoot"> Architectures Photoshoot </option>
						<option value="Special Request"> Special Request </option>
					</select>
				</div>
				
				<div class="form-group">
					<label class="lbl" for="ibimg"> <b>Before Image</b> *</label>
					<input type="file" class="form-control" id="ibimg" name="bimg" accept="image/*">
				</div>
				
				<div class="form-group">
					<label class="lbl" for="iaimg"> <b>After Image</b> *</label>
					<input type="file" class="form-control" id="iaimg" name="aimg" accept="image/*">
				</div>
				
				<div class="form-group">
					<label class="lbl" for="ibaimg"> <b>Before After Image</b> *</label>
					<input type="file" class="form-control" id="ibaimg" name="baimg" accept="image/*">
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-outline-primary" name="upload" value="Update">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="btn btn-outline-danger" name="reset" value="Cancel">
				</div>
			</form>
			
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
	
	</body>
	
</html>	