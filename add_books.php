<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书信息录入</title>
</head>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
<link href="style/foundation.min.css" rel="stylesheet" type="text/css" />
<link href="style/normalize.css" rel="stylesheet" type="text/css" />
<body bgcolor="#cccccc">
<form method="post" action="savebook.php" name="forms">
        <table width="620">
            <tr>
                <th scope="row" colspan="2">图书信息输入</th>
            </tr>
            <tr>
                <td style="width:120px">图书名：</td>
                <td><input name="book_name"/ type="text"></td>
            </tr>
            <tr>
                <td>图书类：</td>
                <td><input  name="book_class" type="text" /></td>
            </tr>
            <tr>
                <td>图书编号：</td>
                <td><input name="book_num" type="text"/></td>
            </tr>
            <tr>
                <td>图书出版社：</td>
                <td><input name="book_from"/ type="text"></td>
            </tr>
            <tr>
                <td>图书简介：</td>
                <td><textarea type="text" name="individual_book" style="width:250px; height:80px;"></textarea></td>
            </tr>
            <tr>
            	<td><input type="submit" value="提交" /></td>
            </tr>
        </table>
        </form>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validate-1.9.0.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		
		$("form").validate({
			rules: {
				book_name: "required",
				book_class:{
					required:true,
				},
				book_num: {
					required:true,
					min:10 
				},
				book_from: {
					required:true
				},
				individual_book:{
					required:true,
					rangelength:[5,20]	
					}
			},
			messages: {
				book_name: "请输入图书名称！",
				book_class:"必填",
				book_num: "输入值不能小于10",
				book_from: "必填",
				individual_book:"5——20个字符（一个汉字为一个字符）",
			},
			submitHandler:function(form){
				form.submit();
			}
		});
	});	
</script>
</body>
</html>