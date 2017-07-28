<!-- Start Project Section -->
<div class="project section">
    <div class="container">
        <!-- Start Heading -->
        <div class="heading">
            <div class="section-title">Company <span>News</span></div>
        </div>
        <!-- End Heading -->        
        <div class="row">
            <!-- Start Recent Projects Carousel -->
            <div id="projects-carousel" class="touch-carousel">
            <?php if(!empty($news)):?>
            	<?php foreach ($news as $post):?>
                <div class="col-md-12">
                    <div class="projects-box item">
                        <div class="projects-thumb">
                            <a href="#">
                                <img src="<?php echo BASE_URI.$post['featured_image']?>" class="img-news-4" alt="">
                            </a>
                        </div>
                        <div class="projects-content">
                            <h4><a href="#"><?php echo $post['title'];?></a></h4>
                            <div class="recent-meta">
                                <span class="date"><i class="fa fa-file-text-o"></i><?php echo $post['published_at']?></span>                               
                            </div>
                            <?php
	                            $string = strip_tags($post['body']);
								if (strlen($string) > 500) {								    
								    $stringCut = substr($string, 0, 500);								   
								    $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
								}								
                            ?>
                            <p class="projects-desc"><?php echo $string;?></p>
                            <a href="<?php echo site_url('read/'.$post['slug']) ?>" class="btn btn-effect">Read More <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
               <?php endforeach;?>
                  <?php endif;?>
            </div>
            <!-- End Recent Projects Carousel -->
        </div>
    </div>
    <!-- .container -->
</div>
<!-- End Project Section  -->