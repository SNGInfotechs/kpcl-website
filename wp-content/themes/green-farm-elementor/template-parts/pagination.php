<?php if(get_theme_mod('green_farm_elementor_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'green-farm-elementor' ),
			'next_text' => esc_html__( 'Next page', 'green-farm-elementor' ),
		) );
	?>		
<?php endif; ?>