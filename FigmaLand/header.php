<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="background">
            <?php
            // Include the image retrieval template
            get_template_part('templates/header/frontpage-images-template');
            get_template_part("templates/navbar/navbar-template");
            ?>
        </div>