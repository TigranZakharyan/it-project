<?php session_start();
include("conf/connect.php");
$v1 = 1;
$v2 = 1;
$v3 = 1;
$v4 = 1;
$v5 = 1;
$v6 = 1;
$first_name = $_POST['fn'];
$last_name = $_POST['ln'];
$email = $_POST['email'];
if(mb_strlen($first_name)<2 || mb_strlen($first_name)>20){
	$v1=0;
	$_SESSION['reg_error_1'] = true;
}
if(mb_strlen($last_name)<2 || mb_strlen($last_name)>20){
	$v2=0;
	$_SESSION['reg_error_2'] = true;
}
$password = $_POST['password'];
if(mb_strlen($password)<6 || mb_strlen($password)>16){
	$v4=0;
	$_SESSION['reg_error_4'] = true;
} else {
	$password  = md5($password);
}
$email = $_POST['email'];
$query = $DB -> query("SELECT email FROM users WHERE email='$email'");
$count = mysqli_num_rows($query);
if(!filter_var($email,FILTER_VALIDATE_EMAIL) || $count>0){
	$v3=0;
	$_SESSION['reg_error_3'] = true;
}

if(isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])){
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$b_day = "$year-$month-$day";
}else{
	$v5=0;
	$_SESSION['reg_error_5'] = true;
}

if(isset($_POST['gender'])){
	$gender = $_POST['gender'];
}else{
	$v6=0;
	$_SESSION['reg_error_6'] = true;
}
if($v1+$v2+$v3+$v4+$v5+$v6 == 6){
	$DB->query("INSERT INTO users (`email`,`password`,`first_name`,`last_name`,`b_day`,`gender`) VALUES ('$email','$password','$first_name','$last_name','$b_day','$gender')");
	$_SESSION['user']=$DB -> insert_id;
	header("location:account.php");

}else{
	header("location:sign.php");
}
?>