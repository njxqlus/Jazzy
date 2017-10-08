<?php
if (function_exists('acf_add_options_page'))
{
    acf_add_options_page([
        'page_title' => __('Theme Options', 'jazzy'),
        'menu_slug'  => 'theme_options',
        'icon_url'   => 'dashicons-hammer',
        'redirect'   => true,
    ]);
    acf_add_options_sub_page([
        'page_title' => __('General', 'jazzy'),
        'menu_slug'  => 'general',
        'parent'     => 'theme_options',
    ]);
}
