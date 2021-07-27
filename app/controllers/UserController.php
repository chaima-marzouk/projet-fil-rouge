<?php
    class UserController extends  Controller{
        public function __construct()
        {
           $this->callModel = $this->model('UserModel');
        }
        public function index()
        {
            $donors = $this->callModel->getDonor();
           
            $data = [
                "donors" => $donors,

            ];
            $this->view('pages/Home',$data);
            // $this->view('pages/donors-liste',$data);
        } 
        
        public function delete()
        {
            $data = [
                'id' => $_GET['id'],
            ]; 
            $this->callModel->removeDonor($data);
            // $this->view('pages/Admin');
            header('location:' . URLROOT . '/' . 'UserController/index');

        }

        public function contactUs()
        {
            $this->view('pages/ContactUs');
        }
        public function admin_signin()
        {
            $this->view('pages/Admin_login');
        }
        public function donorsliste(){
            $donors = $this->callModel->getDonor();
            $data = [
                "donors" => $donors,

            ];
            $this->view('pages/donors-liste',$data);
        }

        public function email(){

        }


        public function insert()
        {
    
            if (!isset($_POST['submit'])) {
                //load the view insert
                // $this->view('pages/donors-liste');
                echo("oups");
                
            }
            else {
                //array qui retourn le resultat envoyé par $_POST
                $data = [
                     'full_name' => $_POST['full_name'],
                     'cdn' => $_POST['cdn'],
                     'adress' => $_POST['adress'],
                     'blood_group' => $_POST['blood_group'],
                     'phone' => $_POST['phone'],
                     'age' => $_POST['age']
               ];

               
              
                //consomation du data
                $this->callModel->addDonor($data);
                header('location: ' . URLROOT . '/' . 'UserController/donorsliste');
                echo("added succefully ! ");
            }
          
        }
    }

        




?>