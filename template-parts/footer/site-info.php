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
<p class="copyright text-muted">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Reservados |
	Con <i class="fa fa-heart-o" aria-hidden="true" style="color:red;"></i> desde Venezuela por 
	<a href="<?php echo esc_url( __( 'https://maximosojo.com/', 'website' ) ); ?>" class="imprint">
		<?php printf( __( '%s', 'website' ), 'Máximo Sojo' ); ?>
	</a>
</p>
