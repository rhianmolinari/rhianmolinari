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
			<?php if(has_category()): ?>
				<ul>
					<?php
					$categories = get_the_category();
					if($categories){
						foreach($categories as $category) {
							if ($category->term_id == 1)continue;
							echo '<li><a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( $category->name ) . '">'.$category->cat_name.'</a></li>';
						}
					}
					?>
				</ul>
			<?php endif; ?>
		</div>
		<section class="span6">
			<a href="<?php the_permalink(); ?>">
				<h4><?php the_title(); ?></h4>
			</a>
			<?php if(has_excerpt()): ?>
				<h3><?php echo get_the_excerpt(); ?></h3>
			<?php endif; ?>
			<button onclick="location.href='<?php the_permalink(); ?>'">Ler Mais</button>
		</section>
	</div>
</article>