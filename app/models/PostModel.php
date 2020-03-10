<?php

include_once('../app/models/Model.php');

class PostModel extends Model
{
    public $query;

    public function insertPost($data) {

        $this->query = $this->insertInto('posts', $data);
        $this->execstmt($this->query, $data);
    }
}