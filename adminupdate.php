<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
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
<h3>管理员修改操作</h3>
</div>

<div align="center">
<?php
error_reporting(E_ALL&~E_NOTICE);

	include_once("conn.php");
	
	
	header("content-type:text/html;charst=utf-8");
	
	
	$sqlstr2="select * from admin where Admin_ID=".$_GET['adminid'];
	$result2=mysqli_query($conn,$sqlstr2);
	while($rows=mysqli_fetch_row($result2))

	{
		
		

	?>
    <form method="post" action="adminupdate1.php">
	<table align="center">
<input name="action" value="adminupate" type="hidden" />
<tr>
<td>管理员ID：</td>
<td><input name="ID" type="text" value="<?php echo $rows[0]; ?>"  /></td>
</tr>
<tr>
<td>密码：</td><td><input name="pwd" type="text" value="<?php echo $rows[1]; ?>" /></td>
</tr>
<tr>
<td>姓名：</td><td><input name="name" type="text"  value="<?php echo $rows[2]; ?>" /></td>
</tr>
<tr>
<td>手机号：</td><td><input name="phone" type="text" value="<?php echo $rows[3]; ?>" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input name="" type="submit" value="修改" />
<input name="" type="reset" value="重置" />
</td>
</tr>
</table>
</form>
      <?php
	  };
	
	  
	  
	  
	  
	  ?>
	       

</div>



</div>
</body>
</html>