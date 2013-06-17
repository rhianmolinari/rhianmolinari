<?php

// Widget
function rhianmolinari_widgets_init() {
	register_sidebar( array(
		'name' => 'Sidebar 1',
		'id' => 'sidebar-1',
		'description' => 'Sidebar 1 Widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Sidebar 2',
		'id' => 'sidebar-2',
		'description' => 'Sidebar 1 Widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer',
		'id' => 'footer',
		'description' => 'Footer Widget',
		'before_widget' => '<div class="span2 widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'rhianmolinari_widgets_init' );

?>