<style type="text/css">
 <?php if(!empty($landing_page)){ $i=1;foreach($landing_page as $row) { ?>
.example-slider .fnc-slide-<?php echo $i;?> .fnc-slide__inner,
.example-slider .fnc-slide-<?php echo $i;?> .fnc-slide__mask-inner {
  background-image: url("<?php echo base_url();?>assets/uploads/slider/<?php echo isset($row['image'])?$row['image']:'';?>");
}
<?php if($i == 3) { ?>
.example-slider .fnc-slide-3 .fnc-slide__inner:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.1);
}
  <?php } ?>
<?php $i++; } }?>
</style>
<div class="demo-cont">
  <!-- slider start -->
  <div class="fnc-slider example-slider">
    <div class="fnc-slider__slides">
      <?php if(!empty($landing_page)){ foreach($landing_page as $row) { ?>
      <!-- slide start -->
      <div class="fnc-slide m--blend-green m--active-slide">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <span class="fnc-slide__heading" style="line-height: 50px; font-weight: bold">
              <div class="fnc-slide__heading-line">
                <span style="font-size:20px !important"><?php echo isset($row['title'])?$row['title']:'';?></span>
              </div>
              <div class="fnc-slide__heading-line">
                <span style="font-size:50px !important;"><?php echo isset($row['description'])?$row['description']:'';?></span>
              </div>
            </span>            
          </div>
        </div>
      </div>
      <?php }} ?>
      <!-- slide end -->      
    </div>
    <nav class="fnc-nav">
      <div class="fnc-nav__bgs">
        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
        <div class="fnc-nav__bg m--navbg-dark"></div>
        <div class="fnc-nav__bg m--navbg-red"></div>
        <div class="fnc-nav__bg m--navbg-blue"></div>
      </div>
      <div class="fnc-nav__controls">
       <?php if(!empty($landing_page)){ foreach($landing_page as $row) { ?>
        <button class="fnc-nav__control">
          <?php echo isset($row['title'])?$row['title']:'';?>
          <span class="fnc-nav__control-progress"></span>
        </button>       
         <?php }} ?>
      </div>
    </nav>
  </div>
  <!-- slider end -->
 <div class="demo-cont__credits">
    <div class="demo-cont__credits-close"></div>
    <h2 class="demo-cont__credits-heading">Made by</h2>
    <img src="" alt="" class="demo-cont__credits-img" />
    <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
    <a href="http://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
    <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
    <h2 class="demo-cont__credits-heading">Based on</h2>
    <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Kreativa Studio</a>
    <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
    <div class="colorful-switch">
      <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
      <label class="colorful-switch__label" for="colorful-switch-cb">
        <span class="colorful-switch__bg"></span>
        <span class="colorful-switch__dot"></span>
        <span class="colorful-switch__on">
          <span class="colorful-switch__on__inner"></span>
        </span>
        <span class="colorful-switch__off"></span>
      </label>
    </div>
  </div>
</div>