<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset") ?>"></meta>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>"></link>
    <?php if (is_singular() && get_option("thread_comments") ) wp_enqueue_script("comment-reply"); ?>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"></link>
    <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/style-print.css"></link>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"></link>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/interactive-parts.js"></script>
</head>
<body <?php body_class(); ?>>
    <table class="skeleton_table">
        <tr class="spc_header">
            <td class="left">
                <a id="top_left_spc_logo"
                        <?php if (isset($_REQUEST['lang']) && $_REQUEST['lang'] == 'en') { ?>
                            href="?lang=en"
                        <?php } else { ?>
                            href="?lang=lt"
                        <?php } ?>
                    >
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo_img" alt="">
                </a>
            </td>
            <td class="middle">
                <div class="title">
                    <?php if (isset($_REQUEST['lang']) && $_REQUEST['lang'] == 'en') { ?>
                        <div>The Blessed J. Matulaitis</div>
                        <div>Family Support Center</div>
                    <?php } else { ?>
                        <div>Pal. J. Matulaičio</div>
                        <div>Šeimos pagalbos centras</div>
                    <?php } ?>
                </div>
            </td>
            <td class="right">
                <div class="with_bg_logo"></div>
            </td>
        </tr>
        <tr class="spc_menu_plus_content">
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
                                <a href="?lang=lt" class="ltu <?php if(!isset($_REQUEST['lang']) || $_REQUEST['lang'] == 'lt') { ?>active<?php } ?>"></a>
                                <a href="?lang=en" class="eng <?php if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == 'en') { ?>active<?php } ?>"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="bl"></td>
                        <td class="content">

