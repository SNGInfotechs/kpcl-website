<?php

  $green_farm_elementor_theme_custom_setting_css = '';

	// Global Color
	$green_farm_elementor_theme_color = get_theme_mod('green_farm_elementor_theme_color', '#01392b');

	$green_farm_elementor_theme_custom_setting_css .=':root {';
		$green_farm_elementor_theme_custom_setting_css .='--primary-theme-color: '.esc_attr($green_farm_elementor_theme_color ).'!important;';
	$green_farm_elementor_theme_custom_setting_css .='}';

	// Scroll to top alignment
	$green_farm_elementor_scroll_alignment = get_theme_mod('green_farm_elementor_scroll_alignment', 'right');

    if($green_farm_elementor_scroll_alignment == 'right'){
        $green_farm_elementor_theme_custom_setting_css .='.scroll-up{';
            $green_farm_elementor_theme_custom_setting_css .='right: 30px;!important;';
			$green_farm_elementor_theme_custom_setting_css .='left: auto;!important;';
        $green_farm_elementor_theme_custom_setting_css .='}';
    }else if($green_farm_elementor_scroll_alignment == 'center'){
        $green_farm_elementor_theme_custom_setting_css .='.scroll-up{';
            $green_farm_elementor_theme_custom_setting_css .='left: calc(50% - 10px) !important;';
        $green_farm_elementor_theme_custom_setting_css .='}';
    }else if($green_farm_elementor_scroll_alignment == 'left'){
        $green_farm_elementor_theme_custom_setting_css .='.scroll-up{';
            $green_farm_elementor_theme_custom_setting_css .='left: 30px;!important;';
			$green_farm_elementor_theme_custom_setting_css .='right: auto;!important;';
        $green_farm_elementor_theme_custom_setting_css .='}';
    }

	// Related Product

	$green_farm_elementor_show_related_product = get_theme_mod('green_farm_elementor_show_related_product', true );

	if($green_farm_elementor_show_related_product != true){
		$green_farm_elementor_theme_custom_setting_css .='.related.products{';
			$green_farm_elementor_theme_custom_setting_css .='display: none;';
		$green_farm_elementor_theme_custom_setting_css .='}';
	}        