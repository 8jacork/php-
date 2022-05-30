<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>健身期待你的加入</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<!-- CSS here -->
<link rel="stylesheet" href="assets/css/preloader.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/meanmenu.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.css">
<link rel="stylesheet" href="assets/css/ui-range-slider.css">
<link rel="stylesheet" href="assets/css/backToTop.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
<link rel="stylesheet" href="assets/flatiocn/flaticon.css">
<link rel="stylesheet" href="assets/css/default.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php
	session_start();
  error_reporting(0);
	?>
<!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]--> 

<!-- Add your site or application content here --> 

<!-- preloader start -->
<div id="preloader">
  <div class="preloader"> <span></span> <span></span> </div>
</div>
<!-- preloader end --> 

<!-- back to top start -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- back to top end --> 

<!-- top-nav-start -->
<header class="top-nav">
  <div class="top-address d-none d-lg-block">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xxl-7 col-xl-5 col-lg-4 col-md-3">
          <div class="top-logo"> <a href="#"><img src="assets/img/logo/logo.png" alt=""></a> </div>
        </div>
        <div class="col-xxl-5 col-xl-7 col-lg-8 col-md-9">
          <div class="topbar-info">
            <div class="contact-item"> <i class="flaticon-pin"></i>
              <div class="content">
                <p>我们的位置</p>
                <a href="#" target="blank">商丘工学院</a> </div>
            </div>
            <div class="contact-item"> <i class="flaticon-email"></i>
              <div class="content">
                <p>在线支持</p>
                <a href="/cdn-cgi/l/email-protection#97fef9f1f8d7f1f2e3f8eff2a5b9f4f8fa"><span class="__cf_email__" data-cfemail="dbb2b5bdb49bbdbeafb4a3bee9f5b8b4b6">[email&#160;protected]</span></a> </div>
            </div>
            <div class="contact-item"> <i class="flaticon-contact"></i>
              <div class="content">
                <p>免费咨询</p>
                <a href="tel:02-325-562-3652">88-891210-122</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-area" id="header-sticky">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-xxl-12 col-xl-12 col-lg-12">
          <div class="topcontact-btn f-right d-none d-lg-block">
            <div class="contact-btn"> <a href="login.php" class="top-btn"><?php if($_SESSION['name']){echo($_SESSION['name']);}else{echo("欢迎您加入");} 
				?><i class="fal fa-chevron-double-right"></i></a> </div>
          </div>
          <div class="menu-content">
            <div class="top-logo d-lg-none"> <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> </div>
            <div class="main-menu">
              <nav id="mobile-menu">
                <ul>
                  <li><a href="index.php" class="active">首页 </a></li>
                  <li><a href="about.php">关于 </a></li>
                  <li><a href="index.php">个性化 <i class="fal fa-plus dropdown-icon"></i></a>
                    <ul class="sub-menu">
                      <li><a href="index.php">会员</a></li>
                      <li><a href="index.php">个人定制</a></li>
                    </ul>
                  </li>
                  <li><a href="car.php">购物车 <i class="fal fa-plus dropdown-icon"></i></a>
                  <li><a href="shop.php">商品<i class="fal fa-plus dropdown-icon"></i></a> </li> 
                  </li>
                  <li><a href="protfolio.php">预约设备</a></li>
                   <li><?php if($_SESSION['name']){echo("<a href='back.php'>退出系统</a>");}else{echo("<a href='protfolio.php'>简介</a>");};?>
                   </li>
                </ul>
              </nav>
            </div>
            <div class="side-menu-icon d-lg-none text-end"> <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a> </div>
            <div class="header-action-btn f-right d-none d-lg-block"> <a href="javascript:void(0)" data-bs-toggle="modal" class="search" data-bs-target="#search-modal"><i class="far fa-search"></i></a> <a href="car.php"><i class="fas fa-shopping-basket"></i> <span>99</span> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- top-nav-end --> 


<div class="body-overlay"></div>
<!-- body-overlay end -->

<main> 
  
  <!-- page__title-start -->
  <div class="page__title align-items-center" data-background="assets/img/bg/breadcam-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="page__title-content text-center">
            <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">我们的产品</h3>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page__title-end --> 
  
  <!-- product_area-start -->
  <div class="product_area pt-120 pb-110">
    <div class="container custome-container">
      <div class="row">
        <div class="col-lg-4">
          <div class="product_sidebar">
            <div class="product_sidebar-widget mb-30">
              <div class="product_sidebar-inner">
                <div class="sidebar__search-2">
                  <form action="#">
                    <div class="sidebar__search-input-2">
                      <input type="text" placeholder="搜索...">
                      <a href="search.php"><i class="far fa-search"></i></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="product_sidebar-widget mb-30">
              <h5 class="classes_widget_title mb-25"><i class="far fa-circle"></i> 种类</h5>
              <ul class="product-catagory_list">
                <li> <a href="#">心脏治疗</a> <a href="#">(07)</a> </li>
                <li> <a href="#">美容水疗</a> <a href="#">(12)</a> </li>
                <li> <a href="#">徒手训练</a> <a href="#">(13)</a> </li>
                <li> <a href="#">肌肉锻炼</a> <a href="#">(10)</a> </li>
                <li> <a href="#">身体补充剂</a> <a href="#">(15)</a> </li>
                <li> <a href="#">拳击与健身</a> <a href="#">(08)</a> </li>
              </ul>
            </div>
            <div class="product_sidebar-widget mb-30">
              <h5 class="classes_widget_title mb-25"><i class="far fa-circle"></i> 价格选择</h5>
              <div class="price__slider">
                <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                  <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
                  <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                <div>
                  <form action="#">
                    <input type="text" id="amount" readonly="">
                    <button type="submit" class="tp-btn-square-lg">选择 <i class="fal fa-chevron-double-right"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="product_sidebar-widget mb-30">
              <h5 class="classes_widget_title mb-25"><i class="far fa-circle"></i> 产品标签</h5>
              <div class="product_sidebar-tag"> <a href="#">装饰</a> <a href="#">拉伸</a> <a href="#">时髦</a> <a href="#">艺术</a> <a href="#">健康</a>  <a href="#">身体</a> <a href="#">面部</a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          
          <div class="product">
          <form method="post" id="productform" name="productform" action="">
<?php
$con=mysqli_connect("localhost","root","","admindatabase");	
	mysqli_query($con,"set names utf8");
			$data = mysqli_query($con,"select * from sp");
			$maxrows = mysqli_num_rows($data);
			$page_size =6;  //每页显示数
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
			$data=mysqli_query($con,"select * from sp limit $start,$page_size");
?>
<div id="tablea">
<?php
			while($row = mysqli_fetch_array($data))
			{	
?>
              <table width="700" height="380" cellpadding="5" style="float:left; margin-bottom:6px;">
  <tr>
    <td width="190" rowspan="6" style="border-right:solid #CCC 1px;"><img height="220px" width="190px"  src="img/<?php echo $row['tupian'] ?>" /></td>
    <td width="280" style="font-weight:bold;border-bottom:solid #CCC 1px; font-size:18px;"><?php echo $row["name"] ?></td>
  </tr>
  
  <tr>
    <td style="font-size:12px;border-bottom:solid #CCC 1px; color:#666;">介绍：<?php echo $row["news"] ?></td>
  </tr>
  <tr>
    <td style="font-size:12px;border-bottom:solid #CCC 1px; color:#666;">规格：<?php echo $row["size"] ?></td>
  </tr>
  <tr>
    <td style="font-size:24px;border-bottom:solid #CCC 1px; color:#f00;">￥<?php echo $row["price"] ?></td>
  </tr>
  <tr>
    <td><a style="font-size:16px; border-radius:5px; color:#fff;display:block;width:150px;height:30px; text-align:center; line-height:30px; background-color:#F00;" 
    href="shop_ok.php?pids=<?php echo $row['id'] ?>">购买</a></td>
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
		echo "<a href='?curpage=1'>首页</a>  &nbsp";
		//设置上一页
		if($page>1){
			$prepage=$page-1;
			echo "<a href='?curpage=$prepage'>上一页</a>&nbsp;&nbsp;";
		}
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

    </div>
    
</div>
</form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- product_area-end --> 
  
</main>




<!-- JS here --> 
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script> 
<script src="assets/js/vendor/waypoints.min.js"></script> 
<script src="assets/js/bootstrap.bundle.min.js"></script> 
<script src="assets/js/meanmenu.js"></script> 
<script src="assets/js/swiper-bundle.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/magnific-popup.min.js"></script> 
<script src="assets/js/parallax.min.js"></script> 
<script src="assets/js/backToTop.js"></script> 
<script src="assets/js/nice-select.min.js"></script> 
<script src="assets/js/counterup.min.js"></script> 
<script src="assets/js/ui-slider-range.js"></script> 
<script src="assets/js/ajax-form.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/isotope.pkgd.min.js"></script> 
<script src="assets/js/imagesloaded.pkgd.min.js"></script> 
<script src="assets/js/main.js"></script>
</body>
</html>
