<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage slide wall
 * @since slide wall 1.0
 */

get_header(); ?>

<?php query_posts('posts_per_page=10'); ?>
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?>
</a>

<p><?php the_content();?></p>
<?php endwhile; ?>
<?php endif; ?>
    
<?php get_siderbar();?>
<?php get_footer(); ?>