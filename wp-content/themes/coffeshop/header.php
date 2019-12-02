<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Coffe Shop</title> -->
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/lib/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/lib/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/lib/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/style.css">
    
    <?php wp_head(); ?>

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                
                    <div class="logo">

                        <?php 
                        
                            $cs_custom_logo = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($cs_custom_logo, 'full');

                            if(has_custom_logo()) {
                                echo '<img src="'.esc_url($logo[0]).'" alt="">';
                            } else {
                                echo '<h1 class="m-0">' . get_bloginfo('name'). '</h1>';
                                echo '<p class="m-0">' . get_bloginfo('description'). '</p>';
                            }

                        ?>

                    </div>  
                 
                </div>

                <div class="col-md-6">
                    
                    <nav class="menu">

                        <ul>
                            <li><a href="#home"><i class="fas fa-home"></i></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#about">About Shop</a></li>
                            <li><a href="#quality">Quality</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>

                    </nav>
                    
                </div>

            </div>
        </div>
    </header>