<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GBA_|_Laboratorio_de_Gestión
 */

?>

	</div><!-- #content -->
	
	<footer class="site-footer py-5 bg-primary">
    	<div class="container">
			<div class="row my-5">
			    <div class="col-lg-3 col-md-2 col-5">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_territorio.png" class="img-fluid mb-5">
			    </div>
			    <div class="col-lg-3 col-md-5">
			      <ul class="list-unstyled text-white">
				  	<li><a href="/" class="text-light">ReCreo | Laboratorio en Gestión</a></li>
                    <li><a href="/gestion-cultural-publica/" class="text-light">Gestión Pública</a></li>
                    <li><a href="/gestion-cultural-independiente/" class="text-light">Cultura Independiente</a></li>
			      	<li><a href="/preguntas-frecuentes/" class="text-light">Preguntas frecuentes</a></li>
			      </ul>
			    </div>
			    <div class="col-lg-9 col-md-8 text-right">
			      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logos-finde-territorio.png" class="img-fluid">
			    </div>
			</div>
		</div><!-- .container -->
  	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
