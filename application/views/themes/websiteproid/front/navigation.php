<div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <!-- Stat Toggle Nav Link For Mobiles -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!-- End Toggle Nav Link For Mobiles -->
    <div class="logo-wrapper">
        <style type="text/css">
            .logo {
                float: left;
                font-size: 20px;
                line-height: 50px;
                text-align: center;
                padding: 0 10px;
                width: 220px;
                font-weight: 500;
                height: 50px;
                display: block;
            }
            }
        </style>
        <a class="navbar-brand logo" href="index.html">
            <b><?php echo $page_title; ?></b>
        </a>
    </div>
</div>
<!--  Brand and toggle menu for mobile ends  -->

<div class="navbar-collapse collapse">
    <!-- Stat Search -->
    <div class="search-side">
        <a class="show-search">
            <i class="icon-magnifier"></i>
        </a>
    </div>
    <!-- Form for navbar search area -->
    <form class="full-search">
        <div class="container">
            <div class="row">
                <input class="form-control" type="text" placeholder="Search...">
                <a class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                </a>
            </div>
        </div>
    </form>
    <!-- Search form ends -->

    <!-- Start Navigation List -->
    <ul class="nav navbar-nav navbar-right">
       <?php echo isset($main_menus)?$main_menus:'';?>   
    </ul>
    <!-- End Navigation List -->
</div>
</div>

<!-- Mobile Menu Start -->
<ul class="wpb-mobile-menu">
     <?php echo isset($main_menus)?$main_menus:'';?>      
</ul>
<!-- Mobile Menu End -->

</div>