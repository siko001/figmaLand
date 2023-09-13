<?php
get_header();

?>

<section id="home">
    <div class="header-container reveal-Y">
        <div class="content-picture">
            <?php get_template_part("templates/header/content-template") ?>
        </div>
        <div class="content-paragraph">
            <h2 id="header-text"></h2>
            <br />
            <p>Most calenders are desgined for teams.</p>
            <p>Slate is designed for freelancers</p>
            <br />
            <button class="content-btn" type="submit">Try For Free</button>
        </div>
    </div>
</section>
</header>
<div class="overlay">
    <div class="mobile-menu">
        <div class="mobile-menu-content">
            <div class="mobile-menu-content__header">
                <h4><?php get_template_part("templates/navbar/mobile-navbar") ?></h4>
                <h4 id="close-overlay">X</h4>
            </div>
            <div class="mobile-menu-content__menu" id="mobile-nav">
                <?php
                // Display the WordPress navigation menu
                wp_nav_menu();
                ?>
            </div>
            <hr>
            <div class="mobile-menu-content__footer">
                <h4>Website Developed by<a href="https://neilmallia.com"> <span class="brand">Neil Mallia</span></a></h4>

            </div>
        </div>
    </div>
</div>

<section id="featured">
    <div class="featured-section">
        <div class="featured-section__title">
            <p class="p__bold">At your fingertips</p>
            <h4 class="h4__heading">Features</h4>
            <p class="p__semi-bold">Most calenders are designed for teams.<br> Slate is designed for freelancers</p>
        </div>


        <div class="featured-section__features reveal-X">
            <?php get_template_part("templates/feature/features") ?>
        </div>
    </div>
</section>

<section id="about">
    <?php get_template_part("about-section-template") ?>
</section>

<section id="subscribe">
    <div class="subscribe-section">
        <div class="subscribe-section__title">
            <p class="p__semi-bold">At your fingertips</p>
            <h4 class="h4__heading">Lightning fast prototyping</h4>
        </div>

        <div class="subscribe-section__form">
            <p class="p__semi-bold">Subscribe to our Newsletter</p>
            <p>Avaliable Exclusivly on FigmaLand</p>
            <br>
            <form>
                <input type="email" class="long-input" placeholder="Your Email">
                <br>
                <button type="submit" class="pink-btn">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<section id="product">
    <div class="partners-section">
        <div class="partners-section__title">
            <h4 class="h4__heading">Partners</h4>
            <p class="p__semi-bold">Most calender are designed for teams.<br>Slate is designed for freelancers</p>
        </div>
        <div class="partners-section__container reveal-Y">

            <?php get_template_part("templates/partners/partners") ?>
        </div>
        <button class="content-btn-reveresed" type="submit">Try For Free</button>
    </div>
</section>


<section id="testimonials">
    <div class="testimonials-section">
        <div class="testimonials-section__title">
            <h4 class="h4__heading">Testimonials</h4>
            <?php get_template_part("templates/testimonials/images-template") ?>
            <p class="p__semi-bold">Most calendars are designed for teams. Slate is designed for freelancers who want a simple
                way to plan their schedule.</p>

            <?php
            while (have_posts()) :
                the_post();
                $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 1,
                    "order_by" => "DESC"
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();            ?>
                        <div class="testimonials__content">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_excerpt(); ?></p>
                        </div>
            <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            endwhile;            ?>
            <button class="content-btn-reveresed__long" type="submit">More Testimonials</button>
        </div>
    </div>
</section>
<br>
<section id="pricing">
    <div class="pricing-section">
        <div class="pricing-section__title">
            <h4 class="h4__heading">Pricing</h4>
            <p class="p__semi-bold">Most calendars are designed for teams.<br> Slate is designed for freelancers.</p>
        </div>

        <div class="pricing-section__pricing">
            <div class="pricing-sections__pricing-container reveal-X">
                <?php get_template_part("templates/pricing/pricings") ?>
            </div>
        </div>
    </div>
</section>

<section class="light-blue-background" id="contact">
    <div class="contact-section">
        <div class="contact-section__title">
            <h4 class="h4__heading-reversed">Contact Us</h4>
            <p class="p__semi-bold-reversed">Most calendars are designed for teams.<br> Slate is designed for freelancers.</p>
        </div>

        <div class="contact-section__container">
            <div class="contact-section__form reveal-Y">
                <form class="form ">
                    <p class="p__semi-bold-reversed">Contact Us</p>
                    <br>
                    <input type="text" placeholder="Your Name">
                    <br>
                    <input type="email" placeholder="Your Email">
                    <br>
                    <textarea class="text-area" placeholder="Your Message"></textarea>
                    <br>
                    <button type="submit" class="form-submit">Send</button>
                </form>
            </div>
            <div class="reveal-X">
            <?php get_template_part("templates/contact/details-template") ?>
            </div>
        </div>
</section>



<?php get_footer() ?>