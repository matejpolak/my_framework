<?php

namespace app\controllers;
use \codingbootcamp\tinymvc\view;

class errorController {
    public function error404() {
        $document = new view('document');
        $document->content = '404: page didn\'t found';
        return $document;
    }
}