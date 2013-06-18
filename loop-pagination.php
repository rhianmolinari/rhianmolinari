<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>
<nav class="pagination pagination-right">
	<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type' => 'list',
			'prev_text' => '&larr;',
			'next_text' => '&rarr;'
		) );
	?>
</nav>

<?php/*
<nav class="pager">
	<ul>
		<li class="previous"><?php previous_posts_link('&larr; Previous', 0); ?></li>
		<li class="next"><?php next_posts_link('Next &rarr;', 0); ?></li>
	</ul>
</nav>
*/?>