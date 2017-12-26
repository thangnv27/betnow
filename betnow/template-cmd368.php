<?php
/*
  Template name: CMD368
 */
?>

<?php get_header(); ?>

<div class="content_left">
    <?php include 'box-slider.php'; ?>
    <?php include 'box-left.php'; ?>
    <?php include 'box-right.php'; ?>
</div>

<div class="content_right">
    <?php if ( function_exists('dynamic_sidebar') ) { dynamic_sidebar('sidebar_cmd368'); } ?>
</div>
<div class="clear" style="height: 10px;"></div>

<?php get_footer(); ?>