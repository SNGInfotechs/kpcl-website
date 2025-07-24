<?php
//about theme info
add_action( 'admin_menu', 'green_farm_elementor_gettingstarted' );
function green_farm_elementor_gettingstarted() {
	add_theme_page( esc_html__('Green Farm Elementor', 'green-farm-elementor'), esc_html__('Green Farm Elementor', 'green-farm-elementor'), 'edit_theme_options', 'green_farm_elementor_about', 'green_farm_elementor_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function green_farm_elementor_admin_theme_style() {
	wp_enqueue_style('green-farm-elementor-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('green-farm-elementor-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'green_farm_elementor_admin_theme_style');

// Changelog
if ( ! defined( 'GREEN_FARM_ELEMENTOR_CHANGELOG_URL' ) ) {
    define( 'GREEN_FARM_ELEMENTOR_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function green_farm_elementor_changelog_screen() {	
	global $wp_filesystem;
	$changelog_file = apply_filters( 'green_farm_elementor_changelog_file', GREEN_FARM_ELEMENTOR_CHANGELOG_URL );
	if ( $changelog_file && is_readable( $changelog_file ) ) {
		WP_Filesystem();
		$changelog = $wp_filesystem->get_contents( $changelog_file );
		$changelog_list = green_farm_elementor_parse_changelog( $changelog );
		echo wp_kses_post( $changelog_list );
	}
}

function green_farm_elementor_parse_changelog( $content ) {
	$content = explode ( '== ', $content );
	$changelog_isolated = '';
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}
	$changelog_array = explode( '= ', $changelog_isolated );
	unset( $changelog_array[0] );
	$changelog = '<div class="changelog">';
	foreach ( $changelog_array as $value) {
		$value = preg_replace( '/\n+/', '</span><span>', $value );
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div><hr>';
		$changelog .= str_replace( '<span></span>', '', $value );
	}
	$changelog .= '</div>';
	return wp_kses_post( $changelog );
}

//guidline for about theme
function green_farm_elementor_mostrar_guide() { 
	//custom function about theme customizer
	$green_farm_elementor_return = add_query_arg( array()) ;
	$green_farm_elementor_theme = wp_get_theme( 'green-farm-elementor' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Green Farm Elementor', 'green-farm-elementor' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'green-farm-elementor' ); ?>: <?php echo esc_html($green_farm_elementor_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="green_farm_elementor_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Setup With Elementor', 'green-farm-elementor' ); ?></button>
				<button class="tablinks" onclick="green_farm_elementor_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'green-farm-elementor' ); ?></button>
				<button class="tablinks" onclick="green_farm_elementor_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'green-farm-elementor' ); ?></button>
			</div>

			<div id="wpelemento_importer_editor" class="tabcontent open">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$plugin_ins = Green_Farm_Elementor_Plugin_Activation_WPElemento_Importer::get_instance();
					$green_farm_elementor_actions = $plugin_ins->recommended_actions;
					?>
					<div class="green-farm-elementor-recommended-plugins ">
							<div class="green-farm-elementor-action-list">
								<?php if ($green_farm_elementor_actions): foreach ($green_farm_elementor_actions as $key => $green_farm_elementor_actionValue): ?>
										<div class="green-farm-elementor-action" id="<?php echo esc_attr($green_farm_elementor_actionValue['id']);?>">
											<div class="action-inner plugin-activation-redirect">
												<h3 class="action-title"><?php echo esc_html($green_farm_elementor_actionValue['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($green_farm_elementor_actionValue['desc']); ?></div>
												<?php echo wp_kses_post($green_farm_elementor_actionValue['link']); ?>
											</div>
										</div>
									<?php endforeach;
								endif; ?>
							</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h3><?php esc_html_e('Welcome to WPElemento Theme!', 'green-farm-elementor'); ?></h3>
						<p><?php esc_html_e('Click on the quick start button to import the demo.', 'green-farm-elementor'); ?></p>
						<div class="info-link">
							<a  href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'green-farm-elementor'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="setup_customizer" class="tabcontent">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'green-farm-elementor'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'green-farm-elementor'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'green-farm-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'green-farm-elementor'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'green-farm-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( GREEN_FARM_ELEMENTOR_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'green-farm-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'green-farm-elementor'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'green-farm-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( GREEN_FARM_ELEMENTOR_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'green-farm-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'green-farm-elementor'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'green-farm-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( GREEN_FARM_ELEMENTOR_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'green-farm-elementor'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'green-farm-elementor' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','green-farm-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','green-farm-elementor'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','green-farm-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','green-farm-elementor'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php green_farm_elementor_changelog_screen(); ?>
				</div>
			</div>
			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'green-farm-elementor'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Green Farm WordPress Theme', 'green-farm-elementor'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( GREEN_FARM_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'green-farm-elementor'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( GREEN_FARM_ELEMENTOR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'green-farm-elementor'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( GREEN_FARM_ELEMENTOR_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle', 'green-farm-elementor'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'green-farm-elementor'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'green-farm-elementor' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'green-farm-elementor' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'green-farm-elementor' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'green-farm-elementor' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'green-farm-elementor' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'green-farm-elementor' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'green-farm-elementor'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( GREEN_FARM_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'green-farm-elementor'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'green-farm-elementor' ); ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>