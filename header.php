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

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Custom fonts for this template -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Custom styles for this template -->
<link href="http://localhost/wordpress/wp-content/themes/website/assets/css/custom.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
<?php 
  $pageID = get_option('page_for_posts');
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageID ), 'website-the-post-big' );
  $srcImage = "";
  if (is_home() && !is_front_page() ) :
    $srcImage = $image[0];    
  else:
    $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'website-the-post-big');
    $srcImage = $src[0];
  endif;
?> 
<!-- Page Header -->
<header class="masthead" style="background-image: url(<?php echo esc_url($srcImage); ?>)">
  <div class="overlay"></div>
	<div class="container">
  		<div class="row">
    		<div class="col-lg-8 col-md-10 mx-auto">
      			<div class="site-heading">
        			<h1><?php single_post_title(); ?></h1>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
                ?>
        			   <span class="subheading"><?php echo $description; ?></span>
              <?php endif; ?>              
      			</div>
    		</div>
  		</div>
	</div>
</header>

