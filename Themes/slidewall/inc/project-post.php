<?php 
 
/* Add Custom type post Project */
function Project() {
$labels = array(
'name' => 'Projects',
'singular_name' => 'Project',
'menu_name' => 'Projects',
'name_admin_bar' => 'Projects',
'add_new' => 'Add New',
'add_new_item' => 'Add New Project',
'new_item' => 'New Project',
'edit_item' => 'Edit Project',
'view_item' => 'View Project',
'all_items' => 'All Projects',
'search_items' => 'Search Project',
'parent_item_colon' => 'Parent Project:',
'not_found' => 'No Project found.',
'not_found_in_trash' => 'No Project found in Trash.'

);
$args = array(
'public' => true,
'labels' => $labels,
'supports' => array('title', 'editor', 'thumbnail'),
'description' => 'Add & display latest Project',
'menu_position' => 16,   // Position on Admin menu, +2 move item one step up and -2 move item one step down 
'menu_icon' => 'dashicons-admin-post', // for more icon and code visit link https://developer.wordpress.org/resource/dashicons/
'taxonomies'	=> array('Project' ) // add tag panel to add tag to custom type post. 
);									  
register_post_type( 'Project', $args );
}
add_action( 'init', 'Project' );



// function that show message on custom post type on change

add_filter( 'post_updated_messages', 'Project_custom_messages' );
function Project_custom_messages( $messages ) {
$post = get_post();
$messages['Project'] = array(
0 => '',
1 => 'Project updated.',
2 => 'Custom field updated.',
3 => 'Custom field deleted.',
4 => 'Project updated.',
5 => isset( $_GET['revision'] ) ? sprintf( 'Project restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
6 => 'Project published.',
7 => 'Project saved.',
8 => 'Project submitted.',
9 => sprintf(
'Project scheduled for: <strong>%1$s</strong>.',
date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
),
10 => 'Project draft updated.'
);
return $messages;
} 

//  Help screen tab function
add_action( 'admin_head', 'Project_help' );
function Project_help() {
$screen = get_current_screen();
if ( 'Project' != $screen->post_type ) {
return;
}
$basics = array(
'id' => 'Project_basics',
'title' => 'Project Tile & Description',
'content' => '<br><b>Title</b> - Enter a title for your Project. After you enter a title, you’ll see the permalink below, which you can edit.<br>

<br><b>Project Description editor</b> - Enter the text for your Project. There are two modes of editing: Visual and Text. Choose the mode by clicking on the appropriate tab.<br><br>

Visual mode gives you a WYSIWYG editor. Click the last icon in the row to get a second row of controls.<br>

The Text mode allows you to enter HTML along with your Project text. Line breaks will be converted to paragraphs automatically.<br><br>

You can insert media files by clicking the icons above the Project editor and following the directions. You can align or edit images using the inline formatting toolbar available in Visual mode.<br><br>

You can enable distraction-free writing mode using the icon to the right. This feature is not available for old browsers or devices with small screens, and requires that the full-height editor be enabled in Screen Options.<br><br>

Keyboard users: When you’re working in the visual editor, you can use Alt + F10 to access the toolbar.'
);
$formatting = array(
'id' => 'Project_formatting',
'title' => 'Insert Project Media',
'content' => '<br>You can upload and insert media (images, audio, documents, etc.) by clicking the Add Media button. You can select from the images and files already uploaded to the Media Library, or upload new media to add to your Project description. To create an image gallery, select the images to add and click the “Create a new gallery” button.<br><br>

You can also embed media from many popular websites including Twitter, YouTube, Flickr and others by pasting the media URL on its own line into the content of your Project. Please refer to the Codex to <a href="https://codex.wordpress.org/Embeds">learn more about embeds</a>.'
);
$screen->add_help_tab( $basics );
$screen->add_help_tab( $formatting );
} 




