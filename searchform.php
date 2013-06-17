<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>

<form role="search" id="searchform" method="get" action="<?php bloginfo(url); ?>">
	<fieldset>
		<div class="input-append">
			<label for="search" class="hide">Buscar por</label>
			<input type="search" value="<?php the_search_query(); ?>" id="search" name="s" />
			<button type="submit">Buscar</button>
		</div>
	</fieldset>
</form>