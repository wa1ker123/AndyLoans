	
<?php

function generateIconSection($icon = '',  $title = '', $textBody = ''){

	$dir = get_template_directory_uri();

	echo 
	'

	<div class="customer-values col-12 col-md py-3">
		<img class="customer-values__icon img-fluid d-block mx-auto" src="'.$dir.'/assets/images/'.$icon.'" alt="'.$title.' icon">
		<p class="customer-values__title feature text-center py-3">'.$title.'</p>
		<p class="customer-values__content text-center">'.$textBody.'</p>
	</div>
	';
}
?>
	

