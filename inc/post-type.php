<?php
/**
 * Custom Post Types for Jager Theme
 *
 * @package Jager
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register custom post types
 */
function jager_register_post_types() {
    // Register Event Post Type
    $labels = array(
        'name'                  => _x( 'Events', 'Post Type General Name', 'jager' ),
        'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'jager' ),
        'menu_name'             => __( 'Events', 'jager' ),
        'name_admin_bar'        => __( 'Event', 'jager' ),
        'archives'              => __( 'Event Archives', 'jager' ),
        'attributes'            => __( 'Event Attributes', 'jager' ),
        'parent_item_colon'     => __( 'Parent Event:', 'jager' ),
        'all_items'             => __( 'All Events', 'jager' ),
        'add_new_item'          => __( 'Add New Event', 'jager' ),
        'add_new'               => __( 'Add New', 'jager' ),
        'new_item'              => __( 'New Event', 'jager' ),
        'edit_item'             => __( 'Edit Event', 'jager' ),
        'update_item'           => __( 'Update Event', 'jager' ),
        'view_item'             => __( 'View Event', 'jager' ),
        'view_items'            => __( 'View Events', 'jager' ),
        'search_items'          => __( 'Search Event', 'jager' ),
        'not_found'             => __( 'Not found', 'jager' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'jager' ),
        'featured_image'        => __( 'Featured Image', 'jager' ),
        'set_featured_image'    => __( 'Set featured image', 'jager' ),
        'remove_featured_image' => __( 'Remove featured image', 'jager' ),
        'use_featured_image'    => __( 'Use as featured image', 'jager' ),
        'insert_into_item'      => __( 'Insert into event', 'jager' ),
        'uploaded_to_this_item' => __( 'Uploaded to this event', 'jager' ),
        'items_list'            => __( 'Events list', 'jager' ),
        'items_list_navigation' => __( 'Events list navigation', 'jager' ),
        'filter_items_list'     => __( 'Filter events list', 'jager' ),
    );
    
    $args = array(
        'label'                 => __( 'Event', 'jager' ),
        'description'           => __( 'Event information', 'jager' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'event_category', 'event_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'event' ),
    );
    
    register_post_type( 'event', $args );
    
    // Register Event Category Taxonomy
    $cat_labels = array(
        'name'                       => _x( 'Event Categories', 'Taxonomy General Name', 'jager' ),
        'singular_name'              => _x( 'Event Category', 'Taxonomy Singular Name', 'jager' ),
        'menu_name'                  => __( 'Event Categories', 'jager' ),
        'all_items'                  => __( 'All Event Categories', 'jager' ),
        'parent_item'                => __( 'Parent Event Category', 'jager' ),
        'parent_item_colon'          => __( 'Parent Event Category:', 'jager' ),
        'new_item_name'              => __( 'New Event Category Name', 'jager' ),
        'add_new_item'               => __( 'Add New Event Category', 'jager' ),
        'edit_item'                  => __( 'Edit Event Category', 'jager' ),
        'update_item'                => __( 'Update Event Category', 'jager' ),
        'view_item'                  => __( 'View Event Category', 'jager' ),
        'separate_items_with_commas' => __( 'Separate event categories with commas', 'jager' ),
        'add_or_remove_items'        => __( 'Add or remove event categories', 'jager' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'jager' ),
        'popular_items'              => __( 'Popular Event Categories', 'jager' ),
        'search_items'               => __( 'Search Event Categories', 'jager' ),
        'not_found'                  => __( 'Not Found', 'jager' ),
        'no_terms'                   => __( 'No event categories', 'jager' ),
        'items_list'                 => __( 'Event Categories list', 'jager' ),
        'items_list_navigation'      => __( 'Event Categories list navigation', 'jager' ),
    );
    
    $cat_args = array(
        'labels'                     => $cat_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array( 'slug' => 'event-category' ),
    );
    
    register_taxonomy( 'event_category', array( 'event' ), $cat_args );
    
    // Register Event Tag Taxonomy
    $tag_labels = array(
        'name'                       => _x( 'Event Tags', 'Taxonomy General Name', 'jager' ),
        'singular_name'              => _x( 'Event Tag', 'Taxonomy Singular Name', 'jager' ),
        'menu_name'                  => __( 'Event Tags', 'jager' ),
        'all_items'                  => __( 'All Event Tags', 'jager' ),
        'parent_item'                => __( 'Parent Event Tag', 'jager' ),
        'parent_item_colon'          => __( 'Parent Event Tag:', 'jager' ),
        'new_item_name'              => __( 'New Event Tag Name', 'jager' ),
        'add_new_item'               => __( 'Add New Event Tag', 'jager' ),
        'edit_item'                  => __( 'Edit Event Tag', 'jager' ),
        'update_item'                => __( 'Update Event Tag', 'jager' ),
        'view_item'                  => __( 'View Event Tag', 'jager' ),
        'separate_items_with_commas' => __( 'Separate event tags with commas', 'jager' ),
        'add_or_remove_items'        => __( 'Add or remove event tags', 'jager' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'jager' ),
        'popular_items'              => __( 'Popular Event Tags', 'jager' ),
        'search_items'               => __( 'Search Event Tags', 'jager' ),
        'not_found'                  => __( 'Not Found', 'jager' ),
        'no_terms'                   => __( 'No event tags', 'jager' ),
        'items_list'                 => __( 'Event Tags list', 'jager' ),
        'items_list_navigation'      => __( 'Event Tags list navigation', 'jager' ),
    );
    
    $tag_args = array(
        'labels'                     => $tag_labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array( 'slug' => 'event-tag' ),
    );
    
    register_taxonomy( 'event_tag', array( 'event' ), $tag_args );
}
add_action( 'init', 'jager_register_post_types', 0 );

/**
 * Flush rewrite rules on theme activation to ensure post type permalinks work
 */
function jager_rewrite_flush() {
    jager_register_post_types();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'jager_rewrite_flush' );