<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package morskaya10
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="<?php 
                            if(is_home() || is_front_page()){
                                echo 'for-main';
                            } else {
                                echo 'for-others';
                            }
                    ?>">
        <div class="top-head">
            <div class="wrapper">
                <p class="block-none">Семейный отдых в Крыму с комфортом!</p>
                <div class="contacts">
                    <div class="email">
                        <i class="far fa-envelope"></i>
                        <p>
                            <a class="email-1" href="mailto:<?php echo get_theme_mod( 'morskaya10_email' ); ?>">
                                <?php echo get_theme_mod( 'morskaya10_email' ); ?>
                            </a>
                        </p>
                    </div>
                    <div class="tel">
                        <i class="fas fa-phone"></i>
                        <p>
                            <a class="tel1" href="tel:<?php echo get_theme_mod( 'morskaya10_phone1' ); ?>">
                                <?php echo get_theme_mod( 'morskaya10_phone1' ); ?>
                            </a>
                            <br />
                            <a class="tel2" href="tel:<?php echo get_theme_mod( 'morskaya10_phone2' ); ?>">
                                <?php echo get_theme_mod( 'morskaya10_phone2' ); ?>
                            </a>
                        </p>
                    </div>
                    <!-- <a class="wether" href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.ru/pogoda/27333" target="_blank"><img src="https://info.weather.yandex.net/27333/2.ru.png?domain=ru" border="0" alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" border="0"/></a> -->

                </div>
            </div>
        </div>
        <div class="main-head">
            <div class="wrapper">
                <a href="<?php echo home_url( '/' )?>" class="logo" style="text-decoration: none;">
                    <?php if(!is_home() && !is_front_page()):?>
                        <?php bloginfo('name');?>
                    <?php endif;?>
                    <!-- <span class="street">Морская,</span>
                    <span class="position-logo">10</span> -->
                </a>
                <?php wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'container' => false

                ) ); ?>
                <!-- <ul class="nav">
                    <a href="index.php">Главная</a>
                    <a href="?page=order#">Бронирование</a>
                    <a href="?page=price">Цены</a>
                    <a href="?page=gallery">Фото</a>
                    <a href="?page=questions">Вопросы и ответы</a>
                    <a href="?page=reviews">Отзывы</a>
                    <a href="?page=contact#">Контакты</a>
                </ul> -->
                <div class="menu-button"></div>
            </div>
            <div class="menu-nav">
                <a href="index.php">Главная</a>
                <a href="?page=order#">Бронирование</a>
                <a href="?page=price">Цены</a>
                <a href="?page=gallery">Фото</a>
                <a href="?page=questions">Вопросы и ответы</a>
                <a href="?page=reviews">Отзывы</a>
                <a href="?page=contact#top">Контакты</a>
            </div>
        </div>
    </header>