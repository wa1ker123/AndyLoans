<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
	//grabs the page slug and appends it as a GET variable to mark which pages users have come from
	getPageSource();

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">

<!-- Site Header -->
<header id="masthead" role="banner">

	<!-- Navigation and Sidenav -->
	<?php include_once 'inc/components/navigation.php' ?>


</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
