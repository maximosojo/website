<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Website
 * @since 1.0.0
 */

?>

<article class="post-preview" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  	
	<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
		}
		if ( is_singular() ) :
			the_title( '<h2 class="post-title">', '</h2>' );
		else :
			the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		
		get_the_title(); ?>
    	<p>
    		<?php the_excerpt(); ?>
      		<!-- Problems look mighty small from 150 miles up -->
    	</p>
    	<?php website_posted_on(); ?>
</article>
<hr>
