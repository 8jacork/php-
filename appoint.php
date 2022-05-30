<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员系统</title>
<link rel="stylesheet" type="text/css"  href="hstyle.css"/>
</head>

<body>
<div  id="header">
	<ul id="uu1">
    	<li class="headli"><a href="#" class="heada"><img src="himages/1.png" height="70px" /></a></li>
        
    	<li class="headli"><div ><a href="houtaizhu.php" class="heada">管理控制台</a></div></li>
    
    	<li id="usern"class="headli"><a href="#" class="heada"><?php session_start(); echo $_SESSION['xingming']; ?></a></li>
        <li id="quit"class="headli"><a href="adminlogin.php" class="heada">退出系统</a></li>
    </ul>

</div>

<div id="zhong">

<div id="shulan">
<ul>
	<li class="shuli"><a href="houtai.php">管理员</a> <hr /></li>
   
	<li	class="shuli"><a href="userxinxi.php">用户管理</a> <hr /></li>

    <li class="shuli"><a href="equip.php">健身设备管理</a> <hr /></li>
    
    <li class="shuli"><a href="appoint.php">订单管理</a></li>
    <li class="shuli"><a href="#"></a></li>
</ul>



</div>

<div id="data">

<div >
欢迎管理员——<?php  echo $_SESSION['xingming']; ?>
<hr />
<h3>预约列表</h3>
</div>



<?php
	error_reporting(E_ALL&~E_NOTICE);
	include('conn.php');
	session_start();
    $uid=$_SESSION['name'];
	$result=mysqli_query($conn,"select * from trolley where uid=".$uid);
	echo"<table id='t1' border='1px'  width='1330' 
	cellpadding='0'  cellspacing='0' align='center' >
	  <tr bgcolor='#CCCCCC' height='40' align='center'  >
	  <td class='m1' width='200' border='1px'>商品名称</td>
	  <td class='m1' width='70' >商品价格</td>
	  <td class='m1' width='260' >商品简介</td>
	  <td class='m1' width='200' >商品图片</td>
	  <td class='m1' width='200' >商品规格</td>
	  <td class='m1' width='100'>购买时间</td>
	  <td class='m1' width='100'>购买人</td>
	   <td class='m1'  width='100'>操作</td>
	  </tr>";
      
	   while($rows=mysqli_fetch_row($result)){
		echo "<tr  align='center'>";
		   for($i=1;$i<4;$i++){
			   echo "<td height='25'  align='center'>";
			   echo $rows[$i];
			   
			   echo "</td>";
		   }
		   echo "<td height='50'  align='center' >";
		   echo "<img src='img/".$rows[4]."' height='100' width='100' />";
		   echo "</td>";
		   for($i=5;$i<8;$i++){
			   echo "<td height='25'  align='center'>";
			   echo $rows[$i];
			   
			   echo "</td>";
		   }
		   echo "<td height='25' class='m1'><a href=eout.php?action=del&eid=".$rows[0]."  onclick='return del();'>删除</a></td>";
		   echo "</tr>";
	   }
	?>




</div>



</div>


</body>
</html>