<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="referrer" content="strict-origin" />
    <meta name="description" content="Uti det Wilda är ett kreativt matäventyr. Att äta hos oss är något utöver det vanliga. Du kan förvänta dig god och vällagad mat – men också ovanliga ingredienser från skog och trädgård som du kanske inte ätit förr; vilda örter, blad och blommor. Kött och fisk från närliggande sjöar och betesmarker tillagas vid elden och äts utomhus.">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <?php
    wp_head();
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-nav">
                <?php
                    if(function_exists('the_custom_logo')) {
                        //the_custom_logo();
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <a href="<?php echo home_url(); ?>"><img src="<?= $logo[0] ?>" alt="Logo"></a>
            </div>

            <nav>
                <?php
                    // Page links

                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="nav-links">%3$s</ul>'
                        )
                    );
                
                
                // vvv Leave the social links hardcoded for now, they don't need to be configurable atm. vvv
                ?>

                <ul class="nav-social">
                    <li><a href="https://www.facebook.com/utidetwilda" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://instagram.com/uti_det_wilda" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>

                <?php

                    // Check if the Polylang plugin is activated and create the language selection menu.

                    $polylang_plugin = 'polylang/polylang.php';

                    if ( is_plugin_active( $polylang_plugin ) ) {

                        wp_nav_menu(
                            array(
                                'menu' => 'lang_select',
                                'container' => '',
                                'theme_location' => 'lang',
                                'items_wrap' => '<ul id="" class="nav-links">%3$s</ul>'
                            )
                        );

                    }

                ?>
            </nav>

            <!-- Hamburger menu -->
            
            <button class="burger hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
            </button>
        </div>
    </header>