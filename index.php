<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="padding-20">
      <div class="col-md-12 margin-top-20 elban">
        <div>
          <a><img src="holder.js/728x90?auto=yes&bg=f2f2f2&text=728x90 - 1&size=12" class="img-responsive"></a></div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="info-content margin-top-40">
        <div class="row">
          <div class="col-md-7 col-sm-7">

            <!-- SLIDE -->
            <div class="home-slider">
            <!-- INICIO DO LOOP DE SLIDE -->
          <?php

            $args = array(

              'category_name' => 'Slide',

              'post_type' => 'post',

              'posts_per_page' => 5,

            );          

          

          $the_query = new WP_Query( $args );?>



        <?php if( $the_query->have_posts() ) : 

                  while( $the_query->have_posts() ) : 

                      $the_query->the_post();  ?>       

            

            <div>

                <article class="style3 style-alt">

                  <a href="<?php the_permalink(); ?>" class="article-thumb">

                    <div class="post-thumb">

                      <div class="small-title cat"><?php $post_tags = get_the_category();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?> </div>

                      <div class="post-excerpt">

                        <div class="meta"><?php $post_tags = get_the_tags();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?></div>

                        <h3 class="h1 text-white"><?php the_title(); ?> </h3>

                        <div class="meta"><span class="comment"></span></div>

                      </div>

                      <?php

                                  

                      if ( has_post_thumbnail() ) {

                          the_post_thumbnail('post-thumbnail', array(

                              'class' => 'img-responsive slide-img',  

                          )); 

                      }

                      else {

                        // Definir o caminho da imagem default caso queira

                          echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 

                              . '/img/default.png" class="img-responsive slide-img" />';

                      }

                      ?>

                      

                    </div>

                    <div class="overlay overlay-09"></div>

                  </a>

                </article>

              </div>

        <?php endwhile;?>

        <?php else : ?>

          <div class="row">

            <div class="col-sm">

              <p class="lead"> Nenhuma publicação encontrada.</p>

            </div>

          </div>

        <?php endif; ?> 

           

            <!-- FIM DO LOOP DE SLIDE -->

            </div>

            <div class="hs-prev overlay-01"><i class="fa fa-angle-left"></i></div>

            <div class="hs-next overlay-01"><i class="fa fa-angle-right"></i></div>

          </div>





          <!-- AREA DE  DESTAQUE -->





          <div class="col-md-5 col-sm-5">  <!-- Informações  1 --> 

            <!-- INICIO DO LOOP DE DESTAQUES -->

          <?php

            $args = array(

              'category_name' => 'Destaque',

              'post_type' => 'post',

              'posts_per_page' => 3,

            );          

          

          $the_query = new WP_Query( $args );?>



        <?php if( $the_query->have_posts() ) : 

                  while( $the_query->have_posts() ) : 

                      $the_query->the_post();  ?>       

            

            <article class="style2 style-alt cor-cat-saude"> <!-- Informações  2 --> 

              <div class="row"> <!-- Informações  3 --> 

                <div class="col-md-5 col-sm-5"> <!-- Informações  4 --> 

                  <a href="<?php the_permalink(); ?>">

                    <div class="article-thumb"> <!-- Informações  5 --> 

                       <?php

                                  

                      if ( has_post_thumbnail() ) {

                          the_post_thumbnail('post-thumbnail', array(

                              'class' => 'img-responsive slide-img-direita',  

                          )); 

                      }

                      else {

                        // Definir o caminho da imagem default caso queira

                          echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 

                              . '/img/default.png" class="img-responsive slide-img-direita" />';

                      }

                      ?>

                    </div>

                  </a></div>



                <div class="col-md-7 col-sm-7"> <!-- Informações  7 --> 

                  <div class="post-excerpt no-padding"> <!-- Informações  8 --> 

                    <div class="meta"><span></span>

                  </div>

                  <span>

                        <?php $post_tags = get_the_tags();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?>

                        </span>

                    <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>

                    <small><?php the_time('j \d\e F \d\e Y'); ?></small><br>

                    <small><?php comments_popup_link('Não há Comentários »', '1 Comentário »', '% Comentários »'); ?></small>

                  </div>

                </div>

              </div>

            </article>

          <?php endwhile;?>

        <?php else : ?>

          <div class="row">

            <div class="col-sm">

              <p class="lead"> Nenhuma publicação encontrada.</p>

            </div>

          </div>

        <?php endif; ?> 

            <!-- FIM DO LOOP DE DESTAQUES -->



            

          </div>

        </div>

      </div>

    </div>

  </div>

