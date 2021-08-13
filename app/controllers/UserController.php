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
        } 
        
        public function delete()
        {
            $data = [
                'id' => $_GET['id'],
            ]; 

            $this->callModel->removeDonor($data);
            header('location:' . URLROOT . '/' . 'UserController/index');

        }

        public function contactUs()
        {
            $this->view('pages/ContactUs');
        }
        public function admin_signin()
        {
          
            $this->view('pages/login');
        }
        public function adminlog()
        {
          
            $this->view('pages/AdminLogin');
        }

        public function register()
        {
          
            $this->view('pages/register');
        }
        public function donorsliste(){
            $donors = $this->callModel->getDonor();
            $data = [
                "donors" => $donors,

            ];
            $this->view('pages/donors-liste',$data);
        }

        public function user_profil(){
           

         $this->view('pages/user_profil');
        }

        public function user_post(){
            $this->view('pages/user_profil_post');
        }

        public function post(){
            $this->view('pages/Post');
        }
        public function about(){
            $this->view('pages/AboutUs');
        }
        public function admin(){
            $this->view('pages/admin');
        }
        public function profil(){
           
            $this->view('pages/profil');
        }

        public function logout() {
            
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        $this->view('pages/login');
        
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
                $this->view('pages/register');
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
              echo "<script>alert(\"Regestred succefully :)\")</script>";
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
                        
                        $test = $this->callModel->getUser();
                        
                         $_SESSION['utilisateur'] = $loggedInUser->{'full_name'};
                         $_SESSION['user_email'] = $loggedInUser->{'email'};
                         $_SESSION['user_password'] = $loggedInUser->{'password'};
                         $_SESSION['city'] = $loggedInUser->{'ville'};
                         $_SESSION['phone'] = $loggedInUser->{'phone'};
                         $_SESSION['ID'] = $loggedInUser->{'cin'};
                         $_SESSION['blood'] = $loggedInUser->{'g_sang'};
                         $_SESSION['user_id'] = $loggedInUser->{'user_id'};
                         
                        header('location:'.URLROOT.'/' . 'UserController/user_profil'); 
                    } else {
                        $data['password_err'] = 'Password incorrect';
                        $this->view('pages/Signin', $data);
                    }
                } else {
    
                    // Load view with errors
                    $this->view('pages/login', $data);
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
                
                $this->view('pages/user_profil', $data);
                 
            }
        }


        public function update($id)
        {
            $user = $this->callModel->getUserbyId($id);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data=[ 
                    'user' => $user,
                    'email' =>$_POST['email'],
                    'password' => $_POST['password'],
                    ];

                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
                        $data = [
                            'user_id' => $_SESSION['user_id'],
                            'user' => $user,
                            'email' => trim($_POST['email']),
                            'password' => trim($_POST['password']),
                        ];
            
                       
                            if ($this->callModel->updateUser($data)) {
                                echo "<script>alert(\"Post updated succefully :)\")</script>";
                            } else {
                                echo "<script>alert(\"oupsiiiii :( \")</script>";
                            }
                        } else {
                            $this->view('pages/user_profil', $data);
                        }
                    
            
                    $this->view('pages/user_profil',$data);
                }
           
        }





    public function email(){
        ini_set('SMTP','imap.gmail.com');
        

        $message_sent = false;
        if(isset($_POST['email']) && $_POST['email'] != ''){

            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                //submit the form
                $username = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $to = "sonsiteweb123@gmail.com";
                $body = "";

                $body .= "From ".$username. "\r\n";
                $body .= "Email ".$email. "\r\n";
                $body .= "Message ".$message. "\r\n"; 
                
                mail($to,$subject,$body);
                // ini_set('SMTP','smtp.topnet.tn');
               


                $message_sent = true;
            }
        

    }

        
    }



    public function deleteAccount($id) {

        $user = $this->postModel->getUserbyId($id);

        $data = [
            'user' => $user,
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->postModel->deletePost($id)) {
                echo "<script>alert(\"Post Deleted succefully :)\")</script>";
            } else {
               die('Something went wrong!');
            }
        }
    }


    // ----------------admin-----------------------//

    public function dashboard(){

        $this->view('pages/dashboard');
    }

    public function adminLogin(){

    // Check for POST
            // $_SERVER — Variables de serveur et d'exécution
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
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
                if ($this->callModel->findAdminByEmail($data['email'])) {
    
                    // User found
                } else {
                    // User not found
                    $data['email_err'] = 'No user found';
                }
                
    
                // Make sure errors are empty
                if (empty($data['email_err']) && empty($data['password_err'])) {
                    // Validated
                    // Check and set logged in user
                    $loggedInUser = $this->callModel->loginAdmin($data['email'], $data['password']);

                    
    
                    if ($loggedInUser) {
                        
                         $this->callModel->getUser();
                        
                         $_SESSION['admin'] = $loggedInUser->{'name'};
                         $_SESSION['admin_email'] = $loggedInUser->{'email'};
                         
                        header('location:'.URLROOT.'/' . 'UserController/dashboard'); 
                    } else {
                        $data['password_err'] = 'Password incorrect';
                        $this->view('pages/AdminLogin', $data);
                    }
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
                
                $this->view('pages/dashboard', $data);
                 
            }
        }
    }

        




?>