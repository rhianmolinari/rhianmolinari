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
			<h2>Arquivo</h2>
			<h3><?php
					if ( is_day() ) :
						printf( 'Dia: %s', '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( 'Mês: %s', '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( 'Ano: %s', '<span>' . get_the_date( 'Y', 'yearly archives date format' ) . '</span>' );
					else :
						'Arquivos';
					endif;
				?>
			</h3>
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
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>