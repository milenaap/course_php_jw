<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind('Core\Database', function() {
    // connect to our MySQL database
    $config = require base_path('config.php');

    return new Database($config['database']);
});


App::setContainer($container);

