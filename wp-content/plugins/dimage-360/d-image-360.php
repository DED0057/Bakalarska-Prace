<?php
/*
Plugin Name: DImage 360 
Author URI: http://www.darteweb.com/
Version: 2.0
Author: D'arteweb
Description: DImage 360 is a plugin to embed a 360 view on your WordPress website. It's a user friendly and feature rich plugin to add a responsive 360deg view or 180deg panorama on website.
*/
function wp_dimage_360_scripts() 
{
    wp_enqueue_style('dimage-style', plugins_url( 'css/dimage-style.css', __FILE__));
	wp_enqueue_script('photo-sphere-js1', plugins_url( 'js/photo-sphere-viewer.min.js', __FILE__),array('jquery'), true);
    wp_enqueue_script('three-min', plugins_url( 'js/three.min.js', __FILE__),array('jquery'), true);
}
add_action('wp_enqueue_scripts','wp_dimage_360_scripts');

function dimage_fun( $atts ) 
{

	static $count = 0;
	$count++;

	$atts = shortcode_atts(
		array(
			'auto-rotate'=>1000,
			'url' => '',
			'position' => 0,
			'attachment_id'=>'',
			'zoom_level'=>0,
			'anim_speed'=>2,
			'control'=>true,
			'allow_scroll_to_zoom'=>true
		), $atts, 'dimage' );	
		
	if(!empty($atts['attachment_id']))
	{
	   $url = wp_get_attachment_url($atts['attachment_id'], 'full' ); 
	   $atts['url'] = $url;
	}
	ob_start();
	if($atts['url'] === '')
	{
		echo 'Please enter any URL of image.';	
	}
	$file_headers = @get_headers($atts['url']);
	if(strpos($file_headers[0], 'Not Found') !== false || empty($file_headers))
	{
		echo 'Image Not Found.';	
	}else
	{
		if(isset($atts['auto-rotate']) && $atts['auto-rotate'] == "true")
		{
			$atts['auto-rotate'] = 1000;	
		}
		?>
		<div class="dimage-360-area" id="dtcontainer_<?php echo $count;?>"></div>
		<script>
		var div = document.getElementById('dtcontainer_<?php echo $count;?>');
		var PSV = new PhotoSphereViewer({
				panorama: '<?php echo $atts['url']; ?>',
				container: div,
				default_position: {long: <?php echo $atts['position']?>/60},
				time_anim: <?php echo $atts['auto-rotate']; ?>,
				navbar: <?php echo $atts['control']; ?>,
				allow_scroll_to_zoom: <?php echo $atts['allow_scroll_to_zoom']; ?>,
				zoom_level: <?php echo $atts['zoom_level']; ?>,
				anim_speed: '<?php echo $atts['anim_speed']; ?>rpm',
				navbar_style: {
					backgroundColor: 'rgba(58, 67, 77, 0.7)'
				},		
			});
		</script>   
		<?php  
}
return ob_get_clean();
}
add_shortcode('dimage', 'dimage_fun' );

// custom block start
function my_custom_block_register_block() {
	wp_enqueue_script(
        'column_block-cgb-block-js', // Handle.
        plugins_url('/build/index.js',__FILE__),
        array('wp-blocks', 'wp-i18n', 'wp-element')
	);
	

	wp_enqueue_style(
		'misha-newsletter-css',
		plugin_dir_url( __FILE__ ) . '/css/block.css',
		array( 'wp-edit-blocks' ),
		filemtime( dirname( __FILE__ ) . '/css/block.css' )
	);
}
add_action( 'enqueue_block_editor_assets',  'my_custom_block_register_block' );