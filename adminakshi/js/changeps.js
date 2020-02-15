function chk()
{
	if(document.changepsfrm.nps.value.length<8)
	{
		document.getElementById("inps").innerHTML="<font color='red'><b>Please enter Password minmum 8 charecters.</b></font>";
		cansubmit = false;
	}
	else
	{
		document.getElementById("inps").innerHTML="";
	}
}