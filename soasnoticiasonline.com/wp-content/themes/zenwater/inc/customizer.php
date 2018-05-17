<?php
/**
 * ZenWater: Customizer
 */
if ( ! function_exists( 'zenwater_customize_register' ) ) :
	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function zenwater_customize_register( $wp_customize ) {

		/**
		 * Add Slider Section
		 */
		$wp_customize->add_section(
			'zenwater_slider_section',
			array(
				'title'       => __( 'Slider', 'zenwater' ),
				'capability'  => 'edit_theme_options',
			)
		);
		
		// Add display slider option
		$wp_customize->add_setting(
				'zenwater_slider_display',
				array(
						'default'           => 1,
						'sanitize_callback' => 'zenwater_sanitize_checkbox',
				)
		);

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'zenwater_slider_display',
								array(
									'label'          => __( 'Display Homepage Slider', 'zenwater' ),
									'section'        => 'zenwater_slider_section',
									'settings'       => 'zenwater_slider_display',
									'type'           => 'checkbox',
								)
							)
		);

		for ( $i = 1; $i <= 4; ++$i ) {

			// add a slide image
			$wp_customize->add_setting( 'zenwater_slide' . $i . '_image',
				array(
					'default' => get_template_directory_uri() . '/images/slider/' . $i . '.jpg',
		    		'sanitize_callback' => 'esc_url_raw'
				)
			);

		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zenwater_slide' . $i . '_image',
					array(
						'label'   	 => sprintf( esc_html__( 'Slide %s Image', 'zenwater' ), $i ),
						'section' 	 => 'zenwater_slider_section',
						'settings'   => 'zenwater_slide' . $i . '_image',
					) 
				)
			);	
		}

		/**
	     * Add Animations Section
	     */
	    $wp_customize->add_section(
	        'zenwater_animations_display',
	        array(
	            'title'       => __( 'Animations', 'zenwater' ),
	            'capability'  => 'edit_theme_options',
	        )
	    );

	    // Add display Animations option
	    $wp_customize->add_setting(
	            'zenwater_animations_display',
	            array(
	                    'default'           => 1,
	                    'sanitize_callback' => 'zenwater_sanitize_checkbox',
	            )
	    );

	    $wp_customize->add_control( new WP_Customize_Control( $wp_customize,
	                        'zenwater_animations_display',
	                            array(
	                                'label'          => __( 'Enable Animations', 'zenwater' ),
	                                'section'        => 'zenwater_animations_display',
	                                'settings'       => 'zenwater_animations_display',
	                                'type'           => 'checkbox',
	                            )
	                        )
	    );

		/**
		 * Add Footer Section
		 */
		$wp_customize->add_section(
			'zenwater_footer_section',
			array(
				'title'       => __( 'Footer', 'zenwater' ),
				'capability'  => 'edit_theme_options',
			)
		);
		
		// Add Footer Copyright Text
		$wp_customize->add_setting(
			'zenwater_footer_copyright',
			array(
			    'default'           => '',
			    'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'zenwater_footer_copyright',
	        array(
	            'label'          => __( 'Copyright Text', 'zenwater' ),
	            'section'        => 'zenwater_footer_section',
	            'settings'       => 'zenwater_footer_copyright',
	            'type'           => 'text',
	            )
	        )
		);
	}
endif; // zenwater_customize_register
add_action( 'customize_register', 'zenwater_customize_register' );

if ( ! function_exists( 'zenwater_sanitize_checkbox' ) ) :
	/**
	 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
	 * as a boolean value, either TRUE or FALSE.
	 *
	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function zenwater_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
endif; // zenwater_sanitize_checkbox