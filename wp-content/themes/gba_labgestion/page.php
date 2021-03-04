<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GBA_|_Laboratorio_de_Gestión
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="<?php if (is_page( 'en-vivo' ) || is_page( 'gamejam' )) { 
			echo 'col-md-15';
		} else { 
			echo 'col-md-11';
		} ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main my-5">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col-15 .col-md-8 -->
	
	</div>

<?php
get_footer();
