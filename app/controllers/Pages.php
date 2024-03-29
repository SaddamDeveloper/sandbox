<?php
    class Pages extends Controller {
        public function __construct()
        {
            $this->postModel = $this->model('post');
        }
        public function index(){
            $posts = $this->postModel->getPost();
            $data = [
                'title' => 'Welcome',
                'posts' => $posts
            ];
            $this->view('pages/index', $data);
        }
        public function about(){
            $this->view('pages/about');
        }
    }
