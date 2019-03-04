<?php

function skeletonQuery() {
	$params = array('posts_per_page' => 5);
	$wc_query = new WP_Query($params);

	if ($wc_query->have_posts()) :
		while ($wc_query->have_posts()) :
					$wc_query->the_post();
			the_title(); //outputs title of 5 most recent posts
		endwhile; 
	wp_reset_postdata();
	else:  _e( 'No Products' );
	endif;
}
add_shortcode('aw-query', 'skeletonQuery');

?>