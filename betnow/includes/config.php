<?php

//$basename = basename($_SERVER['PHP_SELF']);
//if (!in_array($basename, array('plugins.php', 'update.php', 'upgrade.php', 'update-core.php'))) {
//    ob_start();
//    ob_start("ob_gzhandler");
//}
/* ----------------------------------------------------------------------------------- */
# Set default timezone
/* ----------------------------------------------------------------------------------- */
date_default_timezone_set('Asia/Ho_Chi_Minh');
/* ----------------------------------------------------------------------------------- */
# Definition
/* ----------------------------------------------------------------------------------- */
if (!defined('THEME_NAME'))
    define('THEME_NAME', "BetNow");
if (!defined('SHORT_NAME'))
    define('SHORT_NAME', "betnow");
if (!defined('MENU_NAME'))
    define('MENU_NAME', SHORT_NAME . "_settings");
/* ----------------------------------------------------------------------------------- */
# Theme Options
/* ----------------------------------------------------------------------------------- */
$pages = get_pages();
$page_list = array();
foreach ($pages as $page) {
    $page_list[$page->ID] = $page->post_title;
}
$categories = get_categories(array('hide_empty' => 0));
$category_list = array();
foreach ($categories as $category) {
    $category_list[$category->term_id] = $category->name;
}

$options = array(
    'general' => array(
        "name" => "General",
        array("id" => "ppo_opt",
            "std" => "general",
            "type" => "hidden"),
        array("name" => "Site Options",
            "type" => "title",
            "desc" => ""),
        array("type" => "open"),
        array("name" => "Keywords meta",
            "desc" => "Enter the meta keywords for all pages. These are used by search engines to index your pages with more relevance.",
            "id" => "keywords_meta",
            "std" => "",
            "type" => "text"),
        array("name" => "Keywords description",
            "desc" => "",
            "id" => "description_meta",
            "std" => "",
            "type" => "text"),
        array("name" => "Favicon",
            "desc" => "An icon associated with a particular website, and typically displayed in the address bar of a browser viewing the site. Size: 16x16",
            "id" => "favicon",
            "std" => "",
            "type" => "text",
            "btn" => true),
        array("name" => "Logo",
            "desc" => "Size: 459x100",
            "id" => "sitelogo",
            "std" => "",
            "type" => "text",
            "btn" => true),
        array("name" => "Thông tin cuối trang",
            "desc" => "",
            "id" => SHORT_NAME . "_footertext",
            "std" => '',
            "type" => "textarea",
            "editor" => array(
                'wyswig' => true,
                'rows' => 10
            )),
        array("name" => "Footer links",
            "desc" => "",
            "id" => SHORT_NAME . "_footerlinks",
            "std" => '',
            "type" => "textarea",
            "editor" => array(
                'wyswig' => true,
                'rows' => 5
            )),
        array("type" => "close"),
        array("type" => "submit"),
    ),
    'theme-options' => array(
        "name" => "Theme Options",
        array("id" => "ppo_opt",
            "std" => "theme-options",
            "type" => "hidden"),
        
        array("name" => "Tùy chọn theme",
            "type" => "title",
            "desc" => "Tùy chỉnh website.",
        ),
        array("type" => "open"),
        array("name" => "Tin bóng đá",
            "desc" => "ID danh mục tin bóng đá",
            "id" => SHORT_NAME . "_catFootballID",
            "std" => "",
            "type" => "text"),
        array("name" => "Google Analytics",
            "desc" => "Google Analytics. Ví dụ: UA-40210538-1",
            "id" => SHORT_NAME . "_gaID",
            "std" => "UA-40210538-1",
            "type" => "text"),
        array("type" => "close"),
        array("type" => "submit"),
    ),
//    'social-options' => array(
//        "name" => "Socials",
//        array("id" => "ppo_opt",
//            "std" => "social-options",
//            "type" => "hidden"),
//        array("name" => "Theo dõi trên mạng xã hội",
//            "type" => "title",
//            "desc" => ""),
//        array("type" => "open"),
//        array("name" => "Facebook",
//            "desc" => "Nhập URL page của bạn trên facebook.",
//            "id" => SHORT_NAME . "_fbURL",
//            "std" => "",
//            "type" => "text"),
//        array("name" => "Google plus",
//            "desc" => "Nhập URL page của bạn trên Google plus.",
//            "id" => SHORT_NAME . "_googlePlusURL",
//            "std" => "",
//            "type" => "text"),
//        array("name" => "Twitter",
//            "desc" => "Nhập URL page của bạn trên Twitter.",
//            "id" => SHORT_NAME . "_twitterURL",
//            "std" => "",
//            "type" => "text"),
//        array("name" => "Linked In",
//            "desc" => "Nhập URL page của bạn trên Linked In.",
//            "id" => SHORT_NAME . "_linkedInURL",
//            "std" => "",
//            "type" => "text"),
//        array("name" => "Youtube",
//            "desc" => "Nhập URL page của bạn trên Youtube.",
//            "id" => SHORT_NAME . "_youtubeURL",
//            "std" => "",
//            "type" => "text"),
//        array("name" => "Pinterest",
//            "desc" => "Nhập URL page của bạn trên Pinterest.",
//            "id" => SHORT_NAME . "_pinterestURL",
//            "std" => "",
//            "type" => "text"),
//        array("type" => "close"),
//        array("name" => "Apps",
//            "type" => "title",
//            "desc" => ""),
//        array("type" => "open"),
//        array("name" => "Facebook App ID",
//            "desc" => "Nhập ID App Facebook quản lý comment, chia sẻ...",
//            "id" => SHORT_NAME . "_appFBID",
//            "std" => '',
//            "type" => "text"),
//        array("name" => "DISQUS Site Shortname",
//            "desc" => "Nhập site shortname của bạn trên DISQUS để theo dõi và quản lý bình luận.",
//            "id" => SHORT_NAME . "_disqus_shortname",
//            "std" => '',
//            "type" => "text"),
//        array("type" => "close"),
//        array("type" => "submit"),
//    ),
);