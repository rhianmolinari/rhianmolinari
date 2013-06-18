<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>

<aside class="sidebar span3 offset1">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php else : ?>
	<div>
		<h3>Categorias</h3>
		<ul><?php wp_list_categories( 'title_li=&exclude=1' ); ?></ul>
	</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	<?php else : ?>
	<div>
		<h3>Arquivo</h3>
		<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value=""><?php echo esc_attr( 'Selecione ' ); ?></option>
			<?php wp_get_archives( array(
				'type' => 'monthly',
				'format' => 'option',
				'show_post_count' => 1
				)
			);
			?>
		</select>
	</div>
	<?php endif; ?>

	<div>
		<a href="//affiliates.mozilla.org/link/banner/38918"><img src="//affiliates.mozilla.org/media/uploads/banners/a6ba37ea898454f3e53e11ce87aeccb43304c7a5.png" alt="Baixar o Aurora" /></a>
	</div>


</aside>