<?php get_header(); ?>

<div id="tooplate_middle"> 
  
  <!-- <div id="slider"> --> 
  <a href="#"><img src="<?php bloginfo('template_directory');?>/images/slideshow/01.jpg" alt="slideshow 01" title="Morbi sit amet nulla vitae neque auctor malesuada sed ac ante." /></a> 
  <!--    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/slideshow/02.jpg" alt="slideshow 02" title="Sed consequat rutrum velit, sit amet ultricies est adipiscing molestie." /></a>
        <a href="#"><img src="<?php bloginfo('template_directory');?>/images/slideshow/03.jpg" alt="slideshow 03" title="Fusce dignissim justo in odio aliquet luctus imperdiet dui molestie." /></a>
        <a href="#"><img src="<?php bloginfo('template_directory');?>/images/slideshow/04.jpg" alt="slideshow 04" title="In nec felis id magna dignissim rhoncus sed in nulla." /></a>
        <a href="#"><img src="<?php bloginfo('template_directory');?>/images/slideshow/05.jpg" alt="slideshow 05" title="Maecenas pellentesque dictum velit, vitae dignissim enim volutpat sed." /></a>
    </div>--> 
</div>
<div id="tooplate_main">
<div class="col_w960">
  <h2>What We Do?</h2>
  <div class="col_w450 float_l">
    <div class="wwd_box"> <img src="<?php bloginfo('template_directory');?>/images/icon1.png" alt="Work One" />
      <h3><a href="#">Etiam a Dui et Eros Imperdiet Rhoncus</a></h3>
      <p>Slide Wall  is brought to you by <a href="http://www.tooplate.com" target="_parent">Website Templates</a>. Feel free to use this template for your websites. Phasellus ultricies molestie erat sit amet sagittis. </p>
      <a href="#" class="more float_r">More</a>
      <div class="cleaner"></div>
    </div>
    <div class="wwd_box"> <img src="<?php bloginfo('template_directory');?>/images/icon2.png" alt="Work One" />
      <h3><a href="#">Aenean Quis Nulla ac Nisl Rutrum Ornare</a></h3>
      <p>Credit goes to <a href="http://iconeden.com/icon/bright-free-stock-iconset.html" target="_blank">IconEden</a> for icons used in this template. Praesent placerat dui ut nibh eleifend lobortis. Vestibulum dictum tincidunt posuere.</p>
      <a href="#" class="more float_r">More</a>
      <div class="cleaner"></div>
    </div>
  </div>
  <div class="col_w450 float_r">
    <div class="wwd_box"> <img src="<?php bloginfo('template_directory');?>/images/icon3.png" alt="Work One" />
      <h3><a href="#">Lorem Ipsum Dolor Sit Amet</a></h3>
      <p>Integer ultrices enim non ipsum pulvinar, sed tincidunt ipsum lacinia. Suspendisse fermentum lectus ac magna placerat auctor.</p>
      <a href="#" class="more float_r">More</a>
      <div class="cleaner"></div>
    </div>
    <div class="wwd_box"> <img src="<?php bloginfo('template_directory');?>/images/icon4.png" alt="Work One" />
      <h3><a href="#">Praesent Dui Nibh Eleifend Lobortis</a></h3>
      <p>Libero accumsan erat, sit amet ornare lectus urna a turpis. Maecenas et eros erat. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>. Aliquam mollis pulvinar diam, sed iaculis lacus viverra sed.</p>
      <a href="#" class="more float_r">More</a>
      <div class="cleaner"></div>
    </div>
  </div>
  <div class="cleaner"></div>
</div>
<div class="col_w960 col_w960_last">
  <h2>New Projects</h2>
  <div class="lp_box">
    <h6>Corporate Web Design</h6>
    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/tooplate_image_01.jpg" alt="Image 01" /></a>
    <p>Etiam ut nibh et urna cursus ultricies nec vel nunc. In hac habitasse platea dictumst. </p>
    <a href="#" class="more float_r">More</a>
    <div class="cleaner"></div>
  </div>
  <div class="lp_box">
    <h6>Professional HTML CSS Layout</h6>
    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/tooplate_image_02.jpg" alt="Image 02" /></a>
    <p>Donec ullamcorper feugiat nunc ut tempus. Sed sodales, nibh ut ultricies pulvinar.</p>
    <a href="#" class="more float_r">More</a>
    <div class="cleaner"></div>
  </div>
  <div class="lp_box lp_box_last">
    <h6>Visual Green Website</h6>
    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/tooplate_image_03.jpg" alt="Image 03" /></a>
    <p>Praesent auctor quam quis libero venenatis dapibus. Donec ullamcorper   feugiat nunc ut tempus.</p>
    <a href="#" class="more float_r">More</a>
    <div class="cleaner"></div>
  </div>
  <?php
$type = 'project';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="lp_box lp_box_last">
    <h6>
      <?php the_title();?>
    </h6>
    <a href="<?php the_permalink();?>">
    <?php the_post_thumbnail(); ?>
    </a>
    <p>
    <?php /* $excerpt = get_the_excerpt();
	echo $excerpt;*/ ?>
      <?php the_excerpt();?>
    </p>
    <a href="<?php the_permalink();?>" class="more float_r">More</a>
    <div class="cleaner"></div>
  </div>
  <?php endwhile;  } ?>
  <div class="cleaner"></div>
</div>
<div class="cleaner"></div>
<?php get_footer();?>
