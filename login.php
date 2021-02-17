<?php 
require('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="default.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
    .style1 {
      color: #000000;
      font-weight: bold;
      font-size: 16px;
    }
    .style7 {font-size: 16px; font-weight: bold; }
    .style8 {color: #000000; font-weight: bold; font-size: 18px; }
    .style3 {	color: #FF0000;
      font-weight: bold;
    }
  </style>
  </head>
  <body>
    <div id="header">
      <table width="200" align="center">
        <tr>
          <img src="images/logo.png" id="logo"/>
          <img src="images/banner.png" id="banner" />
        </tr>
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
    </div>
    <div id="footer">
      <p class="style8">LOGIN CONSOLE </p>
      <table width="371" height="177" border="1" align="center" bgcolor="#99CCFF">
        <tr>
          <td width="361" height="32"><table width="200" align="center" bgcolor="#CCCCCC">
              <tr>
                <td height="29"><div align="center"><span class="style3">LOGIN CONSOLE </span></div></td>
              </tr>
            </td>
        </tr>
      </table>  
      <tr>
        <td height="130">
          <form id="form1" method="post" action="">
            <table width="313" align="center">
              <tr>
                <td width="96"><span class="style3">USERNAME</span></td>
                <td width="205"><input type="text" name="username" /></td> 
              </tr>
              <tr>
                <td height="30"><span class="style3">ELECTION_ID</span></td>
                <td><input type="password" name="electionID" /></td>
              </tr>
              <tr>
                <td height="41"><label>
                  <input type="submit" name="Submit" value="Submit" />
                </td>
                <td><input type="reset" name="reset" value="Reset" /></td>
              </tr>
            </table>
          </form>
          <?php
          if(isset($_POST['Submit'])){
            $username=$_POST['username'];
            $electionID=$_POST['electionID'];
            //Session
            $_SESSION["name"]=$name;

          $query="SELECT * FROM voter WHERE username = '$username' AND election_id = '$electionID'";
          $result=mysqli_query($conn,$query);
          $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
          $count= mysqli_num_rows($result);
          if($count==1)
            header('location:choose_election.php');
          else
            echo("login Failed Invalid username and Password.");
          }
        ?>
        </td>
      </tr>
    </div> 
  </body>
</html>
