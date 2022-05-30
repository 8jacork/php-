<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册情况</title>
</head>

<body>
<?php 
	error_reporting(0);  
	include('conn.php');
	header("content-type:text/html;charset=UTF-8");
	$admin=$_POST['adminname'];
	$pwd=$_POST['password'];
	$name=$_POST['xingming'];
	$phone=$_POST['phone'];
	$sqtrl="insert into admin values('".$admin."','".$pwd."','".$name."','".$phone."')";
	$result=mysqli_query($conn,$sqtrl);
	if($result){
				echo "<script> alert('注册成功,请重新登录');location='adminlogin.php';</script>";	
		}else{
			
			echo "<script>alert('注册失败');history.go(-1);</script>";	
		}
	?>
     
</body>
</html>