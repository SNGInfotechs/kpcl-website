<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Green Farm Elementor
 */

?>

<footer class="footer-side">
  <?php if ( get_theme_mod( 'green_farm_elementor_show_footer_widget', true ) ) : ?>
    <div class="footer-widget">
      <div class="container">
        <?php
          // Check if any footer sidebar is active
          $green_farm_elementor_any_sidebar_active = false;
          for ( $green_farm_elementor_i = 1; $green_farm_elementor_i <= 4; $green_farm_elementor_i++ ) {
            if ( is_active_sidebar( "footer{$green_farm_elementor_i}-sidebar" ) ) {
              $green_farm_elementor_any_sidebar_active = true;
              break;
            }
          }
          // Count active for responsive column classes
          $green_farm_elementor_active_sidebars = 0;
          if ( $green_farm_elementor_any_sidebar_active ) {
            for ( $green_farm_elementor_i = 1; $green_farm_elementor_i <= 4; $green_farm_elementor_i++ ) {
              if ( is_active_sidebar( "footer{$green_farm_elementor_i}-sidebar" ) ) {
                $green_farm_elementor_active_sidebars++;
              }
            }
          }
          $green_farm_elementor_col_class = $green_farm_elementor_active_sidebars > 0 ? 'col-lg-' . (12 / $green_farm_elementor_active_sidebars) . ' col-md-6 col-sm-12' : 'col-lg-3 col-md-6 col-sm-12';
        ?>
        <div class="row pt-2">
          <?php for ( $green_farm_elementor_i = 1; $green_farm_elementor_i <= 4; $green_farm_elementor_i++ ) : ?>
            <div class="footer-area <?php echo esc_attr($green_farm_elementor_col_class); ?>">
              <?php if ( $green_farm_elementor_any_sidebar_active && is_active_sidebar("footer{$green_farm_elementor_i}-sidebar") ) : ?>
                <?php dynamic_sidebar("footer{$green_farm_elementor_i}-sidebar"); ?>
              <?php elseif ( ! $green_farm_elementor_any_sidebar_active ) : ?>
                  <?php if ( $green_farm_elementor_i === 1 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer1', 'green-farm-elementor' ); ?>" id="Search" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Search', 'green-farm-elementor' ); ?></h4>
                      <?php get_search_form(); ?>
                    </aside>

                  <?php elseif ( $green_farm_elementor_i === 2 ) : ?>
                      <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer2', 'green-farm-elementor' ); ?>" id="archives" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Archives', 'green-farm-elementor' ); ?></h4>
                      <ul>
                          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                      </ul>
                      </aside>
                  <?php elseif ( $green_farm_elementor_i === 3 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer3', 'green-farm-elementor' ); ?>" id="meta" class="sidebar-widget">
                      <h4 class="title"><?php esc_html_e( 'Meta', 'green-farm-elementor' ); ?></h4>
                      <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                      </ul>
                    </aside>
                  <?php elseif ( $green_farm_elementor_i === 4 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer4', 'green-farm-elementor' ); ?>" id="categories" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Categories', 'green-farm-elementor' ); ?></h4>
                      <ul>
                          <?php wp_list_categories('title_li=');  ?>
                      </ul>
                    </aside>
                  <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if( get_theme_mod( 'green_farm_elementor_show_footer_copyright',true)) : ?>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 align-self-center">
            <p class="mb-0 py-3 text-center text-md-start">
              <?php
                if (!get_theme_mod('green_farm_elementor_footer_text') ) { ?>
                  <a href="<?php echo esc_url('https://www.wpelemento.com/products/free-elementor-farm-wordpress-theme'); ?>" target="_blank">
                    <?php esc_html_e('Green Farm WordPress Theme','green-farm-elementor'); ?>
                  </a>
              <?php } else {
                  echo esc_html(get_theme_mod('green_farm_elementor_footer_text'));
                }
              ?>
              <?php if ( get_theme_mod('green_farm_elementor_copyright_enable', true) == true ) : ?>
              <?php
                /* translators: %s: WP Elemento */
                printf( esc_html__( ' By %s', 'green-farm-elementor' ), 'WP Elemento' ); ?>
              <?php endif; ?>
            </p>
          </div>
          <div class="col-lg-6 col-md-6 align-self-center text-center text-md-end">
            <?php if ( get_theme_mod('green_farm_elementor_copyright_enable', true) == true ) : ?>
              <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'green-farm-elementor' ), 'WordPress' ); ?></a>
            <?php endif; ?>
          </div>
        </div>
        <?php if(get_theme_mod('green_farm_elementor_footer_social_icon_hide', false )== true){ ?>
          <div class="row">
            <div class="col-12 align-self-center py-1">
              <div class="footer-links">
                <?php $green_farm_elementor_settings_footer = get_theme_mod( 'green_farm_elementor_social_links_settings_footer' ); ?>
                <?php if ( is_array($green_farm_elementor_settings_footer) || is_object($green_farm_elementor_settings_footer) ){ ?>
                  <?php foreach( $green_farm_elementor_settings_footer as $green_farm_elementor_setting_footer ) { ?>
                    <a href="<?php echo esc_url( $green_farm_elementor_setting_footer['link_url'] ); ?>" target="_blank">
                      <i class="<?php echo esc_attr( $green_farm_elementor_setting_footer['link_text'] ); ?> me-2"></i>
                    </a>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if ( get_theme_mod('green_farm_elementor_scroll_enable_setting')) : ?>
    <div class="scroll-up">
      <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
    </div>
  <?php endif; ?>
  <?php if(get_theme_mod('green_farm_elementor_progress_bar', false )== true): ?>
    <div id="elemento-progress-bar" class="theme-progress-bar <?php if( get_theme_mod( 'green_farm_elementor_progress_bar_position','top') == 'top') { ?> top <?php } else { ?> bottom <?php } ?>"></div>
  <?php endif; ?>
  <?php if(get_theme_mod('green_farm_elementor_cursor_outline', false )== true): ?>
			<!-- Custom cursor -->
			<div class="cursor-point-outline"></div>
			<div class="cursor-point"></div>
			<!-- .Custom cursor -->
  <?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
