<?php
//add custome post type to wordpress

function custom_post_type() {
    $labels = array(
        'name'               => _x('Custom Post Type', 'post type general name', 'your-text-domain'),
        'singular_name'      => _x('Custom Post', 'post type singular name', 'your-text-domain'),
        'menu_name'          => _x('Custom Posts', 'admin menu', 'your-text-domain'),
        'name_admin_bar'     => _x('Custom Post', 'add new on admin bar', 'your-text-domain'),
        'add_new'            => _x('Add New', 'custom post', 'your-text-domain'),
        'add_new_item'       => __('Add New Custom Post', 'your-text-domain'),
        'new_item'           => __('New Custom Post', 'your-text-domain'),
        'edit_item'          => __('Edit Custom Post', 'your-text-domain'),
        'view_item'          => __('View Custom Post', 'your-text-domain'),
        'all_items'          => __('All Custom Posts', 'your-text-domain'),
        'search_items'       => __('Search Custom Posts', 'your-text-domain'),
        'parent_item_colon'  => __('Parent Custom Posts:', 'your-text-domain'),
        'not_found'          => __('No custom posts found.', 'your-text-domain'),
        'not_found_in_trash' => __('No custom posts found in Trash.', 'your-text-domain')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'custom-post-type'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('custom_post_type', $args);
}

add_action('init', 'custom_post_type');
