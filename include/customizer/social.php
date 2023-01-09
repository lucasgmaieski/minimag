<?php
function lm_social_customizer($wp_customize){
    //settings
    //valor padrão vazio
    $wp_customize->add_setting('lm_facebook', array('default'=>''));
    $wp_customize->add_setting('lm_googleplus', array('default'=>''));
    $wp_customize->add_setting('lm_instagram', array('default'=>''));
    $wp_customize->add_setting('lm_twitter', array('default'=>''));
    $wp_customize->add_setting('lm_youtube', array('default'=>''));

    //Sections
    $wp_customize->add_section('lm_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => '3'
    ));

    //Controllets
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_facebook',
            array(
                'label' => 'Link do Facebook',
                'section' => 'lm_social_section',
                'settings' => 'lm_facebook',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_googleplus',
            array(
                'label' => 'Link do Google Plus',
                'section' => 'lm_social_section',
                'settings' => 'lm_googleplus',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_instagram',
            array(
                'label' => 'Link do Instagram',
                'section' => 'lm_social_section',
                'settings' => 'lm_instagram',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_twitter',
            array(
                'label' => 'Link do Twitter',
                'section' => 'lm_social_section',
                'settings' => 'lm_twitter',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_youtube',
            array(
                'label' => 'Link do Youtube',
                'section' => 'lm_social_section',
                'settings' => 'lm_youtube',
                'type' => 'text'
            )
        )
    );
}