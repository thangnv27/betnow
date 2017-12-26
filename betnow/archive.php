<?php get_header(); ?>

<div class="content_left">
    <div class="page_top">
        <div class="page_bottom">
            <div class="page_mid">        
                <h1 class="text_title"><?php echo single_cat_title(); ?></h1>
                <?php while(have_posts()) : the_post();  ?>
                <div class="box_new">
                    <div class="image_boder">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php get_image_url(); ?>" onerror="this.src=no_image_src;" width="120" height="80" border="0"/></a>
                    </div>
                    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1> 
                    <div><?php the_excerpt(); ?></div>
                    <div class="clear"></div>
                </div>
                <?php endwhile; ?>

                <div class="phantrang">
                    <?php if(function_exists('getpagenavi')){ getpagenavi(); } ?>
                </div>        
            </div>        
        </div>
    </div>      
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>