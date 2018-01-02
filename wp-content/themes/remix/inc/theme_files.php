<?php 
function theme_css_js(){
	//add css
	//wp_enqueue_style('name',get_template_directory_uri().'folder/fils',array(),'version','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'4.3.0','all');
	wp_enqueue_style('flaticon',get_template_directory_uri().'/assets/css/flaticon.css',array(),'1.0','all');
	wp_enqueue_style('boxer',get_template_directory_uri().'/assets/css/jquery.fs.boxer.min.css',array(),'3.3.0','all');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'3.3.1','all');
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css',array(),'3.3.0','all');
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',array(),'1.0','all');
	wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0','all');

	//js
	//wp_enqueue_script('name',get_template_directory_uri().'folder/files',array(),'version',true/false);
	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr',get_template_directory_uri().'/assets/js/modernizr.js',array(),'2.8.3',true);
	wp_enqueue_script('plugins',get_template_directory_uri().'/assets/js/plugins.js',array(),'3.3.1',true);
	wp_enqueue_script('OnePagenNav',get_template_directory_uri().'/assets/js/OnePagenNav.js',array(),'1.0',true);
	wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/wow.min.js',array(),'1.0.3',true);
	wp_enqueue_script('gmap3',get_template_directory_uri().'/assets/js/gmap3.min.js',array(),'6.0.0',true);
	wp_enqueue_script('functions',get_template_directory_uri().'/assets/js/functions.js',array(),'1.0',true);
	wp_enqueue_script('viewport',get_template_directory_uri().'/assets/js/jquery.viewport.js',array(),'1.0',true);
	wp_enqueue_script('easypiechart',get_template_directory_uri().'/assets/js/jquery.easypiechart.min.js',array(),'2.1.3',true);
	wp_enqueue_script('scripts',get_template_directory_uri().'/assets/js/scripts.js',array(),'2.1.3',true);
}
add_action('wp_enqueue_scripts','theme_css_js');


?>