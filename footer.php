<?php
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

?>
<!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php
            if ( is_active_sidebar('footer-widget')) {
              dynamic_sidebar( 'footer-widget' );
            }
          ?>
          <?php get_template_part( 'template-parts/footer/site', 'info' ); ?>          
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
