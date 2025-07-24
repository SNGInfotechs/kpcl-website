<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Green Farm Elementor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('green_farm_elementor_preloader_hide','')){ ?>
	<div class="loader">
		<div class="preloader">
	    <div class="diamond">
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
		</div>
	</div>
<?php } ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'green-farm-elementor' ); ?></a>

<header id="site-navigation" class="header text-center text-md-start">
	<div class="upperheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 col-sm-4">
					<?php if ( get_theme_mod('green_farm_elementor_header_advertisement_text') ) : ?>
						<p class="mb-0 "><?php echo esc_html( get_theme_mod('green_farm_elementor_header_advertisement_text' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 text-center text-md-end">
					<?php if ( get_theme_mod('green_farm_elementor_header_location') ) : ?>
						<p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i><?php echo esc_html( get_theme_mod('green_farm_elementor_header_location' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 text-center text-md-end">
					<?php if ( get_theme_mod('green_farm_elementor_header_email')) : ?>
						<a href="mailto:<?php echo esc_url( get_theme_mod('green_farm_elementor_header_email' ) ); ?>"><p class="mb-0"><i class="fas fa-envelope me-2"></i><?php echo esc_html( get_theme_mod('green_farm_elementor_header_email' ) ); ?></p></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="topheader py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 align-self-center">
					<div class="logo text-center text-lg-start mb-3 mb-lg-0">
			    		<div class="logo-image">
			    			<?php the_custom_logo(); ?>
				    	</div>
							<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('green_farm_elementor_display_header_title', true) == true ) :
				      			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
				      			echo esc_attr(get_bloginfo('name'));
				      			echo '</a>';
			      		 	endif;
			      		 	if ( get_theme_mod('green_farm_elementor_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
					    ?>
					</div>
					</div>
			   	</div>
			   	<div class="col-lg-8 col-md-12 col-sm-12 align-self-center">
			   		<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-4 align-self-center">
							<?php $green_farm_elementor_settings = get_theme_mod( 'green_farm_elementor_social_links_settings' ); ?>
							<div class="social-links text-center text-md-end">
								<?php if ( is_array($green_farm_elementor_settings) || is_object($green_farm_elementor_settings) ){ ?>
							    	<?php foreach( $green_farm_elementor_settings as $green_farm_elementor_setting ) { ?>
								        <a href="<?php echo esc_url( $green_farm_elementor_setting['link_url'] ); ?>" target="_blank">
								            <i class="<?php echo esc_attr( $green_farm_elementor_setting['link_text'] ); ?>"></i>
								        </a>
							    	<?php } ?>
								<?php } ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-5 col-6 align-self-center">
							<?php if ( get_theme_mod('green_farm_elementor_header_phone_number') || get_theme_mod('green_farm_elementor_header_phone_number_text') ) : ?>
								<div class="row header-icon">
									<div class="col-lg-3 col-md-3 col-sm-3 col-3 align-self-center">
										<i class="fas fa-phone"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 col-9 align-self-center">
										<p class="mb-0"><?php echo esc_html( get_theme_mod('green_farm_elementor_header_phone_number_text' ) ); ?></p>
										<a href="tel:<?php echo esc_attr( get_theme_mod('green_farm_elementor_header_phone_number' ) ); ?>"><h6 class="mb-0"><?php echo esc_html( get_theme_mod('green_farm_elementor_header_phone_number' ) ); ?></h6></a>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-6 align-self-center head-btn text-center text-md-end">
							<?php if ( get_theme_mod('green_farm_elementor_header_button_text') ) : ?>
								<a href="<?php echo esc_url( get_theme_mod('green_farm_elementor_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('green_farm_elementor_header_button_text' ) ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-header <?php if( get_theme_mod( 'green_farm_elementor_sticky_header',false) != '') { ?>sticky-header<?php } else { ?>close-sticky <?php } ?>">
		<div class="container">
			<div class="center-header-box">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-6 align-self-center">
						<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
							<span aria-hidden="true"><?php esc_html_e( 'Menu', 'green-farm-elementor' ); ?></span>
						</button>
						<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
							<button class="close-menu my-2 p-2" type="button">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</nav>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-6 px-md-0 align-self-center">
						<?php if ( get_theme_mod('green_farm_elementor_search_enable', 'on' ) == true ) : ?>
							<div class="search-cont py-2 me-3 d-inline-block">
								<button type="button" class="search-cont-button"><i class="fas fa-search"></i></button>
							</div>
							<div class="outer-search">
								<div class="inner-search">
									<?php get_search_form(); ?>
								</div>
								<button type="button" class="closepop search-cont-button-close" >X</button>
							</div>
						<?php endif; ?>
						<?php if ( class_exists( 'woocommerce' ) ) {?>
							<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','green-farm-elementor' ); ?>"><i class="fas fa-shopping-basket me-2"></i><span class="cart-item-box">( <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?> )</span></a>
						<?php }?>
					</div>
			   	</div>
			</div>
		</div>
	</div>
</header>
