<?php
/**
 * Template Name: Blog
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
get_header(); ?>

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
			<div class="span8">
				<?php $paged = (get_query_var('paged'))?get_query_var('paged') : 1; ?>
				<?php query_posts(array(
					'post_status' => 'publish',
					'orderby'=>'date',
					'order'=>'DESC',
					'paged' => $paged )
				); if ( have_posts() ) while ( have_posts() ) : the_post();
					get_template_part( 'loop', 'listdate' );
				endwhile; ?>
				<?php get_template_part( 'loop', 'pagination' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>