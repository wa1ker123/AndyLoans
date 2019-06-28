<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
	if(session_id() == '') {
		session_start();
	}
?>

<div class="d-none">
<?php 
	echo '<pre>';
	var_dump($_SESSION['data']) ; //DEBUG
	echo '</pre>';
?>
</div>

<div class="d-none">
	<?php echo $_SESSION['resp']; //DEBUG ?>
</div>

<div class="d-none">
	<?php echo $_SESSION['err']; //DEBUG ?>
</div>


<section class="container">
	<div class="row">

		<div class="col-12 text-center">
			<h1>Loan Application</h1>
		</div>

		<div class="col-12">
			<?php	echo do_shortcode('[contact-form-7 id="298" title="Andy Loans Application"]'); ?>
		</div>

	</div>
</section>





<?php
get_footer();
