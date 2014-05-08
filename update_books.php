<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书更新</title>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
</head>
	<?php
	error_reporting(0);
	include('dbc/database.php');
	$uQuery = "select * from book_info WHERE book_id = ".$_GET["book_id"]."";
	$rel = mysql_query($uQuery);
	$row = mysql_fetch_array($rel);
	?>
	<form method="post" action="update_books_action.php">
        <table width="620">
            <tr>
                <th scope="row" colspan="2">图书信息输入</th>
            </tr>
            <tr>
                <td style="width:100px">图书名：</td>
                <td><input type="text" name="book_name"/ value="<?php echo $row["book_name"]?>"></td>
            </tr>
            <tr>
                <td>图书类：</td>
                <td><input type="text" name="book_class" value="<?php echo $row["book_class"]?>" /></td>
            </tr>
            <tr>
                <td>图书编号：</td>
                <td><input type="text" name="book_num" value="<?php echo $row["book_num"]?>"/></td>
            </tr>
            <tr>
                <td>图书出版社：</td>
                <td><input type="text" name="book_from"/ value="<?php echo $row["book_from"]?>"></td>
            </tr>
            <tr>
            	<td>
                <input type="hidden" name="book_id" value="<?php echo $_GET["book_id"] ?>" />
                <input class="button [tiny small large]" type="submit" value="更新" />
                </td>
            </tr>
        </table>
     </form>
<body>
</body>
</html>