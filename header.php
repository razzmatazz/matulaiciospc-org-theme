<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset") ?>"></meta>
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>"></link>
    <?php if (is_singular() && get_option("thread_comments") )
        wp_enqueue_script("comment-reply");
    ?>
    <?php wp_head(); ?>
    <style type="text/css" media="screen" src="<?php echo get_template_directory_uri(); ?>/style.css"></style>
</head>
<body>

    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div>
	<div id="content">

