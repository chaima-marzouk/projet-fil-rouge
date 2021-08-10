
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

    public function addPost($data) {
        $this->db->query('INSERT INTO post (user_id, fullname, email, adress, phone, details) VALUES (:user_id, :fullname, :email, :adress, :phone, :details)');

        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':fullname', $data['fullname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':details', $data['details']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }




}