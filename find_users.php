<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全部用户信息</title>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form action="find_users.php" method="post">
		<table width="618">
            <tr>
            	<td colspan="2" align="center"><b>客户查找</b></td>
            </tr>
            <tr>
            	<td>
                	<select name="findWay">
                        <option value="user_name">用户名</option>
                        <option value="user_password">用户密码</option>
                        <option value="user_age">年龄</option>
                        <option value="user_gender">性别</option>
                        <option value="individual_resume">个人简介</option>
					</select>
				</td>
                <td><input type="text" name="findRequirement" /></td>
				<td><input type="submit" name="find_btn" value="查找" /></td>
            </tr>
		</table>
    </form>
    <br />
    <div id="resultTbl"></div>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.validate-1.9.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		
		$("form").validate({
			rules: {
				findRequirement:{
					required:true,
				},
			},
			messages: {
				findRequirement: "请输入您所要查询的信息！",
			},
			submitHandler:function(form){
				$.post("find_users_file.php",$("form").serialize(),function(result){
					$("#resultTbl").html(result);
				})
			}
		});
	});	
</script>
</body>
</html>