<?php
//Loan Amount Values
$loanAmountMin = 300;
$loanAmountMax = 10000;
$loanAmountStep = 100;
$loanAmountStartingVal = 2500;
$loanAmountUnit = '$';

//Loan Term Values
$loanTermMin = 13;
$loanTermMax = 24;
$loanTermStep = 1;
$loanTermStartingVal = 18;
$loanTermUnit = ' Months';
?>


<form id="loan-calculator" class="app-form loan-calculator  my-md-2 mx-sm-0 my-sm-0 mx-lg-4 my-lg-4" autocomplete="on" oninput="formUpdate()" method="GET" action="<?php echo APPLICATION_URL ?>">

	<!-- Site Title -->
	<div class="row py-3">
		<div class="col-12 text-center">
			<input type="hidden" name="source" value="<?php echo $_SESSION['source'] ?>" />
			<input id="loan-amount-unit" type="hidden" value="<?php echo $loanAmountUnit ?>" />
			<input id="loan-term-unit" type="hidden" value="<?php echo $loanTermUnit ?>" />
			<h1 class="page-title">Welcome to Our website</h1>
			<p class="">The only lender-finder site you need.</p>
		</div>
	</div>

	<!-- Loan Amount -->
	<div class="row">
		<div class="col-12 py-4">
			<p class="color--primary slider-label">LOAN AMOUNT</p>
		</div>
		<div class="col-12">
			<div class="slider-tooltip text-center" id="loan-amount-bubble"><p id="loan-amount-tooltip"><?php echo $loanAmountUnit . number_format($loanAmountStartingVal); ?></p></div>
			<input type="range" name="loan_amount" aria-label="Loan Amount" id="loan-amount" value="<?php echo $loanAmountStartingVal ?>" min="<?php echo $loanAmountMin; ?>" max="<?php echo $loanAmountMax; ?>" step="<?php echo $loanAmountStep; ?>">
		</div>
		<div class="col-12 d-flex justify-content-between">
			<p class="d-inline"><?php echo $loanAmountUnit . number_format($loanAmountMin); ?></p>
			<p class="d-inline"><?php echo $loanAmountUnit . number_format($loanAmountMax); ?></p>
		</div>
	</div>

	<!-- Loan Duration -->
	<div class="row py-3">
		<div class="col-12 d-flex justify-content-between align-items-center">
			<p class="color--primary d-inline mb-0 slider-label">LOAN DURATION</p>
			<select name="loan_term" id="loan-term" class="p-2 pr-4" aria-label="Repayment Term Durations">
				<option selected value="13">13 Months</option>
				<option value="14">14 Months</option>
				<option value="15">15 Months</option>
				<option value="16">16 Months</option>
				<option value="17">17 Months</option>
				<option value="18">18 Months</option>
				<option value="19">19 Months</option>
				<option value="20">20 Months</option>
				<option value="21">21 Months</option>
				<option value="22">22 Months</option>
				<option value="23">23 Months</option>
				<option value="24">24 Months</option>
			</select>
		</div>
	</div>

	<!-- Loan Repayments -->
	<div class="row py-3">
		<div class="col-12 col-md-6">
			<p class="color--primary d-inline slider-label">LOAN REPAYMENTS</p>
		</div>
		<div class="col-12 col-md-6 d-flex flex-row justify-content-between">
			<output id="weekly-repayment" class="color--primary">$60.10</output>
			<output id="fortnightly-repayment" class="color--primary">$120.30</output>
			<output id="monthly-repayment" class="color--primary">$259.25</output>
		</div>
	</div>

	<!-- Apply -->
	<div class="row pt-4">
		<div class="col-12 text-center">
			<button type="submit" id="slider-submit" class="btn btn--blue-block w-100 mb-3">APPLY NOW</button>

			
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