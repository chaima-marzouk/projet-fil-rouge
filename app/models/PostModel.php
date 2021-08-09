
<?php

class PostModel{
    private $db;

    public function __constract(){
        $this->db = new Database;
    }

    public function findAllPosts(){
        $this->db->query('SELECT * FROM posts ORDER BY created_at ASC' );

        $result = $this->db->resultSet();

        return $result;
    }
}