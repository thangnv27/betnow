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
                <?php endwhile; ?>
            </div>        
        </div>
    </div>      
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>