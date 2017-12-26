            <div class="partner">
                <center>
                    <?php echo stripslashes(get_option(SHORT_NAME . "_footertext")); ?>
                </center>
            </div>

            <div id="footer">
                <div class="menu_footer">
                    <?php echo stripslashes(get_option(SHORT_NAME . "_footerlinks")); ?>
                </div>
            </div><!-- End footer -->   
        </div>
        <div class="container_bottom"></div>
    </div><!-- End container -->               
</div>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/ImageScroller.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.innerfade.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/app.js"></script>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
</body>
</html>