<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书管理系统登录</title>
</head>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
<link href="style/foundation.min.css" rel="stylesheet" type="text/css" />
<link href="style/normalize.css" rel="stylesheet" type="text/css" />
<body>
	<form id="land_test" method="post" action="land_action.php">
        <table width="400" border="0" align="center">
            <tr>
                <th scope="row" colspan="2">图书管理</th>
            </tr>
            <tr>
                <td style="width:80px">用户账户：</td>
                <td><input  type="text" name="user_name"/ value=""></td>
            </tr>
            <tr>
                <td>用户密码：</td>
                <td><input type="password" name="user_password" value="" /></td>
            </tr>
            <tr>
                <td><input class="small round button" type="submit" value="Land"/></td>
                <td><input class="small round button" type="reset" name="reset" value="reset"/></td>
            </tr>
        </table>
	</form>

    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.validate-1.9.0.min.js"></script>
    <script type="text/javascript">
		$( document ).ready(function() {
		
		$("#land_test").validate({
			rules: {
				user_name: "required",
				user_password:"required"
				},
			messages: {
				user_name: "客户名字不能为空！",
				user_password: "密码不能为空!"
			},
			submitHandler:function(form){
				form.submit();
			},
		});
	});
</script>
</body>
</html>