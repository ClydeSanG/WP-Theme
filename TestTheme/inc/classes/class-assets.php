<?php

namespace TEST_THEME\Inc;

use TEST_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;

    protected function __construct(){
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles(){
        wp_register_style( 'bootstrap-css', TEST_THEME_DIR_URI . '/assets/css/bootstrap.min.css', [], false, 'all' );
        wp_enqueue_style('bootstrap-css'); 
    }

    public function register_scripts(){
        wp_register_script( 'bootstrap-js', TEST_THEME_DIR_URI . '/assets/js/bootstrap.min.js', ['jquery'], false, true );        
        wp_enqueue_script('bootstrap-js');
    }
}

?>