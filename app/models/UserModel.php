<?php

class UserModel {

    private $database;
    // public function __construct()
    public function __construct()
    {
        //creer un objet d'une class en utulisant "new"
        $this->database = new Database; //objet

    }

    //-------------------------------- DONOR SECTION-----------------------------------------------------------\\

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


    //-------------------------------- USER SECTION-----------------------------------------------------------\\

     // Find user by email
     public function findUserByEmail($email)
     {
         $this->database->query('SELECT * FROM reg_user WHERE email = :email');
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

     public function register($data)
    {
        //preparation de la query
        // :placeholders
        $this->database->query("INSERT INTO `reg_user` (`full_name`, `cin`, `ville`, `g_sang` , `phone` , `email`,`password` ) VALUES (:full_name, :cin, :ville, :g_sang, :phone, :email, :password)");

        //saniteser contre sql injection
        $this->database->bind(':full_name', $data['full_name']);
        $this->database->bind(':cin', $data['cin']);
        $this->database->bind(':ville', $data['ville']);
        $this->database->bind(':g_sang', $data['g_sang']);
        $this->database->bind(':phone', $data['phone']);
        $this->database->bind(':email', $data['email']);
        $this->database->bind(':password', $data['password']);
      
        //execution
        if ($this->database->execute()){
            return true;
        }
        else {
            return false;
        }

    }

    public function login($email, $password)
    {
        $this->database->query('SELECT * FROM reg_user WHERE email = :email');
        $this->database->bind(':email', $email);

        $row = $this->database->single();

        $hashed_password = $row->password;
        
        if ($password == $hashed_password) {
            return $row;
        } else {
            return false;
        }
    }

    public function getUser()
    {
        //preparation de la query
        $this->database->query("SELECT * FROM `reg_user` ");
        //execution de la query / fetch all 
        $result = $this->database->resultSet();
        return ($result);
      
    }
    
    public function updateUser($data)
    {
      $this->database->query("UPDATE reg_user  SET email = :email, password = :password WHERE id_user = :id");

      $this->database->bind(':id', $data['id']);
      $this->database->bind(':email', $data['email']);
      $this->database->bind(':password',$data['password']);
      
     

      $data=$this->database->execute();

      if($this->database->execute()){
          return true;
        } else {
          return false;
        }

    }

    public function getUserbyId($id){
        $this->database->query("SELECT * FROM  `reg_user` WHERE user_id = :id");
        $this->database->bind(':id',$id);
  
        $results = $this->database->single();
  
        return $results;
        
      }

    //   -----------------admin--------------//

    public function findAdminByEmail($email){
        $this->database->query('SELECT * FROM admin WHERE email = :email');
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


    public function loginAdmin($email, $password)
    {
        $this->database->query('SELECT * FROM admin WHERE email = :email');
        $this->database->bind(':email', $email);

        $row = $this->database->single();

        $hashed_password = $row->password;
        
        if ($password == $hashed_password) {
            return $row;
        } else {
            return false;
        }
    }
}
