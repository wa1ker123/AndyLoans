<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<style>
ul, li, ol{
	list-style-type: circle;
}
p img {
	display: block;
	margin: 0 auto;
}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">

			<?php while ( have_posts() ) : the_post();  //WP Loop Start	?>

			<h1 class="text-center"><?php echo the_title(); ?></h1>

			<?php echo the_content(); ?>


			<?php endwhile; // End of the loop.	?>

		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
