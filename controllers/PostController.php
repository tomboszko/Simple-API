<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../models/Post.php'; // Assuming 'Post.php' is your model file

class PostController {
    private $postModel;

    public function __construct($db) {
        $this->postModel = new Post($db); // Assuming 'Post' class requires a database connection
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
    include __DIR__ . '/../view.php';
    }
}