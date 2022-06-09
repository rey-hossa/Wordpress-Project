<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php blogInfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- <img src="<?php //echo get_template_directory_uri(); ?>/img/logo-test.png" alt="logo" width="250" height="100"> -->

    <header>

        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-700.png" alt="logo">
        <?php wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'menu_class' => 'header_menu'

            ) ); 
        ?>
    </header>
