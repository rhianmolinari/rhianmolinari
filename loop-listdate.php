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
	<div class="row">
		<div class="meta span2 hide-767px">
			<time datetime="<?php the_time('c'); ?>">
				<span class="day"><?php the_time('d'); ?></span>
				<span class="month"><?php the_time('M \'y'); ?></span>
			</time>
			<small class="post-author">Por <a href="<?php the_permalink(); ?>#author-bio"><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></a></small>
			<?php if(has_category()):
				global $post;
				$taxonomy = 'category';

				// get the term IDs assigned to post.
				$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

				// exclude cat_ID -> 1
				$key = array_search(1, $post_terms);
				unset($post_terms[$key]);

				if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

					echo '<ul>';
					$term_ids = implode( ',' , $post_terms );
					$args = array(
						'taxonomy' => $taxonomy,
						'include' => $term_ids,
						'title_li' => '', // Remove name category in title
						'depth' => 1, // Show children level
						//Add more arguments if you need them with a different value from default
					);
					$terms = wp_list_categories($args);

					// display post categories
					echo $terms;
					echo '</ul>';
				}
			endif; ?>
		</div>
		<section class="span6">
			<a href="<?php the_permalink(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
			<?php if(has_excerpt()): ?>
				<h3><?php echo get_the_excerpt(); ?></h3>
			<?php endif; ?>
			<button onclick="location.href='<?php the_permalink(); ?>'">Ler Mais</button>
		</section>
	</div>
</article>