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
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    echo '<div class="blocks">';
        echo '<div class="block block--left p-md-5 py-5 text-right">';
                $posttags = get_the_tags();
                if ($posttags) {
                    echo '<div class="tags mb-2 mx-4">';
                    foreach($posttags as $tag) {
                        echo '<span>'.$tag->name.'</span>'; 
                    }
                    echo '</div>';
                }
            echo '<div class="wrap mx-4"><h3>'.get_the_title().'</h3>';
            if ( get_the_excerpt() ) {
                echo '<div class="card-text mb-2">' . get_the_excerpt() .'</div>';
                } else {
                echo '<div class="card-text mb-2">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
            }
            echo '<a href="' . get_the_permalink() .'" rel="slidemark" class="stretched-link"></a>';
        echo '</div></div>';
        echo '<div';
        if ($featured_img_url) { 
            echo ' class="block block--right" style="background-image: url('. esc_url($featured_img_url) .');">'; 
        } else {
            echo '>';
        }
        echo '</div>';
        
    echo '</div>';
?>