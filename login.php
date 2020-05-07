<?php
session_start();
include("Controller/cookie.php");
?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="CSS/login.css">
   <script src="JS/login.js"></script>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="Home.html">Travel Diary</a>
  <div class="topnav-right">
       <a href="Home.html"><i class="fa fa-home"></i></span> Home</a>
    <a href="signup.html"><i class="fa fa-user"></i> Sign Up</a>
  </div>
</div>
<hr>
<h3 align="center">Login Form</h3>

<form action="Controller/auth.php" name="frm" method="post">
  <div class="imgcontainer">
    <img src="icons/img_avatar2.png" alt="Avatar" class="avatar" style="width:150px;height:150px">
  </div>
<hr>
  <div class="container">
    <label for="email"><b>Email</b></label><br>
    <input onkeyup="eml()" type="text"  name="email" id ="msg1" value="<?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"];}?>" placeholder="Enter Email" required><span id="msg1"></span><br>

    <label for="pass"><b>Password</b></label><br>
    <input type="password" value="<?php if(isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" placeholder="Enter Password" name="pass" required><br><br>
    <p><input type="checkbox" name="remember" value="remember"/>Remember me</p> 
    <button onclick="return validate()" type="submit">Login</button><br>
	<span id="msg"><br>

   
  </div>

  <div class="container" style="background-color:#f1f1f1">
	<span id="msg">
	
  </div>
</form>

</body>
</html>
