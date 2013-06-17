<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>

<aside class="sidebar span2">
	<?php echo get_avatar( 'hello@rhianmolinari.com', 170 ); ?>

	<?php $files = rwmb_meta( 'rw_download_file_advanced', 'type=file' );
	if ( !empty($files) ) : foreach ( $files as $file ) {
		echo "<button class='span2' onclick=\"return !window.open('".$file['url']."')\">Download CV</button>";
		}
	endif;
	?>
</aside>