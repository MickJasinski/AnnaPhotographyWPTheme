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

echo<<<END
    
    <div class="code404">
        <h2>Sorry, this page doesn't exist (404)</h2>
    </div>

END;
    
endif; ?>

<?php
    get_footer();

?>
