<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	
	<?php
	error_reporting(E_ALL&~E_NOTICE);
	include_once("conn.php");
	
    header("content-type:text/html;charset=UTF-8");
	$sqlstr2="delete from trolley where id=".$_GET['eid'];
	$result2=mysqli_query($conn,$sqlstr2);
	
	if($result2){
				echo "<script>alert('删除成功');location='car.php';</script>";
		}else{
		
			echo "<script>alert('删除失败');history.go(-1);</script>";
		}
	?>
	

	
	
</body>
</html>