<?php
/**
 * Template Name: Projects Page
 */

get_header(); // Loads the header.php template ?>

    <div id="page-heading-wrap">
        <header id="page-heading" class="grid-1">
            <h1><?php the_title(); ?></h1>
        </header><!-- /page-heading -->
    </div><!-- /page-heading-wrap -->

    <div class="grid-1">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
            // Show featured images on pages
            if(has_post_thumbnail()) {
                echo '<div id="page-featured-img"><img src="'.  wp_get_attachment_url( get_post_thumbnail_id() ) .'" alt="'. get_the_title() .'" /></div>';
            } ?>
            <article id="full-width" class="clearfix">
                <div class="entry clearfix">
                    <?php
                    $projects = get_field('projects');
                    $even = true;
                    foreach($projects as $project) :
//                          var_dump($project);
                        $external = $project['external'];
                        $ext_link = $project['ext_link'];
                        $int_link = get_term_link($project['int_link']);
                        if($even) {
                        echo '<div class="symple-column symple-one-half symple-column-first ">';
                            }
                        else {
                        echo '<div class="symple-column symple-one-half symple-column-last ">';
                            }
                            ?>

                        <p><strong><a class="proj-link" href="<?php echo ($external == 'yes' ? $ext_link : $int_link); ?>"><?php echo $project['project_title']; ?></a></strong></p>
                        <p><?php echo $project['project_description']; ?></p>

                        </div>

                    <?php $even = !$even;
                    endforeach;
                    ?>
                </div><!-- /entry -->
            </article><!-- /post -->
        <?php
        endwhile; endif; // End loop ?>
    </div><!-- /grid-1 -->

<?php get_footer(); // Loads the footer.php file ?>