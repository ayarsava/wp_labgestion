<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GBA_|_Laboratorio_de_Gestión
 */

?>

<?php
        echo '<div class="mb-1">';
        echo '<div class="card w-100">';
        $hacedores = get_the_terms( $post->ID, 'hacedor' );
        $partidos = get_the_terms( $post->ID, 'partido' );
        $areas = get_the_terms( $post->ID, 'area' );
        echo '<div class="card-body">';
        if ($areas) {
            foreach($areas as $area) {
            $areastring[] = $area->name;
            }
            $list = '<div class="badge badge-primary mb-1 px-2 py-1 mr-2">'.implode('</div>,<div class="badge badge-primary mb-1 px-2 py-1 mr-2"> ', $areastring)."</div>";
            echo rtrim($list,',');
        }
    
        if ($partidos) {
            foreach($partidos as $partido) {
            $partidostring[] = $partido->name;
            }
            $list = '<div class="badge badge-primary mb-1 px-2 py-1 mr-2">'.implode('</div>,<div class="badge badge-primary mb-1 px-2 py-1 mr-2"> ', $partidostring)."</div>";
            echo rtrim($list,',');
        }
        
        echo '<h5 class="card-title font-weight-bold mr-4 mt-2"><a href="' . get_the_permalink() .'" rel="slidemark">' . get_the_title() . '</a></h5>';
        echo '<div class="p-0">';
        if ($hacedores) {
            foreach($hacedores as $hacedor) {
            $hacedorestring[] = $hacedor->name;
            }
            $list = implode(', ', $hacedorestring);
            echo rtrim($list,',');
        }
        echo '</div></div>';


        $url = get_post_meta( get_the_ID(), 'oembed', true );
        $embed = wp_oembed_get( $url, $args );
        if ( ! $embed ) {
            $embed = $GLOBALS['wp_embed']->shortcode( $args, $url );
        }
        if ( $embed ) {
            echo '<div class="embed-responsive embed-responsive-16by9">';
            echo $embed;
            echo '</div>';
        }
        echo '</div></div>';
    
?>