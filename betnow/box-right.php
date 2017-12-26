<div class="box_right">
    <div class="box_right_top">
        <div class="box_right_bottom">
            <?php $cat_ID = intval(get_option(SHORT_NAME . "_catFootballID")); ?>
            <div class="title"><a href="<?php echo get_category_link($cat_ID); ?>">Tin bóng đá</a></div>
            <div class="box_right_mid">
                <ul>
                    <?php
                    $loop = new WP_Query(array(
                        'cat' => $cat_ID
                    ));
                    while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>