</div>



<!-- CATEGORIA POLICIAL -->



<div class="container">

  <div class="row">

     <div class="col-md-12 col-sm-12">

      <h2 class="margin-bottom-15 cor-cat-policia">

      <?php

            $category_id = get_cat_ID( 'Polícial' );

            $category_link = get_category_link( $category_id );

        ?>

        

        <a href="<?php echo esc_url( $category_link ); ?>" title="Polícial"><b>Polícial</b></a>

      

      </h2>

      <div class="row">



      <!-- Loop da primeira noticia policial mais recente -->

    <?php

    $primeiroPost;

      $args = array(

        'category_name' => 'Polícial',

        'posts_per_page' => 1,

      );



      $the_query = new WP_Query($args); ?>



      <?php if ($the_query->have_posts()) :

        while ($the_query->have_posts()) :

          $the_query->the_post(); 

          

        $primeiroPost = get_the_ID();

         ?>



          <div class="col-md-4 col-sm-4">

              <article class="style4 style-alt margin-bottom-10">

                <a href="<?php the_permalink(); ?>" class="article-thumb">

                  <div class="post-thumb">

                    <div class="post-excerpt">

                      <div class="meta"><span>

                      <?php $post_tags = get_the_tags();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?>

                        </span>

                       </div>

                      <h4 class="text-white"><?php the_title(); ?></h4>

                    </div>

                    <?php

                      if (has_post_thumbnail()) {

                          the_post_thumbnail('post-thumbnail', array(

                            'class' => 'img-responsive img-esq-dest',

                          ));

                        } else {

                          // Definir o caminho da imagem default caso queira

                          echo '<img src="' . get_bloginfo('stylesheet_directory')

                            . '/img/default.png" class="img-responsive img-esq-dest"/>';

                        }

                        ?>

                  </div>

                  <div class="overlay overlay-09"></div>

                </a>

              </article>

            </div>



        <?php endwhile; ?>

      <?php else : ?>

        <div class="row">

          <div class="col-sm">

            <p class="lead"> Nenhuma publicação encontrada.</p>

          </div>

        </div>

      <?php endif; ?>

      <!-- Final do loop  da primeira noticia policial mais recente -->



      <!-- Loop da segunda e terceira noticia policial mais recente -->

<?php

$args = array(

  'category_name' => 'Polícial',

  'taxonomies'  => array( 'category' ),

  'posts_per_page' => 2,

  'post__not_in' => array($primeiroPost),

);



$the_query = new WP_Query($args); ?>



<?php if ($the_query->have_posts()) : ?>

  <div class="col-md-5 col-sm-5">

    <div class="mini-posts">

      <?php while ($the_query->have_posts()) :

        $the_query->the_post();  ?>

        <article class="style2 style-alt cor-cat-policia">

            <div class="row">

              <div class="col-md-5 col-sm-5">

                <a href="<?php the_permalink(); ?>">

                  <div class="article-thumb">

                  <?php

                if (has_post_thumbnail()) {

                    the_post_thumbnail('post-thumbnail', array(

                      'class' => 'img-responsive img-meio-dest',

                    ));

                  } else {

                    // Definir o caminho da imagem default caso queira

                    echo '<img src="' . get_bloginfo('stylesheet_directory')

                      . '/img/default.png" class="img-responsive img-meio-dest" />';

                  }

                  ?>

                  </div>

                </a>

              </div>

              <div class="col-md-7 col-sm-7">

                <div class="post-excerpt no-padding">

                  <div class="meta"><span>

                        <?php $post_tags = get_the_tags();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?>

                        </span></div>

                  <h4>

                    <a href="<?php the_permalink(); ?>">

                    <?php the_title(); ?>

                      </a>

                  </h4>

                  <small><?php the_time('j \d\e F \d\e Y') ?> Publicado Por <?php the_author_posts_link() ?></small><br>

                    <small><?php comments_popup_link('Não há Comentários »', '1 Comentário »', '% Comentários »'); ?></small>

                </div>

              </div>

            </div>

          </article> 



          

      <?php endwhile; ?>

    </div>

  </div> 

