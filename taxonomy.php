<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
get_header(); ?>

<?php if (have_posts()) : ?>
<div class="container">
	<div class="row">
		<hgroup class="span12">
			<h2>Projetos</h2>
			<h3><?php single_cat_title(); ?></h3>
		</hgroup>
	</div>
</div>
<section class="maincontent">
	<div class="container">
		<div class="row">
			<div class="span8">
				<?php while ( have_posts() ) : the_post();
					get_template_part( 'loop', 'list' );
				endwhile; ?>
				<?php get_template_part( 'loop', 'pagination' ); ?>
			</div>
			<?php get_sidebar('taxonomy'); ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>