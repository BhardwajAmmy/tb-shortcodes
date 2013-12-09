<?php
/**
 * Shortcode Generator
 */
class TBs_Generator_Views {

	/**
	 * Constructor
	 */
	function __construct() {}

	public static function text( $id, $field ) {
		$field = wp_parse_args( $field, array(
			'default' => ''
		) );
		$return = '<input type="text" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr" />';
		return $return;
	}

	public static function textarea( $id, $field ) {
		$field = wp_parse_args( $field, array(
			'rows'    => 3,
			'default' => ''
		) );
		$return = '<textarea name="' . $id . '" id="tbs-generator-attr-' . $id . '" rows="' . $field['rows'] . '" class="tbs-generator-attr">' . esc_textarea( $field['default'] ) . '</textarea>';
		return $return;
	}

	public static function select( $id, $field ) {
		// Multiple selects
		$multiple = ( isset( $field['multiple'] ) ) ? ' multiple' : '';
		$return = '<select name="' . $id . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr"' . $multiple . '>';
		// Create options
		foreach ( $field['values'] as $option_value => $option_title ) {
			// Is this option selected
			$selected = ( $field['default'] === $option_value ) ? ' selected="selected"' : '';
			// Create option
			$return .= '<option value="' . $option_value . '"' . $selected . '>' . $option_title . '</option>';
		}
		$return .= '</select>';
		return $return;
	}

	public static function bool( $id, $field ) {
		$return = '<span class="tbs-generator-switch tbs-generator-switch-' . $field['default'] . '"><span class="tbs-generator-yes">' . __( 'Yes', 'tbs' ) . '</span><span class="tbs-generator-no">' . __( 'No', 'tbs' ) . '</span></span><input type="hidden" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr" />';
		return $return;
	}

	public static function upload( $id, $field ) {
		$return = '<input type="text" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr tbs-generator-upload-value" /><div class="tbs-generator-field-actions"><a href="javascript:;" class="button tbs-generator-upload-button"><img src="' . admin_url( '/images/media-button.png' ) . '" alt="' . __( 'Media manager', 'tbs' ) . '" />' . __( 'Media manager', 'tbs' ) . '</a></div>';
		return $return;
	}

	public static function icon( $id, $field ) {
		$return = '<input type="text" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr tbs-generator-icon-picker-value" /><div class="tbs-generator-field-actions"><a href="javascript:;" class="button tbs-generator-upload-button tbs-generator-field-action"><img src="' . admin_url( '/images/media-button.png' ) . '" alt="' . __( 'Media manager', 'tbs' ) . '" />' . __( 'Media manager', 'tbs' ) . '</a> <a href="javascript:;" class="button tbs-generator-icon-picker-button tbs-generator-field-action"><img src="' . admin_url( '/images/media-button-other.gif' ) . '" alt="' . __( 'Icon picker', 'tbs' ) . '" />' . __( 'Icon picker', 'tbs' ) . '</a></div><div class="tbs-generator-icon-picker tbs-generator-clearfix"><input type="text" class="widefat" placeholder="' . __( 'Filter icons', 'tbs' ) . '" /></div>';
		return $return;
	}

	public static function color( $id, $field ) {
		$return = '<span class="tbs-generator-select-color"><span class="tbs-generator-select-color-wheel"></span><input type="text" name="' . $id . '" value="' . $field['default'] . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr tbs-generator-select-color-value" /></span>';
		return $return;
	}

	public static function gallery( $id, $field ) {
		$shult = shortcodes_ultimate();
		// Prepare galleries list
		$galleries = $shult->get_option( 'galleries' );
		$created = ( is_array( $galleries ) && count( $galleries ) ) ? true : false;
		$return = '<select name="' . $id . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr" data-loading="' . __( 'Please wait', 'tbs' ) . '">';
		// Check that galleries is set
		if ( $created ) // Create options
			foreach ( $galleries as $g_id => $gallery ) {
				// Is this option selected
				$selected = ( $g_id == 0 ) ? ' selected="selected"' : '';
				// Prepare title
				$gallery['name'] = ( $gallery['name'] == '' ) ? __( 'Untitled gallery', 'tbs' ) : stripslashes( $gallery['name'] );
				// Create option
				$return .= '<option value="' . ( $g_id + 1 ) . '"' . $selected . '>' . $gallery['name'] . '</option>';
			}
		// Galleries not created
		else
			$return .= '<option value="0" selected>' . __( 'Galleries not found', 'tbs' ) . '</option>';
		$return .= '</select><small class="description"><a href="' . $shult->admin_url . '#tab-3" target="_blank">' . __( 'Manage galleries', 'tbs' ) . '</a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="tbs-generator-reload-galleries">' . __( 'Reload galleries', 'tbs' ) . '</a></small>';
		return $return;
	}

	public static function number( $id, $field ) {
		$return = '<input type="number" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" min="' . $field['min'] . '" max="' . $field['max'] . '" step="' . $field['step'] . '" class="tbs-generator-attr" />';
		return $return;
	}

	public static function slider( $id, $field ) {
		$return = '<div class="tbs-generator-range-picker tbs-generator-clearfix"><input type="number" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" min="' . $field['min'] . '" max="' . $field['max'] . '" step="' . $field['step'] . '" class="tbs-generator-attr" /></div>';
		return $return;
	}

