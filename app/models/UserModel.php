<?php

class UserModel {

    private $database;
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
        console.log($result);
        return $result;
      
    }
}
