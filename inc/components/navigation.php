<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg">
	<div class="container d-flex flex-row justify-content-between">
		<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-andy-loans.png" id="site-logo" class="img-fluid"></a>
		<button class="navbar-toggler navbar-dark white-bg" onclick="openNav()" type="button" data-toggle="collapse" data-target="#mySideNav" aria-controls="mySideNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

			<nav class="stroke">
				<ul class="navbar-nav main-bg">
					<li><a class="color--black mx-3 px-2 py-2" href="<?php echo get_site_url(); ?>/">Home</a></li>
					<li><a class="color--black mx-3 px-2 py-2" href="<?php echo get_site_url(); ?>/how-it-works/">How It Works</a></li>
					<li><a class="color--black mx-3 px-2 py-2" href="<?php echo get_site_url(); ?>/faq/">FAQ</a></li>
					<li><a class="color--black mx-3 px-2 py-2" href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
					<li><a class="color--black mx-3 px-2 py-2" href="<?php echo get_site_url(); ?>/contact-us/">Contact</a></li>
				</ul>
			</nav>

		</div>
	</div>
</nav>

<!-- Sidenav for Small Devices -->
<div id="sidenav" class="sidenav text-center background--black">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-andy-loans.png" class="img-fluid mb-5" style="width:10rem;">
	<ul class="pl-0">
		<a href="javascript:void(0)" class="closebtn color--primary" onclick="closeNav()">&times;</a>
		<li class="py-3"><a class="color--white" href="<?php echo get_site_url(); ?>/">Home</a></li>
		<li class="py-3"><a class="color--white" href="<?php echo get_site_url(); ?>/how-it-works/">How It Works</a></li>
		<li class="py-3"><a class="color--white" href="<?php echo get_site_url(); ?>/faq/">FAQ</a></li>
		<li class="py-3"><a class="color--white" href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
		<li class="py-3"><a class="color--white" href="<?php echo get_site_url(); ?>/contact-us/">Contact</a></li>
		<li class="py-3"><a class="color--white btn btn-link__primary w-50 mx-auto" href="apply">Apply Now</a></li>
	</ul>
</div>
