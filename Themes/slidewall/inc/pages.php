<?php

if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {

global $wpdb;

    $the_page_title = array('Gallery','Blog','Contact', 'News');
    foreach($the_page_title as $page_name)   

    $the_page = get_page_by_title( $page_name );

        // Create post object
        $_p = array();
        $_p['post_title'] = $page_name;
        $_p['post_content'] = "";
        $_p['post_status'] = 'publish';
        $_p['post_type'] = 'page';

        // Insert the post into the database
        $the_page_id = wp_insert_post( $_p );
}
