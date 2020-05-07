<?php
session_start();
if($_SESSION["valid"]!="yes"){
?>
		<script>
		if(alert("Suspicious Login Attempt"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/login.php");
			
		}
		</script>
		<?php
}
else{
	$_SESSION["valid"]="";
	unset($_SESSION["valid"]);
	session_destroy();
	?>
		<script>
		if(alert("Succesfully Logged out"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/login.php");
			
		}
		</script>
		<?php
	}

?>