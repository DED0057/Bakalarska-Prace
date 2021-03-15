<?php
/**
 * @package canvasio3D
 * @version 1.4.5
 */
/*
Plugin Name: canvasio3D Light
Plugin URI: https://www.canvasio3d.com/canvasio3d-light/
Description: Free 3D-Model Viewer | <a href="https://www.canvasio3d.com/pub/doc/canvasio3d_light/English" target="_blank" >Documentation</a> || Looking for professional WooCommerce and WordPress 3D-Plugins? Than visit us at <a href="https://www.canvasio3d.com/">Canvasio3D.com</a>
Author: Thomas Scholl
Version: 1.4.5
Author URI: http://www.virtuellwerk.de/
*/

$GLOBALS["canvasioId"]=0;
$GLOBALS["caLightPath"]='';
//
function caCustom_upload_mimes ( $existing_mimes=array() ) {
	$existing_mimes['stl'] = 'text/plain';
	$existing_mimes['obj'] = 'text/plain';
	$existing_mimes['mtl'] = 'text/plain';
	$existing_mimes['dae'] = 'text/plain';
	return $existing_mimes;
}
add_filter('upload_mimes', 'caCustom_upload_mimes');
include('inc/admin.inc.php');
include('inc/initLight.inc.php');
?>