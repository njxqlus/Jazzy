<?php
/**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
//Cleaner WordPress markup
add_theme_support('soil-clean-up');

//Disable asset versioning
add_theme_support('soil-disable-asset-versioning');

//Disable trackbacks
add_theme_support('soil-disable-trackbacks');

//Move all JS to the footer
add_theme_support('soil-js-to-footer');

//Cleaner walker for navigation menus
//add_theme_support('soil-nav-walker');

//Convert search results from /?s=query to /search/query/
add_theme_support('soil-nice-search');

//Root relative URLs
add_theme_support('soil-relative-urls');

//Google Analytics
//add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');

//Load jQuery from the jQuery CDN
//add_theme_support('soil-jquery-cdn');
