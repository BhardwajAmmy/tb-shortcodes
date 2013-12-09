<?php
/**
 * Shortcode Generator
 */
class TBs_Generator {

	/**
	 * Constructor
	 */
	function __construct() {
		add_action( 'media_buttons',                       array( __CLASS__, 'button' ), 1000 );

		add_action( 'tbs/update',                           array( __CLASS__, 'reset' ) );
		add_action( 'tbs/activation',                       array( __CLASS__, 'reset' ) );
		add_action( 'techbooth/page/before',                 array( __CLASS__, 'reset' ) );
		add_action( 'create_term',                         array( __CLASS__, 'reset' ), 10, 3 );
		add_action( 'edit_term',                           array( __CLASS__, 'reset' ), 10, 3 );
		add_action( 'delete_term',                         array( __CLASS__, 'reset' ), 10, 3 );

		add_action( 'wp_ajax_tbs_generator_settings',       array( __CLASS__, 'settings' ) );
		add_action( 'wp_ajax_tbs_generator_preview',        array( __CLASS__, 'preview' ) );
		add_action( 'tbs/generator/actions',                array( __CLASS__, 'presets' ) );

		add_action( 'wp_ajax_tbs_generator_get_icons',      array( __CLASS__, 'ajax_get_icons' ) );
		add_action( 'wp_ajax_tbs_generator_get_terms',      array( __CLASS__, 'ajax_get_terms' ) );
		add_action( 'wp_ajax_tbs_generator_get_taxonomies', array( __CLASS__, 'ajax_get_taxonomies' ) );
		add_action( 'wp_ajax_tbs_generator_add_preset',     array( __CLASS__, 'ajax_add_preset' ) );
		add_action( 'wp_ajax_tbs_generator_remove_preset',  array( __CLASS__, 'ajax_remove_preset' ) );
		add_action( 'wp_ajax_tbs_generator_get_preset',     array( __CLASS__, 'ajax_get_preset' ) );
	}

