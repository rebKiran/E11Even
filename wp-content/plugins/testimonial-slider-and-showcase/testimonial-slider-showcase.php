<?php
/**
 * Plugin Name: Testimonials Slider and Showcase
 * Plugin URI: https://radiustheme.com
 * Description: Testimonial Slider And Showcase plugin is a fully Responsive to manage your company or site Testimonials.
 * Author: RadiusTheme
 * Version: 1.0
 * Author URI: https://radiustheme.com
 * Tag: best testimonial plugin, creative testimonial, testimonial, testimonial gallery, testimonial slider, responsive testimonial, wordpress testimonial plugin, wp testimonial
 * Text Domain: testimonial-slider-showcase
 * Domain Path: /languages
 */

define( 'TSS_PLUGIN_PATH', dirname( __FILE__ ) );
define( 'TSS_PLUGIN_ACTIVE_FILE_NAME', plugin_basename( __FILE__ ) );
define( 'TSS_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'TSS_LANGUAGE_PATH', dirname( plugin_basename( __FILE__ ) ) . '/languages' );

require( 'lib/init.php' );