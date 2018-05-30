<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */


/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *

 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */

get_template_part ('framework/plugins/theme-plugins-activation');
add_action( 'tgmpa_register', 'philos_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */

function philos_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */

	$plugins = array(
		array(
			'name'         => 'Page Builder by SiteOrigin',
			'slug'         => 'siteorigin-panels', 
			'required'     => true, 
		),	
			
		array(
			'name'         => 'Black Studio TinyMCE Widget',
			'slug'         => 'black-studio-tinymce-widget',
			'required'     => true,
		),

		array(
			'name'         => 'Max Mega Menu',
			'slug'         => 'megamenu',
			'required'     => false, 
		),

		array(
			'name'         => 'WooCommerce',
			'slug'         => 'woocommerce',
			'required'     => false, 
		),

		array(
			'name'         => 'WooSidebars',
			'slug'         => 'woosidebars', 
			'required'     => false,
		),
		
		array(
			'name'         => 'Contact Form 7',
			'slug'         => 'contact-form-7',
			'required'     => false, 
		),

		array(
			'name'         => 'WP Instagram Widget',
			'slug'         => 'wp-instagram-widget', 
			'required'     => false, 
		),

		array(
			'name'         => 'MailPoet Newsletters',
			'slug'         => 'wysija-newsletters',
			'required'     => false, 
		),

		array(
			'name'         => 'YITH WooCommerce Compare',
			'slug'         => 'yith-woocommerce-compare', 
			'required'     => false, 
		),

		array(
			'name'         => 'YITH WooCommerce Wishlist',
			'slug'         => 'yith-woocommerce-wishlist', 
			'required'     => false, 
		),		

		array(
			'name'         => 'Regenerate Thumbnails',
			'slug'         => 'regenerate-thumbnails', 
			'required'     => false, 
		),

		array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),

		array(
			'name'         => 'Yoast SEO',
			'slug'         => 'wordpress-seo', 
			'required'     => false, 
		),		

		array(
			'name'               => 'NileforestCustompost', // The plugin name.
			'slug'               => 'NileforestCustompost', // The plugin slug (typically the folder name).
			'source'             => 'http://nileforest.com/woo/nilefoplugins/NileforestCustompost.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.	
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),	

		array(

			'name'               => 'NileforestShortcodes', // The plugin name.
			'slug'               => 'NileforestShortcodes', // The plugin slug (typically the folder name).
			'source'             => 'http://nileforest.com/woo/nilefoplugins/NileforestShortcodes.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.		
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),	
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */

	$config = array(
		'id'           => 'philos',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'nileforest-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.	
	);

	tgmpa( $plugins, $config );
}