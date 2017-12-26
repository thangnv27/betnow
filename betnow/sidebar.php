<div class="content_right">
    <?php 
    if(is_single()){
        $custom_sidebar = get_post_meta(get_the_ID(), 'custom_sidebar', true);
        if ( function_exists('dynamic_sidebar') ) { dynamic_sidebar($custom_sidebar); } 
    } else {
        if ( function_exists('dynamic_sidebar') ) { dynamic_sidebar('sidebar'); } 
    }
    ?>
</div>
<div class="clear" style="height: 10px;"></div>