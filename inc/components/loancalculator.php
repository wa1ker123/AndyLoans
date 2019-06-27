<form id="loan-calculator" class="app-form loan-calculator my-md-2 my-sm-0 my-lg-4 px-3 max-x-700 mx-auto" autocomplete="on" oninput="formUpdate()" method="GET" action="<?php echo APPLICATION_URL ?>">
  <!-- Site Title -->
  <div class="row py-3">
    <div class="col-12 text-center">
      <input type="hidden" name="source" value="<?php echo $_SESSION['source'] ?>" />
      <input id="loan-amount-unit" type="hidden" value="<?php echo LOAN_CURRENCY_UNIT ?>" />
      <input id="loan-term-unit" type="hidden" value="<?php echo LOAN_TERM_UNIT ?>" />
      <h1 class="feature-header">How much do you need?</h1>
    </div>
  </div>
  <!-- Loan Amount -->
  <div class="row py-4">
    <div class="col-12 position-relative">
      <div class="slider-tooltip text-center position-absolute" id="loan-amount-bubble">
        <p id="loan-amount-tooltip" class="mb-0"><?php echo LOAN_CURRENCY_UNIT . number_format(LOAN_DEFAULT_VALUE); ?></p>
      </div>
      <input type="range" name="loan_amount" aria-label="Loan Amount" id="loan-amount" value="<?php echo LOAN_DEFAULT_VALUE ?>" min="<?php echo LOAN_MIN; ?>" max="<?php echo LOAN_MAX; ?>" step="<?php echo LOAN_AMOUNT_STEP; ?>">
    </div>
    <div class="col-12 d-flex justify-content-between">
      <p class="d-inline"><?php echo LOAN_CURRENCY_UNIT . number_format(LOAN_MIN); ?></p>
      <p class="d-inline"><?php echo LOAN_CURRENCY_UNIT . number_format(LOAN_MAX); ?></p>
    </div>
  </div>
  <!-- Apply -->
  <div class="row">
    <div class="col-12 text-center">
      <button type="submit" id="slider-submit" class="btn btn-link__primary color--black bold w-100 mb-3 mb-md-4">Get Started</button>
      <p class="disclaimer"><?php echo file_get_contents(DIRECTORY . '/assets/svgs/solid/lock.svg') ?>Your data is <span class="bold">safe</span> and <span class="bold">secure</span>.</p>
    </div>
  </div>
  <!-- Trust Images -->
  <div class="row my-3">
    <div class="col-12 text-center">
      <img class="px-3" src="<?php echo DIRECTORY ?>/assets/images/image-mcafee-black.png" alt="Mcafee Secure Logo">
      <img class="px-3" src="<?php echo DIRECTORY ?>/assets/images/image-comodo.png" alt="Comodo Secure SSL Logo">
    </div>
  </div>
  <!-- Disclaimer -->
  <div class="row py-2">
    <div class="col-12">
      <small class="disclaimer" id="loan-disclaimer">
        By submitting your information you understand and agree to our Privacy Policy, Terms of Use, and E-Consent. Be sure to check out our Rates & Fees as well as our Responsibility Pledge.
      </small>
    </div>
  </div>
</form>
