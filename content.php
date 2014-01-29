<?php
/**
 * This file is used for your blog and archive entries.
 * @package Photojax WordPress Theme
 * @since 1.0
 * @author WPExplorer : http://www.wpexplorer.com
 * @copyright Copyright (c) 2012, WPExplorer
 * @link http://www.wpexplorer.com
 */



/******************************************************
 * Single Posts
 * @since 1.0
 *****************************************************/
if ( is_singular() && is_main_query() ) { ?>

    <div id="post" class="single-post clearfix">

        <div id="post-heading">
            <header><h1><?php the_title(); ?></h1></header>
            <ul class="meta clearfix">
                <li><span><?php _e('Posted on', 'wpex'); ?></span> <?php the_time('jS F Y'); ?>,</li>
                <li><span><?php _e('by', 'wpex'); ?></span> <?php the_author_posts_link(); ?></li>
                <?php if( get_the_category() ) { ?><li class="meta-category"><?php _e('under', 'wpex'); ?> <?php the_category(' &middot; '); ?></li><?php } ?>
                <?php if(comments_open()) { ?><li class="comment-scroll"><span><?php _e('with', 'wpex'); ?></span> <?php comments_popup_link(__('0 Comments', 'wpex'), __('1 Comment', 'wpex'), __('% Comments', 'wpex'), 'comments-link' ); ?></li><?php } ?>
            </ul>
        </div><!-- /post-heading -->

        <?php
        /* Post Thumbnail*/
        if( has_post_thumbnail() && of_get_option('post_thumbnail','1') == '1' ) {  ?>
            <div class="loop-entry-thumbnail">
                <img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  650, 9999, false ); ?>" alt="<?php echo the_title(); ?>" />
            </div><!-- /loop-entry-thumbnail -->
        <?php } ?>

        <article class="entry clearfix">
            <?php the_content(); // This is your main post content output ?>
        </article><!-- /entry -->

        <?php the_tags( '<br /><strong>'. __('Tags:','wpex') .'</strong> ', ', ', '<br />'); ?>

        <?php wp_link_pages(); // Paginate pages when <!- next --> is used ?>

        <?php comments_template(); ?>

    </div><!-- /post -->


    <?php
    /******************************************************
     * Entries
     * @since 1.0
     *****************************************************/
} else {
    global $more;
    $more = 0;
    ?>


    <article <?php post_class('loop-entry clearfix'); ?>>

        <header>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <ul class="meta clearfix">
                <li><span><?php _e('Posted on', 'wpex'); ?></span> <?php the_time('jS F Y'); ?>,</li>
                <li><span><?php _e('by', 'wpex'); ?></span> <?php the_author_posts_link(); ?></li>
                <?php if( get_the_category() ) { ?><li class="meta-category"><?php _e('under', 'wpex'); ?> <?php the_category(' &middot; '); ?></li><?php } ?>
                <?php if(comments_open()) { ?><li><span><?php _e('with', 'wpex'); ?></span> <?php comments_popup_link(__('0 Comments', 'wpex'), __('1 Comment', 'wpex'), __('% Comments', 'wpex'), 'comments-link' ); ?></li><?php } ?>
            </ul>
        </header>

        <?php
        /* Post Thumbnail*/
        if( has_post_thumbnail() ) {  ?>
            <div class="loop-entry-thumbnail">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  650, 9999, false ); ?>" alt="<?php echo the_title(); ?>" /></a>
            </div><!-- /loop-entry-thumbnail -->
        <?php } ?>

        <div class="entry-content">
            <div class="entry-text">
                <?php
                if($post->post_type == 'project') {
                the_content();
                }
                else {
                the_excerpt();
                }
                ?>
            </div><!-- /entry-text -->
        </div><!-- /entry-content -->
    </article><!-- /entry -->


<?php } ?>