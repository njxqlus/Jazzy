<?php

namespace Jazzy;

class Post {

    private function view($view, $data)
    {
        $viewPath = "post.$view";
        bladerunner($viewPath, $data);
    }

    /**
     * Echo post thumbnail
     * @since 1.0
     * @param null $post_id
     * @param string $size Size of thumbnail
     * @param string $link post|image|null; Use post for link to the post, image for link to the full size image or null for no link
     */
    public function thumbnail($size = 'thumbnail', $link = 'post', $post_id = null)
    {
        $thumbnail = get_the_post_thumbnail($post_id, $size);
        if ($thumbnail) $this->view('thumbnail', compact('thumbnail', 'link', 'post_id'));
    }

    /**
     * Echo post title
     * @since 1.0
     * @param string $tag h tag, ex: h1,h2,h3 etc
     * @param bool $link
     * @param null $post_id
     */
    public function title($tag = 'h2', $link = false, $post_id = null)
    {
        $title = get_the_title($post_id);
        if ($title) $this->view('title', compact('link', 'title', 'tag'));
    }
}
