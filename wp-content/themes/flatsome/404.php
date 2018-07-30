<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package flatsome
 */

get_header(); ?>
	<?php do_action('flatsome_before_404') ;?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container pt" role="main">
			<section class="error-404 not-found mt mb">
				<div class="row">
					<div class="col medium-3"><span class="header-font" style="font-size: 6em; font-weight: bold; opacity: .3">404</span></div>
					<div class="col medium-9">
						<header class="page-title">
							<h1 class="page-title"><?php esc_html_e( 'Huhu... Trang bạn cần tìm đã biến mất rồi!', 'flatsome' ); ?></h1>
						</header><!-- .page-title -->

						<div class="page-content">
							<p><a href="https://dogotinhsau.com/san-pham">Vào trang sản phẩm mua hàng thôi nào... Let's go!</a></p>

						</div><!-- .page-content -->
					</div>
				</div><!-- .row -->
				
				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php do_action('flatsome_after_404') ;?>
<?php get_footer(); ?>
