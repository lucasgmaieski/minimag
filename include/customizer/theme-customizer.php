<?php 
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function lm_customize_register( $wp_customize){

    lm_social_customizer( $wp_customize);
    
    lm_layout_customizer( $wp_customize);

}
?>