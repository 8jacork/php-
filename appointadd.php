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
    
    	<li id="usern"class="headli"><a href="#" class="heada"><?php session_start(); echo $_SESSION['xingming']; ?></a></li>
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
<h3>预约添加操作</h3>
</div>



<form method="post" action="appointadd.php"> <table align="center">
<input name="action" value="appointadd" type="hidden" />
<tr>
<td>用户账号：</td>
<td><input name="ID" type="text" /></td>
</tr>
<tr>
<td>用户姓名：</td><td><input name="name" type="text" /></td>
</tr>
<tr>
<td>设备编号：</td><td><input name="hao" type="text" /></td>
</tr>
<tr>
<td>设备名称：</td><td><input name="sname" type="text" /></td>
</tr>
<tr>
<td>预约时间：</td><td><input name="time" type="datetime" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input name="" type="submit" value="添加" />
<input name="" type="reset" value="重置" />
</td>
</tr>
</table>
</form>
<div align="center">
<?php
error_reporting(E_ALL&~E_NOTICE);

	include_once("conn.php");
	
	
	header("content-type:text/html;charst=utf-8");
	if($_POST['action']=="appointadd"){
	if(!($_POST['ID']and$_POST['name']and$_POST['hao']and$_POST['sname']and$_POST['time'])){
		echo"输入不允许为空。单击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";	
		
	}else{
		$sqlstr1="insert into appoint values('".$_POST['ID']."','".$_POST['name']."','".$_POST['hao']."','".$_POST['sname']."','".$_POST['time']."')";
		$result=mysqli_query($conn,$sqlstr1);
		if($result){
				echo "<script> alert('添加成功')</script>";	
			
		}else{
			
			echo "<script>alert('添加失败');history.go(-1);</script>";	
		}
		
	}
	}
	?>

</div>



</div>

</body>
</html>