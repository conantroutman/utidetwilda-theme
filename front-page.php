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
                if(function_exists('the_custom_logo')) {
                    //the_custom_logo();
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img src="<?= $logo[0] ?>" alt="Logo">
            </div>

            <h1 class="tagline"
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="1000"
                data-sal-easing="ease-out-bounce">En underbar matupplevelse vid sjön Unden</h1>

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
            <div class="background-image rellax" data-rellax-speed="-4" />
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
                    <h1>Välkommen till Uti det Wilda!</h1>
                    <p class="welcome-text"><strong>Uti det Wilda</strong> är ett kreativt och lustfyllt matäventyr.
                        Att äta hos oss är något utöver det vanliga. Du kan förvänta dig god och vällagad mat – men
                        också ovanliga ingredienser från skog och trädgård som du kanske inte ätit förr; vilda örter, blad
                        och blommor som kombineras med kött och fisk från närliggande sjöar och betesmarker. Allt
                        tillagas vid elden och äts utomhus.</p>
                    
                    <p class="welcome-text"><strong>Uti det Wilda</strong> är också mat som är hållbar och klimatsmart, helt enkelt underbar mat!</p>
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
                    data-sal-easing="ease-out-bounce">Vad vi erbjuder</h1>

                <div class="cards">
                    <div class="card"
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce">
                        <div class="card-head">
                            <picture>
                                <img src="images/middag.jpg" alt="Wildamiddag">
                            </picture>
                        </div>
                        <div class="card-body">
                            <h3>Wildamiddagar</h3>
                            <p><strong>Sommaren 2021</strong> erbjuder vi en serie bokningsbara wildamiddagar. Middagarna äger rum utomhus och går att kombinera med vandringar eller andra utflykter i närområdet.</p>
                            <a href="middagar.html" target="_blank" class="button button-primary">Läs mer</a>
                        </div>
                    </div>
                    <div class="card"
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce">
                        <div class="card-head">
                            <picture>
                                <img src="images/skogsol.jpg" alt="Solsken i skogen">
                            </picture>
                        </div>
                        <div class="card-body">
                            <h3>Wildavandringar</h3>
                            <p><strong>Våren 2021</strong> erbjuder vi avkopplande vandringar med efterföljande trerätters middag vid Undens strand.</p>
                            <a href="vandringar.html" target="_blank" class="button button-primary">Läs mer</a>
                        </div>
                    </div>
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
                    <h1 class="section-heading">Boka</h1>
                    <p>För bokning, kontakta oss via mail, telefon eller meddela oss på Facebook.</p>
                    <p>Betalning sker via Swish eller bankgiro direkt efter att bokningen är bekräftat.</p>
                    <p>Märk betalningen <strong>"Wildamiddag"</strong>, eller <strong>"Wildavandring"</strong>.</p>
                    <p><a href="bokningsvillkor.html" target="_blank">Se bokningsvillkor</a></p>
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
            <picture loading="lazy"
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="200"
                data-sal-easing="ease-out-bounce">
                <source srcset="images/sten_m.jpg" media="(max-width: 960px)">
                <img src="images/sten.jpg" alt="">
            </picture>
            <picture
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce">
                <source srcset="images/tallrik_m.jpg" media="(max-width: 960px)">
                <img src="images/tallrik.jpg" alt="">
            </picture>
            <picture
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="600"
                data-sal-easing="ease-out-bounce">
                <source srcset="images/planka_m.jpg" media="(max-width: 960px)">
                <img src="images/planka.jpg" alt="">
            </picture>
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
                    <h1 class="section-heading">Hitta till oss</h1>
                    <p class="centered">Vårt utomhuskök och sommarrestaurang ligger vackert beläget intill vattnet vid sjön Unden, <strong>Hallerudsund</strong>, i utkanten av Töreboda kommun, nära Tivedens Nationalpark.</p>
                </div>
            </article>
        </div>
        <iframe class="google-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2069.497467983565!2d14.38422411632574!3d58.755267281461634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465b994f66628fb9%3A0xd5f96ab18c6b7ca0!2sUti%20Det%20Wilda!5e0!3m2!1ssv!2sse!4v1614206543290!5m2!1ssv!2sse" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    
</main>

<?php
get_footer();
?>