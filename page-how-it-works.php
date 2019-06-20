<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="background--white">
		<div class="container">
		  <div class="row">
		    <!-- How It Works: Step 1-->
		    <div class="col-12 col-lg-6 mb-5 mb-lg-0">
		        <img src="<?php echo DIRECTORY; ?>/assets/images/illustration-how-it-works-3.png" alt="Illustration of hand holding a phone" class="img-fluid how-it-works-card__image mb-5 ml-3 ml-lg-0">
		        <div class="">
		          <h2 class="how-it-works-card__title text-left">In A Nutshell</h3>
		          <p class="how-it-works-card__copy text-left">We’re the first stop on your journey to get the funding you need. We will find the best loan options to suit you and then put you in touch with a lender that we think can offer you the loan you’re after. One application, access to hundreds of lenders - sound good? Give it a go!  </p>
		        </div>
		      </div>
		    <!-- How It Works: Step 2-->
				<div class="col-12 col-lg-6 order-2 order-lg-1 my-auto">
					<img src="<?php echo DIRECTORY; ?>/assets/images/illustration-how-it-works-2.png" alt="Illustration of hand holding a phone" class="img-fluid how-it-works-card__image mb-5 ml-3 ml-lg-0">
	        <h2 class="section-header">What you'll need to apply</h2>
					<div class="loan-criteria-card mb-3">
	          <h3 class="loan-criteria-card__title">You'll need to be:</h3>
	          <p class="loan-criteria-card__criteria-item">Over 18 years of age</p>
	          <p class="loan-criteria-card__criteria-item">An American citizen</p>
	          <p class="loan-criteria-card__criteria-item">Or permanent resident</p>
	        </div>
	        <div class="loan-criteria-card">
	          <h3 class="loan-criteria-card__title">You’ll need to have:</h3>
	          <p class="loan-criteria-card__criteria-item">A regular source of income for at least 3 months</p>
	          <p class="loan-criteria-card__criteria-item">Permanent address and checking account</p>
	          <p class="loan-criteria-card__criteria-item">Employment information</p>
	        </div>
	      </div>
		  </div>
		</div>
	</section>

	<!-- Testimonials section -->
	<?php include_once 'inc/components/testimonials.php'; ?>

	<!-- Testimonials section -->
	<?php include_once 'inc/components/cta-banner-contact.php'; ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
