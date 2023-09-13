<?php

$args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'numberposts' => 2, 
    'post__in' => array(7, 6), 
    'orderby' => 'post__in',
);

$images = get_posts($args);
?>

<?php if ($images) : ?>
    <?php $image_classes = array('img1', 'img2'); // Define different classes for each image 
    ?>
    <?php $i = 0; // Initialize a counter for the classes 
    ?>
    <?php foreach ($images as $image) : ?>
        <?php
        $image_url = wp_get_attachment_image_src($image->ID, 'full');
        $image_alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
        $image_class = $image_classes[$i]; // Get the class for this image
        $i++; // Increment the counter
        ?>

        <img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt;  ?>" class="<?php echo $image_class; ?>" />
    <?php endforeach; ?>
<?php endif; ?>