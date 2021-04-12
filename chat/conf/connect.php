<?php

$DB = @new mysqli("localhost","tigran20_tigran","2006Tigran","tigran20_database");
if($DB -> connect_error){
	echo "Connection error";
}else{
	mysqli_set_charset($DB,"utf8");
}
?>