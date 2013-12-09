<?php
/**
 * Class for managing plugin data
 */
class TBs_Data {

	/**
	 * Constructor
	 */
	function __construct() {}

	/**
	 * Shortcode groups
	 */
	public static function groups() {
		return ( array ) apply_filters( 'tbs/data/groups', array(
				'all'     => __( 'All', 'tbs' ),
				'content' => __( 'Content', 'tbs' ),
				'box'     => __( 'Box', 'tbs' ),
				'media'   => __( 'Media', 'tbs' ),
				'gallery' => __( 'Gallery', 'tbs' ),
				'data'    => __( 'Data', 'tbs' ),
				'other'   => __( 'Other', 'tbs' )
			) );
	}

	public static function borders() {
		return ( array ) apply_filters( 'tbs/data/borders', array(
				'none'   => __( 'None', 'tbs' ),
				'solid'  => __( 'Solid', 'tbs' ),
				'dotted' => __( 'Dotted', 'tbs' ),
				'dashed' => __( 'Dashed', 'tbs' ),
				'double' => __( 'Double', 'tbs' ),
				'groove' => __( 'Groove', 'tbs' ),
				'ridge'  => __( 'Ridge', 'tbs' )
			) );
	}

	public static function icons() {
		return apply_filters( 'tbs/data/icons', array( 'glass', 'music', 'search', 'envelope-o', 'heart', 'star', 'star-o', 'user', 'film', 'th-large', 'th', 'th-list', 'check', 'times', 'search-plus', 'search-minus', 'power-off', 'signal', 'cog', 'trash-o', 'home', 'file-o', 'clock-o', 'road', 'download', 'arrow-circle-o-down', 'arrow-circle-o-up', 'inbox', 'play-circle-o', 'repeat', 'refresh', 'list-alt', 'lock', 'flag', 'headphones', 'volume-off', 'volume-down', 'volume-up', 'qrcode', 'barcode', 'tag', 'tags', 'book', 'bookmark', 'print', 'camera', 'font', 'bold', 'italic', 'text-height', 'text-width', 'align-left', 'align-center', 'align-right', 'align-justify', 'list', 'outdent', 'indent', 'video-camera', 'picture-o', 'pencil', 'map-marker', 'adjust', 'tint', 'pencil-square-o', 'share-square-o', 'check-square-o', 'arrows', 'step-backward', 'fast-backward', 'backward', 'play', 'pause', 'stop', 'forward', 'fast-forward', 'step-forward', 'eject', 'chevron-left', 'chevron-right', 'plus-circle', 'minus-circle', 'times-circle', 'check-circle', 'question-circle', 'info-circle', 'crosshairs', 'times-circle-o', 'check-circle-o', 'ban', 'arrow-left', 'arrow-right', 'arrow-up', 'arrow-down', 'share', 'expand', 'compress', 'plus', 'minus', 'asterisk', 'exclamation-circle', 'gift', 'leaf', 'fire', 'eye', 'eye-slash', 'exclamation-triangle', 'plane', 'calendar', 'random', 'comment', 'magnet', 'chevron-up', 'chevron-down', 'retweet', 'shopping-cart', 'folder', 'folder-open', 'arrows-v', 'arrows-h', 'bar-chart-o', 'twitter-square', 'facebook-square', 'camera-retro', 'key', 'cogs', 'comments', 'thumbs-o-up', 'thumbs-o-down', 'star-half', 'heart-o', 'sign-out', 'linkedin-square', 'thumb-tack', 'external-link', 'sign-in', 'trophy', 'github-square', 'upload', 'lemon-o', 'phone', 'square-o', 'bookmark-o', 'phone-square', 'twitter', 'facebook', 'github', 'unlock', 'credit-card', 'rss', 'hdd-o', 'bullhorn', 'bell', 'certificate', 'hand-o-right', 'hand-o-left', 'hand-o-up', 'hand-o-down', 'arrow-circle-left', 'arrow-circle-right', 'arrow-circle-up', 'arrow-circle-down', 'globe', 'wrench', 'tasks', 'filter', 'briefcase', 'arrows-alt', 'users', 'link', 'cloud', 'flask', 'scissors', 'files-o', 'paperclip', 'floppy-o', 'square', 'bars', 'list-ul', 'list-ol', 'strikethrough', 'underline', 'table', 'magic', 'truck', 'pinterest', 'pinterest-square', 'google-plus-square', 'google-plus', 'money', 'caret-down', 'caret-up', 'caret-left', 'caret-right', 'columns', 'sort', 'sort-asc', 'sort-desc', 'envelope', 'linkedin', 'undo', 'gavel', 'tachometer', 'comment-o', 'comments-o', 'bolt', 'sitemap', 'umbrella', 'clipboard', 'lightbulb-o', 'exchange', 'cloud-download', 'cloud-upload', 'user-md', 'stethoscope', 'suitcase', 'bell-o', 'coffee', 'cutlery', 'file-text-o', 'building-o', 'hospital-o', 'ambulance', 'medkit', 'fighter-jet', 'beer', 'h-square', 'plus-square', 'angle-double-left', 'angle-double-right', 'angle-double-up', 'angle-double-down', 'angle-left', 'angle-right', 'angle-up', 'angle-down', 'desktop', 'laptop', 'tablet', 'mobile', 'circle-o', 'quote-left', 'quote-right', 'spinner', 'circle', 'reply', 'github-alt', 'folder-o', 'folder-open-o', 'smile-o', 'frown-o', 'meh-o', 'gamepad', 'keyboard-o', 'flag-o', 'flag-checkered', 'terminal', 'code', 'reply-all', 'mail-reply-all', 'star-half-o', 'location-arrow', 'crop', 'code-fork', 'chain-broken', 'question', 'info', 'exclamation', 'superscript', 'subscript', 'eraser', 'puzzle-piece', 'microphone', 'microphone-slash', 'shield', 'calendar-o', 'fire-extinguisher', 'rocket', 'maxcdn', 'chevron-circle-left', 'chevron-circle-right', 'chevron-circle-up', 'chevron-circle-down', 'html5', 'css3', 'anchor', 'unlock-alt', 'bullseye', 'ellipsis-h', 'ellipsis-v', 'rss-square', 'play-circle', 'ticket', 'minus-square', 'minus-square-o', 'level-up', 'level-down', 'check-square', 'pencil-square', 'external-link-square', 'share-square', 'compass', 'caret-square-o-down', 'caret-square-o-up', 'caret-square-o-right', 'eur', 'gbp', 'usd', 'inr', 'jpy', 'rub', 'krw', 'btc', 'file', 'file-text', 'sort-alpha-asc', 'sort-alpha-desc', 'sort-amount-asc', 'sort-amount-desc', 'sort-numeric-asc', 'sort-numeric-desc', 'thumbs-up', 'thumbs-down', 'youtube-square', 'youtube', 'xing', 'xing-square', 'youtube-play', 'dropbox', 'stack-overflow', 'instagram', 'flickr', 'adn', 'bitbucket', 'bitbucket-square', 'tumblr', 'tumblr-square', 'long-arrow-down', 'long-arrow-up', 'long-arrow-left', 'long-arrow-right', 'apple', 'windows', 'android', 'linux', 'dribbble', 'skype', 'foursquare', 'trello', 'female', 'male', 'gittip', 'sun-o', 'moon-o', 'archive', 'bug', 'vk', 'weibo', 'renren', 'pagelines', 'stack-exchange', 'arrow-circle-o-right', 'arrow-circle-o-left', 'caret-square-o-left', 'dot-circle-o', 'wheelchair', 'vimeo-square', 'try', 'plus-square-o' ) );
	}

	/**
	 * Shortcode groups
	 */
	public static function examples() {
		return ( array ) apply_filters( 'tbs/data/examples', array(
				'basic' => array(
					'title' => __( 'Basic examples', 'tbs' ),
					'items' => array(
						array(
							'name' => __( 'Accordions, spoilers, different styles, anchors', 'tbs' ),
							'id'   => 'spoilers',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/spoilers.example',
							'icon' => 'tasks'
						),
						array(
							'name' => __( 'Tabs, vertical tabs, tab anchors', 'tbs' ),
							'id'   => 'tabs',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/tabs.example',
							'icon' => 'folder'
						),
						array(
							'name' => __( 'Column layouts', 'tbs' ),
							'id'   => 'columns',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/columns.example',
							'icon' => 'th-large'
						),
						array(
							'name' => __( 'Media elements, YouTube, Vimeo, Screenr and self-hosted videos, audio player', 'tbs' ),
							'id'   => 'media',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/media.example',
							'icon' => 'play-circle'
						),
						array(
							'name' => __( 'Unlimited buttons', 'tbs' ),
							'id'   => 'buttons',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/buttons.example',
							'icon' => 'heart'
						),
						array(
							'name' => __( 'Animations', 'tbs' ),
							'id'   => 'animations',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/animations.example',
							'icon' => 'bolt'
						),
					)
				),
				'advanced' => array(
					'title' => __( 'Advanced examples', 'tbs' ),
					'items' => array(
						array(
							'name' => __( 'Interacting with posts shortcode', 'tbs' ),
							'id' => 'posts',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/posts.example',
							'icon' => 'list'
						),
						array(
							'name' => __( 'Nested shortcodes, shortcodes inside of attributes', 'tbs' ),
							'id' => 'nested',
							'code' => plugin_dir_path( TBS_PLUGIN_FILE ) . '/inc/examples/nested.example',
							'icon' => 'indent'
						),
					)
				),
			) );
	}

