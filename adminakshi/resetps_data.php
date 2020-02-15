<?php session_start();

	$a=$_POST["nps"];
	$b=$_POST["cnps"];
	
	$rem=$_SESSION["rem"];
	
	include("db.php");
	
	if($a==$b)
	{
		$c=md5($a);
		
		$sql="update admin_acc set password = '$c' where email = 'upadhyayakshi24@gmail.com'";
		
		$rs=mysql_query($sql);
		
		if($rs)
		{
			$to = $_SESSION["vc"];
			$sub = "Password Changed Successfully";
			$msg = "Hello Admin Akshi. Your UtterEdits's Admin Panel Password has been reset now. Now you can Login with your New Password.
			
			Thank You.";
			
			$from = "support@utteredits.com";
			
			if(mail($to, $sub, $msg, $from))
			{
				$_SESSION["vc"]="";
				$_SESSION["rem"]="";
				//$_SESSION["err1"]="";
				
				header("location:login_admin");
				$_SESSION["alert"]=2;
			}
			
			else
			{
				header("location:resetps");
				$_SESSION["alert"]=4;
			}
		}
		
		else
		{
			header("location:resetps");
			$_SESSION["alert"]=4;
		}
	}
	
	else
	{
		header("location:resetps");
		$_SESSION["alert"]=3;
	}
	
?>