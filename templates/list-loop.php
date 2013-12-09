<ul class="tbs-posts tbs-posts-list-loop">
<?php
// Posts are found
if ( $posts->have_posts() ) {
	while ( $posts->have_posts() ) {
		$posts->the_post();
		global $post;
?>
<li id="tbs-post-<?php the_ID(); ?>" class="tbs-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
	}
}
// Posts not found
else {
?>
<li><?php _e( 'Posts not found', 'tbs' ) ?></li>
<?php
}
?>
</ul>
