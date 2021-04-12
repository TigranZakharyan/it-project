<?php
session_start();
include('conf/connect.php');
$name = $_GET['name'];
$id = $_GET['id'];
$DB->query("INSERT INTO fblogin (`fbid`,`name`) VALUES ('$id','$name')");
// $_SESSION['user']=$DB -> insert_id;
$_SESSION['fbuser']=$id;
header("location:account.php");
?>