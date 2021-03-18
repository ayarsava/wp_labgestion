<?php
/*
Plugin Name: gba_labgestion
Description: Plugin generado por Ayar Sava para GBA_|_Laboratorio_de_Gestión
*/
/* Start Adding Functions Below this Line */


/*** Taxonomias para Territorio | Recursos ***/
function wporg_register_taxonomy_recurso() {
  $labels = [
    'name'              => _x('Tipos de recursos', 'taxonomy general name'),
    'singular_name'     => _x('Tipo de recurso', 'taxonomy singular name'),
    'search_items'      => __('Buscar recursos'),
    'all_items'         => __('Todos los recursos'),
    'parent_item'       => __('Tipo padre'),
    'parent_item_colon' => __('Tipo padre:'),
    'edit_item'         => __('Editar Tipo'),
    'update_item'       => __('Actualizar Tipo'),
    'add_new_item'      => __('Agregar nuevo Tipo'),
    'new_item_name'     => __('Nuevo nombre de recurso'),
    'menu_name'         => __('Tipo de recurso'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
  ];
  register_taxonomy('recurso', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_recurso');

/*** Taxonomias para Territorio | Area ***/
function wporg_register_taxonomy_area() {
  $labels = [
    'name'              => _x('Áreas', 'taxonomy general name'),
    'singular_name'     => _x('Área', 'taxonomy singular name'),
    'search_items'      => __('Buscar áreas'),
    'all_items'         => __('Todas las áreas'),
    'parent_item'       => __('Área padre'),
    'parent_item_colon' => __('Área padre:'),
    'edit_item'         => __('Editar área'),
    'update_item'       => __('Actualizar área'),
    'add_new_item'      => __('Agregar nueva área'),
    'new_item_name'     => __('Nuevo nombre de área '),
    'menu_name'         => __('Área'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'area', 'with_front' => false ),
  ];
  register_taxonomy('area', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_area');

/*** Taxonomias para Territorio | Hacedor ***/
function wporg_register_taxonomy_hacedor() {
  $labels = [
    'name'              => _x('Hacedores', 'taxonomy general name'),
    'singular_name'     => _x('Hacedor', 'taxonomy singular name'),
    'search_items'      => __('Buscar hacedores'),
    'all_items'         => __('Todas las hacedores'),
    'parent_item'       => __('Hacedor padre'),
    'parent_item_colon' => __('Hacedor padre:'),
    'edit_item'         => __('Editar hacedor'),
    'update_item'       => __('Actualizar hacedor'),
    'add_new_item'      => __('Agregar nueva hacedor'),
    'new_item_name'     => __('Nuevo nombre de hacedor '),
    'menu_name'         => __('Presentador/Funcionario'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'hacedor', 'with_front' => false ),
  ];
  register_taxonomy('hacedor', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_hacedor');

/*** Taxonomias para Territorio | Partido ***/
function wporg_register_taxonomy_partido() {
  $labels = [
    'name'              => _x('Partidos', 'taxonomy general name'),
    'singular_name'     => _x('Partido', 'taxonomy singular name'),
    'search_items'      => __('Buscar partidos'),
    'all_items'         => __('Todos los partidos'),
    'edit_item'         => __('Editar partido'),
    'update_item'       => __('Actualizar partido'),
    'add_new_item'      => __('Agregar nueva partido'),
    'new_item_name'     => __('Nuevo partido '),
    'menu_name'         => __('Partido'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'partido', 'with_front' => true ),
  ];
  register_taxonomy('partido', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_partido');

/*** Taxonomias para Territorio | Ciudad ***/
function wporg_register_taxonomy_ciudad() {
  $labels = [
    'name'              => _x('Ciudades', 'taxonomy general name'),
    'singular_name'     => _x('Ciudad', 'taxonomy singular name'),
    'search_items'      => __('Buscar ciudades'),
    'all_items'         => __('Todas las ciudades'),
    'edit_item'         => __('Editar ciudad'),
    'update_item'       => __('Actualizar ciudad'),
    'add_new_item'      => __('Agregar nueva ciudad'),
    'new_item_name'     => __('Nuevo ciudad '),
    'menu_name'         => __('Localidad/Ciudad'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array( 'slug' => 'ciudad', 'with_front' => true ),
  ];
  register_taxonomy('ciudad', ['experiencias'], $args);
}
add_action('init', 'wporg_register_taxonomy_ciudad');

/*** CPT SLIDER***/
function slider_init() {
  $labels = array(
      'name' => __( 'Slides', 'post type general name', 'finde-plugin' ),
      'singular_name'=> __( 'Slide', 'post type singular name', 'finde-plugin' ),
      'menu_name' => __( 'Slides', 'admin menu', 'finde-plugin' ),
      'name_admin_bar'=> __( 'Slide', 'add new on admin bar', 'finde-plugin' ),
      'add_new'   => __( 'Agregar Nuevo', 'slide', 'finde-plugin' ),
      'add_new_item'=> __( 'Agregar Nuevo Slide', 'finde-plugin' ),
      'new_item'    => __( 'Nuevo Slide', 'finde-plugin' ),
      'edit_item'     => __( 'Editar Slide', 'finde-plugin' ),
      'view_item'   => __( 'Ver Slide', 'finde-plugin' ),
      'all_items'     => __( 'Todos los Slides', 'finde-plugin' ),
      'search_items'=> __( 'Buscar Slides', 'finde-plugin' ),
      'parent_item_colon' => __( 'Parent Slides:', 'finde-plugin' ),
      'not_found'  => __( 'No hemos encontrado slides.', 'finde-plugin' ),
      'not_found_in_trash' => __( 'No encontramos slides en la papelera.', 'finde-plugin' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'slide' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 4,
    'exclude_from_search' => false,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array('category'),
  );
  register_post_type( 'slide', $args );
}
add_action( 'init', 'slider_init' );

/*** CPT TERRITORIO ***/
function custom_post_type_experiencias() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Territorio', 'Post Type General Name', 'gba_labgestion' ),
        'singular_name'       => _x( 'Territorio', 'Post Type Singular Name', 'gba_labgestion' ),
        'menu_name'           => __( 'Territorio', 'gba_labgestion' ),
        'parent_item_colon'   => __( 'Territorio padre', 'gba_labgestion' ),
        'all_items'           => __( 'Todos los registros de  Territorio', 'gba_labgestion' ),
        'view_item'           => __( 'Ver Territorio', 'gba_labgestion' ),
        'add_new_item'        => __( 'Agregar nueva registro de Territorio', 'gba_labgestion' ),
        'add_new'             => __( 'Agregar nuevo', 'gba_labgestion' ),
        'edit_item'           => __( 'Editar Registro de territorio', 'gba_labgestion' ),
        'update_item'         => __( 'Actualizar registro de Territorio', 'gba_labgestion' ),
        'search_items'        => __( 'Buscar registros de Territorio', 'gba_labgestion' ),
        'not_found'           => __( 'No encontrado', 'gba_labgestion' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'gba_labgestion' ),
    );
     
  // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'experiencias', 'gba_labgestion' ),
        'description'         => __( 'Territorio', 'gba_labgestion' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'post_tag'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 16,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-format-audio',

        'timestamp'  => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'experiencias', $args );
 
}
add_action( 'init', 'custom_post_type_experiencias', 0 );


/*** CPT BANNER ***/
function custom_post_type_banner() {
  // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Banners', 'Post Type General Name', 'gba_labgestion' ),
        'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'gba_labgestion' ),
        'menu_name'           => __( 'Banners', 'gba_labgestion' ),
        'parent_item_colon'   => __( 'Banner padre', 'gba_labgestion' ),
        'all_items'           => __( 'Todos los Banners', 'gba_labgestion' ),
        'view_item'           => __( 'Ver Banner', 'gba_labgestion' ),
        'add_new_item'        => __( 'Agregar nuevo Banner', 'gba_labgestion' ),
        'add_new'             => __( 'Agregar nuevo', 'gba_labgestion' ),
        'edit_item'           => __( 'Editar Banner', 'gba_labgestion' ),
        'update_item'         => __( 'Actualizar Banner', 'gba_labgestion' ),
        'search_items'        => __( 'Buscar Banner', 'gba_labgestion' ),
        'not_found'           => __( 'No encontrado', 'gba_labgestion' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'gba_labgestion' ),
    );
     
  // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'banner', 'gba_labgestion' ),
        'description'         => __( 'Banners', 'gba_labgestion' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'  => array( 'category'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'banner', $args );
}
add_action( 'init', 'custom_post_type_banner', 0 );

/*** META BOX ***/
add_filter( 'rwmb_meta_boxes', 'mbox_register_meta_boxes' );
function mbox_register_meta_boxes( $meta_boxes ){
  $prefix = 'mbox_';
  // metas para slider
  $meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id'         => 'mb_slide',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title'      => __( 'Campos adicionales', 'mbox' ),
    // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
    'post_types' => 'slide',
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context'    => 'side',
    // Order of meta box: high (default), low. Optional.
    'priority'   => 'low',
    // Auto save: true, false (default). Optional.
    'autosave'   => true,
    // List of meta fields
    'fields'     => array(
      //  URL
      array(
        'name' => __( 'URL', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'URL description', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
      array(
        'name'             => 'Video',
        'id'               => "{$prefix}video",
        'type'             => 'video',
      ),
      array(
        'name' => 'Sin título',
        'id'   => 'no_title',
        'type' => 'checkbox',
        'std'  => 0, // 0 or 1
      ),
      
    )
  );

  # meta_box para agendas
  $meta_boxes[] = array(
    'id'         => 'agenda',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'agenda',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(

      array(
          'name' => 'Destacado',
          'id'   => 'destacado_id',
          'type' => 'checkbox',
          'std'  => 0, // 0 or 1
      ),
      array(
        'name'       => 'Date picker',
        'id'         => 'fecha_id',
        'type'       => 'datetime',

        'timestamp'  => true,

        'js_options' => array(
          'dateFormat'      => 'dd-mm-yy',
          'showTimepicker'  => true,
          ),
        'save_format' => 'Y-m-d H:i:s',
      ),
      array(
        'name' => __( 'Enlace', 'mbox' ),
        'id'   => "enlace",
        'desc' => __( 'Ingrese el enlace', 'mbox' ),
        'type' => 'url',
        'std'  => '',
      ),
      // oembed
      array(
        'id'    => 'audiovisual',
        'name'  => 'Contenido audiovisual',
        'type'  => 'oembed',
    
        // Input size
        'size'  => 30,
      ),

    )
  );

  # meta_box para territorio
  $meta_boxes[] = array(
    'id'         => 'mb_finde_territorio',
    'title'      => __( 'Campos adicionales', 'mbox' ),
    'post_types' => 'experiencias',
    'context'    => 'normal',
    'priority'   => 'low',
    'autosave'   => true,
    'fields'     => array(
      array(
        'name' => 'Destacado',
        'id'   => 'destacado_id',
        'type' => 'checkbox',
        'std'  => 0, // 0 or 1
      ),
      array(
        'id'               => 'image_te',
        'name'             => 'Imágenes adicionales',
        'type'             => 'image_advanced',

        // Delete image from Media Library when remove it from post meta?
        // Note: it might affect other posts if you use same image for multiple posts
        'force_delete'     => false,

        // Maximum image uploads.
        'max_file_uploads' => 5,

        // Do not show how many images uploaded/remaining.
        'max_status'       => 'false',

        // Image size that displays in the edit page. Possible sizes small,medium,large,original
        'image_size'       => 'thumbnail',
      ),
      //  URL
      array(
          'name' => __( 'Sitio web del proyecto', 'mbox' ),
          'id'   => "{$prefix}url",
          'desc' => __( 'Ingrese la url del sitio del proyecto', 'mbox' ),
          'type' => 'url',
          'clone' => true,
      ),
      //  Instagram
      array(
          'name' => __( 'Instagram', 'mbox' ),
          'id'   => "{$prefix}instagram",
          'type' => 'url',
      ),
      //  Facebook
      array(
          'name' => __( 'Facebook', 'mbox' ),
          'id'   => "{$prefix}facebook",
          'type' => 'url',
      ),
      // Youtube
      array(
        'name' => __( 'Youtube', 'mbox' ),
        'id'   => "{$prefix}youtube",
        'type' => 'url',
      ),
      //  Twitter
      array(
          'name' => __( 'Twitter', 'mbox' ),
          'id'   => "{$prefix}twitter",
          'type' => 'url',
      ),
      //  Pinterest
      array(
        'name' => __( 'Pinterest', 'mbox' ),
        'id'   => "{$prefix}pinterest",
        'type' => 'url',
      ),
      //  Tiktok
      array(
        'name' => __( 'TikTok', 'mbox' ),
        'id'   => "{$prefix}tiktok",
        'type' => 'url',
      ),
      //  Whatsapp
      array(
          'name' => __( 'Correo electrónico', 'mbox' ),
          'id'   => "{$prefix}email",
          'type' => 'email',
      ),
      array(
        'name'        => 'Cargo del funcionario',
        'id'          => "{$prefix}cargo",
        'type'        => 'text',
        'desc'        => 'Sólo cuando corresponda',
      ),
      // oembed
      array(
        'id'    => 'oembed',
        'name'  => 'oEmbed(s)',
        'type'  => 'oembed',
    
        // Input size
        'size'  => 30,
      ),
    )
  );

  // metas para banners
  $meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id'         => 'mb_banner',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title'      => __( 'Campos adicionales', 'mbox' ),
    // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
    'post_types' => 'banner',
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context'    => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority'   => 'low',
    // Auto save: true, false (default). Optional.
    'autosave'   => true,
    // List of meta fields
    'fields'     => array(
      //  Imagen principal
      array(
        'name'             => 'Imagen desktop',
        'id'               => "{$prefix}imagen_desktop",
        'type'             => 'image',
        'force_delete'     => false,
      ),
      //  Imagen mobile
      array(
        'name'             => 'Imagen mobile',
        'id'               => "{$prefix}imagen_mobile",
        'type'             => 'image',
        'force_delete'     => false,
      ),
      array(
        'name' => __( 'Enlace', 'mbox' ),
        'id'   => "{$prefix}url",
        'desc' => __( 'Ingrese la url del sitio a donde desea enlazar el banner', 'mbox' ),
        'placeholder' => __( 'La url debe empezar con http:// o https://', 'mbox' ),
        'type' => 'url',
        'size'  => 50,
      ),
    )
  );

  return $meta_boxes;
}


/*** HOME - CREAR SLIDESHOW - VJ***/
if ( ! function_exists( 'wp_showSlides_fullbg_portag' ) ) {
    function wp_showSlides_fullbg() {
      global $post;
      
      // the query
      $the_query = new WP_Query( array( 
        'post_type'           => 'slide', 
        'posts_per_page'         => -1,
        'post_status'            => 'publish',
        'no_found_rows'          => true,
      ) );
      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
          $url = rwmb_meta( 'mbox_url' );
          $videos = rwmb_meta( 'mbox_video', array( 'limit' => 1 ) );
          $video = reset( $videos );
          $no_title = rwmb_meta( 'no_title' );
          ?>
          <?php
          if ($video) { 
            echo '<div class="carousel-item">';
              echo '<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >';
                echo '<source src="';
                echo $video['src'];
                echo '" type="video/mp4">';
                echo '</source>';
              echo '</video>';
              echo '<div class="container h-100" style="z-index: 2;">';
                echo '<div class="d-flex h-100 text-center align-items-center">';
                  echo '<div class="carousel-caption text-left">';
                  if( $no_title == 0 ) {
                    echo '<div class="info">';
                      echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1>';
                      echo '<div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
                    echo '</div>';
                  };
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          } else {
          if ( has_post_thumbnail() ) {
            echo '<div class="carousel-item" style="background-image: url('. $src[0] .')">';
          } else { 
            echo '<div class="carousel-item" style="background:#009aae">';
          }
              echo '<div class="container">';
                echo '<div class="carousel-caption text-left">';
                if( $no_title == 0 ) {
                  echo '<div class="info">';
                    echo '<h1><a href="'. $url .'" title="' .get_the_title().'">'.get_the_title().'</a></h1>';
                    echo '<div class="text-light">' .wp_trim_words( get_the_content(), 22, '...' ). '</div>';
                  echo '</div>';
                };
                echo '</div>';
              echo '</div>';
            echo '</div>';
          }
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        } else {
        echo 'No hemos encontrado Info.';
      };
    }
  }


/*** CONTENIDO - EX AGENDA ***/
if ( ! function_exists( 'wp_archive_contenido' ) ) {
  function wp_archive_contenido($post_category, $post_tag) {

    $args = array(
        'post_type'             => 'agenda',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
        'tag'                   => $post_tag,
    );

    // The Query
    $query_agenda = new WP_Query( $args );

    if ( $query_agenda->have_posts() ) { 
      echo '<div class="slick agenda contenido slider-nav">';
      while ( $query_agenda->have_posts() ) : $query_agenda->the_post();
          get_template_part( 'template-parts/content-contenido', get_post_type() );
      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}


/*** AGENDA DESTACADO***/
if ( ! function_exists( 'wp_archive_agenda_destacado' ) ) {
  function wp_archive_agenda_destacado($post_category) {

    $args = array(
        'post_type'             => 'agenda',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
        'meta_query' => array(
          'relation' => 'AND',
          array(
            'fecha_clause'      => array(
                'key'           => 'fecha_id',
            ),
            'destacado_clause'  => array(
                'key'           => 'destacado_id',
                'value'         => 1,
            )
          )
        ),
        'orderby'               => array( 
            'destacado_clause'  => 'DESC',
            'fecha_clause'      => 'ASC',
        ),
    );

    // The Query
    $query_agenda = new WP_Query( $args );

    if ( $query_agenda->have_posts() ) { 
      echo '<div id="agenda-destacada" class="slick slider-nav">';
      /* Start the Loop */
      $count = 1;
      while ( $query_agenda->have_posts() ) : $query_agenda->the_post();

      /* grab the url for the full size featured image */
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      $fecha = rwmb_meta( 'fecha_id' ); 
      $destacado = rwmb_meta( 'destacado_id' );
      echo '<div class="item">';
        echo '<div class="mb-md-4 mb-1 w-100 ';
          if ($destacado == 1) { 
            echo 'destacado';
          };
          echo '"';
          echo 'data-target="'. date('d-m', $fecha).'">';
          echo '<div class="card h-100">';
            if ($featured_img_url) { 
              echo '<div class="img-wrapper img-fluid card-img-top" style="background-image: url('. esc_url($featured_img_url) .');" background-size:cover;background-position: center center; height:160px;position:relative;">';
              echo '</div>';
            } 
            
            $post_tags = get_the_tags();
            if ( $post_tags ) {
              echo '<div class="tags">';
                foreach( $post_tags as $tag ) {
                echo '<span>' .$tag->name . '</span>'; 
                }
              echo '</div>';
            }
            
            echo '<div class="card-body">';
              echo '<a href="'. get_permalink() .'" class="stretched-link"></a>';
              echo '<div class="row">';
                echo '<div class="col-md-4">';
                  echo '<div class="fecha"><span class="dia">'.date('d-m', $fecha).'</span><span class="hora">'. date('H:i', $fecha).'hs</span></div>';
                echo '</div>';
                echo '<div class="col-md-11">';
                  echo the_title( '<h5 class="card-title font-weight-bold pr-3">', '</h5>' );
                  if ( get_the_excerpt() ) {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_excerpt() ), 18, '...' ) .'</div>';
                  } else {
                    echo '<div class="card-text">' . wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' ) .'</div>';
                  }
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</div>';

      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** CONVERSACIONES***/
if ( ! function_exists( 'wp_archive_conversaciones' ) ) {
  function wp_archive_conversaciones($post_category) {
    $args = array(
      'post_type'             => 'agenda',
      'posts_per_page'        => -1,
      'category_name'         => $post_category,
      'meta_query'            => array(
          'destacado_clause'  => array(
              'key'           => 'destacado_id',
              'value'         => 1,
          ),
      ),
    );
    // The Query
    $query_cartelera = new WP_Query( $args );

    if ( $query_cartelera->have_posts() ) { 
      echo '<div class="slick conversaciones_slide">';
      while ( $query_cartelera->have_posts() ) : $query_cartelera->the_post();
        get_template_part( 'layouts/card', 'conversaciones-slide' );
      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** AGENDA POR DÍA, POR CATEGORIA***/
if ( ! function_exists( 'wp_archive_agenda_por_dia' )) {
  function wp_archive_agenda_por_dia($post_category) {
    $the_query = new WP_Query([
      'post_type'              => 'agenda',
      'category_name'          => $post_category,
      'posts_per_page'         => - 1,
      'meta_query'             => array(
          'fecha_clause'       => array(
              'key'            => 'fecha_id',
          ),
      ),
      'orderby'               => array( 
          'fecha_clause'      => 'ASC',
      ),
    ]);

    // We are creating new multidimensional array
    $todos_los_eventos = [];
    $days_dias = array(
	    'Monday'=>'Lunes',
	    'Tuesday'=>'Martes',
	    'Wednesday'=>'Miércoles',
	    'Thursday'=>'Jueves',
	    'Friday'=>'Viernes',
	    'Saturday'=>'Sábado',
	    'Sunday'=>'Domingo'
    );

    while ( $the_query->have_posts() ) : $the_query->the_post();

        $fecha = rwmb_meta( 'fecha_id' ); 
        $fecha_evento = $days_dias[date('l',$fecha)].' '.date('d-m', $fecha);
        
        $todos_los_eventos[ $fecha_evento ][] = $the_query->post;
    endwhile;
    wp_reset_query();

    // And to print this:
    
    echo '<h2 class="font-weight-bold d-inline-block mr-3 titulo"><i class="fas fa-calendar-alt"></i>   Programación completa </h2>';
    echo '<div class="pasadia mx-auto">';
    foreach ( $todos_los_eventos as $fecha_evento => $eventos ) :
      echo '<h3>'.$fecha_evento.'</h3>';
    endforeach;
    echo '</div><hr>';
    echo '<div id="agenda-por-dia" class="">';
    foreach ( $todos_los_eventos as $fecha_evento => $eventos ) :
      
        echo '<div class="row">';
            foreach ( $eventos as $evento ) :
              $excerpt = get_the_excerpt($evento->ID);
              $featured_img_url = get_the_post_thumbnail_url($evento->ID,'full'); 
              $excerpt = get_the_excerpt($evento->ID);  
                              
              echo '<div class="col-15 evento">';
                  echo '<div class="row py-4 position-relative">';
                      echo '<a href="'. get_permalink($evento->ID).'" class="stretched-link"></a>';
                      echo '<div class="col-md-3 fecha">';
                          echo '<span class="dia">'.date('d-m', get_post_field('fecha_id',$evento->ID)).'</span>';
                          echo '<span class="hora">'.date('H:i', get_post_field('fecha_id',$evento->ID)).'hs</span>';
                      echo '</div>';
                      
    
                      if ($featured_img_url) { 
                          echo '<div class="col-md-3 img-wrapper img-fluid" style="background-image: url('. esc_url($featured_img_url) .');">';
                          if ($destacado == 1) { echo '<div class="ribbon ribbon-top-left"><span>DESTACADO</span></div>'; }
                          echo '</div>';
                      }
                      
                      echo '<div class="col-md-9 pl-md-4">';
                          if ($featured_img_url) { 
                            echo '<h4 class="card-title font-weight-bold">'.$evento->post_title.'</h4>';
                          } else {
                            echo '<h2 class="card-title font-weight-bold">'.$evento->post_title.'</h2>';
                          }
                          if ( $excerpt ) {
                          echo '<div class="card-text mb-2">' . $excerpt .'</div>';
                          } else {
                          echo '<div class="card-text mb-2">' . wp_trim_words( wp_strip_all_tags( $excerpt ), 18, '...' ) .'</div>';
                          }
                          $post_tags = get_the_tags($evento->ID);
                          if ( $post_tags ) {
                              echo '<div class="etiquetas">';
                              foreach( $post_tags as $tag ) {
                              echo '<span class="badge badge-primary mr-2">' .$tag->name . '</span>'; 
                              }
                              echo '</div>';
                          }
                      echo '</div>';
                  echo '</div>';
              echo '</div><!-- fin-de-item -->';
            endforeach;
        echo '</div>';
    endforeach;
    echo '</div>';
  }
}

/*** AGENDA ***/
if ( ! function_exists( 'wp_archive_cartelera_destacada' ) ) {
  function wp_archive_cartelera_destacada() {

    $args = array(
        'post_type'             => 'audiovisual',
        'posts_per_page'        => -1,
        'meta_query'            => array(
            'destacado_clause'  => array(
                'key'           => 'destacado_id',
                'value'         => 1,
            ),
        ),
    );

    // The Query
    $query_cartelera = new WP_Query( $args );

    if ( $query_cartelera->have_posts() ) { 
      echo '<div class="slick cartelera">';
      while ( $query_cartelera->have_posts() ) : $query_cartelera->the_post();
        get_template_part( 'layouts/card', 'cartelera' );
      endwhile;
      echo '</div>';
    } else {
      get_template_part( 'template-parts/content', 'none' );    
    }
  }
}

/*** BANNERS ***/
if ( ! function_exists( 'wp_archive_banners' ) ) {
  function wp_archive_banners($post_category) {

    $args = array(
        'post_type'             => 'banner',
        'posts_per_page'        => -1,
        'category_name'         => $post_category,
    );

    // The Query
    $query_banners = new WP_Query( $args );
    
    
    if ( $query_banners->have_posts() ) { 
      echo '<div class="container banner-slick py-5">';
      while ( $query_banners->have_posts() ) : $query_banners->the_post();
      /* grab the url for the full size featured image */
      $enlace = rwmb_meta( 'mbox_url' );
      $img_desktop = rwmb_meta( 'mbox_imagen_desktop', array( 'size' => 'full' ) );
      $img_mobile = rwmb_meta( 'mbox_imagen_mobile', array( 'size' => 'full' ) );

      if ($img_desktop || $img_mobile) {
      echo '<div class="item" style="background:white!important;">';
        if ($img_desktop) {
          echo '<a href="'.$enlace.'" target="_blank" title="'.get_the_title().'">';
          foreach ( $img_desktop as $image_desktop ) {
            echo '<img src="', $image_desktop['url'], '" class="img-fluid d-none d-sm-block" alt="'.get_the_title().'">';
          }
          echo '</a>';
        }
        if ($img_mobile) {
          echo '<a href="'.$enlace.'" target="_blank" title="'.get_the_title().'">';
          foreach ( $img_mobile as $image_mobile ) {
            echo '<img src="', $image_mobile['url'], '" class="mx-auto img-fluid d-block d-sm-none" alt="'.get_the_title().'">';
          }
          echo '</a>';
        }
      echo '</div>';
      }
      endwhile;
      echo '</div>';
    }
  }
}

/*** LISTAS POR TAXONOMIA TERRITORIO ***/
if ( ! function_exists( 'wp_archive_experiencias_x_recurso' ) ) {
  function wp_archive_experiencias_x_recurso($recurso, $area) {
    $args = array(
      'post_type'              => 'experiencias',
      'posts_per_page'         => -1,
      'post_status'            => 'publish',
      'no_found_rows'          => true,
      'tax_query' => array(
        'relation' => 'AND',
        array(
          'taxonomy'               => 'recurso',
          'field'                  => 'slug',
          'terms'                  => $recurso,
        ),
        array(
          'taxonomy'               => 'area',
          'field'                  => 'slug',
          'terms'                  => $area,
        ),
      )
    );

    // The Query
    $query_catalogo = new WP_Query( $args );
    // The Loop
    if ( $query_catalogo->have_posts() ) {
      $term = get_term_by('slug', $recurso, 'recurso'); 
      $tag_name = $term->name;
      if($recurso == 'capacitaciones') {
        echo '<div class="mb-1 slick-slide" style="width: 350px;"><div class="card w-100 bg-primary" ><a href="https://cursos.mp.gba.gob.ar/login/" rel="slidemark" class="stretched-link" tabindex="0" target="_blank"></a><div class="card-body position-relative"><h5 class="card-title font-weight-bold mt-2 mb-4 h1">Aula virtual</h5><div class="card-text mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div><div class="position-absolute" style="bottom:1rem; right:1rem;"><a href="https://cursos.mp.gba.gob.ar/login/" class="btn btn-outline-light" target="_blank">Conocer más</a></div></div></div></div>';
      }
      while ( $query_catalogo->have_posts() ) : $query_catalogo->the_post();
        if($recurso == 'conferencias') {
          get_template_part( 'layouts/card', 'conferencias' ); 
        } else {
          get_template_part( 'layouts/card', 'experiencias' ); 
        }
        
      endwhile;
      echo '</div>';
      wp_reset_postdata();
    }
  }
}

/*** AGREGAR SEARCH FORM AL MENU ***/
add_filter('wp_nav_menu_items','add_search_box_to_nav_menu', 10, 2);
function add_search_box_to_nav_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items."<li class='menu-header-search'><form action='/' id='searchform' method='get' class='navbar-form navbar-right'><div class='form-group'><input type='text' name='s' id='s' placeholder='Búsqueda' class='form-control'><input type='submit' class='btn btn-default' value='Ir'></div></form></li>";

    return $items;
}

/*** AGREGO EVITAR ERRORES DE MBOX POR SI SE DESACTIVA EL PLUGIN ***/
if ( ! function_exists( 'rwmb_the_value' ) ) {
    function rwmb_the_value( $key, $args = '', $post_id = null, $echo = true ) {
        return false;
    }
}