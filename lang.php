<?php

$lang = $_GET['l'];
setcookie("lang",$lang,time()+60*60*24*30);
header("location:".$_SERVER['HTTP_REFERER']);

?>