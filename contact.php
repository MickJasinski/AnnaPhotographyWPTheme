<?php /* Template Name: Contact */
get_header(); ?>

<div class="spacetop"></div>
<div class="container">
    <div class="row contact-box">
        <div class="contact-info col-sm-12 col-xl-6 text-center">
            <div>    
                <i class="fas fa-phone"></i>
                <i class="far fa-envelope"></i>
            </div>
            <h3>For all enquiries please call me on</h3>
            <h1>075 92 432 324</h1>
            <h3>...or fill the form:</h3>
        </div>   
        <div class="contact-form col-sm-12 col-xl-6">
            <form class="form" method="post" name="contactform" action="mail.php">
                <div class="field">
                    <input class="field col-sm" placeholder="Name" type="text" name="name" id="name" required/>
                </div>
                <div class="field">
                    <input class="field col-sm" placeholder="Email" type="email" name="email" id="email" required/>
                </div>
                <div class="field">
                    <textarea class="field col-sm" placeholder="Message" name="message" id="message" rows="4" required></textarea>
                </div>
                <div class="actions row">
                    <input class="submit col-sm-8" type="submit" name="submit" value="Submit" class="special" />
                    <input class="reset col-sm-4" type="reset" value="Reset form" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="spacebottom"></div>
    
    <?php
    get_footer();
?>