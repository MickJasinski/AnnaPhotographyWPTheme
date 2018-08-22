
<!DOCTYPE html>
<html style="margin-top: 0;" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style type="text/css" media="screen">
        html { margin-top: 0 !important; }
        * html body { margin-top: 0 !important; }
        @media screen and ( max-width: 0 ) {
            html { margin-top: 0 !important; }
            * html body { margin-top: 0 !important; }
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/AnnaPhotography/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/AnnaPhotography/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/AnnaPhotography/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="/wp-content/themes/AnnaPhotography/css/fade-in.css">
</head>
<body <?php body_class(); ?>>
    <div class="container">

            <!-- Header starts here -->
        <header class="sitedesktopdesktopdesktop-header fade-in">

            <!-- Logo -->
            <div class="brand">
                <a href="<?php echo home_url(); ?>">
                    <div class="logo">
                        <img class="logoimg" src="/wp-content/uploads/2018/05/Logo.png" alt="Anna Kubryńska Photography - Portrait and family photographer" />
                        <!-- <div class="shutter">
                            <div class="shut sh1">
                                <img class="shut1"  src="/wp-content/themes/AnnaPhotography/imgs/branding/shutter/shut1.svg"     alt="Anna Kubryńska Photography - Portrait and family photographer" />
                            </div>
                        </div> -->
                        
                    </div>
                </a>
            </div>


            <!-- Naviation desktop-->
            <div class="desktop-nav ">
                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>
                <?php wp_nav_menu( $args ); ?>
            </div>

           

        </header>
            <!-- Header ends here -->
        <div class="all">

  