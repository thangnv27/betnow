<?php get_header(); ?>

<div class="content_left">
    <div class="page_top">
        <div class="page_bottom">
            <div class="page_mid">
                <?php while(have_posts()) : the_post();  ?>
                <h1 class="text_title"><?php the_title(); ?></h1>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <?php show_share_socials(); ?>
                <div class="othernews">
                    <h1>Các tin tức khác</h1>
                    <ul>
                        <?php
                        $loop = new WP_Query(array(
                            'posts_per_page' => 5,
                            'post__not_in' => array(get_the_ID())
                        ));
                        while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> (<?php the_time("d.m.Y"); ?>)</li>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div>
                <?php endwhile; ?>
            </div>        
        </div>
    </div>      
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>