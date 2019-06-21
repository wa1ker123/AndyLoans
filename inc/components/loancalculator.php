
<form id="loan-calculator" class="app-form loan-calculator  my-md-2 mx-sm-0 my-sm-0 mx-lg-4 my-lg-4" autocomplete="on" oninput="formUpdate()" method="GET" action="<?php echo APPLICATION_URL ?>">

	<!-- Site Title -->
	<div class="row py-3">
		<div class="col-12 text-center">
			<input type="hidden" name="source" value="<?php echo $_SESSION['source'] ?>" />
			<input id="loan-amount-unit" type="hidden" value="<?php echo LOAN_CURRENCY_UNIT ?>" />
			<input id="loan-term-unit" type="hidden" value="<?php echo LOAN_TERM_UNIT ?>" />
			<h1 class="page-title">How much do you need?</h1>
		</div>
	</div>

	<!-- Loan Amount -->
	<div class="row">
		<div class="col-12 py-4">
			<p class="color--primary slider-label">LOAN AMOUNT</p>
		</div>
		<div class="col-12 position-relative">
			<div class="slider-tooltip text-center position-absolute" id="loan-amount-bubble"><p id="loan-amount-tooltip" class="mb-0"><?php echo LOAN_CURRENCY_UNIT . number_format(LOAN_DEFAULT_VALUE); ?></p></div>
			<input type="range" name="loan_amount" aria-label="Loan Amount" id="loan-amount" value="<?php echo LOAN_DEFAULT_VALUE ?>" min="<?php echo LOAN_MIN; ?>" max="<?php echo LOAN_MAX; ?>" step="<?php echo LOAN_AMOUNT_STEP; ?>">
		</div>
		<div class="col-12 d-flex justify-content-between">
			<p class="d-inline"><?php echo LOAN_CURRENCY_UNIT . number_format(LOAN_MIN); ?></p>
			<p class="d-inline"><?php echo LOAN_CURRENCY_UNIT . number_format(LOAN_MAX); ?></p>
		</div>
	</div>

	<!-- Apply -->
	<div class="row pt-4">
		<div class="col-12 text-center">
			<button type="submit" id="slider-submit" class="btn mb-3 ">GET STARTED</button>

				<p class="disclaimer" id="loan-disclaimer">ⓘ Loan Disclaimer</p>

		</div>
	</div>

	<!-- Disclaimer -->
	<!-- <div class="row py-2">
		<div class="col-12">
			<small class="disclaimer" id="loan-disclaimer"></small>
		</div>
	</div> -->

</form>