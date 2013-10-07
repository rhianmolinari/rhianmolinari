<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>
</div>
<footer>
	<div class="footer">
		<div class="container">
			<div class="row">

				<div class="span3">
					<div id="mc_embed_signup">
						<h3>Newsletter</h3>
						<form action="http://rhianmolinari.us7.list-manage1.com/subscribe/post?u=8ef86cf04eeaffd179e91c4c3&amp;id=6a0f032f12" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<fieldset>
								<label class="hide">Newsletter</label>
								<input type="text" class="span3" placeholder="nome" value="" name="FNAME" id="mce-FNAME">
								<input type="text" class="span3" placeholder="sobrenome" value="" name="LNAME" id="mce-LNAME">
								<input type="email" class="span3" placeholder="e-mail" value="" name="EMAIL" id="mce-EMAIL">
								<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">Cadastrar</button>
							</fieldset>
						</form>
					</div>
				</div>

				<?php if ( is_active_sidebar( 'footer' ) ) : ?>
				<?php dynamic_sidebar( 'footer' ); ?>
				<?php else : ?>
				<div class="span2 widget">
					<h3>Blog</h3>
					<ul>
						<?php 
						$args = array( 'numberposts' => '4', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ) { 
							echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' . $recent["post_title"].'</a></li>';
						}
						?>
					</ul>
				</div>
				<?php endif; ?>

				<div class="span2">
					<h3>Tradutor</h3>
						<div id="google_translate_element"></div><script type="text/javascript">function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'pt', autoDisplay: false, gaTrack: true, gaId: 'UA-40821594-1'}, 'google_translate_element'); }</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        				
        				<a href="http://www.w3.org/html/logo/" target="_blank">
							<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
						</a>
				</div>

				<div class="span2">
					<h3>Rede social</h3>
					<ul>
						<?php if ( get_the_author_meta( 'twitter' ) ): ?>
						<li>
							<a href="http://www.twitter.com/<?php the_author_meta( 'twitter', 1 ); ?>" target="_blank">twitter</a>
						</li>
						<?php endif; ?>
						<?php if ( get_the_author_meta( 'facebook' ) ): ?>
						<li>
							<a href="<?php the_author_meta( 'facebook', 1 ); ?>" target="_blank">facebook</a>
						</li>
						<?php endif; ?>
						<?php if ( get_the_author_meta( 'googleplus' ) ): ?>
						<li>
							<a href="<?php the_author_meta( 'googleplus', 1 ); ?>" target="_blank">google+</a>
						</li>
						<?php endif; ?>
						<?php if ( get_the_author_meta( 'linkedin' ) ): ?>
						<li>
							<a href="<?php the_author_meta( 'linkedin', 1 ); ?>" target="_blank">linkedin</a>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				
				<div class="span3">
					<h3>Contato</h3>
					<p>
						<a href="mailto:<?php the_author_meta( 'user_email', 1 ); ?>">hello<span>[at]</span>rhianmolinari<span>.</span>com</a>
					</p>
					<?php if ( get_the_author_meta( 'phone' ) ): ?>
					<p>
						<a href="tel:+number"><?php the_author_meta( 'phone', 1 ); ?></a>
					</p>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="span12">
					<small>
						<a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US" target="_blank"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/80x15.png" /></a><p>This work by <strong>Rhian Molinari</strong> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US" target="_blank">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.</p>
					</small>
				</div>
			</div>
		</div>
	</div>
</footer>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-40821594-1', 'rhianmolinari.com');ga('send', 'pageview');</script>
<?php wp_footer(); ?>
</body>
</html>