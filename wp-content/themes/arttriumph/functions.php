<?php

    function artriumph_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'artriumph_theme_support');

    function artriumph_menus(){
        $locations = array(
            'header' => "Header Menu",
            'footer' => "Footer Menu",
            'logo' => "Logo Menu"
        );

        register_nav_menus($locations);
    }

    add_action('init','artriumph_menus');

    function artrium_reg_style(){
        $version = wp_get_theme() -> get("Version");
        wp_enqueue_style('artrium-custom-theme', get_template_directory_uri() . "/style.css", array('artrium-bootstrap'), $version, 'all');
        wp_enqueue_style('artrium-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
        wp_enqueue_style('artrium-fa', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }

    add_action('wp_enqueue_scripts','artrium_reg_style');

    function artrium_reg_scripts(){
        wp_enqueue_script('artrium-bootstrap', "https://code.jquery.com/jquery-3.6.0.slim.min.js", array(), '3.6.0', 'all');
    }

    add_action('wp_enqueue_scripts','artrium_reg_scripts');
?>