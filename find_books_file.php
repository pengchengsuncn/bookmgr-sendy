
<?php
	error_reporting(0);
	include('dbc/database.php');
	$whereStr="";
	if(isset ($_POST["findWay"]) && isset($_POST["findRequirement"])){
			$whereStr =" where ".$_POST["findWay"]." like '%".$_POST["findRequirement"]."%'";
		}
	$rel = mysql_query($str);
	function table($tabname,$sWhere) {
	 //execute SQL
		 $sql="select * from {$tabname}";
		 $num=10; //每页显示的条数
		 //result
		 $result=mysql_query($sql);
		 $total=mysql_num_rows($result); //总记录数
		 $url="find_books.php"; //每次请求的URL
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
		 $resultTbl .= '<table align="center" width="640" border="1">';
		 $resultTbl .= "<td>图书名</td><td>图书类</td><td>图书编号</td><td>图书出版社</td><td>图书简介</td><td>操作</td>";
		 $resultTbl .= '<tr>';
		 while($row=mysql_fetch_assoc($result)){
			$resultTbl .= "<tr>";
			$resultTbl .= "<caption><b>全部图书信息</b></caption>";
			$resultTbl .= "<td>".$row[book_name]."</td><td>".$row[book_class]."</td><td>".$row[book_num]."</td><td>".$row[book_from]."</td><td>".$row[individual_book]."</td><td><a href ='drop_books.php?book_id=".$row[book_id]."'>删除</a>&nbsp;&nbsp;<a href ='update_books.php?book_id=".$row[book_id]."'>更新</a></td>";
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
			$resultTbl .= '<td></tr>';
			$resultTbl .= '</table>';
		//close
		return $resultTbl;
		mysql_free_result($result);
		}
	$resultTbl = table('book_info',$whereStr);
	
	echo $resultTbl;
?>