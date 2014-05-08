<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	error_reporting(0);
	include('dbc/database.php');
	$whereStr = "";
	if(isset($_POST["findWay"]) && isset($_POST["findRequirement"])){
		$whereStr = " where ".$_POST["findWay"]." like '%".$_POST["findRequirement"]."%'";
	}
	function table($tabname,$sWhere) {
	 //execute SQL
	 	$sql="select * from {$tabname}";
	 	$num=10; //每页显示的条数
	 //result
	 	$result=mysql_query($sql);
	 	$total=mysql_num_rows($result); //总记录数
	 	$url="find_users.php"; //每次请求的URL
	 	$cpage=isset($_GET["page"]) ? $_GET["page"] : 1;// 当前页
	 	$pagenum=ceil($total/$num); //总页数
	 	$offset=($cpage-1)*$num; //开始取数据的位置
	 	$sql="select * from {$tabname} {$sWhere} limit {$offset}, {$num}";
	 
	 	$result=mysql_query($sql);
	 	$start=$offset+1; //开始记录
	 	$end=($cpage==$pagenum)? $total : ($cpage*$num); //结束记录
	 	$next=($cpage==$pagenum)? 0 : ($cpage+1);
	 	$prev=($cpage==1) ? 0 : ($cpage - 1);
	 
	 	$cols=mysql_num_fields($result);
	 	$resultTbl = "";
	 	$resultTbl .= '<table align="center" width="590" border="1">';
	 	$resultTbl .= "<td>用户名</td><td>用户密码</td><td>年龄</td><td>性别</td><td>个人简介</td><td>操作</td>";
	 	$resultTbl .= '<tr>';
	 	while($row=mysql_fetch_assoc($result)){
			$resultTbl .="<tr>";
			$resultTbl .= "<caption><b>全部用户信息</b></caption>";
			$resultTbl .= "<td>".$row[user_name]."</td><td>".$row[user_password]."</td><td>".$row[user_age]."</td><td>".$row[user_gender]."										
							</td><td>".$row[individual_resume]."</td>
							<td><a href ='drop_users.php?user_id=".$row[user_id]."'>删除</a>&nbsp;&nbsp;<a href ='update_users.php?user_id=".	
							$row[user_id]."'>更新</a></td>";
			$resultTbl .= "</tr>";
	  
	 }
	 		$resultTbl .= '<tr><td colspan="'.$cols.'" align="center">';
	 		$resultTbl .= "共<b>{$total}</b>条记录, 本页显示<b>{$start}-{$end}</b> &nbsp;&nbsp;{$cpage}/{$pagenum}";
	 if($cpage==1)
	  	$resultTbl .= "&nbsp;&nbsp;首页&nbsp;&nbsp;";
	 else
	  	$resultTbl .= "&nbsp;&nbsp;<a href='{$url}?page=1'>首页</a>&nbsp;&nbsp;";
	 if($prev)
	  	$resultTbl .= "&nbsp;&nbsp;<a href='{$url}?page={$prev}'>上一页</a>&nbsp;&nbsp;";
	 else
	 	 $resultTbl .= "&nbsp;&nbsp;上一页&nbsp;&nbsp;";
	 if($next)
	 	 $resultTbl .= "&nbsp;&nbsp;<a href='{$url}?page={$next}'>下一页</a>&nbsp;&nbsp;";
	 else
	  	$resultTbl .= "&nbsp;&nbsp;下一页&nbsp;&nbsp;";
	 if($cpage==$pagenum)
	  	$resultTbl .= "&nbsp;&nbsp;尾页&nbsp;&nbsp;";
	 else
	  	$resultTbl .= "&nbsp;&nbsp;<a href='{$url}?page={$pagenum}'>尾页</a>&nbsp;&nbsp;";
	 	$resultTbl .= '</td></tr>';
	 	$resultTbl .= '</table>';
	 return $resultTbl;
	 //close
	 mysql_free_result($result);
	}
	$resultTbl = table('user_info',$whereStr);
	echo $resultTbl;
?>
<body>
</body>
</html>