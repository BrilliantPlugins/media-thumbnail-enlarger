=== Plugin Name ===
Contributors: nickciske
Donate link: http://thoughtrefinery.com/contact/say-thank-you/
Tags: comments, spam
Requires at least: 3.5.2
Tested up to: 3.8.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Makes media library thumbnails match the WordPress thumbnail size or a custom size named 'mte_thumbnail'

== Description ==

Makes media library thumbnails match the WordPress thumbnail size or a custom size named 'mte_thumbnail'

To set a custom size, add the line below to functions.php (or a plugin) and adjust the dimensions as needed.

`add_image_size( 'mte_thumbnail', 300, 300, true );`


== Installation ==

1. Upload the `plugin` folder to the `/wp-content/plugins/` directory or install via the Add New Plugin menu
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Optional: Define a custom size called 'mte_thumbnail' 

== Frequently Asked Questions ==

= Is there an options screen where I can set a custom thumbnail size? =

Not yet.

== Changelog ==

= 1.0 =
* Initial release