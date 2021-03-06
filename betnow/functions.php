<?php
######## BLOCK CODE NAY LUON O TREN VA KHONG DUOC XOA ##########################
include 'includes/config.php';
include 'libs/HttpFoundation/Request.php';
include 'libs/HttpFoundation/Response.php';
include 'libs/HttpFoundation/Session.php';
include 'libs/custom.php';
include 'libs/common-scripts.php';
include 'libs/meta-box.php';
include 'libs/theme_functions.php';
include 'libs/theme_settings.php';
######## END: BLOCK CODE NAY LUON O TREN VA KHONG DUOC XOA ##########################
include 'libs/shortcodes.php';
include 'includes/widgets/ads.php';
include 'includes/widgets/home-block.php';
include 'includes/page-meta.php';
include 'includes/post-meta.php';

if (is_admin()) {
    add_action('admin_menu', 'custom_remove_menu_pages');
    add_action('admin_menu', 'remove_menu_editor', 102);
}

/**
 * Remove admin menu
 */
function custom_remove_menu_pages() {
//    remove_menu_page('edit-comments.php');
}

function remove_menu_editor() {
    remove_submenu_page('themes.php', 'theme-editor.php');
}

/* ----------------------------------------------------------------------------------- */
# Setup Theme
/* ----------------------------------------------------------------------------------- */
if (!function_exists("my_theme_setup")) {

    function my_theme_setup() {
        ## Enable Links Manager (WP 3.5 or higher)
        add_filter('pre_option_link_manager_enabled', '__return_true');

        ## Post Thumbnails
        if (function_exists('add_theme_support')) {
            add_theme_support('post-thumbnails');
        }
        /* if (function_exists('add_image_size')) {
          add_image_size('thumbnail176', 176, 176, FALSE);
          } */

        ## Register menu location
        register_nav_menus(array(
            'primary' => 'Primary Location',
            'footermenu' => 'Footer Menu',
        ));
    }

}

