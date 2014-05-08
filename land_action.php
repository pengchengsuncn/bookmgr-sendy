<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>
</head>
<?php
	error_reporting(0);
	include('dbc/database.php');
	$user_name = $_POST["user_name"];
	$user_password = $_POST["user_password"];
	$sql="select * from user_info where user_name='".$user_name."' and user_password='".$user_password."'";
	$re=mysql_query($sql,$conn);
	$result=mysql_fetch_array($re);
	if(!empty($result)) {
	session_destroy();
	//注册session变量，保存当前会话用户的昵称
	session_start();
	$_SESSION['userName']=$result['user_name'];
	$_SESSION['userPassword']=$result['user_password'];
	// 登录成功重定向到管理页面
	echo "<script language=javascript>alert('登录成功！');window.location.href='main.php';</script>";
}
else { 
    // 管理员登录失败
	echo "<script language=javascript>alert('密码或用户名错误');window.location='index.php'</script>";
	session_destroy();
	}
?>
<body>
</body>
</html>