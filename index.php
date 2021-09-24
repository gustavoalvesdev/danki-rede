<?php 

    session_start();

    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC', 'http://localhost/DankiCode/DankiCode/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost/DankiCode/');

    $app = new DankiCode\Application();

    $app->run();

?>