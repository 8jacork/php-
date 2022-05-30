
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="hstyle.css"/>
</head>

<body>
<div id="box">
<div  id="header">
	<ul id="uu1">
    	<li class="headli" ><a href="#" class="heada"><img src="himages/1.png" height="69px" /></a></li>
       <li class="headli"><div ><a href="houtaizhu.php" class="heada">管理控制台</a></div></li>
    <li id="usern"class="headli"><a href="#" class="heada"><?php error_reporting(0);    session_start(); echo $_SESSION['xingming']; ?>
    </a></li>
        <li id="quit"class="headli"><a href="adminlogin.php" class="heada">退出系统</a></li>
    </ul>
</div>
<div id="zhong">
<div id="shulan">
<ul>
	<a href="#" ><li class="show_list ">
                        <span  class="show"><a  href="houtai.php">管理员<a ></span>
                        <ul class="move_list">
                            <li><a href="adminadd.php">注册管理员</a></li>
                            <li><a href="#">管理员信息</a></li>
                           
                        </ul>
                     </li> </a>
                     
   <a href="#" ><li class="show_list ">
                        <span class="show"><a href="userxinxi.php">用户管理</a></span>
                        <ul class="move_list">
                            <li><a href="#">用户账户管理</a></li>
                           
                        </ul>
                    </li></a>
                   <a href="#" ><li class="show_list ">
                        <span class="show"><a href="equip.php">设备管理</a></span>
                        <ul class="move_list">
                            <li><a href="equip.php">设备内容</a></li>
                            <li><a href="equipadd.php">设备添加</a></li>
                            <li><a href="equip.php">设备预约</a></li>
                            <li><a href="equip_manage.php">预约信息</a></li>
                            
                        </ul>
                    </li></a>
                    <a href="#" ><li class="show_list ">
                        <span class="show"><a href="equip.php">商品管理</a></span>
                        <ul class="move_list">
                           <li><a href="shangpin.php">商品信息</a></li>
                            <li><a href="spadd.php">添加商品</a></li>
                            <li><a href="appoint.php">订单管理</a></li>
                           

                        </ul>
                    </li></a>
    </ul>

 	</div>
 </div>


 <div id="data">
<table width="1050" border="0">
  <tr>
    <td ><div style="width:360px; height:150px; background-color:  #DCF1FA; padding-left:20px;">
    		<p><div style="width:280px; height:80px; float:left; ">
    			Hai,<?php echo $_SESSION['xingming']; ?>
    			<p >账户安全级别：高&nbsp;&nbsp;&nbsp;<a href="#"><img src="himages/identify_personal.png" height="35" width="40" /></a></p>
    		</div></p>
    		<div style="width:80px; height:150px; float:right; ">
    			<img src="himages/tx.gif" width="80"  height="80"/>
    		</div>
    <hr />
    <p>手机：已绑定&nbsp; &nbsp;&nbsp;&nbsp;邮箱：已绑定</p>    
    </div></td>
    <td><div style="width:360px; height:150px; background-color: #DCF1FA; padding-left:20px;">
    <p>账户余额短信条数</p>
    <p>0.00 元 <input type="button" value="充值"  style="background-color:#930; color:#FFF;"/> 0 条 <input type="button" value="购买" style="background-color:#930;color:#FFF;"/> </p>
      <hr  class="hr1"/>	
<a  style="color:#000;"href="#">未支付订单</a>
<a  style="color:#000;" href="#">已支付订单</a>
<a  style="color:#000;"href="#">充值记录</a>
<a  style="color:#000;"href="#">消费记录</a>
<a  style="color:#000;"href="#">提交工单</a>
    </div></td>
    <td><div  style="width:360px; height:150px; background-color: #DCF1FA; padding-left:20px;	">
    <p>管理员交流群：</p>
    <p>QQ群：13124125 &nbsp;&nbsp;&nbsp;微信群：商工简易健身</p>
    <hr />
    您好，在使用中有任何问题，欢迎随时联系！
   </div></td>
  </tr>
  <tr>
    <td colspan="2">
    <div  style="width:730px; height:250px; background-color: #DCF1FA;padding-left:20px;">
    <p>管理业务</p>
    <p>用户市场应用： 2 人 <a  style="color: #06F; float:right; padding-right:60px;"href="#">查看</a></p>
    <hr />
    <p>设备市场应用： 10 台 <a  style="color: #06F;float:right; padding-right:60px;"href="#">查看</a></p>
    <hr />
    <p>业务市场应用： 10 台 <a  style="color: #06F;float:right; padding-right:60px;"href="#">查看</a></p>
    
    </div>
    
    </td>
    
    <td><div  style="width:360px; height:250px; background-color: #DCF1FA;padding-left:20px;">
    <p>管理业务</p>
    <p><a href="#" style="color: #000;">05-10 云托管服务临时维护公告</a></p>
    <p><a href="#" style="color: #000;">05-10 云托管服务临时维护公告</a></p>
	<p><a href="#" style="color: #000;">05-10 云托管服务临时维护公告</a></p>
	<p><a href="#" style="color: #000;">05-10 云托管服务临时维护公告</a></p>
	<p><a href="#" style="color: #000;">05-10 云托管服务临时维护公告</a></p>
	<p><a href="#" style="color: #000;">05-10 云托管服务临时维护公告</a></p>
    
    </div></td>
    
  </tr>
 
  
 
</table>

    
 </div>


</div>







</body>
</html>