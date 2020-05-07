<?php
session_start();
include("Model/Lib.php");
print_r($_GET["target"]);
if($_GET["op"]=="delete")
{
 
    $sql="DELETE FROM profile WHERE `url`='".$_GET["target"]."'";
	$result=updateMySQL($sql);
	$file=$_GET["target"];
	unlink($file);
	
	if($result){
		if($_SESSION["u_type"]=="user"){
	?>
	
		<script>
		if(alert("Deleted Successfully"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/UserProfile.php");
			
		}
		</script>
		<?php
      }
	  else if($_SESSION["u_type"]=="admin")
	  {
		  ?>
		  <script>
		if(alert("Deleted Successfully"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/admin.php");
			
		}
		</script>
		<?php
	  }
		
	}
}
	?>