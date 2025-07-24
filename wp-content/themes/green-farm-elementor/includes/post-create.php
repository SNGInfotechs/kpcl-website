<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	{
	
	}

	public static function green_farm_elementor_setup_widgets(){

		set_theme_mod( 'green_farm_elementor_header_advertisement_text', 'FreshFarm Grown Vegetablwe Now Available At Your Door Step!' );
		set_theme_mod( 'green_farm_elementor_header_location', '1870Lorem Ipsum Dolor SitAmet' );
		set_theme_mod( 'green_farm_elementor_header_email', 'business@farm.com' );
		set_theme_mod( 'green_farm_elementor_header_phone_number', '123 456 789' );
		set_theme_mod( 'green_farm_elementor_header_phone_number_text', 'Have A Question' );
		set_theme_mod( 'green_farm_elementor_header_button_text', 'ORDER NOW' );
		set_theme_mod( 'green_farm_elementor_header_button_url', '#' );
		set_theme_mod('green_farm_elementor_social_links_settings', array(
            array(
                "link_text" => "fab fa-instagram",
                "link_url" => "www.instagram.com"
            ),
            array(
                "link_text" => "fab fa-twitter",
                "link_url" => "www.twitter.com"
            ),
            array(
                "link_text" => "fab fa-youtube",
                "link_url" => "www.youtube.com"
            ),
            array(
                "link_text" => "fab fa-linkedin-in",
                "link_url" => "www.linkedin.com"
            )
        ));

	}
}
 