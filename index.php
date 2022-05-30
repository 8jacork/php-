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
  error_reporting(0);  ?>
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
            <div class="contact-btn"> <a href="login.php" class="top-btn"><?php 
				if($_SESSION['name']){
					echo($_SESSION['name']);
				}else{
					echo("欢迎加入我们");
				}
				?>
				<i class="fal fa-chevron-double-right"></i></a> </div>
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
<!-- sidebar area end -->

<main> 
  <!-- hero-area-start  -->
  <div class="hero-area fix">
    <div class="hero-slider slider__active swiper-container swiper-container-fade">
      <div class="swiper-wrapper p-relative">
        <div class="hero-pagination"></div>
        <div class="item-slider swiper-slide">
          <div class="slide-bg" data-background="assets/img/bg/hero-1.jpg"></div>
          <div class="container">
            <div class="row ">
              <div class="col-lg-12">
                <div class="slider-all-text"> <span data-animation="fadeInUp" data-delay=".2s">健身房</span>
                  <h2 class="hero-title" data-animation="fadeInUp" data-delay=".4s">加入我们</h2>
                  <p class="description mt-10 mb-50" data-animation="fadeInUp" data-delay=".6s">一起进入健身天堂</p>
                  <div class="play-option" data-animation="fadeInUp" data-delay=".8s"> <a href="about.html" class="tp-btn">更多<i class="fal fa-chevron-double-right"></i></a> <a class="video-play-button hero-play popup-video ml-30" href="https://www.youtube.com/watch?v=ZoZSp-wy8h8"> <i class="fas fa-play"></i> </a> </div>
                </div>
                <div class="hero-social-icon"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item-slider swiper-slide">
          <div class="slide-bg" data-background="assets/img/bg/hero-2.jpg"></div>
          <div class="container">
            <div class="row ">
              <div class="col-lg-12">
                <div class="slider-all-text"> <span data-animation="fadeInUp" data-delay=".2s">健身房</span>
                  <h2 class="hero-title" data-animation="fadeInUp" data-delay=".4s">加入我们</h2>
                  <p class="description mt-10 mb-50" data-animation="fadeInUp" data-delay=".6s">一起进入健身天堂</p>
                  <div class="play-option" data-animation="fadeInUp" data-delay=".8s"> <a href="about.html" class="tp-btn">更多 <i class="fal fa-chevron-double-right"></i></a> <a class="video-play-button hero-play popup-video ml-30" href="https://www.youtube.com/watch?v=ZoZSp-wy8h8"> <i class="fas fa-play"></i> </a> </div>
                </div>
                <div class="hero-social-icon"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item-slider swiper-slide">
          <div class="slide-bg" data-background="assets/img/bg/hero-3.jpg"></div>
          <div class="container">
            <div class="row ">
              <div class="col-lg-12">
                <div class="slider-all-text"> <span data-animation="fadeInUp" data-delay=".2s">健身房</span>
                  <h2 class="hero-title" data-animation="fadeInUp" data-delay=".4s">加入我们</h2>
                  <p class="description mt-10 mb-50" data-animation="fadeInUp" data-delay=".6s">一起进入健身天堂</p>
                  <div class="play-option" data-animation="fadeInUp" data-delay=".8s"> <a href="about.html" class="tp-btn">更多 <i class="fal fa-chevron-double-right"></i></a> <a class="video-play-button hero-play popup-video ml-30" href="https://www.youtube.com/watch?v=ZoZSp-wy8h8"> <i class="fas fa-play"></i> </a> </div>
                </div>
                <div class="hero-social-icon"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- hero-area-end --> 
  
  <!-- tpfeatures-lists-start -->
  <div class="tpfeatures-lists">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-3 col-md-3">
          <div class="tp-features-item tp-features-item-border text-center mb-30 wow fadeInUp"  data-wow-delay=".2s">
            <div class="tpfeatures-icon mb-25"> <i class="flaticon-muscle"></i> </div>
            <span>专属服务</span> </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="tp-features-item tp-features-item-border item-active text-center mb-30 wow fadeInUp" data-wow-delay=".5s">
            <div class="tpfeatures-icon mb-25"> <i class="flaticon-customer"></i> </div>
            <span>合格教练</span> </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="tp-features-item tp-features-item-border text-center mb-30 wow fadeInUp" data-wow-delay=".8s">
            <div class="tpfeatures-icon mb-25"> <i class="flaticon-apple"></i> </div>
            <span>有机蛋白质</span> </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="tp-features-item text-center mb-30 wow fadeInUp" data-wow-delay=".10s">
            <div class="tpfeatures-icon mb-25"> <i class="flaticon-lawn-mower"></i> </div>
            <span>奖励计划</span> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- tpfeatures-lists-end --> 
  
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
  
  <!-- services-list-start -->
  <div class="services-list mt-100" data-background="assets/img/services/services-bg.jpg">
    <div class="container custome-container">
      <div class="section-wrap-two text-center wow fadeInUp" data-wow-delay=".2s"> <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>我们的服务<i class="far fa-circle"></i></span>
        <h3 class="section-title-two  mb-30 white-color">让你更好地运动，感觉更健康的解决方案</h3>
      </div>
      <div class="row mt-60">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay=".6s">
            <div class="sv-inner sv-inner2">
              <div class="services-icon"> <i class="flaticon-dumbbell"></i> </div>
            </div>
            <h3 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">举重</a></h3>
            <a href="protfolio-details.html" class="services-item-btn">更多 <i class="fal fa-chevron-double-right"></i></a> </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay=".9s">
            <div class="sv-inner sv-inner2">
              <div class="services-icon"> <i class="flaticon-muscle"></i> </div>
            </div>
            <h3 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">瑜伽</a></h3>
            <a href="protfolio-details.html" class="services-item-btn">更多 <i class="fal fa-chevron-double-right"></i></a> </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay="1s">
            <div class="sv-inner sv-inner2">
              <div class="services-icon"> <i class="flaticon-customer"></i> </div>
            </div>
            <h3 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">健身工具</a></h3>
            <a href="protfolio-details.html" class="services-item-btn">更多 <i class="fal fa-chevron-double-right"></i></a> </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay="1.4s">
            <div class="sv-inner sv-inner2">
              <div class="services-icon"> <i class="flaticon-lawn-mower"></i> </div>
            </div>
            <h3 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">身体塑性</a></h3>
            <a href="protfolio-details.html" class="services-item-btn">更多 <i class="fal fa-chevron-double-right"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- services-list-end --> 
  
  <!-- tpcounter-area -->
  <div class="tpcounter-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="counter-lists">
            <div class="row g-0">
              <div class="col-lg-3 col-md-6">
                <div class="counter-item counter-item-border">
                  <div class="counter-number">
                    <h4><span class="counter">20</span></h4>
                  </div>
                  <div class="counterinfo"> <i class="flaticon-support"></i> <span>专业教练</span> </div>
                  <div class="counter-shape"> <img src="assets/img/bg/counter-shape.png" alt=""> </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-item counter-item-border">
                  <div class="counter-number">
                    <h4><span class="counter">430</span></h4>
                  </div>
                  <div class="counterinfo"> <i class="flaticon-feedback"></i> <span>客户反馈</span> </div>
                  <div class="counter-shape"> <img src="assets/img/bg/counter-shape.png" alt=""> </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-item counter-item-border">
                  <div class="counter-number">
                    <h4><span class="counter">230</span></h4>
                  </div>
                  <div class="counterinfo"> <i class="flaticon-kettlebells"></i> <span>健身器材</span> </div>
                  <div class="counter-shape"> <img src="assets/img/bg/counter-shape.png" alt=""> </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                  <div class="counter-number">
                    <h4><span class="counter">100</span></h4>
                  </div>
                  <div class="counterinfo"> <i class="flaticon-medal"></i> <span>特色健身</span> </div>
                  <div class="counter-shape"> <img src="assets/img/bg/counter-shape.png" alt=""> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- tpcounter-area-end --> 
  
  <!-- fitness-gallery-area-start -->
  <div class="fitness-gallery-area">
    <div class="container">
      <div class="wow fadeInUp" data-wow-delay=".2s">
        <div class="row justify-content-center align-items-center">
          <div class="col-xl-6 col-lg-7">
            <div class="section-wrap"> <span class="tpsub-title mb-15">健身馆</span>
              <h4 class="section-title mb-20">让你更好地运动，获得更健康的解决方案</h4>
              <span class="section-border mb-30"><i class="far fa-circle"></i></span> </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="fitness_button"> <a href="#" class="tp-btn-round">全部展示 <i class="fal fa-chevron-double-right"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fitnes-gallery-shape"> <img src="assets/img/protfolio/gallery-shape.png" class="img-fluid" alt=""> </div>
    <div class="fitnes-gallery-shape-2"> <img src="assets/img/protfolio/gallery-shape-2.png" class="img-fluid" alt=""> </div>
    <div class="gallery-items fix">
      <div class="container-fluid">
        <div class="row mt-55 gx-0">
          <div class="col-xxl-12 gx-0">
            <div class="fitness-slider_active owl-carousel">
              <div class="fitness-item position-relative  wow flipInY" data-wow-delay=".0s"> <a href="protfolio-details.html"><img src="assets/img/protfolio/g-1.jpg" alt="" class="img-fluid"></a> </div>
              <div class="fitness-item position-relative wow flipInY" data-wow-delay=".0s"> <a href="protfolio-details.html"><img src="assets/img/protfolio/g-3.jpg" alt="" class="img-fluid"></a> </div>
              <div class="fitness-item position-relative wow flipInY" data-wow-delay=".3s"> <a href="protfolio-details.html"><img src="assets/img/protfolio/g-4.jpg" alt="" class="img-fluid"></a> </div>
              <div class="fitness-item position-relative wow flipInY" data-wow-delay=".4s"> <a href="protfolio-details.html"><img src="assets/img/protfolio/g-5.jpg" alt="" class="img-fluid"></a> </div>
              <div class="fitness-item position-relative wow flipInY" data-wow-delay=".5s"> <a href="protfolio-details.html"><img src="assets/img/protfolio/g-6.jpg" alt="" class="img-fluid"></a> </div>
              <div class="fitness-item position-relative wow flipInY" data-wow-delay=".6s"> <a href="protfolio-details.html"><img src="assets/img/protfolio/g-7.jpg" alt="" class="img-fluid"></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- fitness-gallery-area-end --> 
  <!-- priceing-area-start -->
  <div class="priceing-area pt-115 pb-90">
    <div class="container custome-container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-wrap-two text-center wow fadeInUp" data-wow-delay=".3s"> <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>定价方案<i class="far fa-circle"></i></span>
            <h3 class="section-title-two  mb-30">组合定价套餐，选择最佳方案</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="tp_priceing">
      <div class="container custome-container mt-35">
        <div class="row justify-content-center">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="price_item mb-30 wow fadeInUp" data-wow-delay=".6s">
                <div class="priceing_image mb-10"> <img src="assets/img/priceing/price1.jpg" alt="" class="img-fluid"> </div>
                <div class="price_info pt-80" data-background="assets/img/priceing/price-bg.png">
                  <div class="price text-center">
                    <div class="inner">
                      <h5>35￥</h5>
                      <p>月</p>
                    </div>
                  </div>
                  <h5 class="price_type mb-20 text-center">标准会员</h5>
                  <div class="tp_pricing-list pb-45">
                    <ul>
                      <li><i class="fal fa-check"></i> 私人教练</li>
                        <li><i class="fal fa-check"></i>个性服务</li>
                      <li><i class="fal fa-check"></i>使用全部器材</li>
                      <li><i class="fal fa-check"></i> 8小时服务</li>
                    </ul>
                  </div>
                  <div class="price-btn text-center pb-30"> <a href="#" class="tp-btn-round">现在加入 <i class="fal fa-chevron-double-right"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="price_item mb-30 wow fadeInUp" data-wow-delay=".9s">
                <div class="priceing_image priceing_image-active mb-10 "> <img src="assets/img/priceing/price2.jpg" alt="" class="img-fluid">
                  <div class="price__popular"> <span>受欢迎的</span> </div>
                </div>
                <div class="price_info pt-80" data-background="assets/img/priceing/price-bg2.png">
                  <div class="price price-active text-center">
                    <div class="inner">
                      <h5>40￥</h5>
                      <p>月</p>
                    </div>
                  </div>
                  <h5 class="price_type price_type-active mb-20 text-center">黄金会员</h5>
                  <div class="tp_pricing-list tp_pricing-list-active pb-45">
                    <ul>
                      <li><i class="fal fa-check"></i> 私人教练</li>
                      <li><i class="fal fa-check"></i>个性服务</li>
                      <li><i class="fal fa-check"></i> 使用全部器材</li>
                      <li><i class="fal fa-check"></i> 10小时服务</li>
                    </ul>
                  </div>
                  <div class="price-btn text-center pb-30"> <a href="#" class="tp-btn-round servic_btn-active">现在加入 <i class="fal fa-chevron-double-right"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="price_item mb-30 wow fadeInUp" data-wow-delay="1.2s">
                <div class="priceing_image mb-10"> <img src="assets/img/priceing/price3.jpg" alt="" class="img-fluid"> </div>
                <div class="price_info pt-80" data-background="assets/img/priceing/price-bg.png">
                  <div class="price text-center">
                    <div class="inner">
                      <h5>$45</h5>
                      <p>Monthly</p>
                    </div>
                  </div>
                  <h5 class="price_type mb-20 text-center">铂金会员</h5>
                  <div class="tp_pricing-list pb-45">
                    <ul>
                      <li><i class="fal fa-check"></i> 专门教练</li>
                      <li><i class="fal fa-check"></i> 定制服务</li>
                      <li><i class="fal fa-check"></i> 使用全部器材</li>
                      <li><i class="fal fa-check"></i> 24小时服务</li>
                    </ul>
                  </div>
                  <div class="price-btn text-center pb-30"> <a href="#" class="tp-btn-round">现在加入 <i class="fal fa-chevron-double-right"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pricing-shape fix"> <img src="assets/img/priceing/price-shape1.png" alt=""> </div>
    <div class="pricing-shape-two fix"> <img src="assets/img/priceing/price-shape2.png" alt=""> </div>
    <div class="pricing-shape-three fix"> <img src="assets/img/priceing/price-shape3.png" alt=""> </div>
  </div>
  <!-- priceing-area-end --> 
  
  <!-- priceing-area-start -->
  <div class="product-area pt-115 pb-80" data-background="assets/img/product/product-bg.jpg">
    <div class="container custome-container">
      <div class="row justify-content-center align-items-center">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="section-wrap"> <span class="tpsub-title mb-15">我们的商品</span>
              <h3 class="section-title mb-20">购买我们的在线健身房商店的优质产品</h3>
              <span class="section-border mb-30"><i class="far fa-circle"></i></span> </div>
          </div>
          <div class="col-lg-6">
            <div class="shop_button text-lg-end"><a href="shop.php" class="tp-btn-round">全部产品 <i class="fal fa-chevron-double-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container custome-container mt-30">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="product-item mb-30 wow fadeInUp" data-wow-delay=".3s">
            <div class="prouct-wrapper">
              <div class="product_thum product_thum-new mb-30">
                <div class="fix"> <a href="shop-details.html"><img src="assets/img/product/product-1.jpg" class="img-fluid" alt="product-img"></a> </div>
                <div class="sale-tag"> <span class="new">new</span> </div>
                <div class="product-item-action"> <a href=""><i class="far fa-heart"></i></a> <a href="assets/img/product/product-1.jpg" class="image-popups"><i class="fas fa-compress"></i></a> <a href=""><i class="far fa-exchange"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-info">
                  <h5 class="product_name"><a href="shop-details.html">拳击手套</a></h5>
                  <span class="product_price">100.00￥</span> </div>
                <div class="product-button"> <a href="shop-details.html" class="tp-btn-round-product">现在购买 <i class="fal fa-chevron-double-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item mb-30 wow fadeInUp" data-wow-delay=".6s">
            <div class="prouct-wrapper">
              <div class="product_thum mb-30">
                <div class="fix"><a href="shop-details.html"><img src="assets/img/product/product-2.jpg" class="img-fluid" alt="product-img"></a></div>
                <div class="product-item-action"> <a href=""><i class="far fa-heart"></i></a> <a href="assets/img/product/product-2.jpg" class="image-popups"><i class="fas fa-compress"></i></a> <a href=""><i class="far fa-exchange"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-info">
                  <h5 class="product_name"><a href="shop-details.html">健身握把</a></h5>
                  <span class="product_price">56.10￥</span> </div>
                <div class="product-button"> <a href="shop-details.html" class="tp-btn-round-product">现在购买<i class="fal fa-chevron-double-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="product-item mb-30 wow fadeInUp" data-wow-delay=".9s">
            <div class="prouct-wrapper">
              <div class="product_thum product_thum-new mb-30">
                <div class="fix"> <a href="shop-details.html"><img src="assets/img/product/product-3.jpg" class="img-fluid" alt="product-img"></a> </div>
                <div class="sale-tag"> <span class="new">new</span> </div>
                <div class="product-item-action"> <a href=""><i class="far fa-heart"></i></a> <a href="assets/img/product/product-3.jpg" class="image-popups"><i class="fas fa-compress"></i></a> <a href=""><i class="far fa-exchange"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-info">
                  <h5 class="product_name"><a href="shop-details.html">哑铃</a></h5>
                  <span class="product_price">150.00￥</span> </div>
                <div class="product-button"> <a href="shop-details.html" class="tp-btn-round-product">现在购买 <i class="fal fa-chevron-double-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- priceing-area-end --> 
  
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
