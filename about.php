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
            <div class="contact-btn"> <a href="contact.html" class="top-btn">加入我们 <i class="fal fa-chevron-double-right"></i></a> </div>
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
            <div class="header-action-btn f-right d-none d-lg-block"> <a href="javascript:void(0)" data-bs-toggle="modal" class="search" data-bs-target="#search-modal"><i class="far fa-search"></i></a> <a href="car.php"><i class="fas fa-shopping-basket"></i> <span>0</span> </a> </div>
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
<!-- body-overlay end -->
<main> 
  
  <!-- page__title-start -->
  <div class="page__title align-items-center" data-background="assets/img/bg/breadcam-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="page__title-content text-center">
            <h3 class="breadcrumb-title breadcrumb-title-sd mb-15">关于我们</h3>
            <div class="page_title__bread-crumb">
              <nav>
                <nav class="breadcrumb-trail breadcrumbs">
                  <ul class="breadcrumb-menu">
                    <li class="breadcrumb-trail"> <a href="index.html"><span>首页</span></a> </li>
                    <li class="trail-item"> <span>关于</span> </li>
                  </ul>
                </nav>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page__title-end --> 
  
  <!-- tp-about-area-start -->
  <div class="tp-about-area pb-95 pt-80">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6">
          <div class="about-image mb-30 wow fadeInUp" data-wow-delay=".4s" > <img src="assets/img/about/about-1.jpg" alt="" class="img-fluid">
            <div class="about-shape"> <img src="assets/img/about/about-shape.png" alt="">
              <div class="content">
                <h4>25年</h4>
                <span>工作经历</span> </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6 ">
          <div class="about-info wow fadeInUp" data-wow-delay=".7s">
            <div class="section-wrap"> <span class="tpsub-title mb-15">关于我们</span>
              <h3 class="section-title mb-20">让自己比最好的自己更强大</h3>
              <span class="section-border mb-20"><i class="far fa-circle"></i></span>
              <p class="section-description mb-40">明日复明日，明日何其多。</p>
              <p class="section-description mb-40">我生待明日，万事成蹉跎。</p>
              <p class="section-description mb-40">世人苦被明日累，春去秋来老将至。</p>
            </div>
            <blockquote class="ab-bquote"> <span>如果你明天不一样，今天你就要无比的努力。</span>
              <div class="quote"> <img src="assets/img/about/quote.png" alt=""> </div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="about-bg-shape"> <img src="assets/img/about/about-bg-png.png" alt="" class="img-fluid"> </div>
  </div>
  <!-- tp-about-area-end --> 
  
  
</main>

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
<script src="assets/js/ajax-form.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/isotope.pkgd.min.js"></script> 
<script src="assets/js/imagesloaded.pkgd.min.js"></script> 
<script src="assets/js/main.js"></script>
</body>
</html>
