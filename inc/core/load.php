<?php
class Shortcodes_Ultimate {

	/**
	 * Constructor
	 */
	function __construct() {
		add_action( 'plugins_loaded',             array( __CLASS__, 'init' ) );
		add_action( 'init',                       array( __CLASS__, 'register' ) );
		add_action( 'init',                       array( __CLASS__, 'update' ), 20 );
		register_activation_hook( TBS_PLUGIN_FILE, array( __CLASS__, 'activation' ) );
		register_activation_hook( TBS_PLUGIN_FILE, array( __CLASS__, 'deactivation' ) );
	}

	/**
	 * Plugin init
	 */
	public static function init() {
		// Make plugin available for translation
		load_plugin_textdomain( 'tbs', false, dirname( plugin_basename( TBS_PLUGIN_FILE ) ) . '/languages/' );
		// Setup admin class
		$admin = new Techbooth4( array(
				'file'       => TBS_PLUGIN_FILE,
				'slug'       => 'tbs',
				'prefix'     => 'tbs_option_',
				'textdomain' => 'tbs'
			) );
		// Top-level menu
		$admin->add_menu( array(
				'page_title'  => __( 'Settings', 'tbs' ) . ' &lsaquo; ' . __( 'TB Shortcodes', 'tbs' ),
				'menu_title'  => __( 'Shortcodes', 'tbs' ),
				'capability'  => 'edit_others_posts',
				'slug'        => 'shortcodes-ultimate',
				'icon_url'    => plugins_url( 'assets/images/icon.png', TBS_PLUGIN_FILE ),
				'position'    => '80.11',
				'options'     => array(
					array(
						'type' => 'opentab',
						'name' => __( 'About', 'tbs' )
					),
					array(
						'type'     => 'about',
						'callback' => array( 'TBs_Admin_Views', 'about' )
					),
					array(
						'type'    => 'closetab',
						'actions' => false
					),
					array(
						'type' => 'opentab',
						'name' => __( 'Settings', 'tbs' )
					),
					array(
						'type'    => 'checkbox',
						'id'      => 'custom-formatting',
						'name'    => __( 'Custom formatting', 'tbs' ),
						'desc'    => __( 'Disable this option if you have some problems with other plugins or content formatting', 'tbs' ) . '<br /><a href="http://www.techbooth.inkb/custom-formatting/" target="_blank">' . __( 'Documentation article', 'tbs' ) . '</a>',
						'default' => 'on',
						'label'   => __( 'Enabled', 'tbs' )
					),
					array(
						'type'    => 'checkbox',
						'id'      => 'skip',
						'name'    => __( 'Skip default values', 'tbs' ),
						'desc'    => __( 'Enable this option and the generator will insert a shortcode without default attribute values that you have not changed. As a result, the generated code will be shorter.', 'tbs' ),
						'default' => 'on',
						'label'   => __( 'Enabled', 'tbs' )
					),
					array(
						'type'    => 'text',
						'id'      => 'prefix',
						'name'    => __( 'Shortcodes prefix', 'tbs' ),
						'desc'    => sprintf( __( 'This prefix will be added to all shortcodes by this plugin. For example, type here %s and you\'ll get shortcodes like %s and %s. Please keep in mind: this option is not affects your already inserted shortcodes and if you\'ll change this value your old shortcodes will be broken', 'tbs' ), '<code>tbs_</code>', '<code>[tbs_button]</code>', '<code>[tbs_column]</code>' ),
						'default' => 'tbs_'
					),
					array(
						'type'    => 'text',
						'id'      => 'skin',
						'name'    => __( 'Skin', 'tbs' ),
						'desc'    => __( 'Choose global skin for shortcodes', 'tbs' ),
						'default' => 'default'
					),
					array(
						'type' => 'closetab'
					),
					array(
						'type' => 'opentab',
						'name' => __( 'Custom CSS', 'tbs' )
					),
					array(
						'type'     => 'custom_css',
						'id'       => 'custom-css',
						'default'  => '',
						'callback' => array( 'TBs_Admin_Views', 'custom_css' )
					),
					array(
						'type' => 'closetab'
					)
				)
			) );
		// Settings submenu
		$admin->add_submenu( array(
				'parent_slug' => 'shortcodes-ultimate',
				'page_title'  => __( 'Settings', 'tbs' ) . ' &lsaquo; ' . __( 'TB Shortcodes', 'tbs' ),
				'menu_title'  => __( 'Settings', 'tbs' ),
				'capability'  => 'edit_others_posts',
				'slug'        => 'shortcodes-ultimate',
				'options'     => array()
			) );
		// Examples submenu
		$admin->add_submenu( array(
				'parent_slug' => 'shortcodes-ultimate',
				'page_title'  => __( 'Examples', 'tbs' ) . ' &lsaquo; ' . __( 'TB Shortcodes', 'tbs' ),
				'menu_title'  => __( 'Examples', 'tbs' ),
				'capability'  => 'edit_others_posts',
				'slug'        => 'shortcodes-ultimate-examples',
				'options'     => array(
					array(
						'type' => 'examples',
						'callback' => array( 'TBs_Admin_Views', 'examples' )
					)
				)
			) );
		// Add-ons submenu
		$admin->add_submenu( array(
				'parent_slug' => 'shortcodes-ultimate',
				'page_title'  => __( 'Add-ons', 'tbs' ) . ' &lsaquo; ' . __( 'TB Shortcodes', 'tbs' ),
				'menu_title'  => __( 'Add-ons', 'tbs' ),
				'capability'  => 'edit_others_posts',
				'slug'        => 'shortcodes-ultimate-addons',
				'options'     => array(
					array(
						'type' => 'addons',
						'callback' => array( 'TBs_Admin_Views', 'addons' )
					)
				)
			) );
		// Translate plugin meta
		__( 'TB Shortcodes', 'tbs' );
		__( 'TechBooth', 'tbs' );
		__( 'Supercharge your WordPress theme with mega pack of shortcodes', 'tbs' );
		// Prevent insertion of default options
		if ( get_option( 'tbs_option_skin' ) ) update_option( 'techbooth_defaults_su', true );
		// Add plugin actions links
		add_filter( 'plugin_action_links_' . plugin_basename( TBS_PLUGIN_FILE ), array( __CLASS__, 'actions_links' ), -10 );
		// Add plugin meta links
		add_filter( 'plugin_row_meta', array( __CLASS__, 'meta_links' ), 10, 2 );
		// Import custom CSS from version 3.9.5 and below
		add_action( 'admin_init', array( __CLASS__, 'import_395' ) );
		// Import settings from versions 4.3.2 and below
		add_action( 'admin_init', array( __CLASS__, 'import_432' ) );
		// TB Shortcodes is ready
		do_action( 'tbs/init' );
	}

