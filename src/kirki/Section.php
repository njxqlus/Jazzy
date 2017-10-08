<?php

namespace Jazzy\Kirki;

use Jazzy\Kirki;

class Section extends Kirki {

    protected $panel;

    /**
     * Convert dot array to normal array and bind section and panel
     *
     * @param $array
     */
    protected function sectionDecode($array)
    {
        $array = explode('.', $array);
        if (count($array) == 2)
        {
            $this->panel = $array[0];
            $this->section = $array[1];
        } else
        {
            $this->panel = '';
            $this->section = $array[0];
        }
    }

    public function add($name, $title, $priority = 160, $description = false)
    {
        $this->sectionDecode($name);
        $args = [
            'title'          => __($title, $this->theme_domain),
            'panel'          => $this->panel,
            'priority'       => $priority,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
        ];
        if ($description) $args['description'] = __($description, $this->theme_domain);
        \Kirki::add_section($this->section, $args);
    }
}