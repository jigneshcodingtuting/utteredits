<?php session_start();

	$rem=$_POST["rem"];
	$day=$_POST["day"];
	$month=$_POST["month"];
	$year=$_POST["year"];
	
	$dob=$day."-".$month."-".$year;
	
	$sq = $_POST["sq"];
	$sq2 = sha1(md5($sq));
	
	include("db.php");
	
	$sql = "select * from admin_acc where email='$rem' and dob='$dob' and s_ans='$sq2'";
	
	$rs = mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$st=rand(100000,999999);
		$st2 = sha1(md5($st));
		
		$to=$rem;
		$sub="Varification Code";
		$em="Your UtterEdits's Admin Varification Code is: ".$st;
		$from="support@kreativekeeda.com";
		
		if(mail($to,$sub,$em,$from))
		{
			$_SESSION['rem']=$rem;
			$_SESSION['vc']=$st2;
			
			header("location:varify");
		}
	}
	else
	{
		header("location:forgotps.php");
		$_SESSION["alert"]=1;
	}

?>