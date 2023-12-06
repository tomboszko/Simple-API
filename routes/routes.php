

<?php


// index.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';
// Include the view file
include 'view.php';
// Include the PostController class
include 'PostController.php';

// Create a new instance of the router
$router = new \Bramus\Router\Router();

// Set the base path if necessary
// $router->setBasePath('/my-subdirectory');

// Define a 404 handler
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    // ... return some 404 page or JSON response
    
});

// Error handling logic
set_exception_handler(function($e) {
    // Handle exceptions, log errors, etc.
});

//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\

// ... after instantiating the router

// welcome page
$router->get('/', function() {
    echo 'Welcome to my blog!';
});

// Define a route for getting all posts
$router->get('/posts', function() {
    $postController = new PostController();
    $posts = $postController->getPosts();
    include 'view.php'; // Assuming 'view.php' is your view file
});

// Define a route for getting a single post by ID
$router->get('/post/(\d+)', function($id) {
    $postController = new PostController();
    $post = $postController->getPostById($id);
    include 'view.php'; // Assuming 'view.php' is your view file
});

// ... define other routes for POST, PUT, DELETE, etc.



