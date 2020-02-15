<?php

	if(empty ($_SESSION["id"]))
	{
		header("location:login_admin");
	}

	$a = $_GET["id"];
	
	include("db.php");
	
	$sql = "delete from portfolio where id='$a'";
	
	$rs = mysql_query($sql);
	
	if($rs)
	{
		header("location: port_view");
	}

?>