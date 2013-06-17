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
<meta name="google-translate-customization" content="b756cbb921343aae-2432d119066f6109-g9dbccd7a23389ec0-15"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">


<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/less/bootstrap.less" type="text/less" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/less/responsive.less" type="text/less" />


<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
<script src="<?php bloginfo('template_url'); ?>/js/less-1.3.3.min.js" type="text/javascript" ></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js" type="text/javascript" ></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="navbar navbar-inner">
		<a class="brand" href="<?php bloginfo(url); ?>" title="<?php bloginfo(name); ?>">
			<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo(name); ?>">
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
		<a href="#" title="Search" id="open-search" class="">
			<i class="my-search"></i>
		</a>
		<form role="search" class="navbar-search" method="get" action="<?php bloginfo(url); ?>">
			<fieldset>
				<label for="search" class="hide">Buscar por</label>
				<input type="search" value="<?php the_search_query(); ?>" id="search" name="s" placeholder="What are you looking for?" />
				<button>Buscar</button>
			</fieldset>
		</form>
	</header>