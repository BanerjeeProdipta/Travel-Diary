<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes" && $_SESSION["valid1"]=="admin"){?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
 <link rel="stylesheet" type="text/css" href="CSS/Banuser.css">
</head>

</head>
<body>
<table align="center">
<tr>
<th>First name</th>
<th>Last name</th>
<th>Date of Birth</th>
<th>Gender</th>
<th>Phone</th>
<th>Email</th>
<th>Status</th>
</tr>
<div class="topnav">
  <a class="active" href="UserProfile.php">Travel Diary</a>
  <div class="topnav-right">
    <a href="admin.php"><i class="fa fa-user"></i> My Profile</a>
    <a href="Controller/logout.php"><i class="fa fa-sign-out"></i></span> Logout</a>
  
  </div>
</div>
<div class="container">
  <h3 align="center">User Details</h3>
  <hr>
<?php
  $db = mysqli_connect("localhost", "root", "","travel");
  $result = mysqli_query($db, "SELECT * FROM user where not u_type='admin'");
    while ($row = mysqli_fetch_array($result)) {?>
          <tr>
                <td><?php echo $row["fname"];?></td>
                <td><?php echo $row["lname"];?></td>
                <td><?php echo $row["dob"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["email"];?></td>
				<?php if($row["Status"]=="banned")
				{ ?><td><a href="Controller/ban.php?op=unban&target=<?php echo $row["email"];?>" class="btn btn-primary">Unban</a></td>
				<?php }
				else{ ?>
				<td><a href="Controller/ban.php?op=ban&target=<?php echo $row["email"];?>" class="btn btn-danger">Ban</a></td>
				<?php } ?>
				</tr> <?php 
    }
  ?>
  </div>
</body>
<?php
}
else{
  $_SESSION["valid"]="";

  header("Location:Controller/logout.php");
}
?>