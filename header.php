<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!--====== Required meta tags ======-->
    <title><?php echo $title; ?></title>
<meta name="title" content="<?php echo $title; ?>">
<meta name="description" content="<?php echo $Desc; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">      
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="index, follow"/>
<link rel="canonical" href=" <?php echo "https://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; ?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo  "https://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; ?>">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $Desc; ?>">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo  "https://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; ?>">
<meta property="twitter:title" content="<?php echo $title; ?>">
<meta property="twitter:description" content="<?php echo $Desc; ?>">
<meta property="twitter:image" content="">

    <!--====== Title ======-->


    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="assets/css/aos.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157279215-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157279215-1');
</script>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '232108827349294');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=232108827349294&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<style>
.floating_from{
    width:400px;
    position:absolute;
    right:2%;
    top: 8%;
    border-radius:10px;
    background:white;
    box-shadow:15px 15px 20px #3d3d3d;
    padding: 20px;
    text-align:center;
}
.floating_from input{ margin-bottom: 20px; border-bottom: 1px solid black; border-top: 1px solid white; border-left: 1px solid white; border-right: 1px solid white; }
.floating_from textarea{ margin-bottom: 20px; border-bottom: 1px solid black; border-top: 1px solid white; border-left: 1px solid white; border-right: 1px solid white; }

@media screen and (max-width:500px)
{
.hide_text{display: none;}
    .floating_from{width:300px; right:20%;}
    .floating_from textarea{width:250px; }
}

</style>
</head>
    <a href="index#contact"><div style="position:fixed; left:-3.5em; top:40%;  transform: rotate(-90deg);" class="main-btn sidebar"> Contact Us </div></a>
<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area pt-100">

        <div class="shape header-shape-one">
            <img src="assets/images/banner/shape/shape-1.png" alt="shape">
        </div> <!-- header shape one -->

        <div class="shape header-shape-tow animation-one">
            <img src="assets/images/banner/shape/shape-2.png" alt="shape">
        </div> <!-- header shape tow -->

        <div class="shape header-shape-three animation-one">
            <img src="assets/images/banner/shape/shape-3.png" alt="shape">
        </div> <!-- header shape three -->

        <div class="shape header-shape-fore">
            <img src="assets/images/banner/shape/shape-4.png" alt="shape">
        </div> <!-- header shape three -->

        <div class="navigation-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <!--<li class="nav-item active">-->
                                    <!--    <a class="page-scroll" href="index.php">Home</a>-->
                                    <!--</li>-->
                                    <li class="nav-item">
                                        <a class="page-scroll" href="about-us">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="solutions"> Solutions </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.php#project">Projects</a>
                                    </li>
                                 <li class="nav-item">
                                        <a class="page-scroll" href="training">Training</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="index#contact">Contact</a>
                                    </li>
                                    
                                </ul> <!-- navbar nav -->
                            </div>
                            <div class="navbar-btn ml-20 d-none d-sm-block">
                                <a class="main-btn" href="tel:919654188876"><i class="lni-phone"></i> +91 96541 88876</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation bar -->
<!-- header banner -->

    </header>
    

    