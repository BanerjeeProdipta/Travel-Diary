<?php
include("Model/Lib.php");
print_r($_GET["target"]);
if($_GET["op"]=="ban")
{
    $ban="banned";
	$sql="UPDATE user SET status='".$ban."' WHERE email='".$_GET["target"]."'";
	$result=updateMySQL($sql);
	
	header("Location:http://localhost/Final/View/Banuser.php");
	
		
}
if($_GET["op"]=="unban")
{
    $unban="";
	$sql="UPDATE user SET status='".$unban."' WHERE email='".$_GET["target"]."'";
	$result=updateMySQL($sql);
	header("Location:http://localhost/Final/View/Banuser.php");
		
}
?>