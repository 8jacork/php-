<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	error_reporting(0);
$sp_name=$_POST["sp_name"];
$sp_price=$_POST["sp_price"];
$sp_news=$_POST["sp_news"];
$sp_tupian=$_POST["sp_tupian"];
$sp_size=$_POST["sp_size"];
$con=mysqli_connect("localhost","root","","admindatabase");
mysqli_query($con,"set names utf8");
$data=mysqli_query($con,"insert into sp(name,
price,news,tupian,size) values('".$sp_name."','".$sp_price."',
'".$sp_news."','".$sp_tupian."','".$sp_size."')");
if($data)
	{
		echo "<script>alert('添加成功');location.href='spadd.php'</script>";
	}
	else
	{
		echo "<script>alert('添加失败');location.href='spadd.php'</script>";
	}
?>
</body>
</html>