<?php else : ?>

  <div class="row">

    <div class="col-sm">

      <p class="lead"> Nenhuma publicação encontrada.</p>

    </div>

  </div>

<?php endif; ?>







        <!-- BANNER  300X300 2 -->



        <div class="col-md-3 col-sm-3 elban no-padding">

          <div><a><img src="holder.js/300x300?auto=yes&bg=f2f2f2&text=300x300 - 1&size=12" class="img-responsive"></a></div>

        </div>

      </div>

    </div>



    <!-- BANNER  728X90 2 -->

    <div class="col-md-12 col-sm-12 margin-bottom-30 margin-top-40 elban">

      <div><a><?php if(function_exists( 'wp_bannerize' ))	wp_bannerize( 'group=728x90' ); ?></a></div>

    </div>
  </div>
        

      <!--<img src="https://luiscardoso.com.br/wp-content/uploads/2020/01/youtube_notification_2020A.gif" class="img-responsive"></a></div>

    </div>-->

<!------------------------------------------------------------------------------------ELEIÇÕES 2020 APURAÇÃO-------------------------------------------------------------------------------------------->
<!--<div class="alert alert-success" role="alert"><h1>Eleições 2020  - Apuração dos Votos por Zona/Seções</h1></div>
<iframe class="embed-responsive-item"
src="http://inter04.tse.jus.br/ords/eletse/f?p=111:1::PESQUISAR:NO:::" height="400px" width="100%" frameborder="0" scrolling="auto">Você precisa de um navegador compatível com iframes para visualizar este conteúdo.</iframe>-->

<!------------------------------------------------------------------------------------ELEIÇÕES 2020 APURAÇÃO-------------------------------------------------------------------------------------------->

<!--------------------------------------------ESPECIAL CORONAVÍRUS------------------------------------------>
<div class="alert alert-success" role="alert"><h1>Estatísticas de casos confirmado de coronavírus no Brasil.</h1></div>
<iframe class="embed-responsive-item" src="https://datawrapper.dwcdn.net/M2Eyg/41/" height="500" width="100%" frameborder="0" scrolling="auto"></iframe>
<!--------------------------------------------ESPECIAL CORONAVÍRUS------------------------------------------>


    <!-- CATEGORIA POLÍTICA -->



    <div class="col-md-12 col-sm-12">

      <h2 class="margin-bottom-15 cor-cat-politica">

        <!-- PEGA O LINK PERSONALIZADO DO WORDPRESS E COLOCA DE TITULO DA CATEGORIA -->

      <?php

        $category_id = get_cat_ID( 'Politica' );

        $category_link = get_category_link( $category_id );

      ?>



      <a href="<?php echo esc_url( $category_link ); ?>" title="Politica"><b>Politica</b></a>



        <!-- PEGA O LINK PERSONALIZADO DO WORDPRESS E COLOCA DE TITULO DA CATEGORIA -->



       </h2>

      <div class="row padding-bottom-30">

        <!-- loop da Primeira Noticias politica-->

        <div>

        

        <?php

            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(

              'category_name' => 'Política',

              'post_type' => 'post',

              'posts_per_page' => 4,

              'paged' => $paged

            );          

          

          $the_query = new WP_Query( $args );?>



        <?php if( $the_query->have_posts() ) : 

                  while( $the_query->have_posts() ) : 

                      $the_query->the_post();  ?>       



          <div class="col-md-3 col-sm-3">

            <article class="style2 style-alt cor-cat-politica"> <a href="<?php the_permalink(); ?>"class="margin-bottom-15"> 

              <div class="margin-bottom-15">

              <div class="article-thumb">

              <?php

                      if (has_post_thumbnail()) {

                          the_post_thumbnail('post-thumbnail', array(

                            'class' => 'img-responsive img-style4',

                          ));

                        } else {

                          // Definir o caminho da imagem default caso queira

                          echo '<img src="' . get_bloginfo('stylesheet_directory')

                            . '/img/default.png" class="img-responsive img-style4"/>';

                        }

                        ?>  

              </div>

                </a></div>

              <div>

                <div class="post-excerpt no-padding">

                  <div class="meta">

                    <span>

                    <?php $post_tags = get_the_tags();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?> 

                          </span>

                          </div>

                  <h4 ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                  </div>

              </div>

            </article>

          </div>

          <?php endwhile; ?>

      <?php else : ?>

        <div class="row">

          <div class="col-sm">

            <p class="lead"> Nenhuma publicação encontrada.</p>

          </div>

        </div>

      <?php endif; ?>

          



        </div>

      </div>

    </div>

