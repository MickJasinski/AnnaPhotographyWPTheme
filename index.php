<?php

get_header(); ?>

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



<?php
    get_footer();

?>