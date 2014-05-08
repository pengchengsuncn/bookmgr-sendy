<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
<body>
	<?php
	error_reporting(0);
	include('dbc/database.php');
	$uQuery = "select * from user_info WHERE user_id = ".$_GET["user_id"]."";
	$rel = mysql_query($uQuery);
	$row = mysql_fetch_array($rel);
	?>
	<form method="post" action="update_users_action.php" name="forms">
        <table width="620">
            <tr>
                <th scope="row" colspan="2">客户信息编辑</th>
            </tr>
            <tr>
                <td style="width:100px">用户账户：</td>
                <td><input type="text" name="user_name" value="<?php echo $row["user_name"]?>"/></td>
            </tr>
            <tr>
                <td>用户密码：</td>
                <td><input type="text" name="user_password" value="<?php echo $row["user_password"]?>" /></td>
            </tr>
            <tr>
                <td>用户年龄：</td>
                <td><input type="text" name="user_age" size="6" value="<?php echo $row["user_age"]?>" /></td>
            </tr>
            <tr>
            	<input type="hidden" name="user_id" value="<?php echo $_GET["user_id"] ?>" />
            	<td><input class="button [tiny small large]" type="submit" value="更新" /></td>
            </tr>
        </table>
	</form>
</body>
</html>