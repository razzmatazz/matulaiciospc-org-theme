<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset") ?>"></meta>
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>"></link>
    <?php if (is_singular() && get_option("thread_comments") ) wp_enqueue_script("comment-reply"); ?>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"></link>
    <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/style-print.css"></link>
</head>
<body <?php body_class(); ?>>
    <table class="skeleton_table">
        <tr class="spc_header">
            <td class="left">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" style="padding-top: 12px;" alt="">
                </a>
            </td>
            <td class="middle">
                <div class="title">
                    <div>Pal. J. Matulaičio</div>
                    <div>Šeimos pagalbos centras</div>
                </div>
            </td>
            <td class="right">
                <div class="with_bg_logo"></div>
            </td>
        </tr>
        <tr>
            <td class="menu">
                <?php wp_nav_menu(); ?>
            </td>
            <td colspan="2">
                <table class="skeleton_content_wrapper_table">
                    <tr class="top">
                        <td class="tl"></td>
                        <td class="tm"></td>
                        <td class="tr">
                           <div class="language_switcher">
                                <a href="/" class="ltu"></a>
                                <!-- add link to english intro page -->
                                <a href="" class="eng"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="bl"></td>
                        <td class="content">

