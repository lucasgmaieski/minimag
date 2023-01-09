<?php

function lm_layout_customizer( $wp_customize){
    //settings
    $wp_customize->add_setting('lm_topmenu_show', array('default' => 'yes'));
    $wp_customize->add_setting('lm_search_show', array('default' => 'yes'));
    $wp_customize->add_setting('lm_privacy_url', array('default' => ''));
    //Sections
    $wp_customize->add_section('lm_layout_section', array(
        'title' => 'Opções de Layout',
        'priority' => 2
    ));

    //Controllera
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_topmenu_show',
            array(
                'label' => 'Mostrar menu Superior',
                'section' => 'lm_layout_section',
                'settings' => 'lm_topmenu_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'Sim'
                )  
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_search_show',
            array(
                'label' => 'Mostrar Busca',
                'section' => 'lm_layout_section',
                'settings' => 'lm_search_show',
                'type' => 'checkbox',
                'choices' => array(
                    'yes' => 'Sim'
                )  
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lm_privacy_url',
            array(
                'label' => 'Página de Política de privacidade',
                'section' => 'lm_layout_section',
                'settings' => 'lm_privacy_url',
                'type' => 'dropdown-pages',
                
            )
        )
    );
}