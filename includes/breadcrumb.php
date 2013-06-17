<?php

// Breadcrumb
function the_breadcrumb() {

	$showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter = '<span class="divider">&raquo;</span>'; // delimiter between crumbs
	$home = 'Home'; // text for the 'Home' link
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$before = '<li class="active">'; // tag before the current crumb
	$after = '</li>'; // tag after the current crumb

	global $post;
	$homeLink = get_bloginfo('url');

	if (is_home() || is_front_page()) {

	if ($showOnHome == 1) echo '<ul class="breadcrumb"><li><a href="' . $homeLink . '">' . $home . '</a></li></ul>';

	}

	else {
		echo '<ul class="breadcrumb"><li><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . '</li>';

	if ( is_category() ) {
		$thisCat = get_category(get_query_var('cat'), false);
		if ($thisCat->parent != 0) echo '<li>' . get_category_parents($thisCat->parent, TRUE, '' . $delimiter . '') . '</li>';
		echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

	}
	elseif ( is_search() ) {
		echo $before . 'Search results for "' . get_search_query() . '"' . $after;

	}
	elseif ( is_day() ) {
		echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . '</li>';
		echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . '</li>';
		echo $before . get_the_time('d') . $after;
	}

	elseif ( is_month() ) {
		echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . '</li>';
		echo $before . get_the_time('F') . $after;
	}

	elseif ( is_year() ) {
		echo $before . get_the_time('Y') . $after;
	}

	elseif ( is_single() && !is_attachment() ) {
		if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li>';
			if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
		}
		else {
			$cat = get_the_category(); $cat = $cat[0];
			$cats = '<li>' . get_category_parents($cat, TRUE, '' . $delimiter . '') . '</li>';
			if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
			echo $cats;
			if ($showCurrent == 1) echo $before . get_the_title() . $after;
		}
	}

	elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		$post_type = get_post_type_object(get_post_type());
		echo $before . $post_type->labels->singular_name . $after;
	}

	elseif ( is_attachment() ) {
		$parent = get_post($post->post_parent);
		$cat = get_the_category($parent->ID); $cat = $cat[0];
		echo '<li>' . get_category_parents($cat, TRUE, '' . $delimiter . '') . '</li>';
		echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
		if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	}

	elseif ( is_page() && !$post->post_parent ) {
		if ($showCurrent == 1) echo $before . get_the_title() . $after;
	}

	elseif ( is_page() && $post->post_parent ) {
		$parent_id  = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
			$parent_id  = $page->post_parent;
		}
		$breadcrumbs = array_reverse($breadcrumbs);
		for ($i = 0; $i < count($breadcrumbs); $i++) {
			echo $breadcrumbs[$i];
			if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
		}
		if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
	}

	elseif ( is_tag() ) {
		echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
	}

	elseif ( is_author() ) {
		global $author;
		$userdata = get_userdata($author);
		echo $before . 'Articles posted by ' . $userdata->display_name . $after;
	}

	elseif ( is_404() ) {
		echo $before . 'Error 404' . $after;
	}

	if ( get_query_var('paged') ) {
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
		echo __('Page') . ' ' . get_query_var('paged');
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
	}
	echo '</ul>';
	}
}

?>