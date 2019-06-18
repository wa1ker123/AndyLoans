<?php


/* The accordion component used to quickly generate bootstrap collapse accordions */


	/* Using the component looks like this */
	//Faq item
	//$faqTitle = 'What does my company do?';
	//$faqCategory = 'about';
	//$faqBody = '<p class="accordion-content mb-0 p-3">Faq Answer</p>';
	//$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
	//array_push($faqArray, $faqObject);


	//Faq item
	//$faqTitle = 'What does my company do?';
	//$faqCategory = 'about';
	//$faqBody = '<p class="accordion-content mb-0 p-3">Faq Answer</p>';
	//$faqObject = new ArrayItem($faqTitle, $faqCategory,$faqBody);
	//array_push($faqArray, $faqObject);

	//<div class="accordion">
		 //generateAccordionCards($faqArray);
	//</div>


//The array item class. 
	class ArrayItem{

		var $faqTitle;
		var $faqContent;
		var $faqCategory;

		//Object constructor, which lets us pass arguments to new instances of this class
		function __construct($faqTitle, $faqCategory, $faqContent){
			$this->faqTitle = $faqTitle;
			$this->faqContent = $faqContent;
			$this->faqCategory = $faqCategory;		
		}

	}

	/* 	Takes an array and generates accordion cards for each paired item.
	A value should be given for the data-parent if there are multiple accordions on
	the same page  */
	function generateAccordionCards($faqItems, $parent = 'default'){

	$itemCount = 0;

		//We iterate through each of the items in the array
		foreach($faqItems as $faqItem){

			if($itemCount == 0){
				$show = '';
				$expanded = false;
			}
			else{
				$show = '';
				$expanded = false;
			}

			//Creates variables from the object properties
			$faqQuestion = $faqItem->faqTitle;
			$faqCategory = $faqItem->faqCategory;
			$faqAnswer = $faqItem->faqContent;

			echo
			
			'
			<div class="col-12 accordion-item filterDiv '.$faqCategory.'">
        <div aria-controls="faq-'.$parent.'-'.$itemCount.'" aria-expanded="false" class="card-header collapsed" data-target="#faq-'.$parent.'-'.$itemCount.'" data-toggle="collapse" id="faq-'.$parent.'-'.$itemCount.'-heading">
        
					<h5 class="accordion-title mb-0 panel-title color--primary text-left p-3"><a aria-controls="faq-'.$itemCount.'" aria-expanded="'.$expanded.'" class="collapsed panel-title light" data-target="#faq-'.$parent.'-'.$itemCount.'" href="#faq-'.$parent.'-'.$itemCount.'" data-toggle="collapse">
						'.$faqQuestion.'
						</a>
          </h5>
          
				</div>

				<div aria-labelledby="faq-'.$parent.'-'.$itemCount.'-heading" class="collapse'.$show.'" data-parent=".accordion" id="faq-'.$parent.'-'.$itemCount.'">
					<div class="card-body text-left pt-0">
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