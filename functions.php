<!-- register menus -->
<?php 

	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'city-menu' => __( 'City Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );

	function get_top_parent_page_url() { 
	    global $post; 
	 
	    if ($post->ancestors) { 
	        return end($post->post_parent); 
	    } else { 
	        return ($post->permalink); 
	    } 
	}

	function my_theme_scripts() {
	    wp_enqueue_script( 'clScript', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
	    wp_enqueue_script('datapicker', get_template_directory_uri() . '/assets/js/datepicker.js');
	    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js');
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

	function my_custom_styles() {
  		wp_register_style( 'custom-styles', get_template_directory_uri() .'/assets/css/style.css' );
  		wp_register_style( 'datepicker-style', get_template_directory_uri() .'/assets/css/datepicker.css' );
  		wp_register_style( 'bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css' );
  		wp_register_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat' );
  		
  		wp_enqueue_style( 'custom-styles');
  		wp_enqueue_style( 'datepicker-style');
  		wp_enqueue_style( 'bulma');
  		wp_enqueue_style( 'google-font');
	}
	add_action( 'wp_enqueue_scripts', 'my_custom_styles' );

?>

