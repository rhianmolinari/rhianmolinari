<?php

// Custom Post Type
function rhianmolinari_projects() {
	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'add_new' => 'Add new Project',
		'add_new_item' => 'Add new Project',
		'edit_item' =>'Edit Project',
		'new_item' => 'New Project',
		'view_item' => 'View Project',
		'search_items' => 'Search Projects',
		'not_found' => 'No project found',
		'not_found_in_trash' => 'No project found in Trash',
		'parent_item_colon' => 'Parent Project:',
		'menu_name' => 'Projects'
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Portfolio Rhian Molinari',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies' => array( 'project_type' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'menu_position' => 5,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'project', $args );
}
add_action( 'init', 'rhianmolinari_projects' );

// Custom Icon Post Type
function rhianmolinari_projects_icon() { ?>
<style type="text/css" media="screen">
	#menu-posts-project .wp-menu-image {
		background: url(<?php bloginfo('template_url') ?>/img/custom_types_icon.png) no-repeat -30px -2px !important;
	}
	#menu-posts-project:hover .wp-menu-image, #menu-posts-project.wp-has-current-submenu .wp-menu-image {
		background-position: -51px -2px !important;
	}
	#icon-edit.icon32-posts-project {
		background: url(<?php bloginfo('template_url') ?>/img/custom_types_icon.png) no-repeat 6px 4px;
	}
</style>
<?php }
add_action( 'admin_head', 'rhianmolinari_projects_icon' );

// Taxonomies
function rhianmolinari_projects_taxonomies() {
	$labels = array(
		'name' => 'Project Type',
		'singular_name' => 'Project Type',
		'search_items' => 'Search Project Type',
		'all_items' => 'All Project Type',
		'parent_item' => 'Parent Project Type',
		'parent_item_colon' => 'Parent Project Type:',
		'edit_item' => 'Edit Project Type',
		'update_item' => 'Update Project Type',
		'add_new_item' => 'Add New Project Type',
		'new_item_name' => 'New Project Type Name',
		'menu_name' => 'Project Type'
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array(	'slug' => 'project' )
	);

	register_taxonomy( 'project_type', 'project', $args );
}
add_action( 'init', 'rhianmolinari_projects_taxonomies', 0 );

function rhianmolinari_slide() {
	$labels = array(
		'name' => 'Slide',
		'singular_name' => 'Slide',
		'add_new' => 'Add new Slide',
		'add_new_item' => 'Add new Slide',
		'edit_item' =>'Edit Slide',
		'new_item' => 'New Slide',
		'view_item' => 'View Slide',
		'search_items' => 'Search Slide',
		'not_found' => 'No Slide found',
		'not_found_in_trash' => 'No Slide found in Trash',
		'parent_item_colon' => 'Parent Slide:',
		'menu_name' => 'Slides'
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Slide Homepage',
		'supports' => array( 'title' ),
		'taxonomies' => array( 'slide' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'menu_position' => 5,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'slide', $args );
}
add_action( 'init', 'rhianmolinari_slide' );

?>