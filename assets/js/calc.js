let currentLoanRange = '';
let loanAmountUnit = document.querySelector('#loan-amount-unit').value;
let loanTermUnit = document.querySelector('#loan-term-unit').value;

//The formupdate handler
function formUpdate(){

	let loanAmount = parseInt(document.getElementById('loan-amount').value);
	let loanTerm =  parseInt(document.getElementById('loan-term').value);


	if (loanAmount == 4700 || loanAmount == 4800 || loanAmount == 4900) {
		loanAmount = 5000;
		document.getElementById('loan-amount').value = loanAmount;
	}

	updateFormInput(loanAmount, loanTerm)
	updateHiddenPulser()
	redrawSliderGradient();
}

function updateFormInput(loan, loanTerm){

	//Disclaimers shown to the user
	let disclaimer = document.getElementById('loan-disclaimer');
	let saccDisclaimer = '<small>The maximum you will be charged is a flat 20% Establishment Fee and a flat 4% Monthly Fee. The maximum comparison rate on loans between $300 and $2000 is 199.43%.<br><br>WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate with the lender that finances your loan.</small>';
	let maccDisclaimer = '<small>The Interest Rate for Secured Medium Loans is 48%. Maximum Comparison Rate is 67.41% p.a.<br><br>WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate with the lender that finances your loan.</small>';
	let laccDisclaimer = '<small>The Interest Rate for Secured Large Amount Loans is 21.24%. Maximum Comparison Rate is 48% p.a.<br><br>WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate with the lender that finances your loan.</small>';

	let monthlyOutput = document.getElementById('monthly-repayment');
	let fortnightlyOutput = document.getElementById('fortnightly-repayment');
	let weeklyOutput = document.getElementById('weekly-repayment');

	//Sacc
	if (loan <= 2000) {
		from = 3;
		to = 6;
		disclaimer.innerHTML = saccDisclaimer;
		securityRequired = false;
	}	
	//Macc
	else if (loan > 2000 && loan <= 4600) {
		from = 13;
		to = 24;
		disclaimer.innerHTML = maccDisclaimer;
		securityRequired = false;
	}
	//Lacc
	else {
		from = 13;
		to = 24;
		disclaimer.innerHTML = laccDisclaimer;
		securityRequired = false;
	}

	//If the loan term has changed, we need to clear the select dropdown and repopulate the optionss
	if(currentLoanRange != from + to){
		redrawSelectInput(from, to, loanTermUnit);
	}

	//The current loan range value
	currentLoanRange = from + to;
	
	document.getElementById('loan-amount-tooltip').innerHTML = loanAmountUnit + numberWithCommas(loan);

	let payments = calculatePayments(loan, loanTerm);

	monthlyOutput.innerHTML = 		'$' + numberWithCommas((Math.floor(payments[0] 			* 100) /100) 			.toFixed(2));
	fortnightlyOutput.innerHTML = '$' + numberWithCommas((Math.floor(payments[1] 			* 100) /100) 			.toFixed(2));
	weeklyOutput.innerHTML = 			'$' + numberWithCommas((Math.floor(payments[2] 			* 100) /100) 			.toFixed(2));
}


/*  Clears the Loan Term select Input and populates it with new options, dependant on the current loan timeframe. */
function redrawSelectInput(rangeBegin, rangeEnd, termUnit = ' Months'){

	let selectInput = document.querySelector('#loan-term');

	//Removes all existing children
	while (selectInput.firstChild) {
    selectInput.firstChild.remove();
	}

	//Creates a new option for each value within our range
	for(i = rangeBegin; i <= rangeEnd; i++){
		let option = document.createElement('option');
		option.value = i;
		option.innerHTML =  i + termUnit;
		selectInput.appendChild(option)
	}
}

//Helper function to format numbers with comma separators
function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}

