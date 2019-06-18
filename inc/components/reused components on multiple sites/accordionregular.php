<?php
		
	/* 	Takes an array and generates accordion cards for each paired item.
	A value should be given for parent if there are multiple accordions
	located on the one page.  */
	function generateAccordionCards($faqItems, $parent = 'default'){

	$itemCount = 0;

		foreach($faqItems as $faqQuestion => $faqAnswer){

			if($itemCount == 0){
				$show = 'show';
				$expanded = 'true';
				$collapse = '';
			}
			else{
				$show = '';
				$expanded = 'false';
				$collapse = 'collapsed';
			}

			echo
			
			'
			<div class="col-12 py-3 accordion-item">
				<div class="' .$collapse. '" aria-controls="faq-'.$parent.'-'.$itemCount.'" aria-expanded="false" data-target="#faq-'.$parent.'-'.$itemCount.'" data-toggle="collapse" id="faq-'.$parent.'-'.$itemCount.'-heading">
					<h5 class="mb-0 panel-title py-3">
						<a aria-controls="faq-'.$itemCount.'" aria-expanded="'.$expanded.'" class=" '. $collapse .' color--black" data-target="#faq-'.$parent.'-'.$itemCount.'" href="#faq-'.$parent.'-'.$itemCount.'" data-toggle="collapse">
						'.$faqQuestion.'
						</a>
					</h5>
				</div>

				<div aria-labelledby="faq-'.$parent.'-'.$itemCount.'-heading" class="collapse '.$show.'" data-parent=".accordion" id="faq-'.$parent.'-'.$itemCount.'">
					<div class="card-body">
						'.$faqAnswer.'
					</div>
				</div>	
			</div>				
			'
			;
			$itemCount ++;
		}
	}

?>