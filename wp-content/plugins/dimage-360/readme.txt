=== DImage 360 ===
Contributors: darteweb
Tags: image360,panorama,photosphere,360view,gutenberg,block,360image
Requires at least: 3.0.1
Tested up to: 5.3.2
Requires PHP: 5.2.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
DImage 360 is a plugin to load a 360 Image on your WordPress based website. It works and tested with WordPress tested in various browsers too.

=== Description ===

<strong>DImage 360</strong> is a plugin to embed a 360 view on your <strong>WordPress</strong> website. It is a user friendly and feature rich plugin to add a responsive <strong>360deg</strong> view or <strong>180deg</strong> panorama on website.

It is a simple and easy to customize plugin to embed single or multiple images on website. To embed multiple image, you currently need to add multiple instance of shortcode on the post or page of website.

=== Features ===
1. No Flash Needed
1. Compatible with chrome, Firefox, IE8, IE9, Safari
1. You can zoom to the image.
1. Support JPG.
1. Support both mouse and touch.
1. You can full screen the panorama for detail view.
1. Multiple Image can be loaded on single page, by using multiple shortcode.

=== How to use ===

= Shortcode =
1.  If you are using Gutenberg then follow the following instructions otherwise step 2 instructions:-
    1. Click on the + icon showing on the top left corner of the page and select Common Blocks and then select Dimage 360.

    1. Now a block appears on the page with the following options:-
        - Select Image :- Select an image from media.
        
        - Auto-Rotate  :- It is the feature to auto rotate of image. Default it setup as true.
        
        - Control      :- It is the feature to show control on the image or not. Default it setup as true.
        
        - Allow Scroll to Zoom :- It is the feature to zoom in or zoom out by just scrolling. Default it setup as true.
        
        - Zoom Level   :- You can set zoom level from 0 to 100. Default it setup as 0.
        
        - Animation Speed :- You can set animation speed from 0 to 100. Default it setup as 2.
        
        - Position     :- Defines the default position, the first point seen by the user. Default it setup as 0.
        

        
        
1. `[dimage  attachment_id="56" control=true auto-rotate=true]`
     (Recommended)
    <strong>attachment_id:</strong> you will get from media manager, you only need to add attachment id. 
    
    <strong>control{true/false}:</strong> It is the feature to show control on the image or not. Default it setup as true.
    
    <strong>auto-rotate{true/false}:</strong> It is the feature to auto rotate of image. Default it setup as true.
    
    <strong>zoom_level:</strong> You can set zoom level from 0 to 100. Default it setup as 0.
    
    <strong>anim_speed:</strong> You can set animation speed from 0 to 100. Default it setup as 2.
    
    <strong>default_position:</strong> Defines the default position, the first point seen by the user. Default it setup as 0.

    <strong>Example</strong>`[dimage  attachment_id="56" zoom_level="10" anim_speed="10"]`

1. `[dimage url="please enter here image url" control=true]`
     <strong>url: </strong>The url of the image, this will be the complete path of the image, which you will get from media manager itself.  
    <strong>For Example:</strong> `[dimage url="http://domain-name.com/wp-content/uploads/10/image-name.jpg" control=true]`
  Here replace [domain-name.com] with your domain name. Also rename the image name too. 
   <strong>control{true/false}:</strong> It is the feature to show control on the image or not. Default it setup as true.

=== Screenshots ===
1. Front-end View
1. Front-end View - Multiple 360 Image on Single page.
1. Admin View - Gutenberg Dimage 360
1. Admin View - Gutenberg Dimage 360
1. Admin View - Shortcode with URL
1. Admin View - Shortcode with Attachment ID



== Installation ==
1. Upload `d-image-360` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.4 =

* Release date: April 16, 2018
* Multiple Image can be loaded on single page, by using multiple shortcode.					

= 1.5 =

* Release date: Jun 06, 2018
* Auto rotate true/false functionality added

= 1.6 =

* Release date: July 04, 2018
* Zoom level from 0 to 100 functionality added through shortcode.
* Animation Speed from 0 to 100 functionality added through shortcode.

= 1.7 =

* Release date: September 04, 2018
* Default position functionality added through shortcode.

= 1.8 =

* Release date: March 14, 2019
* Default zooming functionality added thorugh shortcode.
* Default is TRUE

= 2.0 =

* Release date: Dec 24, 2019
* Gutenberg Support now you can add 360 image through Gutenberg block and set a custom setting for image