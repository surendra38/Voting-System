<?php
session_start(); 
if(session_destroy())
{

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| E-VOTING ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
</head>
<body>
<div id="header">
  <table width="200" align="center">
    <tr>
      <img src="images/logo.png" id="logo"/>
<img src="images/banner.png" id="banner" /></tr>
  </table>
</div>
<div id="menu">
	<ul>
		<li> <a href="index.php"> |  Home  |</a></li>
		<li>
		  <a href="login.php">|  Voting  |</a></li>
		<li>
		  <a href="result.php">|  Result  |</a></li>
		<li>
		  <a href="login.php" >|  Login  |</a></li>
		<li>
		  <a href="contact.php">|  Contact Us  |</a></li>
		  
		<li>
		  <a href="about.php">|  About Us  |</a></li>
		  
		<li>
		  <a href="help.php">|  Help |</a></li>
		</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS E-VOTING SYSTEMIS FOR ELEGIBLE WHO ARE ABOVE 18 YEARS OF AGE
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
<div id="footer">
  <p class="style1">YOU HAVE SUCCESSFULLY LOGGED OUT</p>
  <p class="style1">THANKS </p>
  <p class="style1"><a href="index.php"><img src="images/cooltext457951615.png" alt="" width="86" height="43" /></a></p>

</div>
	</body>
</html>