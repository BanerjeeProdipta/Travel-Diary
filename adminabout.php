<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes" && $_SESSION["valid1"]=="admin"){?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="CSS/signup.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="CSS/Showdata.css">
 
 
</head>
<body>
<div class="topnav">
  <a class="active" href="UserProfile.php">Travel Diary</a>
  <div class="topnav-right">
    <a href="admin.php"><i class="fa fa-user"></i> My Profile</a>
    <a href="logout.php"><i class="fa fa-sign-in"></i></span> Logout</a>
  
  </div>
</div>

<div class="container">
  <h1 align="center">My information</h1>
  <hr>
<?php
  $db = mysqli_connect("localhost", "root", "","travel");
  $sql="select * from user where email='".$_SESSION["email"]."'";
  $result = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_array($result)) {
       ?>

<form action="adminedit.php" name="frm" method="post" >
    
    <label>First Name: </label> <?php echo $row ['fname'];?><br><br>

    <label>Last Name: </label> <?php echo $row ['lname'];?><br><br>
	
	<label>Date Of Birth: </label> <?php echo $row ['dob'];?><br><br>
	
	<label>Gender: </label> <?php echo $row ['gender'];?><br><br>
   
    <label>Phone Number: </label> <?php echo $row ['phone'];?><br><br>

    <label>Email ID: </label> <?php echo $row ['email'];?><br><br>

    <div class="clearfix">
    <button type="submit" class="cancelbtn" formaction="admin.php">Cancel</button>
      <button type="submit" class="signupbtn">Edit</button><br><br><br><br>
  <?php
                       
    }
  ?>
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