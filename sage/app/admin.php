<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
    // Add section
    $wp_customize->add_section( 'prepsports_custom' , array(
        'title'      => 'Prep Sports Customization',
        'priority'   => 30,
    ));
    // Primary Color
    $wp_customize->add_setting( 'primary_color' , array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    // Add controls to customization pane.
    $wp_customize->add_control(new \WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'        => 'Primary Color',
        'section'    => 'prepsports_custom', //title_tagline for site identity
        'settings'   => 'primary_color',
    )));
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
