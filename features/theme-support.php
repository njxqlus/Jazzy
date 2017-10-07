<?php
/**
 * Add theme support
 * @since 1.0
 */
add_action('after_setup_theme',
    function ()
    {
        //Post thumbnails
        add_theme_support('post-thumbnails');

        //Post formats
        add_theme_support('post-formats', ['aside', 'audio', 'gallery', 'image', 'link', 'quote', 'video',]);

        //Add theme support for HTML5 Semantic Markup
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

        //Add theme support for document Title tag
        add_theme_support('title-tag');

        //Woocommerce support
        add_theme_support('woocommerce');
    }
);
