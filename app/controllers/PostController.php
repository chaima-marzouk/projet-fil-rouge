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
}