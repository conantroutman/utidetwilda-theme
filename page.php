<?php
get_header();
?>

<main>
    <div class="container">
        <div class="header-image"
        
        <?php 
                
            // Set the hero background image to the one specified in the page editor
            $image_url = get_field('page_hero_image');
            echo "style='background-image: url({$image_url})'";

        ?>

        ></div>
        <section>
            <article>
                <div class="article-header text"
                data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="200"
                data-sal-easing="ease-out-bounce">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('page_subheading'); ?></h2>
                </div>
                <div class="article-content">
                    <div class="text"
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce">

                        <?php the_content(); ?>

                        <!--
                        <p>Söndagar i <em>april</em> och <em>maj</em> kan du njuta av en avkopplande <strong>”Wildavandring”</strong> med efterföljande tre-rätters middag vid Undens strand. Vi samlas på gårdsplanen och går en avkopplande vandring på stigar genom skog och mark utmed Undens nordvästra strand. Under promenaden gör vi stopp och du får ta del av gamla skrönor från trakten likväl som kunskap om sjön och dess omgivningar.</p>
                        
                        <p>Efter ett par timmar samlas vi vid sjön och njuter av en trerätters middag utomhus. Maten tillagas utomhus och med väl valda lokalproducerade råvaror och vildväxande blommor och blad, allt efter säsong!</p>
                        -->
                    </div>

                    <?php if(get_field('page_aside_type') == 'text') {
                    ?>

                        <aside class="infobox"
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="600"
                        data-sal-easing="ease-out-bounce">

                        <?php 
                            
                            the_field('page_aside_text');

                        ?>

                            <!--<h4>Vad ingår?</h4>
                            <ul>
                                <li><p>En avkopplande vandring utmed Unden.</p></li>
                                <li><p>Trerätters middag utomhus.</p></li>
                                <li><p>Alkoholfri dryck och kaffe.</p></li>
                            </ul>
            
                            <h4>Viktigt att tänka på</h4>
                            <ul>
                                <li><p>Klä dig efter väder. Vi kör på även om det regnar.</p></li>
                                <li><p>Kontakta oss om du har allergier eller behov av specialkost (I samband med bokningen.)</p></li>
                            </ul>
            
                            <h4>Information om bokning</h4>
                            <ul>
                                <li><p>Max <strong>12</strong> personer per vandring.</p></li>
                                <li><p>Koordinater och exakt adress får ni vid bokningen.</p></li>
                                <li><p>Vandringen börjar 12:00. Tidsåtgång ca. 5 timmar.</p></li>
                            </ul>-->

                        </aside>

                    <?php
                        }
                        else if(get_field('page_aside_type') == 'image') {
                            $image = get_field('page_aside_image');
                    ?>

                        <picture
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="600"
                        data-sal-easing="ease-out-bounce">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </picture>

                    <?php
                        }
                    ?>
                </div>
            </article>

            <?php // Only print out if dates have been added  ?>

            <?php if( have_rows('page_dates') ): ?> 

                <article class="dates">
                    <h2
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="200"
                    data-sal-easing="ease-out-bounce">Bokningsbara datum</h2>
                    <div class="dates-grid">

                        <ul>

                        <?php
                        
                        $dates = get_field('page_dates');

                        foreach( $dates as $key => $dateData ) {
                            $date = new DateTime($dateData['dates_date']);
                            $dateString = date_format($date, "Y/m/d");

                            $isFull = $dateData['dates_date_full'];

                            ?>
                            
                            <li <?php if($isFull) echo 'class="full"' ?>><time datetime=<?php echo $dateString ?> >Söndag 11/4</time></li>

                            <?php
                        }
                        ?>

                        </ul>

                        <div class="month"
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="400"
                        data-sal-easing="ease-out-bounce">
                            <h3>April</h3>
                            <ul>
                                <li class="full"><time datetime="2021-04-11">Söndag 11/4</time></li>
                                <li class="full"><time datetime="2021-04-18">Söndag 18/4</time></li>
                                <li class="full"><time datetime="2021-04-25">Söndag 25/4</time></li>
                            </ul>
                        </div>
                        <div class="month"
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="600"
                        data-sal-easing="ease-out-bounce">
                            <h3>Maj</h3>
                            <ul>
                                <li class="full"><time datetime="2021-05-02">Söndag 2/5</time></li>
                                <li class="full"><time datetime="2021-05-09">Söndag 9/5</time></li>
                                <li class="full"><time datetime="2021-05-16">Söndag 16/5</time></li>
                                <li class="full"><time datetime="2021-05-23">Söndag 23/5</time></li>
                                <li><time datetime="2021-05-30">Söndag 30/5</time></li>
                            </ul>
                        </div>
                        <div class="month"
                        data-sal-duration="1200"
                        data-sal="slide-up"
                        data-sal-delay="800"
                        data-sal-easing="ease-out-bounce">
                            <h3>Juni</h3>
                            <ul>
                                <li class="full"><time datetime="2021-06-06">Söndag 6/6</time></li>
                            </ul>
                        </div>
                    </div>
                </article>

            <?php endif; ?>
            
        </section>
    </div>
</main>

<?php
get_footer();
?>