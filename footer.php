<?php wp_head();?>



<footer><div class="container">
<div class="footer-head">
<div class="row center-content">
<div class="col-md-2 col-sm-3"><h3>Newsletter </h3></div>
<div class="col-md-4 col-sm-4"><p>Receba as principais notícias em seu e-mail.</p></div>
<div class="col-md-6 col-sm-5 text-white">
<form class="footer-newsletter" action="" method="post">
<input type="text" name="news_email" placeholder="Digite seu e-mail">
<button type="submit">Inscreva-se</button></form>
</div></div></div> <div class="footer-content">

<div class="row">
<div class="col-md-2 col-sm-2">
<div class="space10"></div>
<a href="http://127.0.0.1/portal/">

<?php
          
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

            if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" class="space10">';
            } else {
              echo '<h1>' . get_bloginfo('name') . '</h1>';
              echo '<p class="lead">' . get_bloginfo('description') . '</p>';
            }
          
          ?>


<div class="space30"></div>

<p class="p-rodape"></p></div>
<div class="col-md-2 col-sm-2">
<h5 class="text-white">Categorias </h5>
<ul class="footer-links">
<!--
<?php
              wp_nav_menu( array(
                'theme_location'    => 'rodape',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'p-rodape',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
              ?>
-->

<li></li></ul></div>




<div class="col-md-2 col-sm-2">
<h5 class="text-white">Mais conteúdo</h5>
<ul class="footer-links"><li><a href="#">Vídeos </a></li>
<li><a href="#">Fotos </a></li></ul></div></div></div>
 <div class="footer-bottom"><div class="row">
 <div class="col-md-6 col-sm-6"><p>&copy; 2020 G-Designer  - Todos os direiros reservados .</p>
 </div>
<div class="col-md-6 col-sm-6 text-right">
<div class="footer-social2">Siga-nos: <a href="https://www.facebook.com/facebook" target="_blank">
<img src="/img/rede/1.png" alt="Facebook"/></a><a href="https://twitter.com/twitter" target="_blank">
<img src="/img/rede/2.png" alt="Twitter"/></a><a href="https://www.instagram.com/instagram" target="_blank">
<img src="/img/rede/4.png" alt="Instagram"/></a><a href="https://youtube.com/" target="_blank">
<img src="/img/rede/5.png" alt="Youtube"/></a></div></div></div></div></div></div>

<script src="<?php bloginfo('template_url') ?>/js/video.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/theme.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/js/affix.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/previsao.js"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js?v2.0v2110"></script>

  </body></html> 
  <?php wp_footer(); ?>