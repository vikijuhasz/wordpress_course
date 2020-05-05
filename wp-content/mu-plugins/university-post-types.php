<?php

function university_post_types()
{
    register_post_type('event', [
        'rewrite' => ['slug' => 'events'],
        'has_archive' => true,
        'public' => true, 
        'labels' => [
            'name' => 'Events', 
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event', 
            'all_items' => 'All events', 
            'singular_name' => 'Event'
        ], 
        'menu_icon' => 'dashicons-calendar'
    ]);
}

add_action('init', 'university_post_types');