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
			<h2>Projeto</h2>
			<h3><?php the_title(); ?></h3>
		</hgroup>
	</div>
</div>
<section class="maincontent">
	<div class="container">
		<div class="row">
			<div class="span8">
				<article>
					<section>
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
						</div>
					</section>
				</article>
			</div>
			<?php get_sidebar('projeto'); ?>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>