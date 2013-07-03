<?php
/**
 * Template Name: About
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row">
		<hgroup class="span12">
			<h2><?php the_title(); ?></h2>
			<?php if(has_excerpt()): ?>
				<h3><?php echo get_the_excerpt(); ?></h3>
			<?php endif; ?>
		</hgroup>
	</div>
</div>
<section class="maincontent">
	<div class="container">
		<div class="row">
			<?php get_sidebar('aboutL'); ?>
			<div class="span6">
				<article>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			</div>
			<?php get_sidebar('aboutR'); ?>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>