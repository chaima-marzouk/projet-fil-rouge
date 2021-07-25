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
            $this->view('pages/donors-liste',$data);
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
        public function test()
        {
            $this->view('pages/EditPost');        
        }

        public function post()
        {
            $this->view('pages/Post');
        }

        
        public function profil()
        {
            $this->view('pages/Profil');
        }

        public function rendezvous()
        {
            $this->view('pages/Rendezvous');
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
    }

        




?>