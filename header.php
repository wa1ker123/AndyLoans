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

	<!-- Header -->
	<div class="container-fluid d-none d-lg-block">
	<div class="row background--secondary">
	<section class="section--header col-6 background--white header-title-card__section">
		<div class="row">
			<div class="container-fluid p-fl pr-0">
				<div class="row">
				<div class="col-12">
					<div class="header-title-card">
						<div class="row">
						<div class="col-12">
						<h1 class="header-title-card__headline">Borrowing. <br> Made <span class="color--primary">easy</span></h1>
						</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="header-title-card__usp mb-3">
									<div class="row">
									<div class="col mb-4 mb-xl-2">
										<img src="<?php echo DIRECTORY; ?>/assets/images/icon-shield.svg" alt="Illustration of hand holding a phone" class="img-fluid header-title-card__usp-icon mr-4">
									</div>
									<div class="col-12 col-lg-8 col-xl-10 ">
										<h3 class="header-title-card__usp-title">Secure data</h3>
										<p class="header-title-card__usp-copy">
											Protect your data with smart third-party encryption
										</p>
									</div>
								</div>
								</div>
							</div>
						<div class="col-6">
							<div class="header-title-card__usp mb-3">
								<div class="row">
								<div class="col mb-4 mb-xl-2">
									<img src="<?php echo DIRECTORY; ?>/assets/images/icon-clock.svg" alt="Illustration of hand holding a phone" class="img-fluid header-title-card__usp-icon mr-4">
								</div>
								<div class="col-12 col-lg-8 col-xl-10 ">
									<h3 class="header-title-card__usp-title">100% online</h3>
									<p class="header-title-card__usp-copy">
										Online for your convenience
									</p>
								</div>
							</div>
							</div>
						</div>
						<div class="col-6">
							<div class="header-title-card__usp mb-3">
								<div class="row">
								<div class="col mb-4 mb-xl-2">
									<img src="<?php echo DIRECTORY; ?>/assets/images/icon-phone.svg" alt="Illustration of hand holding a phone" class="img-fluid header-title-card__usp-icon mr-4">
								</div>
								<div class="col-12 col-lg-8 col-xl-10 ">
									<h3 class="header-title-card__usp-title">Speedy decisions</h3>
									<p class="header-title-card__usp-copy">
										Smart decisions you don’t have to wait for
									</p>
								</div>
							</div>
							</div>
						</div>
						<div class="col-6">
							<div class="header-title-card__usp mb-3">
								<div class="row">
								<div class="col mb-4 mb-xl-2">
									<img src="<?php echo DIRECTORY; ?>/assets/images/icon-fist.svg" alt="Illustration of hand holding a phone" class="img-fluid header-title-card__usp-icon mr-4">
								</div>
								<div class="col-12 col-lg-8 col-xl-10 ">
									<h3 class="header-title-card__usp-title">Transparent fees</h3>
									<p class="header-title-card__usp-copy">
										We work with trusted lenders
									</p>
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<section class="col-6 background--secondary my-auto">
		<div class="row">
			<div class="container-fluid px-md-5">
				<div class="row">
				<div class="col-12">
					<?php include_once 'inc/components/loancalculator.php'; ?>
				</div>
			</div>
			</div>
		</div>
	</section>
</div>
</div>

<!-- Header mobile -->
<section class="header-title-card__section d-block d-lg-none">
	<div class="container">
		<div class="row">
			<div class="col-12">
						<h1 class="header-title-card__headline">Borrowing. <br> Made <span class="color--primary">easy</span></h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 px-4">
				<div class="background--white">
					<h2>Jarrod slider pls</h2>
				</div>
			</div>
		</div>
	</div>
</section>

</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
