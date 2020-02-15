<?php session_start();
	
	$id = $_POST["id"];
	$it = $_POST["it"];
	$cat = $_POST["cat"];
	
	include("db.php");
	
	if(file_exists($_FILES["bimg"] ["tmp_name"]))
	{
		$sql = "select * from portfolio where id = '$id'";
	
		$rs = mysql_query($sql);
		
		if($row=mysql_fetch_array($rs))
		{
			unlink("../img/portfolio/".$row[3]);
			
			if(move_uploaded_file($_FILES["bimg"]["tmp_name"], "../img/portfolio/".$_FILES["bimg"]["name"]))
			{
				$bimg=$_FILES["bimg"]["name"];
				$sql1="update portfolio set title='$it', category='$cat', b_image='$bimg' where id='$id'";
				$rs1=mysql_query($sql1);
				
				if($rs1)
				{
					header("location:port_view");
					$_SESSION["alert"]=1;
				}
				
				else
				{
					echo 	"<center>
								<font color='red'><h2> Updating failed. Please go into Stock and try again.</h2> </font>
							</center>";
				}
			}
			
			else
			{
				echo 	"<center>
							<font color='red'><h2> Updating failed. Please go into Stock and try again.</h2> </font>
						</center>";
			}
		}
	}
	
	if(file_exists($_FILES["aimg"] ["tmp_name"]))
	{
		$sql2 = "select * from portfolio where id = '$id'";
	
		$rs2 = mysql_query($sql2);
		
		if($row2=mysql_fetch_array($rs2))
		{
			unlink("../img/portfolio/".$row2[4]);
			
			if(move_uploaded_file($_FILES["aimg"]["tmp_name"], "../img/portfolio/".$_FILES["aimg"]["name"]))
			{
				$aimg=$_FILES["aimg"]["name"];
				$sql3="update portfolio set title='$it', category='$cat', a_image='$aimg' where id='$id'";
				$rs3=mysql_query($sql3);
				
				if($rs3)
				{
					header("location:port_view");
					$_SESSION["alert"]=1;
				}
				
				else
				{
					echo 	"<center>
								<font color='red'><h2> Updating failed. Please go into Stock and try again.</h2> </font>
							</center>";
				}
			}
			
			else
			{
				echo 	"<center>
							<font color='red'><h2> Updating failed. Please go into Stock and try again.</h2> </font>
						</center>";
			}
		}
	}
	
	if(file_exists($_FILES["baimg"] ["tmp_name"]))
	{
		$sql3 = "select * from portfolio where id = '$id'";
	
		$rs3 = mysql_query($sql3);
		
		if($row3=mysql_fetch_array($rs3))
		{
			unlink("../img/portfolio/".$row3[5]);
			
			if(move_uploaded_file($_FILES["baimg"]["tmp_name"], "../img/portfolio/".$_FILES["baimg"]["name"]))
			{
				$baimg=$_FILES["baimg"]["name"];
				$sql4="update portfolio set title='$it', category='$cat', ba_image='$baimg' where id='$id'";
				$rs4=mysql_query($sql4);
				
				if($rs4)
				{
					header("location:port_view");
					$_SESSION["alert"]=1;
				}
				
				else
				{
					echo 	"<center>
								<font color='red'><h2> Updating failed. Please go into Stock and try again.</h2> </font>
							</center>";
				}
			}
			
			else
			{
				echo 	"<center>
							<font color='red'><h2> Updating failed. Please go into Stock and try again.</h2> </font>
						</center>";
			}
		}
	}
	
	$sql4 = "update portfolio set title='$it', category='$cat' where id = '$id'";
	
	$rs5 = mysql_query($sql4);
	
	if($rs5)
	{
		header("location:port_view");
		$_SESSION["alert"]=1;
	}
	
	else
	{
		header("location:port_view");
	}
	
?>