add_action('after_setup_theme', 'my_theme_setup');
/* ----------------------------------------------------------------------------------- */
# Widgets init
/* ----------------------------------------------------------------------------------- */
if (!function_exists("my_widgets_init")) {

    function my_widgets_init() {
        // Register Sidebar
        register_sidebar(array(
            'id' => __('sidebar'),
            'name' => __('Sidebar'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_138bet'),
            'name' => __('Sidebar 138BET'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_cmd368'),
            'name' => __('Sidebar CMD368'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_w88'),
            'name' => __('Sidebar W88'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_m88'),
            'name' => __('Sidebar M88'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_188bet'),
            'name' => __('Sidebar 188BET'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_fun88'),
            'name' => __('Sidebar FUN88'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_dafabet'),
            'name' => __('Sidebar DAFABET'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_12bet'),
            'name' => __('Sidebar 12BET'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_bet365'),
            'name' => __('Sidebar BET365'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_s11bet'),
            'name' => __('Sidebar S11BET'),
            'before_widget' => '<div class="module"><div class="module_top"><div class="module_bottom"><div class="module_mid">',
            'after_widget' => '</div></div></div></div>',
            'before_title' => '<div class="title">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'id' => __('sidebar_home'),
            'name' => __('Sidebar Home'),
            'before_widget' => '<div class="box_home">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        ));
    }

    // Register widgets
    register_widget('Ads_Widget');
    register_widget('Home_Block_Widget');
}

add_action('widgets_init', 'my_widgets_init');

/* ----------------------------------------------------------------------------------- */
# User login
/* ----------------------------------------------------------------------------------- */
add_action('init', 'redirect_after_logout');

function redirect_after_logout() {
    if (preg_match('#(wp-login.php)?(loggedout=true)#', $_SERVER['REQUEST_URI']))
        wp_redirect(get_option('siteurl'));
}

/* ----------------------------------------------------------------------------------- */
# Register menu location
/* ----------------------------------------------------------------------------------- */

function admin_add_custom_js() {
    ?>
    <script type="text/javascript">/* <![CDATA[ */
        jQuery(function($) {
            var area = new Array();

            $.each(area, function(index, id) {
                //tinyMCE.execCommand('mceAddControl', false, id);
                tinyMCE.init({
                    selector: "textarea#" + id,
                    height: 400
                });
                $("#newmeta-submit").click(function() {
                    tinyMCE.triggerSave();
                });
            });

            $(".submit input[type='submit']").click(function() {
                if (typeof tinyMCE != 'undefined') {
                    tinyMCE.triggerSave();
                }
            });
            
            // Change page template
            if($("#page_template").val() === "template-home.php"){
                $("#slideleft-meta-box").show();
                $("#slideright-meta-box").show();
                $("#guide-meta-box").hide();
            } else if($("#page_template").val() === "template-m88.php" || 
                $("#page_template").val() === "template-w88.php" || 
                $("#page_template").val() === "template-138bet.php" || 
                $("#page_template").val() === "template-188bet.php" || 
                $("#page_template").val() === "template-cmd368.php" || 
                $("#page_template").val() === "template-fun88.php" || 
                $("#page_template").val() === "template-dafabet.php" || 
                $("#page_template").val() === "template-12bet.php" || 
                $("#page_template").val() === "template-s11bet.php" || 
                $("#page_template").val() === "template-bet365.php"){
                    $("#slideleft-meta-box").show();
                    $("#slideright-meta-box").hide();
                    $("#guide-meta-box").show();
            } else {
                $("#slideleft-meta-box").hide();
                $("#slideright-meta-box").hide();
                $("#guide-meta-box").hide();
            }
            $("#page_template").change(function (){
                if($(this).val() === "template-home.php"){
                    $("#slideleft-meta-box").show();
                    $("#slideright-meta-box").show();
                    $("#guide-meta-box").hide();
                } else if($(this).val() === "template-m88.php" || 
                        $(this).val() === "template-w88.php" || 
                        $(this).val() === "template-138bet.php" || 
                        $(this).val() === "template-188bet.php" || 
                        $(this).val() === "template-cmd368.php" || 
                        $(this).val() === "template-fun88.php" || 
                        $(this).val() === "template-dafabet.php" || 
                        $(this).val() === "template-12bet.php" || 
                        $(this).val() === "template-s11bet.php" || 
                        $(this).val() === "template-bet365.php"){
                    $("#slideleft-meta-box").show();
                    $("#slideright-meta-box").hide();
                    $("#guide-meta-box").show();
                } else {
                    $("#slideleft-meta-box").hide();
                    $("#slideright-meta-box").hide();
                    $("#guide-meta-box").hide();
                }
            });
            
            // Add row slide
            var $tr_id = $('#tbl_slideleft').find("tr").length - 1;
            $('#slideleft-meta-box .btnAddfield').on('click', function(e) {
                ++$tr_id;

                e.preventDefault();
                var $cloned_tr = $('#sl_clone').clone(true);
                $cloned_tr.removeAttr('id').removeAttr('style').find('#slideleft_img').attr({
                    id: "slideleft_img_" + $tr_id,
                    name: "slideleft[img][" + $tr_id + "]"
                });
                $cloned_tr.find('#slideleft_link').attr({
                    id: "slideleft_link_" + $tr_id,
                    name: "slideleft[link][" + $tr_id + "]"
                });
                $cloned_tr.find('.btn_upload').attr({
                    onClick: "uploadSliderIMG('slideleft_img_" + $tr_id + "')"
                });
                $cloned_tr.insertBefore($('#sl_clone'));
            });
            
            var $tr_id2 = $('#tbl_slideright').find("tr").length - 1;
            $('#slideright-meta-box .btnAddfield').on('click', function(e) {
                ++$tr_id2;

                e.preventDefault();
                var $cloned_tr = $('#sr_clone').clone(true);
                $cloned_tr.removeAttr('id').removeAttr('style').find('#slideright_img').attr({
                    id: "slideright_img_" + $tr_id2,
                    name: "slideright[img][" + $tr_id2 + "]"
                });
                $cloned_tr.find('#slideright_link').attr({
                    id: "slideright_link_" + $tr_id2,
                    name: "slideright[link][" + $tr_id2 + "]"
                });
                $cloned_tr.find('.btn_upload').attr({
                    onClick: "uploadSliderIMG('slideright_img_" + $tr_id2 + "')"
                });
                $cloned_tr.insertBefore($('#sr_clone'));
            });

            $('.tr_remove').on('click', function(e) {
                e.preventDefault();
                $(this).closest('tr').remove();
            });

        });
        /* ]]> */
    </script>
    <?php
}

add_action('admin_print_footer_scripts', 'admin_add_custom_js', 99);

function pre_get_image_url($url, $show = true) {
    if (trim($url) == "")
        $url = get_template_directory_uri() . "/images/no_image_available.jpg";
    if ($show)
        echo $url;
    else
        return $url;
}

/* ----------------------------------------------------------------------------------- */
# Custom search
/* ----------------------------------------------------------------------------------- */
add_action('pre_get_posts', 'custom_search_filter');

function custom_search_filter($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_archive and is_taxonomy('product_category')) {
            $products_per_page = intval(get_option(SHORT_NAME . "_product_pager"));
            if ($products_per_page == 0) {
                $products_per_page = 6;
            }
            $query->set('posts_per_page', $products_per_page);
            $query->set('orderby', 'date');
            $query->set('order', 'asc');
        } else if ($query->is_search) {
            $query->set('post_type', array('post', 'product'));
        }
    }
    return $query;
}

/*
  add_filter('posts_where', 'title_like_posts_where');

  function title_like_posts_where($where){
  global $wpdb, $wp_query;
  if($wp_query->is_search){
  $where = str_replace("AND ((ppo_postmeta.meta_key =", "OR ((ppo_postmeta.meta_key =", $where);
  }
  return $where;
  }
 */

function get_attachment_id_from_src($image_src) {
    global $wpdb;
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
    $id = $wpdb->get_var($query);
    return $id;
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (!current_user_can('administrator') && !current_user_can('editor') && !is_admin()) {
        show_admin_bar(false);
    }
}

function custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    if ('div' == $args['style']) {
        $add_below = 'comment';
    } else {
        $add_below = 'div-comment';
    }
    ?>
    <li id="comment-317" class="alt">
        <b><?php echo get_comment_author_link(); ?></b> viết lúc 
        <?php
            /* translators: 1: date, 2: time */
            printf( __('%1$s, %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
        ?>
        <div class="commenttext">
            <div style="float:left;margin:0px 10px 5px 0px;">
                <img width="70" height="70" class="avatar avatar-70 photo" src="http://0.gravatar.com/avatar/8300d5f92f78e45df840ee701cc1f591?s=70&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G" alt="" />
            </div>
            <?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
            <?php endif; ?>
            <div><?php comment_text() ?></div>
            <div style="clear:both;"></div>
        </div>
        <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
    </li>
    <?php
}
