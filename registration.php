<?php
require('includes/config.php');
echo" My name is Surendra";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_Form</title>
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
        <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">THIS REISTRATION FORM IS FOR ELEGIBLE WHO ARE ABOVE 18 YEARS OF AGE  </marquee></strong></p>
      </div>
      <th height="41" colspan="2" scope="col"></th>
      </div>
    </div>
    <div id="footer">
      <table width="651" border="0" align="center">
        <tr>
          <th width="645" height="783" scope="col"><table width="667" height="31" border="0" align="center" style="background:#ABE;">
            <tr>
              <th width="607" scope="col"><div align="center"><span class="style4">REGISTRATION FORM </span></div></th>
            </tr>
            </table>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" id="form1">
              <table width="431" border="0" align="center" cellpadding="3" cellspacing="17">
                <tr>
                  <td width="122" scope="col"><div align="justify">FIRSTNAME</div></td>
                  <td width="246" scope="col"><div align="justify">
                      <input type="text" name="fname" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">LASTNAME</div></td>
                  <td><div align="justify">
                      <input type="text" name="lname" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">Gender</div></td>
                  <td><div align="justify">
                    <label>
                    <select name="gender">
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                    </select>
                    </label>
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">AGE</div></td>
                  <td><div align="justify">
                      <input type="text" name="age" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">ADDRESS</div></td>
                  <td><div align="justify">
                      <input type="text" name="address" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">CITY</div></td>
                  <td><div align="justify">
                      <input type="text" name="city" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">STATE</div></td>
                  <td><div align="justify">
                    <input type="text" name="state" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">COUNTRY</div></td>
                  <td><div align="justify">
                    <input type="text" name="country" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">PHONE</div></td>
                  <td><div align="justify">
                    <input type="text" name="phone" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">E-MAIL</div></td>
                  <td><div align="justify">
                      <input type="text" name="mail" />
                  </div></td>
                </tr>
                <tr>
                  <td><div align="justify">PREFERED ELECTION DISTRICT </div></td>
                  <td><div align="justify">
                      <input type="text" name="district" />
                  </div></td>
                </tr>
                <tr>
                  <td>OCCUPATION</td>
                  <td><div align="justify">
                      <input type="text" name="occupation" />
                  </div></td>
                </tr>
                <tr>
                  <td>USERNAME</td>
                  <td><input type="text" name="username" /></td>
                </tr>
                <tr>
                  <td>VOTER'S ID </td>
                  <td><input type="text" name="electionID" /></td>
                </tr>
                <tr>
                  <td><input type="submit" name="Submit" value="Registered" /></td>
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
<?php
if(isset($_POST['Submit'])){
  $username=$_POST['username'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $occupation=$_POST['occupation'];
  $dist=$_POST['district'];
  $mail=$_POST['mail'];
  $phone=$_POST['phone'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $electionId=$_POST['electionID'];

  echo "My name is surendra";
  $query1="INSERT INTO voter (firstname,lastname,sex,age,address,city,state,country,phone,email,election_district,occupation,username,election_id)values
  ('$fname','$lname','$gender','$age','$address','$city','$state','$country','$phone','$mail','$dist','$occupation','$username','$electionId')";
  if(mysqli_query($conn,$query1)){
    echo "Record Successfully";
  }
  else{
    echo"Error".mysqli_error($conn);
  }
  mysqli_close($conn);
}

?>

