<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>购物车</title>
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
</head>

<body>
  <?php
  session_start();
  if(!($_SESSION['name'])){
     echo"<script>alert('登录后，才能添加购物车！');location='login.php'</script>";
  }
  ?>
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
            <div class="contact-btn"> <a href="contact.html" class="top-btn"><?php echo $_SESSION['name'];?> <i class="fal fa-chevron-double-right"></i></a> </div>
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
                  <li><a href="index.php">简介 <i class="fal fa-plus dropdown-icon"></i></a>
                    <ul class="sub-menu">
                      <li><a href="index.php">产品服务 </a></li>
                      <li><a href="index.php">品牌</a></li>
                    </ul>
                    <li><a href="shop.php">商品</a></li>
                  <li><a href="back.php">退出登录</a></li>
                </ul>
              </nav>
            </div>
            <div class="side-menu-icon d-lg-none text-end"> <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a> </div>
            <div class="header-action-btn f-right d-none d-lg-block"> <a href="javascript:void(0)" data-bs-toggle="modal" class="search" data-bs-target="#search-modal"><i class="far fa-search"></i></a> <a href="cart.html"><i class="fas fa-shopping-basket"></i> <span>99</span> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- top-nav-end --> 

<!-- sidebar area start -->
<div class="sidebar__area">
  <div class="sidebar__wrapper">
    <div class="sidebar__close">
      <button class="sidebar__close-btn" id="sidebar__close-btn"> <i class="fal fa-times"></i> </button>
    </div>
    <div class="sidebar__content">
      <div class="sidebar__logo mb-40"> <a href="index.html"> <img src="assets/img/logo/logo.png" alt="logo"> </a> </div>
      <div class="sidebar__search mb-25">
        <form action="#">
          <input type="text" placeholder="What are you searching for?">
          <button type="submit" ><i class="far fa-search"></i></button>
        </form>
      </div>
      <div class="mobile-menu fix"></div>
      <div class="sidebar__contact mt-30 mb-20">
        <h4>Contact Info</h4>
        <ul>
          <li class="d-flex align-items-center">
            <div class="sidebar__contact-icon mr-15"> <i class="fal fa-map-marker-alt"></i> </div>
            <div class="sidebar__contact-text"> <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A, Mirnada City Tower, NYC</a> </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="sidebar__contact-icon mr-15"> <i class="far fa-phone"></i> </div>
            <div class="sidebar__contact-text"> <a href="tel:+012-345-6789">088889797697</a> </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="sidebar__contact-icon mr-15"> <i class="fal fa-envelope"></i> </div>
            <div class="sidebar__contact-text"> <a href="/cdn-cgi/l/email-protection#f784828787988583b7909a969e9bd994989a"><span class="__cf_email__" data-cfemail="f685838686998482b69b979f9ad895999b">[email&#160;protected]</span></a> </div>
          </li>
        </ul>
      </div>
      <div class="sidebar__social">
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- sidebar area end -->

<div class="body-overlay"></div>
<!-- body-overlay -->

<main> 
  
  <!-- page__title-start -->
  <div class="page__title align-items-center" data-background="assets/img/bg/breadcam-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="page__title-content text-center">
            <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">购物车</h3>
            <div class="page_title__bread-crumb">
              <nav>
                <nav class="breadcrumb-trail breadcrumbs">
                  <ul class="breadcrumb-menu">
                    <li class="breadcrumb-trail"> <a href="index.html"><span>Shop</span></a> </li>
                    <li class="trail-item"> <span>Car</span> </li>
                  </ul>
                </nav>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
	  
  </div>
	<div align="center" style="margin-top: 20px; margin-bottom: 80xp;"	>
	
	<?php
	error_reporting(E_ALL&~E_NOTICE);
	include('conn.php');
	session_start();
    $uid=$_SESSION['name'];
	$result=mysqli_query($conn,"select * from trolley where uid=".$uid);
	echo"<table id='t1' border='1px'  width='1400'  
	cellpadding='0'  cellspacing='0' align='center' >
	  <tr bgcolor='#CCCCCC' height='40' align='center'  >
    
	  <td class='m1' width='200' border='1px'>商品名称</td>
	  <td class='m1' width='100' >商品价格</td>
	  <td class='m1' width='300' >商品简介</td>
	  <td class='m1' width='200' >商品图片</td>
	  <td class='m1' width='200' >商品规格</td>
	  <td class='m1' >购买时间</td>
	   <td class='m1'>操作</td>
	  </tr>";
      
	   while($rows=mysqli_fetch_row($result)){
		echo "<tr  align='center'>";
		   for($i=1;$i<4;$i++){
			   echo "<td height='25'  align='center'>";
			   echo $rows[$i];
			   
			   echo "</td>";
		   }
		   echo "<td height='50'  align='center' >";
		   echo "<img src='img/".$rows[4]."' height='100' width='100' />";
		   echo "</td>";
		   for($i=5;$i<7;$i++){
			   echo "<td height='25'  align='center'>";
			   echo $rows[$i];
			   
			   echo "</td>";
		   }
		   echo "<td height='25' class='m1'><a href=eout.php?action=del&eid=".$rows[0]." onclick='return del();'>删除</a></td>";
		   echo "</tr>";
	   }
	?>
	
	</table>
	</div>
		
	
	
	</header>
	
	
	
	
	
	<footer>
  <div class="footer-area" data-background="assets/img/bg/footer-bg.jpg">
    <div class="footer_top-info">
      <div class="container custome-container">
        <div class="news-letter-area pt-100 pb-20">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h5 class="news-letter-title mb-30">订阅</h5>
            </div>
            <div class="col-lg-7">
              <form action="#">
                <div class="news_letter-info">
                  <div class="news_letter_search mb-30">
                    <input type="text" placeholder="Email Address |">
                  </div>
                  <div class="subscrive-button mb-30">
                    <button type="submit" class="tp-btn-round-newsletter">现在订阅 <i class="fal fa-chevron-double-right"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-content pt-80 pb-45">
      <div class="container custome-container">
        <div class="row g-0">
          <div class="col-lg-4 col-md-8 col-sm-8">
            <div class="footer-widget fotter-col2 wow fadeInUp mb-40" data-wow-delay=".3s">
              <div class="footer-logo mb-25"> <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> </div>
              <p class="pb-30">很不错</p>
              <div class="footer-social"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-4">
            <div class="footer-widget wow fadeInUp mb-40" data-wow-delay=".6s">
              <h5 class="fotter_widget-title mb-35">项目</h5>
              <ul class="fotter_project_lists">
                <li><a href="protfolio-details.html">12月 - 2020</a></li>
                <li><a href="protfolio-details.html">3月 - 2020</a></li>
                <li><a href="protfolio-details.html">7月 - 2020</a></li>
                <li><a href="protfolio-details.html">11月 - 2020</a></li>
                <li><a href="protfolio-details.html">7月 - 2021</a></li>
                <li><a href="protfolio-details.html">5月 - 2021</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-widget wow fadeInUp mb-40" data-wow-delay=".9s">
              <h5 class="fotter_widget-title mb-35">联系方式</h5>
              <div class="footer__info">
                <ul>
                  <li class="d-flex align-items-start pt-5 mb-20">
                    <div class="footer__info-icon mr-20"> <i class="fas fa-map-marker-alt"></i> </div>
                    <div class="footer__info-text"> <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">25/A <br>
                      新的</a> </div>
                  </li>
                  <li class="d-flex align-items-start mb-20">
                    <div class="footer__info-icon mr-20"> <i class="far fa-envelope-open"></i> </div>
                    <div class="footer__info-text"> <span>Email:</span> <a href="/cdn-cgi/l/email-protection#e1929491918e9395a1868c80888dcf828e8c"><span class="__cf_email__" data-cfemail="55262025253a2721153238343c397b363a38">[email&#160;protected]</span></a> </div>
                  </li>
                  <li class="d-flex align-items-start mb-20">
                    <div class="footer__info-icon mr-20"> <i class="fas fa-phone-alt"></i> </div>
                    <div class="footer__info-text"> <span>手机号:</span> <a href="tel:+012-345-6789">+012 (344) 678 99</a> </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-widget wow fadeInUp mb-40" data-wow-delay="1.3s">
              <h5 class="fotter_widget-title mb-35">最近</h5>
              <div class="footer__blog">
                <ul>
                  <li class="mb-25 pt-5">
                    <div class="footer__blog-sm d-flex align-items-center">
                      <div class="footer__blog-sm-thumb mr-25"> <a href="blog-details.html"> <img src="assets/img/blog/footer-blog.jpg" alt=""> </a> </div>
                      <div class="footer__blog-sm-content">
                        <h6 class="footer__blog-sm-title"> <a href="blog-details.html">Malesuada bagittis introc dolor curabitur</a> </h6>
                        <div class="footer__blog-sm-meta">
                          <p><span>25 nov 2021</span></p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="footer__blog-sm d-flex align-items-center">
                      <div class="footer__blog-sm-thumb mr-20"> <a href="blog-details.html"> <img src="assets/img/blog/footer-blog2.jpg" alt=""> </a> </div>
                      <div class="footer__blog-sm-content">
                        <h6 class="footer__blog-sm-title"> <a href="blog-details.html">Introc bagittis curabitur malesuada dolor</a> </h6>
                        <div class="footer__blog-sm-meta">
                          <p>25 nov 2021</p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right-area">
      <div class="container custome-container">
        <div class="copyright-info">
          <div class="owner_name">
            <p>Copyright <a href="#">简易健身</a> ©2022. All Rights By <a href="http://www.bootstrapmb.com/">bootstrapmb</a></p>
          </div>
          <div class="copy-right_useful_link"> <a href="contact.html">期限 & 条款</a> <a href="protfolio-details.html">. 服务</a> <a href="contact.html">. Privacy</a> </div>
        </div>
      </div>
    </div>
    <div class="footer-shape fix"> <img src="assets/img/bg/footer-shape.png" alt=""> </div>
    <div class="footer-shape-two fix"> <img src="assets/img/bg/footer-shape1.png" alt=""> </div>
    <div class="footer-curve fix"> <img src="assets/img/bg/footer-curve.png" alt=""> </div>
  </div>
</footer>
<!-- footer-area-end --> 

<!-- modal-search-start -->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <input type="text" placeholder="Search here...">
        <button> <i class="fa fa-search"></i> </button>
      </form>
    </div>
  </div>
</div>
<!-- modal-search-end --> 

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

	
</body>
</html>