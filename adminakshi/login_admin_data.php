<?php session_start();

	if(empty($_POST["aid"] || $_POST["pass"]))
	{
		header("location:login_admin");
	}
	
	else
	{
		$aid = addslashes($_POST["aid"]);
		$pass = addslashes($_POST["pass"]);
		
		$pass2 = md5($pass);
		
		include("db.php");
		
		$sql = "select * from admin_acc where admn_id='$aid' and password='$pass2'";
		
		$rs = @mysqli_query($sql);
		
		if($row=@mysqli_fetch_array($rs))
		{
			$_SESSION["id"]=$row["id"];
			header("location:home_admin");
		}
		
		else
		{
			header("location:login_admin_data");
			$_SESSION["alert"]=1;
		}
	}

?>