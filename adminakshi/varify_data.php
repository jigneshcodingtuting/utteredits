<?php session_start();

	$a=$_POST["vc"];
	$b=$_SESSION["vc"];
	
	$a2 = sha1(md5($a));
	
	if($a2==$b)
	{
		header("location:resetps");
	}
	else
	{
		$_SESSION ["alert"]=2;
		header("location:varify");
	}
	
?>