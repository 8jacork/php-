
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索</title>
<link rel="stylesheet" href="file:///C|/Users/HP/Desktop/css/search.css"/>
<script type="text/javascript" src="file:///C|/Users/HP/Desktop/js/index.js"></script>
</head>

<body>
<div id="box1">
  <div id="nav">
     <ul id="navu">
      <li>欢迎来到图书角</li><li><a href="file:///C|/Users/HP/Desktop/index.php">首页</a></li>
    </ul>
     <ul id="navul">
     <?php session_start(); if(isset($_SESSION['uname'])){ ?>
		<li style="width:100px;">欢迎，<?=$_SESSION['uname']?></li>
		<li><a href="file:///C|/Users/HP/Desktop/loginout.php">注销</a></li>
	<?php }else{?>
		<li><a href="file:///C|/Users/HP/Desktop/login.php">登录</a></li>
		<li><a href="file:///C|/Users/HP/Desktop/register.php">注册</a></li>
	<?php }?>
    </ul>
       <form method="post" name="search" action="file:///C|/Users/HP/Desktop/search.php">
      <div id="key">
        <table>
          <tr>
            <td><input style="width:600px;height:20px;  border:2px solid #0CF; font-size:14px;"  type="text" name="keywords" /></td>
            <td><input name="sousuo" style="margin:0px; padding:0px;" type="submit" id="imageField" value="搜索" width="40" height="10" /></td>
          <td><a href="file:///C|/Users/HP/Desktop/trolley.php"><input name="dingdan" style="margin:0px; padding:0px;" type="button" id="dingdan" value="订单" width="40" height="10" /></a></td>
            <td><a href="file:///C|/Users/HP/Desktop/order1.php"><input name="dingdanxiangqing" style="margin:0px; padding:0px;" type="button" id="dingdanxiangqing" value="订单详情" width="30" height="10" /></a></td>
          </tr>
        </table>
      </div>
    </form>
   
  </div>
  <div id="navl">
    <div id="navll">
      <ul class="menu">
         <li class="menu1"> <a  href="file:///C|/Users/HP/Desktop/Untitled-1.html"/> 个人成长 </a> </li>
        <li class="menu2"> <a href="file:///C|/Users/HP/Desktop/Untitled-2.html"/> 文学 </a> </li>
        <li class="menu3"> <a href="file:///C|/Users/HP/Desktop/Untitled-3.html"/>经济理财</a> </li>
        <li class="menu4"> <a href="file:///C|/Users/HP/Desktop/Untitled-3.html"/> 精品小说 </a> </li>
        <li class="menu5"> <a href="file:///C|/Users/HP/Desktop/Untitled-3.html"/> 心理 </a> </li>
      </ul>
    </div>
    <div id="head">
      <section id="silder"> <img id="obj" src="file:///C|/Users/HP/Desktop/image/1.jpeg"/> </section>
    </div>
    <div> </div>

    <div id="center">
    <div id="jrtj" style="margin-top:20px;">
      <table width=100% border="0" align="center">
        <tr>
          <td width="43" rowspan="2"><img src="file:///C|/Users/HP/Desktop/image/sou1.jpg" width="43" height="43" /></td>
          <td width="947" style="color:#066; font-size:18px; font-weight:bold;">索如下</td>
        </tr>
        <tr height="2px">
          <td ><hr color="#066" /></td>
        </tr>
      </table>
</div>
<?php
	$keywords=$_POST["keywords"];
    $con=mysqli_connect("localhost","root","","book_shop");	
	mysqli_query($con,"set names utf8");
    $data=mysqli_query($con,"SELECT * FROM sp WHERE name LIKE '%".$keywords."%'");
//$data = mysqli_query($con,"SELECT * FROM product WHERE (name LIKE '%".$keywords."%')");
			$maxrows = mysqli_num_rows($data);
			$page_size = 5;  //每页显示数
			if($maxrows%$page_size == 0)
			{
				$maxpage = (int)($maxrows/$page_size);
			}
			else
			{
				$maxpage = (int)($maxrows/$page_size)+1;
			}
			if(isset($_GET['curpage']))
			{
				$page = $_GET['curpage'];
			}
			else
			{
				$page=1;
			}
			$start = $page_size*($page-1);
			$data=mysqli_query($con,"SELECT * FROM sp WHERE (name LIKE '%".$keywords."%') limit $start,$page_size");
?>

        <div id="tablea">
<?php
			while($row = mysqli_fetch_array($data))
			{	
?>
              <table width="410" height="380" cellpadding="5" style="float:left; margin-bottom:6px;">
  <tr>
    <td width="190" rowspan="6" style="border-right:solid #CCC 1px;"><img height="220px" width="190px" src="image/book/<?php echo $row['img'] ?>" /></td>
    <td width="280" style="font-weight:bold;border-bottom:solid #CCC 1px; font-size:18px;"><?php echo $row["name"] ?></td>
  </tr>
  <tr>
    <td style="font-size:14px;border-bottom:solid #CCC 1px; color:#333;"><?php echo $row["subject"] ?></td>
  </tr>
  <tr>
    <td style="font-size:12px;border-bottom:solid #CCC 1px; color:#666;">作者：<?php echo $row["author"] ?>&nbsp;&nbsp;&nbsp;&nbsp;出版社：<?php echo $row["publisher"] ?></td>
  </tr>
  <tr>
    <td style="font-size:12px;border-bottom:solid #CCC 1px; color:#666;">感情价</td>
  </tr>
  <tr>
    <td style="font-size:24px;border-bottom:solid #CCC 1px; color:#f00;">￥<?php echo $row["price"] ?></td>
  </tr>
  <tr>
    <td><a style="font-size:16px; border-radius:5px; color:#fff;display:block;width:150px;height:30px; text-align:center; line-height:30px; background-color:#F00;" href="file:///C|/Users/HP/Desktop/shop.php?pids=<?php echo $row['pid'] ?>">加入购物车</a></td>
  </tr>
</table>

<?php
		    }
