<?php get_header(); ?>

<div class="body-overlay"></div>
<div id="sidebar-wrapper" class="">
<ul class="nav navbar-nav"></ul></div>
                
 <div class="container">

<div class="inner-content">
<div class="container">
<div class="col-md-12 col-sm-12 margin-bottom-20 elban slick-initialized slick-slider">
<div aria-live="polite" class="slick-list draggable">
<div class="slick-track" style="opacity: 1; width: 1160px;" role="listbox">
<div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 1160px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
 <a href=#" tabindex="0">

 <!---------------------------------- Banner Top 728x90 ----------------------------------------->

 <img src="#" class="img-responsive" data-src="holder.js/728x90?auto=yes&amp;bg=f2f2f2&amp;text=728x90 - 1" alt="728x90 - 1 [728x90]" data-holder-rendered="true"></a>
</div></div></div></div>

<!---------------------------------- Banner  Top  729x90  ----------------------------------------->

<!---------------------------------- Nome da Categoria que aparece no Top ----------------------------------------->
<div class="section-head">
<h2><?php echo single_cat_title(); ?> </h2></div>
<!---------------------------------- Nome da Categoria que aparece no Top ----------------------------------------->

<!-----------------------------------------------------------------POST DA CATEGORIA--------------------------------------------------------------------->
<div class="row">
<div class="col-md-8">
<?php if  (have_posts() ) : while (have_posts() ) : the_post() ; ?>
<article class="style2">
<div class="row">
<div class="col-md-6 col-sm-6">
<a href="<?php the_permalink(); ?>">
<div class="article-thumb"><?php the_post_thumbnail( array(400,300) ); ?></div></a></div>
<div class="col-md-6 col-sm-6">
<div class="post-excerpt">
<div class="small-title cat"><?php $post_tags = get_the_tags();  if ( $post_tags ) { echo $post_tags[0]->name; } ?> </div><h3>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
<div class="meta">
<span>Publicado em <?php the_time('j \d\e F \d\e Y') ?></span></div>
<p> <?php the_excerpt() ?></p>
<a href="<?php the_permalink(); ?>" class="small-title rmore">Ler matéria </a></div></div></div></article>
<?php endwhile; else: ?>
<?php endif; ?>

<ul class="pagi-nation"></ul>
</ul></div>



<?php get_sidebar(); ?>


<?php get_footer(); ?>