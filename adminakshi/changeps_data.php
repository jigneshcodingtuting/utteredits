<?php session_start();

	$id=$_SESSION["id"];

	include("db.php");
	
	$crps = $_POST["crps"];
	$nps = $_POST["nps"];
	$cnps = $_POST["cnps"];
	
	$cr = md5($crps);
	
	$sql = "select * from admin_acc where password = '$cr'";
	
	$rs = mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		if($nps==$cnps)
		{
			$new = md5($nps);
			
			$sql1="update admin_acc set password = '$new' where id='$id'";
			
			$rs1 = mysql_query($sql1);
			
			if($rs1)
			{
				header("location:changeps");
				$_SESSION["alert"]=1;
			}
		}
		
		else
		{
			header("location:changeps");
			$_SESSION["alert"]=2;
		}
	}
	
	else
	{
		header("location:changeps");
		$_SESSION["alert"]=3;
	}

?>