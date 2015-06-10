<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title>L van Beusekom</title>
<!--<?php wp_title( '|', true, 'right' ); ?>-->
    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
    <div class="u-gridContainer" style="height:50px;">
        <div class="u-gridCol4 header-contact u-objRight">
            <a href="telto:0172420577"><i class="fa fa-phone"></i>&nbsp;0172 420 577</a>&nbsp;
            <a href="mailto:info@lvanbeusekom.nl"><i class="fa fa-envelope"></i>&nbsp;info@lvanbeusekom.nl</a>
        </div>
        

    </div>

    <div class="Bot-Nav ">
    <div class="u-gridContainer container-border" style="padding-top: 20px;">
        <div class="Nav-toggle u-cf">
            <a class="Navigation-menuToggle" id="js-navCollapse">
                <!--<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    <use xlink:href="#icon-menu2"></use>
                </svg>-->
                <i class="fa fa-bars fa-2x"></i>
            </a>
        </div>
        <div class="u-gridRow  row-border">
            <div class="scheme1 u-cf">
                <div class="u-gridCol3 Logo">
                     <a href="/home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"><br></a>
                     <a href="/home"> Voor al uw Verbouwingen en nieuwbouw</a><br><br>
                </div>

                <div class="u-gridCol8 u-objRight menu">
                <?php include 'includes/navigation.php'; ?>
                </div>
            </div>

            
        </div>

        

       
        
        <div class="Mob-contact-ico">
            <a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0172420577">
                <!--<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    <use xlink:href="#icon-phone"></use>
                </svg>-->
                <i class="fa fa-phone fa-2x"></i>
            </a>
        
                <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@ivanbeusekom.nl">
                <!--<svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    <use xlink:href="#icon-envelope"></use>
                </svg>-->
                <i class="fa fa-envelope fa-2x"></i>
            </a>
        </div><!-- header-contact -->
    </div>
  </div>
