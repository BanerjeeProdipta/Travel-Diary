<?php
$flag=0;
include("Model/Lib.php");
include("cookie.php");
session_start();
$sql="select * from user where email='".$_REQUEST["email"]."'";
$json=loadFromMySQL($sql);
$data=json_decode($json,true);
$flag=false;
if($_REQUEST["email"]==$data["email"] && md5($_REQUEST["pass"])==$data["pass"]){
	if($data["u_type"]=="admin" && $data["Status"]==""){
		echo "Login success Admin";
		$uname=$data["fname"]." ".$data["lname"];
		$_SESSION["email"]=$_REQUEST["email"];
		$_SESSION["valid"]="yes";
		$_SESSION["valid1"]="admin";
		$_SESSION["uname"]=$uname;
		$_SESSION["profilepic"]=$data["profilepic"];
		$_SESSION["u_type"]=$data["u_type"];
		header("Location:http://localhost/Final/View/admin.php");
	}
	else if($data["u_type"]=="user" && $data["Status"]=="")
	{
		$uname=$data["fname"]." ".$data["lname"];
		echo "Login success USer";
		$_SESSION["email"]=$_REQUEST["email"];
		$_SESSION["valid"]="yes";
		$_SESSION["uname"]=$uname;
		$_SESSION["profilepic"]=$data["profilepic"];
		$_SESSION["u_type"]=$data["u_type"];
		$flag=true;
	}
	else{
		?>
	<script>
	if(alert("You are Banned for a short time."))
	{
	}
	else
	window.location.replace("http://localhost/Final/View/login.php");
	</script>
	<?php
	}
	
}
else{
	?>
	<script>
	if(alert("Wrong Credentials."))
	{
	}
	else
	window.location.replace("http://localhost/Final/View/login.php");
	</script>
	<?php
}
if($flag==true){
	if(isset($_REQUEST["remember"])){
		
		cookie($_REQUEST["email"],$_REQUEST["pass"]);
	}
	
	
	header("Location:http://localhost/Final/View/UserProfile.php");
}

?>