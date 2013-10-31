<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="row">
		<hgroup class="span12">
			<h2>Blog</h2>
			<h3><?php the_title(); ?></h3>
		</hgroup>
	</div>
</div>
<section class="maincontent">
	<div class="container">
		<div class="row">
			<div class="span8">
				<article>
					<?php if ( '' != get_the_post_thumbnail() ) {
						the_post_thumbnail( 'default' );
					} ?>
					<div class="row">
						<div class="meta span2 hide-767px">
							<time datetime="<?php the_time('c'); ?>">
								<span class="day"><?php the_time('d'); ?></span>
								<span class="month"><?php the_time('M \'y'); ?></span>
							</time>
							<small class="post-author">Por <a href="#author-bio"><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></a></small>
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
							<?php if(has_excerpt()): ?>
								<hgroup>
									<h2><?php the_title(); ?></h2>
									<h3><?php echo get_the_excerpt(); ?></h3>
								</hgroup>
							<?php else: ?>
								<h2><?php the_title(); ?></h2>
							<?php endif; ?>
							<div class="entry-content">
								<?php the_content(); ?>

								<?php $files = rwmb_meta( 'rw_download_file_advanced', 'type=file' );
								if ( !empty($files) ) : ?>
								<div class="form-actions">
									<span class="help-block">Fa&ccedil;a o download aqui.</span>
								<?php foreach ( $files as $file ) {
									echo "<button onclick=\"return !window.open('".$file['url']."')\">".$file['name']."</button>";
								}
								?>
								</div>
								<?php endif; ?>
							</div>

							<div class="shared">
								<a class="twitter" href="javascript:void(0);" onclick="popup('https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=rhianmolinari', '<?php the_title(); ?>');"><span class="iconshare-twitter"></span>Tweet</a>
								<a class="facebook" href="javascript:void(0);" onclick="popup('http://www.facebook.com/sharer.php?s=100&p[url]=<?php the_permalink(); ?><?php if ( '' != get_the_post_thumbnail() )?>&p[images][0]=<?php {echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );} ?>&p[title]=<?php the_title(); ?>&p[summary]=<?php if(has_excerpt()) { echo get_the_excerpt(); } else { echo excerpt(25); } ?>', '<?php the_title(); ?>');"><span class="iconshare-facebook"></span>Like</a>
								<a class="gplus" href="javascript:void(0);" onclick="popup('https://plus.google.com/share?url=<?php the_permalink(); ?>', '<?php the_title(); ?>');"><span class="iconshare-gplus"></span>Share</a>
								</li>
							</div>

							<div id="author-bio">
								<?php echo get_avatar ( get_the_author_meta('user_email'), 100 ); ?>
								<div>
									<h4><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></h4>
									<p><?php the_author_meta( 'description' ); ?></p>
								
									<?php if ( get_the_author_meta( 'twitter' ) ): ?>
										<a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>" target="_blank" class="author-twitter"><?php the_author_meta( 'twitter' ); ?></a>
									<?php endif; ?>
								</div>
							</div>
							<?php disqus_embed('rhianmolinari'); ?>
						</section>
					</div>
				</article>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>