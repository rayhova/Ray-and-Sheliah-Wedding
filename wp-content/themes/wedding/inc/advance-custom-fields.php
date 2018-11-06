<?php 

/* ==========================================================================
	Add ACF Permission to Admin
	========================================================================= */

	function add_theme_caps() {
		$role = get_role('administrator');
		$role->add_cap( 'edit_site_options' ); 
	}
    add_action( 'load-themes.php', 'add_theme_caps' );
    
    /* ==========================================================================
	ACF Options Page
	========================================================================= */

	if (function_exists('acf_add_options_page')) { 
		acf_add_options_page(array(
			'page_title'    => 'Site Options',
			'menu_title'    => 'Site Options',
			'capability'    => 'edit_site_options',
		));
		acf_add_options_page(array(
			'page_title'    => '404 Page',
			'menu_title'    => '404 Page',
			'capability'    => 'edit_site_options',
		));
		
	}

/* ======================================================================
	ACF Map Key
	===================================================================== */

	function add_acf_map_key( $api ){
		$api['key'] = 'AIzaSyDSvtD6Wa6Dwf3GlLt3H7HY0qwfp-L0LZU';
		return $api;
	}
	add_filter('acf/fields/google_map/api', 'add_acf_map_key');

//if (function_exists('acf_add_options_page')){
	//acf_add_options_page('Social');
	//acf_add_options_page('Footer');
	//acf_add_options_page('Options');

//}


