<?php

function lm_theme_styles(){
    wp_enqueue_style('style_css', get_template_directory_uri().'/assets/css/style.min.css');

    wp_enqueue_style('print_css', get_template_directory_uri().'/assets/css/print.css', array('style_css'), false, 'print');
    // wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.css', array('jquery'), false, true);
    wp_enqueue_script('jquery-main', get_template_directory_uri() . '/assets/vendor/jquery/jquery-1.11.0.min.js', '1.0', true);

    wp_enqueue_script('scripts_js', get_template_directory_uri().'/assets/js/scripts.min.js', array('jquery-main', 'bootstrap-min'), false, true);
    

    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', '1.0', true);

    
}
function lm_after_setup(){
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-formats", array('video', 'audio'));
    add_theme_support("custom-header", array(
        'default-image' => get_template_directory_uri().'/assets/images/headers/header1.jpg',
        'width' => 1280,
        'height' => 400,
        'flex-width' => true,
        'flex-height' => true,
        // 'header-text' => false,
        // 'uploads' => false  // não permitir uploads do banners
        
    ));

    register_default_headers(array(
        'header1' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/header1.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/header1.jpg',
            'description' => 'Header 1'
        ),
        'header2' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/header2.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/header2.jpg',
            'description' => 'Header 2'
        ),
        'header3' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/header3.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/header3.jpg',
            'description' => 'Header 3'
        ),
        'header4' => array(
            'url' => get_template_directory_uri().'/assets/images/headers/header4.jpg',
            'thumbnail_url' => get_template_directory_uri().'/assets/images/headers/header4.jpg',
            'description' => 'Header 4'
        )
        ));

    register_nav_menu("primarymm", "Menu MM Primário");
    register_nav_menu("top", "Menu MM Superior");

    load_theme_textdomain('minimag', get_template_directory().'/languages');
}
function lm_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar lateral',
        'id' => 'lm_sidebar',
        'description' => 'Sidebar lateral',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar Rodapé',
        'id' => 'lm_footersidebar',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ));
}