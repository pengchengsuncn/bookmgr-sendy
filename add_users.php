<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加客户</title>
</head>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
<link href="style/foundation.min.css" rel="stylesheet" type="text/css" />
<link href="style/normalize.css" rel="stylesheet" type="text/css" />
<body>
	<form id="error_info" method="post" action="saveinfo.php" name="forms">
        <table width="620">
            <tr>
                <th scope="row" colspan="2">客户信息输入</th>
            </tr>
            <tr>
                <td style="width:100px">用户账户：</td>
                <td><input name="user_name" type="text"/></td>
            </tr>
            <tr>
                <td>用户密码：</td>
                <td><input type="password" name="user_password" value="" /></td>
            </tr>
            <tr>
                <td>用户年龄：</td>
                <td><input name="user_age" size="6"  type="text"/></td>
            </tr>
            <tr>
                <td>用户性别：</td>
                <td>
                	<select name="user_gender">
						<option value="男">男</option>
						<option value="女">女</option>
					</select>
                </td>
            </tr>
            <tr>
                <td>个性签名：</td>
                <td><textarea type="text" name="individual_resume" style="width:250px; height:80px"></textarea></td>
            </tr>
            <tr>
            	<td><input type="submit" value="提交" /></td>
            </tr>
        </table>
	</form>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.validate-1.9.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		
		$("#error_info").validate({
			rules: {
				user_name: "required",
				user_password:{
					required:true,
					rangelength:[5,10]
				},
				user_age: {
					required:true,
					digits:true  
				},
				individual_resume:{
					required:true,
					rangelength:[5,10]	
					}
			},
			messages: {
				user_name: "请输入客户名称！",
				user_password: "5——10个字符",
				user_age: "必须输入整数！",
				individual_resume:"5——10个字符（一个汉字为一个字符）"
			},
			submitHandler:function(form){
				form.submit();
			}
		});
	});	
</script>
</body></html>