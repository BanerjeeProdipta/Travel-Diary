<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="CSS/signup.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="CSS/Showdata.css">
 <script src="JS/pass.js"></script>
</head>
<body>
<div class="topnav">
  <a class="active" href="UserProfile.php">Travel Diary</a>
  <div class="topnav-right">
    <a href="UserProfile.php"><i class="fa fa-user"></i> My Profile</a>
    <a href="Controller/logout.php"><i class="fa fa-sign-in"></i></span> Logout</a>
  
  </div>
</div>

<div class="container">
  <h1 align="center">Edit your information</h1>


<form action="Controller/editval.php" name="frm" method="post" >
	
	<label for="opass">Old Password:</label><br>
    <input onkeyup="Showpass(this)" type="text" id="opass" name="opass"><img id="spinner2" src="loading.gif" width="20px" height="20px" style="visibility:hidden"> <span id="txtp"></span><br>
	
    <label for="pass">New Password:</label><br>
    <input onkeyup="psw()" type="text" name="pass"><span id="msg7"></span><br>

    <label for="cpass">Confirm Password:</label><br>
    <input onkeyup="cps()" type="text" name="confpass"><span id="msg8"></span><br><br>
    <div class="clearfix">
    <button type="submit" class="cancelbtn" formaction="UserProfile.php">Cancel</button>
      <button onclick="return ops()" type="submit" class="signupbtn">Confirm Edit</button><br><br><br><br>
    <span id="msg"></span>
  </div>
  </div>
</body>
<?php
}
else{
  $_SESSION["valid"]="";

  header("Location:Controller/logout.php");
}
?>