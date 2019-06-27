let currentLoanRange = '';
let loanAmountUnit = document.querySelector('#loan-amount-unit').value;

//The formupdate handler
function formUpdate(){

	let loanAmount = parseInt(document.getElementById('loan-amount').value);

	updateFormInput(loanAmount)
	updateHiddenPulser()
	redrawSliderGradient();
}

function updateFormInput(loan){


	//Disclaimers shown to the user
	const disclaimer = document.getElementById('loan-disclaimer');
	let saccDisclaimer = 'By submitting your information you understand and agree to our Privacy Policy, Terms of Use, and E-Consent. Be sure to check out our Rates & Fees as well as our Responsibility Pledge.';
	let maccDisclaimer = 'By submitting your information you understand and agree to our Privacy Policy, Terms of Use, and E-Consent. Be sure to check out our Rates & Fees as well as our Responsibility Pledge.';
	let laccDisclaimer = 'By submitting your information you understand and agree to our Privacy Policy, Terms of Use, and E-Consent. Be sure to check out our Rates & Fees as well as our Responsibility Pledge.';

	if(loan <= 2000){
		disclaimer.innerHTML = saccDisclaimer;
	}
	
	if(loan > 2000 && loan < 5000){
		disclaimer.innerHTML = maccDisclaimer;
	}

	if(loan >= 5000){
		disclaimer.innerHTML = laccDisclaimer;
	}
	
	document.getElementById('loan-amount-tooltip').innerHTML = loanAmountUnit + numberWithCommas(loan);

}

//Helper function to format numbers with comma separators
function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
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
		+ 'color-stop(' + val + ', #FE840E), '
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

