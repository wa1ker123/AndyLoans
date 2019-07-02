<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */


	/**** Website Global Constants ******/
	define("APPLICATION_URL", get_site_url() . '/application/' );
	define('DIRECTORY', get_template_directory_uri() );
	define('USER_IP', real_ip() );
	define('LAST_IP_DIGIT', substr( USER_IP , -1));

	//Loan Variables
	define('SACC_LOAN_MIN', "300");
	define('SACC_LOAN_MAX', "2000");
	define('MACC_LOAN_MIN', "2000");
	define('MACC_LOAN_MAX', "4600");
	define('LACC_LOAN_MIN', "5000");
	define('LACC_LOAN_MAX', "10000");
	define('LOAN_MIN', SACC_LOAN_MIN);
	define('LOAN_MAX', LACC_LOAN_MAX);
	define('LOAN_AMOUNT_STEP', '100');
	define('LOAN_DEFAULT_VALUE', '2500');
	define('LOAN_CURRENCY_UNIT', '$');
	define('LOAN_TERM_MIN', '13');	
	define('LOAN_TERM_MAX', '24');
	define('LOAN_TERM_UNIT', 'Months');
	define('LOAN_TERM_DEFAULT_VALUE', '18');
	/**** Website Global Constants ******/


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );

	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'twentyseventeen' ),
			'social' => __( 'Social Links Menu', 'twentyseventeen' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


	/**
	 * Filters Twenty Seventeen array of starter content.
	 *
	 * @since Twenty Seventeen 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'twentyseventeen_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twentyseventeen_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( twentyseventeen_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter Twenty Seventeen content width of the theme.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'twentyseventeen_content_width', $content_width );
}
add_action( 'template_redirect', 'twentyseventeen_content_width', 0 );


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentyseventeen_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyseventeen_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function twentyseventeen_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'twentyseventeen_pingback_header' );

/**
 * Display custom color CSS.
 */
function twentyseventeen_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );

	$customize_preview_data_hue = '';
	if ( is_customize_preview() ) {
		$customize_preview_data_hue = 'data-hue="' . $hue . '"';
	}
?>
	<style type="text/css" id="custom-theme-colors" <?php echo $customize_preview_data_hue; ?>>
		<?php echo twentyseventeen_custom_colors_css(); ?>
	</style>
<?php
}
add_action( 'wp_head', 'twentyseventeen_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts() {

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true );

	// Theme stylesheet.
	wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri(), array('bootstrap-css') );

	wp_enqueue_style( 'fa-min-css', get_template_directory_uri() . '/assets/css/all.min.css' );

	// Site JS
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/site.js', array(), '4.1.3', true );

	//Loan Calculator Controller JS
	wp_enqueue_script( 'calc-js', get_template_directory_uri() . '/assets/js/calc.js', array(), '4.1.3', true );

	//WOW JS
	//wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.js');
	//wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');

	// Owl Carousel stylesheets and scripts
	wp_enqueue_style( 'owl-style', get_theme_file_uri('/assets/css/owl.carousel.min.css'));
	wp_enqueue_style( 'owl-default-style', get_theme_file_uri('/assets/css/owl.theme.default.min.css'));
	wp_enqueue_script( 'owl-script', get_theme_file_uri( 'assets/js/owl.carousel.min.js'), array(), '1.0', true);

	$twentyseventeen_l10n = array(
		'quote' => twentyseventeen_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	wp_localize_script( 'twentyseventeen-skip-link-focus-fix', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentyseventeen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			$sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function twentyseventeen_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'twentyseventeen_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentyseventeen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function twentyseventeen_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'twentyseventeen_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Seventeen 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyseventeen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentyseventeen_widget_tag_cloud_args' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

//grabs the page slug and appends it as a GET variable to mark which pages users have come from
function getPageSource(){
	if (session_id() == '') {
		session_start();
	}

	$_SESSION["source"] = isset($_SESSION["source"]) ? $_SESSION["source"] : "";

	if (!$_SESSION["source"]) {
		$_SESSION["source"] = isset($_GET["source"]) ? $_GET["source"] : "";
	}

	if (!$_SESSION["source"]) {
		$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
		$slug = $current_page->post_name;
		$_SESSION["source"] = $slug;
	}
}

/* Gets real user IP, works with CDN */
function real_ip(){
	$ip = $_SERVER['REMOTE_ADDR'];
	 if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
			 foreach ($matches[0] AS $xip) {
					 if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
							 $ip = $xip;
							 break;
					 }
			 }
	 } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
			 $ip = $_SERVER['HTTP_CLIENT_IP'];
	 } elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CF_CONNECTING_IP'])) {
			 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
	 } elseif (isset($_SERVER['HTTP_X_REAL_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_X_REAL_IP'])) {
			 $ip = $_SERVER['HTTP_X_REAL_IP'];
	 }
	 return $ip;
}

/**
 * Compares User's User Agent against known Mobile outputs to identify mobile users
 */
