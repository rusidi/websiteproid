<?php if(!empty($social_media)) { ?>
<div class="top-bar hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-9">
                <!-- Start Contact Info -->
                <ul class="contact-details">
                    <?php if($social_media['show_logo'] != 0):?>
                     <li>
                        <a href="<?php echo base_url();?>" class="text-bold">                            
                            <b><?php echo $this->config->item('websiteproid_sitename'); ?></b>
                        </a>
                    </li>
                     <?php endif;?>
                    <li>
                        <a href="#">
                            <i class="icon-envelope">
                            </i>
                            <?php echo isset($social_media['email_address'])?$social_media['email_address']:''?>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-call-out">
                            </i>
                            Call Us: <?php echo isset($social_media['phone'])?$social_media['phone']:''?>
                        </a>
                    </li>                   
                </ul>
                <!-- End Contact Info -->
            </div>
            <div class="col-md-5 col-sm-3">
                <!-- Start Social Links -->
                <ul class="social-list">
                    <?php if($social_media['facebook'] != ''):?>
                    <li>
                        <a href="<?php echo $social_media['facebook'];?>" target="_blank" class="social-link facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook" ><i class="fa fa-facebook"></i></a>
                    </li>
                     <?php endif;?>
                      <?php if($social_media['twitter'] != ''):?>
                    <li>
                        <a href="<?php echo $social_media['twitter'];?>" class="social-link twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                     <?php endif;?>
                     <?php if($social_media['google_plus'] != ''):?>
                    <li>
                        <a href="<?php echo $social_media['google_plus'];?>" class="social-link google" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                    </li>
                     <?php endif;?>
                     <?php if($social_media['instagram'] != ''):?>
                    <li>
                        <a href="<?php echo $social_media['instagram'];?>" class="social-link dribbble" data-toggle="tooltip" data-placement="bottom" title="Dribble"><i class="fa fa-instagram"></i></a>
                    </li>
                     <?php endif;?>
                     <?php if($social_media['linkedin'] != ''):?>
                    <li>
                        <a href="<?php echo $social_media['linkedin'];?>" class="social-link linkdin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    </li>
                     <?php endif;?>
                </ul>
                <!-- End Social Links -->
            </div>
        </div>
    </div>
</div>
<?php } ?>