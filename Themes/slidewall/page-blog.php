<?php get_header(); ?>

<div id="tooplate_middle_subpage">
  <h2>Blog</h2>
  <p>Vestibulum sit amet dui quis diam consequat consequat. Suspendisse eleifend risus ac leo sodales ut tincidunt eros pulvinar. Nullam tristique ligula vulputate risus tincidunt gravida rutrum dolor bibendum. Curabitur id felis leo, <a href="#">sit amet interdum</a> tortor. </p>
</div>
<div id="tooplate_main">
  <div class="col_w960 col_w960_last">
    <div class="col_w600 float_l tooplate_margin">
      <div class="post_box">
        <p class="post_meta"><span class="cat">Posted in <a href="#">Graphics</a>, <a href="#">Illustrations</a></span> | Date: June 29, 2048 </p>
        <h2>Sed mollis elementum lectus rhoncus</h2>
        <img src="<?php bloginfo('template_directory');?>/images/blog_image_02.jpg" alt="Image 02" />
        <p>Donec lacinia leo et neque elementum quis egestas mi vulputate. Pellentesque mollis volutpat urna, quis ultricies felis convallis quis. Fusce nec mi dolor. Cras sollicitudin convallis hendrerit. Donec at neque lacus, eu adipiscing sapien. Nunc a cursus nulla. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        <a class="more" href="#">More</a>
        <div class="cleaner"></div>
      </div>
      <div class="post_box">
        <p class="post_meta"><span class="cat">Posted in <a href="#">3D</a>, <a href="#">Interactive</a></span> | Date: June 24, 2048</p>
        <h2>Duis eu lectus et ante accumsan auctor</h2>
        <img src="<?php bloginfo('template_directory');?>/images/blog_image_03.jpg" alt="Image 03" />
        <p> Aliquam erat volutpat. In pellentesque sagittis dictum. Aliquam erat volutpat. Donec ac aliquam neque. Sed tellus diam, consequat nec volutpat et, cursus ac nisi. Mauris in risus in diam consequat suscipit non ac enim. Feel free to use this <a href="http://www.tooplate.com">template</a> for your website.</p>
        <a class="more" href="#">More</a>
        <div class="cleaner"></div>
      </div>
      <div class="post_box">
        <p class="post_meta"><span class="cat">Posted in <a href="#">Internet</a>, <a href="#">Marketing</a></span> | Date: June 24, 2048</p>
        <h2>Fusce vehicula consequat dignissim</h2>
        <img src="<?php bloginfo('template_directory');?>/images/blog_image_01.jpg" alt="Image 01" />
        <p>Cras molestie quam nec lectus lacinia sed euismod nisl consequat. Cras dignissim dui nec dui viverra eget cursus lectus rutrum. Suspendisse aliquet molestie tincidunt. Aenean commodo, elit a bibendum aliquet, sapien lacus rhoncus dolor, consectetur venenatis felis est id nisi.</p>
        <a class="more" href="#">More</a>
        <div class="cleaner"></div>
      </div>
      <?php query_posts('posts_per_page=10'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post_box">
        <?php 
	  	$categories = get_the_category();
		$separator = ' ';
		$output = '';
		if ( ! empty( $categories ) ) {
    		foreach( $categories as $category ) {
        	$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . 										$separator;
    }
   	 ?>
        <p class="post_meta"><span class="cat">Posted in <?php echo trim( $output, $separator );}?></span> | Date:
          <?php the_time('F j, Y')?>
        </p>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php  the_post_thumbnail();?>
        <?php the_excerpt();?>
        <a class="more" href="<?php the_permalink();?>">More</a>
        <div class="cleaner"></div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <div class="cleaner"></div>
    </div>
    <?php get_sidebar('blog'); ?>
  </div>
</div>
</div>
<!-- end of main -->

<?php get_footer(); ?>
