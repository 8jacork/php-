<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
	
</body>

<body>
	<?php
	error_reporting(E_ALL&~E_NOTICE);
	include_once("conn.php");
header("content-type:text/html;charst=utf-8");//文件编码格式
	
	$x=10000;
	$y=99999;
	$account=rand($x,$y);
	$pwd=$_POST["pwd"];
	
	$name=$_POST["name"];
	$phone=$_POST["phone"];
	$repwd=$_POST["repwd"];
	
	
	
	if(!($account and $pwd  and $name and $phone and $repwd )){
         echo("输入值不许为空");
	}else{
		 if(!($repwd==$pwd)){
		 echo"两次密码输入不一致";
	 }else{
		$sqlstr1="insert into user values('".$account."','".$pwd."','".$_POST['ni']."','".$name."','".$phone."')";
		
		//执行sql   insert语句    把用post引用的变量接入到bookable中
		
		$result = mysqli_query($conn,$sqlstr1);//承接结果集
		
		if($result){
			echo"<script>alert('注册成功');location='index.html';</script>";
		}else{
			echo"<script>alter('注册失败');location='login.html';</script>";
		}
}
	}	
	
	
	?>
</body>
</html>