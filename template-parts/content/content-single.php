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

<div class="row">
	<div class="col-lg-8 posts-list">
		<article class="single-post row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-12">
		<div class="feature-img">
			<?php website_post_thumbnail(); ?>
		</div>									
	</div>
	<div class="col-12">
		<?php
			if ( is_sticky() && is_home() && ! is_paged() ) {
				printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
			}
			if ( is_singular() ) :
				the_title( '<h2 class="post-title mt-20 mb-20">', '</h2>' );
			endif;
			?>
		<div class="entry-meta single-entry-meta clearfix">
			<?php get_the_title() ?>
			<?php website_posted_by() ?>			
		</div>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'website' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . __( 'Pages:', 'website' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
	</div>
</article>
	</div>
	<div class="col-lg-4 sidebar-widgets">
		<?php get_template_part( 'template-parts/content/sidebar' ); ?>
	</div>
</div>