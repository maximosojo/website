<?php
/**
 * @package website
 * @since 1.0.0
 */

?>
<!-- Navigation -->
<?php if ( has_nav_menu( 'top' ) ) : ?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" aria-label="<?php esc_attr_e( 'Top Menu', 'website' ); ?>">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top',
            'menu_class'     => 'navbar-nav ml-auto',
            'container_class' => "collapse navbar-collapse",
            "container_id" => "navbarResponsive",
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          )
        );
      ?>
    </div>
  </nav>
<?php endif; ?>