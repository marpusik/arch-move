<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <div class="header__navigation">
        <a href="<?php bloginfo('url'); ?>"
           class="header__logo-link">
            <img class="header__logo logo" src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="">
        </a>
        <?php wp_nav_menu([
            'theme_location' => 'top_menu',
            'container' => 'nav',
            'container_class' => 'header__nav nav',
            'menu_class' => 'nav__list',
            'menu_id' => '',
        ]); ?>
    </div>
    <div class="header__autorization">
        <img class="header__search" src="<?php echo IMG_DIR; ?>/ic-searhc.svg" alt="">
        <button class="header__btn header__btn--sign-in">Sign In</button>
        <button class="header__btn header__btn--sign-up">Sign Up</button>
    </div>
</header>