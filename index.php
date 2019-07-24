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
 * @since 1.0.0
 */

get_header();
?>
	<!-- Main Content -->
  	<div class="container">
	    <div class="row">
	      	<div class="col-lg-8 col-md-10 mx-auto">
	      		<?php
				if ( have_posts() ) {

					// Load posts loop.
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content/content' );
					}

				} else {

					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content/content', 'none' );

				}
				?>
	      	</div>
	  	</div>
	</div>

<?php
get_footer();
