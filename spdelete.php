<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除商品</title>
</head>

<body>
<?php
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","admindatabase");
mysqli_query($con,"set names utf8");
$data=mysqli_query($con,"delete from sp where id=".$id);
if($data)
{
	echo "<script>alert('删除成功');location.href='shangpin.php';</script>";
}
else
{
	echo "<script>alert('删除失败');location.href='shangpin.php';</script>";
}
?>
</body>
</html>