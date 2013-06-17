<?php

// Custom Post Type
function rhianmolinari_projects() {
	$labels = array(
		'name' => 'Projetos',
		'singular_name' => 'Projeto',
		'add_new' => 'Adicionar novo Projeto',
		'add_new_item' => 'Adicionar novo Projeto',
		'edit_item' =>'Editar Projeto',
		'new_item' => 'Novo Projeto',
		'view_item' => 'Visualizar Projeto',
		'search_items' => 'Buscar Projetos',
		'not_found' => 'Projeto n&atilde;o encontrado',
		'not_found_in_trash' => 'Projeto n&atilde;o encontrado no Lixo',
		'parent_item_colon' => 'Projeto Parente:',
		'menu_name' => 'Projetos'
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Portfolio Rhian Molinari',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies' => array( 'tipo_projeto' ),
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

	register_post_type( 'projeto', $args );
}
add_action( 'init', 'rhianmolinari_projects' );

// Custom Icon Post Type
function rhianmolinari_projects_icon() { ?>
<style type="text/css" media="screen">
	#menu-posts-projeto .wp-menu-image {
		background: url(<?php bloginfo('template_url') ?>/img/custom_types_icon.png) no-repeat -30px -2px !important;
	}
	#menu-posts-projeto:hover .wp-menu-image, #menu-posts-projeto.wp-has-current-submenu .wp-menu-image {
		background-position: -51px -2px !important;
	}
	#icon-edit.icon32-posts-projeto {
		background: url(<?php bloginfo('template_url') ?>/img/custom_types_icon.png) no-repeat 6px 4px;
	}
</style>
<?php }
add_action( 'admin_head', 'rhianmolinari_projects_icon' );

// Taxonomies
function rhianmolinari_projects_taxonomies() {
	$labels = array(
		'name' => 'Tipo de Projeto',
		'singular_name' => 'Tipo de Projeto',
		'search_items' => 'Busca por Tipo de Projeto',
		'all_items' => 'Todos os Tipos de Projeto',
		'parent_item' => 'Tipo de Projeto Parente',
		'parent_item_colon' => 'Tipo de Projeto Parente:',
		'edit_item' => 'Editar Tipo de Projeto',
		'update_item' => 'Atualizar Tipo de Projeto',
		'add_new_item' => 'Adicionar Novo Tipo de Projeto',
		'new_item_name' => 'Novo Nome Tipo de Projeto',
		'menu_name' => 'Tipo de Projeto'
	);
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array(	'slug' => 'projeto' )
	);

	register_taxonomy( 'tipo_projeto', 'projeto', $args );
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