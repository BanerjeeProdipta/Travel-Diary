<?php
session_start();
include("Model/Lib.php");
$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
$filename=$_FILES['fileToUpload']['name'];
$target="uploads/".$_FILES['fileToUpload']['name'];
$target1="./Controller/uploads/".$_FILES['fileToUpload']['name'];
if(move_uploaded_file($source,$target)){
		echo "File uploaded:".$target;
	}
	$sql="INSERT INTO profile(uname,email,url,file,location,description)
		
VALUES ('".$_SESSION["uname"]."','".$_SESSION["email"]."','".$target1."','".$filename."','".$_REQUEST["country"]."','".$_REQUEST["description"]."')";
	$result=updateMySQL($sql);
	if($result){
	?>
		<script>
		if(alert("uploaded succesfully"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/Showdata.php");
			
		}
		</script>
		<?php	
	}
	?>
	