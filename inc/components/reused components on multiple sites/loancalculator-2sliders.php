
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

<form id="loan-app-form" oninput="formUpdate()" class="app-form loan-calculator text-center" autocomplete="on" method="GET" action="<?php echo APPLICATION_URL ?>">

	<input type="hidden" name="source" value="<?php echo $_SESSION['source'] ?>" />
	<input id="loan-amount-unit" type="hidden" value="<?php echo $loanAmountUnit ?>" />
	<input id="loan-term-unit" type="hidden" value="<?php echo $loanTermUnit ?>" />

	<!-- Loan Amount -->
	<div class="row slider-section">

		<div class="col-12">
			<label class="text-center tertiary-color slider-label" for="loan-amount">How much do you need?</label>
			<p class="text-center tertiary-color slider-amount" id="loan-amount-tooltip"><?php echo $loanAmountUnit . number_format($loanAmountStartingVal) ; ?></p>
		</div>

		<!-- Slider Min + Max Labels -->
		<div class="col-12 d-flex flex-row justify-content-between px-md-3 px-lg-5">
			<p class="d-inline"><?php echo $loanAmountUnit . number_format($loanAmountMin); ?></p>
			<p class="d-inline"><?php echo $loanAmountUnit . number_format($loanAmountMax); ?></p>
		</div>

		<!-- Loan Amount -->
		<div class="col-12 slider-container position-relative px-md-3 px-lg-5" id="slider-container-1">
			<div class="hidden-pulser" id="hidden-thumb"></div>
			<input aria-label="Loan Amount" type="range" name="loan_amount" id="loan-amount" value="<?php echo $loanAmountStartingVal ?>" min="<?php echo $loanAmountMin; ?>" max="<?php echo $loanAmountMax; ?>" step="<?php echo $loanAmountStep; ?>">
		</div>

	</div>

	<!-- Repayment Term -->
	<div class="row slider-section">

		<div class="col-12">
			<label class="text-center tertiary-color slider-label" for="loan-amount">Over how long?</label>
			<p class="text-center tertiary-color slider-term" id="loan-term-tooltip"><?php echo $loanTermStartingVal . $loanTermUnit; ?></p>
		</div>

		<!-- Slider Min + Max Labels -->
		<div class="col-12 d-flex flex-row justify-content-between px-md-3 px-lg-5">
			<p class="d-inline mb-2" id="term-from"><?php echo number_format($loanTermMin) . $loanTermUnit; ?></p>
			<p class="d-inline mb-2" id="term-to"><?php echo number_format($loanTermMax) . $loanTermUnit; ?></p>
		</div>

		<!-- Loan Slider -->
		<div class="col-12 slider-container position-relative px-md-3 px-lg-5" id="slider-container-2">
			<div class="hidden-pulser" id="hidden-thumb-term"><?php $loanTermStartingVal ?></div>
			<input type="range" aria-label="Loan Repayment Duration" id="loan-term" name="loan_term" required min="<?php echo $loanTermMin; ?>" max="<?php echo $loanTermMax; ?>" step="<?php echo $loanTermStep; ?>" value="<?php echo $loanTermStartingVal; ?>" />
		</div>

	</div>

	<!-- Repayment Amounts  -->
	<div class="row slider-section repayment-container mx-2 text-center" id="repayments">

		<div class="col-12">
			<label class="text-center tertiary-color slider-label" for="loan-amount">Your repayment estimates:</label>
		</div>

		<div class="col-4 p-1">
			<p class="mx-auto mb-0" id="weekly-repayment"><?php echo $loanAmountUnit ?>100</p>
			<label class="repayment-period" for="weekly-repayment">Weekly</label>
		</div>
		<div class="col-4 p-1">
			<p class="mx-auto mb-0" id="fortnightly-repayment"><?php echo $loanAmountUnit ?>200</p>
			<label class="repayment-period" for="fortnightly-repayment">Fortnightly</label>
		</div>
		<div class="col-4 p-1">
			<p class="mx-auto mb-0" id="monthly-repayment"><?php echo $loanAmountUnit ?>400</p>
			<label class="repayment-period" for="monthly-repayment">Monthly</label>
		</div>

		<div class="col-12 mt-2" id="security">
			<input type="checkbox" id="security-checkbox" value="security" style="width:20px; height:20px; min-width: 20px;"> <small>&nbsp; I understand that loans exceeding $2,000 require a car, motorbike, boat or caravan to be provided as security.</small><br>
		</div>

	</div>

	<!-- Apply Button -->
	<div class="row slider-section mx-2 text-center">

		<div class="col-12 pt-3 pb-1">
			<button type="submit" class="btn btn-primary apply-button" id="main-cta">Apply Now</button>
		</div>

		<div class="col-12 pb-3">
			<?php  echo file_get_contents(DIRECTORY . '/assets/svgs/padlock.svg'); ?>
			<small class="text-center tertiary-color">(It's Secure and Free!)</small>
		</div>

		<div class="col-12 py-1">
			<img class="img-fluid slider-security px-2" alt="Mcafee Secure" src="<?php echo get_template_directory_uri(); ?>/assets/images/security-mcafee-light.png">
			<img class="img-fluid slider-security px-2" alt="Comodo SSL" src="<?php echo get_template_directory_uri(); ?>/assets/images/security-comodo-logo.png">
		</div>

	</div>

	<!-- Disclaimer -->
	<div class="col-12">
		<small class="disclaimer tertiary-color" id="loan-disclaimer">Disclaimer</small>
	</div>

</form>
