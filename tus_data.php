<?php session_start();

	if(empty($_POST["name"] || $_POST["email"] || $_POST["contact"] || $_POST["cname"] || $_POST["ct"] || $_POST["country"] || $_POST["cat"] || 
		$_POST["f1"]))
	{
		header("location:tus");
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
			$contact = addslashes($_POST["contact"]);
			$cname = addslashes($_POST["cname"]);
			$ct = addslashes($_POST["ct"]);
			$country = addslashes($_POST["country"]);
			$cat = addslashes($_POST["cat"]);
			$comment = addslashes($_POST["comment"]);
			
			$i = count($_FILES['pic']['name']);
			
			if($i>2)
			{
				echo "do not select more than 10 images";
			}
			
			else
			{
				for($j=0;$j<$i;$j++)
				{
					$pic[$j] = $_FILES["pic"]["name"][$j];
					move_uploaded_file($_FILES["pic"] ["tmp_name"][$j], "img/tus/". $_FILES["pic"] ["name"][$j]);
				}	
				
				for($x=$i;$x<10;$x++)
				{
					$pic[$x]="";
				}
				
				$sql = "INSERT INTO `tus` (`date1`, `time`, `name`, `email`, `contact`, `company`, `city`, `country`, `category`, `comment`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `pic8`, `pic9`, `pic10`, `status`) VALUES ('$date', '$t', '$name', '$email', '$contact', '$cname', '$ct', '$country', '$cat', '$comment', '$pic[0]', '$pic[1]', '$pic[2]', '$pic[3]', '$pic[4]', '$pic[5]', '$pic[6]', '$pic[7]', '$pic[8]', '$pic[9]', '0')";
				
				$rs = mysql_query($sql);
				
				if($rs)
				{
					header("location:tus");
					$_SESSION["alert"]=1;
				}
				
				else
				{
					header("location:tus");
					$_SESSION["alert"]=2;
				}
			}
		}
	}

?>