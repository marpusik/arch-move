<?php get_header(); ?>

    <section class="main">
        <div class="container">
            <h1 class="main__title"><?php the_field('main__title'); ?><span> <?php the_field('accent__word'); ?></span></h1>
            <div class="main__inner">
                <div class="main__wrapper">
                    <p class="main__text"><?php the_field('main__text'); ?></p>
                    <button class="btn main__btn">Free Consultation </button>
                </div>
                <!-- <div class="main__img"></div> -->
                <img class="main__img" src="<?php the_field('main__img'); ?>" alt="">
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="gallery__title title">Build professional valuable room for you</h2>
            <div class="gallery-inner">
                <a href="<?php echo IMG_DIR; ?>/img-1.png" title="image-1" class="gallery__link"><img class="gallery__img"
                        src="<?php echo IMG_DIR; ?>/img-1.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/img-2.png" title="image-2" class="gallery__link"><img class="gallery__img"
                        src="<?php echo IMG_DIR; ?>/img-2.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/img-3.png" title="image-3" class="gallery__link"><img class="gallery__img"
                        src="<?php echo IMG_DIR; ?>/img-3.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/img-4.png" title="image-4" class="gallery__link"><img class="gallery__img"
                        src="<?php echo IMG_DIR; ?>/img-4.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/img-1.png" title="image-1" class="gallery__link"><img class="gallery__img"
                        src="<?php echo IMG_DIR; ?>/img-1.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/img-2.png" title="image-2 " class="gallery__link"><img class="gallery__img"
                        src="<?php echo IMG_DIR; ?>/img-2.png" alt=""></a>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h2 class="features__title title">Build your needs with Archmove</h2>
            <div class="features__inner">
                <img src="<?php echo IMG_DIR; ?>/img-6.png" alt="" class="features__img">
                <div class="features__wrapper">

                    <?php foreach (getFeatures() as $feature): ?>
                        <div class="features__feature feature">
                            <div class="features__icon-box">
                                <img class="features__icon" src="<?php echo $feature['img'] ?>" alt="">
                            </div>
                            <div class="feature__info">
                                <h3 class="feature__title"><?php echo $feature['title'] ?></h3>
                                <p class="feature__text"><?php echo $feature['text'] ?></p>
                                <i><?php echo $feature['add_text'] ?></i>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <button class="features__btn btn">FREE CONSULTATION</button>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews" id="reviews">
        <div class="container">
            <div class="reviews-top">
                <h2 class="reviews-top__title title">Sound Too Good To Be True?</h2>
                <div class="reviews-slider">
                    <div class="reviews-slider__item">
                        <p class="review__text">
                            We just wanted to thank you for this fantastic website! We are
                            so grateful for being able to advertise our Petite cabin and
                            receive feedback from people from all over the U.S. and even further.
                        </p>
                        <div class="review__author">
                            <span class="review__author-name">Adam Morph</span> — <span class="review__author-prof">CEO Alfatech</span>
                        </div>
                    </div>
                    <div class="reviews-slider__item">
                        <p class="review__text">
                            We just wanted to thank you for this fantastic website! We are
                            so grateful for being able to advertise our Petite cabin and
                            receive feedback from people from all over the U.S. and even further.
                        </p>
                        <div class="review__author">
                            <span class="review__author-name">Adam Morph</span> — <span class="review__author-prof">CEO Alfatech</span>
                        </div>
                    </div>
                    <div class="reviews-slider__item">
                        <p class="review__text">
                            We just wanted to thank you for this fantastic website! We are
                            so grateful for being able to advertise our Petite cabin and
                            receive feedback from people from all over the U.S. and even further.
                        </p>
                        <div class="review__author">
                            <span class="review__author-name">Adam Morph</span> — <span class="review__author-prof">CEO Alfatech</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews-bottom">
                <img class="reviews__img" src="<?php echo IMG_DIR; ?>/house.png" alt="">
                <div class="reviews-inner">
                    <h2 class="reviews-bottom__title title">Realize your dream project with <span>Archmove</span></h2>
                    <button class="btn">FREE CONSULTATION</button>
                </div>
            </div>
        </div>
    </section>
    <section class="partners" id="partners">
        <div class="container">
            <div class="partners__inner">
                <h2 class="partners__title title">Our Partners</h2>
                <div class="partners__wrapper">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-1.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-2.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-3.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-4.png" alt="">
                    <img class="partners__img" src="<?php echo IMG_DIR; ?>/partner-5.png" alt="">
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
