
    jQuery(document).ready(function ($) {
'use strict';
	/* add sub-menu arrow */
	$('.taptap-by-bonfire ul li ul').before($('<span class="taptap-sub-arrow"><span class="taptap-sub-arrow-inner"></span></span>'));

	/* accordion */
	$(".taptap-by-bonfire .tapmenu > li > span, .taptap-by-bonfire .sub-menu > li > span").on('click touchend', function(e) {
	e.preventDefault();
		if (false === $(this).next().is(':visible')) {
			$(this).parent().siblings().find(".sub-menu").slideUp(300);
			$(this).siblings().find(".sub-menu").slideUp(300);
			$(this).parent().siblings().find("span").removeClass("taptap-submenu-active");
            $(this).siblings().find("span").removeClass("taptap-submenu-active");
		}
		$(this).next().slideToggle(300);
		$(this).toggleClass("taptap-submenu-active");
	})
	
	/* sub-menu arrow animation */
	$(".taptap-by-bonfire .tapmenu > li > span").on('click touchend', function(e) {
	e.preventDefault();
		if($(".taptap-by-bonfire .sub-menu > li > span").hasClass('taptap-submenu-active'))
			{
				$(".taptap-by-bonfire .sub-menu > li > span").removeClass("taptap-submenu-active");
			}
	})

	/* accordion */
	$(".taptap-by-bonfire .tapmenu > li.menu-item-has-children > a, .taptap-by-bonfire .sub-menu > li.menu-item-has-children > a").on('click touchend', function(e) {
	e.preventDefault();
		if (false === $(this).next().next().is(':visible')) {
			$(this).parent().siblings().find(".sub-menu").slideUp(300);
			$(this).siblings().find(".sub-menu").slideUp(300);
			$(this).parent().siblings().find("span").removeClass("taptap-submenu-active");
            $(this).siblings().find("span").removeClass("taptap-submenu-active");
		}
		$(this).next().next().slideToggle(300);
		$(this).next().toggleClass("taptap-submenu-active");
	})

	/* hover */
	$(".taptap-by-bonfire .tapmenu > li.menu-item-has-children > a, .taptap-by-bonfire .sub-menu > li.menu-item-has-children > a").hover(
		function() {
			$(this).parent().addClass("full-item-arrow-hover");
		},
		function() {
			$(this).parent().removeClass("full-item-arrow-hover");
	});
	$(".taptap-by-bonfire .tapmenu > li > span, .taptap-by-bonfire .sub-menu > li > span").hover(
		function() {
			$(this).parent().addClass("full-item-arrow-hover");
		},
		function() {
			$(this).parent().removeClass("full-item-arrow-hover");
	});
	
	/* sub-menu arrow animation */
	$(".taptap-by-bonfire .tapmenu > li.menu-item-has-children > a").on('click touchend', function(e) {
	e.preventDefault();
		if($(".taptap-by-bonfire .sub-menu > li > span").hasClass('taptap-submenu-active'))
			{
				$(".taptap-by-bonfire .sub-menu > li > span").removeClass("taptap-submenu-active");
			}
	})
	
	/* close sub-menus when menu button clicked */
	$(".taptap-main-menu-button-wrapper, .taptap-main-menu-activator, .taptap-background-overlay").on('click touchend', function(e) {
		if($(".taptap-by-bonfire .tapmenu > li > span, .taptap-by-bonfire .sub-menu > li > span").hasClass('taptap-submenu-active'))
			{
				$(".taptap-by-bonfire .tapmenu > li").find(".sub-menu").slideUp(300);
				$(".taptap-by-bonfire .tapmenu > li > span, .taptap-by-bonfire .sub-menu > li > span").removeClass("taptap-submenu-active");
			}
	})
	
});

