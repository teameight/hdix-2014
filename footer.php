<?php
/**
 * Footer.php outputs the code for footer hooks and closing body/html tags
 * @package Photojax WordPress Theme
 * @since 1.0
 * @author WPExplorer : http://www.wpexplorer.com
 * @copyright Copyright (c) 2012, WPExplorer (TM)
 * @link http://www.wpexplorer.com
 */ ?>
<div id="contactwrap">
    <div id="contactform">
        <div id="close-contact"><a href="#" title="Close">X</a></div>
        <div id="wufoo-z1kfg9fr180gifd"><iframe id="wufooFormz1kfg9fr180gifd" class="wufoo-form-container" height="1166" allowtransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none" src="https://teameight.wufoo.com/embed/z1kfg9fr180gifd"><a href="https://teameight.wufoo.com/forms/z1kfg9fr180gifd/" title="html form">Fill out my Wufoo form!</a></iframe></div>
    </div>
</div>

<div class="contact-fill"></div>

<div class="clear"></div><!-- /clear any floats -->
</div><!-- /main-content -->
</div><!-- /wrap -->

<div id="footer-wrap">
    <footer id="footer" class="grid-1">
        <div id="copy">
            &copy; <?php _e('Copyright','wpex'); ?> <?php the_date('Y'); ?> &middot; <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
        </div><!-- /copy -->
        <div id="footer-nav">
            <?php
            if(is_front_page()) {
                wp_nav_menu( array(
                    'theme_location' => 'wpex_primary_menu',
                    'sort_column' => 'menu_order',
                    'fallback_cb' => false
                ));
            } else {
            wp_nav_menu( array(
                'theme_location' => 'wpex_footer_menu',
                'sort_column' => 'menu_order',
                'fallback_cb' => false
            ));
            }
            ?>
        </div><!-- /footer-nav -->
    </footer><!-- /footer -->
    <span id="footer-bottom"></span>
</div><!-- /footer-wrap -->

<?php wp_footer(); // Footer hook, do not delete, ever ?>
</body>
</html>