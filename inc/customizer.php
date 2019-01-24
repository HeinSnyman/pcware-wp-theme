<?php
/**
 * PCware Theme Customizer
 *
 * @package PCware
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pcware_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	

/*	$wp_customize->add_setting( 'header_textcolor' , array(
		'default'   => '#000000',
		'transport' => 'refresh',
	) );
	$wp_customize->add_section( 'mytheme_new_section_name' , array(
		'title'      => __( 'Visible Section Name', 'mytheme' ),
		'priority'   => 30,
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'      => __( 'Header Color', 'mytheme' ),
		'section'    => 'mytheme_new_section_name',
		'settings'   => 'header_textcolor',
	) ) );

*/

	//Featured Hero
	$wp_customize->add_section(
		//ID
		'pcware_featured',
		//ARGS
		array(
			'title'					=>__('Featured Hero', 'pcware'),
			'active_callbackack'	=>'is_front_page',
		)
	);

	$wp_customize->add_setting(
		//ID
		'pcware_featured_hero',
		//ARGS
		array(
			'default'				=> get_stylesheet_directory_uri() . '/images/logo.png',
			'sanitize_callback'		=>'esc_url_raw',
			'transport'				=>'postMEssage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			//WP OBJECT
			$wp_customize,
			//ID
			'pcware_featured_hero_image',
			//ARGS
			array(
				'settings'			=> 'pcware_featured_hero',
				'section'			=> 'pcware_featured',
				'label'				=> __( 'Featured Background', 'pcware' ),
				'description'		=> __('Select a Background Image', 'pcware'),
			)
		)
	);



}
add_action( 'customize_register', 'pcware_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pcware_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pcware_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pcware_customize_preview_js() {
	wp_enqueue_script( 'pcware-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pcware_customize_preview_js' );


/**
 * PCWARE CUSTOMIZE CSSS ==============
 **/
function pcware_customize_css(){

		$featured_hero_image = get_theme_mod( 'pcware_featured_hero' );
?>

	<style type="text/css">
		#front-page__featured{
			background-image: url( <?php echo $featured_hero_image; ?>);
		}
	</style>
<?php

}
add_action( 'wp_head', 'pcware_customize_css' );

