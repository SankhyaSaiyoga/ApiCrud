<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'laravel');

    $connection = mysqli_connect( HOST, USER, PASS, DB ) or die
    ('Unable Connect')
?>