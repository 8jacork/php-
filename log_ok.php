<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	

	<?php
require("conn.php");
header("content-type:text/html; charest=UTF-8");//文件编码格式
    // Session需要先启动。
	    $tel = $_POST['tel'];
        $pwd = $_POST['pwd'];
    session_start();
    //判断uname和pwd是否赋值
    if($tel and $pwd){
        //连接数据库
        //验证内容是否与数据库的记录吻合。
        $sql = "SELECT * FROM user WHERE (User_account='$tel') AND (User_pwd='$pwd')";
        //执行上面的sql语句并将结果集赋给result。
        
        $result = mysqli_query($conn,$sql);
 if($result){
			echo"<script>alert('登录成功');location='shop.php'</script>";
		$_SESSION['name']=$tel;
	    
		}else{
			echo"<script>alert('用户名或密码错误'.$pwd);location='login.php'</script>";
		}
		
	}else{
		echo"<script>alert('用户名或密码为空'.$pwd);location='login.php'</script>";
	}



?>

</body>
</html>