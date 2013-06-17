<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
get_header(); ?>

<div class="container">
	<div class="row">
		<hgroup class="span12">
			<h2>404</h2>
			<h3>P&aacute;gina n&atilde;o encontrada</h3>
		</hgroup>
	</div>
</div>

<section class="maincontent">
	<div class="container">
		<div class="row">
			<div class="span12 notfound">
				<hgroup>	
					<h1>OPS!</h1>
					<h3>A URL solicitada n&atilde;o foi encontrada</h3>
				</hgroup>
				<p>Tente utilizar o sistema de busca.</p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>