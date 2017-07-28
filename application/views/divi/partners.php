<!-- Start Client Section -->
<div class="client section">
    <div class="container">
        <!-- Start Heading -->
        <div class="heading">
            <div class="section-title"><?php echo isset($partners['title'])?$partners['title']:''?></span></div>
        </div>
        <!-- End Heading -->
        <!-- Some Text -->
        <p class="description text-center">
            <?php echo isset($partners['description'])?nl2br($partners['description']):''?>
        </p>
        <div class="row">
            <div id="client-logo" class="touch-carousel">
                <?php 
                for($i=1;$i<9;$i++){
                if($partners['client'.$i] !=''){ ?>
                    <div class="client-logo item" >
                        <div class="client-item">
                            <a href="#">
                                <img src="<?php echo base_url();?>assets/uploads/partners/<?php echo $partners['client'.$i];?>" alt="" style="width:180px;height:122px" />
                            </a>
                        </div>
                    </div>
                <?php } 
                    }
                ?>                
            </div>
        </div>
    </div>
</div>
<!-- End Client Section -->