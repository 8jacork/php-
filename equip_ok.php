<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php 
	/*header("content-type:text/html; charest=UTF-8");
    include_once("conn.php"); 
	date_default_timezone_set('PRC');
	session_start();
	$date=date('Y-m-d H:i:s');
	
	if($_SESSION['name']){
		  $uid=$_SESSION['name'];
		 if($_GET["pids"]){
		   $pids=$_GET["pids"];
		   $sqlstr = "SELECT * FROM equip WHERE (Equip_ID='$pids')";
		   $result = mysqli_query($conn,$sqlstr);
			  while($myrows=mysqli_fetch_array($result)){
		          $name=$myrows['name'];
				 $price=$myrows['price'];
				  $news=$myrows['news'];
				$tupian=$myrows['tupian'];
				  $size=$myrows['size'];
				  if(!())
			  }
		 }
		 echo "<script>alert('没有获取到pids的值');</script>";
	}else{
		 echo "<script>alert('请先登录');location.href='login.php';</script>";
	}*/
	
	      
	
	
	
	
	
date_default_timezone_set('PRC');
$date=date('Y-m-d H:i:s');
include_once("conn.php");
session_start();
header("content-type:text/html; charest=UTF-8");

if($_SESSION['name']){
	 if($_GET["pids"]){
		 $pids=$_GET["pids"];
		 $uid=$_SESSION['name'];
		 
		 $sqlstr = "SELECT * FROM equip WHERE (Equip_ID='$pids')";
		 $result = mysqli_query($conn,$sqlstr);
		 while($myrows=mysqli_fetch_array($result)){
		          $name=$myrows['Equip_name'];
				  $price=$myrows['Equip_Price'];
				  $tupian=$myrows['tupian'];
				  $time=$myrows['time_price'];
			 if(!($name and $price and  $tupian and $time)){
			 echo "<script>alert('没有遍历出myrows中的值，失败');</script>";
		 }else{
			
			 $sqlstr1="insert into appoint values('".$uid."','".$name."','".$tupian."','".$time."','".$pids."')";
				$result1 =mysqli_query($conn,$sqlstr1);
				if($result1){
			echo"<script>alert('预约成功');location.href='shop.php';</script>";	
			}else{
			echo"<script>alert('预约失败');</script>";	
			}
			 }
		 }
	 }else{
		 echo "<script>alert('没有获取到pids的值');</script>";
	 }
	
}else{
	 echo "<script>alert('请先登录');location.href='login.php';</script>";
	
}
	?>
</body>
</html>