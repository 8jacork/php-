<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
	include_once("conn.php");
	header("content-type:text/html;charst=utf-8");
	
	
	$sqlstr2="select * from admin where Admin_ID=".$_POST['ID'];
	$result2=mysqli_query($conn,$sqlstr2);
	error_reporting(E_ALL&~E_NOTICE);
if($_POST['action']=="adminupate"){
		if(!($_POST['ID']and $_POST['pwd']and $_POST['name']and $_POST['phone'])){
		echo"输入不允许为空。单击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";	
		
	}else{
		$sqlstr="update  admin set 	Admin_ID='".$_POST['ID']."',Admin_pwd='".$_POST['pwd']."',Admin_name='".$_POST['name']."',Admin_phone='".$_POST['phone']."' where Admin_ID=".$_POST['ID'];
		
		$result=mysqli_query($conn,$sqlstr);
		if($result){
				echo "<script>alert('修改成功');location='houtai.php';</script>";	
			
		}else{
			
			echo "<script>alert('修改失败');history.go(-1);</script>";	
		}	
	}	
}
	
	?>
</body>
</html>