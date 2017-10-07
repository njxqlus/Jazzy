<?php
function jazzy()
{
    return new \Jazzy\Jazzy();
}

add_filter('bladerunner/template/bladepath', function ()
{
    return JAZZY_DIR_PATH . '/src/views';
});
