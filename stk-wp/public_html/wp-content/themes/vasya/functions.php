<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup() {
    add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo',
		array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);


}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );
add_theme_support( 'custom-logo' );
//$wp_customize->add_control(
//    'footer_copy',
//    array(
//        'label'    => __( 'Footer settings', 'vasya' ),
//        'section'  => 'footer_setting',
//        'settings' => 'footer_copy',
//        'type'     => 'textarea',
//        ));
//add_action( 'customize_register', 'vasya_customize_register' );






function vasya_customize_register( $wp_customize )
{
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'footer_copy',
            array(
                'label' => __('Footer settings', 'vasya'),
                'section' => 'footer_setting',
                'settings' => 'footer_copy',
                'type' => 'textarea',
            )
        )
    );
}
add_action( 'customize_register', 'vasya_customize_register' );
add_image_size( 'spec_thumb', 360, 240, true );
add_image_size( 'gallery', 1600, 900, true );
