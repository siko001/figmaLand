<?php

$args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'numberposts' => 1,
    'post__in' => array(60),
);
$image = get_posts($args);

if ($image) :
    $image_url = wp_get_attachment_image_src($image[0]->ID, 'full');
    $image_alt = get_post_meta($image[0]->ID, '_wp_attachment_image_alt', true);

endif;

?>

<img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt; ?>" class="testimonial_image" />