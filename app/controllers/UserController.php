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

        public function post(){
            $this->view('pages/Post');
        }
        public function about(){
            $this->view('pages/AboutUs');
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

        public function signup(){
            if(!isset($_POST['signup'])){
                //load the view insert
                $this->view('pages/admin_login');
            }

            else{
                $data = [
                    'full_name' => $_POST['full_name'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'g_sang' => $_POST['g_sang'],
                    'phone' => $_POST['phone'],
                    'ville' => $_POST['ville'],
                    'cin' => $_POST['cin']
              ];

              //consomation du data
              $this->callModel->register($data);
              header('location: ' . URLROOT . '/' . 'UserController/admin_signin');
              echo("added succefully ! ");
            }
        }

        public function login()
        {
            // Check for POST
            // $_SERVER — Variables de serveur et d'exécution
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                // die("oups");
                // Init data
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_err' => '',
                    'password_err' => '',
                ];
                
                // Validate Email
                if (empty($data['email'])) {
                    $data['email_err'] = 'Please enter email';
                }
    
                // Validate Password
                if (empty($data['password'])) {
                    $data['password_err'] = 'Please enter password';
                }
    
                
                // Check for user/email
                if ($this->callModel->findUserByEmail($data['email'])) {
    
                    // User found
                } else {
                    // User not found
                    $data['email_err'] = 'No user found';
                }
                
    
                // Make sure errors are empty
                if (empty($data['email_err']) && empty($data['password_err'])) {
                    // Validated
                    // Check and set logged in user
                    $loggedInUser = $this->callModel->login($data['email'], $data['password']);
    
                    if ($loggedInUser) {
                        
                        $this->callModel->getUser();
                        // $this->view('pages/BlogsPage', $data);
                        header('location:'.URLROOT.'/' . 'UserController/crud'); 
                    } else {
                        $data['password_err'] = 'Password incorrect';
                        $this->view('pages/Signin', $data);
                    }
                } else {
    
                    // Load view with errors
                    $this->view('pages/Signin', $data);
                }
            } else {
                // Init data
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => '',
                ];
    
                // Load view
                $this->view('pages/BlogsPage', $data);
                // header('location:'.URLROOT.'/' . 'UserController/crud'); 
            }
        }
    }

        




?>