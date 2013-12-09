<?php

/**
 * Class for managing plugin assets
 */
class TBs_Assets {

	/**
	 * Set of queried assets
	 *
	 * @var array
	 */
	static $assets = array( 'css' => array(), 'js' => array() );

	/**
	 * Constructor
	 */
	function __construct() {
		// Register
		add_action( 'wp_head',                     array( __CLASS__, 'register' ) );
		add_action( 'admin_head',                  array( __CLASS__, 'register' ) );
		add_action( 'tbs/generator/preview/before', array( __CLASS__, 'register' ) );
		add_action( 'tbs/examples/preview/before',  array( __CLASS__, 'register' ) );
		// Enqueue
		add_action( 'wp_footer',                   array( __CLASS__, 'enqueue' ) );
		add_action( 'admin_footer',                array( __CLASS__, 'enqueue' ) );
		// Print
		add_action( 'tbs/generator/preview/after',  array( __CLASS__, 'prnt' ) );
		add_action( 'tbs/examples/preview/after',   array( __CLASS__, 'prnt' ) );
		// Custom CSS
		add_action( 'wp_footer',                   array( __CLASS__, 'custom_css' ), 99 );
		add_action( 'tbs/generator/preview/after',  array( __CLASS__, 'custom_css' ), 99 );
		add_action( 'tbs/examples/preview/after',   array( __CLASS__, 'custom_css' ), 99 );
		// Custom TinyMCE CSS and JS
		// add_filter( 'mce_css',                     array( __CLASS__, 'mce_css' ) );
		// add_filter( 'mce_external_plugins',        array( __CLASS__, 'mce_js' ) );
	}

