<?php
	$con=mysqli_connect("127.0.0.1","db_usr","passwd","db");
	if(mysqli_connect_errno())	{
		echo "Failed to connect....".mysqli_connect_errno();
	}
	
	
	$sql="insert into Registry values('$_POST[event]','$_POST[participants]','$_POST[email]','$_POST[firstName]','$_POST[lastName]','$_POST[year]','$_POST[college]','$_POST[mobileNumber]','$_POST[city]','$_POST[emailB]','$_POST[firstNameB]','$_POST[lastNameB]','$_POST[yearB]','$_POST[collegeB]','$_POST[mobileNumberB]','$_POST[cityB]','$_POST[emailC]','$_POST[firstNameC]','$_POST[lastNameC]','$_POST[yearC]','$_POST[collegeC]','$_POST[mobileNumberC]','$_POST[cityC]')";
	
	if (!mysqli_query($con,$sql))	{
		header("Location:index.html");
	}
	else	{
		echo "Dear"." ".$_POST[firstName].$_POST[lastName].",<br />"
		echo "You have successfully registered for ".$_POST[event]."<br />";
	}
mysqli_close($con);
?>
