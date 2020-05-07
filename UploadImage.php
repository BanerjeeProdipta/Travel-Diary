<?php
include("Controller/Model/Lib.php");
$xml=loadFromXML();
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/UploadImage.css">
  <script src="JS/UploadImage.js"></script>

<body>
<div class="topnav">
  <a class="active" href="UserProfile.php">Travel Diary</a>
  <div class="topnav-right">
    <a href="UserProfile.php"><i class="fa fa-user"></i> MyProfile</a>
    <a href="Showdata.php"><i class="fa fa-user"></i> MyPhotos</a>
    <a href="Controller/logout.php"><i class="fa fa-sign-in"></i></span> Logout</a>
  </div>
</div>

<div class="container">
  <div style="text-align:center">
    <h2>Upload your Image</h2>
  </div>
  <div class="row">
    <div class="column">
    <form action="Controller/upload.php" method="post" name="frm" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="file" onchange="Filevalidation()" /><p id="size"></p> 
    <br>
    <br>
    <label for="country">Country</label>
        <select id="country" name="country">
          <option value="<?php echo $xml["loc1"]; ?>"><?php echo $xml["loc1"]; ?></option>
		  <option value="<?php echo $xml["loc2"]; ?>"><?php echo $xml["loc2"]; ?></option>
		  <option value="<?php echo $xml["loc3"]; ?>"><?php echo $xml["loc3"]; ?></option>
		  <option value="<?php echo $xml["loc4"]; ?>"><?php echo $xml["loc4"]; ?></option>
		  <option value="<?php echo $xml["loc5"]; ?>"><?php echo $xml["loc5"]; ?></option>
		  <option value="<?php echo $xml["loc6"]; ?>"><?php echo $xml["loc6"]; ?></option>
          
        </select>

		
    </div>
    <div class="column">
        
        <label for="description">Subject</label>
        <textarea onkeyup="desc()" id="description" name="description" id="description" placeholder="Write something.." style="height:170px"></textarea>
        <button onclick="return validate()" type="submit" class="btn btn-primary">Upload</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>

</body>