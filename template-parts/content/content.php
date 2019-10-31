<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Website
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @since 1.0.0
 */

?>
<article class="single-post row">
	<div class="col-lg-7 col-md-7">
		<div class="feature-img">
			<?php website_post_thumbnail(); ?>
		</div>
	</div>
	<div class="col-lg-5 col-md-5">
		<?php
			if ( is_sticky() && is_home() && ! is_paged() ) {
				printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
			}
			if ( is_singular() ) :
				the_title( '<h2 class="post-title">', '</h2>' );
			else :
				the_title( sprintf( '<a href="%s" class="posts-title"><h3>', esc_url( get_permalink() ) ), '</h3></a>' );
			endif;
			?>
		<?php get_the_title(); ?>
		<p class="excert">
			<?php the_excerpt(); ?>
		</p>
		<?php website_posted_by() ?>
	</div>
</article>
