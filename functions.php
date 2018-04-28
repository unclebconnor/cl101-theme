
<?php 

	function my_theme_scripts() {
	    wp_enqueue_script( 'clScript', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
	    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js');
	    wp_enqueue_script('picker', get_template_directory_uri() . '/assets/js/picker.js');
	    wp_enqueue_script( 'picker-date', get_template_directory_uri() . '/assets/js/picker.date.js');
	    wp_enqueue_script( 'picker-legacy', get_template_directory_uri() . '/assets/js/legacy.js');
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

	function my_custom_styles() {
  		wp_register_style( 'custom-styles', get_template_directory_uri() .'/assets/css/style.css' );
  		wp_register_style( 'bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css' );
  		wp_register_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat' );
  		wp_register_style( 'bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css' );
  		wp_register_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat' );
  		wp_register_style( 'default', get_template_directory_uri() .'/assets/css/default.css' );
  		wp_register_style( 'default-date', get_template_directory_uri() .'/assets/css/default.date.css' );
  		
  		wp_enqueue_style( 'custom-styles');
  		wp_enqueue_style( 'bulma');
  		wp_enqueue_style( 'google-font');
  		wp_enqueue_style( 'default');
  		wp_enqueue_style( 'default-date');
	}
	add_action( 'wp_enqueue_scripts', 'my_custom_styles' );

?>

