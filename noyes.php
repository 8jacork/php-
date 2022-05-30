<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录情况</title>
</head>

<body>


<?php				
error_reporting(0);  
	session_start();
	header("content-type:text/html;charset=UTF-8");
	include("conn.php");
	$name=$_POST['username'];
	$pwd=$_POST['password'];
	$sqlstr1="select * from admin where Admin_ID='".$name."'and Admin_pwd='".$pwd."'";
	$result1=mysqli_query($conn,$sqlstr1);
	$rows=mysqli_fetch_row($result1);
	$_SESSION['xingming']=$rows[2];
	if(mysqli_num_rows($result1)>0){
			$_SESSION['name']=$name;
			$_SESSION['time']=time();
			echo"<script>alert('登录成功');location='houtaizhu.php';</script>";
	}else{
		echo"<script>alert('用户名或密码错误');location='adminlogin.php';</script>";
	}

?>
</body>
</html>