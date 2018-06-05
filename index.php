<?php

get_header(); ?>

<div class="slideshow">
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/1.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/2.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/3.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/4.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/5.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/6.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/7.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/8.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/9.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/10.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/11.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/12.jpg" alt="Anna Photography | Family & Portrait"></div>
    <div><img src="/wp-content/themes/AnnaPhotography/imgs/carousel/13.jpg" alt="Anna Photography | Family & Portrait"></div>
</div>

<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <!-- This brings up the content. -->
    <p><?php the_content(); ?></p>

    <?php endwhile;

    else:
        echo '<p>No content found</p>';

    endif; ?>

    <div class="hit"></div>


<?php
    get_footer();

?>