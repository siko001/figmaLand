<?php

$args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'numberposts' => 3,
    'post__in' => array(65, 66, 67),
    'orderby' => 'post__in',
);

$images = get_posts($args);
?>

<?php if ($images) : ?>
    <?php $image_classes = array('pricing-img', 'pricing-img', "pricing-img");
    ?>
    <?php $i = 0;
    ?>
    <?php foreach ($images as $image) : ?>
        <?php
        $image_url = wp_get_attachment_image_src($image->ID, 'full');
        $image_alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
        $image_class = $image_classes[$i];
        $i++;
        ?>

        <img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt;  ?>" class="<?php echo $image_class; ?>" />
    <?php endforeach; ?>
<?php endif; ?>