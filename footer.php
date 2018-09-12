        </div>
        <div class="footer">
            <footer class="fade-in one">
                <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> | <a href="/tc">T&C</a> &nbsp 
                <a href="https://www.facebook.com/Anna-Kubrynska-Photography-178266749419791">
                <i class="fab fa-facebook-f"></i></a> </p>
            </footer>
        </div>
    </div> <!-- end of .container -->
    
    <!-- Naviation mobile -->
    <div class="mobile-nav">
                
        <h3>MENU</h3>
        <?php
            $args = array(
                'theme_location' => 'primary'
            );
        ?>
        <?php wp_nav_menu( $args ); ?>
        <div class="social-box">
            <a href="https://www.facebook.com/Anna-Kubrynska-Photography-178266749419791"><img class="social" src="/wp-content/themes/AnnaPhotography/imgs/social/facebook.png" alt="facebook-icon"></a>
            <!-- <a href=""><img class="social" src="/wp-content/themes/AnnaPhotography/imgs/social/instagram.png" alt=""></a> -->
        </div>
                
        <button class="burger"><p>&#9776;</p></button>
    </div>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/AnnaPhotography/slick-1.8.1/slick/slick.min.js"></script>
<script src="/wp-content/themes/AnnaPhotography/bootstrap/js/bootstrap.min.js"></script>
<script src="/wp-content/themes/AnnaPhotography/scripts/main.js" type="text/javascript"></script>

</body>
</html>