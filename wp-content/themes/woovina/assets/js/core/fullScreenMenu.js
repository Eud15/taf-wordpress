var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";
	// Full Screen header menu
	woovinaFullScreenMenu();
});

/* ==============================================
FULL SCREEN MENU
============================================== */
function woovinaFullScreenMenu() {
	"use strict"

	var $siteHeader 	= $j('#site-header.full_screen-header'),
		$menuWrap 		= $j('#site-header.full_screen-header #full-screen-menu'),
		$menuBar 		= $j('#site-header.full_screen-header .menu-bar'),
		$customLogo 	= $j('#site-logo.has-full-screen-logo');

	if($menuBar.length) {

		// Open menu function
		var woovinaFullScreenMenuOpen = function() {
			$siteHeader.addClass('nav-open');
			$menuBar.addClass('exit');
			$customLogo.addClass('opened');
			$menuWrap.addClass('active');
			$menuWrap.fadeIn(200);

			var innerWidth = $j('html').innerWidth();
			$j('html').css('overflow', 'hidden');
			var hiddenInnerWidth = $j('html').innerWidth();
			$j('html').css('margin-right', hiddenInnerWidth - innerWidth);
        }

		// Close menu function
		var woovinaFullScreenMenuClose = function() {
			$siteHeader.removeClass('nav-open');
			$menuBar.removeClass('exit');
			$customLogo.removeClass('opened');
			$menuWrap.removeClass('active');
			$menuWrap.fadeOut(200);

			$j('html').css({
				'overflow': '',
				'margin-right': '' 
			});
        	$j('#full-screen-menu #site-navigation ul > li.dropdown').removeClass('open-sub');
            $j('#full-screen-menu #site-navigation ul.sub-menu').slideUp(200);
        }

		$menuBar.on('click', function(e) {
			e.preventDefault();

			if(! $j(this).hasClass('exit')) {
				woovinaFullScreenMenuOpen();
	        } else {
	        	woovinaFullScreenMenuClose();
	        }

		});

		// Logic for open sub menus
        $j('#full-screen-menu #site-navigation ul > li.dropdown > a').on('tap click', function() {

            if($j(this).closest('li.dropdown').find('> ul.sub-menu').is(':visible')) {
                $j(this).closest('li.dropdown').removeClass('open-sub');
                $j(this).closest('li.dropdown').find('> ul.sub-menu').slideUp(200);
            } else {
                $j(this).closest('li.dropdown').addClass('open-sub');
                $j(this).closest('li.dropdown').find('> ul.sub-menu').slideDown(200);
            }

            return false;

        });

        // Close menu if anchor link
        $j('#full-screen-menu #site-navigation a.menu-link[href*="#"]:not([href="#"])').on('click', function() {
        	woovinaFullScreenMenuClose();
	    });

	}

}