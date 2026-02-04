<?php

require('Validator.php');

$config = require('config.php');
// connect to our MySQL database
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    $validator = new Validator();


    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1000 characteres is required';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }

    // <h1 style="font-size:100px">Ah ah ah....</h1><script>alert('Hi FROM JS')</script>

    
}

require 'views/notes/create.view.php';
