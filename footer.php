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
 * @author Máximo Sojo <maxsojo13@gmail.com>
 * @since 1.0.0
 */

?>
<!-- Footer -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Sobre mi</h4>
                    <p>
                        We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                    </p>
                    <?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Boletin informativo</h4>
                    <p>Manténgase actualizado con nuestras últimas tendencias.</p>
                    <div class="" id="mc_embed_signup">
                       <form target="_blank" action="" method="get">
                        <div class="input-group">
                          <input type="text" class="form-control" name="email" placeholder="Ingrese correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese correo electrónico '" required="" type="email">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                              <span class="fa fa-arrow-right"></span>
                            </button>    
                          </div>
                          <div class="info"></div>  
                        </div>
                      </form> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h4>Sígueme</h4>
                    <!-- <p>Let us be social</p> -->
                    <div class="footer-social d-flex align-items-center">
                        <?php
                          if ( is_active_sidebar('footer-widget')) {
                            dynamic_sidebar( 'footer-widget' );
                          }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
