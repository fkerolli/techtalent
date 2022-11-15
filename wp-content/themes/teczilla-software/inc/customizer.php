<?php
function teczilla_software_sections_settings( $wp_customize ) {
    $wp_customize->remove_setting( 'teczilla_menubar_bg_color' );
     $wp_customize->remove_setting( 'teczilla_menu_item_color' );
      $wp_customize->remove_setting( 'teczilla_menu_item_hover_color' );
       $wp_customize->remove_setting( 'teczilla_menu_link_bg_color' );
       $wp_customize->remove_setting( 'teczilla_submnubg_scheme' );
        $wp_customize->remove_setting( 'teczilla_submnu_link' );
        $wp_customize->remove_setting( 'teczilla_header_address' );
        $wp_customize->remove_control('blogdescription');

        
        $wp_customize->add_setting('teczilla_theme_color_scheme',array(
        'default' => esc_html__('#078586','teczilla-software'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'teczilla_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','teczilla-software'),           
            'description' => esc_html__('Change Theme Color','teczilla-software'),
            'section' => 'colors',
            'settings' => 'teczilla_theme_color_scheme'
        ))
    ); 

        $wp_customize->add_setting('teczilla_theme_secondary_color_scheme',array(
        'default' => esc_html__('#fff','teczilla-software'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'teczilla_theme_secondary_color_scheme',array(
            'label' => esc_html__('Secondary Color','teczilla-software'),           
            'description' => esc_html__('Change Theme Secondary Color','teczilla-software'),
            'section' => 'colors',
            'settings' => 'teczilla_theme_secondary_color_scheme'
        ))
    ); 

    $wp_customize->add_setting('teczilla_header_button_address',   
        array(
            'sanitize_callback' => 'teczilla_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('teczilla_header_button_address',
        array(
            'label'       => esc_html__('Header Button', 'teczilla-software'),
            'section'     => 'teczilla_top_header',
            'type'        => 'text',
        )
    );

        $wp_customize->add_setting('teczilla_header_button_url',   
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => '',
            ));

    $wp_customize->add_control('teczilla_header_button_url',
        array(
            'label'       => esc_html__('Header Button Url', 'teczilla-software'),
            'section'     => 'teczilla_top_header',
            'type'        => 'url',
        )
    );

    $wp_customize->add_setting('teczilla_header_address',   
        array(
            'sanitize_callback' => 'teczilla_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('teczilla_header_address',
        array(
            'label'       => esc_html__('Header Address', 'teczilla-software'),
            'section'     => 'teczilla_top_header',
            'type'        => 'text',
        )
    );
    $wp_customize->add_setting( 'header_title_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

  $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'header_title_color',array(
            'label' => esc_html__('Header Text Color','teczilla-software'),           
            'description' => esc_html__('Header Text Title Color','teczilla-software'),
            'section' => 'colors',
        ))
    );

}
add_action( 'customize_register', 'teczilla_software_sections_settings', 30);