	/**
	 * Register assets
	 */
	public static function register() {
		// Chart.js
		wp_register_script( 'chartjs', plugins_url( 'assets/js/chart.js', TBS_PLUGIN_FILE ), false, '0.2', true );
		// noUIslider
		wp_register_script( 'simpleslider', plugins_url( 'assets/js/simpleslider.js', TBS_PLUGIN_FILE ), array( 'jquery' ), '1.0.0', true );
		wp_register_style( 'simpleslider', plugins_url( 'assets/css/simpleslider.css', TBS_PLUGIN_FILE ), false, '1.0.0', 'all' );
		// Font Awesome
		wp_register_style( 'font-awesome', plugins_url( 'assets/css/font-awesome.css', TBS_PLUGIN_FILE ), false, '3.2.1', 'all' );
		// Animate.css
		wp_register_style( 'animate', plugins_url( 'assets/css/animate.css', TBS_PLUGIN_FILE ), false, '1.0.0', 'all' );
		// InView
		wp_register_script( 'inview', plugins_url( 'assets/js/inview.js', TBS_PLUGIN_FILE ), array( 'jquery' ), '2.1.1', true );
		// qTip
		wp_register_style( 'qtip', plugins_url( 'assets/css/qtip.css', TBS_PLUGIN_FILE ), false, '2.1.1', 'all' );
		wp_register_script( 'qtip', plugins_url( 'assets/js/qtip.js', TBS_PLUGIN_FILE ), array( 'jquery' ), '2.1.1', true );
		// jsRender
		wp_register_script( 'jsrender', plugins_url( 'assets/js/jsrender.js', TBS_PLUGIN_FILE ), array( 'jquery' ), '1.0.0-beta', true );
		// Magnific Popup
		wp_register_style( 'magnific-popup', plugins_url( 'assets/css/magnific-popup.css', TBS_PLUGIN_FILE ), false, '0.9.7', 'all' );
		wp_register_script( 'magnific-popup', plugins_url( 'assets/js/magnific-popup.js', TBS_PLUGIN_FILE ), array( 'jquery' ), '0.9.7', true );
		// Ace
		wp_register_script( 'ace', plugins_url( 'assets/js/ace/ace.js', TBS_PLUGIN_FILE ), false, '1.1.01', true );
		// Swiper
		wp_register_script( 'swiper', plugins_url( 'assets/js/swiper.js', TBS_PLUGIN_FILE ), array( 'jquery' ), TBS_PLUGIN_VERSION, true );
		// jPlayer
		wp_register_script( 'jplayer', plugins_url( 'assets/js/jplayer.js', TBS_PLUGIN_FILE ), array( 'jquery' ), TBS_PLUGIN_VERSION, true );
		// Options page
		wp_register_style( 'tbs-options-page', plugins_url( 'assets/css/options-page.css', TBS_PLUGIN_FILE ), false, TBS_PLUGIN_VERSION, 'all' );
		wp_register_script( 'tbs-options-page', plugins_url( 'assets/js/options-page.js', TBS_PLUGIN_FILE ), array( 'magnific-popup', 'jquery-ui-sortable', 'ace', 'jsrender' ), TBS_PLUGIN_VERSION, true );
		wp_localize_script( 'tbs-options-page', 'tbs_options_page', array(
				'upload_title' => __( 'Choose files', 'tbs' ),
				'upload_insert' => __( 'Add selected files', 'tbs' ),
				'not_clickable' => __( 'This button is not clickable', 'tbs' )
			) );
		// Generator
		wp_register_style( 'tbs-generator', plugins_url( 'assets/css/generator.css', TBS_PLUGIN_FILE ), array( 'farbtastic', 'magnific-popup' ), TBS_PLUGIN_VERSION, 'all' );
		wp_register_script( 'tbs-generator', plugins_url( 'assets/js/generator.js', TBS_PLUGIN_FILE ), array( 'farbtastic', 'magnific-popup', 'qtip' ), TBS_PLUGIN_VERSION, true );
		wp_localize_script( 'tbs-generator', 'tbs_generator', array(
				'upload_title'         => __( 'Choose file', 'tbs' ),
				'upload_insert'        => __( 'Insert', 'tbs' ),
				'isp_media_title'      => __( 'Select images', 'tbs' ),
				'isp_media_insert'     => __( 'Add selected images', 'tbs' ),
				'presets_prompt_msg'   => __( 'Please enter a name for new preset', 'tbs' ),
				'presets_prompt_value' => __( 'New preset', 'tbs' )
			) );
		// Shortcodes stylesheets
		wp_register_style( 'tbs-content-shortcodes', self::skin_url( 'content-shortcodes.css' ), false, TBS_PLUGIN_VERSION, 'all' );
		wp_register_style( 'tbs-box-shortcodes', self::skin_url( 'box-shortcodes.css' ), false, TBS_PLUGIN_VERSION, 'all' );
		wp_register_style( 'tbs-media-shortcodes', self::skin_url( 'media-shortcodes.css' ), false, TBS_PLUGIN_VERSION, 'all' );
		wp_register_style( 'tbs-other-shortcodes', self::skin_url( 'other-shortcodes.css' ), false, TBS_PLUGIN_VERSION, 'all' );
		wp_register_style( 'tbs-galleries-shortcodes', self::skin_url( 'galleries-shortcodes.css' ), false, TBS_PLUGIN_VERSION, 'all' );
		wp_register_style( 'tbs-players-shortcodes', self::skin_url( 'players-shortcodes.css' ), false, TBS_PLUGIN_VERSION, 'all' );
		// Shortcodes scripts
		wp_register_script( 'tbs-galleries-shortcodes', plugins_url( 'assets/js/galleries-shortcodes.js', TBS_PLUGIN_FILE ), array( 'jquery', 'swiper' ), TBS_PLUGIN_VERSION, true );
		wp_register_script( 'tbs-players-shortcodes', plugins_url( 'assets/js/players-shortcodes.js', TBS_PLUGIN_FILE ), array( 'jquery', 'jplayer' ), TBS_PLUGIN_VERSION, true );
		wp_register_script( 'tbs-other-shortcodes', plugins_url( 'assets/js/other-shortcodes.js', TBS_PLUGIN_FILE ), array( 'jquery' ), TBS_PLUGIN_VERSION, true );
		wp_localize_script( 'tbs-other-shortcodes', 'tbs_other_shortcodes', array( 'no_preview' => __( 'This shortcode doesn\'t work in live preview. Please insert it into editor and preview on the site.', 'tbs' ) ) );
		// Hook to deregister assets or add custom
		do_action( 'tbs/assets/register' );
	}

