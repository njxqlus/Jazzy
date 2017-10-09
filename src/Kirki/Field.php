<?php

namespace Jazzy\Kirki;

use Jazzy\Kirki;

class Field extends Kirki {

    protected $type;

    function __construct($type)
    {
        parent::__construct();
        $this->type = $type;
    }

    public function add($name, $label = false, $params = [])
    {
        $this->nameDecode($name);
        \Kirki::add_config($this->section, [
            'capability'     => 'edit_theme_options',
            'option_type'    => 'option',
            'option_name'    => $this->section,
            'disable_output' => false,
        ]);
        if (!$label) $label = ucfirst($this->field);
        $args = [
            'settings' => $this->field,
            'label'    => __($label, $this->theme_domain),
            'section'  => $this->section,
            'type'     => $this->type,
            'priority' => 10,
            'default'  => '',
        ];
        $args = array_merge($args, $params);

        return \Kirki::add_field($this->section, $args);
    }
}