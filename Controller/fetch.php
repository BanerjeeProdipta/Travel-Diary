<?php
$data=array();
session_start();
include("Model/Lib.php");
if(isset($_REQUEST["email"])){
	$sql="select * from user where email='".$_REQUEST["email"]."'";
	//echo $sql;
	$json=loadFromMySQL($sql);
    $data=json_decode($json,true);
	//loadFromXML($_REQUEST["email"]);
	if($_REQUEST["email"]==$data["email"]){
		echo "Email taken";
	}
	else if(strpos($_REQUEST["email"],"@")==0 || strpos($_REQUEST["email"],"@")>=strpos($_REQUEST["email"],"."))
	{
		echo "Invalid Email";
	}
	else
	{
		echo "Valid Email";
	}
}
if(isset($_REQUEST["opass"])){
	$sql="select pass from user where email='".$_SESSION["email"]."'";
	//echo $sql;
	$json=loadFromMySQL($sql);
    $data=json_decode($json,true);
	//loadFromXML($_REQUEST["email"]);
	if(md5($_REQUEST["opass"])==$data["pass"]){
		echo "Password Matches";
	}
	else
	{
		echo "Password doesn't match";
	}
}
if(isset($_REQUEST["phone"])){
	$sql="select * from user where phone='".$_REQUEST["phone"]."'";
    $json=loadFromMySQL($sql);
    $data=json_decode($json,true);
	if($_REQUEST["phone"]==$data["phone"]){
		
		echo "Phone taken";
	}
	else if(strlen($_REQUEST["phone"])==11)
	{ 
		echo "Valid Number";
	}
	else
	{
		echo "InValid Number";
	}
}