<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */

	global $query_string;

	$query_args = explode("&", $query_string);
	$search_query = array();

	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach

	$search = new WP_Query($search_query);

get_header(); ?>

<?php if ( have_posts() ) : ?>
<div class="container">
	<div class="row">
		<hgroup class="span12">
			<h2>Busca por</h2>
			<h3><?php echo get_search_query(); ?> <small>(<?php echo $search->found_posts; ?>)</small></h3>
		</hgroup>
	</div>
</div>
<section class="maincontent">
	<div class="container">
		<div class="row">
			<div class="span8">
			<?php if (have_posts()) : while (have_posts()) : the_post();
				get_template_part( 'loop', 'list' );
			endwhile; endif; ?>
				<?php get_template_part( 'loop', 'pagination' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php else : ?>

<div class="container">
	<div class="row">
		<hgroup class="span12">
			<h2>Busca por</h2>
			<h3><?php echo get_search_query(); ?> <small>(<?php echo $search->found_posts; ?>)</small></h3>
		</hgroup>
	</div>
</div>

<section class="maincontent">
	<div class="container">
		<div class="row">
			<div class="span12 notfound">
				<hgroup>
					<h1>:(</h1>
					<h3>Sua pesquisa n&atilde;o encontrou nenhum resultado</h3>
				</hgroup>
				<p>Tente novamente com outro termo.</p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>

<?php get_footer(); ?>