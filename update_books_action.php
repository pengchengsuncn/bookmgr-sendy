<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更新图书信息</title>
</head>
<?php
	error_reporting(0);
	include('dbc/database.php');
	$bookName = $_POST["book_name"];
	$bookClass = $_POST["book_class"];
	$bookNum = $_POST["book_num"];
	$bookFrom = $_POST["book_from"];
	$bookId = $_POST["book_id"];
	$uQuery = "UPDATE book_info SET book_name= '".$bookName."',book_class='".$bookClass."',book_num='".$bookNum."',book_from='".$bookFrom."' WHERE book_id = ".$bookId."";
	$relsult=mysql_query($uQuery);
	mysql_fetch_array($result);
	mysql_close($conn);
	echo "<script>";
	echo "alert('更新成功！'),window.location.href='find_books.php'";
	echo "</script>";
?>
<body>
</body>
</html>