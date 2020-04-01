<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage MA24H
 * @since 1.0.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<center><h1 class="page-title"><?php _e( 'Opa  a Pagina que você Procura não existe.', 'MA24H' ); ?></h1></center>
				</header><!-- .page-header -->

				<div class="page-content">
					<center><p><?php _e( 'Pedimos desculpas pelo ocorrido, faça uma Pesquisa e tente novamente?', 'MA24H' ); ?></p>
					<?php get_search_form(); ?></center>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>