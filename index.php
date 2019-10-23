<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package website
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @since 1.0.0
 */

get_header();

if ( have_posts() ) {?>
	<section class="post-content-area mt-4">
		<div class="container">
			<div class="row">
				<?php
				// Load posts loop.
				while ( have_posts() ) {
					?><div class="col-lg-4 posts-list"><?php
					the_post();
					get_template_part( 'template-parts/content/content' );
					?></div><?php
				}
				?>
			</div>
		</div>
	</section>
<?php
} else {
	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content', 'none' );
}

get_footer();