	/**
	 * Generator button
	 */
	public static function button( $args = array() ) {
		// Check access
		if ( !self::access_check() ) return;
		// Prepare args
		$args = wp_parse_args( $args, array(
				'target'    => 'content',
				'text'      => __( 'Insert shortcode', 'tbs' ),
				'class'     => 'button',
				'icon'      => plugins_url( 'assets/images/icon.png', TBS_PLUGIN_FILE ),
				'echo'      => true,
				'shortcode' => false
			) );
		// Prepare icon
		if ( $args['icon'] ) $args['icon'] = '<img src="' . $args['icon'] . '" /> ';
		// Print button
		$button = '<a href="javascript:void(0);" class="tbs-generator-button ' . $args['class'] . '" title="' . $args['text'] . '" data-target="' . $args['target'] . '" data-mfp-src="#tbs-generator" data-shortcode="' . (string) $args['shortcode'] . '">' . $args['icon'] . $args['text'] . '</a>';
		// Show generator popup
		add_action( 'wp_footer',    array( __CLASS__, 'popup' ) );
		add_action( 'admin_footer', array( __CLASS__, 'popup' ) );
		// Request assets
		wp_enqueue_media();
		tbs_query_asset( 'css', array( 'simpleslider', 'farbtastic', 'magnific-popup', 'font-awesome', 'tbs-generator' ) );
		tbs_query_asset( 'js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-widget', 'jquery-ui-mouse', 'simpleslider', 'farbtastic', 'magnific-popup', 'tbs-generator' ) );
		// Print/return result
		if ( $args['echo'] ) echo $button;
		return $button;
	}

	/**
	 * Cache reset
	 */
	public static function reset() {
		// Clear popup cache
		delete_transient( 'tbs/generator/popup' );
		// Clear shortcodes settings cache
		foreach ( array_keys( (array) TBs_Data::shortcodes() ) as $shortcode ) delete_transient( 'tbs/generator/settings/' . $shortcode );
	}

	/**
	 * Generator popup form
	 */
	public static function popup() {
		// Get cache
		$output = get_transient( 'tbs/generator/popup' );
		if ( $output && TBS_ENABLE_CACHE ) echo $output;
		// Cache not found
		else {
			ob_start();
			$tools = apply_filters( 'tbs/generator/tools', array(
					'<a href="' . admin_url( 'admin.php?page=shortcodes-ultimate' ) . '#tab-1" target="_blank" title="' . __( 'Settings', 'tbs' ) . '">' . __( 'Plugin settings', 'tbs' ) . '</a>',
					'<a href="http://www.techbooth.in" target="_blank" title="' . __( 'Plugin homepage', 'tbs' ) . '">' . __( 'Plugin homepage', 'tbs' ) . '</a>',
					'<a href="http://wordpress.org/support/plugin/shortcodes-ultimate/" target="_blank" title="' . __( 'Support forums', 'tbs' ) . '">' . __( 'Support forums', 'tbs' ) . '</a>'
				) );
?>
		<div id="tbs-generator-wrap" style="display:none">
			<div id="tbs-generator">
				<div id="tbs-generator-header">
					<div id="tbs-generator-tools"><?php echo implode( ' <span></span> ', $tools ); ?></div>
					<input type="text" name="tbs_generator_search" id="tbs-generator-search" value="" placeholder="<?php _e( 'Search for shortcodes', 'tbs' ); ?>" />
					<div id="tbs-generator-filter">
						<strong><?php _e( 'Filter by type', 'tbs' ); ?></strong>
						<?php foreach ( (array) TBs_Data::groups() as $group => $label ) echo '<a href="#" data-filter="' . $group . '">' . $label . '</a>'; ?>
					</div>
					<div id="tbs-generator-choices" class="tbs-generator-clearfix">
						<?php
			// Choices loop
			foreach ( (array) TBs_Data::shortcodes() as $name => $shortcode ) {
				$icon = ( isset( $shortcode['icon'] ) ) ? $shortcode['icon'] : 'puzzle-piece';
				$shortcode['name'] = ( isset( $shortcode['name'] ) ) ? $shortcode['name'] : $name;
				echo '<span data-name="' . $shortcode['name'] . '" data-shortcode="' . $name . '" title="' . esc_attr( $shortcode['desc'] ) . '" data-desc="' . esc_attr( $shortcode['desc'] ) . '" data-group="' . $shortcode['group'] . '">' . TBs_Tools::icon( $icon ) . $shortcode['name'] . '</span>' . "\n";
			}
?>
					</div>
				</div>
				<div id="tbs-generator-settings"></div>
				<input type="hidden" name="tbs-generator-selected" id="tbs-generator-selected" value="<?php echo plugins_url( '', TBS_PLUGIN_FILE ); ?>" />
				<input type="hidden" name="tbs-generator-url" id="tbs-generator-url" value="<?php echo plugins_url( '', TBS_PLUGIN_FILE ); ?>" />
				<input type="hidden" name="tbs-compatibility-mode-prefix" id="tbs-compatibility-mode-prefix" value="<?php echo tbs_compatibility_mode_prefix(); ?>" />
				<div id="tbs-generator-result" style="display:none"></div>
			</div>
		</div>
	<?php
			$output = ob_get_contents();
			set_transient( 'tbs/generator/popup', $output, 2 * DAY_IN_SECONDS );
			ob_end_clean();
			echo $output;
		}
	}

	/**
	 * Process AJAX request
	 */
	public static function settings() {
		self::access();
		// Param check
		if ( empty( $_REQUEST['shortcode'] ) ) wp_die( __( 'Shortcode not specified', 'tbs' ) );
		// Get cache
		$output = get_transient( 'tbs/generator/settings/' . sanitize_text_field( $_REQUEST['shortcode'] ) );
		if ( $output && TBS_ENABLE_CACHE ) echo $output;
		// Cache not found
		else {
			// Request queried shortcode
			$shortcode = TBs_Data::shortcodes( sanitize_key( $_REQUEST['shortcode'] ) );
			// Prepare skip-if-default option
			$skip = ( get_option( 'tbs_option_skip' ) === 'on' ) ? ' tbs-generator-skip' : '';
			// Prepare actions
			$actions = apply_filters( 'tbs/generator/actions', array(
					'insert' => '<a href="javascript:void(0);" class="button button-primary button-large tbs-generator-insert"><i class="fa fa-check"></i> ' . __( 'Insert shortcode', 'tbs' ) . '</a>',
					'preview' => '<a href="javascript:void(0);" class="button button-large tbs-generator-toggle-preview"><i class="fa fa-eye"></i> ' . __( 'Live preview', 'tbs' ) . '</a>'
				) );
			// Shortcode header
			$return = '<div id="tbs-generator-breadcrumbs">';
			$return .= apply_filters( 'tbs/generator/breadcrumbs', '<a href="javascript:void(0);" class="tbs-generator-home" title="' . __( 'Click to return to the shortcodes list', 'tbs' ) . '">' . __( 'All shortcodes', 'tbs' ) . '</a> &rarr; <span>' . $shortcode['name'] . '</span> <small class="alignright">' . $shortcode['desc'] . '</small><div class="tbs-generator-clear"></div>' );
			$return .= '</div>';
			// Shortcode has atts
			if ( count( $shortcode['atts'] ) && $shortcode['atts'] ) {
				// Loop through shortcode parameters
				foreach ( $shortcode['atts'] as $attr_name => $attr_info ) {
					// Prepare default value
					$default = (string) ( isset( $attr_info['default'] ) ) ? $attr_info['default'] : '';
					$attr_info['name'] = (isset( $attr_info['name'] )) ? $attr_info['name'] : $attr_name;
					$return .= '<div class="tbs-generator-attr-container' . $skip . '" data-default="' . esc_attr( $default ) . '">';
					$return .= '<h5>' . $attr_info['name'] . '</h5>';
					// Create field types
					if ( !isset( $attr_info['type'] ) && isset( $attr_info['values'] ) && is_array( $attr_info['values'] ) && count( $attr_info['values'] ) ) $attr_info['type'] = 'select';
					elseif ( !isset( $attr_info['type'] ) ) $attr_info['type'] = 'text';
					if ( is_callable( array( 'TBs_Generator_Views', $attr_info['type'] ) ) ) $return .= call_user_func( array( 'TBs_Generator_Views', $attr_info['type'] ), $attr_name, $attr_info );
					elseif ( isset( $attr_info['callback'] ) && is_callable( $attr_info['callback'] ) ) $return .= call_user_func( $attr_info['callback'], $attr_name, $attr_info );
					if ( isset( $attr_info['desc'] ) ) $return .= '<div class="tbs-generator-attr-desc">' . str_replace( '<b%value>', '<b class="tbs-generator-set-value" title="' . __( 'Click to set this value', 'tbs' ) . '">', $attr_info['desc'] ) . '</div>';
					$return .= '</div>';
				}
			}
			// Single shortcode (not closed)
			if ( $shortcode['type'] == 'single' ) $return .= '<input type="hidden" name="tbs-generator-content" id="tbs-generator-content" value="false" />';
			// Wrapping shortcode
			else $return .= '<div class="tbs-generator-attr-container"><h5>' . __( 'Content', 'tbs' ) . '</h5><textarea name="tbs-generator-content" id="tbs-generator-content" rows="3">' . esc_attr( str_replace( '%prefix_', tbs_cmpt(), $shortcode['content'] ) ) . '</textarea></div>';
			$return .= '<div id="tbs-generator-preview"></div>';
			$return .= '<div class="tbs-generator-actions tbs-generator-clearfix">' . implode( ' ', array_values( $actions ) ) . '</div>';
			set_transient( 'tbs/generator/settings/' . sanitize_text_field( $_REQUEST['shortcode'] ), $return, 2 * DAY_IN_SECONDS );
			echo $return;
		}
		exit;
	}

	/**
	 * Process AJAX request and generate preview HTML
	 */
	public static function preview() {
		// Check authentication
		self::access();
		// Output results
		do_action( 'tbs/generator/preview/before' );
		echo '<h5>' . __( 'Preview', 'tbs' ) . '</h5>';
		// echo '<hr />' . stripslashes( $_POST['shortcode'] ) . '<hr />'; // Uncomment for debug
		echo do_shortcode( str_replace( '\"', '"', $_POST['shortcode'] ) );
		echo '<div style="clear:both"></div>';
		do_action( 'tbs/generator/preview/after' );
		die();
	}

	public static function access() {
		if ( !self::access_check() ) wp_die( __( 'Access denied', 'tbs' ) );
	}

	public static function access_check() {
		$by_role = ( get_option( 'tbs_generator_access' ) ) ? current_user_can( get_option( 'tbs_generator_access' ) ) : true;
		return current_user_can( 'edit_posts' ) && $by_role;
	}

	public static function ajax_get_icons() {
		self::access();
		die( TBs_Tools::icons() );
	}

	public static function ajax_get_terms() {
		self::access();
		$args = array();
		if ( isset( $_REQUEST['tax'] ) ) $args['options'] = (array) TBs_Tools::get_terms( sanitize_key( $_REQUEST['tax'] ) );
		if ( isset( $_REQUEST['class'] ) ) $args['class'] = (string) sanitize_key( $_REQUEST['class'] );
		if ( isset( $_REQUEST['multiple'] ) ) $args['multiple'] = (bool) sanitize_key( $_REQUEST['multiple'] );
		if ( isset( $_REQUEST['size'] ) ) $args['size'] = (int) sanitize_key( $_REQUEST['size'] );
		if ( isset( $_REQUEST['noselect'] ) ) $args['noselect'] = (bool) sanitize_key( $_REQUEST['noselect'] );
		die( TBs_Tools::select( $args ) );
	}

	public static function ajax_get_taxonomies() {
		self::access();
		$args = array();
		$args['options'] = TBs_Tools::get_taxonomies();
		die( TBs_Tools::select( $args ) );
	}

	public static function presets( $actions ) {
		ob_start();
		?>
<div class="tbs-generator-presets alignright" data-shortcode="<?php echo sanitize_key( $_REQUEST['shortcode'] ); ?>">
	<a href="javascript:void(0);" class="button button-large tbs-gp-button"><i class="fa fa-bars"></i> <?php _e( 'Presets', 'tbs' ); ?></a>
	<div class="tbs-gp-popup">
		<div class="tbs-gp-head">
			<a href="javascript:void(0);" class="button button-small button-primary tbs-gp-new"><?php _e( 'Save current settings as preset', 'tbs' ); ?></a>
		</div>
		<div class="tbs-gp-list">
			<?php self::presets_list(); ?>
		</div>
	</div>
</div>
		<?php
		$actions['presets'] = ob_get_contents();
		ob_end_clean();
		return $actions;
	}

	public static function presets_list( $shortcode = false ) {
		// Shortcode isn't specified, try to get it from $_REQUEST
		if ( !$shortcode ) $shortcode = $_REQUEST['shortcode'];
		// Shortcode name is still doesn't exists, exit
		if ( !$shortcode ) return;
		// Shortcode has been specified, sanitize it
		$shortcode = sanitize_key( $shortcode );
		// Get presets
		$presets = get_option( 'tbs_presets_' . $shortcode );
		// Presets has been found
		if ( is_array( $presets ) && count( $presets ) ) {
			// Print the presets
			foreach( $presets as $preset ) {
				echo '<span data-id="' . $preset['id'] . '"><em>' . stripslashes( $preset['name'] ) . '</em> <i class="fa fa-times"></i></span>';
			}
			// Hide default text
			echo sprintf( '<b style="display:none">%s</b>', __( 'Presets not found', 'tbs' ) );
		}
		// Presets doesn't found
		else echo sprintf( '<b>%s</b>', __( 'Presets not found', 'tbs' ) );
	}

	public static function ajax_add_preset() {
		self::access();
		// Check incoming data
		if ( empty( $_POST['id'] ) ) return;
		if ( empty( $_POST['name'] ) ) return;
		if ( empty( $_POST['settings'] ) ) return;
		if ( empty( $_POST['shortcode'] ) ) return;
		// Clean-up incoming data
		$id = sanitize_key( $_POST['id'] );
		$name = sanitize_text_field( $_POST['name'] );
		$settings = ( is_array( $_POST['settings'] ) ) ? stripslashes_deep( $_POST['settings'] ) : array();
		$shortcode = sanitize_key( $_POST['shortcode'] );
		// Prepare option name
		$option = 'tbs_presets_' . $shortcode;
		// Get the existing presets
		$current = get_option( $option );
		// Create array with new preset
		$new = array(
			'id'       => $id,
			'name'     => $name,
			'settings' => $settings
		);
		// Add new array to the option value
		if ( !is_array( $current ) ) $current = array();
		$current[$id] = $new;
		// Save updated option
		update_option( $option, $current );
		// Clear cache
		delete_transient( 'tbs/generator/settings/' . $shortcode );
	}

	public static function ajax_remove_preset() {
		self::access();
		// Check incoming data
		if ( empty( $_POST['id'] ) ) return;
		if ( empty( $_POST['shortcode'] ) ) return;
		// Clean-up incoming data
		$id = sanitize_key( $_POST['id'] );
		$shortcode = sanitize_key( $_POST['shortcode'] );
		// Prepare option name
		$option = 'tbs_presets_' . $shortcode;
		// Get the existing presets
		$current = get_option( $option );
		// Check that preset is exists
		if ( !is_array( $current ) || empty( $current[$id] ) ) return;
		// Remove preset
		unset( $current[$id] );
		// Save updated option
		update_option( $option, $current );
		// Clear cache
		delete_transient( 'tbs/generator/settings/' . $shortcode );
	}

	public static function ajax_get_preset() {
		self::access();
		// Check incoming data
		if ( empty( $_GET['id'] ) ) return;
		if ( empty( $_GET['shortcode'] ) ) return;
		// Clean-up incoming data
		$id = sanitize_key( $_GET['id'] );
		$shortcode = sanitize_key( $_GET['shortcode'] );
		// Default data
		$data = array();
		// Get the existing presets
		$presets = get_option( 'tbs_presets_' . $shortcode );
		// Check that preset is exists
		if ( is_array( $presets ) && isset( $presets[$id]['settings'] ) ) $data = $presets[$id]['settings'];
		// Print results
		die( json_encode( $data ) );
	}
}

new TBs_Generator;

class Shortcodes_Ultimate_Generator extends TBs_Generator {
	function __construct() {
		parent::__construct();
	}
}
