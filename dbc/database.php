<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	$db_host="127.0.0.6";
	$database='library_manage';
	$user='root';
	$pass='123456';
	$conn=mysql_connect($db_host,$user,$pass) or die("数据库连接出错,请检查数据库配置是否正确!");
	$select_db = mysql_select_db($database,$conn);
	if(!$select_db){
	die("无相关数据，请选择正确的数据库！");
	}
?>
<body>
</body>
</html>