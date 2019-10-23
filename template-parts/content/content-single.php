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

<article class="single-post row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-12">
		<div class="feature-img">
			<?php website_post_thumbnail(); ?>
		</div>									
	</div>
	<div class="col-3 meta-details">
		<ul class="tags">
			<li><a href="#">Tecnología</a></li>
		</ul>
		<div class="user-details row">
			<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p>
			<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
			<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
			<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
			<ul class="social-links col-lg-12 col-md-12 col-6">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-github"></i></a></li>
				<li><a href="#"><i class="fa fa-behance"></i></a></li>
			</ul>																				
		</div>
	</div>
	<div class="col-9">
		<h3 class="mt-20 mb-20"><?php get_the_title() ?></h3>
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
