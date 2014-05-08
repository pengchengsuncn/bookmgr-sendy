<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图书查找</title>
<link href="style/foundation.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--form表单创建开始-->
	<form action="find_books.php" method="post">
		<table width="618">
            <tr>
            	<td colspan="2" align="center"><b>图书查找</b></td>
            </tr>
            <tr>
            	<td>
                	<select name="findWay">
                        <option value="book_name">图书名</option>
                        <option value="book_class">图书类</option>
                        <option value="book_num">图书编号</option>
                        <option value="book_from">图书出版社</option>
                        <option value="individual_book">图书简介</option>

					</select>
				</td>
                <td><input type="text" name="findRequirement" /></td>
				<td><input type="submit" value="查找" /></td>
            </tr>
		</table>
    </form>
   <!--form表单创建结束--> 
   <!--ajax传值和前段验证  引用jquary validate插件-->
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
				$.post("find_books_file.php",$("form").serialize(),function(result){
					$("#resultTbl").html(result);
				})
			}
		});
	});	
</script>

</body>
</html>