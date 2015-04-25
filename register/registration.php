<html>
<head><title>Registration | VISION 2K14</title>          	
	<link rel="icon" href='../img/favicon.ico' type='image/x-icon'/ >
		
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<script src="../js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<!---------------------------------head end--------------------------------------->
<!---------------------------------body starts------------------------------------>
<body>
<style type="text/css">
	body	{
		background-color: #ffffff;
	}
	.content_divider_inside	{	
		background-color: #ffffff;
	}
	.hover_caption	{
		background-color: #000000;
	}
	#page-content	{	
		border:2px solid #999;
		border-radius:10px;
		box-shadow:3px 3px 1px 1px #999;
		font-size:19px;
		line-height:25px;">
		background-color:#fff;

	}

	#page-content-inside	{
		width:800;
		margin:0px auto;
		padding-top:20px;
	}
</style>

<div id="main_container">
<!---------------------------------header end--------------------------------------->
<div id="header">
        <div align="center"><a href="http://www.wcevision.co.in"><img src="../img/vision.png" class="logo"></a></div>
</div>

<!---------------------------------header end------------------------------------->
<!---------------------------------navigation starts------------------------------------>
<div id="menu_container">
	        <ul id="menu-header_menu" class="menu">
	
		<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16">
			<a href="../index.html">Home</a>
		</li>
		<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16">
			<a href="../aboutUs/index.html" title="About Us">About Us</a>
		</li>

		<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
			<a href="#" title="Event">Events</a>
			<ul class="sub-menu">
			<li id="menu-item-25" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-25">
				<a href="../events/cybermind/index.html">CSE & IT</a>
			</li>
			<li id="menu-item-275" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-275">
				<a href="../events/mechanical/index.html">Mechanical</a>
			</li>
			<li id="menu-item-276" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-276">
				<a href="../events/civil/index.html">Civil</a>
			</li>
			<li id="menu-item-22" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22">
				<a href="../events/electrical/index.html">Electrical & Electronics</a>
			</li>

			<li id="menu-item-2" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22">
				<a href="../events/general/index.html">General</a>
			</li>
			</ul>
		</li>

		<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18">
			<a href="../schedule/index.html" title="Schedule">Schedule</a>
		</li>
	
		<li id="menu-item-21" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-21">
			<a href="../sponsors/index.html" title="Sponsors">Sponsors</a>
		</li>


		<li id="menu-item-277" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-277">
			<a href="../contact/index.html" title="Contact">Contact Us</a>
		</li>
		</ul>


        <div class="header_social_icons_cont">

                <a href="#" target="_blank"><img src="../img/twitter-icon.png"></a>

	

                <a href="#" target="_blank"><img src="../img/google-plus-icon.png"></a>
 

                <a href="http://facebook.com/vision14/" target="_blank"><img src="../img/facebook-icon.png"></a>

		
            
            <div class="clear"></div>

        </div>
	<div style="background:#005596; width:210px; float:right; margin-right:20px; height:29px;color:#fff; border:0px solid #005596; border-radius:5px;">
		<marquee style="padding:5px;;" scrollamount="2" scrolldelay="80"  onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll">19th and 20th Feb. 2014</marquee>
 	</div><!--//header_social_icons_cont-->

	<div class="clear"></div>
</div>
<!---------------------------------navigation end--------------------------------->
<!---------------------------------content starts---------------------------------------->
<div id ="content" align="center" style="border:2px solid #999; border-radius:10px; box-shadow:3px 3px 1px 1px #999; font-size:19px; line-height:25px;">
	<h1 style="color:#07B3D3; padding-top:20px;">Registration</h1>
<div id="content-inside" style="width:800; text-align:left;">
<br />
<hr />
<br /><?php
	$con=mysqli_connect("127.0.0.1","db_usr","passwd","db");
	if(mysqli_connect_errno())	{
		echo "Failed to connect....".mysqli_connect_errno();
	}
	
	
	$sql="insert into Registry values('$_POST[event]','$_POST[participants]','$_POST[email]','$_POST[firstName]','$_POST[lastName]','$_POST[year]','$_POST[college]','$_POST[mobileNumber]','$_POST[city]','$_POST[emailB]','$_POST[firstNameB]','$_POST[lastNameB]','$_POST[yearB]','$_POST[collegeB]','$_POST[mobileNumberB]','$_POST[cityB]','$_POST[emailC]','$_POST[firstNameC]','$_POST[lastNameC]','$_POST[yearC]','$_POST[collegeC]','$_POST[mobileNumberC]','$_POST[cityC]')";
	
	if (!mysqli_query($con,$sql))	{
		
		header("Location:index.html");
	}
	echo "Dear"." <b>".$_POST[firstName]." ".$_POST[lastName]."</b>,<br />";
	echo "You have successfully registered for <b> ".$_POST[event]."</b><br />";
	mysqli_close($con);
?>


<br />
<hr color="#CBCBCB" />
<br />
<br />
</div>
</div>

<!---------------------------------content ends---------------------------------------->
<div class="clear"></div>                    
<div class="clear"></div>
<!---------------------------------footer start------------------------------------------>
<div id="footer">
&copy; VISION 2K14 . All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;Design and Developed by <tt><a id="name" href="http://facebook.com/sushantmane7">Sushant Mane</a></tt> 
<style>
	#name:hover	{
		color:#41BC81;
		text-shadow: 1px 1px #41bc81;
	}
</style>
</div>
<!--------------------------------footer end-------------------------------------------->
</div><!--//main-container---->
<script type='text/javascript' src='../js/jquery.form.min.js'></script>
<script type='text/javascript' src='../js/jquery.cycle2.min.js'></script>

<script>

$(document).ready(function() {

	$('#menu_container li').hover(

	    function () {

		$('ul:first', this).css('display','block');

	    }, 

	    function () {

		$('ul:first', this).css('display','none');         

	    }

	);               	

});

</script>

</body>

</html>