function calculatePayments(loanAmount, loanTerm){

		//How many payment periods exist over the term
		let months = loanTerm;
		let fortnights = Math.round(loanTerm * 4.33 / 2);
		let weeks = Math.round(loanTerm * 4.33);
	
		//Average periods per year
		const monthsPerYear = 12;
		const fortnightsPerYear = 26.09;
		const weeksPerYear = 52.18;

		//Our default interest rate in % and establishment fee, for saccs
		let  interestRate = loanAmount * .04 * loanTerm;
		let  establishmentFee = loanAmount * .2;

		//Sacc
		if(loanAmount <= 2000){
			//We use a manual calculation for SACC loans and break early
			const monthlyPayments = (loanAmount + establishmentFee + interestRate) / loanTerm ;
			const fortnightlyPayments = (loanAmount + establishmentFee + interestRate) / 25;
			const weeklyPayments = (loanAmount + establishmentFee + interestRate) / 50;
			const results = [monthlyPayments, fortnightlyPayments, weeklyPayments];
			return results;
		}
		//MACC
		else if(loanAmount > 2000 && loanAmount < 5000){
			interestRate = .478;
			establishmentFee = 400;
		}

		//LACC
		else{
			interestRate = .2124;
			establishmentFee =  loanAmount * (loanTerm * 0.01)
		}

		//The total amount to be repaid
		let principle = loanAmount + establishmentFee;

		//We calculate the payments using the excel repayment formula
		const monthlyPayments = pmt(interestRate / monthsPerYear, months, -principle, 0, 2)
		const fortnightlyPayments = pmt(interestRate / fortnightsPerYear, fortnights, -principle, 0, 2);
		const weeklyPayments = pmt(interestRate / weeksPerYear, weeks, -principle, 0, 2);
		const results = [monthlyPayments, fortnightlyPayments, weeklyPayments];
		return results;

}

//The excel payment function
function pmt(ir, np, pv, fv, type) {
	/*
	 * ir   - interest rate per month
	 * np   - number of periods
	 * pv   - present value
	 * fv   - future value
	 * type - when the payments are due:
	 *        0: end of the period, e.g. end of month (default)
	 *        1: beginning of period
	 */
	var pmt, pvif;

	fv || (fv = 0);
	type || (type = 0);

	if (ir === 0)
			return -(pv + fv)/np;

	pvif = Math.pow(1 + ir, np);
	pmt = - ir * pv * (pvif + fv) / (pvif - 1);

	if (type === 1)
			pmt /= (1 + ir);

	return pmt;
}

//Updates the hidden pulsing div to overlay the input thumb - This hacks an animation for the thumb despite webit browsers not supporting it
function updateHiddenPulser(){

	let amountSlider = document.getElementById('loan-amount');
	var sliderWidth = jQuery('#loan-amount').width() - 50;

	//How far along each of the sliders the thumbs are
	var val = (jQuery(amountSlider).val() - jQuery(amountSlider).attr('min')) / (jQuery(amountSlider).attr('max') - jQuery(amountSlider).attr('min'));

	//The margin to be added to the hidden div based on range input width and current slider value
	var amountPXOffset = sliderWidth * val ;

	//Updates the css position
	document.getElementById('loan-amount-bubble').style.left = String(amountPXOffset) + 'px';
}

//Function to force an update to the gradient input
function redrawSliderGradient(){
  //Chrome and Safari User Agents
  var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
  var isEdge = /Edge/.test(navigator.userAgent); 

  //Only runs if Chrome or Safari
  if(isChrome || isSafari || isEdge){
    var input = jQuery('#loan-amount');
    //Sets val to be the percentage of how far along the thumb is in relation to the slider
    var val = (jQuery(input).val() - jQuery(input).attr('min')) / (jQuery(input).attr('max') - jQuery(input).attr('min'));

    //Sets the background to the thumb position
    jQuery(input).css('background-image',
		'-webkit-gradient(linear, left top, right top, '
		+ 'color-stop(' + val + ', #003BDE), '
		+ 'color-stop(' + val + ', #ffffff)'
		+ ')'
		);
  }
}

//Repositions the hidden pulser on window resize
window.onresize = function() {
	updateHiddenPulser();
};

document.addEventListener('DOMContentLoaded', function(){

	formUpdate();
	updateHiddenPulser();

}, false);

