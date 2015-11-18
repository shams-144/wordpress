<?php 
add_action('admin_menu','recent_post_menu');

function recent_post_menu()
{
	add_options_page( 'Recent Posts Setting', 'Recent Posts', 'manage_options', 'recent-posts', 'recent_posts_options' );
}
function recent_posts_optionsmmmm() 
{
	
?>
	<div class="wrap">
	<h2>Recent Posts Setting</h2><br>
	<form name="form1" method="post" action="">
    <p>Number of Posts</p>
	<input type="text" id="number_of_posts" name="number_of_posts" /><br>
	<p>Heading above the Posts</p>
	<input type="text" id="posts_heading" name="posts_heading"/><br>
	<input type="button" name="Save changes" value="Save Changes" ></input>
	</form>
    </div>
<?php } 

function recent_posts_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

    $number_of_posts = (get_option('number_of_posts') == '') ? get_option('number_of_posts') : '';
	$heading_of_posts= (get_option('heading_of_posts') == '') ? get_option('heading_of_posts') : '';
	
   $html = '</pre>
<div class="wrap"><form action="options.php" method="post" name="options">
<h2>Recent Posts Settings</h2>
' . wp_nonce_field('update-options') . '
<table class="form-table" width="100%" cellpadding="10">
<tbody>
<tr>
<td scope="row" align="left">
 <label>Number of Posts</label><input type="text" name="number_of_posts" value="' . $number_of_posts . '" /></td>
</tr>
<tr>
<td scope="row" align="left">
 <label>Heading above the Posts</label><input type="text" name="heading_of_posts" value="' . $heading_of_posts . '" /></td>
</tr>
</tbody>
</table>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="number_of_posts,heading_of_posts" />


 <input type="submit" name="Submit" value="Update" /></form></div>
<pre>
';

    echo $html;

}