<!-- CATEGORIA ENTRETENIMENTO -->



<div class="col-md-12 col-sm-12">

      <h2 class="margin-bottom-15 cor-cat-entretenimento">

        <a href="/portal/entretenimento/"><b>Entretenimento</b></a> </h2>

      <div class="row">

        <!-- Loop da primeira noticia policial mais recente -->

    <?php

    $primeiroPost;

      $args = array(

        'category_name' => 'Entretenimento',

        'posts_per_page' => 1,

      );



      $the_query = new WP_Query($args); ?>



      <?php if ($the_query->have_posts()) :

        while ($the_query->have_posts()) :

          $the_query->the_post(); 

          

        $primeiroPost = get_the_ID();

         ?>



          <div class="col-md-4 col-sm-4">

              <article class="style4 style-alt margin-bottom-10"><a href="<?php the_permalink(); ?>" class="article-thumb">

                  <div class="post-thumb">

                    <div class="post-excerpt">

                    <div class="meta">

                      <span>

                        <?php $post_tags = get_the_tags();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?>

                        </span>

                      </div>

                      <h4 class="text-white"><?php the_title(); ?></h4>

                    </div>

                    <?php

                      if (has_post_thumbnail()) {

                          the_post_thumbnail('post-thumbnail', array(

                            'class' => 'img-responsive img-esq-dest',

                          ));

                        } else {

                          // Definir o caminho da imagem default caso queira

                          echo '<img src="' . get_bloginfo('stylesheet_directory')

                            . '/img/default.png" class="img-responsive img-esq-dest"/>';

                        }

                        ?>

                  </div>

                  <div class="overlay overlay-09"></div>

                </a>

              </article>

            </div>



        <?php endwhile; ?>

      <?php else : ?>

        <div class="row">

          <div class="col-sm">

            <p class="lead"> Nenhuma publicação encontrada.</p>

          </div>

        </div>

      <?php endif; ?>

      <!-- Final do loop  da primeira noticia policial mais recente -->



      <!-- Loop da segunda e terceira noticia policial mais recente -->

<?php

$args = array(

  'category_name' => 'Entretenimento',

  'posts_per_page' => 2,

  'post__not_in' => array($primeiroPost),

);



$the_query = new WP_Query($args); ?>



<?php if ($the_query->have_posts()) : ?>

  <div class="col-md-5 col-sm-5">

    <div class="mini-posts">

      <?php while ($the_query->have_posts()) :

        $the_query->the_post();  ?>

        <article class="style2 style-alt cor-cat-policia">

            <div class="row">

              <div class="col-md-5 col-sm-5">

                <a href="<?php the_permalink(); ?>">

                  <div class="article-thumb">

                  <?php

                if (has_post_thumbnail()) {

                    the_post_thumbnail('post-thumbnail', array(

                      'class' => 'img-responsive img-meio-dest',

                    ));

                  } else {

                    // Definir o caminho da imagem default caso queira

                    echo '<img src="' . get_bloginfo('stylesheet_directory')

                      . '/img/default.png" class="img-responsive img-meio-dest" />';

                  }

                  ?>

                  </div>

                </a>

              </div>

              <div class="col-md-7 col-sm-7">

                <div class="post-excerpt no-padding">

                <div class="meta">

                      <span>

                        <?php $post_tags = get_the_tags();

                          if ( $post_tags ) {

                              echo $post_tags[0]->name; 

                          } ?>

                        </span>

                      </div>

                  <h4>

                    <a href="<?php the_permalink(); ?>">

                    <?php the_title(); ?>

                    </a>

                  </h4>

                  <small><?php the_time('j \d\e F \d\e Y') ?> Publicado Por <?php the_author_posts_link() ?></small><br>

                    <small><?php comments_popup_link('Não há Comentários »', '1 Comentário »', '% Comentários »'); ?></small>

                </div>

              </div>

            </div>

          </article> 



          

      <?php endwhile; ?>

    </div>

  </div> 

