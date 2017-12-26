<div class="slider">
    <ul id="slider_page">
        <?php
        $slideleft = get_post_meta(get_the_ID(), 'slideleft', true);
        foreach ($slideleft['img'] as $k => $v):
        ?>
        <li><a href="<?php echo $slideleft['link'][$k]; ?>" target="_blank"><img src="<?php echo $v; ?>" width="660" height="245" /></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="box_page">
    <a href="<?php echo get_post_meta(get_the_ID(), 'guide_reg_url', true); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/register.jpg" hspace="3" width="215" height="104"/></a>
    <a href="<?php echo get_post_meta(get_the_ID(), 'guide_deposit_url', true); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/deposit.jpg" hspace="3" width="215" height="104"/></a>
    <a href="<?php echo get_post_meta(get_the_ID(), 'guide_withdrawal_url', true); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/withdrawal.jpg" hspace="3" width="215" height="104"/></a>
</div>
<div class="clear" style="height:10px;"></div>