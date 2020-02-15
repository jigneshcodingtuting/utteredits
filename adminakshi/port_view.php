<?php session_start();
	
	if(empty ($_SESSION["id"]))
	{
		header("location:login_admin");
	}
	
?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<title> Operations on Portfolio | Admin </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		
	</head>
	
	<body style="margin-top:80px">
		
		<nav class="navbar navbar-fixed-top navbar-light" style="background-color: #e3f2fd;">
			
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#ex">&#9776;</button>
			
			<div class="collapse navbar-toggleable-xs" id="ex">
				
				<div class="nav navbar-nav">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="home_admin">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="inq_view" title="Inquires">Inquires</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="qr_view" title="Quotation Request">Quotation Requests</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="tus_view" title="Try Us Out Requests">TUO Requests</a>
						</li>
						<li class="nav-item">
							<div class="nav-item dropdown active">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Click for More">Portfolio Manager</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="uploadpic" title="Upload Images"> Upload Images </a>
									<a class="dropdown-item" href="port_view" title="View & Operations (Change / Delete Images)"> View & Operations </a>
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
		
		<div class="container-fluid">
			
			<h2><b>Portfolio Operations</b></h2>
			
			<br>
			
			<?php
				if(isset($_SESSION["alert"]) && $_SESSION["alert"]==1)
				{
					echo 	"<div class='alert alert-success' role='alert'>
								<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
								<b>Done</b>. Record has been changed successfuly.
							</div>";
				}
			?>		
			
			<table class="table table-sm table-hover table-bordered">
				<thead>
					<tr>
						<th><center>ID</center></th>
						<th><center>Title</center></th>
						<th><center>Category</center></th>
						<th><center>B. Image</center></th>
						<th><center>A. Image</center></th>
						<th><center>B-A. Image</center></th>
						<th><center>Action.</center></th>
					</tr>
				</thead>
				
				<tbody>
					
					<?php
					
						include("db.php");
						
						if(empty($_GET['sn']))
						{
							$sql = "select * from portfolio limit 0, 40";
						}	
						
						else
						{
							$sn=$_GET['sn'];
							$sql = "select * from tus limit $sn, 40";
						}
						
						$rs = mysql_query($sql);
						
						$i=2;
							
						while($row = mysql_fetch_array($rs))
						{
							if($i%2==0)
							{
								echo 	"<tr class='table-success' align='center'>";
							}
							
							else
							{
								echo 	"<tr class='table-warning' align='center'>";
							}
							$i++;
								echo"	<th scope='row'><center>$row[0]</center></th>
										<td align='center'> $row[1] </td>
										<td align='center'> $row[2] </td>
										<td align='center'>  <img src='../img/portfolio/$row[3]' height='40px'> </td>
										<td align='center'> <img src='../img/portfolio/$row[4]' height='40px'> </td>
										<td align='center'>  <img src='../img/portfolio/$row[5]' height='40px'> </td>
										<td align='center'>
											<div class='btn-group'>
												<button type='button' class='btn btn-secondary btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
													Click
												</button>
												<div class='dropdown-menu dropdown-menu-right'>
													<a class='dropdown-item' href='port_change?id=$row[0]' title='Edit & Change Images'>Edit & Change Images</a>
													<div class='dropdown-divider'></div><br>
													<a class='dropdown-item' href='port_delete?id=$row[0]' title='Delete Record'> <font color='maroon'>Delete Record</font></a>
												</div>
											</div>
										</td>	
									</tr>";
						
						}
						
					?>
					
				</tbody>	
				
			</table>
			
			<center>
				<?php
					$sql1="select count(id) from tus";
					$rs1=mysql_query($sql1);
					
					$j=1;
					
					$row1=mysql_fetch_array($rs1);
					$cid = $row1[0];
					
					echo "<nav aria-label='...'>
								<ul class='pagination'>
									<!--<li class='page-item'>
									  <a class='page-link' href='#' tabindex='-1' aria-label='Previous'>
										First
									  </a>
									</li>
									
									<li class='page-item'>
									  <a class='page-link' href='#' tabindex='-1' aria-label='Previous'>
										<span aria-hidden='true'>&laquo;</span>
										<span class='sr-only'>Previous</span>
									  </a>
									</li>-->";
									
									for($i=0;$i<$cid;$i=$i+40)
									{
										echo 	"<li class='page-item'><a class='page-link' href='port_view?sn=$i'>$j</a></li>";
										$j++;
									}
									
									echo "
									<!--<li class='page-item'>
									  <a class='page-link' href='inq_view?sn=5' aria-label='Next'>
										<span aria-hidden='true'>&raquo;</span>
										<span class='sr-only'>Next</span>
									  </a>
									</li>
									
									<li class='page-item'>
									  <a class='page-link' href='#' aria-label='Next'>
										Last
									  </a>
									</li>-->
								</ul>
							</nav>";
					
				?>
			</center>
				
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
	
	</body>
	
</html>

<?php $_SESSION["alert"]=""; ?>