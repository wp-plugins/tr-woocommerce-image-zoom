<?php
/**
 * Plugin Name:       TR Woocommerce Image Zoom
 * Plugin URI:        http://themeroad.net/plugins/
 * Description:       Awesome plugin for woocommerce product zoom.
 * Version:           1.0
 * Author:            Theme Road
 * Author URI:        http://themeroad.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tr
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 




/**
 * Include JS Files 
 */

function tr_include_ele_js() {
	if (!is_admin()) {
	
	wp_enqueue_script('jquery');
		wp_register_script('tr-inc-elevatezoom', plugins_url('assets/js/jquery.elevateZoom-3.0.8.min.js', __FILE__),array('jquery'),'3.0.8', false);
		
		wp_enqueue_script('tr-inc-elevatezoom');
		
	}
}
add_action( 'wp_enqueue_scripts', 'tr_include_ele_js' ); 




require_once dirname( __FILE__ ) . '/tr-wozoom-filter.php';















function tr_zoom_afect_js(){




	?>


<script type="text/javascript">
	
jQuery(function($){
	$('#tr_wozoom_pro_id').elevateZoom({
		zoomType	: "lens", 
		lensShape : "round", 
		lensSize : 200 ,
 
    	easing : true,





});
	

	
});


</script>

<?php 
}
add_action('wp_footer','tr_zoom_afect_js');








