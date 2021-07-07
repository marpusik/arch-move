<?php
define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
define('LIBS_DIR', THEME_ROOT . '/assets/libs');
define('IMG_DIR', THEME_ROOT . '/assets/images');

add_action( 'wp_enqueue_scripts', 'archmove_styles' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'init', 'register_post_types' );

function archmove_styles() {
	wp_enqueue_style( 'normalize-style', CSS_DIR . '/normalize.css' );
	wp_enqueue_style( 'magnific-style', LIBS_DIR . '/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'slick-style', LIBS_DIR . '/slick/slick.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
function archmove_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'magnific-script', LIBS_DIR . '/magnific-popup/jquery.magnific-popup.min.js', array(jquery), 'null', true );
    wp_enqueue_script( 'slick-script', LIBS_DIR . '/slick/slick.min.js', array(jquery), 'null', true );
    wp_enqueue_script( 'main-script', JS_DIR . '/main.js', array(jquery), 'null', true );
}
function theme_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Меню в шапке' );
	register_nav_menu( 'bottom_menu', 'Меню в подвале' );

}
function register_post_types(){
    add_theme_support( 'post-thumbnails' );
    register_post_type( 'Features', [
        'labels' => [
            'name'               => 'Features', // основное название для типа записи
            'singular_name'      => 'Feature', // название для одной записи этого типа
            'add_new'            => 'Добавить Feature', // для добавления новой записи
            'add_new_item'       => 'Добавление Feature', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Feature', // для редактирования типа записи
            'new_item'           => 'Новое Feature', // текст новой записи
            'view_item'          => 'Смотреть Feature', // для просмотра записи этого типа.
            'search_items'       => 'Искать Feature', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Features', // название меню
        ],
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'menu_icon'           => 'dashicons-star-filled',
        'supports'            => [ 'title', 'editor','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
     ] );
}
function getFeatures () {
    $args = array(
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'Features'
    );
    $features = [];
    foreach (get_posts($args) as $post){
    $feature = (get_fields($post->ID));
    $feature['title'] = $post->post_title;
    $feature['text'] = $post->post_content;
    $feature['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
    $features[] = $feature;
    }
    return $features;
}
