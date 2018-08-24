<?php /* Template Name: T&C */

get_header(); ?>

<div class="container">
    <!-- The loop -->
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <!-- This brings up the content. -->
    <p><?php the_content(); ?></p>

    <?php endwhile;

    else:
        echo '<p>No content found</p>';

    endif; ?>
</div>

<?php
    get_footer();

?>