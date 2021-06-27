<?php
    class UserController extends  Controller{
        public function __construct()
        {
           $this->callModel = $this->model('UserModel');
        }
        public function index()
        {
            $this->view('pages/Admin');
        } 
        public function Admin(){
            $this->callModel->getDonor();
            $this->view('pages/Admin' ,$data);
        }
    }





?>