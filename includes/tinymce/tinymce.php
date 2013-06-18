<?php

// Enable more buttons
function enable_more_buttons($buttons) {
	$buttons[] = 'hr';
	$buttons[] = 'sup';
	$buttons[] = 'sub';
	$buttons[] = 'cleanup';

	return $buttons;
}
add_filter( 'mce_buttons', 'enable_more_buttons' );

// Custom Buttons
function rhianmolinari_add_buttons($plugin_array) {
	$plugin_array['rhianmolinari'] = get_template_directory_uri() . '/includes/tinymce/tinymce.js';

	return $plugin_array;
}
add_filter( "mce_external_plugins", "rhianmolinari_add_buttons" );

function rhianmolinari_register_buttons($buttons) {
	array_push( $buttons, 'youtube', 'vimeo' ); // 'youtube', 'vimeo'
	return $buttons;
}
add_filter( 'mce_buttons_3', 'rhianmolinari_register_buttons' );

// Add the Style Dropdown Menu to the second row of visual editor buttons
function rhianmolinari_register_dropdown($buttons) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'rhianmolinari_register_dropdown' );

function rhianmolinari_add_dropdown($settings) {
	$settings['theme_advanced_blockformats'] = 'p,address,h1,h2,h3,h4,h5,h6';
	$style_formats = array(
		array(
			'title' => 'Code',
			'inline' => 'code',
			'classes' => 'notranslate'
		),
		array(
			'title' => 'Pre',
			'block' => 'pre',
			'classes' => array( 'notranslate', 'prettyprint', 'linenums' )
		),
		array(
			'title' => 'No translate',
			'inline' => 'span',
			'classes' => 'notranslate'
		)
	);
	$settings['style_formats'] = json_encode( $style_formats );
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'rhianmolinari_add_dropdown' );

// Add style.css in editor Wordpress
function rhianmolinari_add_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'init', 'rhianmolinari_add_editor_styles' );

?>