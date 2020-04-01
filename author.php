<?php get_header(); ?>


<div class="wrapper">
<div class="container">
</div>
</div>
  <div class="search-trigger pull-right maxh70"></div><div class="login pull-right maxh70"></div>
  
  
<!----------------------------------------------------COLOCAR FOTO E IMAGEM DE FUNDO-------------------------------------------------------------->
<?php 
  
$author = get_user_by( 'slug', get_query_var( 'author_name' ) );

$author_id = $author->ID;
  
$img_fundo = get_field('img_fundo', 'user_'. $author_id );
$img = get_field('fundo', 'user_'. $author_id );
 ?>
 
    <style>.header-coluna {  background: url(<?php echo $img; ?>) center center #000;  background-size: cover;  height: 300px;  z-index: 999999;
}
.header-coluna-logo {  background: url(<?php echo $img_fundo;  ?>) no-repeat center;  background-size: contain;  width: 100%;  height: 300px; position: absolute; z-index: 1; margin-top: 0px;  left: 0;
}
.header-coluna-logo-cor {  position: absolute;  z-index: 1;  width: 100%;  height: 300px;  background: #FFEE3433;
}
.maxh70 {  max-height: 70px;
}
.margin-top-70 {  margin-top: 70px;


}</style>

<div class="header-coluna content">
<div class="header-coluna-logo-cor">
  
</div>
<a href="https://www.noticiaspluma.com.br/coluna/joceiltongomes" class="header-coluna-logo"></a></div>
<div class="inner-content padding-top-30">
<div class="container">


<div class="col-md-12 col-sm-12 margin-bottom-20 elban slick-initialized slick-slider">
<div aria-live="polite" class="slick-list draggable">
<div class="slick-track" style="opacity: 1; width: 0px;" role="listbox"></div></div></div>
<div class="section-head"><small>Colunista</small><h2><?php the_author(); ?></h2></div>


<div class="row">
<div class="col-md-8">  <?php if  (have_posts() ) : while (have_posts() ) : the_post() ; ?>
<article class="style2">
<div class="row">
     
<div class="col-md-6 col-sm-6">
<a href="<?php the_permalink(); ?>">
<div class="article-thumb">
<?php the_post_thumbnail( array(400,300) ); ?></a></div></div>
          
<div class="col-md-6 col-sm-6">
<div class="post-excerpt">
<div class="small-title cat"><?php $post_tags = get_the_tags();   if ( $post_tags ) {  echo $post_tags[0]->name;  } ?> 
</div>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
<div class="meta"><span><?php the_time('j \d\e F \d\e Y') ?> Publicado Por <?php the_author_posts_link() ?></span></div>
<p><?php the_excerpt() ?> </p>
<a href="<?php the_permalink(); ?>" class="small-title rmore">Ler matéria </a></div></div></div></article>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
          
          
<?php get_sidebar(); ?>

<?php get_footer(); ?>