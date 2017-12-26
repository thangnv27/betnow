<?php

# Meta box
$custom_post_meta_box = array(
    'id' => 'custom-post-meta-box',
    'title' => 'Sidebar Option',
    'page' => 'post',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Sidebar',
            'desc' => '',
            'id' => 'custom_sidebar',
            'type' => 'select',
            'std' => '',
            'options' => array(
                'sidebar' => "Mặc định",
                'sidebar_138bet' => "Sidebar 138BET",
                'sidebar_cmd368' => "Sidebar CMD368",
                'sidebar_w88' => "Sidebar W88",
                'sidebar_m88' => "Sidebar M88",
                'sidebar_188bet' => "Sidebar 188BET",
                'sidebar_fun88' => "Sidebar FUN88",
                'sidebar_dafabet' => "Sidebar DAFABET",
                'sidebar_12bet' => "Sidebar 12BET",
                'sidebar_bet365' => "Sidebar BET365",
                'sidebar_s11bet' => "Sidebar S11BET",
            ),
        ),
    )
);

// Add post meta box
if(is_admin()){
    add_action('admin_menu', 'custom_post_add_box');
    add_action('save_post', 'custom_post_add_box');
    add_action('save_post', 'custom_post_save_data');
}

function custom_post_add_box(){
    global $custom_post_meta_box;
    add_meta_box($custom_post_meta_box['id'], $custom_post_meta_box['title'], 'custom_post_show_box', $custom_post_meta_box['page'], $custom_post_meta_box['context'], $custom_post_meta_box['priority']);
}

// Callback function to show fields in post meta box
function custom_post_show_box() {
    // Use nonce for verification
    global $custom_post_meta_box, $post;
    
    custom_output_meta_box($custom_post_meta_box, $post);
}

// Save data from post meta box
function custom_post_save_data($post_id) {
    global $custom_post_meta_box;

    custom_save_meta_box($custom_post_meta_box, $post_id);
}