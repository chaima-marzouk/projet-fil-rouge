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
            $this->view('pages/Admin',$data);
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

    }





?>