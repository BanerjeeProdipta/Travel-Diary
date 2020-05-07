<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes" && $_SESSION["valid1"]=="admin"){?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="CSS/UploadProfilePhoto.css">
<script src="JS/UploadImage.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="topnav">
  <a class="active" href="admin.php">Travel Diary</a>
  <div class="topnav-right">
    <a href="admin.php"><i class="fa fa-user"></i> My Profile</a>
    <a href="logout.php"><i class="fa fa-sign-in"></i></span> Logout</a>
  
  </div>
</div>
<div class="container">
  <div style="text-align:center">
    <h2>Update Profile Photo</h2><br>
  </div>

<form action="Controller/Profileupload.php" method="post" name="frm" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="file" onchange="Filevalidation()"/><br><p id="size"></p> 
    <button onclick="return Filevalidation()" type="submit" class="btn btn-primary">Upload Image</button>
	</form>
 
</html>
<?php
}
else{
  $_SESSION["valid"]="";

  header("Location:Controller/logout.php");
}
?>
