<?php
class PostController extends Controller{

    public function __construct() {
        $this->postModel = $this->model('PostModel');
    }

    public function index(){

        $post = $this->postModel->findAllPosts();
        $data = [
        'posts' => $post
       ];
        $this->view('pages/Post', $data);
    }

    public function insert(){
        if(!isLoggedIn()){
            $this->view('/pages/Admin_login');
        }
        

        $data= [
            'fullname' => '',
            'email' => '',
            'phone' => '',
            'details' => '',
            'adress' => '',
            'fullnameError' => '',
            'emailError' => '',
            'phoneError' => '',
            'detailsError' => '',
            'adressError' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           $data= [
            'user_id' => $_SESSION['user_id'],
            'fullname' => trim($_POST['fullname']),
            'email' => trim($_POST['email']),
            'phone' => trim($_POST['phone']),
            'details' => trim($_POST['details']),
            'adress' => trim($_POST['adress']),
            'created_at' => trim($_POST['created_at']),
        ];

        if ($this->postModel->addPost($data)) {
            echo "<script>alert(\"Post created succefully :)\")</script>";
            header("Location: " . URLROOT . "/PostController/index");
        } else {
            die("Something went wrong, please try again!");
        }

        }

        $this->view('pages/User_profil' ,$data);
    }
    


}