<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset") ?>"></meta>
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>"></link>
    <?php if (is_singular() && get_option("thread_comments") ) wp_enqueue_script("comment-reply"); ?>
    <?php wp_head(); ?>

    <!-- TODO: there should be a better way, right? -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"></link>
</head>
<body <?php body_class(); ?>>
    <table class="skeleton_table">
        <tr class="header">
            <td class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" style="padding-top: 12px;" alt="">
            </td>
            <td class="right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/fono-logo.png);">
                <div class="title">
                    <div>Pal. J. Matulaičio</div>
                    <div>Šeimos pagalbos centras</div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/lt-flag.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/eng-flag.png">
            </td>
        </tr>
        <tr>
            <td class="menu">
                <div class="skeleton_menu"><?php get_sidebar(); ?></div>
            </td>
            <td>
                <table class="skeleton_content_wrapper_table">
                    <tr>
                        <td style="height: 50px; width: 50px; background-image: url(<?php echo get_template_directory_uri(); ?>/img/gradient-kv.png);"></td>
                        <td style="height: 50px; background-image: url(<?php echo get_template_directory_uri(); ?>/img/gradient-v.png);"></td>
                        <td style="height: 50px; width: 50px; background-image: url(<?php echo get_template_directory_uri(); ?>/img/gradient-dv.png);"></td>
                    </tr>
                    <tr>
                        <td style="width: 50px; background-image: url(<?php echo get_template_directory_uri(); ?>/img/gradient-k.png);"></td>
                        <td class="content">

