<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="keywords" content="<?php echo get_option('keywords_meta') ?>" />
    <meta name="author" content="betnow.me" />
    <meta name="robots" content="index, follow" /> 
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="14.058324;108.277199" />
    <meta name="ICBM" content="14.058324, 108.277199" />

    <!--<meta name="viewport" content="initial-scale=1.0" />-->

    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />        
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/common.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wp-default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/page.css" />

    <script>
        var siteUrl = "<?php bloginfo('siteurl'); ?>";
        var themeUrl = "<?php bloginfo('stylesheet_directory'); ?>";
        var no_image_src = themeUrl + "/images/no_image_available.jpg";
        var ajaxurl = siteUrl + '/wp-admin/admin-ajax.php';
    </script>
    <script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

<?php
if (is_singular())
    wp_enqueue_script('comment-reply');

wp_head();
?>
    <!-- BEGIN Tynt Script -->
    <script type="text/javascript">
    if(document.location.protocol=='http:'){
     var Tynt=Tynt||[];Tynt.push('afci1MgfWr440Macwqm_6r');
     (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js';var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
    }
    </script>
    <!-- END Tynt Script -->
</head>
<body>
    <div id="header">
        <div id="banner"></div>
        <div class="menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => '',
                'container' => ''
            ));
            ?>
            <g:plusone></g:plusone>
        </div> 

    </div><!-- End header -->
    
    <div id="wrapper">
        <div id="container">
            <div class="container_top"></div>
            <div class="content_container">