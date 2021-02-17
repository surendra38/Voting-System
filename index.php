<?php 
require('includes/config.php');
 ?>
<html>
<head>
<title>|| E-VOTING ||</title>
<link href="css/sheet1.css" rel="stylesheet"/>
</head>
<body>
<div id="nav">
 <table width="200" align="center">
 <tr>
<img src="images/logo.png" id="logo"/>
<img src="images/banner.png" id="banner" /></tr>
</table>
</div>
<content>
<a href="index.html"><img src="images/homepic.png" id="home"/><br/><br/></a>
<a href="registration.php"><img src="images/voter_reg.png" id="reg"/><br/><br/></a>
<a href="result.php"><img src="images/votingpoll.png" id="result"/><br/><br/></a>
<a href="parties.html"><img src="images/parties_info.png" id="parties"/><br/><br/></a>
<a href="admin_login.php"><img src="images/admin.png" id="admin"/><br/><br/></a>
<a href="contact.php"><img src="images/contactus.png" id="news"/><br/><br/></a>
<a href="about.php"><img src="images/aboutus.png" id="about"/><br/><br/></a>
<a href="help.php"><img src="images/help.png" id="help"/></a>
<div class="image">
<div class="info">Information about E-Voting</div>
<div class="pic">
	<div class="next"> >>> </div>
	<div class="prev"> <<< </div>
	<div class="images">
	<img src="images/vote1.jpg" height="100%" width="100%"/>
    <img src="images/vote2.jpg" height="100%" width="100%"/>
    <img src="images/vote3.jpg" height="100%" width="100%"/>
    <img src="images/election.jpg" height="100%" width="100%"/>
    </div>
</div>
<div class="detail"><p class="detail1">E-voting stands for electronic voting is a term encompassing several different types of voting embrancing both electronic means of costing a vote and electronic means of counting votes our application tried to enable every body to use it in easily way and transparency, this will avoid desorder of traditional voting.</p></div>
</div>
<div class="mainform">
	

<form id="form1" method="post" action="">
<h1>Login Form</h1><br/><br/>

&nbsp &nbsp Username  &nbsp &nbsp<input type="text" name ="username" id="myname" class="field"/> <br/><br/> 
&nbsp &nbsp Password  &nbsp &nbsp<input type="password" name ="electionID" id="myname" class="field"/><br/><br/>
<input type="submit" value="Login" name="submit" id="button"/>
<input type="reset" value="Reset" name="reset" id="button1"/>
</form>
<?php
	if(isset($_POST['submit'])){
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
</div>
<div class="slider">
	<img src="images/votingg.jpg" height="100%" width="100%"/>
	<img src="images/election.jpg" height="100%" width="100%"/>
	<img src="images/elections.jpg" height="100%" width="100%"/>
	</div>
</content>

</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/slider.js"></script> 
<script>
	$(document).ready(function(){
$('.images').cycle({ 
    fx:    'cover', 
    sync:  false, 
    delay: -1000,
	next:'.next',
	prev:'.prev' 
});
$('.slider').cycle({ 
    fx:    'curtainX', 
    sync:  false, 
    delay: -1000 
 });
	});
	

</script>