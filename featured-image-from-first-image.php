<?php
/**
 * Plugin Name: Featured Image From First Image
 * Plugin URI: https://github.com/growwithsmc/featured-image-from-first-image
 * Description: Automatically sets the first image attached to a post as the featured image if not already set. This ensures that each post has a relevant and visually appealing featured image without manual setup.
 * Version: 1.0
 * Author: Shaibit Marketing Concierge
 * Author URI: https://shaibit.net
 */

function auto_featured_image() {
    global $post;

    if (!has_post_thumbnail($post->ID)) {
        $attached_image = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1");
        
        if ($attached_image) {
            foreach ($attached_image as $attachment_id => $attachment) {
                set_post_thumbnail($post->ID, $attachment_id);
            }
        }
    }
}

// Hooks into WordPress to automate the setting of featured images.
add_action('the_post', 'auto_featured_image'); // Used temporarily to generate all featured images
add_action('save_post', 'auto_featured_image'); // Used for new posts
add_action('draft_to_publish', 'auto_featured_image');
add_action
