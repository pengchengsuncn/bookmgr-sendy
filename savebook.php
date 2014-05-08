<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加图书</title>
</head>
<?php
	error_reporting(0);
	include('dbc/database.php');
	$bookName = $_POST["book_name"];
	$bookClass = $_POST["book_class"];
	$bookNum = $_POST["book_num"];
	$bookFrom = $_POST["book_from"];
	$individualBook = $_POST["individual_book"];
	$sql = "insert into book_info (book_name,book_class,book_num,book_from,individual_book) values ('".$bookName."','".$bookClass."','".$bookNum."','".$bookFrom."','".$individualBook."')";
	mysql_query($sql);
	mysql_close($conn);
	
	
	echo "<script type='text/javascript'>";
	echo "alert('图书信息已保存');";
	echo "window.location.href='add_books.php';";
	echo "</script>";
?>
<body>
</body>
</html>