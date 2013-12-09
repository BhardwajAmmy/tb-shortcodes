<div class="tbs-posts tbs-posts-default-loop">
	<?php
		// Posts are found
		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				global $post;
				?>

				<div id="tbs-post-<?php the_ID(); ?>" class="tbs-post">
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="tbs-post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php endif; ?>
					<h2 class="tbs-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="tbs-post-meta"><?php _e( 'Posted', 'tbs' ); ?>: <?php the_time( get_option( 'date_format' ) ); ?></div>
					<div class="tbs-post-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<a href="<?php comments_link(); ?>" class="tbs-post-comments-link"><?php comments_number( __( '0 comments', 'tbs' ), __( '1 comment', 'tbs' ), __( '%n comments', 'tbs' ) ); ?></a>
				</div>

				<?php
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'tbs' ) . '</h4>';
		}
	?>
</div>