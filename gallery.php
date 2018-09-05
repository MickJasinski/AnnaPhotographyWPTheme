<?php /* Template Name: Gallery */

get_header(); ?>

<div class="album-heading col-sm-12 text-center fade-in one"><h2>Albums</h2></div>

<div class="gallery-box">

    <a href="/gallery/portrait">
        <div class="gallery-cover fade-in two">
            <img src="/wp-content/themes/AnnaPhotography/imgs/gallery-covers/portrait.jpg" alt="Anna Photography | Family & Portrait">
            <div class="overlay">
                <h2>Portrait<br><span>Photography</span></h2>
            </div>
        </div>
    </a>

    <a href="/gallery/wedding">
        <div class="gallery-cover fade-in three">
            <img src="/wp-content/themes/AnnaPhotography/imgs/gallery-covers/wedding.jpg" alt="Anna Photography | Family & Portrait">
            <div class="overlay">
                <h2>Wedding<br><span>Photography</span></h2>
            </div>
        </div>
    </a>

    <a href="/gallery/commercial">
        <div class="gallery-cover fade-in four">
            <img src="/wp-content/themes/AnnaPhotography/imgs/gallery-covers/commercial.jpg" alt="Anna Photography | Family & Portrait">
            <div class="overlay">
                <h2>Commercial<br><span>Photography</span></h2>
            </div>
        </div>
    </a>  
    
</div>


<?php
    get_footer();

?>