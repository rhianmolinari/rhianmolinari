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
							<?php if(has_category()): ?>
								<ul>
									<?php
									$categories = get_the_category();
									if($categories){
										foreach($categories as $category) {
											if ($category->category_parent != 0 || $category->cat_ID == 1)continue;
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

							<ul>
								<li>
									<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=rhianmolinari">Share on Twitter</a>
								</li>
								<li>
									<a target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php the_permalink(); ?><?php if ( '' != get_the_post_thumbnail() )?>&p[images][0]=<?php {echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );} ?>&p[title]=<?php the_title(); ?>&p[summary]=<?php if(has_excerpt()) { echo get_the_excerpt(); } else { echo excerpt(25); } ?>">Share on Facebook</a>
								</li>
								<li>
									<a target="_blank" href="https://plusone.google.com/_/+1/confirm?hl=pt-br‎&url=<?php the_permalink(); ?>">Share on Google+</a>
								</li>
							</ul>

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