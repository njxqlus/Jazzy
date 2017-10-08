<?php

namespace Jazzy\Kirki;

use Jazzy\Kirki;

class Panel extends Kirki {

    function __construct($name, $title, $priority = 10, $description = false)
    {
        parent::__construct();
        $args = [
            'priority' => $priority,
            'title'    => __($title, $this->theme_domain),
        ];
        if ($description) $args['description'] = __($description, $this->theme_domain);
        \Kirki::add_panel($name, $args);
    }
}