<?php
if ( ! function_exists( 'avata_teczilla_slider_customize_register' ) ) :
function avata_teczilla_slider_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
		/* Services section */
		$wp_customize->add_section( 'sliders_section' , array(
			'title'      => __('Slider Section', 'avadanta'),
			'panel'  => 'home_section_settings',
			'priority'  =>'',

		) );
		
		// Enable slider
		$wp_customize->add_setting( 'home_slider_section_enabled' , array( 'default' => 'on') );
		$wp_customize->add_control(	'home_slider_section_enabled' , array(
				'label'    => __( 'Enable Slider On Homepage', 'avadanta' ),
				'section'  => 'sliders_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>__('ON', 'avadanta'),
					'off'=>__('OFF', 'avadanta')
				)
		));
		



		if ( class_exists( 'Avadanta_Repeater' ) ) {
			$wp_customize->add_setting( 'avadanta_slider_content', array(
			) );

			$wp_customize->add_control( new Avadanta_Repeater( $wp_customize, 'avadanta_slider_content', array(
				'label'                             => esc_html__( 'Slider Content', 'avadanta' ),
				'section'                           => 'sliders_section',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Slider', 'avadanta' ),
				'item_name'                         => esc_html__( 'Slider', 'avadanta' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control'=> true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}


class Avadanta_sliders__section_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
				<a href="<?php echo esc_url( 'https://avadantathemes.com/product/teczilla-pro/' ); ?>" target="_blank"><h3 class="customizer_slider_upgrade_section" style="display: none;"><?php _e('Upgrade to Pro','avadanta'); ?></h3></a>    
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'avadanta_slider_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Avadanta_sliders__section_upgrade(
			$wp_customize,
			'avadanta_slider_upgrade_to_pro',
				array(
					'section'				=> 'sliders_section',
					'settings'				=> 'avadanta_slider_upgrade_to_pro',
				)
			)
		);

	

}
add_action( 'customize_register', 'avata_teczilla_slider_customize_register' );
endif;

/**
 * Add selective refresh for Front page section section controls.
 */
function avata_avadanta_register_home_slider_section_partials( $wp_customize ){

	//Slider section
	$wp_customize->selective_refresh->add_partial( 'avadanta_slider_content', array(
		'selector'            => '.carousel-inner',
		'settings'            => 'avadanta_slider_content',
	
	) );
	
}
add_action( 'customize_register', 'avata_avadanta_register_home_slider_section_partials' );

?>