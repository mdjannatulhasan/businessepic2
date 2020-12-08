<?php
if ( ! function_exists( 'business_epic_gutenberg_setup' ) ) :
	/**
	 * Making theme gutenberg compatible
	 */
	function business_epic_gutenberg_setup() {
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'business_epic_gutenberg_setup' );

function business_epic_dynamic_editor_styles(){

	global $business_epic_customizer_all_values;
	$business_epic_link_color               = esc_attr( $business_epic_customizer_all_values['business_epic-link-color'] );
	$business_epic_link_hover_color         = esc_attr( $business_epic_customizer_all_values['business_epic-link-hover-color'] );

	$custom_css = '';

	$custom_css .= "
            .edit-post-visual-editor, 
			.edit-post-visual-editor p {
               color: #666;
            }";

	$custom_css .= "
	        .wp-block .wp-block-heading h1, 
	        .wp-block .wp-block-heading h1 a,
	        .wp-block .wp-block-heading h2,
	        .wp-block .wp-block-heading h2 a,
	        .wp-block .wp-block-heading h3, 
	        .wp-block .wp-block-heading h3 a,
	        .wp-block .wp-block-heading h4, 
	        .wp-block .wp-block-heading h4 a,
	        .wp-block .wp-block-heading h5, 
	        .wp-block .wp-block-heading h5 a,
	        .wp-block .wp-block-heading h6,
	        .wp-block .wp-block-heading h6 a{
	            color: #3a3a3a;
	        }";

	$custom_css .= "
	        .wp-block a{
	            color: {$business_epic_link_color};
	        }";
	$custom_css .= "
	        .wp-block a:hover,
	        .wp-block a:active,
	        .wp-block a:focus{
	            color: {$business_epic_link_hover_color};
	        }";

        return wp_strip_all_tags( $custom_css );	
}

/**
 * Enqueue block editor style
 */
function business_epic_block_editor_styles() {
	wp_enqueue_style( 'business_epic-googleapis', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Work+Sans:100,200,300,400,500,600,700,800,900', array(), null );
	wp_enqueue_style( 'business_epic-block-editor-styles', get_template_directory_uri() . '/inc/gutenberg/gutenberg-edit.css', false, '1.0' );

	/**
	 * Styles from the customizer
	 */
	wp_add_inline_style( 'business_epic-block-editor-styles', business_epic_dynamic_editor_styles() );
}
add_action( 'enqueue_block_editor_assets', 'business_epic_block_editor_styles',99 );

function business_epic_gutenberg_scripts() {
	wp_enqueue_style( 'business_epic-block-front-styles', get_template_directory_uri() . '/inc/gutenberg/gutenberg-front.css', false, '1.0' );
	wp_style_add_data( 'business_epic-block-front-styles', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'business_epic_gutenberg_scripts' );