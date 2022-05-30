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
    
    <li class="shuli"><a href="appoint.php">预约管理</a></li>
    <li class="shuli"><a href="#"></a></li>
</ul>



</div>

<div id="data">

<div >
欢迎管理员——<?php  echo $_SESSION['xingming']; ?>
<hr />
<h3>用户列表</h3>
</div>



<?php

	include_once("conn.php");
	$result=mysqli_query($conn,"select * from user");
header("content-type:text/html;charst=utf-8");
	echo"<table id='t1' border='0'   width='1000'
	cellpadding='0'  cellspacing='0' align='center'>
	  <tr bgcolor='#CCCCCC' height='40'>
	  <td class='m1'>用户账号</td>
	  <td class='m1'>用户密码</td>
	  <td class='m1'>用户昵称</td>
	  <td class='m1'>用户姓名</td>
	  <td class='m1'>用户手机号</td>
	  <td class='m1'>操作</td>
	  </tr>";
	        
		while($rows=mysqli_fetch_row($result)){
	echo"<tr>";
	for($i=0;$i<count($rows);$i++){
			echo "<td height='25'  class='m1' >".$rows[$i]."</td>";	
		
	}
	echo "<td height='25' class='m1'><a href='update1.php'>修改/</a><a href=userout.php?action=del&userid=".$rows[0]." onclick='return del();'>删除</a></td>";
	echo "</tr>";
}
echo"<tr id='add'><td colspan='5' height='25' class='m1' > <a href='useradd.php' style='font-size:36px;color:#000;' >+</a></td> </tr>";
echo"</table>";


?>




</div>



</div>
</body>
</html>