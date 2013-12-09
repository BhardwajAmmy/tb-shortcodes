<?php
class TBs_Admin_Views {
	function __construct() {}

	public static function about( $field, $config ) {
		ob_start();
?>
<div id="tbs-about-screen">
	<h1><?php _e( 'Welcome to TB Shortcodes', 'tbs' ); ?> <small><?php _e( 'A real swiss army knife for WordPress', 'tbs' ); ?></small></h1>
	<div class="techbooth-inline-menu">
		<a href="http://www.techbooth.in" target="_blank"><strong><?php _e( 'Project homepage', 'tbs' ); ?></strong></a>
		<a href="http://www.techbooth.in/kb/tb-shortcodes" target="_blank"><?php _e( 'Documentation', 'tbs' ); ?></a>
		<a href="http://www.techbooth.in/technical-support/" target="_blank"><?php _e( 'Support forum', 'tbs' ); ?></a>
		<a href="https://github.com/BhardwajAmmy/tb-shortcodes" target="_blank"><?php _e( 'Fork on GitHub', 'tbs' ); ?></a>
	</div>
	<div class="tbs-clearfix">
		<div class="tbs-about-column">
			<h3><?php _e( 'Plugin features', 'tbs' ); ?></h3>
			<ul>
				<li><?php _e( '40+ amazing shortcodes', 'tbs' ); ?></li>
				<li><?php _e( 'Power of CSS3 transitions', 'tbs' ); ?></li>
				<li><?php _e( 'Handy shortcodes generator', 'tbs' ) ?></li>
				<li><?php _e( 'Documented API', 'tbs' ); ?></li>
			</ul>
		</div>
		<div class="tbs-about-column">
			<h3><?php _e( 'What is a shortcode?', 'tbs' ); ?></h3>
			<p><?php _e( '<strong>Shortcode</strong> is a WordPress-specific code that lets you do nifty things with very little effort.', 'tbs' ); ?></p>
			<p><?php _e( 'Shortcodes can embed files or create objects that would normally require lots of complicated, ugly code in just one line. Shortcode = shortcut.', 'tbs' ); ?></p>
		</div>
	</div>
</div>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		tbs_query_asset( 'css', array( 'magnific-popup', 'tbs-options-page' ) );
		tbs_query_asset( 'js', array( 'jquery', 'magnific-popup', 'tbs-options-page' ) );
		return $output;
	}

	public static function custom_css( $field, $config ) {
		ob_start();
?>
<div id="tbs-custom-css-screen">
	<div class="tbs-custom-css-originals">
		<p><strong><?php _e( 'You can overview the original styles to override it', $config['textdomain'] ); ?></strong></p>
		<div class="techbooth-inline-menu">
			<a href="<?php echo tbs_skin_url( 'content-shortcodes.css' ); ?>">content-shortcodes.css</a>
			<a href="<?php echo tbs_skin_url( 'box-shortcodes.css' ); ?>">box-shortcodes.css</a>
			<a href="<?php echo tbs_skin_url( 'media-shortcodes.css' ); ?>">media-shortcodes.css</a>
			<a href="<?php echo tbs_skin_url( 'galleries-shortcodes.css' ); ?>">galleries-shortcodes.css</a>
			<a href="<?php echo tbs_skin_url( 'players-shortcodes.css' ); ?>">players-shortcodes.css</a>
			<a href="<?php echo tbs_skin_url( 'other-shortcodes.css' ); ?>">other-shortcodes.css</a>
		</div>
	</div>
	<div class="tbs-custom-css-vars">
		<p><strong><?php _e( 'You can use next variables in your custom CSS', $config['textdomain'] ); ?></strong></p>
		<code>%home_url%</code> - <?php _e( 'home url', $config['textdomain'] ); ?><br/>
		<code>%theme_url%</code> - <?php _e( 'theme url', $config['textdomain'] ); ?><br/>
		<code>%plugin_url%</code> - <?php _e( 'plugin url', $config['textdomain'] ); ?>
	</div>
	<div id="tbs-custom-css-editor">
		<div id="techbooth-field-<?php echo $field['id']; ?>-editor"></div>
		<textarea name="techbooth[<?php echo $field['id']; ?>]" id="techbooth-field-<?php echo $field['id']; ?>" class="regular-text" rows="10"><?php echo stripslashes( get_option( $config['prefix'] . $field['id'] ) ); ?></textarea>
	</div>
</div>
			<?php
		$output = ob_get_contents();
		ob_end_clean();
		tbs_query_asset( 'css', array( 'magnific-popup', 'tbs-options-page' ) );
		tbs_query_asset( 'js', array( 'jquery', 'magnific-popup', 'ace', 'tbs-options-page' ) );
		return $output;
	}

	public static function examples( $field, $config ) {
		$output = array();
		$examples = TBs_Data::examples();
		$preview = '<div style="display:none"><div id="tbs-examples-window"><div id="tbs-examples-preview"></div></div></div>';
		foreach ( $examples as $group ) {
			$items = array();
			if ( isset( $group['items'] ) ) foreach ( $group['items'] as $item ) {
					$code = ( isset( $item['code'] ) ) ? $item['code'] : plugins_url( 'inc/examples/' . $item['id'] . '.example', TBS_PLUGIN_FILE );
					$id = ( isset( $item['id'] ) ) ? $item['id'] : '';
					$items[] = '<div class="tbs-examples-item" data-code="' . $code . '" data-id="' . $id . '" data-mfp-src="#tbs-examples-window" style="visibility:hidden"><i class="fa fa-' . $item['icon'] . '"></i> ' . $item['name'] . '</div>';
				}
			$output[] = '<div class="tbs-examples-group tbs-clearfix"><h2 class="tbs-examples-group-title" style="visibility:hidden">' . $group['title'] . '</h2>' . implode( '', $items ) . '</div>';
		}
		tbs_query_asset( 'css', array( 'magnific-popup', 'animate', 'font-awesome', 'tbs-options-page' ) );
		tbs_query_asset( 'js', array( 'jquery', 'magnific-popup', 'tbs-options-page' ) );
		return '<div id="tbs-examples-screen">' . implode( '', $output ) . '</div>' . $preview;
	}

}
