<?php

	
	show_admin_bar(false);
	
	
	function sbcom_scripts() {
		// Deregister the included library
		wp_deregister_script( 'jquery' );
		
		// Register the library again from Google's CDN
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, false );
		
		// Register the script like this for a theme:
		wp_register_script( 'custom-script', get_template_directory_uri() . '/script.js', array( 'jquery' ) );
		
		wp_enqueue_script( 'custom-script' );
	}
	add_action( 'wp_enqueue_scripts', 'sbcom_scripts', 5 );
	
	function sbcom_style()
	{
		// Register the style like this for a theme:
		wp_register_style( 'custom-style', get_template_directory_uri() . '/style.css', array(), '1', 'all' );
		
		// For either a plugin or a theme, you can then enqueue the style:
		wp_enqueue_style( 'custom-style' );
		
		wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.1/css/all.css');
		
	}
	add_action( 'wp_enqueue_scripts', 'sbcom_style' );

	
	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function arphabet_widgets_init() {
	
		register_sidebar( array(
			'name'          => 'Home right sidebar',
			'id'            => 'home_right_1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );
	
	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );
	
?>