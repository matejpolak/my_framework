<?php

namespace app;
use \codingbootcamp\exercises\db;
use \PDO;

class Note {
    public $id = null;
    public $title = null;
    public $text = null;
    public $short_summary = null;
    public $added_at = null;
    public $tags = null;
    public $user_id = null;

    public function insert() {
        $query = "
        INSERT INTO `notes` (`title` , `text`, `short_summary`, `added_at`, `tags`, `user_id`)
        VALUES (?, ?, ?, ?, ?, ?)
        ";
        db::query($query, [
            $this->title,
            $this->text,
            $this->short_summary,
            $this->added_at,
            $this->tags,
            $this->user_id
        ]);
    }

    public static function find($id) {
        $query = "
            SELECT *
            FROM `notes`
            WHERE `notes`.`id` = ?
        ";

        $stmt = db::query($query, [$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, static::class);
        $note = $stmt->fetch();

        return $note;
    }
}