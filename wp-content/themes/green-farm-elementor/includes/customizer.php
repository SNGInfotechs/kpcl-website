<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'green_farm_elementor_logo_resizer',
        'label'       => __( 'Logo Size', 'green-farm-elementor' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 300,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'green_farm_elementor_enable_logo_text',
	'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'green-farm-elementor' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'switch',
	'settings'    => 'green_farm_elementor_display_header_title',
	'label'       => esc_html__( 'Site Title Enable / Disable Button', 'green-farm-elementor' ),
	'section'     => 'title_tagline',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'green-farm-elementor' ),
		'off' => esc_html__( 'Disable', 'green-farm-elementor' ),
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'green_farm_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'green-farm-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'green-farm-elementor' ),
			'off' => esc_html__( 'Disable', 'green-farm-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'green_farm_elementor_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'none',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'green-farm-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'green-farm-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'green-farm-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'green-farm-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'green-farm-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'green-farm-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'green-farm-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'green-farm-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'green-farm-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/green-farm-wordpress-theme', 'green-farm-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'green-farm-elementor' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'green_farm_elementor_theme_color_setting', array(
		'title'    => __( 'Color Option', 'green-farm-elementor' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_theme_color',
		'label'       => __( 'Theme color', 'green-farm-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#01392b',
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'green_farm_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'green-farm-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'green_farm_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_h1_typography_heading',
		'section'     => 'green_farm_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'green_farm_elementor_h1_typography_font',
		'section'   =>  'green_farm_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Manrope',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'green_farm_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_h2_typography_heading',
		'section'     => 'green_farm_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'green_farm_elementor_h2_typography_font',
		'section'   =>  'green_farm_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Manrope',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'green_farm_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_h3_typography_heading',
		'section'     => 'green_farm_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'green_farm_elementor_h3_typography_font',
		'section'   =>  'green_farm_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Manrope", sans-serif',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'green_farm_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_h4_typography_heading',
		'section'     => 'green_farm_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'green_farm_elementor_h4_typography_font',
		'section'   =>  'green_farm_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Manrope',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'green_farm_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_h5_typography_heading',
		'section'     => 'green_farm_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'green_farm_elementor_h5_typography_font',
		'section'   =>  'green_farm_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Manrope',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'green_farm_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_h6_typography_heading',
		'section'     => 'green_farm_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'green_farm_elementor_h6_typography_font',
		'section'   =>  'green_farm_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Manrope',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'green_farm_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_body_typography_heading',
		'section'     => 'green_farm_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'green_farm_elementor_body_typography_font',
		'section'   =>  'green_farm_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Manrope',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'green_farm_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'green-farm-elementor' ),
	) );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'green_farm_elementor_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'green-farm-elementor' ),
		'panel' => 'green_farm_elementor_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'green-farm-elementor' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'green-farm-elementor' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_scroll_alignment_heading',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Position', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'radio-buttonset',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_scroll_alignment',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => 'right',
		'choices'     => [
			'left' => esc_html__( 'left', 'green-farm-elementor' ),
			'center' => esc_html__( 'center', 'green-farm-elementor' ),
			'right' => esc_html__( 'right', 'green-farm-elementor' ),
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_scroller_border_radius_heading',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Scroll To Top Border Radius', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'slider',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_scroller_border_radius',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '3',
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
		'output' => array(
			array(
				'element'  => '.scroll-up a',
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_cursor_outline_heading',
		'section'     => 'green_farm_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dot Cursor', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_cursor_outline',
		'label'       => esc_html__( 'Enable or Disable Dot Cursor', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_progress_bar_heading',
		'section'     => 'green_farm_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_progress_bar',
		'label'       => esc_html__( 'Enable or Disable Progress Bar', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_progress_bar_position_heading',
		'section'     => 'green_farm_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Position', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'green_farm_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_progress_bar_position',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => 'top',
		'choices'     => [
			'top' => esc_html__( 'Top', 'green-farm-elementor' ),
			'bottom' => esc_html__( 'Bottom', 'green-farm-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'green_farm_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_progress_bar_color_heading',
		'section'     => 'green_farm_elementor_additional_setting',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Progress Bar Color', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
		'active_callback'  => [
			[
				'setting'  => 'green_farm_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_progress_bar_color',
		'tab'      => 'general',
		'label'       => __( 'Color', 'green-farm-elementor' ),
		'type'        => 'color',
		'section'     => 'green_farm_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#01392b',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '#elemento-progress-bar',
				'property' => 'background-color',
			),
		),
		'active_callback'  => [
			[
				'setting'  => 'green_farm_elementor_progress_bar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_single_page_layout_heading',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'green_farm_elementor_single_page_layout',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'green-farm-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'green-farm-elementor' ),
			'One Column' => esc_html__( 'One Column', 'green-farm-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'green_farm_elementor_header_background_attachment_heading',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'green_farm_elementor_header_background_attachment',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'green-farm-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'green-farm-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'green_farm_elementor_header_image_height_heading',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_header_image_height',
		'label'       => __( 'Image Height', 'green-farm-elementor' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'green-farm-elementor' ),
		'type'        => 'text',
		'tab'      => 'header-image',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'section'     => 'green_farm_elementor_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'green_farm_elementor_header_overlay_heading',
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'green-farm-elementor' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'green_farm_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000080',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'green_farm_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'green_farm_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );
	
	// HEADER SECTION

	Kirki::add_section( 'green_farm_elementor_section_header',array(
		'title' => esc_html__( 'Header Settings', 'green-farm-elementor' ),
		'description'    => esc_html__( 'Here you can add header information.', 'green-farm-elementor' ),
		'panel' => 'green_farm_elementor_theme_options_panel',
		'tab'      => 'header',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'green-farm-elementor' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'green-farm-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_section_header',
		'default'     => 0,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'green-farm-elementor'),
			'off' => esc_html__( 'Disable', 'green-farm-elementor'),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'green_farm_elementor_menu_size_heading',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'green-farm-elementor' ),
		'type'        => 'text',
		'tab'      => 'menu',
		'section'     => 'green_farm_elementor_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'green_farm_elementor_menu_text_transform_heading',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'green_farm_elementor_menu_text_transform',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => 'uppercase',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'green-farm-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'green-farm-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'green-farm-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'green-farm-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_menu_color',
		'label'       => __( 'Menu Color', 'green-farm-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'green_farm_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'green-farm-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'default'     => '#e0f50a',
		'section'     => 'green_farm_elementor_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_submenu_color',
		'label'       => __( 'Submenu Color', 'green-farm-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'green_farm_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'green-farm-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'green_farm_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'green-farm-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'green_farm_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#01392b',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_advertisement_text_heading',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Advertisement Text', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'green_farm_elementor_header_advertisement_text',
		'section'  => 'green_farm_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_enable_email_heading',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Email ID', 'green-farm-elementor' ),
		'settings' => 'green_farm_elementor_header_email',
		'section'  => 'green_farm_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_enable_location_heading',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Location Address', 'green-farm-elementor' ),
		'settings' => 'green_farm_elementor_header_location',
		'section'  => 'green_farm_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_header_phone_number_heading',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Text', 'green-farm-elementor' ),
		'settings' => 'green_farm_elementor_header_phone_number_text',
		'section'  => 'green_farm_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Phone Number', 'green-farm-elementor' ),
		'settings' => 'green_farm_elementor_header_phone_number',
		'section'  => 'green_farm_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'green_farm_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_enable_button_heading',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button Text', 'green-farm-elementor' ),
		'settings' => 'green_farm_elementor_header_button_text',
		'section'  => 'green_farm_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button URL', 'green-farm-elementor' ),
		'settings' => 'green_farm_elementor_header_button_url',
		'section'  => 'green_farm_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_search_enable',
		'label'       => esc_html__( 'Enable/Disable Search', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'green-farm-elementor' ),
			'off' => esc_html__( 'Disable', 'green-farm-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_enable_socail_link',
		'section'     => 'green_farm_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'tab'      => 'header',
		'section'     => 'green_farm_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'green-farm-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'green-farm-elementor' ),
		'settings'     => 'green_farm_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'green-farm-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'green-farm-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'green-farm-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'green-farm-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'green-farm-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'green_farm_elementor_logo_settings_premium_features_header',
		'section'     => 'green_farm_elementor_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'green-farm-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'green-farm-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'green-farm-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'green-farm-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'green-farm-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/green-farm-wordpress-theme', 'green-farm-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'green-farm-elementor' ) .'</a></div>',
	) );

	// POST SECTION

	Kirki::add_section( 'green_farm_elementor_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'green-farm-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'green-farm-elementor' ),
		'panel' => 'green_farm_elementor_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'green-farm-elementor' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'green-farm-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_post_layout_heading',
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_post_layout',
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'green-farm-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'green-farm-elementor' ),
			'One Column' => esc_html__( 'One Column', 'green-farm-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'green-farm-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'green-farm-elementor' ),
		],
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_length_setting_heading',
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_length_setting',
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
					'step' => 1,
				],
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_show_pagination_heading',
		'section'     => 'green_farm_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Pagination', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'green_farm_elementor_show_pagination',
		'label'       => esc_html__( 'Enable or Disable Blog Post Pagination', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'green-farm-elementor' ),
		'settings'    => 'green_farm_elementor_single_post_tag',
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'green-farm-elementor' ),
		'settings'    => 'green_farm_elementor_single_post_category',
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_single_post_radius',
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'green-farm-elementor' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'green_farm_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_show_related_post_heading',
		'section'     => 'green_farm_elementor_blog_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related post', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'green_farm_elementor_show_related_post',
		'label'       => esc_html__( 'Enable or Disable Related post', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_blog_post',
		'default'     => true,
		'priority'    => 10,
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'green_farm_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'green-farm-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'green-farm-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'green_farm_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'green-farm-elementor' ),
		'settings'    => 'green_farm_elementor_shop_page_layout',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'green-farm-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'green-farm-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'green_farm_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'green-farm-elementor' ),
		'settings'    => 'green_farm_elementor_products_per_row',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'green-farm-elementor' ),
		'settings'    => 'green_farm_elementor_products_per_page',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'green_farm_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'green-farm-elementor' ),
		'settings'    => 'green_farm_elementor_single_product_sidebar_layout',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'green-farm-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'green-farm-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'green_farm_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_products_button_border_radius_heading',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'green_farm_elementor_products_button_border_radius',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_sale_badge_position_heading',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'green_farm_elementor_sale_badge_position',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'green-farm-elementor' ),
			'left' => esc_html__( 'Left', 'green-farm-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_products_sale_font_size_heading',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'green_farm_elementor_products_sale_font_size',
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_show_related_product_heading',
		'section'     => 'green_farm_elementor_woocommerce_settings',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Related Product', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'green_farm_elementor_show_related_product',
		'label'       => esc_html__( 'Enable or Disable Related Product', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	// No Results Page Settings

	Kirki::add_section( 'green_farm_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_page_not_found_title_heading',
		'section'     => 'green_farm_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'green_farm_elementor_page_not_found_title',
		'section'  => 'green_farm_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'green-farm-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_page_not_found_text_heading',
		'section'     => 'green_farm_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'green_farm_elementor_page_not_found_text',
		'section'  => 'green_farm_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'green-farm-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'green_farm_elementor_page_not_found_line_break',
		'section'  => 'green_farm_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_no_results_title_heading',
		'section'     => 'green_farm_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'green_farm_elementor_no_results_title',
		'section'  => 'green_farm_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'green-farm-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_no_results_content_heading',
		'section'     => 'green_farm_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'green_farm_elementor_no_results_content',
		'section'  => 'green_farm_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'green-farm-elementor'),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'green_farm_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'green-farm-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'green-farm-elementor' ),
        'panel'    => 'green_farm_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_show_footer_widget_heading',
		'section'     => 'green_farm_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'green_farm_elementor_show_footer_widget',
		'label'       => esc_html__( 'Footer Widget', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'green_farm_elementor_show_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_footer_text_heading',
		'section'     => 'green_farm_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'green_farm_elementor_footer_text',
		'section'  => 'green_farm_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_footer_enable_heading',
		'section'     => 'green_farm_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'green_farm_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'green-farm-elementor' ),
			'off' => esc_html__( 'Disable', 'green-farm-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_footer_background_widget_heading',
		'section'     => 'green_farm_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'green_farm_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'green_farm_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_footer__widget_alignment_heading',
		'section'     => 'green_farm_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'green_farm_elementor_footer__widget_alignment',
		'section'     => 'green_farm_elementor_footer_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'green-farm-elementor' ),
			'right' => esc_html__( 'right', 'green-farm-elementor' ),
			'left' => esc_html__( 'left', 'green-farm-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_footer_copright_color_heading',
		'section'     => 'green_farm_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_footer_copright_text_color_heading',
		'section'     => 'green_farm_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_logo_settings_premium_features_footer',
		'section'     => 'green_farm_elementor_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'green-farm-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'green-farm-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'green-farm-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'green-farm-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'green-farm-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/green-farm-wordpress-theme', 'green-farm-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'green-farm-elementor' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'green_farm_elementor_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'green-farm-elementor' ),
		'panel'    => 'green_farm_elementor_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_footer_social_icon_hide_heading',
		'section'     => 'green_farm_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'green_farm_elementor_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'green_farm_elementor_enable_footer_socail_link_align_heading',
		'section'     => 'green_farm_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'green-farm-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'green_farm_elementor_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'green-farm-elementor' ),
		'section'     => 'green_farm_elementor_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'green-farm-elementor' ),
			'right' => esc_html__( 'right', 'green-farm-elementor' ),
			'left' => esc_html__( 'left', 'green-farm-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'green_farm_elementor_enable_footer_socail_link',
		'section'     => 'green_farm_elementor_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'green-farm-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'green_farm_elementor_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'green-farm-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'green-farm-elementor' ),
		'settings'     => 'green_farm_elementor_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'green-farm-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'green-farm-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'green-farm-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'green-farm-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'green-farm-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
	
}
