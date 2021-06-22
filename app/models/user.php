<?php

class user

{
    private $database;
    public function __construct()
    {
        $this->database = new Database;
    }

    public function getUsers()
    {
        // preparation de la query 
        $this->database->query("SELECT * FROM users");

        // execution de la query / fetch all
        $result = $this->database->resultSet();

        return $result;
    }
    public function addUser($data)
    {

        // preparation de la query 
        $this->database->query("INSERT INTO `users`( `user_nom`, `user_prenom`, `user_age`) VALUES (:user_nom, :user_prenom , :user_age)");


        // bind the values with placeholders

        $this->database->bind(':user_nom', $data['user_nom']);
        $this->database->bind(':user_prenom', $data['user_prenom']);
        $this->database->bind(':user_age', $data['user_age']);




        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function UpdateUser($data)
    {

        // preparation de la query 
        $this->database->query("INSERT INTO `users`( `user_nom`, `user_prenom`, `user_age`) VALUES (:user_nom, :user_prenom , :user_age) WHERE id = :id");


        // bind the values with placeholders
        $this->database->bind(':id', $data['user_nom']);
        $this->database->bind(':user_nom', $data['user_nom']);
        $this->database->bind(':user_prenom', $data['user_prenom']);
        $this->database->bind(':user_age', $data['user_age']);




        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
