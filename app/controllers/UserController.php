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
        
    }





?>