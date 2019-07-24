<?php

if ( ! function_exists( 'website_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function website_post_thumbnail() {
		if ( is_singular() ) :
				the_post_thumbnail();
		endif;
	}
endif;