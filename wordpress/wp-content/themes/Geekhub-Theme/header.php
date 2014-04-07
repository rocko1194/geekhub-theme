<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Geekhub page</title>
    <link href="http://fonts.googleapis.com/css?family=PT+Sans&amp;subset=latin,cyrillic-ext,cyrillic" rel="stylesheet" type="text/css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="header-wrapper">
    <div id="header">
        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
            <h1>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            </h1>
        <?php else : ?>
            <h1><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
        <?php endif; ?>
        <?php wp_nav_menu(array(
            'theme_location'  => 'main_menu',
            'container'       => false,
            'menu_id'         => 'nav'
        )); ?>

        <ul class="social-nav">
            <?php
            $href = get_theme_mod( 'facebook_setting', 'default_value' );
            if ($href) {?>
                <li class="fb"><a href="www.facebook.com/<?php echo $href?>">Facebook</a></li>
            <?php } ?>
            <?php
            $href = get_theme_mod( 'vkontakte_setting', 'default_value' );
            if ($href) {?>
                <li class="vk"><a href="www.vk.com/<?php echo $href?>">Vkontakte</a></li>
            <?php } ?>
            <?php
            $href = get_theme_mod( 'twitter_setting', 'default_value' );
            if ($href) {?>
                <li class="tw"><a href="www.twitter.com/<?php echo $href?>">Twitter</a></li>
            <?php } ?>
            <?php
            $href = get_theme_mod( 'youtube_setting', 'default_value' );
            if ($href) {?>
                <li class="yt"><a href="www.youtube.com/<?php echo $href?>">Youtube</a></li>
            <?php } ?>
            <?php
            $href = get_theme_mod( 'vimeo_setting', 'default_value' );
            if ($href) {?>
            <li class="vimeo"><a href="www.vimeo.com/<?php echo $href?>">Vimeo</a></li>
            <?php } ?>
        </ul>
        <?php if ( is_home() ) {?>
            <h2>Реєстрація на другий сезон відкрита!</h2>
            <a href="#" class="registration">Зареєструватися</a>
        <?php } ?>
    </div>
</div>
