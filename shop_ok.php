
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php   
date_default_timezone_set('PRC');
$date=date('Y-m-d H:i:s');
include_once("conn.php");
session_start();
header("content-type:text/html; charest=UTF-8");

if($_SESSION['name']){
	 if($_GET["pids"]){
		 $pids=$_GET["pids"];
		 $uid=$_SESSION['name'];
		 $sqlstr = "SELECT * FROM sp WHERE (id='$pids')";
		 $result = mysqli_query($conn,$sqlstr);
		 while($myrows=mysqli_fetch_array($result)){
		          $name=$myrows['name'];
				 $price=$myrows['price'];
				  $news=$myrows['news'];
				$tupian=$myrows['tupian'];
				  $size=$myrows['size'];
			 if(!($name and $price and $news and $tupian and $size)){
			 echo "<script>alert('没有遍历出myrows中的值，失败');</script>";
		 }else{
			 $sqlstr1="insert into trolley values('".$pids."','".$name."','".$price."','".$news."','".$tupian."','".$size."','".$date."','".$uid."')";
				$result1 =mysqli_query($conn,$sqlstr1);
				if($result1){
			echo"<script>alert('购买成功');location.href='shop.php';</script>";	
			}else{
			echo"<script>alert('购买失败');</script>";	
			}
			 }
		 }
	 }else{
		 echo "<script>alert('没有获取到pids的值');</script>";
	 }
	
}else{
	 echo "<script>alert('请先登录');location.href='login.php';</script>";
	
}	
	
	
	
	

/*if(!isset($_SESSION['name']))
{
	 echo "<script>alert('请先登录');location.href='login.php';</script>";
	
}
	else { 
		$con=mysqli_connect("localhost","root","","admindatabase");	
		mysqli_query($con,"set names utf8");
		$pid=$_GET["pids"];
		
		$name=mysqli_query($con,"select name from sp where id='.$pid.'" );
		$price=mysqli_query($con,"select price from sp where id='.$pid.'" );
		$news=mysqli_query($con,"select news from sp where id='.$pid.'" );
		$tupian=mysqli_query($con,"select price from sp where id='.$pid.'" );
		$size=mysqli_query($con,"select price from sp where id='.$pid.'" );
		$abc="insert into trolley(name,price,news,tupian,size) values(".$name.",".$price.",".$news.",".$tupian.",".$size.",)";
		$datab = mysqli_query($con,$abc);
		
		echo "<script> alert('购买成功'); location.href='#';</script>";
	}*/
	
	
/*$pid=$_GET["pids"];
$con=mysqli_connect("localhost","root","","admindatabase");	
mysqli_query($con,"set names utf8");
$data2=mysqli_query($con,"select * from trolley where uid=".$_SESSION['id']." and pid=".$pid);
$count=mysqli_num_rows($data2);
$date=(int)time();
if($count>0)
{
	$dataa = mysqli_query($con,"update trolley set amount=amount+1,dateline=".$date." where uid='".$_SESSION['id']."' and pid=".$pid);
	if($dataa)
    {
	    echo "<script>alert('加入购物车成功');location.href='index.php';</script>";
    }
}
else if($count<1)
{
	$datab = mysqli_query($con,"insert into trolley(uid,pid,amount,dateline) values(".$_SESSION['id'].",".$pid.",'1',".$date.")");
	if($datab)
    {
	echo "<script>alert('加入购物车成功');location.href='index.php';</script>";
    }
}
else
{
	echo "<script>alert('加入购物车失败');history.go(-1);</script>";
}*/
?>
</body>
</html>