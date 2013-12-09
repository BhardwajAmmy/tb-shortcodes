<?php

class TBs_Vote {

	function __construct() {
		add_action( 'load-plugins.php', array( __CLASS__, 'init' ) );
		add_action( 'wp_ajax_tbs_vote',  array( __CLASS__, 'vote' ) );
	}

	public static function init() {
		Shortcodes_Ultimate::timestamp();
		$vote = get_option( 'tbs_vote' );
		$timeout = time() > ( get_option( 'tbs_installed' ) + 60*60*24*3 );
		if ( in_array( $vote, array( 'yes', 'no', 'tweet' ) ) || !$timeout ) return;
		add_action( 'in_admin_footer', array( __CLASS__, 'message' ) );
		add_action( 'admin_head',      array( __CLASS__, 'register' ) );
		add_action( 'admin_footer',    array( __CLASS__, 'enqueue' ) );
	}

	public static function register() {
		wp_register_style( 'tbs-vote', plugins_url( 'assets/css/vote.css', TBS_PLUGIN_FILE ), false, TBS_PLUGIN_VERSION, 'all' );
		wp_register_script( 'tbs-vote', plugins_url( 'assets/js/vote.js', TBS_PLUGIN_FILE ), array( 'jquery' ), TBS_PLUGIN_VERSION, true );
	}

	public static function enqueue() {
		wp_enqueue_style( 'tbs-vote' );
		wp_enqueue_script( 'tbs-vote' );
	}

	public static function vote() {
		$vote = sanitize_key( $_GET['vote'] );
		if ( !is_user_logged_in() || !in_array( $vote, array( 'yes', 'no', 'later', 'tweet' ) ) ) die( 'error' );
		update_option( 'tbs_vote', $vote );
		if ( $vote === 'later' ) update_option( 'tbs_installed', time() );
		die( 'OK: ' . $vote );
	}

	public static function message() {
?>
		<div class="tbs-vote" style="display:none">
			<div class="tbs-vote-wrap">
				<div class="tbs-vote-gravatar"><a href="http://profiles.wordpress.org/gn_themes" target="_blank"><img src="http://www.gravatar.com/avatar/54fda46c150e45d18d105b9185017aea.png" alt="<?php _e( 'TechBooth', 'tbs' ); ?>" width="50" height="50"></a></div>
				<div class="tbs-vote-message">
					<p><?php _e( 'Hello, my name is TechBooth, and I am developer of plugin <b>TB Shortcodes</b>.<br>If you like this plugin, please write a few words about it at the wordpress.org or twitter. It will help other people find this useful plugin more quickly.<br><b>Thank you!</b>', 'tbs' ); ?></p>
					<p>
						<a href="<?php echo admin_url( 'admin-ajax.php' ); ?>?action=tbs_vote&amp;vote=yes" class="tbs-vote-action button button-small button-primary" data-action="http://wordpress.org/support/view/plugin-reviews/shortcodes-ultimate?rate=5#postform"><?php _e( 'Rate plugin', 'tbs' ); ?></a>
						<a href="<?php echo admin_url( 'admin-ajax.php' ); ?>?action=tbs_vote&amp;vote=tweet" class="tbs-vote-action button button-small" data-action="http://twitter.com/share?url=http://bit.ly/1blZb7u&amp;text=<?php echo urlencode( __( 'TB Shortcodes - must have WordPress plugin #shortcodesultimate', 'tbs' ) ); ?>"><?php _e( 'Tweet', 'tbs' ); ?></a>
						<a href="<?php echo admin_url( 'admin-ajax.php' ); ?>?action=tbs_vote&amp;vote=no" class="tbs-vote-action button button-small"><?php _e( 'No, thanks', 'tbs' ); ?></a>
						<span><?php _e( 'or', 'tbs' ); ?></span>
						<a href="<?php echo admin_url( 'admin-ajax.php' ); ?>?action=tbs_vote&amp;vote=later" class="tbs-vote-action button button-small"><?php _e( 'Remind me later', 'tbs' ); ?></a>
					</p>
				</div>
				<div class="tbs-vote-clear"></div>
			</div>
		</div>
		<?php
	}
}

new TBs_Vote;
