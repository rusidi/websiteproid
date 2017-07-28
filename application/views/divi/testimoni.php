
<!-- Testimonial Section Start -->
<section id="testimonial" class="section">
    <div class="container">
        <div class="row">
            <div id="testimonial-carousel" class="owl-carousel owl-theme">
            <?php if(!empty($testimoni)){ foreach($testimoni as $row){ ?>
                <div class="item active text-center">
                    <img class="img-member" src="<?php echo base_url();?>assets/uploads/testimoni/<?php echo isset($row['photo'])?$row['photo']:'';?>" alt="">
                    <div class="client-info">
                        <h2 class="client-name"><?php echo isset($row['name'])?$row['name']:'';?></h2>
                        <span><i>(<?php echo isset($row['job_title'])?$row['job_title']:'';?>)</i></span>
                    </div>
                    <p><i class="fa fa-quote-left quote-left"></i> 
                    <?php echo isset($row['description'])?nl2br($row['description']):'';?>
                    <i class="fa fa-quote-right quote-right"></i>
                    </p>
                </div>
            <?php }} ?> 
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->