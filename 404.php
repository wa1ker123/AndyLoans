<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<style>
html, body{
	background: #f9f9f9;
}
</style>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found text-center">
				<header class="page-header container">
					<div class="row">
						<div class="col">
							<img src="<?php echo DIRECTORY; ?>/assets/images/404.svg" alt="Illustration of woman looking through binoculars" class="img-fluid my-3" style="width: 20rem;">
							<h1 class="page-title"><?php _e( 'Page cannot be found', 'twentyseventeen' ); ?></h1>
							<p class="mb-4">
							We can't seem to find that page. How about we find you a lender instead?
							</p>
							<a href="<?php echo get_site_url(); ?>/" class="btn btn-link__primary color--black">BACK TO HOME</a>
						</div>
					</div>

				</header><!-- .page-header -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
