<?php
require('includes/config.php');

if(isset($_POST['Submit'])) {
$names =  0;

$result = mysqli_query($conn, "SELECT cm_count FROM cm_votes where party ='BJP'");
 while($row = mysqli_fetch_row($result)){
   $names =  $row [0];
   $names =  $names + 1;
   
   mysqli_query($conn,"UPDATE cm_votes SET cm_count = $names WHERE party ='BJP' ");
  } 
}

//pdp
if(isset($_POST['Submit2'])) {
$names2 =  0;
//$regnum = $_POST['txtnumber'];
$result = mysqli_query($conn,"SELECT cm_count FROM cm_votes where party ='CONGRESS'");
 while($row = mysqli_fetch_row($result)){
   // $names = $row[1];
  $names2 =  $row [0];
  $names2 =  $names2 + 1;
   
   mysqli_query($conn,"UPDATE cm_votes SET cm_count=$names2 WHERE party ='CONGRESS' ");
  } 
}

//acn
if(isset($_POST['Submit3'])) {
$names3 =  0;
//$regnum = $_POST['txtnumber'];
$result = mysqli_query($conn,"SELECT cm_count FROM cm_votes where party ='AAP'");
 while($row = mysqli_fetch_row($result)){
   // $names = $row[1];
  $names3 =  $row [0];
  $names3 =  $names3 + 1;
   
   mysqli_query($conn,"UPDATE cm_votes SET cm_count=$names3 WHERE party ='AAP' ");
  } 
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| E-VOTING ||</title>

<script type="text/javascript">
  function confirm_vote(textfield){
    if(confirm("ARE U SURE YOU WISH TO VOTE FOR "+textfield+" ?"))
    {
      return  true;
    }
    else {
      return false;
    }
      
  }

  function printpage(){
    if(confirm("Are you sure you want to send this page to the printer?"))
    {
      window.print();
    }
      else
    {
      return false
    }
  }
</script>
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
    .style8 {color: #990000}
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
      <li><a href="contact.php">|  Contact Us  |</a></li>
      
      <li><a href="about.php" >|  About us  |</a></li>
        
      <li><a href="help.php" >|  Help  |</a></li>
    </ul>
  </div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS VOTING SYSTEM IS FOR ELEGIBLE WHO ARE ABOVE 18 YEARS OF AGE
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p><a href="logout.php">LOGOUT</a></p>
	<form id="form1" method="post" action="">
	  <table width="671" border="0" align="center">
        <tr>
          <th width="208" bgcolor="#00FF66" scope="col"><span class="style8">CANDIDATE</span></th>
          <th width="197" bgcolor="#00FF66" scope="col"><span class="style8">NAME</span></th>
          <th width="156" bgcolor="#00FF66" scope="col"><span class="style8">PARTY</span></th>
          <th width="92" bgcolor="#00FF66" scope="col" class="style8">UPDATED RESULT </th>
        </tr>
        <tr>
          <td height="151"><img src="images/yogi.jpg" alt="" width="154" height="152" /></td>
          <td>Yogi Adityanath </td>
          <td><input type="submit" name="Submit" value="BJP" onclick="return confirm_vote('<?php echo "Yogi Adityanath ";  ?>')"/></td>
         <td id="display"><script>var d=<?php echo $names;?>;
			  document.getElementById('display').innerHTML=d;</script>&nbsp;</td>
            </tr>
        <tr>
          <td height="246"><img src="images/manmohan.jpg" alt="" width="147" height="187" /></td>
          <td>Dr.Manmohan Singh</td>
          <td><input type="submit" name="Submit2" value="CONGRESS" onclick="return confirm_vote('<?php echo "Dr.Manmohan Singh";  ?>')"/></td>
        <td id="display1"><script>var d=<?php echo $names2;?>;
			  document.getElementById('display1').innerHTML=d;</script>&nbsp;</td>
            </tr>
        <tr>
          <td height="152"><img src="images/manish.jpg" alt="" width="140" height="153" /></td>
          <td>Manish Sisodia</td>
          <td><input type="submit" name="Submit3" value="AAP" onclick="return confirm_vote('<?php echo "Manish Sisodia";  ?>')"/></td>
          <td id="display2"><script>var d=<?php echo $names3;?>;
			  document.getElementById('display2').innerHTML=d;</script>&nbsp;</td>
            </tr>
        <tr>
          <td height="105">&nbsp;</td>
          <td>&nbsp;</td>
          <td><a href="cm_result.php">click here to view all parties result </a></td>
          <td>&nbsp;</td>
        </tr>
      </table>
  </form>
  </div>

	</body>
</html>