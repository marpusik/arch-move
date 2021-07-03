<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arch-move</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__navigation">
            <img class="header__logo logo" src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="">
            <nav class="header__nav nav">
                <ul class="nav__list">
                    <li class="nav__list-item"><a class="nav__link" href="">Design Gallery</a></li>
                    <li class="nav__list-item"><a class="nav__link" href="">List of Architect</a></li>
                    <li class="nav__list-item"><a class="nav__link" href="">Articles</a></li>
                    <li class="nav__list-item"><a class="nav__link" href="">How it Works</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__autorization">
            <img class="header__search" src="<?php echo IMG_DIR; ?>/ic-searhc.svg" alt="">
            <button class="header__btn header__btn--sign-in">Sign In</button>
            <button class="header__btn header__btn--sign-up">Sign Up</button>
        </div>
    </header>