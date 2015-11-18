<?php get_header(); ?>

<div id="tooplate_middle_subpage">
  <h2>News</h2>
  <p>Pellentesque dictum ligula ac nisl vestibulum et pretium elit vulputate. Nullam id arcu massa, accumsan congue tortor. <a href="#">Sed gravida lacinia</a> mauris ac commodo. Integer sem velit, faucibus quis vestibulum sed, tristique vitae mi. Nullam eu convallis nunc.</p>
</div>
<div id="tooplate_main">
  <div class="col_w960 col_w960_last">
    <div class="col_w600 float_l">
      <div class="news_box"> <img src="<?php bloginfo('template_directory');?>/images/news_image_01.jpg" width="200" height="200" alt="Image 01" />
        <h2>Sed mollis elementum lectus rhoncus</h2>
        <p class="date">March 27, 2048 </p>
        <p>Nunc varius venenatis sem sed adipiscing. Mauris suscipit mauris in purus mattis placerat. Ut rhoncus imperdiet nibh sit amet sagittis. Integer in placerat dui. Morbi ut lacus metus, vel tristique ligula. Sed sed dolor nisi, ut convallis urna.</p>
        <a class="more" href="#">More</a>
        <div class="cleaner"></div>
      </div>
      <div class="news_box"> <img src="<?php bloginfo('template_directory');?>/images/news_image_02.jpg" width="200" height="200" alt="Image 02" />
        <h2>Duis eu lectus et ante accumsan auctor</h2>
        <p class="date">March 23, 2048 </p>
        <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent quis adipiscing felis. Donec auctor eleifend turpis, blandit interdum neque congue sit amet. Nunc dapibus blandit auctor. </p>
        <a class="more" href="#">More</a>
        <div class="cleaner"></div>
      </div>
    
 <?php
$type = 'news';
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
      <div class="news_box"> <?php the_post_thumbnail();?>
        <h2><?php the_title();?></h2>
        <p class="date"><?php the_time('F j, Y');?></p>
        <p><?php the_excerpt();?></p>
        <a class="more" href="<?php the_permalink();?>">More</a>
        <div class="cleaner"></div>
      </div>
      
<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>   

    </div>
   <?php get_sidebar(); ?>
  </div>
  <div class="cleaner"></div>
</div>
<!-- end of main -->

<?php get_footer()?>
