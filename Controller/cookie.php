<?php
function cookie($cookie,$pass){
	setcookie ("email",$cookie,time()+ 3600000 , "/");
	setcookie ("pass",$pass,time()+ 3600000, "/");
}

?>