<?php get_header(); ?>

<div id="tooplate_middle_subpage">
    <h2>Gallery</h2>
    <p>Suspendisse tempor condimentum ultricies. Vivamus eget ultrices ligula. Nunc vitae sapien sed neque <a href="#">porttitor egestas sit</a> amet ut ligula. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos used in this gallery page. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
</div>
    
<div id="tooplate_main">
    
    <div class="col_w960">
        	
            <div id="gallery">
				<ul>
                	<li>
                		<h3>Lorem ipsum dolor sit </h3>
	                	<a href="images/gallery/image_01_l.jpg" title="Aenean in est vel diam gravida egestas quis eget velit.">
                		<img src="<?php bloginfo('template_directory');?>/images/gallery/image_01_s.jpg" alt="Image 01" /></a>					
                    </li>
                    
                	<li>
                		<h3>Mauris iaculis nulla</h3>
                		<a href="images/gallery/image_02_l.jpg" title="Nam in massa nec lacus sagittis sodales et eu quam.">
                		<img src="<?php bloginfo('template_directory');?>/images/gallery/image_02_s.jpg" alt="Image 02" /></a>			  		
                    </li>
                    
					<li class="third">
                		<h3>Nunc vitae sapien</h3>
                		<a href="images/gallery/image_03_l.jpg" title="In volutpat velit eget libero ultricies ac porttitor mi aliquam.">
                		<img src="<?php bloginfo('template_directory');?>/images/gallery/image_03_s.jpg" alt="Image 03" /></a>					
                    </li>
                    
                    <li>
                        <h3>Praesent placerat dui</h3>
                        <a href="images/gallery/image_04_l.jpg" title="Donec et enim vel ipsum congue tincidunt.">
                        <img src="<?php bloginfo('template_directory');?>/images/gallery/image_04_s.jpg" alt="Image 04" /></a>                    
                    </li>
                    
                  	<li>
                        <h3>Sed mollis elementum</h3>
                        <a href="images/gallery/image_05_l.jpg" title="Cras vulputate augue vitae purus accumsan cursus."><img src="<?php bloginfo('template_directory');?>/images/gallery/image_05_s.jpg" alt="Image 05" /></a>
                    </li>
                    
                    <li class="third">
                        <h3>Duis eu lectus et ante</h3>
                        <a href="images/gallery/image_06_l.jpg" title="Curabitur tempor lectus interdum mi placerat non congue metus rhoncus.">
                        <img src="<?php bloginfo('template_directory');?>/images/gallery/image_06_s.jpg" alt="Image 06" /></a>                    
                    </li>
                    
                    <li>
                        <h3>Aenean vulputate tempus</h3>
                        <a href="images/gallery/image_07_l.jpg" title="Cras ac libero vitae magna eleifend condimentum non quis purus.">
                        <img src="<?php bloginfo('template_directory');?>/images/gallery/image_07_s.jpg" alt="Image 07" /></a>                    
                    </li>
                    
                    <li>
                        <h3>Fusce vehicula consequat</h3>
                        <a href="images/gallery/image_08_l.jpg" title="Pellentesque venenatis dolor non nulla volutpat pellentesque.">
                        <img src="<?php bloginfo('template_directory');?>/images/gallery/image_08_s.jpg" alt="Image 08" /></a>                    
                    </li>
                    
                    <li class="third">
                        <h3>Libero accumsan erat</h3>
                        <a href="images/gallery/image_09_l.jpg" title="Mauris sagittis odio ultricies massa tincidunt porta.">
                        <img src="<?php bloginfo('template_directory');?>/images/gallery/image_09_s.jpg" alt="Image 09" /></a>                    
                    </li>
                </ul>
  <ul>    	
 <?php
	$type = 'Gallery';
	$args=array(
  	'post_type' => $type,
  	'post_status' => 'publish',
  	'posts_per_page' => -1,
  	'caller_get_posts'=> 1
	);

$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
	$count=1;$classCss='';
  while ($my_query->have_posts()) : $my_query->the_post(); 
  $classCss='';
  if($count%3==0){
	  $classCss='class="third"';
	  }?>
  <li <?php echo $classCss?>>
  <h3><?php the_title();?></h3>
   <?php echo the_content();?>
  </li>
   
   <?php $count++; endwhile; }?>
   </ul>   			
            <div class="cleaner"></div>
      </div>
  </div>
    
    <div class="cleaner"></div>
</div> <!-- end of main -->

<?php get_footer()?>
