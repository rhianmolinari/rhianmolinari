<?php

// Shortcodes
function embed_youtube($atts, $content=null) {
	extract(
		shortcode_atts(
			array(
				'height' => 350,
				'width' => '100%'
			),
		$atts
		)
	);
	
	$content = esc_url(
		str_replace('watch?v=','embed/', $content),
		array('http')
	);

	return '<iframe class="embed_movie" width="'.$width.'" height="'.$height.'" src="'.$content.'" frameborder="0" allowfullscreen></iframe>';
}
add_shortcode( 'youtube', 'embed_youtube' );

function embed_vimeo($atts, $content=null) {
	extract(
		shortcode_atts(
			array(
				'height' => 350,
				'width' => '100%'
			),
		$atts
		)
	);
	
	$content = esc_url(
		str_replace('vimeo.com','player.vimeo.com/video', $content),
		array('http')
	);

	return '<iframe class="embed_movie" src="'.$content.'?title=0&amp;byline=0&amp;portrait=0&amp;color=CA0000" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
}
add_shortcode( 'vimeo', 'embed_vimeo' );

?>