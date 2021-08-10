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



    //  --------------- INSERTT----------------------\\

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



    //  --------------- UPDATE----------------------\\

    public function update($id){
        $post = $this->postModel->findPostById($id);

        $data = [
            'post' => $post,
            'fullname' => '',
            'email' => '',
            'phone' => '',
            'details' => '',
            'adress' => '',
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'user_id' => $_SESSION['user_id'],
                'fullname' => trim($_POST['fullname']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'details' => trim($_POST['details']),
                'adress' => trim($_POST['adress']),
                'created_at' => trim($_POST['created_at']),
            ];

           
                if ($this->postModel->updatePost($data)) {
                    echo "<script>alert(\"Post updated succefully :)\")</script>";
                } else {
                    echo "<script>alert(\"oupsiiiii :( \")</script>";
                }
            } else {
                $this->view('pages/update_post', $data);
            }
        

        $this->view('pages/update_post',$data);
    }
    
//  --------------- DELETE----------------------\\

    public function delete($id) {

        $post = $this->postModel->findPostById($id);

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
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

}