function isMobile() {
	return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

/**
 * Removes Wordpress Version Number. Security Constraint.
 */
function wpb_remove_version() {
	return '';
	}
	add_filter('the_generator', 'wpb_remove_version');

/**
 * Removes specific wordpress login errors so hackers can't guess whether password and/or username is wrong. Security Constraint.
 */
function no_wordpress_errors(){
	return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

/**
 * Remove ability to login via email. Email is easier to guess for brute forcing
 */
remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );

/**
 * Remove Welcome Panel on wordpress login. It's annoying
 */
remove_action('welcome_panel', 'wp_welcome_panel');

## Disable Editing in Dashboard - Add to wp-config
//define('DISALLOW_FILE_EDIT', true);


//Outputs the site Loan Globals as a shortcode.
function outputLoanInformation($atts){

	$loan_information = array(
		'SACC_LOAN_MIN' => SACC_LOAN_MIN,
		'SACC_LOAN_MAX' => SACC_LOAN_MAX,
		'MACC_LOAN_MIN' => MACC_LOAN_MIN,
		'MACC_LOAN_MAX' => MACC_LOAN_MAX,
		'LACC_LOAN_MIN' => LACC_LOAN_MIN,
		'LACC_LOAN_MAX' => LACC_LOAN_MAX,
		'LOAN_MIN' => LOAN_MIN,
		'LOAN_MAX' => LOAN_MAX,
	);

	return $loan_information[$atts[0]];  //Outputs the value of the first attribute.
}

add_shortcode('LOAN_INFORMATION', 'outputLoanInformation');


/* Hooks into WPCF7 and Submits application data to SA lead portal */
function post_data_to_partner($contact_data){

	//Credentials provided by partner
	$username = '';
	$API = '';
	$endpoint = 'https://api.itmedia.xyz/post/testjson/api/v2';
	$minLeadSalePrice = 0;


	$applicationFormID = '34'; //CF7 ID

	if(session_id() == '') {
		session_start();
	}

	$submission = WPCF7_Submission::get_instance();
	$posted_data = $submission->get_posted_data();
	$submittedFormID = $posted_data['_wpcf7'];
	
	//If the form submitted is the application form
	if($submission && $submittedFormID == $applicationFormID ){

		$params = array();

		//POST Params Provided By Us and not collected from Applicant
		$params['username']             = $username;
		$params['apikey']               = $API;
		$params['campaignId']           = '1';
		$params['ip_address']           = USER_IP;
		$params['agent']                = $_SERVER['HTTP_USER_AGENT'];
		$params['min_price']            = $minLeadSalePrice;
		$params['websiteName']					= get_site_url();

		$_SESSION['testdate'] = $posted_data['bDate'];
	
		//POST Params Provided By applicant
		$params['amount']               = $posted_data['amount']; 
		$params['loan_reason']          = $posted_data['loan_reason'];
		$params['credit_type']          = $posted_data['credit_type'];
		$params['fName']                = $posted_data['fName']; 
		$params['lName']                = $posted_data['lName']; 
		$params['zip']                  = $posted_data['zip']; 
		$params['city']                 = $posted_data['city']; 
		$params['state']                = $posted_data['state']; 
		$params['address']              = $posted_data['address']; 
		$params['lengthAtAddress']      = $posted_data['lengthAtAddress']; 
		$params['licenseState']         = $posted_data['licenseState']; 
		$params['email']                = $posted_data['email']; 
		$params['license']              = $posted_data['license'];
		$params['rentOwn']              = $posted_data['rentOwn']; 
		$params['phone']                = $posted_data['phone'];
		$params['workPhone']            = $posted_data['workPhone'];
		$params['callTime']             = $posted_data['callTime'];
		$params['bMonth']               = explode( '-', $posted_data['bDate'] )[2];
		$params['bDay']                 = explode( '-', $posted_data['bDate'] )[1];
		$params['bYear']                = explode( '-', $posted_data['bDate'] )[0];
		$params['ssn']                  = $posted_data['ssn'];
		$params['armedForces']          = $posted_data['armedForces'][0];
		$params['incomeSource']         = $posted_data['incomeSource'];
		$params['employerName']         = $posted_data['employerName'];
		$params['timeEmployed']         = $posted_data['timeEmployed'];
		$params['employerPhone']        = $posted_data['employerPhone'];
		//$params['jobTitle']             = $posted_data['jobTitle'];
		$params['paidEvery']            = $posted_data['paidEvery']; 
		// $params['nextPayday']           = $posted_data['nextPayday'];
		// $params['secondPayday']         = $posted_data['secondPayday'];
		// $params['abaNumber']            = $posted_data['abaNumber'];
		// $params['accountNumber']        = $posted_data['accountNumber'];
		// $params['accountType']          = $posted_data['accountType'];
		// $params['bankName']             = $posted_data['bankName'];
		// $params['bankPhone']            = $posted_data['bankPhone'];
		// $params['monthsBank']           = $posted_data['monthsBank'];
		//$params['directDeposit']        = $posted_data['directDeposit'][0];
		$params['monthlyNetIncome']     = $posted_data['monthlyNetIncome'];
		//$params['ownCar']               = $posted_data['ownCar'][0];
		$params['note']                 = $posted_data['note'];
		$params['websiteName']          = $posted_data['websiteName'];
		$params['timeout']              = $posted_data['timeout'];
		$params['lead_type']            = $posted_data['lead_type'];
		
		//$params['atrk']                 = $posted_data['atrk'];

		$_SESSION['data'] = $params;

		$ch = curl_init();

		curl_setopt(    $ch,    CURLOPT_URL,               $endpoint     );
		curl_setopt(    $ch,    CURLOPT_POST,              1             );
		curl_setopt(    $ch,    CURLOPT_POSTFIELDS,        $params       );
		curl_setopt(    $ch,    CURLOPT_FAILONERROR,       1             );
		curl_setopt(    $ch,    CURLOPT_HEADER,            0             );
		curl_setopt(    $ch,    CURLOPT_RETURNTRANSFER,    1             );
		curl_setopt(    $ch,    CURLOPT_SSL_VERIFYPEER,    false         );
		curl_setopt(    $ch,    CURLOPT_SSL_VERIFYHOST,    false       	 );
		curl_setopt(    $ch,    CURLOPT_TIMEOUT,           0             );
		
		
		$res = curl_exec($ch);
		curl_close($ch);
		
		$res = json_decode($res);

		$_SESSION['res'] = $res;
		

	}

}

add_action( 'wpcf7_before_send_mail', 'post_data_to_partner');