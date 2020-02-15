<?php session_start();

	if(empty($_POST["cat"] || $_POST["bimg"] || $_POST["aimg"]))
	{
		header("location:uploadpic");
	}
	
	else
	{
		if(isset($_POST["upload"]))
		{
			include("db.php");
			
			$it = addslashes($_POST["it"]);
			$cat = addslashes($_POST["cat"]);
			$bimg = $_FILES["bimg"] ["name"];
			$aimg = $_FILES["aimg"] ["name"];
			$baimg = $_FILES["baimg"] ["name"];
			
			if(move_uploaded_file($_FILES["bimg"] ["tmp_name"], "../img/portfolio/". $_FILES["bimg"] ["name"]) && move_uploaded_file($_FILES["aimg"] ["tmp_name"], "../img/portfolio/". $_FILES["aimg"] ["name"]) && move_uploaded_file($_FILES["baimg"] ["tmp_name"], "../img/portfolio/". $_FILES["baimg"] ["name"]))
			{
				$sql = "insert into portfolio(title, category, b_image, a_image, ba_image) values('$it', '$cat', '$bimg', '$aimg', '$baimg')";
				
				$rs = mysql_query($sql);
				
				if($rs)
				{
					header("location:uploadpic");
					$_SESSION["alert"]=1;
				}
				
				else
				{
					header("location:uploadpic");
					$_SESSION["alert"]=2;
				}
			}
		}
		
		else
		{
			header("location:uploadpic");
		}
	}

?>