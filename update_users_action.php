<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	include('dbc/database.php');
	error_reporting(0);
	$userName = $_POST["user_name"];
	$userPassword = $_POST["user_password"];
	$userAge = $_POST["user_age"];
	$userId = $_POST["user_id"];
	$uQuery = "UPDATE user_info SET user_name= '".$userName."',user_password='".$userPassword."',user_age='".$userAge."' WHERE user_id = ".$userId."";
	$relsult=mysql_query($uQuery);
	mysql_fetch_array($result);
	mysql_close($conn);
	echo "<script>";
	echo "alert('更新成功！'),window.location.href='find_users.php'";
	echo "</script>";
?>
<body>
</body>
</html>