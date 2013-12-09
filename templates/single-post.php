<div class="tbs-posts tbs-posts-single-post">
	<?php
		// Prepare marker to show only one post
		$first = true;
		// Posts are found
		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				global $post;

				// Show oly first post
				if ( $first ) {
					$first = false;
					?>
					<div id="tbs-post-<?php the_ID(); ?>" class="tbs-post">
						<h1 class="tbs-post-title"><?php the_title(); ?></h1>
						<div class="tbs-post-meta"><?php _e( 'Posted', 'tbs' ); ?>: <?php the_time( get_option( 'date_format' ) ); ?> | <a href="<?php comments_link(); ?>" class="tbs-post-comments-link"><?php comments_number( __( '0 comments', 'tbs' ), __( '1 comment', 'tbs' ), __( '%n comments', 'tbs' ) ); ?></a></div>
						<div class="tbs-post-content">
							<?php the_content(); ?>
						</div>
					</div>
					<?php
				}
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'tbs' ) . '</h4>';
		}
	?>
</div>