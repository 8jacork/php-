<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加</title>
</head>

<body>


</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<h3>商品添加操作</h3>
</div>



<form action="spadd_ok.php" method="post" name="form1" id="form1">

<table width="500" border="1">
  <tr>
    <td colspan="2">添加商品</td>
  </tr>
  <tr>
    <td>商品名称：</td>
    <td><label for="textfield"></label>
      <input type="text" name="sp_name" id="textfield" value="" /></td>
  </tr>
  <tr>
    <td>商品价格：</td>
    <td><input type="text" name="sp_price" id="textfield2" value="" /></td>
  </tr>
  <tr>
    <td>商品信息：</td>
    <td><input type="text" name="sp_news" id="textfield3" value="" /></td>
  </tr>
  <tr>
    <td>图片：</td>
    <td><textarea name="sp_tupian" style="width:300px; height:150px;" id="textfield3"></textarea></td>
  </tr>
  <tr>
    <td>商品规格：</td>
    <td><input type="text" name="sp_size" id="textfield2" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="添加" /><input name="" type="reset" value="重置" /></td>
    
  </tr>
</table>
</form>

<div align="center">


</div>



</div>

</body>
</html>