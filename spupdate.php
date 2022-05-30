
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品更改</title>
<link rel="stylesheet" type="text/css" href="hstyle.css"/>
</head>

<body>
<?php
  session_start();
  if(!($_SESSION['xingming'])){
     echo"<script>alert('登录后，才能查看');location='adminlogin.php'</script>";
  }
  ?>


<div  id="header">
	<ul id="uu1">
    	<li class="headli"><a href="#" class="heada"><img src="himages/1.png" height="70px" /></a></li>
        
    	<li class="headli"><div ><a href="houtaizhu.php" class="heada">管理控制台</a></div></li>
    
    	<li id="usern"class="headli"><a href="#" class="heada"><?php  echo $_SESSION['xingming']; ?></a></li>
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
<h3>商品信息：</h3>
</div>




<div align="center">
<form action="spupdate_ok.php" method="post" name="form1" id="form1">
<?php
$id=$_GET["id"];

$con=mysqli_connect("localhost","root","","admindatabase");
mysqli_query($con,"set names utf8");
$data=mysqli_query($con,"select * from sp where id=".$id);
$row=mysqli_fetch_array($data);
?>
<table width="500" border="1">
  <tr>
    <td colspan="2">添加商品</td>
  </tr>
  <tr>
    <td>商品名称：</td>
    <td><label for="textfield"></label>
      <input type="text" name="sp_name" id="textfield" value="<?php echo $row['name']; ?>" /></td>
  </tr>
  <tr>
    <td>商品价格：</td>
    <td><input type="text" name="sp_price" id="textfield2" value="<?php echo $row['price']; ?>" /></td>
  </tr>
  
  <tr>
    <td>商品信息：</td>
    <td><input name="sp_news" style="width:300px; height:50px;" id="textfield3" value="<?php echo $row['news']; ?>">  </input></td>
  </tr>
  <tr>
    <td>图片：</td>
    <td><input  type="text" name="sp_tupian" id="textfield4" value="<?php echo $row['tupian']; ?>" ></td>
  </tr>
  <tr>
    <td>商品规格：</td>
    <td><input type="text" name="sp_size" id="textfield5" value="<?php echo $row['size']; ?>" /></td>
  </tr>
  <tr>
    
    <td><input type="hidden" name="id"  value="<?php echo $row['id']; ?>" id="hiddenField" /></td>
    <td><input type="submit" name="button" id="button" value="修改" /><input name="" type="reset" value="重置" /></td>
    
  </tr>
</table>
</form>


</div>

</div>

</body>
</html>