	/**
	 * Plugin activation
	 */
	public static function activation() {
		self::timestamp();
		self::skins_dir();
		update_option( 'tbs_option_version', TBS_PLUGIN_VERSION );
		do_action( 'tbs/activation' );
	}

	/**
	 * Plugin deactivation
	 */
	public static function deactivation() {
		do_action( 'tbs/deactivation' );
	}

	/**
	 * Plugin update hook
	 */
	public static function update() {
		$option = get_option( 'tbs_option_version' );
		if ( $option !== TBS_PLUGIN_VERSION ) {
			update_option( 'tbs_option_version', TBS_PLUGIN_VERSION );
			do_action( 'tbs/update' );
		}
	}

	/**
	 * Register shortcodes
	 */
	public static function register() {
		// Prepare compatibility mode prefix
		$prefix = tbs_cmpt();
		// Loop through shortcodes
		foreach ( ( array ) TBs_Data::shortcodes() as $id => $data ) {
			if ( isset( $data['function'] ) && is_callable( $data['function'] ) ) $func = $data['function'];
			elseif ( is_callable( array( 'TBs_Shortcodes', $id ) ) ) $func = array( 'TBs_Shortcodes', $id );
			elseif ( is_callable( array( 'TBs_Shortcodes', 'tbs_' . $id ) ) ) $func = array( 'TBs_Shortcodes', 'tbs_' . $id );
			else continue;
			// Register shortcode
			add_shortcode( $prefix . $id, $func );
		}
		// Register [media] manually // 3.x
		add_shortcode( $prefix . 'media', array( 'TBs_Shortcodes', 'media' ) );
	}

	/**
	 * Add timestamp
	 */
	public static function timestamp() {
		if ( !get_option( 'tbs_installed' ) ) update_option( 'tbs_installed', time() );
	}

