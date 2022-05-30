<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员系统</title>
<link rel="stylesheet" type="text/css" href="hstyle.css"/>
</head>

<body>
<div  id="header">
	<ul id="uu1">
    	<li class="headli"><a href="#" class="heada"><img src="himages/1.png" height="70px" /></a></li>
        
    	<li class="headli"><div ><a href="houtaizhu.php" class="heada">管理控制台</a></div></li>
    
    	<li id="usern"class="headli"><a href="#" class="heada">
		<?php session_start(); echo $_SESSION['xingming']; ?></a></li>
        <li id="quit"class="headli"><a href="adminlogin.php" class="heada">退出系统</a></li>
    </ul>

</div>

<div id="zhong">

<div id="shulan">
<ul>
	<li class="shuli"><a href="houtai.php">管理员</a><hr /></li>
    
	<li	class="shuli"><a href="userxinxi.php">用户管理</a><hr /></li>
   
    <li class="shuli"><a href="equip.php">健身设备管理</a><hr /></li>
  
    <li class="shuli"><a href="appoint.php">预约管理</a></li>
    <li class="shuli"><a href="#"></a></li>
</ul>



</div>

<div id="data">

<div >
欢迎管理员——<?php  echo $_SESSION['xingming']; ?>
<hr />
<h3>管理员列表</h3>
</div>



<?php
error_reporting(E_ALL&~E_NOTICE);
	include_once("conn.php");





	$sqlstr2="delete from admin where Admin_ID=".$_GET['adminid'];
	$result2=mysqli_query($conn,$sqlstr2);
	if($result2){
				echo "<script>alert('删除成功');</script>";
		}else{
			
			echo "<script>alert('删除失败');history.go(-1);</script>";	
		}




	$result=mysqli_query($conn,"select * from admin");
	header("content-type:text/html;charst=utf-8");
	echo"<table id='t1' border='0'  width='1000' 
	cellpadding='0'  cellspacing='0' align='center' >
	  <tr bgcolor='#CCCCCC' height='40'>
	  <td class='m1'>管理员ID</td>
	  <td class='m1'>密码</td>
	  <td class='m1'>姓名</td>
	  <td class='m1'>手机号</td>
	   <td class='m1'>操作</td>
	  </tr>";
	        
		while($rows=mysqli_fetch_row($result)){
	echo"<tr>";
	for($i=0;$i<count($rows);$i++){
			echo "<td height='25'  class='m1' >".$rows[$i]."</td>";	
		
	}
	echo "<td height='25' class='m1'><a href=adminupdate.php?action=update&adminid=".$rows[0].">修改/</a><a href=adminout.php?action=del&adminid=".$rows[0]." onclick='return del();'>删除</a></td>";
	echo "</tr>";
}
echo"<tr id='add'><td colspan='5' height='25' class='m1' > <a href='adminadd.php' style='font-size:36px;color:#000;' >+</a></td> </tr>";
echo"</table>";


?>

</div>



</div>


</body>
</html>