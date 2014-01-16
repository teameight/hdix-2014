<?php
get_header(); // Loads the header.php template ?>

    <div id="page-heading-wrap">
        <header id="page-heading" class="grid-1">
            <h1>Projects</h1>
        </header><!-- /page-heading -->
    </div><!-- /page-heading-wrap -->

    <div class="grid-1">
        <?php the_post(); ?>
            <article id="full-width" class="clearfix">
                <div class="entry clearfix">
                    <?php
                    $cat = get_category_by_slug('projects');
                    $args = array(
                        'child_of' => $cat->term_id,
                        'hide_empty' => 0 // change this!
                    );
                    $children = get_categories( $args );
                    $even = true;
                    foreach($children as $child) {
                        var_dump($child);
                        if($even) {
                            echo '<div class="symple-column symple-one-half symple-column-first ">';
                        }
                        else {
                            echo '<div class="symple-column symple-one-half symple-column-last ">';
                        }
                        echo '<p><strong><a href="'. get_category_link($child->term_id) .'">'. $child->name .'</a></strong></p>';
                        echo '<p>'. $child->category_description .'</p>';
                        echo '</div>';

                        $even = !$even;
                    }
                    ?>
                </div><!-- /entry -->
            </article><!-- /post -->
    </div><!-- /grid-1 -->

<?php get_footer(); // Loads the footer.php file ?>