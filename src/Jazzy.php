<?php

namespace Jazzy;

class Jazzy {

    public function post()
    {
        return new Post;
    }

    public function acf()
    {
        return new ACF();
    }

    public function kirki()
    {
        return new Kirki();
    }
}
