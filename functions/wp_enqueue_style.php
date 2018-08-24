<?php 


function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get( '3.3.7' ), 'screen' );
	wp_register_style( 'fontAwesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css', null, $theme_data->get( '5.2.0' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/main.css'), null, $theme_data->get( '1.0' ), 'screen' );
	wp_register_style( 'responsive', get_theme_file_uri( '/assets/css/responsive.css'), null, $theme_data->get( '1.0' ), 'screen' );

	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'fontAwesome' );
	wp_enqueue_style( 'flexslider' );
	wp_enqueue_style( 'main_style' );
	wp_enqueue_style( 'responsive' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );