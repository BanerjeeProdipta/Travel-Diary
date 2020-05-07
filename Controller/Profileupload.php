<?php
session_start();
include("Model/Lib.php");

$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
$filename=$_FILES['fileToUpload']['name'];
$target="Profilepic/".$_FILES['fileToUpload']['name'];
$target1="./Controller/Profilepic/".$_FILES['fileToUpload']['name'];
if(move_uploaded_file($source,$target)){
		echo "File uploaded:".$target;
	}
	$sql="UPDATE user SET profilepic='".$target1."' WHERE email='".$_SESSION["email"]."'";
	$result=updateMySQL($sql);
	if($result){
		$_SESSION["profilepic"]=$target1;
	if($_SESSION["u_type"]=="user"){
	?>
	
		<script>
		if(alert("uploaded Successfully"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/UserProfile.php");
			
		}
		</script>
		<?php
      }
	  else if($_SESSION["u_type"]=="admin")
	  { ?>
		  <script>
		if(alert("Uploaded Successfully"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/admin.php");
			
		}
		</script>
		<?php
	  }	
	}

	?>
	