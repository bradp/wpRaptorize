<?php
/*
Plugin Name: wpRaptorize!
Plugin URI: http://brrad.com/wpraptorize
Description: Integrates Zurb Foundation's Raptorize jQuery plugin into WordPress. Type the konami code on any page, and have a raptor appear. Toggable sound, custom images, and more!
Version: 10002
Author: Brad Parbs
Author URI: http://brrad.com
*/
function raptorizeOutput(){

	wp_enqueue_script("jquery");

	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');

	wp_enqueue_script(
	  "jquery.raptorize", RAWR_PATH . "/jquery.raptorize.1.0.js",
	  array("jquery"), "",1);
}

add_action('wp_footer', 'raptorizeOutput',5);

function rawwwrrrr(){
	?>
	<script type="text/javascript">
		jQuery(window).load(function() {
			jQuery('.button').raptorize({
				'enterOn' : 'konami-code'
				});w
			});
	</script>
	<?
}

add_action('wp_head','rawwwrrrr',6);
