<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="google-site-verification" content="GgCGcwbOLD4y-RVv21FfVTwSQDGfqGdyHGbs3psuh6c" />
<meta name="google-translate-customization" content="b756cbb921343aae-2432d119066f6109-g9dbccd7a23389ec0-15"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- SEO -->
<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?>" />
<meta property="og:url" content="<?php url_canonical(); ?>" />
<meta property="og:locale" content="pt-BR" />
<meta property="og:locale:alternate" content="pt-PT" />
<meta property="og:locale:alternate" content="en-GB" />
<meta property="og:locale:alternate" content="en-US" />
<meta property="og:locale:alternate" content="fr-FR" />

<?php if ( is_single() ) { ?>
<!-- Meta Tags single -->
<meta name="description" content="<?php if(has_excerpt()) { echo strip_tags ( get_the_excerpt() ); } else { echo strip_tags ( excerpt(50) ); } ?>" />
<meta property="og:description" content="<?php if(has_excerpt()) { echo strip_tags ( get_the_excerpt() ); } else { echo strip_tags ( excerpt(50) ); } ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) { echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>" />
<?php } else { ?>
<meta property="og:image" content="<?php echo get_bloginfo('template_url') .'/img/logo.png'; ?>" />
<?php } ?>

<?php if ( is_page() || is_home() ) { ?>
<!-- Meta Tags page and home -->
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<?php } ?>

<?php if ( is_page() ) { ?>
<!-- Meta Tags page -->
<meta name="description" content="<?php if(has_excerpt()) { echo strip_tags ( get_the_excerpt() ); } else { echo strip_tags ( excerpt(50) ); } ?>" />
<?php } ?>

<?php if ( is_home() ) { ?>
<!-- Meta Tags home -->
<meta name="description" content="<?php content_page_id(11); ?>" />
<?php } ?>

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@rhianmolinari" />
<meta name="twitter:creator" content="@rhianmolinari" />
<meta name="twitter:title" content="<?php bloginfo('name'); ?>"/>

<link rel="canonical" href="<?php url_canonical(); ?>"/>
<!-- end SEO -->

<!-- Icon -->
<meta name="application-name" content="<?php bloginfo('name'); ?>" />
<meta name="msapplication-TileColor" content="#2383c4" />
<meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/img/win8/tiny.png" />
<meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/img/win8/square.png" />
<meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/img/win8/wide.png" />
<meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/img/win8/large.png" />
<meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://www.rhianmolinari.com/feed&id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://www.rhianmolinari.com/feed&id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://www.rhianmolinari.com/feed&id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://www.rhianmolinari.com/feed&id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://www.rhianmolinari.com/feed&id=5; cycle=1" />

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/png" />

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/apple/apple-touch-icon-iphone.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple/apple-touch-icon-ipad.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/apple/apple-touch-icon-iphone-retina.png" />
<!-- end Icon -->

<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/less/bootstrap.less" type="text/less" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/less/responsive.less" type="text/less" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/less/print.less" type="text/less" media="print" />

<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/less-1.3.3.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="navbar navbar-inner">
		<a class="brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>">
		</a>
		<button type="button" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<nav role="navigation" class="nav-collapse collapse">
			<?php wp_nav_menu( array( 
				'theme_location' => 'primary',
				'container' => false,
				'menu_class'=> 'nav' )
				);
			?>
		</nav>
		<a href="#" title="Search" id="open-search">
			<i class="my-search"></i>
		</a>
		<form role="search" class="navbar-search" method="get" action="<?php echo home_url( '/' ); ?>">
			<fieldset>
				<label for="search" class="hide">Buscar por</label>
				<input type="search" value="<?php the_search_query(); ?>" id="search" name="s" placeholder="O que voc&ecirc; esta procurando?" />
				<button>Buscar</button>
			</fieldset>
		</form>
	</header>