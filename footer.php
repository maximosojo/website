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
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="single-footer-widget">
                    <h4>Sobre mi</h4>
                    <p>
                        We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                    </p>
                    <?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-5">
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
            <div class="col-sm-6 col-md-6 col-lg-3 social-widget">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>
