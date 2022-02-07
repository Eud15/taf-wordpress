<?php

/*---------------------------First highlight color-------------------*/

	$vw_storefront_first_color = get_theme_mod('vw_storefront_first_color');

	$vw_storefront_custom_css= "";

	if($vw_storefront_first_color != false){
		$vw_storefront_custom_css .='span.cart-value, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .woocommerce span.onsale, #preloader{';
			$vw_storefront_custom_css .='background: '.esc_attr($vw_storefront_first_color).';';
		$vw_storefront_custom_css .='}';
	}

	if($vw_storefront_first_color != false){
		$vw_storefront_custom_css .='a, .phone_no i, .main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, .main-navigation ul.sub-menu a:hover, .heading-txt p, #footer .textwidget a, #footer li a:hover, #sidebar ul li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .post-navigation a:hover, .post-navigation a:focus, .main-navigation a:hover, .post-main-box:hover span a, .post-main-box:hover h2 a, .post-info:hover span a, .phone_no a:hover, .logo .site-title a:hover, .account a:hover, .cart_no a:hover, #slider .inner_carousel h1 a:hover, #comments p a, #content-vw a{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_first_color).';';
		$vw_storefront_custom_css .='}';
	}	
	if($vw_storefront_first_color != false){
		$vw_storefront_custom_css .='.main-navigation ul ul, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover{';
			$vw_storefront_custom_css .='border-color: '.esc_attr($vw_storefront_first_color).';';
		$vw_storefront_custom_css .='}';
	}

	/*--------------------Second highlight color-------------------*/

	$vw_storefront_second_color = get_theme_mod('vw_storefront_second_color');

	if($vw_storefront_first_color != false || $vw_storefront_second_color != false){
		$vw_storefront_custom_css .='input[type="submit"], .top-bar, .more-btn a, #footer-2, .scrollup i, #comments input[type="submit"], #comments a.comment-reply-link, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #sidebar h3, .pagination span, .pagination a, #footer a.custom_read_more, #sidebar a.custom_read_more, .widget_product_search button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .toggle-nav i, .wp-block-button__link, #footer .tagcloud a:hover, #sidebar .wp-block-search .wp-block-search__label, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button{
		background: linear-gradient(to right, '.esc_attr($vw_storefront_first_color).', '.esc_attr($vw_storefront_second_color).');
		}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_width_option','Full Width');
    if($vw_storefront_theme_lay == 'Boxed'){
		$vw_storefront_custom_css .='body{';
			$vw_storefront_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='right: 1%;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='right: 100px;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup.left i{';
			$vw_storefront_custom_css .='left: 100px;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Wide Width'){
		$vw_storefront_custom_css .='body{';
			$vw_storefront_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='right: 30px;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup.left i{';
			$vw_storefront_custom_css .='left: 30px;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Full Width'){
		$vw_storefront_custom_css .='body{';
			$vw_storefront_custom_css .='max-width: 100%;';
		$vw_storefront_custom_css .='}';
	}

	/*----------------Slider Content Layout -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_slider_content_option','Left');
    if($vw_storefront_theme_lay == 'Left'){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='text-align:left;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Center'){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='text-align:center; right: 25%; left: 25%;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Right'){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='text-align:right; right: 10%; left: 45%;';
		$vw_storefront_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_storefront_slider_content_padding_top_bottom = get_theme_mod('vw_storefront_slider_content_padding_top_bottom');
	$vw_storefront_slider_content_padding_left_right = get_theme_mod('vw_storefront_slider_content_padding_left_right');
	if($vw_storefront_slider_content_padding_top_bottom != false || $vw_storefront_slider_content_padding_left_right != false){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='top: '.esc_attr($vw_storefront_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_storefront_slider_content_padding_top_bottom).';left: '.esc_attr($vw_storefront_slider_content_padding_left_right).';right: '.esc_attr($vw_storefront_slider_content_padding_left_right).';';
		$vw_storefront_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_blog_layout_option','Default');
    if($vw_storefront_theme_lay == 'Default'){
		$vw_storefront_custom_css .='.post-main-box{';
			$vw_storefront_custom_css .='';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Center'){
		$vw_storefront_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$vw_storefront_custom_css .='text-align:center;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.post-info{';
			$vw_storefront_custom_css .='margin-top:10px;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Left'){
		$vw_storefront_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, #our-services p{';
			$vw_storefront_custom_css .='text-align:Left;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.post-main-box h2{';
			$vw_storefront_custom_css .='margin-top:10px;';
		$vw_storefront_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$vw_storefront_resp_slider = get_theme_mod( 'vw_storefront_resp_slider_hide_show',false);
	if($vw_storefront_resp_slider == true && get_theme_mod( 'vw_storefront_slider_arrows', false) == false){
    	$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='display:none;';
		$vw_storefront_custom_css .='} ';
	}
    if($vw_storefront_resp_slider == true){
    	$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='display:block;';
		$vw_storefront_custom_css .='} }';
	}else if($vw_storefront_resp_slider == false){
		$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='display:none;';
		$vw_storefront_custom_css .='} }';
	}

	$vw_storefront_resp_sidebar = get_theme_mod( 'vw_storefront_sidebar_hide_show',true);
    if($vw_storefront_resp_sidebar == true){
    	$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#sidebar{';
			$vw_storefront_custom_css .='display:block;';
		$vw_storefront_custom_css .='} }';
	}else if($vw_storefront_resp_sidebar == false){
		$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#sidebar{';
			$vw_storefront_custom_css .='display:none;';
		$vw_storefront_custom_css .='} }';
	}

	$vw_storefront_resp_scroll_top = get_theme_mod( 'vw_storefront_resp_scroll_top_hide_show',true);
	if($vw_storefront_resp_scroll_top == true && get_theme_mod( 'vw_storefront_footer_scroll',true) != true){
    	$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='visibility:hidden !important;';
		$vw_storefront_custom_css .='} ';
	}
    if($vw_storefront_resp_scroll_top == true){
    	$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='visibility:visible !important;';
		$vw_storefront_custom_css .='} }';
	}else if($vw_storefront_resp_scroll_top == false){
		$vw_storefront_custom_css .='@media screen and (max-width:575px){';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='visibility:hidden !important;';
		$vw_storefront_custom_css .='} }';
	}

	/*---------------- Blog Page ------------------*/

	$vw_storefront_featured_image_border_radius = get_theme_mod('vw_storefront_featured_image_border_radius', 0);
	if($vw_storefront_featured_image_border_radius != false){
		$vw_storefront_custom_css .='.box-image img, .feature-box img{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_featured_image_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_featured_image_box_shadow = get_theme_mod('vw_storefront_featured_image_box_shadow',0);
	if($vw_storefront_featured_image_box_shadow != false){
		$vw_storefront_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_storefront_custom_css .='box-shadow: '.esc_attr($vw_storefront_featured_image_box_shadow).'px '.esc_attr($vw_storefront_featured_image_box_shadow).'px '.esc_attr($vw_storefront_featured_image_box_shadow).'px #cccccc;';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_storefront_button_padding_top_bottom = get_theme_mod('vw_storefront_button_padding_top_bottom');
	$vw_storefront_button_padding_left_right = get_theme_mod('vw_storefront_button_padding_left_right');
	if($vw_storefront_button_padding_top_bottom != false || $vw_storefront_button_padding_left_right != false){
		$vw_storefront_custom_css .='.post-main-box .more-btn a{';
			$vw_storefront_custom_css .='padding-top: '.esc_attr($vw_storefront_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_storefront_button_padding_top_bottom).';padding-left: '.esc_attr($vw_storefront_button_padding_left_right).';padding-right: '.esc_attr($vw_storefront_button_padding_left_right).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_button_border_radius = get_theme_mod('vw_storefront_button_border_radius');
	if($vw_storefront_button_border_radius != false){
		$vw_storefront_custom_css .='.post-main-box .more-btn a{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_button_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_storefront_footer_background_color = get_theme_mod('vw_storefront_footer_background_color');
	if($vw_storefront_footer_background_color != false){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background-color: '.esc_attr($vw_storefront_footer_background_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_copyright_alingment = get_theme_mod('vw_storefront_copyright_alingment');
	if($vw_storefront_copyright_alingment != false){
		$vw_storefront_custom_css .='.copyright p{';
			$vw_storefront_custom_css .='text-align: '.esc_attr($vw_storefront_copyright_alingment).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_copyright_padding_top_bottom = get_theme_mod('vw_storefront_copyright_padding_top_bottom');
	if($vw_storefront_copyright_padding_top_bottom != false){
		$vw_storefront_custom_css .='#footer-2{';
			$vw_storefront_custom_css .='padding-top: '.esc_attr($vw_storefront_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_storefront_copyright_padding_top_bottom).';';
		$vw_storefront_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_storefront_scroll_to_top_font_size = get_theme_mod('vw_storefront_scroll_to_top_font_size');
	if($vw_storefront_scroll_to_top_font_size != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_scroll_to_top_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_padding = get_theme_mod('vw_storefront_scroll_to_top_padding');
	$vw_storefront_scroll_to_top_padding = get_theme_mod('vw_storefront_scroll_to_top_padding');
	if($vw_storefront_scroll_to_top_padding != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='padding-top: '.esc_attr($vw_storefront_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_storefront_scroll_to_top_padding).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_width = get_theme_mod('vw_storefront_scroll_to_top_width');
	if($vw_storefront_scroll_to_top_width != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='width: '.esc_attr($vw_storefront_scroll_to_top_width).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_height = get_theme_mod('vw_storefront_scroll_to_top_height');
	if($vw_storefront_scroll_to_top_height != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='height: '.esc_attr($vw_storefront_scroll_to_top_height).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_border_radius = get_theme_mod('vw_storefront_scroll_to_top_border_radius');
	if($vw_storefront_scroll_to_top_border_radius != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='border-radius: '.esc_html($vw_storefront_scroll_to_top_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_storefront_social_icon_font_size = get_theme_mod('vw_storefront_social_icon_font_size');
	if($vw_storefront_social_icon_font_size != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_social_icon_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_padding = get_theme_mod('vw_storefront_social_icon_padding');
	if($vw_storefront_social_icon_padding != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='padding: '.esc_attr($vw_storefront_social_icon_padding).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_width = get_theme_mod('vw_storefront_social_icon_width');
	if($vw_storefront_social_icon_width != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='width: '.esc_attr($vw_storefront_social_icon_width).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_height = get_theme_mod('vw_storefront_social_icon_height');
	if($vw_storefront_social_icon_height != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='height: '.esc_attr($vw_storefront_social_icon_height).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_border_radius = get_theme_mod('vw_storefront_social_icon_border_radius');
	if($vw_storefront_social_icon_border_radius != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_social_icon_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_woocommerce_sale_position = get_theme_mod( 'vw_storefront_woocommerce_sale_position','left');
    if($vw_storefront_woocommerce_sale_position == 'left'){
		$vw_storefront_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_storefront_custom_css .='left: -10px; right: auto;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_woocommerce_sale_position == 'right'){
		$vw_storefront_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_storefront_custom_css .='left: auto !important; right: 20px !important;';
		$vw_storefront_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_storefront_site_title_font_size = get_theme_mod('vw_storefront_site_title_font_size');
	if($vw_storefront_site_title_font_size != false){
		$vw_storefront_custom_css .='.logo p.site-title, .logo h1{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_site_title_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_storefront_site_tagline_font_size = get_theme_mod('vw_storefront_site_tagline_font_size');
	if($vw_storefront_site_tagline_font_size != false){
		$vw_storefront_custom_css .='.logo p.site-description{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_site_tagline_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Menus  ------------------*/

	$vw_storefront_navigation_menu_font_size = get_theme_mod('vw_storefront_navigation_menu_font_size');
	if($vw_storefront_navigation_menu_font_size != false){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_navigation_menu_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_nav_menus_font_weight = get_theme_mod( 'vw_storefront_navigation_menu_font_weight','Default');
    if($vw_storefront_nav_menus_font_weight == 'Default'){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_nav_menus_font_weight == 'Normal'){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='font-weight: normal;';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Preloader Background Color  ------------------*/

	$vw_storefront_preloader_bg_color = get_theme_mod('vw_storefront_preloader_bg_color');
	if($vw_storefront_preloader_bg_color != false){
		$vw_storefront_custom_css .='#preloader{';
			$vw_storefront_custom_css .='background-color: '.esc_attr($vw_storefront_preloader_bg_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_preloader_border_color = get_theme_mod('vw_storefront_preloader_border_color');
	if($vw_storefront_preloader_border_color != false){
		$vw_storefront_custom_css .='.loader-line{';
			$vw_storefront_custom_css .='border-color: '.esc_attr($vw_storefront_preloader_border_color).'!important;';
		$vw_storefront_custom_css .='}';
	}
