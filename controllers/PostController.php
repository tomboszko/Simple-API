<?php

require_once __DIR__ . '/vendor/autoload.php';

class PostController {
    private $postModel;

    public function __construct($db) {
        $this->postModel = new Post;
    }

    public function getAllPosts() {
        $posts = $this->postModel->getPosts();
        return $posts;
    }

    public function getPostById($id) {
        $post = $this->postModel->getPostById($id);
        // ... return or display the post
    }

    
}