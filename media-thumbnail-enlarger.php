<?php
/*
Plugin Name: Media Library Thumbnail Enlarger
Plugin URI: http://ThoughtRefinery.com/
Description: Makes media library thumbnails match the WordPress thumbnail size or a custom size named 'mte_thumbnail'
Author: Nick Ciske (ThoughtRefinery)
Version: 1.0.3
Author URI: http://thoughtrefinery.com/
*/

// Customize media list table
add_action( 'admin_init', 'mte_media_columns' );

function mte_media_columns() {

    add_action('manage_media_custom_column', 'mte_custom_media_column_content',10,2);
    add_filter('manage_media_columns', 'mte_custom_media_column_headings');

}

add_action( 'admin_head','mte_admin_css' );

// Remove default column and replace it with ours
function mte_custom_media_column_headings( $columns ) {

	$offset = 2;
	$new_columns = array_slice($columns, 0, $offset, true) + array('mte_thumbnail' => '') + array_slice($columns, $offset, NULL, true);
	unset( $new_columns['icon'] );

	return $new_columns;
	
}

// Output our custom thumbnail
function mte_custom_media_column_content( $column_name, $id ) {
	
	echo '<a href="'.get_edit_post_link( $id ).'">';
	
		if( wp_attachment_is_image( $id ) ){
			// Custom image
			echo wp_get_attachment_image( $id, mte_get_image_size(), false );
		}else{
			// Not an image, use the icon
			echo '<img src="'.wp_mime_type_icon( $id ).'">';
		}	
	
	echo '</a>';
	
}

// Which image size are we using?
function mte_get_image_size(){
	
	if( in_array( 'mte_thumbnail', get_intermediate_image_sizes() ) )
		return 'mte_thumbnail';

	return 'thumbnail';
	
}

// Size column to image
function mte_admin_css(){
	
	$screen = get_current_screen();

	if( $screen->base != 'upload' )
		return;

	$w = get_option( mte_get_image_size() . '_size_w' );

	echo '<style>';
	echo '.fixed .column-mte_thumbnail{ width: '.$w.'px; text-align: center; }';
	echo '</style>';

}