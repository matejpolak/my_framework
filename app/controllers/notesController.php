<?php

namespace app\controllers;
use \codingbootcamp\tinymvc\view;
use \app\Note;

class notesController {

    
    public function listing() {
        $note = Note::find(1);

        $document = new view('document');

        $list = new view('notes/list');
        $list->note = $note;

        $document->content = $list;
        return $document;
    }

    public function edit() {
        $note = new Note();
        $note->title = 'This is my first note';
        $note->text = 'This is the text of my first note';
        $note->added_at = date('Y-m-d H:i:s');
        $note->insert();

        var_dump($note);

        $document = new view('document');
        $document->content = 'This is edit form';
        return $document;
    }
}