<?php else : ?>

  <div class="row">

    <div class="col-sm">

      <p class="lead"> Nenhuma publicação encontrada.</p>

    </div>

  </div>

<?php endif; ?>



<!-- Fim do Loop da segunda e terceira noticia policial mais recente -->



        <!-- BANNER  300X300 3 -->



        <div class="col-md-3 col-sm-3 elban no-padding">

          <div><a><img src="holder.js/300x300?auto=yes&bg=f2f2f2&text=300x300 - 2&size=12" class="img-responsive"></a></div>

        </div>

      </div>

    </div>



    <!-- BANNER  728X90 3 -->



    <div class="col-md-12 col-sm-12 margin-bottom-30 elban">

      <div><a><img src="holder.js/728x90?auto=yes&bg=f2f2f2&text=728x90 - 3&size=12" class="img-responsive"></a></div>

    </div>



    <!-- CATEGORIA TECNOLOGIA -->



    <div class="col-md-12 col-sm-12">

      <h2 class="margin-bottom-15 cor-cat-tecnologia">

        <!-- PEGA O LINK PERSONALIZADO DO WORDPRESS E COLOCA DE TITULO DA CATEGORIA -->

      <?php

        $category_id = get_cat_ID( 'Estado' );

        $category_link = get_category_link( $category_id );

      ?>



      <a href="<?php echo esc_url( $category_link ); ?>" title="Estado"><b>Estado</b></a>



        <!-- PEGA O LINK PERSONALIZADO DO WORDPRESS E COLOCA DE TITULO DA CATEGORIA -->



       </h2>

      <div class="row padding-bottom-30">

        <!-- loop da Primeira Noticias politica-->

        <div>

        

        <?php

            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(

              'category_name' => 'Estado',

              'post_type' => 'post',

              'posts_per_page' => 4,

              'paged' => $paged

            );          

          

          $the_query = new WP_Query( $args );?>



        <?php if( $the_query->have_posts() ) : 

                  while( $the_query->have_posts() ) : 

                      $the_query->the_post();  ?>       



          <div class="col-md-3 col-sm-3">

            <article class="style2 style-alt cor-cat-politica"> <a href="<?php the_permalink(); ?>"class="margin-bottom-15"> 

              <div class="margin-bottom-15">

              <div class="article-thumb">

              <?php

                      if (has_post_thumbnail()) {

                          the_post_thumbnail('post-thumbnail', array(

                            'class' => 'img-responsive img-style4',

                          ));

                        } else {

                          // Definir o caminho da imagem default caso queira

                          echo '<img src="' . get_bloginfo('stylesheet_directory')

                            . '/img/default.png" class="img-responsive img-style4"/>';

                        }

                        ?>  

              </div>

                </a></div>

<div>

<div class="post-excerpt no-padding">

<div class="meta">

<span>

<?php $post_tags = get_the_tags();   if ( $post_tags ) {  echo $post_tags[0]->name;  } ?> 

</span>

</div>

<h4 ><a href="<?php the_permalink(); ?>">

<?php the_title(); ?></a>

</h4>

<small><?php the_time('j \d\e F \d\e Y') ?> Publicado Por <?php the_author_posts_link() ?></small><br>

<small><?php comments_popup_link('Não há Comentários »', '1 Comentário »', '% Comentários »'); ?></small>

                  </div>

              </div>

            </article>

          </div>

          <?php endwhile; ?>

      <?php else : ?>

        <div class="row">

          <div class="col-sm">

            <p class="lead"> Nenhuma publicação encontrada.</p>

          </div>

        </div>

      <?php endif; ?>

       </div>
     </div>
    </div>



<!-------------------------------------------- POTS DA CATEGORIA ESTADO ------------------------------------->





<!------------------------------------ COLUNISTAS ------------------------------------------->

