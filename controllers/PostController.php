<?php

require_once __DIR__ . '/vendor/autoload.php';

class PostController {
    private $postModel;

    

    public function __construct($db) {
        $this->postModel = new Post;
    }

    public function getPosts() {
        $posts = $this->postModel->getPosts();
        return $posts;
    }

  
    public function getPostById($id) {
        // Fetch the post data
        $post = $this->postModel->getPostById($id);

        // Pass the data to the view
        $data = $post;
        include 'view.php';
    }

    
}
