<?php

namespace Jazzy;

class ACF {

    private function view($view, $data)
    {
        $viewPath = "acf.$view";
        bladerunner($viewPath, $data);
    }

    /**
     * Return field's name with checked type (subfield, option etc)
     * @since 1.0
     * @param string $name
     * @param bool $post_id
     * @return bool|mixed|null
     */
    public function get($name, $post_id = false)
    {
        if ($post_id && $post_id == 'option')
        {
            return get_field($name, 'option');
        } elseif ($post_id && $post_id != 'option')
        {
            if (!is_null(get_field($name, $post_id)))
            {
                return get_field($name, $post_id);
            }
        }
        if (get_sub_field($name) !== false)
        {
            return get_sub_field($name);
        } elseif (!is_null(get_field($name)))
        {
            return get_field($name);
        } elseif (get_sub_field($name) !== false)
        {
            return get_sub_field($name);
        } else
        {
            return get_field($name, 'option');
        }
    }

    /**
     * Echo field
     * @since 1.0
     * @param string $name
     */
    public function the($name)
    {
        echo $this->get($name);
    }

    /**
     * Echo image with parameters by ID
     * @since 1.0
     * @param string $name
     * @param string $size Size of image. Use registered size (thumbnail, medium etc) or array(150,150)
     * @param bool $link Use link to full image
     */
    public function image($name = '', $size = 'thumbnail', $link = true)
    {
        $field = $this->get($name);
        if ($field) $this->view('image', compact('link', 'field', 'name', 'size'));
    }

    /**
     * Echo text
     * @since 1.0
     * @param string $name
     * @param bool $paragraph Use paragraph
     */
    public function text($name = '', $paragraph = true)
    {
        $field = $this->get($name);
        if ($field) $this->view('text', compact('paragraph', 'name', 'field'));
    }

    /**
     * Echo gallery images
     * @since 1.0
     * @param string $name
     * @param string $size Size of image. Use registered size (thumbnail, medium etc) or array(150,150)
     * @param bool $link Use link to full size image
     * @param bool $caption Echo image caption
     */
    public function gallery($name = '', $size = 'thumbnail', $link = true, $caption = false)
    {
        $fields = $this->get($name);
        if ($fields) $this->view('gallery', compact('fields', 'size', 'link', 'caption'));
    }
}
