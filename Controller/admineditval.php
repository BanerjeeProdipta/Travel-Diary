<?php
include("Model/Lib.php");
session_start();
$flag=0;

	if(strlen($_POST["pass"])==0)
	{
		$flag=1;
		echo "<p style='color:red'>InValid Pasword";
	}
	if($_POST["confpass"]!=$_POST["pass"])
	{
		$flag=1;
		echo "<p style='color:red'>Passwords Doesn't Match.";
	}
	
	
	
	
if($flag==0)
	{
		
        $sql="UPDATE user SET pass='".md5($_REQUEST["pass"])."' WHERE email='".$_SESSION["email"]."'";
		//echo $sql;
		updateMySQL($sql);
		?>
		<script>
		if(alert("Password Changed"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/adminabout.php");
			
		}
			
		</script>
		<?php
}
	
?>


