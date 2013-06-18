<?php

// Metabox – https://github.com/rilwis/meta-box

// Re-define meta box path and URL
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/inc/meta-box' ) );
define( 'RWMB_DIR', trailingslashit( STYLESHEETPATH . '/inc/meta-box' ) );

// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';

// Include the meta box definition (the file where you define meta boxes, see `demo/demo.php`)
//include 'config-meta-boxes.php';

function rw_register_meta_boxes() {
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;
	$prefix = 'rw_';
	$meta_boxes = array();

	// 1st meta box (CLIENT)
	$meta_boxes[] = array(
		'id' => 'descricao_do_projeto', // $id
		'title' => 'Descri&ccedil;&atilde;o do projeto', // $title
		'pages' => array( 'projeto' ), // $post_type
		'context' => 'side', // $context
		'priority' => 'low', // $priority
		'autosave' => false, // true, false (default).

		'fields' => array(
			// TEXT
			array(
				'name' => 'Nome do cliente',
				'id' => $prefix. 'client_name',
				'type' => 'text',
			),
			// URL
			array(
				'name' => 'URL',
				'id' => $prefix. 'client_url',
				'desc' => 'Example: http://www.google.com',
				'type' => 'url',
			),
		)
	);

	// 2nd meta box (SLIDE IMAGE)
	$meta_boxes[] = array(
		'title' => 'Slide',
		'pages' => array( 'projeto' ),
		'context' => 'normal', // $context
		'priority' => 'low', // $priority
		'autosave' => false, // true, false (default).

		'fields' => array(
			// PLUPLOAD IMAGE UPLOAD (WP 3.3+)
			array(
		//		'name' => 'Slide images',
				'id' => $prefix. 'project_plupload',
				'type' => 'plupload_image',
				'max_file_uploads' => 4,
			),
		)
	);

	// 3nd meta box (UPLOAD FILE)
	$meta_boxes[] = array(
		'title' => 'Upload file',
		'pages' => array( 'post', 'page' ),
		'context' => 'normal', // $context
		'priority' => 'default', // $priority
		'autosave' => false, // true, false (default).

		'fields' => array(
			// FILE ADVANCED (WP 3.5+)
			array(
			//	'name' => 'File Advanced Upload',
				'id'   => $prefix. 'download_file_advanced',
				'type' => 'file_advanced',
				'max_file_uploads' => 4,
				'mime_type' => 'application,audio,video', // Leave blank for all file types
			),
		)
	);

	// 4nd meta box (SLIDE FEATURED)
	$meta_boxes[] = array(
		'title' => 'Projeto no slide',
		'pages' => array( 'slide' ),
		'context' => 'normal', // $context
		'priority' => 'default', // $priority
		'autosave' => false, // true, false (default).

		'fields' => array(
			// POST
			array(
				'name' => 'Projeto',
				'id' => $prefix. 'slide_project',
				'desc' => 'Selecione o projeto de destaque',
				'type' => 'post',

				// Post type
				'post_type' => 'projeto',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type' => 'select_advanced',
				// Query arguments (optional). No settings means get all published posts
				'query_args' => array(
					'post_status' => 'publish',
					'posts_per_page' => '-1',
				)
			),
		)
	);

	foreach ( $meta_boxes as $meta_box ) {
		new RW_Meta_Box( $meta_box );
	}
}
add_action( 'admin_init', 'rw_register_meta_boxes' );

?>