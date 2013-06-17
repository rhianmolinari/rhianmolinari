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
					<hr>
					<div class="row plus">
						<div class="span3">
							<h4>Habilidades</h4>
							<ul class="trace">
								<li>Webdesign</li>
								<li>Design de interface</li>
								<li>Desenvolvimento Front-End</li>
								<li><abbr title="User Experience">UX</abbr> Design</li>
								<li>Responsive Web Design</li>
							</ul>
						</div>
						<div class="span3">
							<h4>Idiomas</h4>
							<ul class="trace">
								<li>Portugu&ecirc;s</li>
								<li>Ingl&ecirc;s</li>
							</ul>
						</div>
					</div>
				</article>
			</div>
			<?php get_sidebar('aboutR'); ?>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>