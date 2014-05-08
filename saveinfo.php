<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	error_reporting(0);
	include('dbc/database.php');
	$userName = $_POST["user_name"];
	$userPassword = $_POST["user_password"];
	$userAge = $_POST["user_age"];
	$userGender = $_POST["user_gender"];
	$individualResume = $_POST["individual_resume"];
	$sql = "insert into user_info (user_name,user_password,user_age,user_gender,individual_resume) values ('".$userName."','".$userPassword."','".$userAge."','".$userGender."','".$individualResume."')";
	mysql_query($sql);
	mysql_close($conn);
	
	
	echo "<script type='text/javascript'>";
	echo "alert('客户信息已保存');";
	echo "window.location.href='add_users.php';";
	echo "</script>";
?>
<body>
</body>
</html>