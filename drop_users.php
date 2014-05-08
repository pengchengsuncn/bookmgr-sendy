<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	error_reporting(0);
	include('dbc/database.php');
	session_start();
	$uQuery = "delete from user_info WHERE user_id = ".$_GET["user_id"]."";
	mysql_query($uQuery);
	mysql_close($conn);
	header("location:find_users.php");
?>

<body>
</body>
</html>