<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset") ?>"></meta>
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>"></link>
    <?php if (is_singular() && get_option("thread_comments") ) wp_enqueue_script("comment-reply"); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <table class="skeleton_table">
        <tr class="header"><td colspan="2">
            <div class="skeleton_header">headeris</div>
        </td></tr>
        <tr><td class="menu"><div class="skeleton_menu">
                <?php get_sidebar(); ?>
            </div></td>
            <td><div class="skeleton_content">

