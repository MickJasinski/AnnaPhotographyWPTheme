<?php /* Template Name: About */

get_header(); ?>

<div class="about container">
    <div class="about-text col-sm-12 col-lg-6 text-center fade-in one">
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

    <!-- <div class="contact">
        <a href="/contact"><button>Get in touch!</button></a>
    </div> -->

    <div class="about-img col-sm-12 col-lg-6">
        <div class="about-item">
            <img class="fade-in two" src="/wp-content/themes/AnnaPhotography/imgs/about/AKMfota.jpg" alt="Anna Photography | Family & Portrait Photographer" />
        </div>
    </div>



    
    
    
    
    <!-- <div class="about-img col-sm col-md-6">
    </div> -->
    
    <!-- <div class="about-content">
        <div class="flex-screen flex-about">
            <div class="about-text fade-in two">
                <h1>Thank you for stopping by!</h1>
                <p>My name is Anna. I am a photographer based in Bedford, Bedfordshire, UK. I work on locations or in your own home using studio set up as well as natural light.</p>
                <div class="about-img-mobile">
                    <img class="fade-in one" src="/wp-content/themes/AnnaPhotography/imgs/about/AKMfota.jpg" alt="Anna Photography | Family & Portrait Photographer"></img>
                </div>
                <h3>My main area of focus is portrait photography but I also enjoy shooting events.</h3>
                <p>If you need more information on what I do or would like to book a photo session with me – do not hesitate to contact me. <br>
            email: anna.kubrynska@gmail.com <br>
            tel.: 07592432324</p>
            </div>
        </div>
    </div> -->
</div>


<?php
    get_footer();

?>