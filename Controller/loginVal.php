<?php
$data=array();
include("Model/Lib.php");
if(isset($_REQUEST["email"])){
	$sql="select * from user where email='".$_REQUEST["email"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["email"]);
	if(sizeof($data)>0)
		echo "Invalid Password";
	else if(strpos($_REQUEST["email"],"@")==0 || strpos($_REQUEST["email"],"@")>=strpos($_REQUEST["email"],"."))
	{
		echo "Invalid Email";
	}
	else
	{
		echo "Wrong Credential";
	}
}
?>