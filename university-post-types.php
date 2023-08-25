<?php

function university_post_types()
{
    // WP function that does heavy lifting (name, array of options to describe it)
    register_post_type('event', [
        'show_in_rest' => true, // enables REST API support for routing
        'supports' => ['title', 'editor', 'excerpt'],
        'rewrite' => ['slug' => 'events'], // keeps post type name, but changes the slug for address purposes (ie. an archive of postS not post)
        'has_archive' => true, // allows for an archive to be created for this category type
        'public' => true, // allows it to be viewable to guests
        'show_in_rest' => true, // allows new custom post types to use the modern block editor
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ],
        'menu_icon' => 'dashicons-calendar' // can find other icons by looking for WP dashicons
    ]);

    // Program Post Type
    register_post_type('program', [
        'show_in_rest' => true,
        'supports' => ['title', 'editor'],
        'rewrite' => ['slug' => 'programs'],
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ],
        'menu_icon' => 'dashicons-awards'
    ]);

    // Professor Post Type
    register_post_type('professor', [
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ],
        'menu_icon' => 'dashicons-welcome-learn-more'
    ]);
}

// creating new post type, will call a func w/2nd arg name at the precise moment (init)
add_action('init', 'university_post_types');
