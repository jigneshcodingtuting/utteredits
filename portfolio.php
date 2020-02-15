<!DOCTYPE html>

<html lang="en">

	<head>
	
		<title> Portfolio | Utter Edits</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		
	</head>
	
	<body style="margin-top:10px;font-size:100%" id="top">

		<script>AOS.init();</script>
		
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<div class="animated fadeInDown">
						<img src = "img/logo.png" class="img-fluid" alt="Responsive image">
					</div>	
					
					<div class="animated fadeInRight">
						<hr style="height:4px;border:none;background-color:#eee;" />
					</div>
					
					<div class="animated fadeInLeft">
						<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#ex" aria-controls="ex" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
						
						<div class="collapse navbar-toggleable-xs" id="ex">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link" href="first" title="Home">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="about" title="About UtterEdits">About</a></li>
								<li class="nav-item"><a class="nav-link" href="services" title="Services">Services</a></li>
								<li class="nav-item"><a class="nav-link active" href="portfolio" title="Portfolio">Portfolio</a></li>
								<li class="nav-item"><a class="nav-link" href="first#contact">Contact</a></li>
								<li class="nav-item"><a class="nav-link" href="getq" title="Get Quotation"> Get Quotation </a></li>
								<li class="nav-item dropup">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Click for More">More</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="tus" title="Try us out"> Try us out </a>
										<a class="dropdown-item" href="pricing" title="Pricing (Price Chart)"> Pricing </a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				
				</div>
				
			</div>
		</div>
		<div style=" background-color:#eee;margin-top:10px;">
			<br>
			<div class="container">
				
				<div class="card card-block">
					<div data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="600">
						<div class="card-title">
							<font size="+3" color="black" style=" text-shadow: black 0px 0px 1px;"><b>Wedding Edits:</b></font> 
							<font color="gray" style=" text-shadow: gray 0px 0px 1px;"><big>&nbsp;&nbsp;Rs 3500/ 250 Images</big></font>
						</div>
					</div>	
					
					
					<div class="row">
						<div data-aos="fade-down" data-aos-duration="700" data-aos-delay="600">
							<?php
								include("db.php");
								
								$sql = "select * from portfolio where category='Wedding Eidt'";
								
								$rs = mysql_query($sql);
								
								while($row = mysql_fetch_array($rs))
								{
								?>
									
									<div class='col-md-3'>
										<?php $i=$row[0]; echo "<a target='_blank' href='portfolio_slide?id=$i'>"; ?>
											<img src = "img/portfolio/<?php echo $row[3]; ?>" class="img-fluid" alt="Wedding Edit" onmouseover="this.src='img/portfolio/<?php echo $row[4]; ?>'" onmouseout="this.src='img/portfolio/<?php echo $row[3]; ?>'" title="Click to see Before & After">
											<center style="margin-top:5px; color:blue;"><small><?php echo $row[1]; ?></small></center>
										</a>	
									</div>
								<?php
								}
							?>
						</div>
					</div>	
				</div>
				
				<br>
				
				<div class="card card-block">
					<div data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="600">
						<div class="card-title">
							<font size="+3" color="black" style=" text-shadow: black 0px 0px 1px;"><b>Architectural Photoshoot:</b></font> 
							<font color="gray" style=" text-shadow: gray 0px 0px 1px;"><big>&nbsp;&nbsp;Rs 9 / Images</big></font>
						</div>
					</div>	
					
					<div class="row">
						<div data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
							<?php
								$sql1 = "select * from portfolio where category='Architectures Photoshoot'";
								
								$rs1 = mysql_query($sql1);
								
								while($row1 = mysql_fetch_array($rs1))
								{
								?>
									<div class='col-md-3'>
										<?php $i=$row1[0]; echo "<a target='_blank' href='portfolio_slide?id=$i'>"; ?>
											<img src = "img/portfolio/<?php echo $row1[3]; ?>" class="img-fluid" alt="Architectural Photoshoot" onmouseover="this.src='img/portfolio/<?php echo $row1[4]; ?>'" onmouseout="this.src='img/portfolio/<?php echo $row1[3]; ?>'"title="Click to see Before & After">
											<center style="margin-top:5px; color:blue;"><small><?php echo $row1[1]; ?></small></center>
										</a>	
									</div>
								<?php
								}
							?>
						</div>	
					</div>
				</div>	
				
				<br>
				
				<div class="card card-block">
					<div data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="100">
						<div class="card-title">
							<font size="+3" color="black" style=" text-shadow: black 0px 0px 1px;"><b>Special Request:</b></font> 
							<font color="gray" style=" text-shadow: gray 0px 0px 1px;"><big>&nbsp;&nbsp;Rs 6 / Images</big></font>
						</div>
					</div>	
					
					<div class="row">
						<div data-aos="zoom-in" data-aos-duration="900" data-aos-delay="200">
							<?php
								$sql2 = "select * from portfolio where category='Special Request'";
								
								$rs2 = mysql_query($sql2);
								
								while($row2 = mysql_fetch_array($rs2))
								{
								?>
									<div class='col-md-3'>
										<?php $i=$row2[0]; echo "<a target='_blank' href='portfolio_slide?id=$i'>"; ?>
											<img src = "img/portfolio/<?php echo $row2[3]; ?>" class="img-fluid" alt="Wedding Edit" onmouseover="this.src='img/portfolio/<?php echo $row2[4]; ?>'" onmouseout="this.src='img/portfolio/<?php echo $row2[3]; ?>'"title="Click to see Before & After">
											<center style="margin-top:5px; color:blue;"><small><?php echo $row2[1]; ?></small></center>
										</a>	
									</div>
								<?php
								}
							?>
						</div>	
					</div>
				</div>	
				
			</div>
			
			<br>
		
		</div>
		<?php include("footer.php"); ?>
	</body>

</html>	