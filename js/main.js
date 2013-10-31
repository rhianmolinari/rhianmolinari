// Menu
$(document).ready(function() {
	$('.navbar .nav li').hover(
		function() {
			$('ul:first',this).show();; 
		},
		function() {
			$('ul:first',this).hide();
		}
	);
});

// Slide
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		slideshowSpeed: 4000,
		animationSpeed: 700,
		keyboard: true,
		pauseOnHover: true,
		touch: true,
		start: function(slider) {
			$('.flexslider').removeClass('flex-loading');
		}
	});
});
$(document).ready(function() {
	$('.flexslider').hover(
		function() {
			$('.flex-direction-nav li a').css({'opacity': '1', 'filter': 'alpha(opacity=100)'});
		},
		function() {
			$('.flex-direction-nav li a').css({'opacity': '0', 'filter': 'alpha(opacity=0)'});
		}
	);
});

// Project
$(document).ready(function() {
	$('.project > li a').hover(
		function() {
			$('img',this).css({'opacity': '0.1', 'filter': 'alpha(opacity=10)'});
			$('.project_info',this).css({'opacity': '1', 'filter': 'alpha(opacity=100)'});
		},
		function() {
			$('img',this).css({'opacity': '1', 'filter': 'alpha(opacity=100)'});
			$('.project_info',this).css({'opacity': '0', 'filter': 'alpha(opacity=0)'});
		}
	);
});

// Search
$(document).on('click', function(e) {
	var button = $(e.target).closest('#open-search'),
		search = $(e.target).closest('.navbar-search');

	if ( button.length ) {
		e.preventDefault();
		$('.navbar-search').show();
		$('.navbar-search input[type="search"]').focus();
		$('header #open-search, header nav').hide();
	}
	else if (!search.length) {
		$('.navbar-search').hide();
		$('header nav').show();
		$('header #open-search').css('display', 'inline-block');
	}
});

// ToolTip
$(document).ready(function () {
	$('abbr[data-original-title], abbr[title]').tooltip();
});

// Pop up
function popup(pageURL, title) {
	var width = 500;
	var height = 450;

	var left = (screen.width/2)-(width/2);
	var top = (screen.height/2)-(height/2) -30;

	var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+width+', height='+height+', top='+top+', left='+left);
};