<div class="col-md-12 col-sm-12">
    <h2 class="margin-bottom-15 cor-cat-politica"><b>Blogs & Colunas </b> </h2>
    <div id="blogsecolunas" class="row padding-bottom-30">


      <!-- Swiper -->
      
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<style>
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
/*       display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center; */
    }
</style>

<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <div class="swiper-container">
    <div class="swiper-wrapper">
<!-- LOOP -->
<?php
$users = get_users();
foreach ($users as $user) {?>
<?php 
    $img = get_field('img_fundo', 'user_'.  $user->ID );
    $img_fundo = get_field('fundo', 'user_'.  $user->ID );
?>


<div class="swiper-slide">
    <article class="card style2 style-alt">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <a href="<?php echo esc_url( get_author_posts_url( $user->ID ) ); ?>">
                    <div class="article-thumb circular" style="background: url(<?php echo $img_fundo; ?>) center center #000;">
                        <img src="<?php echo $img; ?>" class="img-responsive img-meio-dest" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-7 col-sm-7 text-left">
                <div class="post-excerpt no-padding">
                    <div class="meta margin-bottom-10">
                        <a href="<?php echo esc_url( get_author_posts_url( $user->ID ) ); ?>" style="color:#FFEE34">
                            <h3><?php echo $user->display_name; ?></h3>
                        </a>
                    </div>
					<?php 
					$args = array(
						'author' => $user->ID,
						'orderby' => 'date',
						'order'   => 'DESC',
						'posts_per_page' => 1
					);

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) :
						while ($the_query->have_posts()) :
							$the_query->the_post();  ?>
					
                    <a href="<?php the_permalink(); ?>" style="color:#FFEE34">
                        <div class="meta"><span>
							<?php $post_tags = get_the_tags();
									if ($post_tags) {
										echo $post_tags[0]->name;
									} ?>
							</span></div>
                        <h5><?php the_title(); ?></h5>
                    </a>
					
            		<?php endwhile; ?>					
            		<?php endif; ?>
					
                </div>
            </div>
        </div>
    </article>     
</div>


<?php } ?>
        
<!-- LOOP -->
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>


    
    </div>
</div>


    <!-- CATEGORIA VIDEO  -->

<div class="col-md-12 col-sm-12">
     
     <h2 class="margin-bottom-15">
     <a href="<?php the_permalink(); ?>"><b>Vídeos </b></a> </h2>
     <div class="row">
     <?php
           $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
           $args = array(
             'category_name' => 'Vídeos',
             'post_type' => 'post',
             'posts_per_page' => 3,
             'paged' => $paged
           );          
         
         $the_query = new WP_Query( $args );?>

       <?php if( $the_query->have_posts() ) : 
                 while( $the_query->have_posts() ) : 
                     $the_query->the_post();  ?> 
       <div class="col-md-4 col-sm-4">
         <article class="article-home margin-bottom-20"><a href="<?php the_permalink(); ?>">
             <div class="article-thumb">
               <div class="play-time"><?php $post_tags = get_the_tags();   if ( $post_tags ) {  echo $post_tags[0]->name;  } ?> </div>
               <div class="play"></div>
               <div class="overlay overlay-02"></div><?php
                     if (has_post_thumbnail()) {
                         the_post_thumbnail('post-thumbnail', array(
                           'class' => 'img-responsive ',
                         ));
                       } else {
                         // Definir o caminho da imagem default caso queira
                         echo '<img src="' . get_bloginfo('stylesheet_directory')
                           . '/img/default.png" class="img-responsive img-style4"/>';
                       }
                       ?> 
             </div>
           </a>
         
           <div class="post-excerpt">
             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
           </div>
         </article>
       </div>
 <?php endwhile; ?>
     <?php else : ?>
       <p class="lead"> Nenhuma publicação encontrada.</p>
       <?php endif; ?>
       
     </div>
   </div>
   <div class="col-md-12 col-sm-12 margin-bottom-30 elban">
     <div><a><img src="holder.js/728x90?auto=yes&bg=f2f2f2&text=728x90 - 4&size=12" class="img-responsive"></a></div>
   </div>
 </div>
</div>


<?php get_footer(); ?>