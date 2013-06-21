<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */

function rhianmolinari_theme_setup() {

	// This theme uses wp_nav_menu() in one location
	register_nav_menu( 'primary', 'Primary Menu' );

	// This theme uses featured images
	add_theme_support( 'post-thumbnails' );

	// Size thumbnail
	add_image_size( 'featured', 770, 400, true ); // Slide
	add_image_size( 'project', 770, 540, true ); // Project
	add_image_size( 'default', 770, 220, true ); // Post

	// Add excerpt on page
	add_post_type_support( 'page','excerpt' );

}
add_action( 'after_setup_theme', 'rhianmolinari_theme_setup' );

/* Remove edit code
define ( 'DISALLOW_FILE_EDIT', true );
// or
function tcb_remove_editor_menu() {
	remove_action( 'admin_menu', '_add_themes_utility_last', 101 );
}
add_action( 'admin_menu', 'tcb_remove_editor_menu', 1 );
function tcb_remove_menu_elements() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
}
add_action( 'admin_init', 'tcb_remove_menu_elements', 102 );
*/

// Clean up the <head>
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

// Remove Version
function remove_version() {
	return '';
}
add_filter( 'the_generator', 'remove_version' );

// Hide Admin Bar
add_filter( 'show_admin_bar', '__return_false' );

// Limit word
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	}
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

// Disqus
function disqus_embed($disqus_shortname) {
	global $post;
	wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
	echo '<div id="disqus_thread"></div>
	<script type="text/javascript">
		var disqus_shortname = "'.$disqus_shortname.'";
		var disqus_title = "'.$post->post_title.'";
		var disqus_url = "'.get_permalink($post->ID).'";
		var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
	</script>';
}

/* Search Filter
function search_filter($query) {
	if ($query->is_search) {
		$query->set( 'post_type', array(
			'post',
			'page',
			'projeto',
			'tipo_projeto'
			)
		);
	}
	return $query;
}
add_filter('pre_get_posts','search_filter');*/

/* Add style.css in editor Wordpress
function rhianmolinari_add_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'init', 'rhianmolinari_add_editor_styles' );*/

// Includes
require_once('includes/widget.php');
require_once('includes/custom_user.php');
require_once('includes/breadcrumb.php');
require_once('includes/custom_types.php');
require_once('includes/metabox.php');
require_once('includes/shortcode.php');
require_once('includes/tinymce/tinymce.php');

?>