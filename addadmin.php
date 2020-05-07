<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="CSS/signup.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="JS/signup.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
<div class="topnav">
  <a class="active" href="admin.php">Travel Diary</a>
  <div class="topnav-right">
       <a href="admin.php"><i class="fa fa-home"></i></span>My Profile</a>
    <a href="Controller/logout.php"><i class="fa fa-sign-in"></i>Logout</a>
  </div>
</div>
<hr>
<h1 align="center">Add Admin</h1>
    <p align="center">Please fill in this form.</p>
<form action="Controller/adminval.php" name="frm" method="post" style="border:1px solid #ccc">
  <div class="container">

    <label for="fname">First Name:</label><br>
    <input onkeyup="fme()" type="text" id="txt" name="fname" placeholder="Firstname">  <span id="msg1"></span><br>

    <label for="lname">Last Name:</label><br>
    <input onkeyup="lme()" type="text" id="txt" name="lname" placeholder="Lastname">  <span id="msg2"></span><br>

    <label for="dob">Date of Birth: </label><br>
    <input onmouseleave="db()" type="date" id="txt" name="dob"> <br> <span id="msg3"></span> <br><br>

   <label for="gender">Gender:</label><br><br>
    <input onmouseout="gnd()" type="radio" name="gender" value="male" >Male
    <input onmouseout="gnd()" type="radio" name="gender" value="female">Female
    <input onmouseout="gnd()" type="radio" name="gender" value="other">Other <br> <span id="msg4"></span><br><br>

    <label for="phone">Phone Number:</label><br>
    <input onkeyup="showPhone(this)" type="text" id="phone" name="phone" placeholder="Phone Number"> <img id="spinner1" src="icons/loading.gif" width="20px" height="20px" style="visibility:hidden"> <span id="txtPH"></span><br>

    <label for="email">Email ID:</label><br>
    <input onkeyup="showEmail(this)" type="text" id="email" name="email" placeholder="Email ID"> <img id="spinner" src="icons/loading.gif" width="20px" height="20px" style="visibility:hidden"> <span id="txtHint"></span><br>


    <label for="pass">Password:</label><br>
    <input onkeyup="psw()" type="text" id="txt" name="pass" placeholder="Password">  <span id="msg7"></span><br>

    <label for="cpass">Confirm Password:</label><br>
    <input onkeyup="cps()" type="text" id="txt" name="confpass" placeholder=" Confirm Password"> <span id="msg8"></span><br>
    <div class="clearfix">
	  <button type="submit" class="cancelbtn" formaction="admin.php">Cancel</button>
      <button onclick="return validate()" type="submit" class="signupbtn">Add</button><br><br><br><br>
	  <span id="msg"></span>
	    
    </div>
	</div>
</form>


</body>
</html>
<?php
}
else{
  $_SESSION["valid"]="";

  header("Location:Controller/logout.php");
}
?>
