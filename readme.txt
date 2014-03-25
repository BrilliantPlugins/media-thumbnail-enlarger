=== Media Library Thumbnail Enlarger ===
Contributors: nickciske
Donate link: http://thoughtrefinery.com/contact/say-thank-you/
Tags: media library, thumbnail, column
Requires at least: 3.5.2
Tested up to: 3.8.1
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Makes media library thumbnails match the WordPress thumbnail size or a custom size named 'mte_thumbnail'

== Description ==

Makes media library thumbnails match the WordPress thumbnail size or a custom size named 'mte_thumbnail'

To set a custom size, add the line below to functions.php (or a plugin) and adjust the dimensions as needed.

`add_image_size( 'mte_thumbnail', 300, 300, true );`

== Screenshots ==

1. Without the plugin active
1. Using the default 150x150 WordPress thumbnail size
1. Using a somewhat ridiculous 600x600 thumbnail size

== Installation ==

1. Upload the `plugin` folder to the `/wp-content/plugins/` directory or install via the Add New Plugin menu
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Optional: Define a custom size called 'mte_thumbnail' 

== Frequently Asked Questions ==

= Where is the an options screen? =

There isn't one.

= Is there an options screen where I can set a custom thumbnail size? =

Not yet!

To set a custom size, add the line below to functions.php (or a plugin) and adjust the dimensions as needed.

`add_image_size( 'mte_thumbnail', 300, 300, true );`

= I chose a custom thumbnail size, but the thumbnails are not appearing at that size? =

You may need to rebuild your thumbnails (just that size):
https://wordpress.org/plugins/ajax-thumbnail-rebuild/

Or install WP_Thumb so they can be generated on the fly:
http://wordpress.org/plugins/wp-thumb/

== Changelog ==

= 1.1.1 =
* Fix archive icon color
* Tweak icon license text

= 1.1 =
* FAQ updates
* Replace WordPress bundled Crystal icons with SVG icons

= 1.0.3 =
* Fix column sizing bug

= 1.0.2 =
* Fix 1.0.1 partial deploy

= 1.0.1 =
* Add screenshots

= 1.0 =
* Initial release