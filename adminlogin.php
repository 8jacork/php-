<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员系统登录</title>
<link href="adminlogin.css" rel="stylesheet" type="text/css">

</head>

<body id="login_bg">

<form id="form1" name="form1" method="post" action="noyes.php" onsubmit="return checkform(form1)">
<div class="main ">
			<!--登录-->
			<div class="login-dom login-max">
				<div class="logo text-center">
					<a href="#">
					<img src="images/logo.png" width="180px" height="180px">
					</a>
                    
				</div>
				<div class="login container " id="login">
					<p class="text-big text-center logo-color">
						健身每一天，快乐每一天
					</p>
					<p class=" text-center margin-small-top logo-color text-small">
						控制台 | 云平台 | 论坛 | 云市场
					</p>
					<form class="login-form" action="index.html" method="post" autocomplete="off">
						<div class="login-box  text-small" id="box">
							<div class="name border-bottom">
								<input type="text" placeholder="手机号 / 管理员账号" id="username" name="username" datatype="*" nullmsg="请填写帐号信息">
							</div>
							<div class="pwd">
								<input type="password" placeholder="密码" datatype="*" id="password" name="password" nullmsg="请填写帐号密码">
							</div>
						</div>
				
						<input type="submit" class="btn text-center login-btn" value="立即登录">
					</form>
					<div class="forget">
						<a href="#" class="forget-pwd text-small fl">忘记登录密码？</a><a href="zhuce.php" class="forget-new text-small fr" id="forget-new">创建一个新账号</a>
					</div>
				</div>
			</div>
				<div class="footer text-center text-small ie">
				Copyright 2013-2016 商工健身房版权所有 <a href="#" target="_blank">y豫MAP备12314115号</a>
				<span class="margin-left margin-right">|</span>
				<script src="#" language="JavaScript"></script>
			</div>
			<div class="popupDom">
				<div class="popup text-default">
				</div>
			</div>
		</div>

</form>


</body>
</html>