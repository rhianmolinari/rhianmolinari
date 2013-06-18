<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>
<article>
	<?php if ( '' != get_the_post_thumbnail() ) {
		echo '<a href="'. get_permalink() . '">';
		the_post_thumbnail( 'default' );
		echo '</a>';
	} ?>
	<section>
		<a href="<?php the_permalink(); ?>">
			<h4><?php the_title(); ?></h4>
		</a>
		<?php if(has_excerpt()): ?>
			<h3><?php echo get_the_excerpt(); ?></h3>
		<?php endif; ?>
		<button onclick="location.href='<?php the_permalink(); ?>'">Ler Mais</button>
	</section>
</article>