?>      
        </div>
        <div id="pages" style="text-align:center;">
        <table width="80%" height="30px" align="center">
        <tr>
        <td>
<?php
		echo "<p>共 $maxpage 页&nbsp;&nbsp;";
		//设置上一页
		if($page>1){
			$prepage=$page-1;
			echo "<a href='?curpage=$prepage'>上一页</a>&nbsp;&nbsp;";
		}
		echo "<a href='?curpage=1'>首页</a>  &nbsp";
		//设置下一页
		if($page<$maxpage){
			$nextpage=$page+1;
			 echo "<a href='?curpage=$nextpage'>下一页</a>&nbsp;&nbsp;";
		}
		echo "<a href='?curpage=$maxpage'>尾页</a> &nbsp";
		echo "&nbsp;&nbsp;第 $page 页</p>";
	
  ?>
</td></tr></table>
</div>
</form>
</div>
    </div>
    <div id="bottom" style="clear:both;width:1000px; margin:0px auto;">
  <table width="1000"  bgcolor="#EFEFEF" cellspacing="0" cellpadding="5">
    <tr>
      <td style="font-size:16px; font-weight:bold;" colspan="5">品牌店铺</td>
    </tr>
    <tr>
      <td><a href="#">凤凰含章官方旗舰店</a></td>
      <td><a href="#">耕林童书馆</a></td>
      <td><a href="#">新蕾出版社</a></td>
      <td><a href="#">双螺旋童书馆</a></td>
      <td><a href="#">皮皮鲁总动员</a></td>
    </tr>
    <tr>
      <td><a href="#">白马时光</a></td>
      <td><a href="#">爱心树童书</a></td>
      <td><a href="#">蒲公英童书馆</a></td>
      <td><a href="#">歪歪兔童书馆</a></td>
      <td><a href="#">乐乐趣童书馆</a></td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
   
  </table>
</div>
<div id="foot" style="clear:both;">
  <hr color="#FF0000" />
  <div id="foot1" style="clear:both;">
    <table width="650" border="0" align="center">
      <tr>
        <td width="93" height="31" align="center" valign="bottom">正规渠道</td>
        <td width="92" align="center" valign="bottom">放心购物</td>
        <td width="92" align="center" valign="bottom">625城市</td>
        <td width="99" align="center" valign="bottom">上门退换</td>
      </tr>
      <tr>
        <td align="center" valign="top">正品保障</td>
        <td align="center" valign="top">货到付款</td>
        <td align="center" valign="top">次日到达</td>
        <td align="center" valign="top">购物无忧</td>
      </tr>
    </table>
  </div>
  <div id="foot2" style="clear:both; width:1000px; height:180px; margin:5px auto;">
    <table width="1000px" border="0" cellspacing="0" style="text-align:center; margin-top:20px;" cellpadding="5">
      <tr style="font-size:14px;">
        <td>购物指南</td>
        <td>支付方式</td>
        <td>订单服务</td>
        <td>配送方式</td>
        <td>退换货</td>
        <td>商家服务</td>
      </tr>
      <tr>
        <td><a href="#">购物流程</a></td>
        <td><a href="#">货到付款</a></td>
        <td><a href="#">配送服务查询</a></td>
        <td><a href="#">当日递</a></td>
        <td><a href="#">退换货服务查询</a></td>
        <td><a href="#">商家中心</a></td>
      </tr>
      <tr>
        <td><a href="#">发票制度</a></td>
        <td><a href="#">网上支付</a></td>
        <td><a href="#">订单状态说明</a></td>
        <td><a href="#">次日达</a></td>
        <td><a href="#">自助申请退换货</a></td>
        <td><a href="#">运营服务</a></td>
      </tr>
      <tr>
        <td><a href="#">账户管理</a></td>
        <td><a href="#">礼品卡支付</a></td>
        <td><a href="#">自助取消订单</a></td>
        <td><a href="#">订单自取</a></td>
        <td><a href="#">退换货进度查询</a></td>
        <td><a href="#">加入尾品汇</a></td>
      </tr>
      <tr>
        <td><a href="#">会员优惠</a></td>
        <td><a href="#">银行转账</a></td>
        <td><a href="#">自助修改订单</a></td>
        <td><a href="#">验货与验收</a></td>
        <td><a href="#">退款方式和时间</a></td>
        <td><a href="#"></a></td>
      </tr>
    </table>
  </div>
  <div id="foot3" style="clear:both; width:1080px; margin:5px auto; text-align:center;">
  <a href="#">公司简介</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="#">诚聘英才</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="#">网站联盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="#">图书招商</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="#">机构销售</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="#">手机书城</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="#">官方Blog</a>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="#">热词搜索</a></div>
  <div id="foot4" style="clear:both; width:1080px; margin:5px auto; text-align:center; font-size:12px; color:#666;">版权声明：本文为CSDN博主「木子」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
  原文链接：https://blog.csdn.net/qq_1276446004/cbeuhf/details/85225562</div>
</div>
</body>
</html>