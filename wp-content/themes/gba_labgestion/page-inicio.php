<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GBA_|_Laboratorio_de_Gestión
 */

get_header();
//get_template_part( 'layouts/header', 'te-pu' ); 
?>

    <div id="content" class="home-gestion-cultural-publica">

        <section id="slide-principal">
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php wp_showSlides_fullbg(); ?>
                </div>

                <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!--OPB-->
        <?php the_content();?>

        <!--BIENVENIDA-->
        <section class="bg-light py-5" id="cultura-en-territorio">
            <div class="container">
                <h3><strong>Cultura en territorio</strong></h3>
                <div class="row">
                    <p class="lead col-lg-10">Finde Cultura en Territorio es un espacio de encuentro entre los 135 municipios bonaerenses, para analizar y compartir experiencias de gestión cultural pública. En esta primera edición tendremos presentaciones y análisis de políticas públicas municipales, conferencias y talleres. Una herramienta para pensar la cultura pública en territorio desde los territorios y junto a invitadxs que son referentes de la gestión en otras provincias.</p>
                </div>
            </div>
        </section>

        <!--ATLAS DE EXPERIENCIAS-->
        <section id="atlas-de-experiencias" class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3><strong>Atlas de experiencias</strong></h3>
                <div class="row">
                    <div class="lead col-lg-10">
                    Un inventario de políticas y eventos culturales públicos generados por los municipios bonaerenses. Un espacio para compartir experiencias de gestión, construir vínculos y aprender de nuestros pares: Cómo crean y gestionan acciones que transforman sus comunidades y activan el desarrollo.
                    </div>
                </div>
                
                <div class="slick x3 mt-5">
                    <?php wp_archive_experiencias_x_recurso('atlas-de-experiencias', array('gestion-cultural-publica','gestion-cultural-independiente')) ?>
                </div>
            </div>
        </section>

        <!--CONFERENCIAS-->
        <section id="conferencias" class="bg-light py-2 py-sm-5">
            <div class="container">
                <h3><strong>Conferencias y conversaciones</strong></h3>
                <div class="row">
                    <div class="lead col-lg-10">
                        Gestores culturales públicos de otras provincias comparten casos de gestión que produjeron un impacto en sus territorios.
                    </div>
                </div>
            </div>
        
            <div class="container-fluid bg-light py-2">
                <div class="container">
                    <div class="slick-custom mt-5" data-slick='{"slidesToShow": 2, "slidesToScroll": 1}'>
                        <?php wp_archive_experiencias_x_recurso('conferencias', array('gestion-cultural-publica','gestion-cultural-independiente')) ?>
                    </div>
                </div>
            </div>
        </section>

        <!--CAPACITACIONES-->
        <section id="capacitaciones" class="bg-white py-2 py-sm-5">
            <div class="container">
                <h3><strong>Capacitaciones</strong></h3>
                <div class="row">
                    <div class="lead col-lg-10">
                    Un espacio de formación virtual permanente para gestores culturales públicos de la provincia de Buenos Aires.
                    </div>
                </div>
                <div class="slick x3 mt-5">
                    <?php wp_archive_experiencias_x_recurso('capacitaciones', array('gestion-cultural-publica','gestion-cultural-independiente')) ?>
                </div>
            </div>
        </section>

        <!--PARTICIPA-->
        <section id="participa" class="bg-light py-5 participa" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/territorio/bk-territorio-01.png');">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 mb-4 text-primary"><strong>Participá</strong></h3>
                    <div class="lead col-md-10">
                    ¿Trabajás en cultura en alguno de los 135 municipios de la provincia de Buenos Aires? ¿Querés compartir experiencias de gestión? ¿Generar lazos y aprendizajes con otros territorios? Te estamos esperando. Hacé <a href="https://docs.google.com/forms/d/e/1FAIpQLScKM27DelTXnmeA7lzORDxzrDEo8ejtLCANYAXLZAVPEC9bBw/viewform" target="_blank">click acá</a>.
                    </div>
                </div>
            </div>
        </section>

        <!--BANNERS-->
        <?php wp_archive_banners('gestion-cultural-publica');?>


<?php 
get_footer();
