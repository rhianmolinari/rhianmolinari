<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>

<aside class="sidebar span3 offset1">
	<?php 
	$client_info = array(
		'name' => rwmb_meta('rw_client_name', 'type=text'),
		'url' => rwmb_meta('rw_client_url', 'type=url'),
	);
	if ( !empty($client_info['name']) && !empty($client_info['url']) ) : ?>
	<div>
		<h3>Informa&ccedil;&otilde;es do cliente</h3>
		<p><strong>Cliente: </strong><?php echo $client_info['name']; ?></p>
		<p><strong>URL: </strong><a target="_blank" href="<?php echo $client_info['url']; ?>"><?php echo $client_info['url']; ?></a></p>
	</div>
	<?php endif; ?>

	<?php 
		global $post;
		$taxonomy = 'tipo_projeto';

		// get the term IDs assigned to post.
		$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

		if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {
		
			echo '<div><h3>Caracter&iacute;sticas do projeto</h3><ul>';
			$term_ids = implode( ',' , $post_terms );
			$args = array(
				'taxonomy' => $taxonomy,
				'include' => $term_ids,
				'title_li' => '', // Remove name category in title
				//Add more arguments if you need them with a different value from default
			);
			$terms = wp_list_categories($args);

			// display post categories
			echo  $terms;
			echo '</ul></div>';
		}
	?>

	<?php if ( !empty($client_info['url']) ) : ?>
		<button class="span3" onclick="return !window.open('<?php echo $client_info['url']; ?>')">Visualizar Projeto</button>
	<?php endif; ?>
</aside>