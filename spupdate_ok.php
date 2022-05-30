<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body><?php
$id=$_POST["id"];
$name=$_POST["sp_name"];
$price=$_POST["sp_price"];
$news=$_POST["sp_news"];
$tupian=$_POST["sp_tupian"];
$size=$_POST["sp_size"];
$con=mysqli_connect("localhost","root","","admindatabase");
mysqli_query($con,"set names utf8");
$data=mysqli_query($con,"update sp set name='".$name."',price='".$price."',news='".$news."',tupian='".$tupian."',size='".$size."' where id=".$id);
if($data)
{
	echo "<script>alert('修改成功');location.href='shangpin.php';</script>";
}
else
{
	echo "<script>alert('修改失败');location.href='shangpin.php';</script>";
}
?>
</body>
</html>