<?php
$dataSource="mysql";
function loadFromMySQL($sql){
	$conn = mysqli_connect("localhost", "root", "","travel");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=0;
	while($row = mysqli_fetch_assoc($result)) {
		$arr=$row;
	}
	return json_encode($arr);
}
function updateMySQL($sql)
{
	$conn = mysqli_connect("localhost", "root", "","travel");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
function loadFromXML(){
	global $data;
	$datax=array();
	$xml=simplexml_load_file("http://localhost/Final/View/Controller/XML/location.xml") or die("Error: Cannot create object");
	foreach($xml->user as $st){
		$ar=array();
		{
			$ar["loc1"]=(string)$st->loc1;
			$ar["loc2"]=(string)$st->loc2;
			$ar["loc3"]=(string)$st->loc3;
			$ar["loc4"]=(string)$st->loc4;
			$ar["loc5"]=(string)$st->loc5;
			$ar["loc6"]=(string)$st->loc6;
		
			$datax=$ar;
		}
	}
	return $datax;
}
?>