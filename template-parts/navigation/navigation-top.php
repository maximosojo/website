<?php
/**
 * The navigation top template
 * 
 * @package website
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @since 1.0.0
 */

?>
<!-- Navigation -->
<?php if ( has_nav_menu( 'top' ) ) : ?>
  <header id="header">
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <nav id="nav-menu-container">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'top',
                'menu_class'     => 'nav-menu ml-auto',
                // 'container_class' => "collapse navbar-collapse",
                //"container_id" => "navbarResponsive",
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              )
            );
          ?>
        </nav>
      </div>
    </div>
  </header>
<?php endif; ?>