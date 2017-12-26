<?php
/*
  Template name: Home
 */
?>

<?php get_header(); ?>

<div class="home_slider">
    <div class="left">
        <ul id="slider_left">
            <?php
            $slideleft = get_post_meta(get_the_ID(), 'slideleft', true);
            foreach ($slideleft['img'] as $k => $v):
            ?>
            <li><a href="<?php echo $slideleft['link'][$k]; ?>" target="_blank"><img src="<?php echo $v; ?>" width="655" height="242" /></a></li>
            <?php endforeach; ?>
        </ul> 
    </div>
    <div class="right">
        <ul id="slider_right">
            <?php
            $slideright = get_post_meta(get_the_ID(), 'slideright', true);
            foreach ($slideright['img'] as $k => $v):
            ?>
            <li><a href="<?php echo $slideright['link'][$k]; ?>" target="_blank"><img src="<?php echo $v; ?>" width="263" height="242" /></a></li>
            <?php endforeach; ?>
        </ul> 
    </div>
    <div class="clear"></div>
</div>

<?php if ( function_exists('dynamic_sidebar') ) { dynamic_sidebar('sidebar_home'); } ?>
<div class="clear"></div>

<?php get_footer(); ?>