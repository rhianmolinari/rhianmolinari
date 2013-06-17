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

	<?php $terms = get_the_terms( $post->ID, 'project_type' );
	if ( !empty($terms) ) : ?>
	<div><h3>Caracter&iacute;sticas do projeto</h3><ul>
	<?php foreach ($terms as $term) {
		echo '<li><a href="'.get_term_link($term->slug, 'project_type').'">'.$term->name.'</a></li>';
	}
	?>
	</ul></div>
	<?php endif; ?>

	<?php if ( !empty($client_info['url']) ) : ?>
		<button class="span3" onclick="return !window.open('<?php echo $client_info['url']; ?>')">Visualizar Projeto</button>
	<?php endif; ?>
</aside>