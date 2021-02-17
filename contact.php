<?php
require('includes/config.php');
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
.style11 {font-size: 18px; font-weight: bold; }
.style13 {font-size: x-large; font-weight: bold; color: #000000; }
.style2 {	color: #FF00FF;
	font-weight: bold;
}
.style3 {
	font-size: 18px;
	color: #000000;
}
.style4 {font-size: 18px; color: #FFFFFF; }
.style5 {font-size: 12px}

</style>
</head>
<body>
<div id="header">
  <table width="200" align="center">
    <tr>
     <img src="images/logo.png" id="logo"/>
<img src="images/banner.png" id="banner" /> </tr>
  </table>
</div>
<div id="menu">
	<ul>
		<li> <a href="index.php"> |  Home  |</a></li>
		
		  <a href="result.php">|  Result  |</a></li>
		<li>
		
		<li>
		  <a href="login.php" >|  Login  |</a></li>
		<li><a href="contact.php">|  Contact Us  |</a></li>
		
		<li><a href="about.php" >|  About us  |</a></li>
		  
		<li><a href="help.php" >|  Help  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">THIS REISTRATION FORM IS FOR ELEGIBLE WHO ARE ABOVE 18 YEARS OF AGE </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
	</div>
</div>
<div id="foot">
  <table width="400" border="0" valign="left">
    <tr>
      <th width="400" height="400" scope="col"><table width="400" height="31" border="0" valign="left" style="background:#ABE;">
          <tr>
            <th width="607" scope="col"><div align="center"><span class="style4">CONTACT </span></div></th>
          </tr>
          <tr>
            <th scope="col"><div "align="center"  style="background:#FF00OO"  >
          </tr>
        </table>
          <form action="" method="post" enctype="multipart/form-data" id="form1">
            <table width="431" border="0" align="center" cellpadding="3" cellspacing="17">
              <tr>
                <td width="122" scope="col"><div align="justify">NAME</div></td>
                <td width="246" scope="col"><div align="justify">
                    <input type="text" name="txtname" />
                </div></td>
              </tr>
                <td><div align="justify">MOBILE</div></td>
                <td><div align="justify">
                    <input type="text" name="txtmobile" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">E-MAIL</div></td>
                <td><div align="justify">
                    <input type="text" name="txtemail" />
                </div></td>
              </tr>
			  <tr><td><div align="justify">MESSAGE</div></td>
                <td><div align="justify">
                    <textarea name="txtmsg"></textarea>
                </div></td>
              </tr>
			  <tr>
                <td><input type="submit" name="Submit" value="Send Message" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form>
		   
        </th> 
      </tr>
    </table>
  </div>
  </body>
</html>