 <?php

    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'post__in' => array(8),
        'numberposts' => 1,
    );

    $image = get_posts($args);
    ?>

 <?php if ($image) : ?>
     <?php
        $image_url = wp_get_attachment_image_src($image[0]->ID, 'full');
        $image_alt = get_post_meta($image[0]->ID, '_wp_attachment_image_alt', true);

        ?>
 <?php endif; ?>



 <nav>
     <div class="logo-container">
         <img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt; ?>" class="logo" />
     </div>
     <div class="menu">
         <div class="nav-links" >
             <?php
                // Display the WordPress navigation menu
                wp_nav_menu();
                ?>
         </div>
         <form id="nav-form">
             <input type="email" placeholder="Your Email" class="navbar-input" />
             <button class="navbar-submit" type="submit">Subscribe</button>
         </form>
         <!-- Burger Menu Icon -->
     </div>

     <div class="burger-menu">
         <i class="fa-solid fa-bars"></i>
     </div>
 </nav>