<?php
/*
Plugin Name: The Events Calendar Order by Post Date
Description: An extension to events calendar that includes event calendar events in new posts archive.
Version: 4.6.4
Author: Modern Tribe, Inc.
Author URI: http://m.tri.be/1x
Text Domain: the-events-calendar
License: GPLv2 or later
*/

/*
  The below code is from the tribe events page
*/
function tribe_post_date_ordering( $query ) {
	if ( ! empty( $query->tribe_is_multi_posttype ) ) {
		remove_filter( 'posts_fields', array( 'Tribe__Events__Query', 'multi_type_posts_fields' ) );
		$query->set( 'order', 'DESC' );
	}
}
add_action( 'pre_get_posts', 'tribe_post_date_ordering', 51 );



/*
  3. modify display of the titles of the different post types
*/
/*
function the_post_callback( $post_object, $query ) {
	//echo "<pre>";
	//print_r($query);
	//	echo "</pre>";

	if ( ! empty( $query->tribe_is_multi_posttype ) ) {
		if ($post_object->post_type == 'tribe_events'){
			$post_object->post_title = "【新着お出かけ情報】".$post_object->post_title;
		}
	}
	
}
add_action( 'the_post', 'the_post_callback', 1, 2 );
*/
