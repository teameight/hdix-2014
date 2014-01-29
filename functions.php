<?php

function max_posts( $query ) {

if ( is_archive() && is_main_query() ) {
    // Display 50 posts for a custom post type called 'movie'
    $query->set( 'posts_per_page', 10 );
    return;
}

}
add_action( 'pre_get_posts', 'max_posts', 1 );

wp_enqueue_script('hdix', get_stylesheet_directory_uri().'/hdix.js', array('jquery') );