// BEGIN HIDE MENU WHEN MENU ITEM CLICKED
jQuery('.taptap-by-bonfire ul li a').not('.taptap-by-bonfire ul li.menu-item-has-children > a').on('click', function(e) {
'use strict';
		if(jQuery('.taptap-background-color').hasClass('taptap-background-color-active'))
		{
			/* hide main wrapper */
			jQuery('.taptap-main-wrapper').removeClass('taptap-main-wrapper-active');
			/* hide background color */
			jQuery('.taptap-background-color').removeClass('taptap-background-color-active');
			/* hide background image */
			jQuery('.taptap-background-image').removeClass('taptap-background-image-active');
            /* hide background overlay */
			jQuery('.taptap-background-overlay').removeClass('taptap-background-overlay-active');
			/* hide expanded menu button */
			jQuery('.menu-button-wrapper').removeClass('taptap-menu-active');
            /* show menu button label */
            jQuery('.taptap-menu-button-label').removeClass('taptap-menu-button-label-hide');
		}
});
// END HIDE MENU WHEN MENU ITEM CLICKED

jQuery(document).ready(function (jQuery) {
'use strict';

	/* add sub-menu arrow */
	jQuery('.taptap-by-bonfire-image ul li ul').before(jQuery('<span class="taptap-image-sub-arrow"><span class="taptap-image-sub-arrow-inner"></span></span>'));

	/* accordion (top-level) */
	jQuery(".taptap-by-bonfire-image .menu > li.menu-item-has-children .taptap-image-grid-item > a").on('click', function(e) {
		e.preventDefault();
			if (false === jQuery(this).next().next().is(':visible')) {
				jQuery(this).closest(".taptap-image-sub-wrapper").parent().siblings().find(".sub-menu").slideUp(0);
				jQuery(this).siblings().find(".sub-menu").slideUp(0);
				jQuery(this).next().next().find("> li").removeClass("taptap-by-bonfire-image-sub-active");
				jQuery(this).closest(".taptap-image-sub-wrapper").parent().siblings().find("span").removeClass("taptap-submenu-active");
				jQuery(this).siblings().find("span").removeClass("taptap-submenu-active");
				jQuery(this).closest(".taptap-image-sub-wrapper").parent().siblings().removeClass("taptap-by-bonfire-image-active");
			}
			jQuery(this).next().next().slideToggle(0);
			jQuery(this).next().next().find("> li").toggleClass("taptap-by-bonfire-image-sub-active");
			jQuery(this).next().toggleClass("taptap-submenu-active");
			jQuery(this).closest(".taptap-image-sub-wrapper").parent().toggleClass("taptap-by-bonfire-image-active");
	});

	/* accordion (sub-level) */
	jQuery(".taptap-by-bonfire-image .sub-menu > li.menu-item-has-children > a").on('click', function(e) {
		e.preventDefault();
			if (false === jQuery(this).next().next().is(':visible')) {
				jQuery(this).parent().siblings().find(".sub-menu").slideUp(300);
				jQuery(this).siblings().find(".sub-menu").slideUp(300);
				jQuery(this).next().next().find("> li").removeClass("taptap-by-bonfire-image-sub-active");
				jQuery(this).parent().siblings().find("span").removeClass("taptap-submenu-active");
				jQuery(this).siblings().find("span").removeClass("taptap-submenu-active");
			}
			jQuery(this).next().next().slideToggle(300);
			jQuery(this).next().next().find("> li").toggleClass("taptap-by-bonfire-image-sub-active");
			jQuery(this).next().toggleClass("taptap-submenu-active");
	});
	
	/* close when ESC button pressed */
	jQuery(document).keyup(function(e) {
        if (e.keyCode === 27) {
            jQuery(".taptap-by-bonfire-image .menu > li").find(".sub-menu").slideUp(300);
            jQuery(".taptap-by-bonfire-image .menu li span").removeClass("taptap-submenu-active");
        }
	});
	
});



// BEGIN REMOVE MENU DESCRIPTION DIV IF NO DESCRIPTION ENTERED
jQuery(document).ready(function() {
'use strict';
	jQuery('.taptap-menu-item-description:empty').remove();
});
// END REMOVE MENU DESCRIPTION DIV IF NO DESCRIPTION ENTERED
