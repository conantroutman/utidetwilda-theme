<?php
get_header();
?>

<main>
    <section class="hero">
        <div class="container">
            <div class="logo"
                data-sal-duration="700"
                data-sal="slide-up"
                data-sal-delay="300"
                data-sal-easing="ease-out-bounce">

                <?php 
                    $logo = get_field('logo');
                    if( !empty( $logo ) ): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                <?php endif; ?>
            </div>

            <h1 class="tagline"
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="1000"
                data-sal-easing="ease-out-bounce">
                
                <?php the_field('tagline'); ?>
            </h1>

            <a data-scroll href="#boka" class="button button-primary"
                data-sal-duration="2000"
                data-sal="fade"
                data-sal-easing="ease-out-bounce"
                style="--sal-delay: 1.5s;">Boka nu</a>

            <svg xmlns="http://www.w3.org/2000/svg" id="scroll-arrow" width="24" height="27.186" viewBox="0 0 24 27.186">
                <g id="scroll-arrow-group" data-name="Group 1362" transform="translate(-948 -1019.477)">
                    <path id="scroll-arrow1" class="cls-1" d="M9.586,12,.5,2.921A1.708,1.708,0,0,1,.5.5,1.73,1.73,0,0,1,2.933.5l10.29,10.282a1.712,1.712,0,0,1,.05,2.365L2.94,23.5A1.715,1.715,0,0,1,.511,21.077Z" transform="translate(972 1032.941) rotate(90)"/>
                    <path id="scroll-arrow2" class="cls-1" d="M9.586,12,.5,2.921A1.708,1.708,0,0,1,.5.5,1.73,1.73,0,0,1,2.933.5l10.29,10.282a1.712,1.712,0,0,1,.05,2.365L2.94,23.5A1.715,1.715,0,0,1,.511,21.077Z" transform="translate(972 1019.477) rotate(90)"/>
                </g>
            </svg>
        </div>
        

        <div class="background">
            <div class="background-image rellax"
                data-rellax-speed="-4" 
                <?php 
                
                // Set the hero background image to the one specified in the page editor
                $image_url = get_field('background_image');
                echo "style='background-image: url({$image_url})'";

                ?>
            
            />
        </div>

    </section>

    <section class="section-welcome">
        <div class="container">
            <article
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="200"
                data-sal-easing="ease-out-bounce">
                <div class="text">
                    <h1><?php the_field('welcome-header'); ?></h1>
                <?php the_field('welcome-text'); ?>
                </div>
            </article>
        </div>
    </section>

    <section class="section-cards">
        <div class="container">
            <article class="reveal">
                <h1 class="section-heading"
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="200"
                    data-sal-easing="ease-out-bounce"><?php the_field('offers_header'); ?></h1>

                <div class="cards">
                

                <?php
                
                $cards = get_field('cards');
                if( $cards ) {
                    foreach( $cards as $key => $card ) {
                        $delay = 400 + (200 * $key);
                        $image = $card['card_image'];
                        $title = $card['card_title'];
                        $text = $card['card_text'];
                        $link = $card['card_link'];
                        ?>

                        <div class="card"
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="<?php echo $delay ?>"
                        data-sal-easing="ease-out-bounce">
                            <div class="card-head">
                                <picture>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </picture>
                            </div>
                            <div class="card-body">
                                <h3><?php echo $title ?></h3>
                                <p><?php echo $text ?></p>
                                <a href="<?php echo $link ?>" target="_blank" class="button button-primary">Läs mer</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                
                ?>
                
                </div>
            </article>
        </div>
    </section>
    
    <section id="boka" class="section-booking">
        <div class="container">
            <article>
                <div class="text"
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="200"
                    data-sal-easing="ease-out-bounce">
                    <h1 class="section-heading"><?php the_field('booking_header'); ?></h1>
                    <?php the_field('booking_text'); ?>
                    <p><a href="<?php the_field('booking_info_link'); ?>" target="_blank"><?php the_field('booking_info_link_text'); ?></a></p>
                </div>
                
                <ul class="booking-methods">
                    <li class="mobile-only"
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="400"
                        data-sal-easing="ease-out-bounce"><a href="tel:+4673591866" target="_blank" class="button" ><i class="fas fa-phone"></i>Boka via telefon</a></li>
                    <li
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="600"
                        data-sal-easing="ease-out-bounce"><a href="mailto:info@utidetwilda.se" target="_blank" class="button"><i class="fas fa-envelope"></i>Boka via mail</a></li>
                    <li
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="800"
                        data-sal-easing="ease-out-bounce"><a href="https://m.me/utidetwilda" target="_blank" class="button"><i class="fab fa-facebook-messenger"></i>Boka via Facebook</a></li>
                </ul>
            </article>
        </div>
    </section>

    <section id="images" class="section-images">
        <div class="container">

            <?php
            for($i = 0; $i < 3; $i++): ?>
                <picture loading="lazy"
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="<?php echo 200 + 200 * $i ?>"
                data-sal-easing="ease-out-bounce">

                <?php

                $image = get_field('image_' . $i + 1);
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                </picture>
            <?php endfor; ?>
        </div>
    </section>

    <section class="section-directions">
        <div class="container">
            <article
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="200"
                data-sal-easing="ease-out-bounce">
                <div class="text">
                    <h1 class="section-heading"><?php the_field('directions_header'); ?></h1>
                    <div class="centered"><?php the_field('directions_text'); ?></div>
                </div>
            </article>
        </div>
        <iframe class="google-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2069.497467983565!2d14.38422411632574!3d58.755267281461634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465b994f66628fb9%3A0xd5f96ab18c6b7ca0!2sUti%20Det%20Wilda!5e0!3m2!1ssv!2sse!4v1614206543290!5m2!1ssv!2sse" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    
</main>

<?php
get_footer();
?>