	/**
	 * Shortcodes
	 */
	public static function shortcodes( $shortcode = false ) {
		$shortcodes = apply_filters( 'tbs/data/shortcodes', array(
				// heading
				'heading' => array(
					'name' => __( 'Heading', 'tbs' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' ),
							),
							'default' => 'default',
							'name' => __( 'Style', 'tbs' ),
							'desc' => sprintf( '%s. <a href="http://www.techbooth.inskins/" target="_blank">%s</a>', __( 'Choose style for this heading', 'tbs' ), __( 'Install additional styles', 'tbs' ) )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 7,
							'max' => 48,
							'step' => 1,
							'default' => 13,
							'name' => __( 'Size', 'tbs' ),
							'desc' => __( 'Select heading size (pixels)', 'tbs' )
						),
						'align' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'tbs' ),
								'center' => __( 'Center', 'tbs' ),
								'right' => __( 'Right', 'tbs' )
							),
							'default' => 'center',
							'name' => __( 'Align', 'tbs' ),
							'desc' => __( 'Heading text alignment', 'tbs' )
						),
						'margin' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 200,
							'step' => 10,
							'default' => 20,
							'name' => __( 'Margin', 'tbs' ),
							'desc' => __( 'Bottom margin (pixels)', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Heading text', 'tbs' ),
					'desc' => __( 'Styled heading', 'tbs' ),
					'icon' => 'h-square'
				),
				// tabs
				'tabs' => array(
					'name' => __( 'Tabs', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'tbs' ),
							'desc' => sprintf( '%s. <a href="http://www.techbooth.inskins/" target="_blank">%s</a>', __( 'Choose style for this tabs', 'tbs' ), __( 'Install additional styles', 'tbs' ) )
						),
						'active' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 100,
							'step' => 1,
							'default' => 1,
							'name' => __( 'Active tab', 'tbs' ),
							'desc' => __( 'Select which tab is open by default', 'tbs' )
						),
						'vertical' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Vertical', 'tbs' ),
							'desc' => __( 'Show tabs vertically', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( "[%prefix_tab title=\"Title 1\"]Content 1[/%prefix_tab]\n[%prefix_tab title=\"Title 2\"]Content 2[/%prefix_tab]\n[%prefix_tab title=\"Title 3\"]Content 3[/%prefix_tab]", 'tbs' ),
					'desc' => __( 'Tabs container', 'tbs' ),
					'icon' => 'list-alt'
				),
				// tab
				'tab' => array(
					'name' => __( 'Tab', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'title' => array(
							'default' => __( 'Tab name', 'tbs' ),
							'name' => __( 'Title', 'tbs' ),
							'desc' => __( 'Enter tab name', 'tbs' )
						),
						'disabled' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Disabled', 'tbs' ),
							'desc' => __( 'Is this tab disabled', 'tbs' )
						),
						'anchor' => array(
							'default' => '',
							'name' => __( 'Anchor', 'tbs' ),
							'desc' => __( 'You can use unique anchor for this tab to access it with hash in page url. For example: type here <b%value>Hello</b> and then use url like http://example.com/page-url#Hello. This tab will be activated and scrolled in', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Tab content', 'tbs' ),
					'desc' => __( 'Single tab', 'tbs' ),
					'icon' => 'list-alt'
				),
				// spoiler
				'spoiler' => array(
					'name' => __( 'Spoiler', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'title' => array(
							'default' => __( 'Spoiler title', 'tbs' ),
							'name' => __( 'Title', 'tbs' ), 'desc' => __( 'Text in spoiler title', 'tbs' )
						),
						'open' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Open', 'tbs' ),
							'desc' => __( 'Is spoiler content visible by default', 'tbs' )
						),
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' ),
								'fancy' => __( 'Fancy', 'tbs' ),
								'simple' => __( 'Simple', 'tbs' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'tbs' ),
							'desc' => sprintf( '%s. <a href="http://www.techbooth.inskins/" target="_blank">%s</a>', __( 'Choose style for this spoiler', 'tbs' ), __( 'Install additional styles', 'tbs' ) )
						),
						'icon' => array(
							'type' => 'select',
							'values' => array(
								'plus'           => __( 'Plus', 'tbs' ),
								'plus-circle'    => __( 'Plus circle', 'tbs' ),
								'plus-square-1'  => __( 'Plus square 1', 'tbs' ),
								'plus-square-2'  => __( 'Plus square 2', 'tbs' ),
								'arrow'          => __( 'Arrow', 'tbs' ),
								'arrow-circle-1' => __( 'Arrow circle 1', 'tbs' ),
								'arrow-circle-2' => __( 'Arrow circle 2', 'tbs' ),
								'chevron'        => __( 'Chevron', 'tbs' ),
								'chevron-circle' => __( 'Chevron circle', 'tbs' ),
								'caret'          => __( 'Caret', 'tbs' ),
								'caret-square'   => __( 'Caret square', 'tbs' ),
								'folder-1'       => __( 'Folder 1', 'tbs' ),
								'folder-2'       => __( 'Folder 2', 'tbs' )
							),
							'default' => 'plus',
							'name' => __( 'Icon', 'tbs' ),
							'desc' => __( 'Icons for spoiler', 'tbs' )
						),
						'anchor' => array(
							'default' => '',
							'name' => __( 'Anchor', 'tbs' ),
							'desc' => __( 'You can use unique anchor for this spoiler to access it with hash in page url. For example: type here <b%value>Hello</b> and then use url like http://example.com/page-url#Hello. This spoiler will be open and scrolled in', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Hidden content', 'tbs' ),
					'desc' => __( 'Spoiler with hidden content', 'tbs' ),
					'icon' => 'list-ul'
				),
				// accordion
				'accordion' => array(
					'name' => __( 'Accordion', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( "[%prefix_spoiler]Content[/%prefix_spoiler]\n[%prefix_spoiler]Content[/%prefix_spoiler]\n[%prefix_spoiler]Content[/%prefix_spoiler]", 'tbs' ),
					'desc' => __( 'Accordion with spoilers', 'tbs' ),
					'icon' => 'list'
				),
				// divider
				'divider' => array(
					'name' => __( 'Divider', 'tbs' ),
					'type' => 'single',
					'group' => 'content',
					'atts' => array(
						'top' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show TOP link', 'tbs' ),
							'desc' => __( 'Show link to top of the page or not', 'tbs' )
						),
						'text' => array(
							'values' => array( ),
							'default' => __( 'Go to top', 'tbs' ),
							'name' => __( 'Link text', 'tbs' ), 'desc' => __( 'Text for the GO TOP link', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Content divider with optional TOP link', 'tbs' ),
					'icon' => 'ellipsis-h'
				),
				// spacer
				'spacer' => array(
					'name' => __( 'Spacer', 'tbs' ),
					'type' => 'single',
					'group' => 'content other',
					'atts' => array(
						'size' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 800,
							'step' => 10,
							'default' => 20,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Height of the spacer in pixels', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Empty space with adjustable height', 'tbs' ),
					'icon' => 'arrows-v'
				),
				// highlight
				'highlight' => array(
					'name' => __( 'Highlight', 'tbs' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'background' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#DDFF99',
							'name' => __( 'Background', 'tbs' ),
							'desc' => __( 'Highlighted text background color', 'tbs' )
						),
						'color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#000000',
							'name' => __( 'Text color', 'tbs' ), 'desc' => __( 'Highlighted text color', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Highlighted text', 'tbs' ),
					'desc' => __( 'Highlighted text', 'tbs' ),
					'icon' => 'pencil'
				),
				// label
				'label' => array(
					'name' => __( 'Label', 'tbs' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'type' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' ),
								'success' => __( 'Success', 'tbs' ),
								'warning' => __( 'Warning', 'tbs' ),
								'important' => __( 'Important', 'tbs' ),
								'black' => __( 'Black', 'tbs' ),
								'info' => __( 'Info', 'tbs' )
							),
							'default' => 'default',
							'name' => __( 'Type', 'tbs' ),
							'desc' => __( 'Style of the label', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Label', 'tbs' ),
					'desc' => __( 'Styled label', 'tbs' ),
					'icon' => 'tag'
				),
				// quote
				'quote' => array(
					'name' => __( 'Quote', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'tbs' ),
							'desc' => sprintf( '%s. <a href="http://www.techbooth.inskins/" target="_blank">%s</a>', __( 'Choose style for this quote', 'tbs' ), __( 'Install additional styles', 'tbs' ) )
						),
						'cite' => array(
							'default' => '',
							'name' => __( 'Cite', 'tbs' ),
							'desc' => __( 'Quote author name', 'tbs' )
						),
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Cite url', 'tbs' ),
							'desc' => __( 'Url of the quote author. Leave empty to disable link', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Quote', 'tbs' ),
					'desc' => __( 'Blockquote alternative', 'tbs' ),
					'icon' => 'quote-right'
				),
				// pullquote
				'pullquote' => array(
					'name' => __( 'Pullquote', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'align' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'tbs' ),
								'right' => __( 'Right', 'tbs' )
							),
							'default' => 'left',
							'name' => __( 'Align', 'tbs' ), 'desc' => __( 'Pullquote alignment (float)', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Pullquote', 'tbs' ),
					'desc' => __( 'Pullquote', 'tbs' ),
					'icon' => 'quote-left'
				),
				// dropcap
				'dropcap' => array(
					'name' => __( 'Dropcap', 'tbs' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' ),
								'flat' => __( 'Flat', 'tbs' ),
								'light' => __( 'Light', 'tbs' ),
								'simple' => __( 'Simple', 'tbs' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'tbs' ), 'desc' => __( 'Dropcap style preset', 'tbs' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 5,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Size', 'tbs' ),
							'desc' => __( 'Choose dropcap size', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'D', 'tbs' ),
					'desc' => __( 'Dropcap', 'tbs' ),
					'icon' => 'bold'
				),
				// frame
				'frame' => array(
					'name' => __( 'Frame', 'tbs' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'align' => array(
							'type' => 'select',
							'values' => array(
								'left' => __( 'Left', 'tbs' ),
								'center' => __( 'Center', 'tbs' ),
								'right' => __( 'Right', 'tbs' )
							),
							'default' => 'left',
							'name' => __( 'Align', 'tbs' ),
							'desc' => __( 'Frame alignment', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => '<img src="http://lorempixel.com/g/400/200/" />',
					'desc' => __( 'Styled image frame', 'tbs' ),
					'icon' => 'picture-o'
				),
				// row
				'row' => array(
					'name' => __( 'Row', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( "[%prefix_column size=\"1/3\"]Content[/%prefix_column]\n[%prefix_column size=\"1/3\"]Content[/%prefix_column]\n[%prefix_column size=\"1/3\"]Content[/%prefix_column]", 'tbs' ),
					'desc' => __( 'Row for flexible columns', 'tbs' ),
					'icon' => 'columns'
				),
				// column
				'column' => array(
					'name' => __( 'Column', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'size' => array(
							'type' => 'select',
							'values' => array(
								'1/1' => __( 'Full width', 'tbs' ),
								'1/2' => __( 'One half', 'tbs' ),
								'1/3' => __( 'One third', 'tbs' ),
								'2/3' => __( 'Two third', 'tbs' ),
								'1/4' => __( 'One fourth', 'tbs' ),
								'3/4' => __( 'Three fourth', 'tbs' ),
								'1/5' => __( 'One fifth', 'tbs' ),
								'2/5' => __( 'Two fifth', 'tbs' ),
								'3/5' => __( 'Three fifth', 'tbs' ),
								'4/5' => __( 'Four fifth', 'tbs' ),
								'1/6' => __( 'One sixth', 'tbs' ),
								'5/6' => __( 'Five sixth', 'tbs' )
							),
							'default' => '1/2',
							'name' => __( 'Size', 'tbs' ),
							'desc' => __( 'Select column width. This width will be calculated depend page width', 'tbs' )
						),
						'center' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Centered', 'tbs' ),
							'desc' => __( 'Is this column centered on the page', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Column content', 'tbs' ),
					'desc' => __( 'Flexible and responsive columns', 'tbs' ),
					'icon' => 'columns'
				),
				// list
				'list' => array(
					'name' => __( 'List', 'tbs' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'tbs' ),
							'desc' => __( 'You can upload custom icon for this list or pick a built-in icon', 'tbs' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#333333',
							'name' => __( 'Icon color', 'tbs' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( "<ul>\n<li>List item</li>\n<li>List item</li>\n<li>List item</li>\n</ul>", 'tbs' ),
					'desc' => __( 'Styled unordered list', 'tbs' ),
					'icon' => 'list-ol'
				),
				// button
				'button' => array(
					'name' => __( 'Button', 'tbs' ),
					'type' => 'wrap',
					'group' => 'content',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => get_option( 'home' ),
							'name' => __( 'Link', 'tbs' ),
							'desc' => __( 'Button link', 'tbs' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same tab', 'tbs' ),
								'blank' => __( 'New tab', 'tbs' )
							),
							'default' => 'self',
							'name' => __( 'Target', 'tbs' ),
							'desc' => __( 'Button link target', 'tbs' )
						),
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' ),
								'flat' => __( 'Flat', 'tbs' ),
								'soft' => __( 'Soft', 'tbs' ),
								'glass' => __( 'Glass', 'tbs' ),
								'bubbles' => __( 'Bubbles', 'tbs' ),
								'noise' => __( 'Noise', 'tbs' ),
								'stroked' => __( 'Stroked', 'tbs' ),
								'3d' => __( '3D', 'tbs' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'tbs' ), 'desc' => __( 'Button background style preset', 'tbs' )
						),
						'background' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#2D89EF',
							'name' => __( 'Background', 'tbs' ), 'desc' => __( 'Button background color', 'tbs' )
						),
						'color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#FFFFFF',
							'name' => __( 'Text color', 'tbs' ),
							'desc' => __( 'Button text color', 'tbs' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Size', 'tbs' ),
							'desc' => __( 'Button size', 'tbs' )
						),
						'wide' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Fluid', 'tbs' ), 'desc' => __( 'Fluid buttons has 100% width', 'tbs' )
						),
						'center' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Centered', 'tbs' ), 'desc' => __( 'Is button centered on the page', 'tbs' )
						),
						'radius' => array(
							'type' => 'select',
							'values' => array(
								'auto' => __( 'Auto', 'tbs' ),
								'round' => __( 'Round', 'tbs' ),
								'0' => __( 'Square', 'tbs' ),
								'5' => '5px',
								'10' => '10px',
								'20' => '20px'
							),
							'default' => 'auto',
							'name' => __( 'Radius', 'tbs' ),
							'desc' => __( 'Radius of button corners. Auto-radius calculation based on button size', 'tbs' )
						),
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'tbs' ),
							'desc' => __( 'You can upload custom icon for this button or pick a built-in icon', 'tbs' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#FFFFFF',
							'name' => __( 'Icon color', 'tbs' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'tbs' )
						),
						'text_shadow' => array(
							'type' => 'shadow',
							'default' => 'none',
							'name' => __( 'Text shadow', 'tbs' ),
							'desc' => __( 'Button text shadow', 'tbs' )
						),
						'desc' => array(
							'default' => '',
							'name' => __( 'Description', 'tbs' ),
							'desc' => __( 'Small description under button text. This option is incompatible with icon.', 'tbs' )
						),
						'onclick' => array(
							'default' => '',
							'name' => __( 'onClick', 'tbs' ),
							'desc' => __( 'Advanced JavaScript code for onClick action', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Button text', 'tbs' ),
					'desc' => __( 'Styled button', 'tbs' ),
					'icon' => 'heart'
				),
				// service
				'service' => array(
					'name' => __( 'Service', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'title' => array(
							'values' => array( ),
							'default' => __( 'Service title', 'tbs' ),
							'name' => __( 'Title', 'tbs' ),
							'desc' => __( 'Service name', 'tbs' )
						),
						'icon' => array(
							'type' => 'icon',
							'default' => '',
							'name' => __( 'Icon', 'tbs' ),
							'desc' => __( 'You can upload custom icon for this box', 'tbs' )
						),
						'icon_color' => array(
							'type' => 'color',
							'default' => '#333333',
							'name' => __( 'Icon color', 'tbs' ),
							'desc' => __( 'This color will be applied to the selected icon. Does not works with uploaded icons', 'tbs' )
						),
						'size' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 128,
							'step' => 2,
							'default' => 32,
							'name' => __( 'Icon size', 'tbs' ),
							'desc' => __( 'Size of the uploaded icon in pixels', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Service description', 'tbs' ),
					'desc' => __( 'Service box with title', 'tbs' ),
					'icon' => 'check-square-o'
				),
				// box
				'box' => array(
					'name' => __( 'Box', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'title' => array(
							'values' => array( ),
							'default' => __( 'Box title', 'tbs' ),
							'name' => __( 'Title', 'tbs' ), 'desc' => __( 'Text for the box title', 'tbs' )
						),
						'style' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' ),
								'soft' => __( 'Soft', 'tbs' ),
								'glass' => __( 'Glass', 'tbs' ),
								'bubbles' => __( 'Bubbles', 'tbs' ),
								'noise' => __( 'Noise', 'tbs' )
							),
							'default' => 'default',
							'name' => __( 'Style', 'tbs' ),
							'desc' => __( 'Box style preset', 'tbs' )
						),
						'box_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#333333',
							'name' => __( 'Color', 'tbs' ),
							'desc' => __( 'Color for the box title and borders', 'tbs' )
						),
						'title_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#FFFFFF',
							'name' => __( 'Title text color', 'tbs' ), 'desc' => __( 'Color for the box title text', 'tbs' )
						),
						'radius' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Radius', 'tbs' ),
							'desc' => __( 'Box corners radius', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Box content', 'tbs' ),
					'desc' => __( 'Colored box with caption', 'tbs' ),
					'icon' => 'list-alt'
				),
				// note
				'note' => array(
					'name' => __( 'Note', 'tbs' ),
					'type' => 'wrap',
					'group' => 'box',
					'atts' => array(
						'note_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#FFFF66',
							'name' => __( 'Background', 'tbs' ), 'desc' => __( 'Note background color', 'tbs' )
						),
						'text_color' => array(
							'type' => 'color',
							'values' => array( ),
							'default' => '#333333',
							'name' => __( 'Text color', 'tbs' ),
							'desc' => __( 'Note text color', 'tbs' )
						),
						'radius' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Radius', 'tbs' ), 'desc' => __( 'Note corners radius', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Note text', 'tbs' ),
					'desc' => __( 'Colored box', 'tbs' ),
					'icon' => 'list-alt'
				),
				// lightbox
				'lightbox' => array(
					'name' => __( 'Lightbox', 'tbs' ),
					'type' => 'wrap',
					'group' => 'gallery',
					'atts' => array(
						'type' => array(
							'type' => 'select',
							'values' => array(
								'iframe' => __( 'Iframe', 'tbs' ),
								'image' => __( 'Image', 'tbs' ),
								'inline' => __( 'Inline (html content)', 'tbs' )
							),
							'default' => 'iframe',
							'name' => __( 'Content type', 'tbs' ),
							'desc' => __( 'Select type of the lightbox window content', 'tbs' )
						),
						'src' => array(
							'default' => '',
							'name' => __( 'Content source', 'tbs' ),
							'desc' => __( 'Insert here URL or CSS selector. Use URL for Iframe and Image content types. Use CSS selector for Inline content type.<br />Example values:<br /><b%value>http://www.youtube.com/watch?v=XXXXXXXXX</b> - YouTube video (iframe)<br /><b%value>http://example.com/wp-content/uploads/image.jpg</b> - uploaded image (image)<br /><b%value>http://example.com/</b> - any web page (iframe)<br /><b%value>#contact-form</b> - any HTML content (inline)', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( '[%prefix_button] Click Here to Watch the Video [/%prefix_button]', 'tbs' ),
					'desc' => __( 'Lightbox window with custom content', 'tbs' ),
					'icon' => 'external-link'
				),
				// tooltip
				'tooltip' => array(
					'name' => __( 'Tooltip', 'tbs' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'style' => array(
							'type' => 'select',
							'values' => array(
								'light' => __( 'Basic: Light', 'tbs' ),
								'dark' => __( 'Basic: Dark', 'tbs' ),
								'yellow' => __( 'Basic: Yellow', 'tbs' ),
								'green' => __( 'Basic: Green', 'tbs' ),
								'red' => __( 'Basic: Red', 'tbs' ),
								'blue' => __( 'Basic: Blue', 'tbs' ),
								'youtube' => __( 'Youtube', 'tbs' ),
								'tipsy' => __( 'Tipsy', 'tbs' ),
								'bootstrap' => __( 'Bootstrap', 'tbs' ),
								'jtools' => __( 'jTools', 'tbs' ),
								'tipped' => __( 'Tipped', 'tbs' ),
								'cluetip' => __( 'Cluetip', 'tbs' ),
							),
							'default' => 'yellow',
							'name' => __( 'Style', 'tbs' ),
							'desc' => __( 'Tooltip window style', 'tbs' )
						),
						'position' => array(
							'type' => 'select',
							'values' => array(
								'north' => __( 'Top', 'tbs' ),
								'south' => __( 'Bottom', 'tbs' ),
								'west' => __( 'Left', 'tbs' ),
								'east' => __( 'Right', 'tbs' )
							),
							'default' => 'top',
							'name' => __( 'Position', 'tbs' ),
							'desc' => __( 'Tooltip position', 'tbs' )
						),
						'shadow' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Shadow', 'tbs' ),
							'desc' => __( 'Add shadow to tooltip. This option is only works with basic styes, e.g. blue, green etc.', 'tbs' )
						),
						'rounded' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Rounded corners', 'tbs' ),
							'desc' => __( 'Use rounded for tooltip. This option is only works with basic styes, e.g. blue, green etc.', 'tbs' )
						),
						'size' => array(
							'type' => 'select',
							'values' => array(
								'default' => __( 'Default', 'tbs' ),
								'1' => 1,
								'2' => 2,
								'3' => 3,
								'4' => 4,
								'5' => 5,
								'6' => 6,
							),
							'default' => 'default',
							'name' => __( 'Font size', 'tbs' ),
							'desc' => __( 'Tooltip font size', 'tbs' )
						),
						'title' => array(
							'default' => '',
							'name' => __( 'Tooltip title', 'tbs' ),
							'desc' => __( 'Enter title for tooltip window. Leave this field empty to hide the title', 'tbs' )
						),
						'content' => array(
							'default' => __( 'Tooltip text', 'tbs' ),
							'name' => __( 'Tooltip content', 'tbs' ),
							'desc' => __( 'Enter tooltip content here', 'tbs' )
						),
						'behavior' => array(
							'type' => 'select',
							'values' => array(
								'hover' => __( 'Show and hide on mouse hover', 'tbs' ),
								'click' => __( 'Show and hide by mouse click', 'tbs' ),
								'always' => __( 'Always visible', 'tbs' )
							),
							'default' => 'hover',
							'name' => __( 'Behavior', 'tbs' ),
							'desc' => __( 'Select tooltip behavior', 'tbs' )
						),
						'close' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Close button', 'tbs' ),
							'desc' => __( 'Show close button', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( '[%prefix_button] Hover me to open tooltip [/%prefix_button]', 'tbs' ),
					'desc' => __( 'Tooltip window with custom content', 'tbs' ),
					'icon' => 'comment-o'
				),
				// private
				'private' => array(
					'name' => __( 'Private', 'tbs' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Private note text', 'tbs' ),
					'desc' => __( 'Private note for post authors', 'tbs' ),
					'icon' => 'lock'
				),
				// youtube
				'youtube' => array(
					'name' => __( 'YouTube', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'tbs' ),
							'desc' => __( 'Url of YouTube page with video. Ex: http://youtube.com/watch?v=XXXXXX', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Player width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Player height', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'tbs' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'tbs' ),
							'desc' => __( 'Play video automatically when page is loaded', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'YouTube video', 'tbs' ),
					'icon' => 'youtube-play'
				),
				// youtube_advanced
				'youtube_advanced' => array(
					'name' => __( 'YouTube Advanced', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'tbs' ),
							'desc' => __( 'Url of YouTube page with video. Ex: http://youtube.com/watch?v=XXXXXX', 'tbs' )
						),
						'playlist' => array(
							'default' => '',
							'name' => __( 'Playlist', 'tbs' ),
							'desc' => __( 'Value is a comma-separated list of video IDs to play. If you specify a value, the first video that plays will be the VIDEO_ID specified in the URL path, and the videos specified in the playlist parameter will play thereafter', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Player width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Player height', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'tbs' )
						),
						'controls' => array(
							'type' => 'select',
							'values' => array(
								'no' => __( '0 - Hide controls', 'tbs' ),
								'yes' => __( '1 - Show controls', 'tbs' ),
								'alt' => __( '2 - Show controls when playback is started', 'tbs' )
							),
							'default' => 'yes',
							'name' => __( 'Controls', 'tbs' ),
							'desc' => __( 'This parameter indicates whether the video player controls will display', 'tbs' )
						),
						'autohide' => array(
							'type' => 'select',
							'values' => array(
								'no' => __( '0 - Do not hide controls', 'tbs' ),
								'yes' => __( '1 - Hide all controls on mouse out', 'tbs' ),
								'alt' => __( '2 - Hide progress bar on mouse out', 'tbs' )
							),
							'default' => 'alt',
							'name' => __( 'Autohide', 'tbs' ),
							'desc' => __( 'This parameter indicates whether the video controls will automatically hide after a video begins playing', 'tbs' )
						),
						'showinfo' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show title bar', 'tbs' ),
							'desc' => __( 'If you set the parameter value to NO, then the player will not display information like the video title and uploader before the video starts playing.', 'tbs' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'tbs' ),
							'desc' => __( 'Play video automatically when page is loaded', 'tbs' )
						),
						'loop' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Loop', 'tbs' ),
							'desc' => __( 'Setting of YES will cause the player to play the initial video again and again', 'tbs' )
						),
						'rel' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Related videos', 'tbs' ),
							'desc' => __( 'This parameter indicates whether the player should show related videos when playback of the initial video ends', 'tbs' )
						),
						'fs' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show full-screen button', 'tbs' ),
							'desc' => __( 'Setting this parameter to NO prevents the fullscreen button from displaying', 'tbs' )
						),
						'modestbranding' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => 'modestbranding',
							'desc' => __( 'This parameter lets you use a YouTube player that does not show a YouTube logo. Set the parameter value to YES to prevent the YouTube logo from displaying in the control bar. Note that a small YouTube text label will still display in the upper-right corner of a paused video when the user\'s mouse pointer hovers over the player', 'tbs' )
						),
						'theme' => array(
							'type' => 'select',
							'values' => array(
								'dark' => __( 'Dark theme', 'tbs' ),
								'light' => __( 'Light theme', 'tbs' )
							),
							'default' => 'dark',
							'name' => __( 'Theme', 'tbs' ),
							'desc' => __( 'This parameter indicates whether the embedded player will display player controls (like a play button or volume control) within a dark or light control bar', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'YouTube video player with advanced settings', 'tbs' ),
					'icon' => 'youtube-play'
				),
				// vimeo
				'vimeo' => array(
					'name' => __( 'Vimeo', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'tbs' ), 'desc' => __( 'Url of Vimeo page with video', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Player width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Player height', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'tbs' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'tbs' ),
							'desc' => __( 'Play video automatically when page is loaded', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Vimeo video', 'tbs' ),
					'icon' => 'youtube-play'
				),
				// screenr
				'screenr' => array(
					'name' => __( 'Screenr', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'default' => '',
							'name' => __( 'Url', 'tbs' ), 'desc' => __( 'Url of Screenr page with video', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Player width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Player height', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make player responsive', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Screenr video', 'tbs' ),
					'icon' => 'youtube-play'
				),
				// audio
				'audio' => array(
					'name' => __( 'Audio', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'File', 'tbs' ),
							'desc' => __( 'Audio file url. Supported formats: mp3, ogg', 'tbs' )
						),
						'width' => array(
							'values' => array(),
							'default' => '100%',
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Player width. You can specify width in percents and player will be responsive. Example values: <b%value>200px</b>, <b%value>100&#37;</b>', 'tbs' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'tbs' ),
							'desc' => __( 'Play file automatically when page is loaded', 'tbs' )
						),
						'loop' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Loop', 'tbs' ),
							'desc' => __( 'Repeat when playback is ended', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Custom audio player', 'tbs' ),
					'icon' => 'play-circle'
				),
				// video
				'video' => array(
					'name' => __( 'Video', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'File', 'tbs' ),
							'desc' => __( 'Url to mp4/flv video-file', 'tbs' )
						),
						'poster' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Poster', 'tbs' ),
							'desc' => __( 'Url to poster image, that will be shown before playback', 'tbs' )
						),
						'title' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Title', 'tbs' ),
							'desc' => __( 'Player title', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Player width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 300,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Player height', 'tbs' )
						),
						'controls' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Controls', 'tbs' ),
							'desc' => __( 'Show player controls (play/pause etc.) or not', 'tbs' )
						),
						'autoplay' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Autoplay', 'tbs' ),
							'desc' => __( 'Play file automatically when page is loaded', 'tbs' )
						),
						'loop' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Loop', 'tbs' ),
							'desc' => __( 'Repeat when playback is ended', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Custom video player', 'tbs' ),
					'icon' => 'play-circle'
				),
				// table
				'table' => array(
					'name' => __( 'Table', 'tbs' ),
					'type' => 'mixed',
					'group' => 'content',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'CSV file', 'tbs' ),
							'desc' => __( 'Upload CSV file if you want to create HTML-table from file', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( "<table>\n<tr>\n\t<td>Table</td>\n\t<td>Table</td>\n</tr>\n<tr>\n\t<td>Table</td>\n\t<td>Table</td>\n</tr>\n</table>", 'tbs' ),
					'desc' => __( 'Styled table from HTML or CSV file', 'tbs' ),
					'icon' => 'table'
				),
				// permalink
				'permalink' => array(
					'name' => __( 'Permalink', 'tbs' ),
					'type' => 'mixed',
					'group' => 'content other',
					'atts' => array(
						'id' => array(
							'values' => array( ), 'default' => 1,
							'name' => __( 'ID', 'tbs' ),
							'desc' => __( 'Post or page ID', 'tbs' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same tab', 'tbs' ),
								'blank' => __( 'New tab', 'tbs' )
							),
							'default' => 'self',
							'name' => __( 'Target', 'tbs' ),
							'desc' => __( 'Link target. blank - link will be opened in new window/tab', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => '',
					'desc' => __( 'Permalink to specified post/page', 'tbs' ),
					'icon' => 'link'
				),
				// members
				'members' => array(
					'name' => __( 'Members', 'tbs' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'message' => array(
							'default' => __( 'This content is for registered users only. Please %login%.', 'tbs' ),
							'name' => __( 'Message', 'tbs' ), 'desc' => __( 'Message for not logged users', 'tbs' )
						),
						'color' => array(
							'type' => 'color',
							'default' => '#ffcc00',
							'name' => __( 'Box color', 'tbs' ), 'desc' => __( 'This color will applied only to box for not logged users', 'tbs' )
						),
						'login_text' => array(
							'default' => __( 'login', 'tbs' ),
							'name' => __( 'Login link text', 'tbs' ), 'desc' => __( 'Text for the login link', 'tbs' )
						),
						'login_url' => array(
							'default' => wp_login_url(),
							'name' => __( 'Login link url', 'tbs' ), 'desc' => __( 'Login link url', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Content for logged members', 'tbs' ),
					'desc' => __( 'Content for logged in members only', 'tbs' ),
					'icon' => 'lock'
				),
				// guests
				'guests' => array(
					'name' => __( 'Guests', 'tbs' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Content for guests', 'tbs' ),
					'desc' => __( 'Content for guests only', 'tbs' ),
					'icon' => 'user'
				),
				// feed
				'feed' => array(
					'name' => __( 'RSS Feed', 'tbs' ),
					'type' => 'single',
					'group' => 'content other',
					'atts' => array(
						'url' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Url', 'tbs' ),
							'desc' => __( 'Url to RSS-feed', 'tbs' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Limit', 'tbs' ), 'desc' => __( 'Number of items to show', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Feed grabber', 'tbs' ),
					'icon' => 'rss'
				),
				// menu
				'menu' => array(
					'name' => __( 'Menu', 'tbs' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'name' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Menu name', 'tbs' ), 'desc' => __( 'Custom menu name. Ex: Main menu', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Custom menu by name', 'tbs' ),
					'icon' => 'bars'
				),
				// subpages
				'subpages' => array(
					'name' => __( 'Sub pages', 'tbs' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'depth' => array(
							'type' => 'select',
							'values' => array( 1, 2, 3, 4, 5 ), 'default' => 1,
							'name' => __( 'Depth', 'tbs' ),
							'desc' => __( 'Max depth level of children pages', 'tbs' )
						),
						'p' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Parent ID', 'tbs' ),
							'desc' => __( 'ID of the parent page. Leave blank to use current page', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'List of sub pages', 'tbs' ),
					'icon' => 'bars'
				),
				// siblings
				'siblings' => array(
					'name' => __( 'Siblings', 'tbs' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'depth' => array(
							'type' => 'select',
							'values' => array( 1, 2, 3 ), 'default' => 1,
							'name' => __( 'Depth', 'tbs' ),
							'desc' => __( 'Max depth level', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'List of cureent page siblings', 'tbs' ),
					'icon' => 'bars'
				),
				// document
				'document' => array(
					'name' => __( 'Document', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'url' => array(
							'type' => 'upload',
							'default' => '',
							'name' => __( 'Url', 'tbs' ),
							'desc' => __( 'Url to uploaded document. Supported formats: doc, xls, pdf etc.', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Viewer width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Viewer height', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make viewer responsive', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Document viewer by Google', 'tbs' ),
					'icon' => 'file-text'
				),
				// gmap
				'gmap' => array(
					'name' => __( 'Gmap', 'tbs' ),
					'type' => 'single',
					'group' => 'media',
					'atts' => array(
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Map width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 400,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Map height', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make map responsive', 'tbs' )
						),
						'address' => array(
							'values' => array( ),
							'default' => '',
							'name' => __( 'Marker', 'tbs' ),
							'desc' => __( 'Address for the marker. You can type it in any language', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Maps by Google', 'tbs' ),
					'icon' => 'globe'
				),
				// slider
				'slider' => array(
					'name' => __( 'Slider', 'tbs' ),
					'type' => 'single',
					'group' => 'gallery',
					'atts' => array(
						'source' => array(
							'type'    => 'image_source',
							'default' => 'none',
							'name'    => __( 'Source', 'tbs' ),
							'desc'    => __( 'Choose images source. You can use images from Media library or retrieve it from posts (thumbnails) posted under specified blog category. You can also pick any custom taxonomy', 'tbs' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 100,
							'step' => 1,
							'default' => 20,
							'name' => __( 'Limit', 'tbs' ),
							'desc' => __( 'Maximum number of image source posts (for recent posts, category and custom taxonomy)', 'tbs' )
						),
						'link' => array(
							'type' => 'select',
							'values' => array(
								'none'       => __( 'None', 'tbs' ),
								'image'      => __( 'Full-size image', 'tbs' ),
								'attachment' => __( 'Attachment page', 'tbs' ),
								'post'       => __( 'Post permalink', 'tbs' )
							),
							'default' => 'none',
							'name' => __( 'Links', 'tbs' ),
							'desc' => __( 'Select which links will be used for images in this gallery', 'tbs' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same window', 'tbs' ),
								'blank' => __( 'New window', 'tbs' )
							),
							'default' => 'self',
							'name' => __( 'Links target', 'tbs' ),
							'desc' => __( 'Open links in', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ), 'desc' => __( 'Slider width (in pixels)', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 200,
							'max' => 1600,
							'step' => 20,
							'default' => 300,
							'name' => __( 'Height', 'tbs' ), 'desc' => __( 'Slider height (in pixels)', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make slider responsive', 'tbs' )
						),
						'title' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show titles', 'tbs' ), 'desc' => __( 'Display slide titles', 'tbs' )
						),
						'centered' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Center', 'tbs' ), 'desc' => __( 'Is slider centered on the page', 'tbs' )
						),
						'arrows' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Arrows', 'tbs' ), 'desc' => __( 'Show left and right arrows', 'tbs' )
						),
						'pages' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Pagination', 'tbs' ),
							'desc' => __( 'Show pagination', 'tbs' )
						),
						'mousewheel' => array(
							'type' => 'bool',
							'default' => 'yes', 'name' => __( 'Mouse wheel control', 'tbs' ),
							'desc' => __( 'Allow to change slides with mouse wheel', 'tbs' )
						),
						'autoplay' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 100000,
							'step' => 100,
							'default' => 5000,
							'name' => __( 'Autoplay', 'tbs' ),
							'desc' => __( 'Choose interval between slide animations. Set to 0 to disable autoplay', 'tbs' )
						),
						'speed' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 20000,
							'step' => 100,
							'default' => 600,
							'name' => __( 'Speed', 'tbs' ), 'desc' => __( 'Specify animation speed', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Customizable image slider', 'tbs' ),
					'icon' => 'picture-o'
				),
				// carousel
				'carousel' => array(
					'name' => __( 'Carousel', 'tbs' ),
					'type' => 'single',
					'group' => 'gallery',
					'atts' => array(
						'source' => array(
							'type'    => 'image_source',
							'default' => 'none',
							'name'    => __( 'Source', 'tbs' ),
							'desc'    => __( 'Choose images source. You can use images from Media library or retrieve it from posts (thumbnails) posted under specified blog category. You can also pick any custom taxonomy', 'tbs' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 100,
							'step' => 1,
							'default' => 20,
							'name' => __( 'Limit', 'tbs' ),
							'desc' => __( 'Maximum number of image source posts (for recent posts, category and custom taxonomy)', 'tbs' )
						),
						'link' => array(
							'type' => 'select',
							'values' => array(
								'none'       => __( 'None', 'tbs' ),
								'image'      => __( 'Original image', 'tbs' ),
								'attachment' => __( 'Attachment page', 'tbs' ),
								'post'       => __( 'Post permalink', 'tbs' )
							),
							'default' => 'none',
							'name' => __( 'Links', 'tbs' ),
							'desc' => __( 'Select which links will be used for images in this gallery', 'tbs' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same window', 'tbs' ),
								'blank' => __( 'New window', 'tbs' )
							),
							'default' => 'self',
							'name' => __( 'Links target', 'tbs' ),
							'desc' => __( 'Open links in', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 100,
							'max' => 1600,
							'step' => 20,
							'default' => 600,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Carousel width (in pixels)', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 20,
							'max' => 1600,
							'step' => 20,
							'default' => 100,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Carousel height (in pixels)', 'tbs' )
						),
						'responsive' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Responsive', 'tbs' ),
							'desc' => __( 'Ignore width and height parameters and make carousel responsive', 'tbs' )
						),
						'items' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 20,
							'step' => 1,
							'default' => 3,
							'name' => __( 'Items to show', 'tbs' ),
							'desc' => __( 'How much carousel items is visible', 'tbs' )
						),
						'scroll' => array(
							'type' => 'number',
							'min' => 1,
							'max' => 20,
							'step' => 1, 'default' => 1,
							'name' => __( 'Scroll number', 'tbs' ),
							'desc' => __( 'How much items are scrolled in one transition', 'tbs' )
						),
						'title' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Show titles', 'tbs' ), 'desc' => __( 'Display titles for each item', 'tbs' )
						),
						'centered' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Center', 'tbs' ), 'desc' => __( 'Is carousel centered on the page', 'tbs' )
						),
						'arrows' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Arrows', 'tbs' ), 'desc' => __( 'Show left and right arrows', 'tbs' )
						),
						'pages' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Pagination', 'tbs' ),
							'desc' => __( 'Show pagination', 'tbs' )
						),
						'mousewheel' => array(
							'type' => 'bool',
							'default' => 'yes', 'name' => __( 'Mouse wheel control', 'tbs' ),
							'desc' => __( 'Allow to rotate carousel with mouse wheel', 'tbs' )
						),
						'autoplay' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 100000,
							'step' => 100,
							'default' => 5000,
							'name' => __( 'Autoplay', 'tbs' ),
							'desc' => __( 'Choose interval between auto animations. Set to 0 to disable autoplay', 'tbs' )
						),
						'speed' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 20000,
							'step' => 100,
							'default' => 600,
							'name' => __( 'Speed', 'tbs' ), 'desc' => __( 'Specify animation speed', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Customizable image carousel', 'tbs' ),
					'icon' => 'picture-o'
				),
				// custom_gallery
				'custom_gallery' => array(
					'name' => __( 'Gallery', 'tbs' ),
					'type' => 'single',
					'group' => 'gallery',
					'atts' => array(
						'source' => array(
							'type'    => 'image_source',
							'default' => 'none',
							'name'    => __( 'Source', 'tbs' ),
							'desc'    => __( 'Choose images source. You can use images from Media library or retrieve it from posts (thumbnails) posted under specified blog category. You can also pick any custom taxonomy', 'tbs' )
						),
						'limit' => array(
							'type' => 'slider',
							'min' => -1,
							'max' => 100,
							'step' => 1,
							'default' => 20,
							'name' => __( 'Limit', 'tbs' ),
							'desc' => __( 'Maximum number of image source posts (for rcent posts, category and custom taxonomy)', 'tbs' )
						),
						'link' => array(
							'type' => 'select',
							'values' => array(
								'none'       => __( 'None', 'tbs' ),
								'image'      => __( 'Original image', 'tbs' ),
								'attachment' => __( 'Attachment page', 'tbs' ),
								'post'       => __( 'Post permalink', 'tbs' )
							),
							'default' => 'none',
							'name' => __( 'Links', 'tbs' ),
							'desc' => __( 'Select which links will be used for images in this gallery', 'tbs' )
						),
						'target' => array(
							'type' => 'select',
							'values' => array(
								'self' => __( 'Same window', 'tbs' ),
								'blank' => __( 'New window', 'tbs' )
							),
							'default' => 'self',
							'name' => __( 'Links target', 'tbs' ),
							'desc' => __( 'Open links in', 'tbs' )
						),
						'width' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 90,
							'name' => __( 'Width', 'tbs' ), 'desc' => __( 'Single item width (in pixels)', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 90,
							'name' => __( 'Height', 'tbs' ), 'desc' => __( 'Single item height (in pixels)', 'tbs' )
						),
						'title' => array(
							'type' => 'select',
							'values' => array(
								'never' => __( 'Never', 'tbs' ),
								'hover' => __( 'On mouse over', 'tbs' ),
								'always' => __( 'Always', 'tbs' )
							),
							'default' => 'hover',
							'name' => __( 'Show titles', 'tbs' ),
							'desc' => __( 'Title display mode', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Customizable image gallery', 'tbs' ),
					'icon' => 'picture-o'
				),
				// posts
				'posts' => array(
					'name' => __( 'Posts', 'tbs' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'template' => array(
							'default' => 'templates/default-loop.php', 'name' => __( 'Template', 'tbs' ),
							'desc' => __( '<b>Do not change this field value if you do not understand description below.</b><br/>Relative path to the template file. Default templates is placed under the plugin directory (templates folder). You can copy it under your theme directory and modify as you want. You can use following default templates that already available in the plugin directory:<br/><b%value>templates/default-loop.php</b> - posts loop<br/><b%value>templates/teaser-loop.php</b> - posts loop with thumbnail and title<br/><b%value>templates/single-post.php</b> - single post template<br/><b%value>templates/list-loop.php</b> - unordered list with posts titles', 'tbs' )
						),
						'id' => array(
							'default' => '',
							'name' => __( 'Post ID\'s', 'tbs' ),
							'desc' => __( 'Enter comma separated ID\'s of the posts that you want to show', 'tbs' )
						),
						'posts_per_page' => array(
							'type' => 'number',
							'min' => -1,
							'max' => 10000,
							'step' => 1,
							'default' => get_option( 'posts_per_page' ),
							'name' => __( 'Posts per page', 'tbs' ),
							'desc' => __( 'Specify number of posts that you want to show. Enter -1 to get all posts', 'tbs' )
						),
						'post_type' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => TBs_Tools::get_types(),
							'default' => 'post',
							'name' => __( 'Post types', 'tbs' ),
							'desc' => __( 'Select post types. Hold Ctrl key to select multiple post types', 'tbs' )
						),
						'taxonomy' => array(
							'type' => 'select',
							'values' => TBs_Tools::get_taxonomies(),
							'default' => 'category',
							'name' => __( 'Taxonomy', 'tbs' ),
							'desc' => __( 'Select taxonomy to show posts from', 'tbs' )
						),
						'tax_term' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => TBs_Tools::get_terms( 'category' ),
							'default' => '',
							'name' => __( 'Terms', 'tbs' ),
							'desc' => __( 'Select terms to show posts from', 'tbs' )
						),
						'tax_operator' => array(
							'type' => 'select',
							'values' => array( 'IN', 'NOT IN', 'AND' ),
							'default' => 'IN', 'name' => __( 'Taxonomy term operator', 'tbs' ),
							'desc' => __( 'IN - posts that have any of selected categories terms<br/>NOT IN - posts that is does not have any of selected terms<br/>AND - posts that have all selected terms', 'tbs' )
						),
						'author' => array(
							'type' => 'select',
							'multiple' => true,
							'values' => TBs_Tools::get_users(),
							'default' => 'default',
							'name' => __( 'Authors', 'tbs' ),
							'desc' => __( 'Choose the authors whose posts you want to show', 'tbs' )
						),
						'meta_key' => array(
							'default' => '',
							'name' => __( 'Meta key', 'tbs' ),
							'desc' => __( 'Enter meta key name to show posts that have this key', 'tbs' )
						),
						'offset' => array(
							'type' => 'number',
							'min' => 0,
							'max' => 10000,
							'step' => 1, 'default' => 0,
							'name' => __( 'Offset', 'tbs' ),
							'desc' => __( 'Specify offset to start posts loop not from first post', 'tbs' )
						),
						'order' => array(
							'type' => 'select',
							'values' => array(
								'desc' => __( 'Descending', 'tbs' ),
								'asc' => __( 'Ascending', 'tbs' )
							),
							'default' => 'DESC',
							'name' => __( 'Order', 'tbs' ),
							'desc' => __( 'Posts order', 'tbs' )
						),
						'orderby' => array(
							'type' => 'select',
							'values' => array(
								'none' => __( 'None', 'tbs' ),
								'id' => __( 'Post ID', 'tbs' ),
								'author' => __( 'Post author', 'tbs' ),
								'title' => __( 'Post title', 'tbs' ),
								'name' => __( 'Post slug', 'tbs' ),
								'date' => __( 'Date', 'tbs' ), 'modified' => __( 'Last modified date', 'tbs' ),
								'parent' => __( 'Post parent', 'tbs' ),
								'rand' => __( 'Random', 'tbs' ), 'comment_count' => __( 'Comments number', 'tbs' ),
								'menu_order' => __( 'Menu order', 'tbs' ), 'meta_value' => __( 'Meta key values', 'tbs' ),
							),
							'default' => 'date',
							'name' => __( 'Order by', 'tbs' ),
							'desc' => __( 'Order posts by', 'tbs' )
						),
						'post_parent' => array(
							'default' => '',
							'name' => __( 'Post parent', 'tbs' ),
							'desc' => __( 'Show childrens of entered post (enter post ID)', 'tbs' )
						),
						'post_status' => array(
							'type' => 'select',
							'values' => array(
								'publish' => __( 'Published', 'tbs' ),
								'pending' => __( 'Pending', 'tbs' ),
								'draft' => __( 'Draft', 'tbs' ),
								'auto-draft' => __( 'Auto-draft', 'tbs' ),
								'future' => __( 'Future post', 'tbs' ),
								'private' => __( 'Private post', 'tbs' ),
								'inherit' => __( 'Inherit', 'tbs' ),
								'trash' => __( 'Trashed', 'tbs' ),
								'any' => __( 'Any', 'tbs' ),
							),
							'default' => 'publish',
							'name' => __( 'Post status', 'tbs' ),
							'desc' => __( 'Show only posts with selected status', 'tbs' )
						),
						'ignore_sticky_posts' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Ignore sticky', 'tbs' ),
							'desc' => __( 'Select Yes to ignore posts that is sticked', 'tbs' )
						)
					),
					'desc' => __( 'Custom posts query with customizable template', 'tbs' ),
					'icon' => 'th-list'
				),
				// dummy_text
				'dummy_text' => array(
					'name' => __( 'Dummy text', 'tbs' ),
					'type' => 'single',
					'group' => 'content',
					'atts' => array(
						'what' => array(
							'type' => 'select',
							'values' => array(
								'paras' => __( 'Paragraphs', 'tbs' ),
								'words' => __( 'Words', 'tbs' ),
								'bytes' => __( 'Bytes', 'tbs' ),
							),
							'default' => 'paras',
							'name' => __( 'What', 'tbs' ),
							'desc' => __( 'What to generate', 'tbs' )
						),
						'amount' => array(
							'type' => 'slider',
							'min' => 1,
							'max' => 100,
							'step' => 1,
							'default' => 1,
							'name' => __( 'Amount', 'tbs' ),
							'desc' => __( 'How many items (paragraphs or words) to generate. Minimum words amount is 5', 'tbs' )
						),
						'cache' => array(
							'type' => 'bool',
							'default' => 'yes',
							'name' => __( 'Cache', 'tbs' ),
							'desc' => __( 'Generated text will be cached. Be careful with this option. If you disable it and insert many dummy_text shortcodes the page load time will be highly increased', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Text placeholder', 'tbs' ),
					'icon' => 'text-height'
				),
				// dummy_image
				'dummy_image' => array(
					'name' => __( 'Dummy image', 'tbs' ),
					'type' => 'single',
					'group' => 'content',
					'atts' => array(
						'width' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 500,
							'name' => __( 'Width', 'tbs' ),
							'desc' => __( 'Image width', 'tbs' )
						),
						'height' => array(
							'type' => 'slider',
							'min' => 10,
							'max' => 1600,
							'step' => 10,
							'default' => 300,
							'name' => __( 'Height', 'tbs' ),
							'desc' => __( 'Image height', 'tbs' )
						),
						'theme' => array(
							'type' => 'select',
							'values' => array(
								'any'       => __( 'Any', 'tbs' ),
								'abstract'  => __( 'Abstract', 'tbs' ),
								'animals'   => __( 'Animals', 'tbs' ),
								'business'  => __( 'Business', 'tbs' ),
								'cats'      => __( 'Cats', 'tbs' ),
								'city'      => __( 'City', 'tbs' ),
								'food'      => __( 'Food', 'tbs' ),
								'nightlife' => __( 'Night life', 'tbs' ),
								'fashion'   => __( 'Fashion', 'tbs' ),
								'people'    => __( 'People', 'tbs' ),
								'nature'    => __( 'Nature', 'tbs' ),
								'sports'    => __( 'Sports', 'tbs' ),
								'technics'  => __( 'Technics', 'tbs' ),
								'transport' => __( 'Transport', 'tbs' )
							),
							'default' => 'any',
							'name' => __( 'Theme', 'tbs' ),
							'desc' => __( 'Select the theme for this image', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'desc' => __( 'Image placeholder with random image', 'tbs' ),
					'icon' => 'picture-o'
				),
				// animate
				'animate' => array(
					'name' => __( 'Animation', 'tbs' ),
					'type' => 'wrap',
					'group' => 'other',
					'atts' => array(
						'type' => array(
							'type' => 'select',
							'values' => array( 'flash', 'bounce', 'shake', 'tada', 'swing', 'wobble', 'pulse', 'flip', 'flipInX', 'flipOutX', 'flipInY', 'flipOutY', 'fadeIn', 'fadeInUp', 'fadeInDown', 'fadeInLeft', 'fadeInRight', 'fadeInUpBig', 'fadeInDownBig', 'fadeInLeftBig', 'fadeInRightBig', 'fadeOut', 'fadeOutUp', 'fadeOutDown', 'fadeOutLeft', 'fadeOutRight', 'fadeOutUpBig', 'fadeOutDownBig', 'fadeOutLeftBig', 'fadeOutRightBig', 'slideInDown', 'slideInLeft', 'slideInRight', 'slideOutUp', 'slideOutLeft', 'slideOutRight', 'bounceIn', 'bounceInDown', 'bounceInUp', 'bounceInLeft', 'bounceInRight', 'bounceOut', 'bounceOutDown', 'bounceOutUp', 'bounceOutLeft', 'bounceOutRight', 'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight', 'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight', 'lightSpeedIn', 'lightSpeedOut', 'hinge', 'rollIn', 'rollOut' ),
							'default' => 'bounceIn',
							'name' => __( 'Animation', 'tbs' ),
							'desc' => __( 'Select animation type', 'tbs' )
						),
						'duration' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 0.5,
							'default' => 1,
							'name' => __( 'Duration', 'tbs' ),
							'desc' => __( 'Animation duration (seconds)', 'tbs' )
						),
						'delay' => array(
							'type' => 'slider',
							'min' => 0,
							'max' => 20,
							'step' => 0.5,
							'default' => 0,
							'name' => __( 'Delay', 'tbs' ),
							'desc' => __( 'Animation delay (seconds)', 'tbs' )
						),
						'inline' => array(
							'type' => 'bool',
							'default' => 'no',
							'name' => __( 'Inline', 'tbs' ),
							'desc' => __( 'This parameter determines what HTML tag will be used for animation wrapper. Turn this option to YES and animated element will be wrapped in SPAN instead of DIV. Useful for inline animations, like buttons', 'tbs' )
						),
						'class' => array(
							'default' => '',
							'name' => __( 'Class', 'tbs' ),
							'desc' => __( 'Extra CSS class', 'tbs' )
						)
					),
					'content' => __( 'Animated content', 'tbs' ),
					'desc' => __( 'Wrapper for animation. Any nested element will be animated', 'tbs' ),
					'icon' => 'bolt'
				),
				// meta
				'meta' => array(
					'name' => __( 'Meta', 'tbs' ),
					'type' => 'single',
					'group' => 'data',
					'atts' => array(
						'key' => array(
							'default' => '',
							'name' => __( 'Key', 'tbs' ),
							'desc' => __( 'Meta key name', 'tbs' )
						),
						'default' => array(
							'default' => '',
							'name' => __( 'Default', 'tbs' ),
							'desc' => __( 'This text will be shown if data is not found', 'tbs' )
						),
						'before' => array(
							'default' => '',
							'name' => __( 'Before', 'tbs' ),
							'desc' => __( 'This content will be shown before the value', 'tbs' )
						),
						'after' => array(
							'default' => '',
							'name' => __( 'After', 'tbs' ),
							'desc' => __( 'This content will be shown after the value', 'tbs' )
						),
						'post_id' => array(
							'default' => '',
							'name' => __( 'Post ID', 'tbs' ),
							'desc' => __( 'You can specify custom post ID. Leave this field empty to use an ID of the current post. Current post ID may not work in Live Preview mode', 'tbs' )
						),
						'filter' => array(
							'default' => '',
							'name' => __( 'Filter', 'tbs' ),
							'desc' => __( 'You can apply custom filter to the retrieved value. Enter here function name. Your function must accept one argument and return modified value. Example function: ', 'tbs' ) . "<br /><pre><code style='display:block;padding:5px'>function my_custom_filter( \$value ) {\n\treturn 'Value is: ' . \$value;\n}</code></pre>"
						)
					),
					'desc' => __( 'Post meta', 'tbs' ),
					'icon' => 'info-circle'
				),
				// user
				'user' => array(
					'name' => __( 'User', 'tbs' ),
					'type' => 'single',
					'group' => 'data',
					'atts' => array(
						'field' => array(
							'type' => 'select',
							'values' => array(
								'display_name'        => __( 'Display name', 'tbs' ),
								'ID'                  => __( 'ID', 'tbs' ),
								'user_login'          => __( 'Login', 'tbs' ),
								'user_nicename'       => __( 'Nice name', 'tbs' ),
								'user_email'          => __( 'Email', 'tbs' ),
								'user_url'            => __( 'URL', 'tbs' ),
								'user_registered'     => __( 'Registered', 'tbs' ),
								'user_activation_key' => __( 'Activation key', 'tbs' ),
								'user_status'         => __( 'Status', 'tbs' )
							),
							'default' => 'display_name',
							'name' => __( 'Field', 'tbs' ),
							'desc' => __( 'User data field name', 'tbs' )
						),
						'default' => array(
							'default' => '',
							'name' => __( 'Default', 'tbs' ),
							'desc' => __( 'This text will be shown if data is not found', 'tbs' )
						),
						'before' => array(
							'default' => '',
							'name' => __( 'Before', 'tbs' ),
							'desc' => __( 'This content will be shown before the value', 'tbs' )
						),
						'after' => array(
							'default' => '',
							'name' => __( 'After', 'tbs' ),
							'desc' => __( 'This content will be shown after the value', 'tbs' )
						),
						'user_id' => array(
							'default' => '',
							'name' => __( 'User ID', 'tbs' ),
							'desc' => __( 'You can specify custom user ID. Leave this field empty to use an ID of the current user', 'tbs' )
						),
						'filter' => array(
							'default' => '',
							'name' => __( 'Filter', 'tbs' ),
							'desc' => __( 'You can apply custom filter to the retrieved value. Enter here function name. Your function must accept one argument and return modified value. Example function: ', 'tbs' ) . "<br /><pre><code style='display:block;padding:5px'>function my_custom_filter( \$value ) {\n\treturn 'Value is: ' . \$value;\n}</code></pre>"
						)
					),
					'desc' => __( 'User data', 'tbs' ),
					'icon' => 'info-circle'
				),
				// post
				'post' => array(
					'name' => __( 'Post', 'tbs' ),
					'type' => 'single',
					'group' => 'data',
					'atts' => array(
						'field' => array(
							'type' => 'select',
							'values' => array(
								'ID'                    => __( 'Post ID', 'tbs' ),
								'post_author'           => __( 'Post author', 'tbs' ),
								'post_date'             => __( 'Post date', 'tbs' ),
								'post_date_gmt'         => __( 'Post date', 'tbs' ) . ' GMT',
								'post_content'          => __( 'Post content', 'tbs' ),
								'post_title'            => __( 'Post title', 'tbs' ),
								'post_excerpt'          => __( 'Post excerpt', 'tbs' ),
								'post_status'           => __( 'Post status', 'tbs' ),
								'comment_status'        => __( 'Comment status', 'tbs' ),
								'ping_status'           => __( 'Ping status', 'tbs' ),
								'post_name'             => __( 'Post name', 'tbs' ),
								'post_modified'         => __( 'Post modified', 'tbs' ),
								'post_modified_gmt'     => __( 'Post modified', 'tbs' ) . ' GMT',
								'post_content_filtered' => __( 'Filtered post content', 'tbs' ),
								'post_parent'           => __( 'Post parent', 'tbs' ),
								'guid'                  => __( 'GUID', 'tbs' ),
								'menu_order'            => __( 'Menu order', 'tbs' ),
								'post_type'             => __( 'Post type', 'tbs' ),
								'post_mime_type'        => __( 'Post mime type', 'tbs' ),
								'comment_count'         => __( 'Comment count', 'tbs' )
							),
							'default' => 'post_title',
							'name' => __( 'Field', 'tbs' ),
							'desc' => __( 'Post data field name', 'tbs' )
						),
						'default' => array(
							'default' => '',
							'name' => __( 'Default', 'tbs' ),
							'desc' => __( 'This text will be shown if data is not found', 'tbs' )
						),
						'before' => array(
							'default' => '',
							'name' => __( 'Before', 'tbs' ),
							'desc' => __( 'This content will be shown before the value', 'tbs' )
						),
						'after' => array(
							'default' => '',
							'name' => __( 'After', 'tbs' ),
							'desc' => __( 'This content will be shown after the value', 'tbs' )
						),
						'post_id' => array(
							'default' => '',
							'name' => __( 'Post ID', 'tbs' ),
							'desc' => __( 'You can specify custom post ID. Leave this field empty to use an ID of the current post. Current post ID may not work in Live Preview mode', 'tbs' )
						),
						'filter' => array(
							'default' => '',
							'name' => __( 'Filter', 'tbs' ),
							'desc' => __( 'You can apply custom filter to the retrieved value. Enter here function name. Your function must accept one argument and return modified value. Example function: ', 'tbs' ) . "<br /><pre><code style='display:block;padding:5px'>function my_custom_filter( \$value ) {\n\treturn 'Value is: ' . \$value;\n}</code></pre>"
						)
					),
					'desc' => __( 'Post data', 'tbs' ),
					'icon' => 'info-circle'
				),
				// template
				'template' => array(
					'name' => __( 'Template', 'tbs' ),
					'type' => 'single',
					'group' => 'other',
					'atts' => array(
						'name' => array(
							'default' => '',
							'name' => __( 'Template name', 'tbs' ),
							'desc' => sprintf( __( 'Use template file name (with optional .php extension). If you need to use templates from theme sub-folder, use relative path. Example values: %s, %s, %s', 'tbs' ), '<b%value>page</b>', '<b%value>page.php</b>', '<b%value>includes/page.php</b>' )
						)
					),
					'desc' => __( 'Theme template', 'tbs' ),
					'icon' => 'puzzle-piece'
				),
			) );
		// Return result
		return ( is_string( $shortcode ) ) ? $shortcodes[sanitize_text_field( $shortcode )] : $shortcodes;
	}
}

class Shortcodes_Ultimate_Data extends TBs_Data {
	function __construct() {
		parent::__construct();
	}
}
