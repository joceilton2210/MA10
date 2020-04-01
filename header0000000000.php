<!DOCTYPE html>

<html <?php language_attributes(); ?>>



<head>

  <meta <?php bloginfo('charset'); ?>>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta name="theme-color" content="#4c47d7">

  <title><?php bloginfo('name') ?></title>

 <!---------------------------------------- CSS DO SITE ---------------------------------------->

 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type='text/css' />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css " type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jp.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ts.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/video-js.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cores-categorias.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" type='text/css'>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/weather-icons.min.css" type='text/css'>

 <!---------------------------------------- CSS DO SITE ---------------------------------------->

<script src="<?php bloginfo('template_url') ?>/js/video.min.js"></script>

<script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>

<script src="<?php bloginfo('template_url') ?>/js/slick.min.js"></script>

<script src="<?php bloginfo('template_url') ?>/js/affix.js"></script>

<script src="<?php bloginfo('template_url') ?>/js/previsao.js"></script>

<script src="<?php bloginfo('template_url') ?>/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js?v2.0v2110"></script>

<script async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>

 <!---------------------------------------- JS DO SITE ----------------------------------------> 

</head>



<body>



  <div class="body-overlay"></div>

  <div id="sidebar-wrapper" class="">

    <div class="search-alt pull-left">

      

    </div>



    <!-- MENU  TOP-->



    <ul class="nav navbar-nav">

      <?php

      wp_nav_menu(array(

        'theme_location'    => 'lateral',

        'depth'             => 2,

        'container'         => 'div',

        'container_class'   => 'collapse navbar-collapse',

        'container_id'      => 'bs-example-navbar-collapse-1',

        'menu_class'        => 'nav navbar-nav',

        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

        'walker'            => new WP_Bootstrap_Navwalker(),

      ));

      ?>



    </ul>

  </div>

  <!-- MENU  TOP -->



  <!-- MENU MOBILE LATERAL -->



<div class="wrapper">
<header class="header header4 header5">
<nav class="navbar navbar-default" role="navigation">
<div class="container">
 <div class="nav-trigger">
<span>
</span>
<span>
</span>
<span>
</span>
</div>
<div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>



            <!-- LOGOMARCA DO SITE -->

            <a href="http://127.0.0.1/oficial/">

              <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
              if (has_custom_logo()) {
                echo '<img src="' . esc_url($logo[0]) . '" class="navbar-brand">';
              } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
                echo '<p class="lead">' . get_bloginfo('description') . '</p>';
              }
              ?>
 </div></a>

              <!-- BUSCA DO SITE -->
 <form action="<?php echo get_home_url(); ?>/" class="search-alt pull-right hidden-xs">
 <input type="text" placeholder="Buscar" >
 </form></div>



              <!-- BUSCA DO SITE -->



              <div class="pull-right margin-top-20 previsao-tempo"><span class="prev-temperatura"></span>

                <span class="prev-icone"></span>

                <span class="prev-min-max"></span>

                <span class="prev-condicoes"></span>

                <span class="prev-cidade"></span></div>

          </div>

      </nav>

      <!-- Collect the nav links, forms, and other content for toggling -->


<div class="nav-dark affix-top" data-spy="affix" data-offset="188">
<div class="container">
<a href="https://www.noticiaspluma.com.br/" class="logo-affix"></a>
<div class="collapse navbar-collapse navbar-ex1-collapse pull-left mobilemenu">
<ul class="nav navbar-nav" id="#myMenu">

<li class="omenu-home">
<?php

wp_nav_menu(array(

  'theme_location'    => 'topo',

  'depth'             => 2,

  'container'         => 'div',

  'container_class'   => 'collapse navbar-collapse',

  'container_id'      => 'bs-example-navbar-collapse-1',

  'menu_class'        => 'nav navbar-nav',

  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

  'walker'            => new WP_Bootstrap_Navwalker(),

));

?>

</li></ul></div>

<div class="navbar-rede pull-right">
<a href="https://www.facebook.com/facebook" target="_blank"><img src="https://www.noticiaspluma.com.br/hf-conteudo/templates/the-big-journal/img/rede/f.png" class="img-responsive" alt="Facebook"></a>
<a href="https://twitter.com/twitter?utm_source=www.noticiaspluma.com.br&amp;utm_medium=referral&amp;utm_content=portal_primenews&amp;utm_campaign=hotfixpress" target="_blank"><img src="https://www.noticiaspluma.com.br/hf-conteudo/templates/the-big-journal/img/rede/t.png" class="img-responsive" alt="Twitter"></a>
<a href="https://www.instagram.com/instagram?utm_source=www.noticiaspluma.com.br&amp;utm_medium=referral&amp;utm_content=portal_primenews&amp;utm_campaign=hotfixpress" target="_blank"><img src="https://www.noticiaspluma.com.br/hf-conteudo/templates/the-big-journal/img/rede/i.png" class="img-responsive" alt="Instagram"></a>

</div></div></div>
<!-- /.navbar-collapse -->

    </header>
    <div class="wrapper">
      <div class="row breakingnews-fundo">
        <div class="col-md-12">
          <div class="breakingNews-borda">
            <div class="breakingNews" id="bn4">
              <div class="bn-title" style="width: auto;">
                <h2 style="display: inline-block;">Últimas Notícias </h2><span></span>
              </div>
              <?php

              $args = array(

                'post_type' => 'post',

                'posts_per_page' => 5,

              );          

          

              $the_query = new WP_Query( $args );?>



              <?php if( $the_query->have_posts() ) : ?>

                <marquee class="breakingNews-news" onmouseover="this.stop();" onmouseout="this.start();">



                  <?php  while( $the_query->have_posts() ) : 

                      $the_query->the_post();  ?>       

               

               <a href="<?php the_permalink(); ?>">

               <span>

                 <?php $post_tags = get_the_category();

                        if ( $post_tags ) {

                            echo $post_tags[0]->name; 

                        } ?> 

                </span> 

                <?php the_title(); ?> </a><i> </i>

            

        <?php endwhile;?>

        </marquee>

        <?php else : ?>

          <marquee class="breakingNews-news" onmouseover="this.stop();" onmouseout="this.start();">

            <a href="#"><span>Em Breve!</span> Acompanhe as ultimas notícias aqui!</a> <i> </i>

          </marquee>

        <?php endif; ?> 

            </div>

          </div>

        </div>

      </div>

    </div>