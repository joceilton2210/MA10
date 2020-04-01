<?php get_header() ;?>

<div class="inner-content">
<div class="container">
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

<div class="col-md-12 col-sm-12 margin-bottom-20 elban slick-initialized slick-slider">
<div aria-live="polite" class="slick-list draggable">
<div class="slick-track" style="opacity: 1; width: 1160px;" role="listbox">
<div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 1160px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
<a href="#" tabindex="0">
<img src="#" class="img-responsive" data-src="holder.js/728x90?auto=yes&amp;bg=f2f2f2&amp;text=728x90 - 1" alt="728x90 - 1 [728x90]" data-holder-rendered="true"></a>
</div></div></div></div>


<div class="row">
<div class="col-md-8">

<div class="blog-single">
  <h1 class="h1"><?php the_title(); ?></h1>
  <h2 class="h5"></h2>
  <div class="single-meta">
  <div class="meta pull-left">
  <span class="author">Publicado por <?php the_author_posts_link() ?> </span>
  <span class="date"><?php the_date('j \d\e F \d\e Y'); ?> às <?php the_time('H:i'); ?></span></div>
  <div class="pull-right">
   <!-----------------------------------------------------------------REDE SOCIAIS DA POSTAGEM-----------------------------------------------------------> 

  <div class="social">
  <a href="https://www.facebook.com/sharer/sharer.php" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" rel="nofollow" class="fa fa-facebook"></a>
  <a href="https://twitter.com/intent/tweet?text=Guedes diz que se país aderir à Opep não seguirá práticas de cartel&amp;url=https://www.noticiaspluma.com.br/noticia/23/guedes-diz-que-se-pais-aderir-a-opep-nao-seguira-praticas-de-cartel.html" rel="nofollow" title="Compartilhar no Twitter" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="fa fa-twitter"></a>
  <a href="https://plus.google.com/share?url=https://www.noticiaspluma.com.br/noticia/23/guedes-diz-que-se-pais-aderir-a-opep-nao-seguira-praticas-de-cartel.html" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="fa fa-google-plus"></a>
  <a href="https://api.whatsapp.com/send?text=*Guedes diz que se país aderir à Opep não seguirá práticas de cartel* https://www.noticiaspluma.com.br/noticia/23/guedes-diz-que-se-pais-aderir-a-opep-nao-seguira-praticas-de-cartel.html" class="fa fa-whatsapp"></a></div></div>
  <div class="clearfix"></div></div>
  
   <!-----------------------------------------------------------------REDE SOCIAIS DA POSTAGEM-----------------------------------------------------------> 
  
  <style>.materia:first-letter {float: left; margin: 5px 10px 0 0; font-size: 5em;}.twitter-tweet-rendered{display: inline-block !important;}</style>

     <!-----------------------------------------------------------------POSTAGEM  DA MATERIA  -----------------------------------------------------------> 

 <div class="img-left caption col-md-7">
<div class="post-single-slider slick-initialized slick-slider">
<?php the_post_thumbnail( array(500,400) ); ?></div>
<p><span><!------aqui vai informações da foto comentário--> </span></p></div>
<div class="materia"><p><?php the_content();?></p><p></p><p></p><p></p><p></p></div>
<p><strong>Fonte: <?php the_field('fonte'); ?></strong></p>
<div class="clearfix"></div><div class="tags margin-bottom-20 margin-top-20">
<span>Tags:</span> &nbsp; <?php $tags = get_the_tags();
$html = '<div class="post_tags">';
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );

    $html .= "<a href='' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a>";
}
$html .= '</div>';
echo $html ;?>

<?php
echo do_shortcode("[wpdiscuz_comments]");
?>
</div>
</div>
</div><?php get_sidebar(); ?>
</div>
</div></div>
    <?php endwhile;  else: ?>
<?php endif; ?>

<!------------------------------------------------------------------------SIDEBAR---------------------------------------------------------------------------------->



<?php get_footer(); ?>


    
