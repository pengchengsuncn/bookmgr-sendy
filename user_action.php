<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
<?php
	error_reporting(0);
	include('dbc/database.php');
	include('find_users.php');
	$findWay = $_POST["findWay"];
	$findRequirement = $_POST["findRequirement"];
	$str = "select * from user_info where ".$findWay." like '%".$findRequirement."%'";
	$bookslist = mysql_query($str);
	echo "<table width='620' style='margin-top:30px' border='1'>";
		while($row = mysql_fetch_array($bookslist)){
			echo"<tr>";
			echo "<caption><b>查找结果</b></caption>";
			echo "<td>".$row[user_name]."</td><td>".$row[user_password]."</td><td>".$row[user_age]."</td><td>".$row[user_gender]."</td><td>".$row[individual_resume]."</td><td><a href ='drop_users.php?user_id=".$row[user_id]."'>删除</a>&nbsp;&nbsp;<a href ='update_users.php?user_id=".$row[user_id]."'>更新</a></td>";
  			echo "</tr>";
 		}
		echo "</table>";
		mysql_free_result($bookslist);
?>
<body>
</body>
</html>