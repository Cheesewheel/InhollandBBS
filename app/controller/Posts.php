<?php   
    class Posts EXTENDS Controller {
        public function index(){
            $data = [];

            $this->view('posts/index');
        }
    }