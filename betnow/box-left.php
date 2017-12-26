<div class="box_left">
    <div class="box_left_top">
        <div class="box_left_bottom">
            <?php $cat_promotion = intval(get_post_meta(get_the_ID(), 'cat_promotion', true)); ?>
            <div class="title"><a href="<?php echo get_category_link($cat_promotion); ?>">Tin khuyến mại</a></div>
            <div class="box_left_mid">
                <ul>
                    <?php
                    $loop = new WP_Query(array(
                        'cat' => $cat_promotion
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