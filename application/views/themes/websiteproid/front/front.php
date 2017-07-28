<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js">
<![endif]-->
<html lang="en">
<head>
    <!-- Basic -->
    <title><?php echo $page_title;?></title>
    <!-- Define Charset -->
    <meta charset="utf-8">
    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Page Description and Author -->
    <meta name="description" content="Website company profile">
    <meta name="author" content="grahtera">
    <link rel="icon" type="image/png" href="<?php echo $base_assets_url;?>img/favicon.jpg" />
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="<?php echo $base_assets_url;?>css/bootstrap.min.css" type="text/css" media="screen">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo $base_assets_url;?>fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Icon -->
    <link rel="stylesheet" href="<?php echo $base_assets_url;?>fonts/simple-line-icons.css" type="text/css" media="screen">
    <!-- ConBiz Iocn -->
    <link rel="stylesheet" href="<?php echo $base_assets_url;?>fonts/flaticon.css" type="text/css" media="screen">
    <!-- rs style -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/settings.css" media="screen">
    <!-- main CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/main.css" media="screen">
    <!-- Slider  -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/slider.css" media="screen">
    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/responsive.css" media="screen">
    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/animate.css" media="screen">
    <!-- Slicknav  -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/slicknav.css" media="screen">

    <!-- Selected Preset -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/colors/river.css" media="screen" />

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/colors/river.css" title="river" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/colors/yellow.css" title="yellow" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/colors/turquoise.css" title="turquoise" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/colors/emerald.css" title="emerald" media="screen" />    
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/colors/wisteria.css" title="wisteria" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_assets_url;?>css/colors/alizarin.css" title="alizarin" media="screen" />    

    <script type="text/javascript" src="<?php echo $base_assets_url;?>js/jquery-min.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/bootstrap.min.js"></script>

    <!--[if IE 8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<!-- Full Body Container -->
<div id="container">
<!-- Start Header Section -->
<header id="header-wrap" class="site-header clearfix">
<!-- Start Top Bar -->
<?php echo isset($social_media)?$social_media:'';?>
<!-- End Top Bar -->
<!-- Slider -->
<?php echo isset($landing_page)?$landing_page:'';?>
<!-- End Slider -->
<!-- Start  Logo & Navigation  -->
<?php echo isset($navigation)?$navigation:'';?>
<!-- End Header Logo & Navigation -->
<div class="clearfix"></div>
</header>
<!-- End Header Section -->
<!-- Content -->
<?php echo isset($company_overview)?$company_overview:'';?>
<?php echo isset($testimoni)?$testimoni:'';?>
<?php echo isset($partners)?$partners:'';?>
<?php echo isset($news)?$news:'';?> 
<?php echo isset($company_address)?$company_address:'';?>
<?php echo isset($copyright)?$copyright:'';?>
</div>
<!-- End Full Body Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Start Loader -->
<div id="loader">
    <div class="square-spin">
        <div></div>
    </div>
</div>

<!-- Style Switcher -->
<div class="switcher-box">
    <a class="open-switcher show-switcher">
        <i class="fa fa-cog fa-spin"></i>
    </a>
    <h4>
        Ganti Tampilan
    </h4>
      <span>
      Warna Pilihan
      </span>
    <ul class="colors-list">
        <li>
            <a onClick="setActiveStyleSheet('river'); return false;" title="River" class="river">
            </a>
        </li>
        <li>
            <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow">
            </a>
        </li>
        <li>
            <a onClick="setActiveStyleSheet('turquoise'); return false;" title="Turquoise" class="turquoise">
            </a>
        </li>
        <li>
            <a onClick="setActiveStyleSheet('emerald'); return false;" title="Emerald" class="emerald">
            </a>
        </li>        
        <li>
            <a onClick="setActiveStyleSheet('wisteria'); return false;" title="wisteria" class="wisteria">
            </a>
        </li>
        <li>
            <a onClick="setActiveStyleSheet('alizarin'); return false;" title="Alizarin" class="alizarin">
            </a>
        </li>
    </ul>



</div>
<!-- Main JS  -->
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/modernizrr.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/count-to.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/smooth-scroll.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/jquery.slicknav.js"></script>
<script type="text/javascript" src="<?php echo $base_assets_url;?>js/main.js"></script>
 <script type="text/javascript" src="<?php echo $base_assets_url;?>js/slider.js"></script>

<!-- Revelosition slider js -->
<script src="<?php echo $base_assets_url;?>js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo $base_assets_url;?>js/jquery.themepunch.tools.min.js"></script>

</body>
</html>