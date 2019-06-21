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


    <?php
      include_once 'inc/components/accordionregular.php';
      $faqArray = array(
      'What personal loans do we find?' => 'Our partner-lenders find personal loans from $300 to $10,000, and the repayment period will depend on the amount you choose to borrow. ',
       'question' => 'answer'
     );
      ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="accordion">
          <?php generateAccordionCards($faqArray); ?>
        </div>
      </div>
    </div>
  </section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
