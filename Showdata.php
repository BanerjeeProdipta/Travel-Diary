<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="CSS/Showdata.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="UserProfile.php">Travel Diary</a>
  <div class="topnav-right">
    <a href="UserProfile.php"><i class="fa fa-user"></i> My Profile</a>
    <a href="logout.php"><i class="fa fa-sign-in"></i></span> Logout</a>
  
  </div>
</div>
<div class="container">
<div class="card-deck">
<?php
  $db = mysqli_connect("localhost", "root", "","travel");
  $sql="select * from profile where email='".$_SESSION["email"]."'";
  $result = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_array($result)) {
       ?>
  <div class="col-sm-6">
  <img class="card-img-top" src="<?php echo $row["url"];?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row ['location']; ?></h5>
    <p class="card-text"><?php echo $row ['description']; ?> </p>
    <a href="Controller/delete.php?op=delete&target=<?php echo $row["url"]; ?>" class="btn btn-danger">Delete</a>
  </div>
</div>
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