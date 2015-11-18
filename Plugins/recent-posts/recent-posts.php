<?php
/*
  Plugin Name: Recent Posts
  Plugin URI: http://wordpress.org/plugins
  Description: Display recent posts link with   
  Version: 1.0
  Author: shams
  Author URI:  http://www.twitter.com/jahangeer144
  License: GPLv2+
 
*/
include('inc/recent-posts-setting.php');

function RecentPosts($content){
if(is_single())
{
$number_of_posts = (get_option('number_of_posts') != '') ? get_option('number_of_posts') : '5';
$heading_of_posts= (get_option('heading_of_posts') != '') ? get_option('heading_of_posts') : 'Five Recent Posts';
	
	$args = array(
    'numberposts' => $number_of_posts,
    'offset' => 0,
    'category' => 0,
    'orderby' =>'',
    'order' => '',
    'include' =>'',
    'exclude' => '',
    'meta_key' =>'',
    'meta_value' =>'',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts($args);
    $postdata = "<div class='recentposts'><h2>".$heading_of_posts."</h2><ul>";
    foreach( $recent_posts as $recent ){
	  $postdata .= '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	 } 	  
	  $postdata .= "</ul></div><div class='clear'></div>";
	return  $content.'<br/>'.$postdata;
}
else{
	return  $content;
	}
}
	add_filter('the_content', 'RecentPosts');


