<?php

namespace app\controllers;
use \codingbootcamp\tinymvc\view;

class indexController {

    public function index() {
        $document = new view('document');
        $document->content = 'This is the homepage with something more';
        return $document;
    }
}