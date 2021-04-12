<?php
session_start();
$nickname = $_POST['nickname'];
$_SESSION['nickname']=$nickname;
header('location: index.php');

?>