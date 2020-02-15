<?php session_start();
	
	if(empty($_POST["name"] || $_POST["email"] || $_POST["contact"] || $_POST["cname"] || $_POST["ct"] || $_POST["country"] || $_POST["nop"] ||  $_POST["cat"]))
	{
		header("location:getq");
	}
	
	else
	{
		date_default_timezone_set('Asia/Kolkata');
		
		$date = date("d-m-y");
		$t = date("h:i:sa");
		
		include("db.php");
	
		if(isset($_POST["submit"]))
		{
			$name = $_POST["name"];
			$email = $_POST["email"];
			$contact = $_POST["contact"];
			$cname = $_POST["cname"];
			$ct = $_POST["ct"];
			$country = $_POST["country"];
			$sid = $_POST["sid"];
			$oid = $_POST["oid"];
			$nop = $_POST["nop"];
			$cat = $_POST["cat"];
			$comment = $_POST["comment"];
			
			$sql = "insert into getq(date, time, name, email, contact, com_name, city, country, s_id, o_id, nop, category, comment) values('$date', '$t', '$name', '$email', '$contact', '$cname', '$ct', '$country', '$sid', '$oid', '$nop', '$cat', '$comment')";
			
			$rs = mysql_query($sql);
			
			$to = $email;
			$sub = "Form submitted successfully";
			$msg = "Hello ".$name.", your form has been submitted successfully. We'll be send you quotation by email soon.;
			
			Note - This is an autogenerate E-Mail, do not reply on it. For any more query Please E-Mail on support@utteredits.com

			Thanks for contact with UtterEdits. Have a nice day.";
			
			$from = "support@kreativekeeda.com";
		
			$to1 = "upadhyayakshi24@gmail.com";
			$sub1 = "Quotation form received";
			$msg1 = "Date: ".$date.		"Time:".$t."
			
				Name: ".$name."
				E-Mail: ".$email."
				Contact: ".$contact."
				Company Name: ".$cname."
				City: ".$ct."
				Country: ".$country."
				Skype ID: ".$sid."
				Other ID: ".$oid."
				Num. Of Photograph: ".$nop."
				Category: ".$cat."
				Comment: ".$comment."
				
				Note -> Please send the quotation to this person soon.
				
				Click here to open UtterEdits Admin: http://www.utteredits.com/adminakshi101";
			
			if($rs)
			{
				if(mail($to, $sub, $msg, $from) && mail($to1, $sub1, $msg1, $from))
				{
					header("location:getq");
					$_SESSION["alert"]=1;
				}
				
				else
				{
					header("location:getq");
					$_SESSION["alert"]=2;
				}
			}
			
			else
			{
				header("location:getq");
				$_SESSION["alert"]=2;
			}
		}	
	}
	
?>