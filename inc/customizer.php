<?php
/**
 * Modern (Twenty Nineteen): Customizer
 *
 * @package Modern_2019
 */

/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function modern2019_customize_register( $wp_customize ) {
	$wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'modern2019' );
}
add_action( 'customize_register', 'modern2019_customize_register' );