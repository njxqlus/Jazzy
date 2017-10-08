<?php

namespace Jazzy;

use Jazzy\Kirki\Field;
use Jazzy\Kirki\Panel;
use Jazzy\Kirki\Section;

class Kirki {

    protected $section;
    protected $field;
    protected $theme_domain;

    function __construct()
    {
        if (isset($GLOBALS['jazzy']['kirki']['theme_domain']))
        {
            $this->theme_domain = $GLOBALS['jazzy']['kirki']['theme_domain'];
        } else $this->theme_domain = 'jazzy';
    }

    /**
     * Convert dot array to normal array and bind section and field
     *
     * @param $array
     */
    protected function nameDecode($array)
    {
        $array = explode('.', $array);
        $this->section = $array[0];
        $this->field = $array[1];
    }

    /**
     * Return Field instance
     *
     * @param $type
     * @return Field
     */
    public function field($type)
    {
        return new Field($type);
    }

    /**
     * Return Section instance
     *
     * @return Section
     */
    public function section()
    {
        return new Section();
    }

    /**
     * Return Panel instance
     *
     * @param $name
     * @param $title
     * @param int $priority
     * @param bool $description
     * @return Panel
     */
    public function panel($name, $title, $priority = 10, $description = false)
    {
        return new Panel($name, $title, $priority, $description);
    }

    public function setThemeDomain($domain)
    {
        $GLOBALS['jazzy']['kirki']['theme_domain'] = $domain;
        $this->theme_domain = $domain;
    }

    /**
     * Get section.field
     *
     * @param string $name dot array name
     * @param bool $default
     * @return bool
     */
    public function get($name, $default = false)
    {
        $this->nameDecode($name);
        if (isset(get_option($this->section, $default)[$this->field]))
        {
            return get_option($this->section, $default)[$this->field];
        } else return $default;
    }

    /**
     * Echo section.field
     *
     * @param string $name dot array name
     * @param bool $default
     */
    public function the($name, $default = false)
    {
        $field = $this->get($name, $default);
        if ($field) echo $field;
    }
}