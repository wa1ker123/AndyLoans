<?php

/* The component to generate text side by side images with text.  */

//Step One
//$stepIcon = 'icon-girl-holding-phone.png';
//$stepTitle = 'Step 1: Apply Online';
//$stepText = '<p class="mb-0">To get started, you can find and compare premium personal loans by filling out an application in minutes. Just choose your amount and loan duration and start searching!</p>';
//$stepImage = 'image-slider.png';
//generateStep($stepIcon, $stepTitle, $stepText, $stepImage, true);

//Step Two 
//$stepIcon = 'icon-phone-girl.png';
//$stepTitle = 'Step 2: Meet Your Match';
//$stepText = '<p class="mb-0">You submit your application, and our team	gets straight to work finding you a premium lender. We work hard to meet you with a lender that can offer the finance you need. </p>';
//$stepImage = 'image-text.png';
//generateStep($stepIcon, $stepTitle, $stepText, $stepImage, false);

//the HTML template to generate a process Step
function generateStep($stepicon = '', $steptitle = '', $steptext = '', $stepimage = '', $textleft = true){
	$path = get_template_directory_uri() . '/assets/images/' ;

	if($textleft){
		$alignclass = 'order-md-first';
		$alignimageclass = 'process-step--right';
	}
	else{
		$alignclass = 'order-md-last';
		$alignimageclass = 'process-step--left';
	}

	echo '
		<section class="section--process-steps">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 my-auto '.$alignclass.' wow fadeInUp">
						<img class="img-fluid d-block mx-auto mx-md-0" src="' .$path . $stepicon .'" alt="'.$steptitle.'">
						<h5 class="step-title color--primary text-center text-md-left py-3">'.$steptitle.'</h5>
						'.$steptext.'
					</div>
					<div class="col-12 col-md-6 pt-3 pt-md-0 '.$alignimageclass.' wow fadeInUp" data-wow-delay="0.4s">
						<img class="img-fluid max-y-550" src="' .$path . $stepimage .'" alt="'.$steptitle.'">
					</div>
				</div>
			</div>
		</section>	
	';
}

?>