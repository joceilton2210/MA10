<?php



// Executa as funções que precisam de suporte do tema

function lc_theme_support() {

    // Cria a tag de título do site

    add_theme_support('title-tag');



    // Suporte para logotipo personalizado

    add_theme_support('custom-logo');



  // Registra o Custom Navigation Walker

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

}

add_action('after_setup_theme', 'lc_theme_support');



if (!function_exists('wp_render_title_tag')) {

    function lc_render_title() {

        ?> <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title> <?php

    }

    add_action('wp_head', 'lc_render_title');

}



// Registra os menus no tema

register_nav_menus( array(

    'topo'   =>  __('Menu no topo', 'livecred'),

    'lateral'   =>  __('Menu no lateral', 'livecred'),
    'redesocial'   =>  __('Menu no social', 'livecred'),

    'blogs'   =>  __('Menu no blogs', 'livecred'),

    'inicio'   =>  __('Menu no inicio blogs', 'livecred'),

    'rodape' =>  __('Menu no rodapé', 'livecred')

  

));



// Definir o tamanho das miniaturas

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 1280, 720, true );





// Definir o tamanho do resumo

add_filter( 'excerpt_length', function($length) {

    return 20;

});

add_filter('excerpt_more', function($more) {

    return '...';

});



// Definir o estilo da paginação

add_filter('next_posts_link_attributes', 'posts_link_attributes');

add_filter('previous_posts_link_attributes', 'posts_link_attributes');



function posts_link_attributes() {

    return 'class="btn btn-lc-orange"';

}



register_sidebar(

    array(

        'name' => 'Busca',

        'id' => 'busca',

        'before_widget' => '<div class="card bg-lc-gray border-0 mb-4"><div class="card-body">',

        'after_widget' => '</div></div>',

        'before_title' => '<h5>',

        'after_title' => '</h5>'

));



register_sidebar(

    array(

        'name' => 'Cards',

        'id' => 'cards',

        'before_widget' => '',

        'after_widget' => '',

        'before_title' => '',

        'after_title' => ''

));



add_filter('single_template', 'create_single_template');



function create_single_template( $template ) {

	global $post;



	$categories = get_the_category();

	// caso não tenhamos categoria retornamos o template default.

	if ( ! $categories )

			return $template; 



	//resgatando o post type

	$post_type = get_post_type( $post->ID );



	$templates = array();



	foreach ( $categories as $category ) {

			// adicionando templates por id e slug

			$templates[] = "single-{$post_type}-{$category->slug}.php";

			$templates[] = "single-{$post_type}-{$category->term_id}.php";

	}



	// adicionando os templates padrões

	$templates[] = "single-{$post_type}.php";

	$templates[] = 'single.php';

	$templates[] = 'singular.php';

	$templates[] = 'index.php';



	return locate_template( $templates );

}



// dentro do loop

if ( in_category( 'Política' ) ) {

	get_template_part( 'template-parts/content', 'Política' );

} else {

	get_template_part( 'template-parts/content', 'post' );

}



// CRIAR A BARRA LATERAL



        // Area 1, located at the top of the sidebar.

        register_sidebar( array(

          'name' => __( 'Barra Lateral', 'starkers' ),

          'id' => 'side-widget',

          'description' => __( 'The primary widget area', 'starkers' ),

          'before_widget' => '<div>',

          'after_widget' => '</div>',

          'before_title' => '<h4>',

          'after_title' => '</h4>',

        ) );



        function special_nav_class ($classes, $item) {

            if (in_array('current_page_item', $classes) ){

              $classes[] = 'active ';

            }

            return $classes;

          }

          

          add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

          function custom_author_notification( $post_id )
{
    $post = get_post( $post_id );
    $author = get_userdata( $post->post_author );
    // verificações
    $msg = sprintf(
        'Olá %s, 
        Materia "%s" acaba de ser publicado! 
        Veja: %s',
        $author->display_name,
        $post->post_title,
        get_permalink( $post )
    );

    wp_mail( $author->user_email, 'Seu post foi publicado!', $msg );
}

add_action( 'publish_post', 'custom_author_notification' );