	/**
	 * Create directory /wp-content/uploads/shortcodes-ultimate-skins/ on activation
	 */
	public static function skins_dir() {
		$upload_dir = wp_upload_dir();
		$path = trailingslashit( path_join( $upload_dir['basedir'], 'shortcodes-ultimate-skins' ) );
		if ( !file_exists( $path ) ) mkdir( $path, 0755 );
	}

	/**
	 * Add plugin actions links
	 */
	public static function actions_links( $links ) {
		$links[] = '<a href="' . admin_url( 'admin.php?page=shortcodes-ultimate' ) . '#tab-0">' . __( 'Where to start?', 'tbs' ) . '</a>';
		return $links;
	}

	/**
	 * Add plugin meta links
	 */
	public static function meta_links( $links, $file ) {
		// Check plugin
		if ( $file === plugin_basename( TBS_PLUGIN_FILE ) ) {
			unset( $links[2] );
			$links[] = '<a href="http://www.techbooth.in" target="_blank">' . __( 'Project homepage', 'tbs' ) . '</a>';
			$links[] = '<a href="http://wordpress.org/support/plugin/shortcodes-ultimate/" target="_blank">' . __( 'Support forum', 'tbs' ) . '</a>';
			$links[] = '<a href="http://wordpress.org/extend/plugins/shortcodes-ultimate/changelog/" target="_blank">' . __( 'Changelog', 'tbs' ) . '</a>';
		}
		return $links;
	}

	/**
	 * Import custom CSS from versions 3.9.5 and below
	 */
	public static function import_395() {
		$from_395 = get_option( 'tbs_custom_css' );
		if ( !$from_395 ) return;
		$current = get_option( 'tbs_option_custom-css' );
		update_option( 'tbs_option_custom-css', $from_395 . "\n\n" . $current );
		delete_option( 'tbs_custom_css' );
	}

	/**
	 * Import settings from versions 4.3.2 and below
	 */
	public static function import_432() {
		$from_432 = get_option( 'shortcodesultimate_options' );
		if ( !$from_432 ) return;
		// Custom formatting
		if ( isset( $from_432['custom_formatting'] ) ) update_option( 'tbs_option_custom-formatting', 'on' );
		else update_option( 'tbs_option_custom-formatting', '' );
		// Compatibility mode
		if ( isset( $from_432['compatibility_mode'] ) ) update_option( 'tbs_option_compatibility-mode', 'on' );
		else update_option( 'tbs_option_compatibility-mode', '' );
		// Skin
		if ( isset( $from_432['skin'] ) ) update_option( 'tbs_option_skin', $from_432['skin'] );
		// Skip
		if ( isset( $from_432['skip'] ) ) update_option( 'tbs_option_skip', 'on' );
		else update_option( 'tbs_option_skip', '' );
		// Custom CSS
		if ( isset( $from_432['custom_css'] ) ) update_option( 'tbs_option_custom-css', $from_432['custom_css'] );
		// Galleries
		if ( isset( $from_432['galleries'] ) ) update_option( 'tbs_option_galleries-432', $from_432['galleries'] );
		delete_option( 'shortcodesultimate_options' );
	}

	/**
	 * Import compatibility mode settings from versions 4.4.6 and below
	 */
	public static function import_446() {
		$from_395 = get_option( 'tbs_compatibility_mode_prefix' );
		$from_446 = get_option( 'tbs_option_compatibility-mode' );
		$from_450 = get_option( 'tbs_option_prefix' );
		// Check for new prefix first
		if ( $from_450 ) return;
		// Old prefixes - gn_
		if ( $from_395 ) {
			update_option( 'tbs_option_prefix', $from_395 );
		}
		// New chechbox - ON
		elseif ( $from_446 && $from_446 === 'on' ) update_option( 'tbs_option_prefix', 'tbs_' );
		// New checkbox - OFF
		elseif ( $from_446 && $from_446 === '' ) update_option( 'tbs_option_prefix', '' );
		// Remove old options
		delete_option( 'tbs_compatibility_mode_prefix' );
		delete_option( 'tbs_option_compatibility-mode' );
	}
}

/**
 * Register plugin function to perform checks that plugin is installed
 */
function shortcodes_ultimate() {
	return true;
}

new Shortcodes_Ultimate;
