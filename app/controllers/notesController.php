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
        if(false) {

        } else {
            $note = new Note;
        }

        if($_POST) {
            $note->title = request('title', null);
            $note->text = request('text', null);
            $note->short_summary = request('short_summary', null);

            $valid = true;

            if(!trim($note->title)) {
                $valid = false;
            }
            if(!trim($note->text)) {
                $valid = false;
            }
            if(!trim($note->short_summary)) {
                $valid = false;
            }

            if($valid) {
                $note->insert();

                header('Location: /list');
                exit();
            }
        }

        $edit_form = new view('notes/edit');

        $edit_form->note = $note;

        $document = new view('document');
        $document->content = $edit_form;
        return $document;
    }
}