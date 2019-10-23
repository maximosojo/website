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
<div class="single-post row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-lg-12 col-md-12">
		<div class="feature-img">
			<?php website_post_thumbnail(); ?>
		</div>
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
	</div>
</div>
