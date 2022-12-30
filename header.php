<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header>
        <?php if(get_theme_mod('lm_topmenu_show') == 'yes'): ?>
        <div class="top_header">
            <nav class="navbar navbar-expand-lg bg-dark" id="mainNav" >
                <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <?php 
                if(has_nav_menu('top')){
                    wp_nav_menu(array(
                        'theme_location' => 'top',
                        'fallback_cb' => false,
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                        'menu_class' => 'navbar-nav mb-2 mb-lg-0'
                    ));
                }
                ?>
                    
                </div>
            </nav>

        </div>
        <?php endif; ?>
        
        <div class="main_header container">
                <div class="logo">
                    <?php 
                        if(has_custom_logo()){
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="main_nav_border">
                    <div class="main_nav">
                    <?php 
                        if(has_nav_menu('primarymm')){
                            wp_nav_menu(array(
                                'theme_location' => 'primarymm',
                                'container' => false,
                                'fallback_cb' => false,
                                'menu_class' => 'nav navbar-nav'

                            ));
                        } 
                        ?>
                        <div class="search_area">
                            <?php 
                            if(get_theme_mod('lm_search_show') == 'yes'){
                                get_search_form(); 
                            }
                            ?>
                        </div>
                    </div>

                    <div class="main_info">
                        <div class="row">
                            <div class="col-md-8 randompost">
                                <strong><?php echo __('Did you see?', 'minimag'); ?></strong>
                                <?php 
                                if(function_exists('wpp_get_mostpopular')){
                                    wpp_get_mostpopular(array(
                                        'limit' => 1,
                                        'wpp_start' => '',
                                        'wpp_end' => '',
                                        'post_html' => '<a href="{url}">{text_title}</a>'
                                    ));

                                } else{
                                    $lm_query = new WP_Query(array(
                                        'posts_per_page' => 1,
                                        'post_type' => 'post',
                                        'orderby' => 'rand'
                                    ));
                                    if($lm_query->have_posts()){
                                        while($lm_query->have_posts()){
                                            $lm_query->the_post();
                                            ?>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <?php
                                        }
                                        wp_reset_postdata();
                                    }
                                }
                                ?>
                                
                            
                                
                            </div>
                            <div class="col-md-4 socialarea">
                                <div class="socialtxt">
                                    <?php echo __('FOLLOW:', 'minimag') ?>
                                </div>
                                <div class="socialicons">
                                    <?php if(get_theme_mod('lm_facebook')): ?>
                                        <a href="<?php echo get_theme_mod('lm_facebook'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="Icone Facebook">
                                    </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('lm_googleplus')): ?>
                                        <a href="<?php echo get_theme_mod('lm_googleplus'); ?>" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gplus.png" alt="Icone Google Plus">
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('lm_instagram')): ?>
                                        <a href="<?php echo get_theme_mod('lm_instagram'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="Icone Instagram">
                                    </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('lm_twitter')): ?>
                                        <a href="<?php echo get_theme_mod('lm_twitter'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="Icone Twitter">
                                    </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('lm_youtube')): ?>
                                        <a href="<?php echo get_theme_mod('lm_youtube'); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt="Icone Youtube">
                                    </a>
                                    <?php endif; ?>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        
    </header>
<?php if(get_header_image()): ?>
    <div class="custom-header">
        <img src="<?php header_image(); ?>" >
    </div>
<?php endif; ?>
