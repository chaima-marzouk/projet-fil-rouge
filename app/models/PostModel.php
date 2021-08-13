
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
        $this->db->query('INSERT INTO post (user_id, fullname, email, adress, phone, details, created_at) VALUES (:user_id, :fullname, :email, :adress, :phone, :details, :created_at)');

        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':fullname', $data['fullname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':details', $data['details']);
        $this->db->bind(':created_at', $data['created_at']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findPostById($id) {
        $this->db->query('SELECT * FROM post WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }


    public function updatePost($data) {
        $this->db->query('UPDATE post SET fullname = :fullname, email = :email, adress = :adress, phone = :phone, details = :details, created_at = :created_at  WHERE id = :id');
        

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':fullname', $data['fullname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':details', $data['details']);
        $this->db->bind(':created_at', $data['created_at']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function deletePost($id) {
        $this->db->query('DELETE FROM post WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findAllComment() {
        $this->db->query('SELECT * FROM `donation`');

        $result = $this->db->resultSet(); 

        return $result;
    }




}