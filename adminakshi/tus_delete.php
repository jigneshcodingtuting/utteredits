<?php session_start();

	if(empty ($_SESSION["id"]))
	{
		header("location:login_admin");
	}

	$a = $_GET["id"];
	
	include("db.php");
	
	$sql = "delete from tus where id='$a'";
	
	$rs = mysql_query($sql);
	
	if($rs)
	{
		header("location: tus_view");
	}

?>