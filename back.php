<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
	session_start();
	session_unset();
	session_destroy();
	echo"<script>alert('您已经退出系统，请重新登录');location='login.php'</script>";
	
	?>
</body>
</html>