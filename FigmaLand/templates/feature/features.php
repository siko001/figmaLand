<?php
/*
Template Name: Featured Template
*/

// Start the loop
while (have_posts()) :
    the_post();


    // Query for the required posts
    $args = array(
        'post_type' => 'feature',
        'posts_per_page' => 3,
    );

    $query = new WP_Query($args);

    // Loop through the posts
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
?>
            <div class="features__content">
                <div class="feature-img"><?php the_post_thumbnail(); ?></div>
                <h5><?php the_title(); ?></h5>
                <p><?php the_excerpt(); ?></p>

            </div>


<?php
        endwhile;
    endif;

    wp_reset_postdata();  // Reset the post data
endwhile;
