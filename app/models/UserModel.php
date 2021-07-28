<?php

class UserModel {

    private $database;
    // public function __construct()
    public function __construct()
    {
        //creer un objet d'une class en utulisant "new"
        $this->database = new Database; //objet

    }
    public function getDonor()
    {
        //preparation de la query
        $this->database->query("SELECT * FROM `donor` ");
        //execution de la query / fetch all 

        $result = $this->database->resultSet();
        // console.log($result);
        return $result;
      
    }

    public function removeDonor($data)
    {
        $this->database->query("DELETE FROM `donor` WHERE id = :id ");
        $this->database->bind(':id', $data ['id']);

        $row = $this->database->single();
        return $row;
    }

    public function addDonor($data)
    {
        //preparation de la query
        // :placeholders
        $this->database->query("INSERT INTO `donor` (`full_name`, `cdn`, `adress`, `blood_group` , `phone` , `age` ) VALUES (:full_name, :cdn, :adress, :blood_group, :phone, :age)");

        //saniteser contre sql injection
        $this->database->bind(':full_name', $data['full_name']);
        $this->database->bind(':cdn', $data['cdn']);
        $this->database->bind(':adress', $data['adress']);
        $this->database->bind(':blood_group', $data['blood_group']);
        $this->database->bind(':phone', $data['phone']);
        $this->database->bind(':age', $data['age']);
      
        //execution
        if ($this->database->execute()){
            return true;
        }
        else {
            return false;
        }

    }

     // Find user by email
     public function findUserByEmail($email)
     {
         $this->database->query('SELECT * FROM bloger WHERE email = :email');
         // Bind value
         $this->database->bind(':email', $email);
         
       
         $row = $this->database->single();
 
         // Check row
         if ($this->database->rowCount() > 0) {
             return true;
         } else {
             return false;
         }
     }
}
