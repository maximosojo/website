<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Website
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @since 1.0.0
 */

if ( ! function_exists( 'website_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function website_post_thumbnail() {
		//if ( is_singular() ) :
				the_post_thumbnail('post-thumbnail',["class" => "img-fluid"]);
		//endif;
	}
endif;

if ( ! function_exists( 'website_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function website_posted_by() {
		$fname = get_the_author_meta('first_name');
		$lname = get_the_author_meta('last_name');
		$full_name = '';

		if(empty($fname)){
		    $full_name = $lname;
		} elseif(empty($lname)){
		    $full_name = $fname;
		} else {
		    $full_name = "{$fname} {$lname}";
		}

		$byline = '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html($full_name) . '</a>';
		echo sprintf('<p class="user-name"><img src="https://www.gravatar.com/avatar/55f4735ae16bbf2f3a056eed5081fec1?s=40" alt="" class="rounded-circle">%s</p>',$byline);
	}
endif;

if ( ! function_exists( 'website_posted_at' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function website_posted_at() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		$time_string = sprintf( $time_string,esc_attr( get_the_modified_date( 'c' ) ),esc_html( get_the_modified_date() ));
		echo sprintf('<p class="date col-lg-12 col-md-12 col-6"><a href="#">%s</a> <span class="fa fa-calendar"></span></p>',$time_string);
	}
endif;