	/**
	 * Enqueue assets
	 */
	public static function enqueue() {
		// Get assets query and plugin object
		$assets = self::assets();
		// Enqueue stylesheets
		foreach ( $assets['css'] as $style ) wp_enqueue_style( $style );
		// Enqueue scripts
		foreach ( $assets['js'] as $script ) wp_enqueue_script( $script );
		// Hook to dequeue assets or add custom
		do_action( 'tbs/assets/enqueue', $assets );
	}

	/**
	 * Print assets without enqueuing
	 */
	public static function prnt() {
		// Prepare assets set
		$assets = self::assets();
		// Enqueue stylesheets
		wp_print_styles( $assets['css'] );
		// Enqueue scripts
		wp_print_scripts( $assets['js'] );
		// Hook
		do_action( 'tbs/assets/print', $assets );
	}

	/**
	 * Print custom CSS
	 */
	public static function custom_css() {
		// Get custom CSS and apply filters to it
		$custom_css = apply_filters( 'tbs/assets/custom_css', str_replace( '&#039;', '\'', html_entity_decode( (string) get_option( 'tbs_option_custom-css' ) ) ) );
		// Print CSS if exists
		if ( $custom_css ) echo "\n\n<!-- TB Shortcodes custom CSS - begin -->\n<style type='text/css'>\n" . stripslashes( str_replace( array( '%theme_url%', '%home_url%', '%plugin_url%' ), array( trailingslashit( get_stylesheet_directory_uri() ), trailingslashit( get_option( 'home' ) ), trailingslashit( plugins_url( '', TBS_PLUGIN_FILE ) ) ), $custom_css ) ) . "\n</style>\n<!-- TB Shortcodes custom CSS - end -->\n\n";
	}

	/**
	 * Styles for visualised shortcodes
	 */
	public static function mce_css( $mce_css ) {
		if ( ! empty( $mce_css ) ) $mce_css .= ',';
		$mce_css .= plugins_url( 'assets/css/tinymce.css', TBS_PLUGIN_FILE );
		return $mce_css;
	}

	/**
	 * TinyMCE plugin for visualised shortcodes
	 */
	public static function mce_js( $plugins ) {
		$plugins['shortcodesultimate'] = plugins_url( 'assets/js/tinymce.js', TBS_PLUGIN_FILE );
		return $plugins;
	}

	/**
	 * Add asset to the query
	 */
	public static function add( $type, $handle ) {
		// Array with handles
		if ( is_array( $handle ) ) { foreach ( $handle as $h ) self::$assets[$type][$h] = $h; }
		// Single handle
		else self::$assets[$type][$handle] = $handle;
	}
	/**
	 * Get queried assets
	 */
	public static function assets() {
		// Get assets query
		$assets = self::$assets;
		// Apply filters to assets set
		$assets['css'] = array_unique( ( array ) apply_filters( 'tbs/assets/css', ( array ) array_unique( $assets['css'] ) ) );
		$assets['js'] = array_unique( ( array ) apply_filters( 'tbs/assets/js', ( array ) array_unique( $assets['js'] ) ) );
		// Return set
		return $assets;
	}

	/**
	 * Helper to get full URL of a skin file
	 */
	public static function skin_url( $file = '' ) {
		$shult = shortcodes_ultimate();
		$skin = get_option( 'tbs_option_skin' );
		$uploads = wp_upload_dir(); $uploads = $uploads['baseurl'];
		// Prepare url to skin directory
		$url = ( !$skin || $skin === 'default' ) ? plugins_url( 'assets/css/', TBS_PLUGIN_FILE ) : $uploads . '/shortcodes-ultimate-skins/' . $skin;
		return trailingslashit( apply_filters( 'tbs/assets/skin', $url ) ) . $file;
	}
}

new TBs_Assets;

/**
 * Helper function to add asset to the query
 *
 * @param string  $type   Asset type (css|js)
 * @param mixed   $handle Asset handle or array with handles
 */
function tbs_query_asset( $type, $handle ) {
	TBs_Assets::add( $type, $handle );
}

/**
 * Helper function to get current skin url
 *
 * @param string  $file Asset file name. Example value: box-shortcodes.css
 */
function tbs_skin_url( $file ) {
	return TBs_Assets::skin_url( $file );
}
