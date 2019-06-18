<?php

//generates a call to action banner
function generateBanner($subtext = '', $titletext = '', $buttontext = '', $buttonlink = '', $backgroundimage = ''){

	$url = get_site_url();

	echo '
	
		<section class="background--light-grey '.$backgroundimage.'">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6t">
						<p class="preheader text-center text-md-left color--granite">'.$subtext.'</p>
						<h2 class="callout-header text-center text-md-left mb-0">'.$titletext.'</h2>
					</div>
					<div class="col-12 col-md-6 d-flex flex-column justify-content-end align-items-center">
						<a href="' .$url .$buttonlink.'" class="btn btn--blue-block">'.$buttontext .'</a>
					</div>
				</div>
			</div>
		</section>

	
	';
	}
?>
