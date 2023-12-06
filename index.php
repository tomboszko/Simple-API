


<?php


// index.php

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Include the Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';
// Include the view file
include 'view.php';

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

// Define a route for getting all posts
$router->get('/posts', function() {
    (new PostController())->getAllPosts();
});

// Define a route for getting a single post by ID
$router->get('/post/(\d+)', function($id) {
    (new PostController())->getPostById($id);
});

// ... define other routes for POST, PUT, DELETE, etc.






