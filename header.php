
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/AnnaPhotography/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/AnnaPhotography/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/AnnaPhotography/slick-1.8.1/slick/slick-theme.css"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">

            <!-- Header starts here -->
        <header class="site-header">

            <!-- Logo -->
            <h1><a href="<?php echo home_url(); ?>"><div class="logo"><img class="logo" src="/wp-content/uploads/2018/05/Logo.png" alt="Anna Kubryńska Photography - Portrait and family photographer" /></div></a></h1>

            <!-- Naviation desktop-->
            <div class="desktop-nav ">
                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>
                <?php wp_nav_menu( $args ); ?>
            </div>

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
                    <a href="https://www.facebook.com/Anna-Kubrynska-Photography-178266749419791"><img class="social" src="/wp-content/themes/AnnaPhotography/imgs/social/facebook.png" alt=""></a>
                    <a href=""><img class="social" src="/wp-content/themes/AnnaPhotography/imgs/social/instagram.png" alt=""></a>
                </div>
                <button class="burger"><p>&#9776;</p></button>
            </div>

        </header>
            <!-- Header ends here -->

  