<?php
session_start();
include("conf/connect.php");
$email = $_POST['email'];
$password = md5($_POST['password']);
$query = $DB -> query("SELECT * FROM users WHERE email='$email' AND password='$password'");
$arr = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query)==1){
	$_SESSION['user']=$arr['id'];
	header('location:account.php');
}else{
	$_SESSION['log_error']=true;
	header("location:sign.php");
}
?>