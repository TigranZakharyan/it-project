<?php
session_start();
include('conf/connect.php');
$sender = $_SESSION['nickname'];
$msg = $_POST['info'];
if(
$DB -> query("INSERT INTO messages (`sender`,`message`) VALUES ('$sender','$msg')")){
	echo "ok";
}
?>