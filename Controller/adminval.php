<?php
include("Model/Lib.php");
$flag=0;

	if($_POST["fname"]=="" && $_POST["lname"]=="" && $_POST["phone"]=="" && $_POST["email"]=="" && $_POST["pass"]=="" && $_POST["confpass"]=="")
	{
		echo  "<p style='color:red'>Please fill up all the fields.";
		$flag=1;
		exit();
	}
	
	if($_POST["fname"]=="")
	{
		echo "<p style='color:red'>Please fill up First Name.";
		$flag=1;
	}
	if($_POST["lname"]=="")
	{
		echo "<p style='color:red'>Please fill up Last Name.";
		$flag=1;
	}
	if($_POST["dob"]=="")
	{
		echo "<p style='color:red'>Please fill up Date of Birth.";
		$flag=1;
	}
	if($_POST["phone"]=="")
	{
		echo "<p style='color:red'>Please Provide Phone Number.";
		$flag=1;
	}
	if($_POST["email"]=="")
	{
		echo "<p style='color:red'>Please fill up Email.";
		$flag=1;
	}
	if($_POST["pass"]=="")
	{
		echo "<p style='color:red'>Please fill up Password.";
		$flag=1;
	}
	if($_POST["confpass"]=="")
	{
		echo "<p style='color:red'>Please fill up Confirm Password.";
		$flag=1;
	}
	if(strlen($_POST["phone"])!=11 && strpos($_POST["phone"],"0")!=0)
	{
		$flag=1;
		if(is_numeric($_POST["phone"])){
		
		}
		else
		{
			echo "<p style='color:red'>Please Provide Valid Phone Number";
		}
		echo "<p style='color:red'>Incorrect Phone Number";
	}
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
	
	if(strpos($_POST["email"],"@")==0 || strpos($_POST["email"],"@")>=strpos($_POST["email"],"."))
	{
		$flag=1;
		echo"<p style='color:red'>Invalid Email.";
	}
	
	
	
if($flag==0)
	{
		
	$user="admin";
	$uname=$_REQUEST["fname"].",".$_REQUEST["lname"];
		$sql="INSERT INTO user(fname, lname, dob, gender, phone, email, pass, u_type)
VALUES ('".$_REQUEST["fname"]."','".$_REQUEST["lname"]."','".$_REQUEST["dob"]."','".$_REQUEST["gender"]."', '".$_REQUEST["phone"]."','".$_REQUEST["email"]."','".md5($_REQUEST["pass"])."','".$user."')";
        
		//echo $sql;
		updateMySQL($sql);
		?>
		<script>
		if(alert("New Admin has been added"))
		{
			
		}
		else{
			window.location.replace("http://localhost/Final/View/admin.php");
			
		}
			
		</script>
		<?php
}
?>


