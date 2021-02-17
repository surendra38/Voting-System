<?php
// Check if session is not registered , redirect back to main page.
// Put this code in first line of web page.
session_start();
if( isset($_SESSION['txtusername']) ){
header("location:login.php");
}
?>

<?php
if(isset($_POST['Submit'])) {
header("location:pm_result.php");
}
if(isset($_POST['Submit2'])) {
header("location:cm_result.php");
}
if(isset($_POST['Submit3'])) {
header("location:mla_result.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| CHOOSE ELECTION SYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 16px;
}
.style8 {color: #0000FF; font-weight: bold; font-size: 16px; }
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
		  <a href="registration.php">|  Registration  |</a></li>
		<li><a href="login.php" >|  Login  |</a></li><li>
		  <a href="contact.php">|  Contact Us  |</a></li>
		  
		<li>
		  <a href="about.php">|  About Us  |</a></li>
		  
		<li>
		  <a href="help.php">|  Help |</a></li>
		</ul>
</div>
<div id="content">
  <div id="left">
    <p align="right" style="text-align:center; color:#60B7DE;">	<a href="logout.php">LOGOUT</a></p>
</div>
   <th height="41" colspan="2" scope="col"><h1><center>
        <span class="style2">To Viwe Result you must choose the Type of Election to view result</span>
   </center></strong></h1></th>
	<p>&nbsp;</p>
</div>
</div>
<div id="footer">
  <table width="463" align="center">
    <tr>
      <td width="455" height="61"><form id="form1" method="post" action="">
        <table width="459" height="103" align="center">
          <tr>
            <td width="305" height="55"><div align="center" class="style8">PRIME MINISTER RESULT </div></td>
            <td width="142"><label>
              <div align="center">
                <input type="submit" name="Submit" value="PRIME MINISTER" />
                </div>
            </label></td>
          </tr>
          <tr>
            <td height="40"><div align="center" class="style8">CHIEF MINISTER RESULT </div></td>
            <td><div align="center">
              <input type="submit" name="Submit2" value="CHIEF MINISTER" />
            </div></td>
          </tr>
		  <tr>
            <td width="305" height="55"><div align="center" class="style8">MLA RESULT </div></td>
            <td width="142"><label>
              <div align="center">
                <input type="submit" name="Submit3" value="MLA" />
                </div>
            </label></td>
          </tr>
          
        </table>
            </form>
      </td>
    </tr>
  </table>

</div>
	</body>
</html>