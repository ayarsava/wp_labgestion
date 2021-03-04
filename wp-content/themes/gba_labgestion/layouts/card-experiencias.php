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
    $partidos = get_the_terms( $post->ID, 'partido' );
    $areas = get_the_terms( $post->ID, 'area' );
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    
    echo '<div class="mb-1">';
    echo '<div class="card w-100">';
    echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
    if ($featured_img_url) { 
        echo '<div class="img-wrapper">';
        echo '<img src="'.$featured_img_url.'" class="img-fluid" style="height: 100%;width: 100%;object-fit: cover;max-height: 288px;">';
        echo '</div>';
    }
    
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
    
    echo '<h5 class="card-title font-weight-bold mt-2 mb-1">' . get_the_title() . '</h5>';
    if ( get_the_excerpt() ) {
        echo '<div class="card-text mb-1">' . get_the_excerpt() .'</div>';
        } else {
        echo '<div class="card-text mb-1">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
    }
    

    
    echo '</div></div></div>';

    
?>