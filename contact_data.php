<?php session_start();
	
	if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["msg"]))
	{
		header("location:first#contact");
	}
	
	else
	{
		date_default_timezone_set('Asia/Kolkata');
		
		$date = date("d-m-y");
		$t = date("h:i:sa");
	
		include("db.php");
	
		if(isset($_POST["submit"]))
		{
			$name = addslashes($_POST["name"]);
			$email = addslashes($_POST["email"]);
			$msg = addslashes($_POST["msg"]);
			
			$sql = "insert into contact (date, time, name, email, message) values('$date', '$t', '$name', '$email', '$msg')";
			
			$rs = mysql_query($sql);
			
			$to = $email;
			$sub = "Message sent successfully";
			$msg = "Hello ".$name.", your message has been sent successfully. We will be reply you by E-Mail soon;
			
			Note - This is an autogenerate E-Mail, do not reply on it. For any more query Please E-Mail on support@utteredits.com

			Thanks for contact with UtterEdits. Have a nice day.";
			
			$from = "support@utteredits.com";
		
			$to1 = "upadhyayakshi24@gmail.com";
			$sub1 = "Inquiry received";
			$msg1 = "Date: ".$date.		"Time:".$t."
			
				Name: ".$name."
				E-Mail: ".$email."
				Message: ".$msg."
				
				Note -> Please reply this person soon.
				
				Click here to open UtterEdits Admin: http://www.utteredits.com/adminakshi101";
			
			if($rs)
			{
				if(mail($to, $sub, $msg, $from) && mail($to1, $sub1, $msg1, $from))
				{
					header("location:first#contact");
					$_SESSION["alert"]=1;
				}
				
				else
				{
					header("location:first#contact");
					$_SESSION["alert"]=2;
				}
			}
			
			else
			{
				header("location:first#contact");
				$_SESSION["alert"]=2;
			}
		}
	}
	
?>