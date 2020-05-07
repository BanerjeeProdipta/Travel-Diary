<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes" && $_SESSION["valid1"]=="admin"){?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="CSS/admin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">

<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#"  class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>

    <div class="container">
      <a href="UploadProfilePhoto.php">
   <img src="<?PHP
  $path1 = $_SESSION["profilepic"];
  $path2 = "icons/user.png";
  echo file_exists($path1) ? $path1 : $path2; 
  ?> " class="w3-border" alt="Profile Photo" style="padding:10px;width:100%">
  <div class="overlay w3-text-white"><b>Upload</b></div>
</div>
</a>
</div>
    <h4 align="center"><b><br>PORTFOLIO</b></h4>
  </div>
  <div class="w3-bar-block">

<a href="adminabout.php"  class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-cog w3-margin-right"></i>Settings</a> 

    <a href="Controller/logout.php"  class="w3-bar-item w3-button w3-padding"><i class="fa fa-user  fa-sign-out w3-margin-right"></i>Logout</a> 
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
      <br>
    <h1><b>Welcome, <?php echo $_SESSION["uname"]?></b></h1>
	
   <hr>
<div class="w3-bar">
<form action="addadmin.php">
<button class="button"><span> Add Admin </span></button>

<button class="button" formaction="Banuser.php"><span> Ban User </span></button>
<button class="button" formaction="deleteuser.php"><span> Delete Photo </span></button>
</form>
</div>
   </div>
</div>
</header>
</body>
</html>
<?php
}
else{
  $_SESSION["valid"]="";

  header("Location:Controller/logout.php");
}
?>

