<?php
$config = require('config.php');
// connect to our MySQL database
$db = new Database($config['database']);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'The body can not be more than 1,000 characters.';
    }

    if (empty($errors)) {

        $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }

    // <h1 style="font-size:100px">Ah ah ah....</h1><script>alert('Hi FROM JS')</script>
}

require 'views/note-create.view.php';
