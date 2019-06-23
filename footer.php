<?php
  /**
   * @package WordPress
   * @subpackage Twenty_Seventeen
   * @since 1.0
   * @version 1.2
   */
  ?>
</div><!-- #content -->
<footer id="colophon" class="site-footer <?php if(is_404()){echo 'd-none';}else{echo 'd-block';}?>" role="contentinfo">
  <!-- Footer -->
  <section class="section--footer primary-color-bg">
    <div class="container">
      <div class="row py-4">
        <div class="col-12 col-md-6 text-center text-md-left" >
          <a href="<?php echo get_site_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-andy-loans.png" alt="Andy Loans Logo"></a>
        </div>
      </div>
      <div class="d-flex  flex-column flex-md-row justify-content-between">
        <div class="mb-3 mb-md-0">
          <h4 class="footer__header">Quick navigation</h4>
          <a href="<?php echo get_site_url(); ?>/costs/">
            <p class="footer__item">Costs</p>
          </a>
          <a href="<?php echo get_site_url(); ?>/how-it-works/">
            <p class="footer__item">How It Works</p>
          </a>
          <a href="<?php echo get_site_url(); ?>/about-us/">
            <p class="footer__item">About Us</p>
          </a>
          <a href="<?php echo get_site_url(); ?>/faq/">
            <p class="footer__item">FAQ</p>
          </a>
          <a href="<?php echo get_site_url(); ?>/contact/">
            <p class="footer__item">Contact</p>
          </a>
        </div>
        <div class="mb-3 mb-md-0">
          <h4 class="footer__header">Further Information</h4>
          <a href="<?php echo get_site_url(); ?>/privacy-policy/">
            <p class="footer__item">Privacy Policy</p>
          </a>
          <a href="<?php echo get_site_url(); ?>/material-disclosure/" >
            <p class="footer__item">Material Disclosure</p>
          </a>
          <a href="<?php echo get_site_url(); ?>/policy-on-responsible-lending/">
            <p class="footer__item">Policy On Responsible Lending</p>
          </a>
          <a href="<?php echo get_site_url(); ?>/terms-and-conditions/">
            <p class="footer__item">Terms and Conditions</p>
          </a>
        </div>
        <div class="mb-3 mb-md-0">
          <h4 class="footer__header">Socials</h4>
          <span><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/facebook.svg'); ?></a></span>
          <span><a class="social-link px-2" target="_blank" href=""><?php  echo file_get_contents(DIRECTORY . '/assets/svgs/brands/twitter.svg'); ?></a></span>
          <!-- <a class="d-block btn-link__primary px-2 color--black mt-3 mb-3 text-center" data-toggle="modal" data-target="#borrowingWarningModal"><span class="fas fa-exclamation-triangle mr-2 color--black"></span>WARNING ABOUT BORROWING</a> -->
          <img src="<?php echo DIRECTORY; ?>/assets/images/image-safe-and-secure.png" alt="Safe and Secure image" class="img-fluid d-block my-4">
          <img src="<?php echo DIRECTORY; ?>/assets/images/image-mcafee.png" alt="Mcafee Secure Logo" class="img-fluid d-inline-block mr-3" style="width: 6rem;">
          <img src="<?php echo DIRECTORY; ?>/assets/images/image-comodo.png" alt="Comodo Secure Logo" class="img-fluid d-inline-block" style="width: 6rem;">
        </div>
      </div>
    </div>
  </section>
  <!--  Disclaimer text -->
  <section class="disclaimer py-4 mt-0 mt-lg-5">
    <div class="container">
      <div class="row">
        <div class="col" style="opacity:0.7;">
          <b>Material disclosure</b>
          <small>APR Disclosure. Some states have laws limiting the Annual Percentage Rate (APR) that a lender can charge you. APRs for cash advance loans range from 200% and 1386%, APRs for installment loans range from 6.63% to 225%, and APRs for personal loans range from 4.99% to 450% and vary by lender. Loans from a state that has no limiting laws or loans from a bank not governed by state laws may have an even higher APR. The APR is the rate at which your loan accrues interest and is based upon the amount, cost and term of your loan, repayment amounts and timing of payments. Lenders are legally required to show you the APR and other terms of your loan before you execute a loan agreement. APR rates are subject to change.</small>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Modal -->
<div class="modal fade" id="borrowingWarningModal" role="dialog" aria-labelledby="borrowingWarningModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title primary-color" id="borrowingWarningModalTitle">
          <i class="fas fa-exclamation-triangle"></i>WARNING: Do you really need a loan today?*
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>It can be expensive to borrow small amounts of money and borrowing may not solve your money problems.</p>
        <hr>
        <p>Check your options before you borrow:</p>
        <ul>
          <li>For information about other options for managing bills and debts, call <a href="tel:1800007007">1800 007 007</a> from anywhere in Australia to talk to a free and independent financial counsellor.</li>
          <li>Talk to your electricity, gas, phone or water provider to see if you can work out a payment plan.</li>
          <li>If you are on government benefits, ask if you can receive an advance from Centrelink: <a href="https://www.humanservices.gov.au/advancepayments">www.humanservices.gov.au/advancepayments</a>.</li>
        </ul>
        <p>The Australian Government's <a href="https://www.moneysmart.com.au">MoneySmart</a> website shows you how small amount loans work and suggests other options that may help you.</p>
        <small>*This statement is an Australian Government requirement under the <i>National Consumer Credit Protection Act 2009</i>.</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
<script>
  jQuery('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
  		navText:["<i class='fas fa-arrow-left mr-4'></i>","<i class='fas fa-arrow-right'></i>"],
      responsive:{
          0:{
              items:1,
              nav:true
          }
      }
  })
</script>
</html>