	public static function shadow( $id, $field ) {
		$defaults = ( $field['default'] === 'none' ) ? array ( '0', '0', '0', '#000000' ) : explode( ' ', str_replace( 'px', '', $field['default'] ) );
		$return = '<div class="tbs-generator-shadow-picker"><span class="tbs-generator-shadow-picker-field"><input type="number" min="-1000" max="1000" step="1" value="' . $defaults[0] . '" class="tbs-generator-sp-hoff" /><small>' . __( 'Horizontal offset', 'tbs' ) . ' (px)</small></span><span class="tbs-generator-shadow-picker-field"><input type="number" min="-1000" max="1000" step="1" value="' . $defaults[1] . '" class="tbs-generator-sp-voff" /><small>' . __( 'Vertical offset', 'tbs' ) . ' (px)</small></span><span class="tbs-generator-shadow-picker-field"><input type="number" min="-1000" max="1000" step="1" value="' . $defaults[2] . '" class="tbs-generator-sp-blur" /><small>' . __( 'Blur', 'tbs' ) . ' (px)</small></span><span class="tbs-generator-shadow-picker-field tbs-generator-shadow-picker-color"><span class="tbs-generator-shadow-picker-color-wheel"></span><input type="text" value="' . $defaults[3] . '" class="tbs-generator-shadow-picker-color-value" /><small>' . __( 'Color', 'tbs' ) . '</small></span><input type="hidden" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr" /></div>';
		return $return;
	}

	public static function border( $id, $field ) {
		$defaults = ( $field['default'] === 'none' ) ? array ( '0', 'solid', '#000000' ) : explode( ' ', str_replace( 'px', '', $field['default'] ) );
		$borders = TBs_Tools::select( array(
				'options' => TBs_Data::borders(),
				'class' => 'tbs-generator-bp-style',
				'selected' => $defaults[1]
			) );
		$return = '<div class="tbs-generator-border-picker"><span class="tbs-generator-border-picker-field"><input type="number" min="-1000" max="1000" step="1" value="' . $defaults[0] . '" class="tbs-generator-bp-width" /><small>' . __( 'Border width', 'tbs' ) . ' (px)</small></span><span class="tbs-generator-border-picker-field">' . $borders . '<small>' . __( 'Border style', 'tbs' ) . '</small></span><span class="tbs-generator-border-picker-field tbs-generator-border-picker-color"><span class="tbs-generator-border-picker-color-wheel"></span><input type="text" value="' . $defaults[2] . '" class="tbs-generator-border-picker-color-value" /><small>' . __( 'Border color', 'tbs' ) . '</small></span><input type="hidden" name="' . $id . '" value="' . esc_attr( $field['default'] ) . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr" /></div>';
		return $return;
	}

	public static function image_source( $id, $field ) {
		$field = wp_parse_args( $field, array(
				'default' => 'none'
			) );
		$sources = TBs_Tools::select( array(
				'options'  => array(
					'media'         => __( 'Media library', 'tbs' ),
					'posts: recent' => __( 'Recent posts', 'tbs' ),
					'category'      => __( 'Category', 'tbs' ),
					'taxonomy'      => __( 'Taxonomy', 'tbs' )
				),
				'selected' => '0',
				'none'     => __( 'Select images source', 'tbs' ) . '&hellip;',
				'class'    => 'tbs-generator-isp-sources'
			) );
		$categories = TBs_Tools::select( array(
				'options'  => TBs_Tools::get_terms( 'category' ),
				'multiple' => true,
				'size'     => 10,
				'class'    => 'tbs-generator-isp-categories'
			) );
		$taxonomies = TBs_Tools::select( array(
				'options'  => TBs_Tools::get_taxonomies(),
				'none'     => __( 'Select taxonomy', 'tbs' ) . '&hellip;',
				'selected' => '0',
				'class'    => 'tbs-generator-isp-taxonomies'
			) );
		$terms = TBs_Tools::select( array(
				'class'    => 'tbs-generator-isp-terms',
				'multiple' => true,
				'size'     => 10,
				'disabled' => true,
				'style'    => 'display:none'
			) );
		$return = '<div class="tbs-generator-isp">' . $sources . '<div class="tbs-generator-isp-source tbs-generator-isp-source-media"><div class="tbs-generator-clearfix"><a href="javascript:;" class="button button-primary tbs-generator-isp-add-media"><i class="fa fa-plus"></i>&nbsp;&nbsp;' . __( 'Add images', 'tbs' ) . '</a></div><div class="tbs-generator-isp-images tbs-generator-clearfix"><em class="description">' . __( 'Click the button above and select images.<br>You can select multimple images with Ctrl (Cmd) key', 'tbs' ) . '</em></div></div><div class="tbs-generator-isp-source tbs-generator-isp-source-category"><em class="description">' . __( 'Select categories to retrieve posts from.<br>You can select multiple categories with Ctrl (Cmd) key', 'tbs' ) . '</em>' . $categories . '</div><div class="tbs-generator-isp-source tbs-generator-isp-source-taxonomy"><em class="description">' . __( 'Select taxonomy and it\'s terms.<br>You can select multiple terms with Ctrl (Cmd) key', 'tbs' ) . '</em>' . $taxonomies . $terms . '</div><input type="hidden" name="' . $id . '" value="' . $field['default'] . '" id="tbs-generator-attr-' . $id . '" class="tbs-generator-attr" /></div>';
		return $return;
	}

}
