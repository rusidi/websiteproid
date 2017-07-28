<!-- Start Service Section -->
<div class="service section">
    <div class="container">
        <div class="row">
        <?php if(!empty($company_overview)){ foreach($company_overview as $row){ ?>
            <div class="col-md-4 col-sm-4 col-xl-12">
                <div class="service-box">
                    <div class="service-head">
                        <a class="icon">
                            <i class="fa <?php echo isset($row['icon'])?$row['icon']:'fa-info-circle';?>"></i>
                        </a>
                        <h2><?php echo isset($row['title'])?$row['title']:'';?></h2>
                        <p class="desc"><?php echo isset($row['subtitle'])?$row['subtitle']:'';?></p>
                    </div>
                    <div class="service-content">
                        <p>
                            <?php echo isset($row['description'])?nl2br($row['description']):'';?>
                        </p>
                        <a href="<?php echo isset($row['action'])?nl2br($row['action']):'';?>" class="btn btn-effect">Read More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- End Service Section -->
