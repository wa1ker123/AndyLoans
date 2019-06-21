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
	// let disclaimer = document.getElementById('loan-disclaimer');
	// let saccDisclaimer = '<small>The maximum you will be charged is a flat 20% Establishment Fee and a flat 4% Monthly Fee. The maximum comparison rate on loans between $300 and $2000 is 199.43%.<br><br>WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate with the lender that finances your loan.</small>';
	// let maccDisclaimer = '<small>The Interest Rate for Secured Medium Loans is 48%. Maximum Comparison Rate is 67.41% p.a.<br><br>WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate with the lender that finances your loan.</small>';
	// let laccDisclaimer = '<small>The Interest Rate for Secured Large Amount Loans is 21.24%. Maximum Comparison Rate is 48% p.a.<br><br>WARNING: This comparison rate is true only for the examples given and may not include all fees and charges. Different terms, fees or other loan amounts might result in a different comparison rate with the lender that finances your loan.</small>';
	
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

