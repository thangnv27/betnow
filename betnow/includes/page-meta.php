<?php

# Meta box
$slideleft_meta_box = array(
    'id' => 'slideleft-meta-box',
    'title' => 'Slider Left',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array()
);
$slideright_meta_box = array(
    'id' => 'slideright-meta-box',
    'title' => 'Slider Right',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array()
);
$guide_meta_box = array(
    'id' => 'guide-meta-box',
    'title' => 'Guide Links',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Hướng dẫn đăng ký',
            'desc' => 'Nhập URL',
            'id' => 'guide_reg_url',
            'type' => 'text',
            'std' => '',
        ),
        array(
            'name' => 'Hướng dẫn đặt cọc',
            'desc' => 'Nhập URL',
            'id' => 'guide_deposit_url',
            'type' => 'text',
            'std' => '',
        ),
        array(
            'name' => 'Hướng dẫn rút tiền',
            'desc' => 'Nhập URL',
            'id' => 'guide_withdrawal_url',
            'type' => 'text',
            'std' => '',
        ),
        array(
            'name' => 'Danh mục khuyến mãi',
            'desc' => '',
            'id' => 'cat_promotion',
            'type' => 'select',
            'std' => '',
            'options' => $category_list,
        ),
    )
);

// Add post meta box
if(is_admin()){
    add_action('admin_menu', 'page_add_box');
    add_action('save_post', 'page_add_box');
    add_action('save_post', 'page_save_data');
}

function page_add_box(){
    global $slideleft_meta_box, $slideright_meta_box, $guide_meta_box;
    add_meta_box($slideleft_meta_box['id'], $slideleft_meta_box['title'], 'slideleft_show_box', $slideleft_meta_box['page'], $slideleft_meta_box['context'], $slideleft_meta_box['priority']);
    add_meta_box($slideright_meta_box['id'], $slideright_meta_box['title'], 'slideright_show_box', $slideright_meta_box['page'], $slideright_meta_box['context'], $slideright_meta_box['priority']);
    add_meta_box($guide_meta_box['id'], $guide_meta_box['title'], 'guide_show_box', $guide_meta_box['page'], $guide_meta_box['context'], $guide_meta_box['priority']);
}

// Callback function to show fields in post meta box
function slideleft_show_box() {
    // Use nonce for verification
    global $post;
    
    $slideleft = get_post_meta($post->ID, 'slideleft', true);

    // Use nonce for verification
    echo '<input type="hidden" name="secure_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo <<<HTML
   <table width="100%" id="tbl_slideleft">
       <tbody>
HTML;
    foreach ($slideleft['img'] as $k => $v) {
        echo '<tr>
            <td>
                Image: <input type="text" style="width:86%" name="slideleft[img][' . $k . ']" id=slideleft_img_' . $k . ' value="' . $v . '" />
            </td>
            <td>
                <input type="button" style="width:100%" class="button" value="Image" onClick="uploadSliderIMG(\'slideleft_img_' . $k . '\')"/>
            </td>
            <td>
                Link: <input type="text" style="width:89%" name="slideleft[link][' . $k . ']" value="' . $slideleft['link'][$k] . '" />
            </td>
            <td>
                <input type="button" style="width:99%" class="button tr_remove" value="Remove">
            </td>
        </tr>';
    }
    echo <<<HTML
       <tr id="sl_clone" style="display:none">
            <td>
                Image: <input type="text" style="width:86%" id="slideleft_img" />
            </td>
            <td>
                <input type="button" style="width:100%" class="button btn_upload" value="Image" />
            </td>
            <td>
                Link: <input type="text" style="width:89%" id="slideleft_link" />
            </td>
            <td>
                <input type="button" style="width:99%" class="button tr_remove" value="Remove">
            </td>
        </tr>
        </tbody>
    </table>
    <input style="margin-left:4px;" type="button" class="button btnAddfield" value="Add row" />
HTML;
}

// Callback function to show fields in post meta box
function slideright_show_box() {
    // Use nonce for verification
    global $post;
    
    $slideright = get_post_meta($post->ID, 'slideright', true);
    
    // Use nonce for verification
    echo '<input type="hidden" name="secure_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo <<<HTML
   <table width="100%" id="tbl_slideright">
       <tbody>
HTML;
    foreach ($slideright['img'] as $k => $v) {
        echo '<tr>
            <td>
                Image: <input type="text" style="width:86%" name="slideright[img][' . $k . ']" id=slideright_img_' . $k . ' value="' . $v . '" />
            </td>
            <td>
                <input type="button" style="width:100%" class="button" value="Image" onClick="uploadSliderIMG(\'slideright_img_' . $k . '\')"/>
            </td>
            <td>
                Link: <input type="text" style="width:89%" name="slideright[link][' . $k . ']" value="' . $slideright['link'][$k] . '" />
            </td>
            <td>
                <input type="button" style="width:99%" class="button tr_remove" value="Remove">
            </td>
        </tr>';
    }
    echo <<<HTML
       <tr id="sr_clone" style="display:none">
            <td>
                Image: <input type="text" style="width:86%" id="slideright_img" />
            </td>
            <td>
                <input type="button" style="width:100%" class="button btn_upload" value="Image" />
            </td>
            <td>
                Link: <input type="text" style="width:89%" id="slideright_link" />
            </td>
            <td>
                <input type="button" style="width:99%" class="button tr_remove" value="Remove">
            </td>
        </tr>
        </tbody>
    </table>
    <input style="margin-left:4px;" type="button" class="button btnAddfield" value="Add row" />
HTML;
}

function guide_show_box() {
    // Use nonce for verification
    global $guide_meta_box, $post;
    
    custom_output_meta_box($guide_meta_box, $post);
}

// Save data from post meta box
function page_save_data($post_id) {
    global $guide_meta_box;

    $slideleft = getRequest('slideleft');
    $slideright = getRequest('slideright');

    update_post_meta($post_id, 'slideleft', $slideleft);
    update_post_meta($post_id, 'slideright', $slideright);

    custom_save_meta_box($guide_meta_box, $post_id);
}