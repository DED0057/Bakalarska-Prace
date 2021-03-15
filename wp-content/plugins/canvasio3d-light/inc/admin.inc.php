<?php
	add_action('after_setup_theme', 'caMceLBtn_setup');
	//
	if (!function_exists('caMceLBtn_setup')){
		function caMceLBtn_setup(){
			add_action( 'init', 'ca_LButtons' );
		}
	}
	//
	if(!function_exists('ca_LButtons')){
		function ca_LButtons(){
			if(!current_user_can('edit_posts') && !current_user_can('edit_pages'))return;
			if(get_user_option('rich_editing') !== 'true')return;
			add_filter('mce_external_plugins', 'ca_add_LButton');
			add_filter('mce_buttons', 'ca_register_LButton');
		}
	}
	//
	if (!function_exists('ca_add_LButton')){
		function ca_add_LButton($plugin_array){
			$plugin_array['caMceLBtn']=plugins_url('/inc/js/tinyLight_button.js',dirname(__FILE__),false);
			return $plugin_array;
		}
	}
	//
	if (!function_exists('ca_register_LButton')){
		function ca_register_LButton($btn){
			array_push($btn,'caMceLBtn');
			return $btn;
		}
	}
?>