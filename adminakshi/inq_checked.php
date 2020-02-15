<?php session_start();

	if(empty($_SESSION["id"]))
	{
		header("location:login_admin");
	}

	include("db.php");
	
	$a=$_GET["id"];

	$sql = "update contact set status=1 where id='$a'";
	
	$rs=mysql_query($sql);
	
	if($rs)
	{
		header("location:inq_view");
	}

?>