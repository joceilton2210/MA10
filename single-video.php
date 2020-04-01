<?php
/*
Single Post Template:Potagem de videos 
Description: Este Template e pra Vídeos
*/
?>
<?php get_header(); ?>
<style>
    .materia:first-letter {
        float: left;
        margin: 5px 10px 0 0;
        font-size: 5em;
    }

    .twitter-tweet-rendered {
        display: inline-block !important;
    }
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!----------------------------------VIDEO---------------------------------->
<style>
.video-black {
    margin: 0;
    padding: 0;
    background-color: #1b1b1b;
}
#video-content p {
    margin-bottom: 0;
}
#video-content p iframe {
    width: 100%;
    height: 460px;
}
</style>
<div class="video-black">
    <div class="container">
        <div id="video-content" class="col-sm-12 text-center">
            <?php the_content(); ?>
        </div>
    </div>
  </div>


<!-- <div class="hotfix-yt-bg videos">
    <div class="container hotfix-yt">
        <div class="wrapper video-sombra">
            <div class="videocontent">
            <?php //the_content(); ?>
            </div>
        </div>
    </div>
</div> -->
<!-------------------------------------VIDEO------------------------------------->

<!-------------------------------------POSTAGEM CUSTOMIZADA ------------------------------------>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="h1"><?php the_title(); ?></h1>
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
                        <a href="https://api.whatsapp.com/send?text=*Guedes diz que se país aderir à Opep não seguirá práticas de cartel* https://www.noticiaspluma.com.br/noticia/23/guedes-diz-que-se-pais-aderir-a-opep-nao-seguira-praticas-de-cartel.html" class="fa fa-whatsapp"></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <p><strong>Fonte: <?php the_field('fonte'); ?></strong></p>
                    <small>
                        <div class="tags margin-bottom-20 margin-top-20">
                            <span>Tags:</span> &nbsp; <?php $tags = get_the_tags();
                                                        $html = '<div class="post_tags">';
                                                        foreach ($tags as $tag) {
                                                            $tag_link = get_tag_link($tag->term_id);

                                                            $html .= "<a href='' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                                            $html .= "{$tag->name}</a>";
                                                        }
                                                        $html .= '</div>';
                                                        echo $html; ?>

                        </div>
                    </small>
        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>        
        <!-- sidebar -->
    </div>
</div>
<!-- comentarios -->
<div class="container">
    <div class="col-md-12">
        <?php
            echo do_shortcode("[wpdiscuz_comments]");
        ?>
    </div>
</div>

<!-- comentarios -->

<?php endwhile;

 endif; ?>

<?php get_footer(); ?>