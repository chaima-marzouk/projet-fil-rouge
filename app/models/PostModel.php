
<?php

class PostModel{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function findAllPosts(){
        $this->db->query('SELECT * FROM post ORDER BY created_at ASC' );

        $result = $this->db->resultSet();

        return $result;
    }

    


}