<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>

<aside class="sidebar span3 offset1">
	<div>
		<h3>Idiomas</h3>
		<ul class="trace">
			<li>Portugu&ecirc;s</li>
			<li>Ingl&ecirc;s</li>
		</ul>
	</div>
	<div>
		<h3>Contato</h3>
		<p>
			<a href="mailto:<?php the_author_meta( 'user_email' ); ?>">hello<span>[at]</span>rhianmolinari<span>.</span>com</a>
		</p>
		<?php if ( get_the_author_meta( 'phone' ) ): ?>
			<p>
				<a href="tel:+number"><?php the_author_meta( 'phone' ); ?></a>
			</p>
		<?php endif; ?>
	</div>
</aside>